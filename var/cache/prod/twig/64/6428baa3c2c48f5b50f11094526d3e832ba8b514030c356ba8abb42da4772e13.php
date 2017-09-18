<?php

/* convivencia/partes/partes.html.twig */
class __TwigTemplate_226971fb0cbfa55c885c51d9852ff38a6cb602b6950eb3d4d5412696299a9566 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "convivencia/partes/partes.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'header' => array($this, 'block_header'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "
    ";
        // line 5
        $this->displayBlock('header', $context, $blocks);
    }

    public function block_header($context, array $blocks = array())
    {
        // line 6
        echo "        <main class=\"w3-container\">
            <h1>Gestion Partes</h1>

            ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "flashBag", array()), "get", array(0 => "parte"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 10
            echo "                <div class=\"w3-panel w3-pale-green w3-round-large\">
                    <p class=\"w3-center\">";
            // line 11
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "</p>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "
            ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "flashBag", array()), "get", array(0 => "parteError"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 16
            echo "                <div class=\"w3-panel w3-pale-red w3-round-large\">
                    <p class=\"w3-center\">";
            // line 17
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "</p>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "

            ";
        // line 23
        echo "            <form action=\"\">
                <div class=\"w3-col l3 m8 w3-section\">
                    ";
        // line 26
        echo "                    ";
        // line 27
        echo "                    ";
        // line 28
        echo "                    <div class=\"i-checks\">
                        ";
        // line 29
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "get", array(0 => "historico"), "method") == "on")) {
            // line 30
            echo "                            <input type=\"checkbox\" name=\"historico\" checked>
                        ";
        } else {
            // line 32
            echo "                            <input type=\"checkbox\" name=\"historico\">
                        ";
        }
        // line 34
        echo "                        <span> Histórico</span>
                    </div>
                    <input type=\"submit\" value=\"Buscar\" class=\"w3-button w3-text-white\"/>
                </div>
                <div class=\"w3-col m3 w3-section\">
                    ";
        // line 40
        echo "                    <a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nuevoParte");
        echo "\" class=\"w3-margin-right\" title=\"Nuevo Parte\"><i
                                class=\"fa fa-plus-circle fa-2x\"></i></a>
                    <a href=\"";
        // line 42
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("export_form_partes");
        echo "\" class=\"w3-margin-right\" title=\"Exportar\"><i class=\"fa fa-download fa-2x\"></i></a>
                </div>
                <div class=\"w3-col m12 w3-responsive w3-section\">
                    <table class=\"tableData stripe\" data-order='[[ 1, \"desc\" ]]'>
                        <thead>
                        <tr>
                            <th>NumParte</th>
                            <th>Fecha</th>
                            <th>Alumno</th>
                            <th>Curso</th>
                            <th>Profesor</th>
                            <th>Tipo</th>
                            <th>Puntos</th>
                            <th>Estado</th>
                            <th>Acciones</th>
                        </tr>
                        </thead>
                        <tbody>
                        ";
        // line 60
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["partes"]) ? $context["partes"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["parte"]) {
            // line 61
            echo "                            ";
            if (($this->getAttribute($this->getAttribute($context["parte"], "idTipo", array()), "tipo", array()) == "Grave")) {
                // line 62
                echo "                                ";
                $context["colorClass"] = "w3-text-red";
                // line 63
                echo "                            ";
            } elseif (($this->getAttribute($this->getAttribute($context["parte"], "idTipo", array()), "tipo", array()) == "Leve")) {
                // line 64
                echo "                                ";
                $context["colorClass"] = "text-orange";
                // line 65
                echo "                            ";
            } else {
                // line 66
                echo "                                ";
                $context["colorClass"] = "w3-text-black";
                // line 67
                echo "                            ";
            }
            // line 68
            echo "                            ";
            if (($this->getAttribute($this->getAttribute($context["parte"], "idEstado", array()), "estado", array()) == "Caducado")) {
                // line 69
                echo "                                ";
                $context["colorClass"] = "w3-text-grey";
                // line 70
                echo "                            ";
            }
            // line 71
            echo "                            <tr class=\"";
            echo twig_escape_filter($this->env, (isset($context["colorClass"]) ? $context["colorClass"] : null), "html", null, true);
            echo "\">
                                <td>";
            // line 72
            echo twig_escape_filter($this->env, $this->getAttribute($context["parte"], "id", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 73
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["parte"], "fecha", array()), "d/m/Y"), "html", null, true);
            echo "</td>
                                <td>
                                    <a href=\"";
            // line 75
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("verAlumno", array("id" => $this->getAttribute($this->getAttribute($context["parte"], "idAlumno", array()), "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["parte"], "idAlumno", array()), "getNombreCompleto", array(), "method"), "html", null, true);
            echo "</a>
                                </td>
                                ";
            // line 77
            if (($this->getAttribute($this->getAttribute($context["parte"], "idAlumno", array()), "idCurso", array()) != null)) {
                // line 78
                echo "                                    <td>
                                        <a href=\"";
                // line 79
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gestion_partes", array("like" => $this->getAttribute($this->getAttribute($this->getAttribute($context["parte"], "idAlumno", array()), "idCurso", array()), "grupo", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["parte"], "idAlumno", array()), "idCurso", array()), "grupo", array()), "html", null, true);
                echo "</a>
                                    </td>
                                ";
            } else {
                // line 82
                echo "                                    <td>Ninguno</td>
                                ";
            }
            // line 84
            echo "                                <td>
                                    ";
            // line 85
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["parte"], "idProfesor", array()), "nombre", array()), "html", null, true);
            echo "
                                </td>
                                <td>";
            // line 87
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["parte"], "idTipo", array()), "tipo", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 88
            echo twig_escape_filter($this->env, $this->getAttribute($context["parte"], "puntos", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 89
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["parte"], "idEstado", array()), "estado", array()), "html", null, true);
            echo "</td>
                                ";
            // line 90
            if ((($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN") == false) && $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_PROFESOR"))) {
                // line 91
                echo "                                    ";
                if (($this->getAttribute($this->getAttribute($this->getAttribute($context["parte"], "idProfesor", array()), "idUsuario", array()), "id", array()) == $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "id", array()))) {
                    // line 92
                    echo "                                        <td><a href=\"";
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nuevoParte");
                    echo "?idParte=";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["parte"], "id", array()), "html", null, true);
                    echo "\"><i
                                                        class=\"fa fa-pencil\" aria-hidden=\"true\"></i></a>
                                            <a class=\"confirm paddingRightLeft\"
                                               href=\"";
                    // line 95
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("borrar_parte", array("id" => $this->getAttribute($context["parte"], "id", array()))), "html", null, true);
                    echo "\"
                                               data-title=\"Eliminar Parte\"><i class=\"fa fa-trash\"
                                                                              aria-hidden=\"true\"></i></a></td>
                                    ";
                } else {
                    // line 99
                    echo "                                        <td></td>
                                    ";
                }
                // line 101
                echo "                                ";
            }
            // line 102
            echo "                                ";
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
                // line 103
                echo "                                    <td><a href=\"";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nuevoParte");
                echo "?idParte=";
                echo twig_escape_filter($this->env, $this->getAttribute($context["parte"], "id", array()), "html", null, true);
                echo "\"><i
                                                    class=\"fa fa-pencil\" aria-hidden=\"true\"></i></a>
                                        <a class=\"confirm paddingRightLeft\"
                                           href=\"";
                // line 106
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("borrar_parte", array("id" => $this->getAttribute($context["parte"], "id", array()))), "html", null, true);
                echo "\"
                                           data-title=\"Eliminar Parte\"><i class=\"fa fa-trash\"
                                                                          aria-hidden=\"true\"></i></a></td>
                                ";
            }
            // line 110
            echo "                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['parte'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 112
        echo "                        </tbody>
                    </table>
                </div>
                ";
        // line 116
        echo "                ";
        // line 117
        echo "                ";
        // line 118
        echo "            </form>
        </main>
    ";
    }

    public function getTemplateName()
    {
        return "convivencia/partes/partes.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  295 => 118,  293 => 117,  291 => 116,  286 => 112,  279 => 110,  272 => 106,  263 => 103,  260 => 102,  257 => 101,  253 => 99,  246 => 95,  237 => 92,  234 => 91,  232 => 90,  228 => 89,  224 => 88,  220 => 87,  215 => 85,  212 => 84,  208 => 82,  200 => 79,  197 => 78,  195 => 77,  188 => 75,  183 => 73,  179 => 72,  174 => 71,  171 => 70,  168 => 69,  165 => 68,  162 => 67,  159 => 66,  156 => 65,  153 => 64,  150 => 63,  147 => 62,  144 => 61,  140 => 60,  119 => 42,  113 => 40,  106 => 34,  102 => 32,  98 => 30,  96 => 29,  93 => 28,  91 => 27,  89 => 26,  85 => 23,  81 => 20,  72 => 17,  69 => 16,  65 => 15,  62 => 14,  53 => 11,  50 => 10,  46 => 9,  41 => 6,  35 => 5,  32 => 4,  29 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "convivencia/partes/partes.html.twig", "/var/www/html/shikoba/app/Resources/views/convivencia/partes/partes.html.twig");
    }
}
