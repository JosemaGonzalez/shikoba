<?php

/* convivencia/admin/admin.html.twig */
class __TwigTemplate_238a0a4e7fb8bbae94621c1a9fa67cbe32a009863021d9a778a7982b56d6e142 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "convivencia/admin/admin.html.twig", 1);
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
    <div class=\"row cardAdminIndex w3-center\">
        <div class=\"w3-col l3\">
            <a href=\"";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gestion_partes");
        echo "\"><span class=\"card-title center\">Partes Iniciados</span></a>
            <p>";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["partesIniciados"]) ? $context["partesIniciados"] : null), "html", null, true);
        echo "</p>
        </div>
        <div class=\"w3-col l3\">
            <a href=\"";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gestion_sanciones");
        echo "\"><span class=\"card-title center\">Sanciones Iniciadas</span></a>
            <p>";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["sancionesIniciadas"]) ? $context["sancionesIniciadas"] : null), "html", null, true);
        echo "</p>
        </div>
        <div class=\"w3-col l3\">
            <a href=\"";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("show_diario");
        echo "\"><span class=\"card-title center\">Aula convivencia aforo</span></a>
            <p>";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["diarioNow"]) ? $context["diarioNow"] : null), "html", null, true);
        echo "</p>
        </div>
    </div>

";
    }

    public function getTemplateName()
    {
        return "convivencia/admin/admin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 16,  56 => 15,  50 => 12,  46 => 11,  40 => 8,  36 => 7,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "convivencia/admin/admin.html.twig", "/var/www/html/shikoba/app/Resources/views/convivencia/admin/admin.html.twig");
    }
}
