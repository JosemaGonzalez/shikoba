<?php

/* convivencia/partes/partesForm.html.twig */
class __TwigTemplate_a6583b213f114527cb4e15303169a9539f6baab2e82ea972e8d6b7ad123554ae extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "convivencia/partes/partesForm.html.twig", 1);
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
        echo "    <div class=\"w3-row w3-container w3-white w3-margin-bottom\">
        <h1 class=\"w3-center\">Formulario Parte</h1>
        <form method=\"post\" class=\"w3-content\" name=\"formBusqueda\">
            <div class=\"w3-center w3-margin w3-padding\">
                <input class=\"w3-button w3-text-white busquedaMas\" id=\"busqueda\" type=\"button\"
                       value=\"Búsqueda Avanzada\">
                ";
        // line 10
        if ( !(null === $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "get", array(0 => "idParte"), "method"))) {
            // line 11
            echo "                    <input type=\"hidden\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "get", array(0 => "idParte"), "method"), "html", null, true);
            echo "\" name=\"idParte\">
                    ";
            // line 12
            if ((isset($context["recupera"]) ? $context["recupera"] : null)) {
                // line 13
                echo "                        <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nuevoParte", array("idParte" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "get", array(0 => "idParte"), "method"), "recuperaPunto" => "true")), "html", null, true);
                echo "\"
                           class=\"w3-button w3-text-white botonSubmit confirm\" data-title=\"Recuperar Punto\">-1 Punto</a>
                    ";
            } else {
                // line 16
                echo "                        <input class=\"w3-button w3-text-white botonSubmit confirm\" type=\"button\" name=\"recuperaPunto\"
                               value=\"-1 Punto\"
                               disabled>
                    ";
            }
            // line 20
            echo "                    ";
            if (((isset($context["accion"]) ? $context["accion"] : null) != "Inhabilitada")) {
                // line 21
                echo "                        <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nuevoParte", array("idParte" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "get", array(0 => "idParte"), "method"), "estadoParte" => "continuar")), "html", null, true);
                echo "\"
                           class=\"w3-button w3-text-white botonSubmit confirm\"
                           data-title=\"";
                // line 23
                echo twig_escape_filter($this->env, (isset($context["accion"]) ? $context["accion"] : null), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, (isset($context["accion"]) ? $context["accion"] : null), "html", null, true);
                echo "</a>
                    ";
            } else {
                // line 25
                echo "                        <input class=\"w3-button w3-text-white botonSubmit confirm\"
                               type=\"button\" value=\"";
                // line 26
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["parte"]) ? $context["parte"] : null), "getIdEstado", array(), "method"), "getEstado", array(), "method"), "html", null, true);
                echo "\" disabled>
                    ";
            }
            // line 28
            echo "                ";
        }
        // line 29
        echo "            </div>
            <div id=\"cursos\">
                ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["cursos"]) ? $context["cursos"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["curso"]) {
            // line 32
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
        // line 34
        echo "                <div class=\"w3-center w3-block\">
                    <input class=\"w3-button w3-text-white\" type=\"submit\" name=\"busqueda\" value=\"Buscar\">
                </div>
            </div>
        </form>
        ";
        // line 39
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start', array("attr" => array("class" => "w3-content formConvivencia", "id" => "parteForm")));
        echo "
        ";
        // line 40
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "idAlumno", array()), 'row');
        echo "
        ";
        // line 41
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "idProfesor", array()), 'row');
        echo "
        ";
        // line 42
        if ((null === $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "get", array(0 => "idParte"), "method"))) {
            // line 43
            echo "            <div class=\"w3-col marginBottom\">
                <label class=\"w3-text-teal labelCheck\">Expulsión Aula Convivencia </label><input class=\"i-checks\"
                                                                                                 type=\"checkbox\"
                                                                                                 name=\"expulsion\">
            </div>
        ";
        }
        // line 49
        echo "        ";
        // line 50
        echo "        <label class=\"w3-text-teal\">Fecha</label>
        <input type=\"text\" name=\"fecha\" class=\"w3-select datepicker w3-border w3-light-grey marginBottom\"
               value=\"";
        // line 52
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["parte"]) ? $context["parte"] : null), "fecha", array()), "d/m/Y"), "html", null, true);
        echo "\" required>
        ";
        // line 53
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "idConducta", array()), 'row');
        echo "
        ";
        // line 54
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "Descripcion", array()), 'row');
        echo "
        <br/>
        ";
        // line 56
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "Tareas", array()), 'row');
        echo "
        <br/>
        ";
        // line 58
        if ( !(null === $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "get", array(0 => "idParte"), "method"))) {
            // line 59
            echo "            <label class=\"w3-text-teal\">Sanciones</label>
            <div class=\"w3-select w3-border w3-light-grey marginBottom\">
                ";
            // line 61
            if ((((isset($context["sanciones"]) ? $context["sanciones"] : null) != null) && (twig_length_filter($this->env, (isset($context["sanciones"]) ? $context["sanciones"] : null)) > 0))) {
                // line 62
                echo "                    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["sanciones"]) ? $context["sanciones"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["sancion"]) {
                    // line 63
                    echo "                        <p><a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nueva_sancion", array("idSancion" => $this->getAttribute($context["sancion"], "id", array()))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["sancion"], "sancion", array()), "html", null, true);
                    echo "</a>
                        </p>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sancion'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 66
                echo "                ";
            } else {
                // line 67
                echo "                    ";
                if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
                    // line 68
                    echo "                        <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nueva_sancion", array("idParte" => $this->getAttribute((isset($context["parte"]) ? $context["parte"] : null), "id", array()), "idAlumno" => $this->getAttribute($this->getAttribute((isset($context["parte"]) ? $context["parte"] : null), "idAlumno", array()), "id", array()))), "html", null, true);
                    echo "\">Crear
                            Sanción</a></p>
                    ";
                }
                // line 71
                echo "                ";
            }
            // line 72
            echo "            </div>
        ";
        }
        // line 74
        echo "        ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "fechaComunicacion", array()), 'row');
        echo "
        ";
        // line 75
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "fechaConfirmacion", array()), 'row');
        echo "
        ";
        // line 76
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'widget');
        echo "
        <br/>
        <input class=\"w3-button w3-block w3-section w3-text-white\" type=\"submit\" name=\"registrarse\" value=\"Enviar\">
        <a href=\"";
        // line 79
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gestion_partes");
        echo "\" data-title=\"Cancelar\"
           class=\"w3-button w3-block w3-section w3-text-white botonSubmit confirm\">Cancelar</a>
        ";
        // line 81
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
        echo "

    </div>

";
    }

    public function getTemplateName()
    {
        return "convivencia/partes/partesForm.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  225 => 81,  220 => 79,  214 => 76,  210 => 75,  205 => 74,  201 => 72,  198 => 71,  191 => 68,  188 => 67,  185 => 66,  173 => 63,  168 => 62,  166 => 61,  162 => 59,  160 => 58,  155 => 56,  150 => 54,  146 => 53,  142 => 52,  138 => 50,  136 => 49,  128 => 43,  126 => 42,  122 => 41,  118 => 40,  114 => 39,  107 => 34,  96 => 32,  92 => 31,  88 => 29,  85 => 28,  80 => 26,  77 => 25,  70 => 23,  64 => 21,  61 => 20,  55 => 16,  48 => 13,  46 => 12,  41 => 11,  39 => 10,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "convivencia/partes/partesForm.html.twig", "/var/www/html/shikoba/app/Resources/views/convivencia/partes/partesForm.html.twig");
    }
}
