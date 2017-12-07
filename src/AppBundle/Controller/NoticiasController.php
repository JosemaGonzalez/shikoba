<?php
namespace AppBundle\Controller;
use AppBundle\Entity\Noticias;
use AppBundle\Repository\CursosRepository;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use AppBundle\Repository\NoticiasRepository;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpFoundation\Request;
class NoticiasController extends Controller
{
    /**
     * @Route("/noticias", name="noticias")
     * @Method({"GET", "POST"})
     */
    public function showNoticias(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        /** @var NoticiasRepository $repositoryNoticias */
        $repositoryNoticias = $em->getRepository("AppBundle:Noticias");
        $noticias = $repositoryNoticias->getNoticias();
        return $this->render('convivencia/noticias/noticias.html.twig', array(
            'noticias' => $noticias,
            'user' => $this->getUser(),
        ));

        
    }
    /**
     * @Route("/noticiasForm", name="nuevaNoticia")
     * @Method({"GET", "POST"})
     */
    public function showNoticiasForm(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        /** @var CursosRepository $repositoryACursos */
        $repositoryACursos = $em->getRepository('AppBundle:Cursos');
        /** @var Cursos $cursos */
        $cursos = $repositoryACursos->getCursosGroupByCursos2();
        return $this->render('convivencia/noticias/noticiasForm.html.twig', array(
            'cursos' => $cursos,
            'user' => $this->getUser(),
        ));

        if($request->isMethod('POST')){
            $noticia = new Noticias();
            $noticia->setNoticia_texto($request->get('editor1'));
            $noticia->setIdCurso($request->get('cursosnoticias'));
            $fechaNoticia = \DateTime::createFromFormat('d/m/Y', $request->get('fecha'));
            $noticia->setFecha($fechaNoticia);
            $fechaNoticia = \DateTime::createFromFormat('d/m/Y', $request->get('fechaInicio'));
            $noticia->setFechaInicio($fechaNoticia);
            $fechaNoticia = \DateTime::createFromFormat('d/m/Y', $request->get('fechaFinal'));
            $noticia->setFechaFinal($fechaNoticia);
            $noticia->setPuntos($request->get('puntosnoticias'));

            $em->persist($noticia);
            $em->flush();

            return $this->redirectToRoute("noticias");

        }
    }
    /**
     * @Route("/noticias/borrarNoticia/{id}", name="borrar_noticia")
     * @Method({"GET", "POST"})
     */
    public function deleteNoticias(Noticias $noticia)
    {
        $em = $this->getDoctrine()->getManager();
        $em->remove($noticia);
        $em->flush();
        return $this->redirectToRoute("noticias");
    }
}