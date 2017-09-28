<?php

/* convivencia/diarioAulaConvivencia/diarioAula.html.twig */
class __TwigTemplate_1fe4a9573a46be86690638fa44bb77ae219737032bd4c45f5a9e30ee1b01e733 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "convivencia/diarioAulaConvivencia/diarioAula.html.twig", 1);
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
            <h1>Diario Aula Convivencia</h1>
            <form method=\"post\">
                <div class=\"w3-row-padding\">
                    <div class=\"contenedorFlexInput\">
                        <label class=\"w3-left\">Fecha</label><input type=\"text\"
                                                                   class=\"datepicker w3-input w3-border w3-quarter\"
                                                                   name=\"likeFecha\" id=\"diarioFechaSearchBar\"
                                                                   value=\"";
        // line 15
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["diarioData"]) ? $context["diarioData"] : null), "fecha", array()), "d/m/Y"), "html", null, true);
        echo "\">
                    </div>
                    <div class=\"contenedorFlexInput\">
                        <label>Horas</label><select id=\"horasSelect\" class=\"chosen-select w3-col s12 m12\" name=\"likeHora[]\"
                                                    id=\"diarioHorasSearchBar\" multiple>
                            ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["diarioData"]) ? $context["diarioData"] : null), "horas", array()));
        foreach ($context['_seq'] as $context["key"] => $context["hora"]) {
            // line 21
            echo "                                ";
            if (twig_in_filter($context["key"], $this->getAttribute((isset($context["diarioData"]) ? $context["diarioData"] : null), "horasElegidas", array()))) {
                // line 22
                echo "                                    <option value=\"";
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "\" selected>";
                echo twig_escape_filter($this->env, $context["hora"], "html", null, true);
                echo "</option>
                                ";
            } else {
                // line 24
                echo "                                    <option value=\"";
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["hora"], "html", null, true);
                echo "</option>
                                ";
            }
            // line 26
            echo "                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['hora'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "                        </select>
                    </div>

                    <div class=\"w3-row-padding\">
                        <input type=\"submit\" value=\"Buscar\" class=\"w3-button w3-text-white\"/>
                    </div>
                </div>

                <div class=\"w3-col m12 w3-responsive w3-section\">
                    <table class=\"w3-table-all w3-centered w3-margin-top\">
                        <tr>
                            <th>Fecha</th>
                            <th>Hora</th>
                            <th>Alumnado</th>
                            <th>Profesorado</th>
                            <th>Observaciones</th>
                            <th>Actitud</th>
                            <th>Asiste</th>
                            <th></th>
                        </tr>
                        ";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["diarioData"]) ? $context["diarioData"] : null), "diariosAula", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["diario"]) {
            // line 48
            echo "                            <tr>
                                <td>";
            // line 49
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["diario"], "fecha", array()), "d/m/Y"), "html", null, true);
            echo "</td>
                                <td>";
            // line 50
            echo twig_escape_filter($this->env, $this->getAttribute($context["diario"], "hora", array()), "html", null, true);
            echo "</td>
                                <td>
                                    <a href=\"";
            // line 52
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("verAlumno", array("id" => $this->getAttribute($this->getAttribute($this->getAttribute($context["diario"], "idSancion", array()), "idAlumno", array()), "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["diario"], "idSancion", array()), "idAlumno", array()), "getNombreCompleto", array(), "method"), "html", null, true);
            echo "</a>
                                </td>
                                ";
            // line 54
            if (($this->getAttribute($context["diario"], "idProfesor", array()) == null)) {
                // line 55
                echo "                                    <td>Ninguno</td>
                                ";
            } else {
                // line 57
                echo "                                    <td>";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["diario"], "idProfesor", array()), "getNombreCompleto", array(), "method"), "html", null, true);
                echo "</td>
                                ";
            }
            // line 59
            echo "                                <td>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["diario"], "observaciones", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 60
            echo twig_escape_filter($this->env, $this->getAttribute($context["diario"], "actitud", array()), "html", null, true);
            echo "</td>
                                ";
            // line 61
            if (($this->getAttribute($context["diario"], "asiste", array()) == 0)) {
                // line 62
                echo "                                    <td>Pendiente</td>
                                ";
            } else {
                // line 64
                echo "                                    <td>Ha asistido</td>
                                ";
            }
            // line 66
            echo "                                <td><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("edit_diario", array("id" => $this->getAttribute($context["diario"], "id", array()))), "html", null, true);
            echo "\"><i
                                                class=\"fa fa-pencil\" aria-hidden=\"true\"></i></a></td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['diario'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
        echo "                    </table>
                </div>
            </form>
        </main>
    ";
    }

    public function getTemplateName()
    {
        return "convivencia/diarioAulaConvivencia/diarioAula.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  175 => 70,  164 => 66,  160 => 64,  156 => 62,  154 => 61,  150 => 60,  145 => 59,  139 => 57,  135 => 55,  133 => 54,  126 => 52,  121 => 50,  117 => 49,  114 => 48,  110 => 47,  88 => 27,  82 => 26,  74 => 24,  66 => 22,  63 => 21,  59 => 20,  51 => 15,  41 => 7,  35 => 6,  32 => 5,  29 => 4,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "convivencia/diarioAulaConvivencia/diarioAula.html.twig", "/var/www/html/shikoba/app/Resources/views/convivencia/diarioAulaConvivencia/diarioAula.html.twig");
    }
}
