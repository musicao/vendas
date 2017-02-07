<?php

/* index.twig */
class __TwigTemplate_e456958671b7cb25652baaef86594fd1b4c24cc34a88574973f56d22d0dee617 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'corpo' => array($this, 'block_corpo'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('head', $context, $blocks);
        // line 69
        echo "



";
        // line 73
        $this->displayBlock('corpo', $context, $blocks);
        // line 87
        echo "
</html>






";
    }

    // line 1
    public function block_head($context, array $blocks = array())
    {
        // line 2
        echo "<!DOCTYPE html>
<html lang='pt-br'>
<head>
    <meta http-equiv=\"content-language\" content=\"pt-br\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\" />
    <meta charset=\"utf-8\" />

    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=1.0\">
    <!-- iOS web-app metas : hides Safari UI Components and Changes Status Bar Appearance -->
    <meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
    <meta name=\"apple-mobile-web-app-status-bar-style\" content=\"black\">

    ";
        // line 15
        if ((($context["viewport"] ?? null) == "total")) {
            // line 16
            echo "        <meta name=\"viewport\" content=\"width=device-width, user-scalable=yes\">
    ";
        } elseif ((        // line 17
($context["viewport"] ?? null) == "grande")) {
            // line 18
            echo "        <meta name=\"viewport\" content=\"width=1024, user-scalable=yes\">
    ";
        } else {
            // line 20
            echo "        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=1.0\">



    ";
        }
        // line 25
        echo "
    <link rel=\"apple-touch-icon\" sizes=\"57x57\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, ($context["img_dir"] ?? null), "html", null, true);
        echo "/favicon/apple-icon-57x57.png\">
    <link rel=\"apple-touch-icon\" sizes=\"60x60\" href=\"";
        // line 27
        echo twig_escape_filter($this->env, ($context["img_dir"] ?? null), "html", null, true);
        echo "/favicon/apple-icon-60x60.png\">
    <link rel=\"apple-touch-icon\" sizes=\"72x72\" href=\"";
        // line 28
        echo twig_escape_filter($this->env, ($context["img_dir"] ?? null), "html", null, true);
        echo "/favicon/apple-icon-72x72.png\">
    <link rel=\"apple-touch-icon\" sizes=\"76x76\" href=\"";
        // line 29
        echo twig_escape_filter($this->env, ($context["img_dir"] ?? null), "html", null, true);
        echo "/favicon/apple-icon-76x76.png\">
    <link rel=\"apple-touch-icon\" sizes=\"114x114\" href=\"";
        // line 30
        echo twig_escape_filter($this->env, ($context["img_dir"] ?? null), "html", null, true);
        echo "/favicon/apple-icon-114x114.png\">
    <link rel=\"apple-touch-icon\" sizes=\"120x120\" href=\"";
        // line 31
        echo twig_escape_filter($this->env, ($context["img_dir"] ?? null), "html", null, true);
        echo "/favicon/apple-icon-120x120.png\">
    <link rel=\"apple-touch-icon\" sizes=\"144x144\" href=\"";
        // line 32
        echo twig_escape_filter($this->env, ($context["img_dir"] ?? null), "html", null, true);
        echo "/favicon/apple-icon-144x144.png\">
    <link rel=\"apple-touch-icon\" sizes=\"152x152\" href=\"";
        // line 33
        echo twig_escape_filter($this->env, ($context["img_dir"] ?? null), "html", null, true);
        echo "/favicon/apple-icon-152x152.png\">
    <link rel=\"apple-touch-icon\" sizes=\"180x180\" href=\"";
        // line 34
        echo twig_escape_filter($this->env, ($context["img_dir"] ?? null), "html", null, true);
        echo "/favicon/apple-icon-180x180.png\">
    <link rel=\"icon\" type=\"image/png\" sizes=\"192x192\"  href=\"";
        // line 35
        echo twig_escape_filter($this->env, ($context["img_dir"] ?? null), "html", null, true);
        echo "/favicon/android-icon-192x192.png\">
    <link rel=\"icon\" type=\"image/png\" sizes=\"32x32\" href=\"";
        // line 36
        echo twig_escape_filter($this->env, ($context["img_dir"] ?? null), "html", null, true);
        echo "/favicon/favicon-32x32.png\">
    <link rel=\"icon\" type=\"image/png\" sizes=\"96x96\" href=\"";
        // line 37
        echo twig_escape_filter($this->env, ($context["img_dir"] ?? null), "html", null, true);
        echo "/favicon/favicon-96x96.png\">
    <link rel=\"icon\" type=\"image/png\" sizes=\"16x16\" href=\"";
        // line 38
        echo twig_escape_filter($this->env, ($context["img_dir"] ?? null), "html", null, true);
        echo "/favicon/favicon-16x16.png\">
    <meta name=\"reply-to\" content=\"israel.souza@inss.gov.br\">
    <meta name=\"description\" content=\"Clyck  - Novo conceito em divertimentos\">
    <meta name=\"author\" content=\"Snack4me.com\">
    <meta charset=\"UTF-8\">
    <meta name=\"copyright\" content=\"Clyck\" />
    <link rel=\"copyright\" href=\"lucas@israel\">
    <meta name=\"keywords\" content=\"compras,parcerias,shows,eventos\">
    <meta property=\"og:title\" content=\"Clyck\">
    <meta property=\"og:description\" content=\"Software de Gestão de facilidades e transações comerciais\">
    <title>Clyck - Novo Conceito em Divertimento</title>

    <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css\">


    ";
        // line 54
        $this->loadTemplate("/partes/helpers/carrega_bootstrap_css.twig", "index.twig", 54)->display($context);
        // line 55
        echo "    ";
        $this->loadTemplate("/partes/helpers/carrega_comuns_css.twig", "index.twig", 55)->display($context);
        // line 56
        echo "    ";
        $this->loadTemplate("/partes/helpers/carrega_comuns_js.twig", "index.twig", 56)->display($context);
        // line 57
        echo "    ";
        $this->loadTemplate("/partes/helpers/carrega_bootstrap_js.twig", "index.twig", 57)->display($context);
        // line 58
        echo "

    ";
        // line 60
        $this->loadTemplate("/partes/helpers/carrega_angular.twig", "index.twig", 60)->display($context);
        // line 61
        echo "    ";
        $this->loadTemplate("/partes/helpers/carrega_app_dependencias.twig", "index.twig", 61)->display($context);
        // line 62
        echo "    ";
        $this->loadTemplate("/partes/helpers/carrega_app.twig", "index.twig", 62)->display($context);
        // line 63
        echo "    ";
        $this->loadTemplate("/partes/helpers/carrega_app_services.twig", "index.twig", 63)->display($context);
        // line 64
        echo "    ";
        $this->loadTemplate("/partes/helpers/carrega_app_controllers.twig", "index.twig", 64)->display($context);
        // line 65
        echo "

</head>
";
    }

    // line 73
    public function block_corpo($context, array $blocks = array())
    {
        // line 74
        echo "<body ng-app=\"app\">

<a ui-sref=\"login\" ui-sref-active=\"active\">login</a>

<ui-view></ui-view>


";
        // line 81
        $this->displayBlock('footer', $context, $blocks);
        // line 84
        echo "
</body>
";
    }

    // line 81
    public function block_footer($context, array $blocks = array())
    {
        // line 82
        echo "    ";
        $this->loadTemplate("/partes/helpers/carrega_personalizado_js.twig", "index.twig", 82)->display($context);
    }

    public function getTemplateName()
    {
        return "index.twig";
    }

    public function getDebugInfo()
    {
        return array (  209 => 82,  206 => 81,  200 => 84,  198 => 81,  189 => 74,  186 => 73,  179 => 65,  176 => 64,  173 => 63,  170 => 62,  167 => 61,  165 => 60,  161 => 58,  158 => 57,  155 => 56,  152 => 55,  150 => 54,  131 => 38,  127 => 37,  123 => 36,  119 => 35,  115 => 34,  111 => 33,  107 => 32,  103 => 31,  99 => 30,  95 => 29,  91 => 28,  87 => 27,  83 => 26,  80 => 25,  73 => 20,  69 => 18,  67 => 17,  64 => 16,  62 => 15,  47 => 2,  44 => 1,  32 => 87,  30 => 73,  24 => 69,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "index.twig", "/Users/israel/Sites/lucas/clyck/gui/template/index.twig");
    }
}
