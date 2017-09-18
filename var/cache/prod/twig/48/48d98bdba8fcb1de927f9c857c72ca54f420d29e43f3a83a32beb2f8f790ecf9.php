<?php

/* convivencia/recuperarPassword.html.twig */
class __TwigTemplate_4e2c01b0f2e8ea6432019d5cc283ad4324d1d8fd3b976268fb8870dc5bd06a20 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "convivencia/recuperarPassword.html.twig", 1);
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
        echo "    <div class=\"w3-col s10 w3-display-middle\">
    <h1 class=\"w3-center\">Recuperar Contraseña</h1>

    ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "flashBag", array()), "get", array(0 => "password"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 8
            echo "        <div class=\"w3-panel w3-pale-green w3-round-large\">
            <p class=\"w3-center\">";
            // line 9
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "</p>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "
    ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "flashBag", array()), "get", array(0 => "passwordError"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 14
            echo "        <div class=\"w3-panel w3-pale-red w3-round-large\">
            <p class=\"w3-center\">";
            // line 15
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "</p>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "
    <div class=\"w3-row w3-center\">
        <div class=\"contenedorCartaAlumno\">
            <form action=\"";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("recuperarPassword");
        echo "\" method=\"post\">
                <label class=\"w3-col s12 w3-text-center marginBottom\" for=\"username\">Usuario</label>
                <input id=\"username\" name=\"username\" class=\"w3-col s12 w3-select w3-border w3-light-grey marginBottomMore\"
                       placeholder=\"Escriba su usuario...\" type=\"text\">
                <input class=\"w3-button w3-text-white\" type=\"submit\" name=\"recuperar\" value=\"Recuperar\">
            </form>
        </div>
    </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "convivencia/recuperarPassword.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 21,  71 => 18,  62 => 15,  59 => 14,  55 => 13,  52 => 12,  43 => 9,  40 => 8,  36 => 7,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "convivencia/recuperarPassword.html.twig", "/var/www/html/shikoba/app/Resources/views/convivencia/recuperarPassword.html.twig");
    }
}
