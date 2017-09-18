<?php

/* convivencia/index.html.twig */
class __TwigTemplate_16bd3c71e784243327f1ae012a30d850394595f2bf76b4f089e4b9385f0c4b7a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "convivencia/index.html.twig", 1);
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
    <div class=\"wall\" id=\"intro\" style=\"background: url('";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/class.jpeg"), "html", null, true);
        echo "')\">
        <div class=\"overlay\">
            <div class=\"w3-col l4 m6 s10 w3-display-middle\">
                <form action=\"";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login");
        echo "\" method=\"post\">

                    <div style=\"text-align: center; padding-top: 20px;\">
                        <img id=\"imgIntro\" src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/logo2.svg"), "html", null, true);
        echo "\"/>
                    </div>

                    ";
        // line 15
        echo "                    ";
        if ((isset($context["error"]) ? $context["error"] : null)) {
            // line 16
            echo "                        <div class=\"w3-panel w3-pale-red w3-round-large\">
                            <p class=\"w3-center\">Credenciales inválidos</p>
                        </div>
                    ";
        }
        // line 20
        echo "
                    ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "flashBag", array()), "get", array(0 => "login"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 22
            echo "                        <div class=\"w3-panel w3-pale-green w3-round-large\">
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
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "flashBag", array()), "get", array(0 => "loginError"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 28
            echo "                        <div class=\"w3-panel w3-pale-red w3-round-large\">
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
                    <div class=\"w3-row w3-section\">
                        <div class=\"w3-col\" style=\"width:50px; color: #38889B;\"><i class=\"w3-xxlarge fa fa-user\"></i>
                        </div>
                        <div class=\"w3-rest\">
                            <input class=\"w3-input w3-border\" id=\"username\" name=\"_username\" type=\"text\"
                                   placeholder=\"Usuario\">
                        </div>
                    </div>

                    <div class=\"w3-row w3-section\">
                        <div class=\"w3-col\" style=\"width:50px; color: #38889B;\"><i class=\"w3-xxlarge fa fa-key\"></i>
                        </div>
                        <div class=\"w3-rest\">
                            <input class=\"w3-input w3-border\" type=\"password\" id=\"password\" name=\"_password\"
                                   placeholder=\"Contraseña\">
                        </div>
                    </div>

                    <div class=\"w3-right-align\" style=\"color: white;\">
                        <a href=\"";
        // line 52
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("recuperarPassword");
        echo "\">Recuperar contraseña</a>
                    </div>

                    ";
        // line 56
        echo "                    <input type=\"hidden\" name=\"_target_path\" value=\"/alumno\"/>

                    <button style=\"background-color: #38889B\"
                            class=\"w3-button w3-block w3-section w3-ripple w3-padding w3-text-white\" type=\"submit\">
                        Entrar
                    </button>
                    ";
        // line 63
        echo "                </form>
            </div>
        </div>
    </div>


";
    }

    public function getTemplateName()
    {
        return "convivencia/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 63,  127 => 56,  121 => 52,  99 => 32,  90 => 29,  87 => 28,  83 => 27,  80 => 26,  71 => 23,  68 => 22,  64 => 21,  61 => 20,  55 => 16,  52 => 15,  46 => 11,  40 => 8,  34 => 5,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "convivencia/index.html.twig", "/var/www/html/shikoba/app/Resources/views/convivencia/index.html.twig");
    }
}
