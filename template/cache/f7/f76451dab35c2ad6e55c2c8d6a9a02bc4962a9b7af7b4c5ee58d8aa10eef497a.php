<?php

/* index.twig */
class __TwigTemplate_e456958671b7cb25652baaef86594fd1b4c24cc34a88574973f56d22d0dee617 extends Twig_Template
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
        echo "<!DOCTYPE html>
<html lang=\"en\" >
<head>
    <meta charset=\"UTF-8\">
    <title>Title</title>
    <script src=\"../node_modules/angular/angular.js\"></script>
    <script src=\"../node_modules/angular-ui-router/release/angular-ui-router.min.js\"></script>





    <script src=\"../assets/js/app/app.js\"></script>
    <script src=\"../assets/js/app/login/services/login.service.js\"></script>
    <script src=\"../assets/js/app/login/controllers/login.controller.js\"></script>


</head>
<body ng-app=\"app\">
    <a ui-sref=\"hello\" ui-sref-active=\"active\">Hello</a>
    <a ui-sref=\"about\" ui-sref-active=\"active\">About</a>
    <a ui-sref=\"login\" ui-sref-active=\"active\">login</a>

    <ui-view></ui-view>
</body>

</body>
</html>";
    }

    public function getTemplateName()
    {
        return "index.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "index.twig", "/Users/israel/Sites/vendas/template/index.twig");
    }
}
