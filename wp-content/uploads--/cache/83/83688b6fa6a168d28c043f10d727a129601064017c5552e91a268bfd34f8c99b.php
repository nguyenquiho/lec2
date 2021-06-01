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

/* @views/macros/forms/forms.twig */
class __TwigTemplate_6e628623ed2bd4da4b0cb5a1a32829441a96de569c58a4a6a814b876aefbb091 extends \Twig\Template
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
        // line 10
        echo "
";
        // line 20
        echo "
";
    }

    // line 1
    public function macro_input($__params__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "params" => $__params__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 2
            echo "\t<input ";
            if (twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "id", [], "any", false, false, false, 2)) {
                echo " id=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "id", [], "any", false, false, false, 2), "html", null, true);
                echo "\" ";
            }
            echo " class=\"form-control ";
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "classes", [], "any", true, true, false, 2)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "classes", [], "any", false, false, false, 2), "")) : ("")), "html", null, true);
            echo "\" type=\"";
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "type", [], "any", true, true, false, 2)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "type", [], "any", false, false, false, 2), "text")) : ("text")), "html", null, true);
            echo "\" name=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "name", [], "any", false, false, false, 2), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "value", [], "any", true, true, false, 2)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "value", [], "any", false, false, false, 2), "")) : ("")), "html", null, true);
            echo "\" ";
            echo ((twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "required", [], "any", false, false, false, 2)) ? ("required") : (""));
            echo " ";
            echo ((twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "autocomplete", [], "any", false, false, false, 2)) ? ("") : ("autocomplete=\"off\""));
            echo " ";
            if (twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "placeholder", [], "any", false, false, false, 2)) {
                echo " placeholder=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "placeholder", [], "any", false, false, false, 2), "html", null, true);
                echo "\" ";
            }
            echo "/>
\t";
            // line 3
            if (twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "label", [], "any", false, false, false, 3)) {
                // line 4
                echo "\t\t<label for=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "id", [], "any", false, false, false, 4), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "label", [], "any", false, false, false, 4), "html", null, true);
                echo "</label>
\t";
            }
            // line 6
            echo "  ";
            if (twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "requireOption", [], "any", false, false, false, 6)) {
                // line 7
                echo "\t\t<span class=\"required-hint\"></span>
\t";
            }

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 11
    public function macro_textarea($__params__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "params" => $__params__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 12
            echo "\t<textarea ";
            if (twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "id", [], "any", false, false, false, 12)) {
                echo " id=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "id", [], "any", false, false, false, 12), "html", null, true);
                echo "\" ";
            }
            echo " class=\"form-control ";
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "classes", [], "any", true, true, false, 12)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "classes", [], "any", false, false, false, 12), "")) : ("")), "html", null, true);
            echo "\" ";
            echo ((twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "required", [], "any", false, false, false, 12)) ? ("required") : (""));
            echo " rows=\"";
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "rows", [], "any", true, true, false, 12)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "rows", [], "any", false, false, false, 12), 3)) : (3)), "html", null, true);
            echo "\" name=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "name", [], "any", false, false, false, 12), "html", null, true);
            echo "\" ";
            if (twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "placeholder", [], "any", false, false, false, 12)) {
                echo " placeholder=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "placeholder", [], "any", false, false, false, 12), "html", null, true);
                echo "\" ";
            }
            echo "></textarea>
\t";
            // line 13
            if (twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "label", [], "any", false, false, false, 13)) {
                // line 14
                echo "\t\t<label for=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "id", [], "any", false, false, false, 14), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "label", [], "any", false, false, false, 14), "html", null, true);
                echo "</label>
\t";
            }
            // line 16
            echo "  ";
            if (twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "requireOption", [], "any", false, false, false, 16)) {
                // line 17
                echo "\t\t<span class=\"required-hint\"></span>
\t";
            }

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 21
    public function macro_select($__params__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "params" => $__params__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 22
            echo "\t<div class=\"select-wrapper\">
\t\t";
            // line 23
            if (twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "label", [], "any", false, false, false, 23)) {
                // line 24
                echo "\t\t\t<label class=\"select-label\" data-toggle=\"dropdown\" for=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "id", [], "any", false, false, false, 24), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "label", [], "any", false, false, false, 24), "html", null, true);
                echo "</label>
\t\t";
            }
            // line 26
            echo "    ";
            if (twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "requireOption", [], "any", false, false, false, 26)) {
                // line 27
                echo "\t\t  <span class=\"required-hint\"></span>
\t  ";
            }
            // line 29
            echo "\t\t<select name=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "name", [], "any", false, false, false, 29), "html", null, true);
            echo "\" id=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "id", [], "any", false, false, false, 29), "html", null, true);
            echo "\" ";
            echo ((twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "search", [], "any", false, false, false, 29)) ? ("data-live-search=\"true\"") : (""));
            echo " ";
            echo ((twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "required", [], "any", false, false, false, 29)) ? ("required") : (""));
            echo " class=\"";
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "classes", [], "any", true, true, false, 29)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "classes", [], "any", false, false, false, 29), "")) : ("")), "html", null, true);
            echo "\" ";
            echo ((twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "multiple", [], "any", false, false, false, 29)) ? ("multiple") : (""));
            echo ">

\t\t\t";
            // line 31
            if (twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "includeBlank", [], "any", false, false, false, 31)) {
                // line 32
                echo "\t\t\t\t<option value=\"\" class=\"blank-option\" selected>";
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "includeText", [], "any", true, true, false, 32)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "includeText", [], "any", false, false, false, 32), "Choose...")) : ("Choose...")), "html", null, true);
                echo "</option>
\t\t\t";
            }
            // line 34
            echo "
\t\t\t";
            // line 36
            echo "\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "options", [], "any", false, false, false, 36));
            foreach ($context['_seq'] as $context["key"] => $context["item"]) {
                // line 37
                echo "\t\t\t\t";
                // line 38
                echo "\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["item"], "value", [], "any", true, true, false, 38) && twig_get_attribute($this->env, $this->source, $context["item"], "label", [], "any", true, true, false, 38))) {
                    // line 39
                    echo "\t\t\t\t\t<option value=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "value", [], "any", false, false, false, 39), "html", null, true);
                    echo "\" ";
                    echo (((twig_get_attribute($this->env, $this->source, $context["item"], "value", [], "any", false, false, false, 39) == twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "selected", [], "any", false, false, false, 39))) ? ("selected") : (""));
                    echo ">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "label", [], "any", false, false, false, 39), "html", null, true);
                    echo "</option>
\t\t\t\t";
                } else {
                    // line 41
                    echo "\t\t\t\t\t";
                    // line 42
                    echo "\t\t\t\t\t";
                    if (twig_test_iterable($context["item"])) {
                        // line 43
                        echo "\t\t\t\t\t\t<optgroup label=\"";
                        echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                        echo "\">
\t\t\t\t\t\t\t";
                        // line 44
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($context["item"]);
                        foreach ($context['_seq'] as $context["subKey"] => $context["subValue"]) {
                            // line 45
                            echo "\t\t\t\t\t\t\t\t<option value=\"";
                            echo twig_escape_filter($this->env, $context["subKey"], "html", null, true);
                            echo "\" ";
                            echo ((($context["subKey"] == twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "selected", [], "any", false, false, false, 45))) ? ("selected") : (""));
                            echo ">";
                            echo twig_escape_filter($this->env, $context["subValue"], "html", null, true);
                            echo "</option>
\t\t\t\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['subKey'], $context['subValue'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 47
                        echo "\t\t\t\t\t\t</optgroup>

\t\t\t\t\t\t";
                        // line 50
                        echo "\t\t\t\t\t";
                    } else {
                        // line 51
                        echo "
\t\t\t\t\t\t";
                        // line 53
                        echo "\t\t\t\t\t\t<option value=\"";
                        echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                        echo "\" ";
                        echo ((($context["key"] == twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "selected", [], "any", false, false, false, 53))) ? ("selected") : (""));
                        echo ">";
                        echo twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
                        echo "</option>
\t\t\t\t\t";
                    }
                    // line 55
                    echo "\t\t\t\t";
                }
                // line 56
                echo "\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 57
            echo "\t\t</select>
\t</div>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "@views/macros/forms/forms.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  305 => 57,  299 => 56,  296 => 55,  286 => 53,  283 => 51,  280 => 50,  276 => 47,  263 => 45,  259 => 44,  254 => 43,  251 => 42,  249 => 41,  239 => 39,  236 => 38,  234 => 37,  229 => 36,  226 => 34,  220 => 32,  218 => 31,  202 => 29,  198 => 27,  195 => 26,  187 => 24,  185 => 23,  182 => 22,  169 => 21,  158 => 17,  155 => 16,  147 => 14,  145 => 13,  122 => 12,  109 => 11,  98 => 7,  95 => 6,  87 => 4,  85 => 3,  58 => 2,  45 => 1,  40 => 20,  37 => 10,);
    }

    public function getSourceContext()
    {
        return new Source("", "@views/macros/forms/forms.twig", "D:\\wamp64\\www\\lec2\\wp-content\\themes\\lec2\\resources\\views\\frontend\\src\\views\\macros\\forms\\forms.twig");
    }
}
