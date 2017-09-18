<?php

/* convivencia/sanciones/sanciones.html.twig */
class __TwigTemplate_cb3ed87bf7fdb66bb31ba43319e450844c9a7c0b025593fa6c754ae2f1fb81ff extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "convivencia/sanciones/sanciones.html.twig", 1);
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
            <h1>Gestion Sanciones</h1>

            ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "flashBag", array()), "get", array(0 => "sancion"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 11
            echo "                <div class=\"w3-panel w3-pale-green w3-round-large\">
                    <p class=\"w3-center\">";
            // line 12
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "</p>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "
            ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "flashBag", array()), "get", array(0 => "sancionError"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 17
            echo "                <div class=\"w3-panel w3-pale-red w3-round-large\">
                    <p class=\"w3-center\">";
            // line 18
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "</p>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nueva_sancion");
        echo "\" class=\"w3-margin-right\" title=\"Nueva Sanción\"><i
                                class=\"fa fa-plus-circle fa-2x\"></i></a>
                    <a href=\"";
        // line 42
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("export_form_sanciones");
        echo "\" class=\"w3-margin-right\" title=\"Exportar\"><i class=\"fa fa-download fa-2x\"></i></a>
                </div>
                <div class=\"w3-col m12 w3-responsive w3-section\">
                    <table class=\"tableData stripe\" data-order='[[ 1, \"desc\" ]]'>
                        <thead>
                        <tr>
                            <th>NumSanción</th>
                            <th>Fecha</th>
                            <th>Alumno</th>
                            <th>Fecha Inicio</th>
                            <th>Fecha Final</th>
                            <th>Tipo</th>
                            ";
        // line 55
        echo "                            <th>Estado</th>
                            <th>Acciones</th>
                        </tr>
                        </thead>
                        <tbody>
                        ";
        // line 60
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["sanciones"]) ? $context["sanciones"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["sancion"]) {
            // line 61
            echo "                            <tr>
                                <td>";
            // line 62
            echo twig_escape_filter($this->env, $this->getAttribute($context["sancion"], "id", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 63
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["sancion"], "fecha", array()), "d/m/Y"), "html", null, true);
            echo "</td>
                                <td>
                                    <a href=\"";
            // line 65
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("verAlumno", array("id" => $this->getAttribute($this->getAttribute($context["sancion"], "idAlumno", array()), "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["sancion"], "idAlumno", array()), "getNombreCompleto", array(), "method"), "html", null, true);
            echo "</a>
                                </td>
                                <td>";
            // line 67
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["sancion"], "fechaInicio", array()), "d/m/Y"), "html", null, true);
            echo "</td>
                                <td>";
            // line 68
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["sancion"], "fechaFinal", array()), "d/m/Y"), "html", null, true);
            echo "</td>
                                <td>";
            // line 69
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["sancion"], "idTipo", array()), "tipo", array()), "html", null, true);
            echo "</td>
                                ";
            // line 71
            echo "                                <td>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["sancion"], "idEstado", array()), "estado", array()), "html", null, true);
            echo "</td>
                                ";
            // line 72
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
                // line 73
                echo "                                    <td><a href=\"";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nueva_sancion");
                echo "?idSancion=";
                echo twig_escape_filter($this->env, $this->getAttribute($context["sancion"], "id", array()), "html", null, true);
                echo "\">
                                            <i class=\"fa fa-pencil\" aria-hidden=\"true\"></i></a>
                                        <a class=\"confirm paddingRightLeft\"
                                           href=\"";
                // line 76
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("borrar_sancion", array("id" => $this->getAttribute($context["sancion"], "id", array()))), "html", null, true);
                echo "\"
                                           data-title=\"Eliminar Sanción\"><i class=\"fa fa-trash\" aria-hidden=\"true\"></i></a>
                                    </td>
                                ";
            } else {
                // line 80
                echo "                                    <td></td>
                                ";
            }
            // line 82
            echo "                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sancion'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 84
        echo "                        </tbody>
                    </table>
                </div>
                ";
        // line 88
        echo "                ";
        // line 89
        echo "                ";
        // line 90
        echo "            </form>
        </main>
    ";
    }

    public function getTemplateName()
    {
        return "convivencia/sanciones/sanciones.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  218 => 90,  216 => 89,  214 => 88,  209 => 84,  202 => 82,  198 => 80,  191 => 76,  182 => 73,  180 => 72,  175 => 71,  171 => 69,  167 => 68,  163 => 67,  156 => 65,  151 => 63,  147 => 62,  144 => 61,  140 => 60,  133 => 55,  118 => 42,  112 => 40,  105 => 34,  101 => 32,  97 => 30,  95 => 29,  92 => 28,  90 => 27,  88 => 26,  84 => 23,  81 => 21,  72 => 18,  69 => 17,  65 => 16,  62 => 15,  53 => 12,  50 => 11,  46 => 10,  41 => 7,  35 => 6,  32 => 5,  29 => 4,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "convivencia/sanciones/sanciones.html.twig", "/var/www/html/shikoba/app/Resources/views/convivencia/sanciones/sanciones.html.twig");
    }
}
