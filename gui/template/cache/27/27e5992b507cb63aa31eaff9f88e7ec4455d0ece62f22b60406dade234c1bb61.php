<?php

/* /partes/helpers/carrega_angular.twig */
class __TwigTemplate_317460a9313426618605024740f66ec75648c41d009bb54592d0d9cd13899557 extends Twig_Template
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
        $context["loading"] = $this->loadTemplate("partes/helpers/tags_script.twig", "/partes/helpers/carrega_angular.twig", 2);
        // line 3
        $context["angular"] = "angular.js";
        // line 4
        $context["js_s"] = array(0 => ($context["angular"] ?? null));
        echo $context["loading"]->getjs_loading(($context["js_s"] ?? null), ($context["js_dir"] ?? null), "sincrono");
        echo "
";
    }

    public function getTemplateName()
    {
        return "/partes/helpers/carrega_angular.twig";
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
        return new Twig_Source("", "/partes/helpers/carrega_angular.twig", "/Users/israel/Sites/lucas/clyck/gui/template/partes/helpers/carrega_angular.twig");
    }
}
