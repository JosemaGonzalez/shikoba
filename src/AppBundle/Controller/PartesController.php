<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Alumno;
use AppBundle\Entity\Cursos;
use AppBundle\Entity\EstadosParte;
use AppBundle\Entity\Partes;
use AppBundle\Entity\Profesores;
use AppBundle\Entity\Sanciones;
use AppBundle\Entity\TipoParte;
use AppBundle\Form\ParteExportFormType;
use AppBundle\Form\ParteFormType;
use AppBundle\Repository\AlumnoRepository;
use AppBundle\Repository\CursosRepository;
use AppBundle\Repository\PartesRepository;
use AppBundle\Repository\ProfesoresRepository;
use AppBundle\Repository\SancionesRepository;
use AppBundle\Services\AlumnoHelper;
use AppBundle\Services\PartesHelper;
use AppBundle\Utils\CsvResponse;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\PersistentCollection;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\Config\Definition\Exception\Exception;
use Symfony\Component\HttpFoundation\Request;

class PartesController extends Controller
{

    const ESTADO_INICIADO = 'Iniciado';

    /**
     * @Route("/partes", name="gestion_partes")
     * @Method({"GET", "POST"})
     */
    public function showGestionPartes(Request $request)
    {

        $em = $this->getDoctrine()->getManager();
        /** @var PartesRepository $repositoryPartes */
        $repositoryPartes = $em->getRepository("AppBundle:Partes");
        if ($request->query->has('like')) {
            if ($request->get('historico') != null)
                $query = $repositoryPartes->getPartesLike($request->get('like'), true);
            else
                $query = $repositoryPartes->getPartesLike($request->get('like'));
        } else {
            if ($request->get('historico') != null)
                $query = $repositoryPartes->getPartesOrdenados(true);
            else
                $query = $repositoryPartes->getPartesOrdenados();
        }

        $partes = $query;
        return $this->render('convivencia/partes/partes.html.twig', array(
            'partes' => $partes,
            'user' => $this->getUser(),
        ));
    }

    /**
     * @Route("/nuevoParte", name="nuevoParte")
     * @Method({"GET", "POST"})
     */
    public function crearParteAction(Request $request)
    {
        $recupera = false;
        $em = $this->getDoctrine()->getManager();
        /** @var AlumnoHelper $alumnoHelper */
        $alumnoHelper = $this->get('app.alumnoHelper');
        /** @var PartesHelper $parteHelper */
        $parteHelper = $this->get('app.partesHelper');
        $repositoryAccionPartes = $em->getRepository('AppBundle:AccionEstadoParte');
        /** @var CursosRepository $repositoryACursos */
        $repositoryACursos = $em->getRepository('AppBundle:Cursos');
        /** @var SancionesRepository $repositorySanciones */
        $repositorySanciones = $em->getRepository('AppBundle:Sanciones');
        /** @var Cursos $curso */
        $cursos = $repositoryACursos->getCursosGroupByCursos();
        /** @var Alumno $alumnos */
        $alumnos = $alumnoHelper->getAlumnosByRequest($request);
        $parte = $parteHelper->getParteFromRequest($request);
        if ($request->query->has('idParte')) {
            if ((!in_array('ROLE_ADMIN', $this->getUser()->getRoles()) &&
                    in_array('ROLE_PROFESOR', $this->getUser()->getRoles())) &&
                $parte->getIdProfesor()->getIdUsuario()->getId() != $this->getUser()->getId()
            )
                return $this->redirectToRoute('index');
            $recupera = $parteHelper->parteRecupera($parte);
        }
        if ($parteHelper->recuperarPuntos($request) ||
            $parteHelper->changeEstado($request, $parte)
        )
            return $this->redirectToRoute("nuevoParte", array(
                'idParte' => $parte->getId()));

        if (in_array('ROLE_PROFESOR', $this->getUser()->getRoles()))
            $compound = [$alumnos, $parteHelper->getProfesorByUser($this->getUser())];
        else
            $compound = [$alumnos, $parteHelper->getAllProfesores()];

        $form = $this->createForm(ParteFormType::class, $parte, array(
            'compound' => $compound,
        ));
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $fechaParte = \DateTime::createFromFormat('d/m/Y', $request->get('fecha'));
            $parte->setFecha($fechaParte);
            $em->persist($parte);
            $em->flush();
            $parteHelper->createSancionFromRequest($request, $parte);
            return $this->redirectToRoute("gestion_partes");
        }

        $accion = $repositoryAccionPartes->findOneByEstado($parte->getIdEstado());
        $sanciones = $repositorySanciones->getSancionesByPartes($parte);

        return $this->render('convivencia/partes/partesForm.html.twig', array(
            'form' => $form->createView(),
            'recupera' => $recupera,
            'cursos' => $cursos,
            'accion' => $accion,
            'parte' => $parte,
            'sanciones' => $sanciones
        ));
    }

    /**
     * @Route("/borrarParte/{id}", name="borrar_parte")
     * @Method({"GET"})
     */
    public function removeParte(Partes $parte)
    {
        if ((!in_array('ROLE_ADMIN', $this->getUser()->getRoles()) &&
                in_array('ROLE_PROFESOR', $this->getUser()->getRoles())) &&
            $parte->getIdProfesor()->getIdUsuario()->getId() != $this->getUser()->getId()
        )
            return $this->redirectToRoute('index');

        $em = $this->getDoctrine()->getEntityManager();
        /** @var SancionesRepository $repositorySanciones */
        $repositorySanciones = $em->getRepository('AppBundle:Sanciones');

        try {
            $em = $this->getDoctrine()->getManager();
            $em->remove($parte);
            $sanciones = $repositorySanciones->getSancionesByPartes($parte);
            foreach ($sanciones as $sancion)
                $em->remove($sancion);
            $em->flush();
            $this->addFlash("parte", "Se ha eliminado correctamente");
        } catch (Exception $e) {
            $this->addFlash("parteError", "No se ha podido eliminar la sanción");
        }
        return $this->redirectToRoute("gestion_partes");
    }

    /**
     * @Route("/parte/exportPartes", name="admin_export_partes")
     */
    public function exportPartes(Request $request)
    {
        try {
            /** @var EntityManager $em */
            $em = $this->get('doctrine.orm.entity_manager');
            $alumnosSeleccionados = $request->get('alumnos');
            $profesoresSeleccionados = $request->get('profesores');
            $fechaSeleccionada = $request->get('fecha');
            /** @var AlumnoRepository $repositoryAlumnos */
            $repositoryAlumnos = $em->getRepository('AppBundle:Alumno');
            /** @var ProfesoresRepository $repositoryProfesores */
            $repositoryProfesores = $em->getRepository('AppBundle:Profesores');
            if($alumnosSeleccionados == "Todos"){
                $alumnos = $repositoryAlumnos->findAll();
            }
            else{
                $alumnos = $repositoryAlumnos->findById($alumnosSeleccionados);
            }

            if($profesoresSeleccionados == "Todos"){
                $profesores = $repositoryProfesores->findAll();
            }
            else{
                $profesores = $repositoryProfesores->findById($profesoresSeleccionados);
            }
            /** @var PartesRepository $repositoryPartes */
            $repositoryPartes = $em->getRepository('AppBundle:Partes');
            $data = $repositoryPartes->getPartesExportar($fechaSeleccionada, $alumnos, $profesores);
            $arrData = [];
            $arrData[] = ['Id', 'Fecha', 'Descripción', 'Tareas', 'Hora Salida Aula', 'Hora Llegada Jefatura', 'Formato', 'Observación', 'Puntos', 'Estado', 'Tipo', 'Alumno', 'Profesor', 'Recupera Punto', 'Fecha Confirmacion', 'Fecha Comunicación'];
            foreach ($data as $parte) {
                $parteArray = (array)$parte;
                $parteCsv = [];
                foreach ($parteArray as $parteValue)
                    if ($parteValue instanceof Profesores || $parteValue instanceof Alumno)
                        $parteCsv[] = $parteValue->getNombreCompleto();
                    elseif ($parteValue instanceof TipoParte)
                        $parteCsv[] = $parteValue->getTipo();
                    elseif ($parteValue instanceof EstadosParte)
                        $parteCsv[] = $parteValue->getEstado();
                    elseif ($parteValue instanceof \DateTime) {
                        $year = $parteValue->format('Y');
                        if ($parteValue == null)
                            $fecha = "Sin fecha";
                        elseif ($year == '1970')
                            $fecha = $parteValue->format('H:i:s');
                        else
                            $fecha = $parteValue->format('Y-m-d H:i:s');
                        $parteCsv[] = $fecha;
                    } elseif (!$parteValue instanceof PersistentCollection)
                        $parteCsv[] = $parteValue;
                $arrData[$parte->getId()] = $parteCsv;
            }
            $response = new CsvResponse($arrData, 200);
            $response->setFilename("Partes.xls");
            return $response;
        } catch (\Exception $e) {
            $this->addFlash('exportarError', 'No se ha podido exportar');
            return $this->redirectToRoute('export_form_partes');
        }
    }

    /**
     * @Route("/parte/exportFormPartes", name="export_form_partes")
     */
    public function exportForm()
    {
        $em = $this->getDoctrine()->getManager();
        /** @var AlumnoRepository $repositoryAlumnos */
        $repositoryAlumnos = $em->getRepository('AppBundle:Alumno');
        /** @var ProfesoresRepository $repositoryProfesores */
        $repositoryProfesores = $em->getRepository('AppBundle:Profesores');
        $alumnos = $repositoryAlumnos->findAll();
        $profesores = $repositoryProfesores->findAll();

        return $this->render('convivencia/exportPartes.html.twig', array(
            'alumnos' => $alumnos,
            'profesores' => $profesores,
        ));
    }

}
