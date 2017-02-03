<?php

/* partes/helpers/tags_script.twig */
class __TwigTemplate_8dd70e61cb463c4d536fdac954ec4f0aa73f58f844aa5d347874147b9d4f6e59 extends Twig_Template
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
        // line 19
        echo "
";
    }

    // line 2
    public function getcss_loading($__lista__ = null, $__css_dir__ = null, $__tipo__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "lista" => $__lista__,
            "css_dir" => $__css_dir__,
            "tipo" => $__tipo__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 3
            if ((((array_key_exists("tipo", $context)) ? (_twig_default_filter(($context["tipo"] ?? null), "link")) : ("link")) == "link")) {
                // line 4
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["lista"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["nome"]) {
                    // line 5
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($context["nome"]);
                    foreach ($context['_seq'] as $context["endereco"] => $context["media"]) {
                        // line 6
                        echo "<link href=\"";
                        echo twig_escape_filter($this->env, ($context["css_dir"] ?? null), "html", null, true);
                        echo "/";
                        echo twig_escape_filter($this->env, $context["endereco"], "html", null, true);
                        echo "\" type=\"text/css\" rel=\"stylesheet\" ";
                        if ((twig_length_filter($this->env, ((array_key_exists("media", $context)) ? (_twig_default_filter($context["media"], "")) : (""))) >= 2)) {
                            echo "media=\"";
                            echo twig_escape_filter($this->env, $context["media"], "html", null, true);
                            echo "\"";
                        }
                        echo "/>
";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['endereco'], $context['media'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['nome'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
            } else {
                // line 10
                echo "<style>
";
                // line 11
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["lista"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["nome"]) {
                    // line 12
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($context["nome"]);
                    foreach ($context['_seq'] as $context["endereco"] => $context["media"]) {
                        // line 13
                        echo "@import url(\"";
                        echo twig_escape_filter($this->env, ($context["css_dir"] ?? null), "html", null, true);
                        echo "/";
                        echo twig_escape_filter($this->env, $context["endereco"], "html", null, true);
                        echo "\")";
                        if ((twig_length_filter($this->env, ((array_key_exists("media", $context)) ? (_twig_default_filter($context["media"], "")) : (""))) >= 2)) {
                            echo " ";
                            echo twig_escape_filter($this->env, $context["media"], "html", null, true);
                        }
                        echo ";
";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['endereco'], $context['media'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['nome'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 16
                echo "</style>
";
            }
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 20
    public function getjs_loading($__nome__ = null, $__js_dir__ = null, $__tipo__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "nome" => $__nome__,
            "js_dir" => $__js_dir__,
            "tipo" => $__tipo__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 21
            if ((((array_key_exists("tipo", $context)) ? (_twig_default_filter(($context["tipo"] ?? null), "sincrono")) : ("sincrono")) == "sincrono")) {
                // line 22
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["nome"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["nome_util"]) {
                    // line 23
                    echo "<script type='text/javascript' src=\"";
                    echo twig_escape_filter($this->env, ($context["js_dir"] ?? null), "html", null, true);
                    echo "/";
                    echo twig_escape_filter($this->env, $context["nome_util"], "html", null, true);
                    echo "\" ></script>
";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['nome_util'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
            } else {
                // line 25
                echo "        
";
                // line 26
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["nome"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["nome_util"]) {
                    // line 27
                    echo "<script type='text/javascript' src=\"";
                    echo twig_escape_filter($this->env, ($context["js_dir"] ?? null), "html", null, true);
                    echo "/";
                    echo twig_escape_filter($this->env, $context["nome_util"], "html", null, true);
                    echo "\" async=\"async\" ></script>
";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['nome_util'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
            }
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "partes/helpers/tags_script.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 27,  153 => 26,  150 => 25,  138 => 23,  134 => 22,  132 => 21,  118 => 20,  101 => 16,  81 => 13,  77 => 12,  73 => 11,  70 => 10,  48 => 6,  44 => 5,  40 => 4,  38 => 3,  24 => 2,  19 => 19,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "partes/helpers/tags_script.twig", "/Users/israel/Sites/vendas/gui/template/partes/helpers/tags_script.twig");
    }
}
