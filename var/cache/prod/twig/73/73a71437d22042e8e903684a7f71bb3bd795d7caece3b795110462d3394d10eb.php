<?php

/* convivencia/tutor/alumnoTutor.html.twig */
class __TwigTemplate_924937da563593658f3962a8d116b03244567cab63f204f33d095428bdfd18a4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "convivencia/tutor/alumnoTutor.html.twig", 1);
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

    <main class=\"w3-container w3-margin-top\">
        <div class=\"w3-row contenedorCartaInforme\">
            <div class=\"w3-card-2 cartaInforme cartaAlumno\" id=\"cartaTutorAlumno\">
                <header class=\"w3-container w3-center\">
                    <h2>Alumnos</h2>
                </header>
                <div class=\"cartaInformeCuerpo\">
                    <ul>
                        ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["alumnos"]) ? $context["alumnos"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["alumno"]) {
            // line 15
            echo "                            <li><a class=\"enlaceTutorAlumno\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("verAlumno", array("id" => $this->getAttribute($context["alumno"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["alumno"], "getNombreCompleto", array(), "method"), "html", null, true);
            echo "</a></li>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['alumno'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "                    </ul>
                </div>
            </div>
        </div>
    </main>


";
    }

    public function getTemplateName()
    {
        return "convivencia/tutor/alumnoTutor.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 17,  47 => 15,  43 => 14,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "convivencia/tutor/alumnoTutor.html.twig", "/var/www/html/shikoba/app/Resources/views/convivencia/tutor/alumnoTutor.html.twig");
    }
}
