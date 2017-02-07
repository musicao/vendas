<?php

/* /partes/helpers/carrega_bootstrap_css.twig */
class __TwigTemplate_261608b1fe0da7590c44c6593c5a55bfffd019c1596e4eec55a34b38dc18ae93 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["loading"] = $this->loadTemplate("partes/helpers/tags_script.twig", "/partes/helpers/carrega_bootstrap_css.twig", 1);
        // line 2
        echo "

";
        // line 4
        $context["booots"] = array("bootstrap.min.css" => "");
        // line 5
        echo "

";
        // line 7
        $context["css_s"] = array(0 => ($context["booots"] ?? null));
        // line 8
        echo $context["loading"]->getcss_loading(($context["css_s"] ?? null), ($context["css_dir"] ?? null), "link");
        echo "



";
    }

    public function getTemplateName()
    {
        return "/partes/helpers/carrega_bootstrap_css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 8,  31 => 7,  27 => 5,  25 => 4,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "/partes/helpers/carrega_bootstrap_css.twig", "/Users/israel/Sites/lucas/clyck/gui/template/partes/helpers/carrega_bootstrap_css.twig");
    }
}
