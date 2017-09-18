<?php

/* convivencia/admin/gestionAlumnos.html.twig */
class __TwigTemplate_d75554a5f889d0ae5a0319363d9f688f1ba1e7869b95d61623c8abec41065632 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "convivencia/admin/gestionAlumnos.html.twig", 1);
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

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "
    <style>
        body{
            background-color: white;
        }
    </style>
    <div class=\"w3-row w3-container w3-margin-bottom\" id=\"contenedorUpload\">
        <h1 class=\"w3-center\">Importar Alumnos</h1>
        <h2 class=\"w3-center\"><i class=\"fa fa-info-circle fa-lg tooltip\" data-tooltip-content=\"#tooltip_content\"></i></h2>

        <div class=\"tooltip_templates\">
        <span id=\"tooltip_content\">
            <p>Debe ser un fichero csv con el siguiente orden de campos:</p><p>Nombre, Primer Apellido, Segundo Apellido, Unidad, Teléfono, Correo Electrónico, NºId Escolar, Teléfono de Urgencia, Dirección, Código Postal, Localidad, Provincia, Curso</p>
        </span>
        </div>

        ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "flashBag", array()), "get", array(0 => "alumnos"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 22
            echo "            <div class=\"w3-panel w3-pale-green w3-round-large\">
                <p class=\"w3-center\">";
            // line 23
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "</p>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "
        ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "flashBag", array()), "get", array(0 => "alumnosError"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 28
            echo "            <div class=\"w3-panel w3-pale-red w3-round-large\">
                <p class=\"w3-center\">";
            // line 29
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "</p>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "
        ";
        // line 33
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start', array("attr" => array("class" => "w3-content formConvivencia")));
        echo "
        ";
        // line 34
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'widget');
        echo "
        <input class=\"w3-button w3-block w3-section .azulTemaButton w3-text-white\" id=\"botonImportar\" type=\"submit\" name=\"importarAlumnos\" value=\"Importar\" disabled>
        ";
        // line 36
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
        echo "
        <div class=\"\">
            <div class=\"loader\"></div>
        </div>
    </div>

";
    }

    public function getTemplateName()
    {
        return "convivencia/admin/gestionAlumnos.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 36,  91 => 34,  87 => 33,  84 => 32,  75 => 29,  72 => 28,  68 => 27,  65 => 26,  56 => 23,  53 => 22,  49 => 21,  31 => 5,  28 => 4,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "convivencia/admin/gestionAlumnos.html.twig", "/var/www/html/shikoba/app/Resources/views/convivencia/admin/gestionAlumnos.html.twig");
    }
}
