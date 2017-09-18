<?php

/* convivencia/diarioAulaConvivencia/diarioAulaForm.html.twig */
class __TwigTemplate_e9ce47d141bc05b55645adad3fef201557f8c0eac6decb5dae0233df4c20b1cd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "convivencia/diarioAulaConvivencia/diarioAulaForm.html.twig", 1);
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
    <style>
        body{
            background-color: white;
        }
    </style>

    <div class=\"w3-row w3-container w3-white w3-margin-bottom\">
        <h1 class=\"w3-center\">Editar Diario Aula Convivencia</h1>
        <h2 class=\"w3-center\">";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["diario"]) ? $context["diario"] : null), "idSancion", array()), "idAlumno", array()), "getNombreCompleto", array(), "method"), "html", null, true);
        echo "</h2>

        <form method=\"post\" class=\"w3-content\" name=\"formBusqueda\">
            <div class=\"w3-center\">
            ";
        // line 17
        if ((isset($context["recupera"]) ? $context["recupera"] : null)) {
            // line 18
            echo "                <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("edit_diario", array("id" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "get", array(0 => "id"), "method"), "recuperaPunto" => "true")), "html", null, true);
            echo "\"
                   class=\"w3-button w3-text-white botonSubmit confirm\" data-title=\"Recuperar Punto\">+1 Punto</a>
            ";
        } else {
            // line 21
            echo "                <input class=\"w3-button w3-text-white botonSubmit confirm\" type=\"button\" name=\"recuperaPunto\"
                       value=\"+1 Punto\"
                       disabled>
            ";
        }
        // line 25
        echo "            </div>
        </form>
        ";
        // line 27
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start', array("attr" => array("class" => "w3-content formConvivencia", "id" => "diarioAulaForm")));
        echo "
        ";
        // line 28
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'widget');
        echo "
        <input class=\"w3-button w3-block w3-section w3-text-white\" type=\"submit\" name=\"editarDiario\" value=\"Editar\">
        ";
        // line 30
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
        echo "

    </div>

";
    }

    public function getTemplateName()
    {
        return "convivencia/diarioAulaConvivencia/diarioAulaForm.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 30,  72 => 28,  68 => 27,  64 => 25,  58 => 21,  51 => 18,  49 => 17,  42 => 13,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "convivencia/diarioAulaConvivencia/diarioAulaForm.html.twig", "/var/www/html/shikoba/app/Resources/views/convivencia/diarioAulaConvivencia/diarioAulaForm.html.twig");
    }
}
