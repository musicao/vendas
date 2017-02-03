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
        // line 2
        $context["loading"] = $this->loadTemplate("partes/helpers/tags_script.twig", "/partes/helpers/carrega_bootstrap_css.twig", 2);
        // line 3
        $context["css_s"] = array(0 => "bootstrap.min.css");
        // line 4
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
        return array (  23 => 4,  21 => 3,  19 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "/partes/helpers/carrega_bootstrap_css.twig", "/Users/israel/Sites/vendas/gui/template/partes/helpers/carrega_bootstrap_css.twig");
    }
}
