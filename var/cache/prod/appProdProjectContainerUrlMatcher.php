<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdProjectContainerUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $trimmedPathinfo = rtrim($pathinfo, '/');
        $context = $this->context;
        $request = $this->request;
        $requestMethod = $canonicalMethod = $context->getMethod();
        $scheme = $context->getScheme();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }


        if (0 === strpos($pathinfo, '/alumno')) {
            // alumno
            if ('/alumno' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\AlumnoController::alumnoAction',  '_route' => 'alumno',);
            }

            // verAlumno
            if (preg_match('#^/alumno/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'verAlumno')), array (  '_controller' => 'AppBundle\\Controller\\AlumnoController::showAlumnoAction',));
            }

            // change_image
            if ('/alumnoImage' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\AlumnoController::changeProfileImage',  '_route' => 'change_image',);
            }

        }

        elseif (0 === strpos($pathinfo, '/admin')) {
            // admin_security
            if ('/admin/copias' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\ConvivenciaController::securityAction',  '_route' => 'admin_security',);
            }

            // admin
            if ('/admin' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\ConvivenciaController::adminAction',  '_route' => 'admin',);
            }

            // admin_import
            if ('/admin/importAlumno' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\ConvivenciaController::importAlumnoAction',  '_route' => 'admin_import',);
            }

            // admin_import_profesor
            if ('/admin/importProfesor' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\ConvivenciaController::importProfesorAction',  '_route' => 'admin_import_profesor',);
            }

        }

        elseif (0 === strpos($pathinfo, '/re')) {
            // registrarAlumno
            if ('/registrarAlumno' === $pathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_registrarAlumno;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\AlumnoController::registrarAlumnoAction',  '_route' => 'registrarAlumno',);
            }
            not_registrarAlumno:

            // convivencia_registro
            if ('/registro' === $pathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_convivencia_registro;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\ConvivenciaController::registroAction',  '_route' => 'convivencia_registro',);
            }
            not_convivencia_registro:

            // recuperarPassword
            if ('/recuperarPassword' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\ConvivenciaController::recuperarPassword',  '_route' => 'recuperarPassword',);
            }

            // reset_password
            if ('/resetPassword' === $pathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_reset_password;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\ConvivenciaController::resetPassword',  '_route' => 'reset_password',);
            }
            not_reset_password:

        }

        elseif (0 === strpos($pathinfo, '/carnet')) {
            // show_carnets
            if ('/carnets' === $pathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_show_carnets;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\AlumnoController::showCarnets',  '_route' => 'show_carnets',);
            }
            not_show_carnets:

            // admin_export_carnets
            if ('/carnet/exportCarnet' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\AlumnoController::exportSanciones',  '_route' => 'admin_export_carnets',);
            }

            // export_form_carnets
            if ('/carnet/exportFormCarnets' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\AlumnoController::exportCarnets',  '_route' => 'export_form_carnets',);
            }

        }

        // change_password
        if ('/changePassword' === $pathinfo) {
            if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                $allow = array_merge($allow, array('GET', 'POST'));
                goto not_change_password;
            }

            return array (  '_controller' => 'AppBundle\\Controller\\ConvivenciaController::changePassword',  '_route' => 'change_password',);
        }
        not_change_password:

        if (0 === strpos($pathinfo, '/parte')) {
            if (0 === strpos($pathinfo, '/partes')) {
                // show_partesAlumno
                if (preg_match('#^/partes/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'show_partesAlumno')), array (  '_controller' => 'AppBundle\\Controller\\AlumnoController::mostrarTodosPartes',));
                }

                // gestion_partes
                if ('/partes' === $pathinfo) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_gestion_partes;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\PartesController::showGestionPartes',  '_route' => 'gestion_partes',);
                }
                not_gestion_partes:

            }

            // admin_export_partes
            if ('/parte/exportPartes' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\PartesController::exportPartes',  '_route' => 'admin_export_partes',);
            }

            // export_form_partes
            if ('/parte/exportFormPartes' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\PartesController::exportForm',  '_route' => 'export_form_partes',);
            }

        }

        elseif (0 === strpos($pathinfo, '/perfil')) {
            // perfil_index
            if ('/perfil' === $trimmedPathinfo) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_perfil_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'perfil_index');
                }

                return array (  '_controller' => 'AppBundle\\Controller\\PerfilController::indexAction',  '_route' => 'perfil_index',);
            }
            not_perfil_index:

            // perfil_show
            if (preg_match('#^/perfil/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_perfil_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'perfil_show')), array (  '_controller' => 'AppBundle\\Controller\\PerfilController::showAction',));
            }
            not_perfil_show:

        }

        elseif (0 === strpos($pathinfo, '/sancion')) {
            if (0 === strpos($pathinfo, '/sanciones')) {
                // show_partesSanciones
                if (preg_match('#^/sanciones/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'show_partesSanciones')), array (  '_controller' => 'AppBundle\\Controller\\AlumnoController::mostrarTodasSanciones',));
                }

                // gestion_sanciones
                if ('/sanciones' === $pathinfo) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_gestion_sanciones;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\SancionController::showGestionSanciones',  '_route' => 'gestion_sanciones',);
                }
                not_gestion_sanciones:

            }

            // admin_export_sanciones
            if ('/sancion/exportSanciones' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\SancionController::exportSanciones',  '_route' => 'admin_export_sanciones',);
            }

            // export_form_sanciones
            if ('/sancion/exportFormSanciones' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\SancionController::exportSancionForm',  '_route' => 'export_form_sanciones',);
            }

        }

        // index
        if ('' === $trimmedPathinfo) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'index');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\ConvivenciaController::indexAction',  '_route' => 'index',);
        }

        // login
        if ('/login' === $pathinfo) {
            if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                $allow = array_merge($allow, array('GET', 'POST'));
                goto not_login;
            }

            return array (  '_controller' => 'AppBundle\\Controller\\ConvivenciaController::loginAction',  '_route' => 'login',);
        }
        not_login:

        // logout
        if ('/logout' === $pathinfo) {
            return array (  '_controller' => 'AppBundle\\Controller\\ConvivenciaController::logoutAction',  '_route' => 'logout',);
        }

        if (0 === strpos($pathinfo, '/diario')) {
            // admin_diario_aula
            if ('/diario' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\ConvivenciaController::gestionDiarioAula',  '_route' => 'admin_diario_aula',);
            }

            // show_diario
            if ('/diarioAula' === $pathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_show_diario;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\DiarioAulaController::showDiario',  '_route' => 'show_diario',);
            }
            not_show_diario:

        }

        // homepage
        if ('' === $trimmedPathinfo) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        // edit_diario
        if (0 === strpos($pathinfo, '/modificarDiarioAula') && preg_match('#^/modificarDiarioAula/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                $allow = array_merge($allow, array('GET', 'POST'));
                goto not_edit_diario;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'edit_diario')), array (  '_controller' => 'AppBundle\\Controller\\DiarioAulaController::editDiario',));
        }
        not_edit_diario:

        // nuevoParte
        if ('/nuevoParte' === $pathinfo) {
            if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                $allow = array_merge($allow, array('GET', 'POST'));
                goto not_nuevoParte;
            }

            return array (  '_controller' => 'AppBundle\\Controller\\PartesController::crearParteAction',  '_route' => 'nuevoParte',);
        }
        not_nuevoParte:

        // nueva_sancion
        if ('/nuevaSancion' === $pathinfo) {
            if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                $allow = array_merge($allow, array('GET', 'POST'));
                goto not_nueva_sancion;
            }

            return array (  '_controller' => 'AppBundle\\Controller\\SancionController::crearSancionAction',  '_route' => 'nueva_sancion',);
        }
        not_nueva_sancion:

        // borrar_parte
        if (0 === strpos($pathinfo, '/borrarParte') && preg_match('#^/borrarParte/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            if ('GET' !== $canonicalMethod) {
                $allow[] = 'GET';
                goto not_borrar_parte;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'borrar_parte')), array (  '_controller' => 'AppBundle\\Controller\\PartesController::removeParte',));
        }
        not_borrar_parte:

        // borrar_sancion
        if (0 === strpos($pathinfo, '/borrarSancion') && preg_match('#^/borrarSancion/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            if ('GET' !== $canonicalMethod) {
                $allow[] = 'GET';
                goto not_borrar_sancion;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'borrar_sancion')), array (  '_controller' => 'AppBundle\\Controller\\SancionController::removeSancion',));
        }
        not_borrar_sancion:

        // tutor
        if ('/tutor' === $pathinfo) {
            return array (  '_controller' => 'AppBundle\\Controller\\TutorController::tutorAction',  '_route' => 'tutor',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
