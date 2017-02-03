<?php

/* partes/header_basico.twig */
class __TwigTemplate_fbe712211676c194548a5ab067737f094cf22fde8b12072ac99d99199b34d618 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'post_header' => array($this, 'block_post_header'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('head', $context, $blocks);
    }

    public function block_head($context, array $blocks = array())
    {
        // line 2
        echo "<!DOCTYPE html>
<html lang='pt-br' ng-app=\"app\" >
<head>
<meta http-equiv=\"content-language\" content=\"pt-br\">
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\" />

    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=1.0\">

";
        // line 11
        if ((($context["viewport"] ?? null) == "total")) {
            // line 12
            echo "<meta name=\"viewport\" content=\"width=device-width, user-scalable=yes\">
";
        } elseif ((        // line 13
($context["viewport"] ?? null) == "grande")) {
            // line 14
            echo "<meta name=\"viewport\" content=\"width=1024, user-scalable=yes\">
";
        } else {
            // line 16
            echo "<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=1.0\">



";
        }
        // line 21
        echo "
    <link rel=\"apple-touch-icon\" sizes=\"57x57\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, ($context["img_dir"] ?? null), "html", null, true);
        echo "/favicon/apple-icon-57x57.png\">
    <link rel=\"apple-touch-icon\" sizes=\"60x60\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, ($context["img_dir"] ?? null), "html", null, true);
        echo "/favicon/apple-icon-60x60.png\">
    <link rel=\"apple-touch-icon\" sizes=\"72x72\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, ($context["img_dir"] ?? null), "html", null, true);
        echo "/favicon/apple-icon-72x72.png\">
    <link rel=\"apple-touch-icon\" sizes=\"76x76\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, ($context["img_dir"] ?? null), "html", null, true);
        echo "/favicon/apple-icon-76x76.png\">
    <link rel=\"apple-touch-icon\" sizes=\"114x114\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, ($context["img_dir"] ?? null), "html", null, true);
        echo "/favicon/apple-icon-114x114.png\">
    <link rel=\"apple-touch-icon\" sizes=\"120x120\" href=\"";
        // line 27
        echo twig_escape_filter($this->env, ($context["img_dir"] ?? null), "html", null, true);
        echo "/favicon/apple-icon-120x120.png\">
    <link rel=\"apple-touch-icon\" sizes=\"144x144\" href=\"";
        // line 28
        echo twig_escape_filter($this->env, ($context["img_dir"] ?? null), "html", null, true);
        echo "/favicon/apple-icon-144x144.png\">
    <link rel=\"apple-touch-icon\" sizes=\"152x152\" href=\"";
        // line 29
        echo twig_escape_filter($this->env, ($context["img_dir"] ?? null), "html", null, true);
        echo "/favicon/apple-icon-152x152.png\">
    <link rel=\"apple-touch-icon\" sizes=\"180x180\" href=\"";
        // line 30
        echo twig_escape_filter($this->env, ($context["img_dir"] ?? null), "html", null, true);
        echo "/favicon/apple-icon-180x180.png\">
    <link rel=\"icon\" type=\"image/png\" sizes=\"192x192\"  href=\"";
        // line 31
        echo twig_escape_filter($this->env, ($context["img_dir"] ?? null), "html", null, true);
        echo "/favicon/android-icon-192x192.png\">
    <link rel=\"icon\" type=\"image/png\" sizes=\"32x32\" href=\"";
        // line 32
        echo twig_escape_filter($this->env, ($context["img_dir"] ?? null), "html", null, true);
        echo "/favicon/favicon-32x32.png\">
    <link rel=\"icon\" type=\"image/png\" sizes=\"96x96\" href=\"";
        // line 33
        echo twig_escape_filter($this->env, ($context["img_dir"] ?? null), "html", null, true);
        echo "/favicon/favicon-96x96.png\">
    <link rel=\"icon\" type=\"image/png\" sizes=\"16x16\" href=\"";
        // line 34
        echo twig_escape_filter($this->env, ($context["img_dir"] ?? null), "html", null, true);
        echo "/favicon/favicon-16x16.png\">
<meta name=\"reply-to\" content=\"israel.souza@inss.gov.br\">
<meta name=\"description\" content=\"Gerenciador de Grupos de Trabalho SR1 São Paulo\">
<meta name=\"author\" content=\"Equipe de Desenvolvimento Polo SR1 São Paulo\">
<meta charset=\"UTF-8\">
<meta name=\"copyright\" content=\"INSS\" />
<link rel=\"copyright\" href=\"inss.gov.br\">
<meta name=\"keywords\" content=\"inss,previdencia,equipe de trabalho remoto,grupos de trabalho\">
<meta property=\"og:title\" content=\"Tellus\">
<meta property=\"og:description\" content=\"Software de Gestão para Grupos de Trabalho\">
<title>Tellus - Gerenciador de Grupos de Trabalho</title>


 

";
        // line 49
        $this->loadTemplate("/partes/helpers/carrega_angular.twig", "partes/header_basico.twig", 49)->display($context);
        // line 50
        $this->loadTemplate("/partes/helpers/carrega_app.twig", "partes/header_basico.twig", 50)->display($context);
        // line 51
        $this->loadTemplate("/partes/helpers/carrega_app_services.twig", "partes/header_basico.twig", 51)->display($context);
        // line 52
        $this->loadTemplate("/partes/helpers/carrega_app_controllers.twig", "partes/header_basico.twig", 52)->display($context);
        // line 53
        echo "




";
        // line 58
        $this->displayBlock('post_header', $context, $blocks);
        // line 59
        echo "</head>
";
    }

    // line 58
    public function block_post_header($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, ($context["post_inline"] ?? null), "html", null, true);
    }

    public function getTemplateName()
    {
        return "partes/header_basico.twig";
    }

    public function getDebugInfo()
    {
        return array (  147 => 58,  142 => 59,  140 => 58,  133 => 53,  131 => 52,  129 => 51,  127 => 50,  125 => 49,  107 => 34,  103 => 33,  99 => 32,  95 => 31,  91 => 30,  87 => 29,  83 => 28,  79 => 27,  75 => 26,  71 => 25,  67 => 24,  63 => 23,  59 => 22,  56 => 21,  49 => 16,  45 => 14,  43 => 13,  40 => 12,  38 => 11,  27 => 2,  21 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "partes/header_basico.twig", "/Users/israel/Sites/vendas/gui/template/partes/header_basico.twig");
    }
}
