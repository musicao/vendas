<?php

/* /partes/helpers/carrega_app_services.twig */
class __TwigTemplate_fced731b571e819eaaa1cc92f205de3586bdf877d6dd9ff1dd20b24ff7c31a8e extends Twig_Template
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
        $context["loading"] = $this->loadTemplate("partes/helpers/tags_script.twig", "/partes/helpers/carrega_app_services.twig", 2);
        // line 3
        $context["logincontroller"] = "../../app/login/services/login.service.js";
        // line 4
        echo "
";
        // line 5
        $context["js_s"] = array(0 => ($context["logincontroller"] ?? null));
        echo $context["loading"]->getjs_loading(($context["js_s"] ?? null), ($context["js_dir"] ?? null), "sincrono");
        echo "
";
    }

    public function getTemplateName()
    {
        return "/partes/helpers/carrega_app_services.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 5,  23 => 4,  21 => 3,  19 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "/partes/helpers/carrega_app_services.twig", "/Users/israel/Sites/lucas/clyck/gui/template/partes/helpers/carrega_app_services.twig");
    }
}
