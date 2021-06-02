<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @views/macros/pagination/pagination.twig */
class __TwigTemplate_e259034d397fd8d29771c464d533bde7ce394d6c6a4904b3caea3aceef17e980 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 1
    public function macro_pagination($__total__ = null, $__current__ = null, $__url__ = null, $__nearbyPagesLimit__ = 4, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "total" => $__total__,
            "current" => $__current__,
            "url" => $__url__,
            "nearbyPagesLimit" => $__nearbyPagesLimit__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 2
            echo "\t";
            if ((($context["total"] ?? null) > 1)) {
                // line 3
                echo "\t\t<div class=\"pagination\">
\t\t\t";
                // line 4
                $context["prevDisable"] = "";
                // line 5
                echo "\t\t\t";
                if ((($context["current"] ?? null) == 1)) {
                    // line 6
                    echo "\t\t\t\t";
                    $context["prevDisable"] = " disabled";
                    // line 7
                    echo "\t\t\t";
                }
                // line 8
                echo "\t\t\t<a class=\"prev page-number";
                echo twig_escape_filter($this->env, ($context["prevDisable"] ?? null), "html", null, true);
                echo "\" href=\"";
                echo twig_escape_filter($this->env, (($context["url"] ?? null) . (($context["current"] ?? null) - 1)));
                echo "\"><em class=\"icon-chevron-left-solid\"></em></a>
\t\t\t";
                // line 9
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, ($context["total"] ?? null)));
                $context['loop'] = [
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                ];
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 10
                    echo "\t\t\t\t";
                    if ((0 == ((($context["current"] ?? null) - ($context["nearbyPagesLimit"] ?? null)) - twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 10)))) {
                        // line 11
                        echo "\t\t\t\t\t<a class=\"page-number\" href=\"";
                        echo twig_escape_filter($this->env, (($context["url"] ?? null) . 1));
                        echo "\">1</a>
\t\t\t\t\t";
                        // line 12
                        if ((1 != twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 12))) {
                            // line 13
                            echo "\t\t\t\t\t\t<span class=\"page-number\">...</span>
\t\t\t\t\t";
                        }
                        // line 15
                        echo "\t\t\t\t";
                    } elseif (((0 == ((($context["current"] ?? null) + ($context["nearbyPagesLimit"] ?? null)) - twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 15))) && ((($context["current"] ?? null) + ($context["nearbyPagesLimit"] ?? null)) < ($context["total"] ?? null)))) {
                        // line 16
                        echo "\t\t\t\t\t<span class=\"page-number\">...</span>
\t\t\t\t";
                    } elseif ((0 < ((                    // line 17
($context["current"] ?? null) - ($context["nearbyPagesLimit"] ?? null)) - twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 17)))) {
                        // line 18
                        echo "\t\t\t\t";
                    } elseif ((0 > ((($context["current"] ?? null) + ($context["nearbyPagesLimit"] ?? null)) - twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 18)))) {
                        // line 19
                        echo "\t\t\t\t";
                    } else {
                        // line 20
                        echo "\t\t\t\t\t";
                        if ((($context["current"] ?? null) == twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 20))) {
                            // line 21
                            echo "\t\t\t\t\t\t<span class=\"page-number current\" aria-current=\"page\">";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 21), "html", null, true);
                            echo "</span>
\t\t\t\t\t";
                        } else {
                            // line 23
                            echo "\t\t\t\t\t\t<a class=\"page-number\" href=\"";
                            echo twig_escape_filter($this->env, (($context["url"] ?? null) . twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 23)), "html", null, true);
                            echo "\">";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 23), "html", null, true);
                            echo "</a>
\t\t\t\t\t";
                        }
                        // line 25
                        echo "\t\t\t\t";
                    }
                    // line 26
                    echo "\t\t\t";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 27
                echo "\t\t\t";
                if (((($context["current"] ?? null) != ($context["total"] ?? null)) && ((($context["current"] ?? null) + ($context["nearbyPagesLimit"] ?? null)) < ($context["total"] ?? null)))) {
                    // line 28
                    echo "\t\t\t\t<a class=\"page-number\" href=\"";
                    echo twig_escape_filter($this->env, (($context["url"] ?? null) . ($context["total"] ?? null)));
                    echo "\">";
                    echo twig_escape_filter($this->env, ($context["total"] ?? null), "html", null, true);
                    echo "</a>
\t\t\t";
                }
                // line 30
                echo "\t\t\t";
                $context["nextDisable"] = "";
                // line 31
                echo "\t\t\t";
                if ((($context["current"] ?? null) >= ($context["total"] ?? null))) {
                    // line 32
                    echo "\t\t\t\t";
                    $context["nextDisable"] = " disabled";
                    // line 33
                    echo "\t\t\t";
                }
                // line 34
                echo "\t\t\t<a class=\"next page-number";
                echo twig_escape_filter($this->env, ($context["nextDisable"] ?? null), "html", null, true);
                echo "\" href=\"";
                echo twig_escape_filter($this->env, (($context["url"] ?? null) . (($context["current"] ?? null) + 1)));
                echo "\"><em class=\"icon-chevron-right-solid\"></em></a>
\t\t</div>
\t";
            }

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "@views/macros/pagination/pagination.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  181 => 34,  178 => 33,  175 => 32,  172 => 31,  169 => 30,  161 => 28,  158 => 27,  144 => 26,  141 => 25,  133 => 23,  127 => 21,  124 => 20,  121 => 19,  118 => 18,  116 => 17,  113 => 16,  110 => 15,  106 => 13,  104 => 12,  99 => 11,  96 => 10,  79 => 9,  72 => 8,  69 => 7,  66 => 6,  63 => 5,  61 => 4,  58 => 3,  55 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@views/macros/pagination/pagination.twig", "D:\\wamp64\\www\\lec2\\wp-content\\themes\\lec2\\resources\\views\\frontend\\src\\views\\macros\\pagination\\pagination.twig");
    }
}
