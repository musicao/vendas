<?php

/* /partes/helpers/carrega_comuns_css.twig */
class __TwigTemplate_16f146354c68bee77f02c521f7615b8de871b14a6115d2bb854fb958d95e8244 extends Twig_Template
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
        $context["loading"] = $this->loadTemplate("partes/helpers/tags_script.twig", "/partes/helpers/carrega_comuns_css.twig", 2);
        // line 3
        echo "

";
        // line 5
        $context["load"] = array("loading-bar.css" => "");
        // line 6
        $context["toastr_css"] = array("toastr.min.css" => "");
        // line 7
        $context["font_css"] = array("font-awesome.min.css" => "");
        // line 8
        $context["spinner"] = array("spinner.css" => "");
        // line 9
        echo "

";
        // line 11
        $context["comum_css"] = array("style.css" => "");
        // line 12
        echo "
";
        // line 13
        $context["css_s"] = array(0 => ($context["load"] ?? null), 1 => ($context["toastr_css"] ?? null), 2 => ($context["font_css"] ?? null), 3 => ($context["spinner"] ?? null), 4 => ($context["comum_css"] ?? null));
        // line 14
        echo $context["loading"]->getcss_loading(($context["css_s"] ?? null), ($context["css_dir"] ?? null), "link");
        echo "
";
    }

    public function getTemplateName()
    {
        return "/partes/helpers/carrega_comuns_css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 14,  42 => 13,  39 => 12,  37 => 11,  33 => 9,  31 => 8,  29 => 7,  27 => 6,  25 => 5,  21 => 3,  19 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "/partes/helpers/carrega_comuns_css.twig", "/Users/israel/Sites/vendas/gui/template/partes/helpers/carrega_comuns_css.twig");
    }
}
