<?php

/* /partes/helpers/carrega_app.twig */
class __TwigTemplate_abaf37490d4871c4d00102f1719c8f02c0baa400917d74b812717c32af59b7ed extends Twig_Template
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
        $context["loading"] = $this->loadTemplate("partes/helpers/tags_script.twig", "/partes/helpers/carrega_app.twig", 1);
        // line 2
        $context["app"] = "../../app/app.js";
        // line 3
        $context["js_s"] = array(0 => ($context["app"] ?? null));
        echo $context["loading"]->getjs_loading(($context["js_s"] ?? null), ($context["js_dir"] ?? null), "sincrono");
        echo "

 ";
    }

    public function getTemplateName()
    {
        return "/partes/helpers/carrega_app.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "/partes/helpers/carrega_app.twig", "/Users/israel/Sites/vendas/gui/template/partes/helpers/carrega_app.twig");
    }
}
