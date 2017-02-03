<?php

/* /partes/helpers/carrega_comuns_js.twig */
class __TwigTemplate_f1b9815605b046ed178c94c9144ca0227597c4d7aad4fb78e6107cbbc2d0d2ac extends Twig_Template
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
        $context["loading"] = $this->loadTemplate("partes/helpers/tags_script.twig", "/partes/helpers/carrega_comuns_js.twig", 2);
        // line 3
        $context["jquery_js"] = "jquery.min.js";
        // line 5
        $context["toastr"] = "toastr.min.js";
        // line 6
        $context["comum"] = "script.js";
        // line 7
        echo "
";
        // line 8
        $context["js_s"] = array(0 => ($context["jquery_js"] ?? null), 1 => ($context["toastr"] ?? null), 2 => ($context["comum"] ?? null));
        echo $context["loading"]->getjs_loading(($context["js_s"] ?? null), ($context["js_dir"] ?? null), "sincrono");
        echo "
";
    }

    public function getTemplateName()
    {
        return "/partes/helpers/carrega_comuns_js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 8,  27 => 7,  25 => 6,  23 => 5,  21 => 3,  19 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "/partes/helpers/carrega_comuns_js.twig", "/Users/israel/Sites/vendas/gui/template/partes/helpers/carrega_comuns_js.twig");
    }
}
