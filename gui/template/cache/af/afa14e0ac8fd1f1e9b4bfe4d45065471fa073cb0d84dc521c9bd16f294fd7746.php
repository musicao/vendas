<?php

/* /partes/helpers/carrega_personalizado_js.twig */
class __TwigTemplate_f476793b2d73f70476b3eba9545e4f6f93761560af1cc857984f6c7d6f07d27f extends Twig_Template
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
        $context["loading"] = $this->loadTemplate("partes/helpers/tags_script.twig", "/partes/helpers/carrega_personalizado_js.twig", 2);
        // line 3
        echo "
";
        // line 4
        $context["persona"] = "script.js";
        // line 5
        echo "
";
        // line 6
        $context["js_s"] = array(0 => ($context["persona"] ?? null));
        echo $context["loading"]->getjs_loading(($context["js_s"] ?? null), ($context["js_dir"] ?? null), "sincrono");
        echo "
";
    }

    public function getTemplateName()
    {
        return "/partes/helpers/carrega_personalizado_js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 6,  26 => 5,  24 => 4,  21 => 3,  19 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "/partes/helpers/carrega_personalizado_js.twig", "/Users/israel/Sites/lucas/clyck/gui/template/partes/helpers/carrega_personalizado_js.twig");
    }
}
