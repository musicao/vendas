<?php

/* /partes/helpers/carrega_bootstrap_js.twig */
class __TwigTemplate_a5409789ae59c79b951f4c644bc1d5af14ddf297938676def9b3e25ac93652d6 extends Twig_Template
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
        $context["loading"] = $this->loadTemplate("partes/helpers/tags_script.twig", "/partes/helpers/carrega_bootstrap_js.twig", 2);
        // line 3
        $context["bootstrapjs"] = "bootstrap.min.js";
        // line 4
        echo "

";
        // line 6
        $context["js_s"] = array(0 => ($context["bootstrapjs"] ?? null));
        echo $context["loading"]->getjs_loading(($context["js_s"] ?? null), ($context["js_dir"] ?? null), "sincrono");
        echo "
";
    }

    public function getTemplateName()
    {
        return "/partes/helpers/carrega_bootstrap_js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 6,  23 => 4,  21 => 3,  19 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "/partes/helpers/carrega_bootstrap_js.twig", "/Users/israel/Sites/vendas/gui/template/partes/helpers/carrega_bootstrap_js.twig");
    }
}
