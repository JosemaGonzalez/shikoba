<?php
namespace AppBundle\Controller;
use AppBundle\Entity\Noticias;
use AppBundle\Repository\CursosRepository;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use AppBundle\Repository\NoticiasRepository;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
class NoticiasController extends Controller
{
    /**
     * @Route("/formulario", name="formulario")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $noticia = new Noticias();

        $form = $this->createFormBuilder($noticia)
            ->add('noticiaTexto', TextType::class)
            ->add('puntos', IntegerType::class)
            ->add('idCurso', IntegerType::class)
            //->add('idCurso', IntegerType::class)
            //->add('fechaInicio', DateType::class)
            //->add('fechaFinal', DateType::class)
            ->add('save', SubmitType::class, array('label' => 'Añadir noticia'))
            ->getForm();

            $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // $form->getData() holds the submitted values
            // but, the original `$task` variable has also been updated
            $noticia->setIdCurso($request->get('idCurso'));

            $noticia = $form->getData();

            //$noticia->setNoticiaTexto($request->get('noticiaTexto'));
            //$noticia->setPuntos($request->get('puntos'));


            // ... perform some action, such as saving the task to the database
            // for example, if Task is a Doctrine entity, save it!
            $em = $this->getDoctrine()->getManager();
            $em->persist($noticia);
            $em->flush();

            return $this->redirectToRoute('noticias');
        }

        return $this->render('convivencia/noticias/new.html.twig', array(
            'form' => $form->createView(),
        ));
    }
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
       

        if(!empty($request->query->get('editor1'))){
            $noticia = new Noticias();
            $noticia->setNoticia_texto($request->query->get('editor1'));

            $curso=$repositoryACursos->findOneById($request->query->get('cursos')[0]);
            $noticia->setIdCurso($curso);
            $noticia->setPuntos($request->query->get('puntos')[0]);
            

            //print_r($curso);
         // print_r($request->query->get('cursos'));

          // die();
             //$fechaNoticia = \DateTime::createFromFormat('d/m/Y', $request->get('fecha'));
            //$noticia->setFecha($fechaNoticia);
            $fechaNoticia = \DateTime::createFromFormat('d/m/Y', $request->get('fechaInicio'));
            $noticia->setFechaInicio($fechaNoticia);
            $fechaNoticia = \DateTime::createFromFormat('d/m/Y', $request->get('fechaFinal'));
            $noticia->setFechaFinal($fechaNoticia);

            $em->persist($noticia);
            $em->flush();


        }
         return $this->render('convivencia/noticias/noticiasForm.html.twig', array(
            'cursos' => $cursos,
            'user' => $this->getUser(),
        ));
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