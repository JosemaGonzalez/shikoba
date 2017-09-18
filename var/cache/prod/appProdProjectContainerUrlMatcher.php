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
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/alumno')) {
            // alumno
            if ($pathinfo === '/alumno') {
                return array (  '_controller' => 'AppBundle\\Controller\\AlumnoController::alumnoAction',  '_route' => 'alumno',);
            }

            // verAlumno
            if (preg_match('#^/alumno/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'verAlumno')), array (  '_controller' => 'AppBundle\\Controller\\AlumnoController::showAlumnoAction',));
            }

        }

        // registrarAlumno
        if ($pathinfo === '/registrarAlumno') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_registrarAlumno;
            }

            return array (  '_controller' => 'AppBundle\\Controller\\AlumnoController::registrarAlumnoAction',  '_route' => 'registrarAlumno',);
        }
        not_registrarAlumno:

        // show_carnets
        if ($pathinfo === '/carnets') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_show_carnets;
            }

            return array (  '_controller' => 'AppBundle\\Controller\\AlumnoController::showCarnets',  '_route' => 'show_carnets',);
        }
        not_show_carnets:

        // show_partesAlumno
        if (0 === strpos($pathinfo, '/partes') && preg_match('#^/partes/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'show_partesAlumno')), array (  '_controller' => 'AppBundle\\Controller\\AlumnoController::mostrarTodosPartes',));
        }

        // show_partesSanciones
        if (0 === strpos($pathinfo, '/sanciones') && preg_match('#^/sanciones/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'show_partesSanciones')), array (  '_controller' => 'AppBundle\\Controller\\AlumnoController::mostrarTodasSanciones',));
        }

        // change_image
        if ($pathinfo === '/alumnoImage') {
            return array (  '_controller' => 'AppBundle\\Controller\\AlumnoController::changeProfileImage',  '_route' => 'change_image',);
        }

        if (0 === strpos($pathinfo, '/carnet/export')) {
            // admin_export_carnets
            if ($pathinfo === '/carnet/exportCarnet') {
                return array (  '_controller' => 'AppBundle\\Controller\\AlumnoController::exportSanciones',  '_route' => 'admin_export_carnets',);
            }

            // export_form_carnets
            if ($pathinfo === '/carnet/exportFormCarnets') {
                return array (  '_controller' => 'AppBundle\\Controller\\AlumnoController::exportCarnets',  '_route' => 'export_form_carnets',);
            }

        }

        // index
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'index');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\ConvivenciaController::indexAction',  '_route' => 'index',);
        }

        // login
        if ($pathinfo === '/login') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_login;
            }

            return array (  '_controller' => 'AppBundle\\Controller\\ConvivenciaController::loginAction',  '_route' => 'login',);
        }
        not_login:

        // convivencia_registro
        if ($pathinfo === '/registro') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_convivencia_registro;
            }

            return array (  '_controller' => 'AppBundle\\Controller\\ConvivenciaController::registroAction',  '_route' => 'convivencia_registro',);
        }
        not_convivencia_registro:

        // logout
        if ($pathinfo === '/logout') {
            return array (  '_controller' => 'AppBundle\\Controller\\ConvivenciaController::logoutAction',  '_route' => 'logout',);
        }

        // admin
        if ($pathinfo === '/admin') {
            return array (  '_controller' => 'AppBundle\\Controller\\ConvivenciaController::adminAction',  '_route' => 'admin',);
        }

        // admin_diario_aula
        if ($pathinfo === '/diario') {
            return array (  '_controller' => 'AppBundle\\Controller\\ConvivenciaController::gestionDiarioAula',  '_route' => 'admin_diario_aula',);
        }

        // change_password
        if ($pathinfo === '/changePassword') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_change_password;
            }

            return array (  '_controller' => 'AppBundle\\Controller\\ConvivenciaController::changePassword',  '_route' => 'change_password',);
        }
        not_change_password:

        if (0 === strpos($pathinfo, '/admin/import')) {
            // admin_import
            if ($pathinfo === '/admin/importAlumno') {
                return array (  '_controller' => 'AppBundle\\Controller\\ConvivenciaController::importAlumnoAction',  '_route' => 'admin_import',);
            }

            // admin_import_profesor
            if ($pathinfo === '/admin/importProfesor') {
                return array (  '_controller' => 'AppBundle\\Controller\\ConvivenciaController::importProfesorAction',  '_route' => 'admin_import_profesor',);
            }

        }

        if (0 === strpos($pathinfo, '/re')) {
            // recuperarPassword
            if ($pathinfo === '/recuperarPassword') {
                return array (  '_controller' => 'AppBundle\\Controller\\ConvivenciaController::recuperarPassword',  '_route' => 'recuperarPassword',);
            }

            // reset_password
            if ($pathinfo === '/resetPassword') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_reset_password;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\ConvivenciaController::resetPassword',  '_route' => 'reset_password',);
            }
            not_reset_password:

        }

        // homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        // show_diario
        if ($pathinfo === '/diarioAula') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_show_diario;
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DiarioAulaController::showDiario',  '_route' => 'show_diario',);
        }
        not_show_diario:

        // edit_diario
        if (0 === strpos($pathinfo, '/modificarDiarioAula') && preg_match('#^/modificarDiarioAula/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_edit_diario;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'edit_diario')), array (  '_controller' => 'AppBundle\\Controller\\DiarioAulaController::editDiario',));
        }
        not_edit_diario:

        // gestion_partes
        if ($pathinfo === '/partes') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_gestion_partes;
            }

            return array (  '_controller' => 'AppBundle\\Controller\\PartesController::showGestionPartes',  '_route' => 'gestion_partes',);
        }
        not_gestion_partes:

        // nuevoParte
        if ($pathinfo === '/nuevoParte') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_nuevoParte;
            }

            return array (  '_controller' => 'AppBundle\\Controller\\PartesController::crearParteAction',  '_route' => 'nuevoParte',);
        }
        not_nuevoParte:

        // borrar_parte
        if (0 === strpos($pathinfo, '/borrarParte') && preg_match('#^/borrarParte/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_borrar_parte;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'borrar_parte')), array (  '_controller' => 'AppBundle\\Controller\\PartesController::removeParte',));
        }
        not_borrar_parte:

        if (0 === strpos($pathinfo, '/p')) {
            if (0 === strpos($pathinfo, '/parte/export')) {
                // admin_export_partes
                if ($pathinfo === '/parte/exportPartes') {
                    return array (  '_controller' => 'AppBundle\\Controller\\PartesController::exportPartes',  '_route' => 'admin_export_partes',);
                }

                // export_form_partes
                if ($pathinfo === '/parte/exportFormPartes') {
                    return array (  '_controller' => 'AppBundle\\Controller\\PartesController::exportForm',  '_route' => 'export_form_partes',);
                }

            }

            if (0 === strpos($pathinfo, '/perfil')) {
                // perfil_index
                if (rtrim($pathinfo, '/') === '/perfil') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
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
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_perfil_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'perfil_show')), array (  '_controller' => 'AppBundle\\Controller\\PerfilController::showAction',));
                }
                not_perfil_show:

            }

        }

        // nueva_sancion
        if ($pathinfo === '/nuevaSancion') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_nueva_sancion;
            }

            return array (  '_controller' => 'AppBundle\\Controller\\SancionController::crearSancionAction',  '_route' => 'nueva_sancion',);
        }
        not_nueva_sancion:

        // gestion_sanciones
        if ($pathinfo === '/sanciones') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_gestion_sanciones;
            }

            return array (  '_controller' => 'AppBundle\\Controller\\SancionController::showGestionSanciones',  '_route' => 'gestion_sanciones',);
        }
        not_gestion_sanciones:

        // borrar_sancion
        if (0 === strpos($pathinfo, '/borrarSancion') && preg_match('#^/borrarSancion/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_borrar_sancion;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'borrar_sancion')), array (  '_controller' => 'AppBundle\\Controller\\SancionController::removeSancion',));
        }
        not_borrar_sancion:

        if (0 === strpos($pathinfo, '/sancion/export')) {
            // admin_export_sanciones
            if ($pathinfo === '/sancion/exportSanciones') {
                return array (  '_controller' => 'AppBundle\\Controller\\SancionController::exportSanciones',  '_route' => 'admin_export_sanciones',);
            }

            // export_form_sanciones
            if ($pathinfo === '/sancion/exportFormSanciones') {
                return array (  '_controller' => 'AppBundle\\Controller\\SancionController::exportSancionForm',  '_route' => 'export_form_sanciones',);
            }

        }

        // tutor
        if ($pathinfo === '/tutor') {
            return array (  '_controller' => 'AppBundle\\Controller\\TutorController::tutorAction',  '_route' => 'tutor',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
