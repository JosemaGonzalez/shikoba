<?php

/* convivencia/sanciones/sancionesForm.html.twig */
class __TwigTemplate_db10e0fab91754396c5a47c6b2fda854455545984674c593c9e99b5d7e244da6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "convivencia/sanciones/sancionesForm.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
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
    <div class=\"w3-row w3-container w3-white w3-margin-bottom\">

        <h1 class=\"w3-center\">Formulario Sanciones</h1>
        <form method=\"post\" class=\"w3-content\" name=\"formBusqueda\">
            <div class=\"w3-center w3-margin w3-padding\">
                <input class=\"w3-button w3-text-white busquedaMas\" id=\"busqueda\" type=\"button\"
                       value=\"Búsqueda Avanzada\">
                ";
        // line 12
        if ( !(null === $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "get", array(0 => "idSancion"), "method"))) {
            // line 13
            echo "                    ";
            if (((isset($context["accion"]) ? $context["accion"] : null) != "Inhabilitada")) {
                // line 14
                echo "                        <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nueva_sancion", array("idSancion" => $this->getAttribute((isset($context["sancion"]) ? $context["sancion"] : null), "id", array()), "estadoSancion" => "continuar")), "html", null, true);
                echo "\"
                           class=\"w3-button w3-text-white botonSubmit confirm\" data-title=\"";
                // line 15
                echo twig_escape_filter($this->env, (isset($context["accion"]) ? $context["accion"] : null), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, (isset($context["accion"]) ? $context["accion"] : null), "html", null, true);
                echo "</a>
                        ";
                // line 17
                echo "                               ";
                // line 18
                echo "                    ";
            } else {
                // line 19
                echo "                        <input class=\"w3-button w3-text-white botonSubmit confirm\"
                               type=\"button\" value=\"";
                // line 20
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["sancion"]) ? $context["sancion"] : null), "getIdEstado", array(), "method"), "getEstado", array(), "method"), "html", null, true);
                echo "\" disabled>
                    ";
            }
            // line 22
            echo "                ";
        }
        // line 23
        echo "            </div>
            <div id=\"cursos\">
                ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["cursos"]) ? $context["cursos"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["curso"]) {
            // line 26
            echo "                    <label><input type=\"checkbox\" name=\"cursos[]\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["curso"], "curso", array()), "html", null, true);
            echo "\"> ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["curso"], "curso", array()), "html", null, true);
            echo "</label>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['curso'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "                <div class=\"w3-center w3-block\">
                    <input class=\"w3-button w3-text-white\" type=\"submit\" name=\"busqueda\" value=\"Buscar\">
                </div>
            </div>
        </form>

        ";
        // line 34
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start', array("attr" => array("class" => "w3-content formConvivencia")));
        echo "
        ";
        // line 35
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "idAlumno", array()), 'row');
        echo "
        ";
        // line 37
        echo "        <label class=\"w3-text-teal\">Fecha</label>
        <input type=\"text\" name=\"fecha\" class = \"w3-select datepicker w3-border w3-light-grey marginBottom\"
               value=\"";
        // line 39
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["sancion"]) ? $context["sancion"] : null), "fecha", array()), "d/m/Y"), "html", null, true);
        echo "\" required>
        ";
        // line 40
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "idTipo", array()), 'row');
        echo "
        <label class=\"w3-text-teal\">Fecha Inicio</label>
        <input type=\"text\" name=\"fechaInicio\" class = \"w3-select datepicker w3-border w3-light-grey marginBottom\"
               value=\"";
        // line 43
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["sancion"]) ? $context["sancion"] : null), "fechaInicio", array()), "d/m/Y"), "html", null, true);
        echo "\" required>
        <label class=\"w3-text-teal\">Fecha Final</label>
        <input type=\"text\" name=\"fechaFinal\" class = \"w3-select datepicker w3-border w3-light-grey marginBottom\"
               value=\"";
        // line 46
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["sancion"]) ? $context["sancion"] : null), "fechaFinal", array()), "d/m/Y"), "html", null, true);
        echo "\" required>
        ";
        // line 47
        if (((array_key_exists("detalles", $context) &&  !(null === (isset($context["detalles"]) ? $context["detalles"] : null))) &&  !twig_test_empty((isset($context["detalles"]) ? $context["detalles"] : null)))) {
            // line 48
            echo "            <div class=\"contenedorFlexEdit\">
                ";
            // line 49
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["detalles"]) ? $context["detalles"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["detalle"]) {
                // line 50
                echo "                    <div class=\"contenedorFlexChild\">
                        <label class=\"w3-text-teal\">Fecha Hora Sanción</label>
                        <input type=\"text\" class=\"w3-input w3-border w3-light-grey datepicker\"
                               value=\"";
                // line 53
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["detalle"], "fecha", array()), "d/m/Y"), "html", null, true);
                echo "\" name=\"fechaHoraEdit[";
                echo twig_escape_filter($this->env, $this->getAttribute($context["detalle"], "id", array()), "html", null, true);
                echo "]\"
                               contenteditable=\"false\">
                    </div>
                    <div class=\"contenedorFlexChild\">
                        <label class=\"w3-text-teal\">Hora</label>
                        <select class=\"w3-select w3-border w3-light-grey\" name=\"horaAcEdit[";
                // line 58
                echo twig_escape_filter($this->env, $this->getAttribute($context["detalle"], "id", array()), "html", null, true);
                echo "]\">
                            ";
                // line 59
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["horas"]) ? $context["horas"] : null));
                foreach ($context['_seq'] as $context["key"] => $context["hora"]) {
                    // line 60
                    echo "                                ";
                    if (($this->getAttribute($context["detalle"], "hora", array()) == $context["key"])) {
                        // line 61
                        echo "                                    <option value=\"";
                        echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                        echo "\" selected>";
                        echo twig_escape_filter($this->env, $context["hora"], "html", null, true);
                        echo "</option>
                                ";
                    } else {
                        // line 63
                        echo "                                    <option value=\"";
                        echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, $context["hora"], "html", null, true);
                        echo "</option>
                                ";
                    }
                    // line 65
                    echo "                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['hora'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 66
                echo "                        </select>
                    </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['detalle'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 69
            echo "                <div class=\"w3-center w3-block\"><input type=\"button\" id=\"checkEditSancion\"
                                                       class=\"w3-button w3-margin w3-text-white checkNewSancion\"
                                                       value=\"+\">
                </div>
            </div>
        ";
        }
        // line 75
        echo "        ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "fechaComunicacion", array()), 'row');
        echo "
        ";
        // line 76
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "fechaConfirmacion", array()), 'row');
        echo "
        ";
        // line 77
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'widget');
        echo "
        <br/>
        <input class=\"w3-button w3-block w3-section w3-text-white\" type=\"submit\" name=\"registrarSancion\" value=\"Enviar\">
        <a href=\"";
        // line 80
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gestion_sanciones");
        echo "\" data-title=\"Cancelar\" class=\"w3-button w3-block w3-section w3-text-white botonSubmit confirm\">Cancelar</a>
        ";
        // line 81
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
        echo "

    </div>

";
    }

    public function getTemplateName()
    {
        return "convivencia/sanciones/sancionesForm.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  224 => 81,  220 => 80,  214 => 77,  210 => 76,  205 => 75,  197 => 69,  189 => 66,  183 => 65,  175 => 63,  167 => 61,  164 => 60,  160 => 59,  156 => 58,  146 => 53,  141 => 50,  137 => 49,  134 => 48,  132 => 47,  128 => 46,  122 => 43,  116 => 40,  112 => 39,  108 => 37,  104 => 35,  100 => 34,  92 => 28,  81 => 26,  77 => 25,  73 => 23,  70 => 22,  65 => 20,  62 => 19,  59 => 18,  57 => 17,  51 => 15,  46 => 14,  43 => 13,  41 => 12,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "convivencia/sanciones/sancionesForm.html.twig", "/var/www/html/shikoba/app/Resources/views/convivencia/sanciones/sancionesForm.html.twig");
    }
}
