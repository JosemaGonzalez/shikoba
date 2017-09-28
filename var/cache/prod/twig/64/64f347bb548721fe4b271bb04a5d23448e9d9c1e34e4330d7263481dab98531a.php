<?php

/* convivencia/alumno/carnets.html.twig */
class __TwigTemplate_27d4f3e347b45a1b2ffc91bc283f148e34ce4501e507264bf68cb5b09c756e73 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "convivencia/alumno/carnets.html.twig", 1);
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

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "
    ";
        // line 6
        $this->displayBlock('header', $context, $blocks);
    }

    public function block_header($context, array $blocks = array())
    {
        // line 7
        echo "        <main class=\"w3-container\">
            <h1>Carnets de puntos</h1>
            <form action=\"\">
                <div class=\"w3-row-padding\">
                    <div class=\"w3-col l3 m8 w3-section\">
                        ";
        // line 13
        echo "                        ";
        // line 14
        echo "                        ";
        // line 15
        echo "                        <select name=\"puntosFiltro\" class=\"w3-select w3-col s8 l4 m6\" id=\"carnetFilterPuntos\">
                            ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["puntosSelect"]) ? $context["puntosSelect"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["puntos"]) {
            // line 17
            echo "                                ";
            if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "get", array(0 => "puntosFiltro"), "method") == $context["puntos"])) {
                // line 18
                echo "                                    <option value=\"";
                echo twig_escape_filter($this->env, $context["puntos"], "html", null, true);
                echo "\" selected>";
                echo twig_escape_filter($this->env, $context["puntos"], "html", null, true);
                echo "</option>
                                ";
            } else {
                // line 20
                echo "                                    <option value=\"";
                echo twig_escape_filter($this->env, $context["puntos"], "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["puntos"], "html", null, true);
                echo "</option>
                                ";
            }
            // line 22
            echo "                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['puntos'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "                        </select>
                        <input type=\"submit\" value=\"Buscar\" class=\"w3-button w3-text-white\"/>
                    </div>
                    <div class=\"w3-col m3 w3-section\">
                        <a href=\"";
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("export_form_carnets");
        echo "\" class=\"w3-margin-right\" title=\"Exportar\"><i class=\"fa fa-download fa-2x\"></i></a>
                    </div>
                </div>

                <div class=\"w3-col m12 w3-responsive w3-section\">
                    <table class=\"tableDataCarnets stripe\" data-order='[[ 1, \"desc\" ]]'>
                        <thead>
                        <tr>
                            <th>Alumnado</th>
                            <th>Puntos</th>
                            <th>Grupo</th>
                            <th>Medida</th>
                        </tr>
                        </thead>
                        <tbody>
                        ";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["arrayCarnetData"]) ? $context["arrayCarnetData"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["carnet"]) {
            // line 43
            echo "                            ";
            if (($this->getAttribute($this->getAttribute($context["carnet"], "alumno", array()), "puntos", array()) == 0)) {
                // line 44
                echo "                                ";
                $context["colorClass"] = "w3-text-green";
                // line 45
                echo "                            ";
            } elseif ((($this->getAttribute($this->getAttribute($context["carnet"], "alumno", array()), "puntos", array()) > 0) && ($this->getAttribute($this->getAttribute($context["carnet"], "alumno", array()), "puntos", array()) < 7))) {
                // line 46
                echo "                                ";
                $context["colorClass"] = "text-orange";
                // line 47
                echo "                            ";
            } elseif (($this->getAttribute($this->getAttribute($context["carnet"], "alumno", array()), "puntos", array()) == 7)) {
                // line 48
                echo "                                ";
                $context["colorClass"] = "w3-text-pink";
                // line 49
                echo "                            ";
            } elseif ((($this->getAttribute($this->getAttribute($context["carnet"], "alumno", array()), "puntos", array()) > 7) && ($this->getAttribute($this->getAttribute($context["carnet"], "alumno", array()), "puntos", array()) < 10))) {
                // line 50
                echo "                                ";
                $context["colorClass"] = "text-darkRed";
                // line 51
                echo "                            ";
            } elseif (($this->getAttribute($this->getAttribute($context["carnet"], "alumno", array()), "puntos", array()) >= 10)) {
                // line 52
                echo "                                ";
                $context["colorClass"] = "w3-text-red";
                // line 53
                echo "                            ";
            } else {
                // line 54
                echo "                                ";
                $context["colorClass"] = "w3-text-black";
                // line 55
                echo "                            ";
            }
            // line 56
            echo "                            <tr class=\"";
            echo twig_escape_filter($this->env, (isset($context["colorClass"]) ? $context["colorClass"] : null), "html", null, true);
            echo "\">
                                <td>
                                    <a href=\"";
            // line 58
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("verAlumno", array("id" => $this->getAttribute($this->getAttribute($context["carnet"], "alumno", array()), "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["carnet"], "alumno", array()), "getNombreCompleto", array(), "method"), "html", null, true);
            echo "</a>
                                </td>
                                <td>";
            // line 60
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["carnet"], "alumno", array()), "puntos", array()), "html", null, true);
            echo "</td>
                                ";
            // line 61
            if (($this->getAttribute($this->getAttribute($context["carnet"], "alumno", array()), "idCurso", array()) != null)) {
                // line 62
                echo "                                    <td>
                                        <a href=\"";
                // line 63
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("show_carnets", array("like" => $this->getAttribute($this->getAttribute($this->getAttribute($context["carnet"], "alumno", array()), "idCurso", array()), "grupo", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["carnet"], "alumno", array()), "idCurso", array()), "grupo", array()), "html", null, true);
                echo "</a>
                                    </td>
                                ";
            } else {
                // line 66
                echo "                                    <td>Ninguno</td>
                                ";
            }
            // line 68
            echo "                                ";
            if ((twig_length_filter($this->env, $this->getAttribute($context["carnet"], "arraySanciones", array())) > 0)) {
                // line 69
                echo "                                    <td>
                                        ";
                // line 70
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["carnet"], "arraySanciones", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["sancion"]) {
                    // line 71
                    echo "                                            ";
                    if ((($this->getAttribute($this->getAttribute($context["sancion"], "idEstado", array()), "estado", array()) == "Iniciada") || ($this->getAttribute($this->getAttribute($context["sancion"], "idEstado", array()), "estado", array()) == "Vigente"))) {
                        // line 72
                        echo "                                            <a href=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nueva_sancion", array("idSancion" => $this->getAttribute($context["sancion"], "id", array()))), "html", null, true);
                        echo "\">
                                                (";
                        // line 73
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["sancion"], "fecha", array()), "d/m/Y"), "html", null, true);
                        echo " - ";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["sancion"], "idTipo", array()), "tipo", array()), "html", null, true);
                        echo "
                                                - ";
                        // line 74
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["sancion"], "idEstado", array()), "estado", array()), "html", null, true);
                        echo ")</a><br/>
                                            ";
                    }
                    // line 76
                    echo "                                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sancion'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 77
                echo "                                    </td>
                                ";
            } else {
                // line 79
                echo "                                    ";
                if (($this->getAttribute($this->getAttribute($context["carnet"], "alumno", array()), "puntos", array()) > 0)) {
                    // line 80
                    echo "                                        <td><a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nueva_sancion", array("idAlumno" => $this->getAttribute($this->getAttribute($context["carnet"], "alumno", array()), "id", array()))), "html", null, true);
                    echo "\">Crear
                                                Sanción</a></td>
                                        ";
                    // line 83
                    echo "                                    ";
                } else {
                    // line 84
                    echo "                                        <td></td>
                                    ";
                }
                // line 86
                echo "                                ";
            }
            // line 87
            echo "                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['carnet'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 89
        echo "                        </tbody>
                    </table>
                </div>
                ";
        // line 93
        echo "                ";
        // line 94
        echo "                ";
        // line 95
        echo "            </form>
        </main>
    ";
    }

    public function getTemplateName()
    {
        return "convivencia/alumno/carnets.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  259 => 95,  257 => 94,  255 => 93,  250 => 89,  243 => 87,  240 => 86,  236 => 84,  233 => 83,  227 => 80,  224 => 79,  220 => 77,  214 => 76,  209 => 74,  203 => 73,  198 => 72,  195 => 71,  191 => 70,  188 => 69,  185 => 68,  181 => 66,  173 => 63,  170 => 62,  168 => 61,  164 => 60,  157 => 58,  151 => 56,  148 => 55,  145 => 54,  142 => 53,  139 => 52,  136 => 51,  133 => 50,  130 => 49,  127 => 48,  124 => 47,  121 => 46,  118 => 45,  115 => 44,  112 => 43,  108 => 42,  90 => 27,  84 => 23,  78 => 22,  70 => 20,  62 => 18,  59 => 17,  55 => 16,  52 => 15,  50 => 14,  48 => 13,  41 => 7,  35 => 6,  32 => 5,  29 => 4,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "convivencia/alumno/carnets.html.twig", "/var/www/html/shikoba/app/Resources/views/convivencia/alumno/carnets.html.twig");
    }
}
