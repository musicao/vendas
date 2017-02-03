<?php

/* /partes/helpers/carrega_app_controllers.twig */
class __TwigTemplate_f0ce16307a81ec3f5ee7a1c7364b99b69ad7c8cfea7e35ad258500476b92f639 extends Twig_Template
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
        $context["loading"] = $this->loadTemplate("partes/helpers/tags_script.twig", "/partes/helpers/carrega_app_controllers.twig", 2);
        // line 3
        $context["logincontroller"] = "../../app/login/controllers/login.controller.js";
        // line 4
        $context["js_s"] = array(0 => ($context["logincontroller"] ?? null));
        echo $context["loading"]->getjs_loading(($context["js_s"] ?? null), ($context["js_dir"] ?? null), "sincrono");
        echo "
";
    }

    public function getTemplateName()
    {
        return "/partes/helpers/carrega_app_controllers.twig";
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
        return new Twig_Source("", "/partes/helpers/carrega_app_controllers.twig", "/Users/israel/Sites/vendas/gui/template/partes/helpers/carrega_app_controllers.twig");
    }
}
