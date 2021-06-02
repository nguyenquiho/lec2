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

/* @views/macros/navigation/nav.twig */
class __TwigTemplate_618b579090797fa70f3dea232d79c13171206f3dbdece85232c5839a4bdb8db1 extends \Twig\Template
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
        $macros["_self"] = $this->macros["_self"] = $this;
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 1
    public function macro_nav($__items__ = null, $__params__ = null, $__i__ = 0, $__level__ = 0, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "items" => $__items__,
            "params" => $__params__,
            "i" => $__i__,
            "level" => $__level__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 2
            echo "  <ul class=\"";
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "classes", [], "any", true, true, false, 2)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "classes", [], "any", false, false, false, 2), "")) : ("")), "html", null, true);
            echo "\" ";
            if (twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "id", [], "any", false, false, false, 2)) {
                echo " id=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "id", [], "any", false, false, false, 2), "html", null, true);
                echo "\" ";
            }
            echo ">
    ";
            // line 3
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
            foreach ($context['_seq'] as $context["key"] => $context["item"]) {
                // line 4
                echo "      ";
                $context["menuItemChiren"] = ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "itemsMenu", [], "any", false, false, false, 4))) ? (" menu-item-has-children") : (null));
                // line 5
                echo "      ";
                $context["i"] = (($context["i"] ?? null) + 1);
                // line 6
                echo "      <li class=\"menu-item-";
                echo twig_escape_filter($this->env, ($context["i"] ?? null), "html", null, true);
                echo " menu-item";
                echo (((($context["i"] ?? null) == twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "index", [], "any", false, false, false, 6))) ? (" current-menu-item") : (null));
                echo " ";
                ((twig_get_attribute($this->env, $this->source, $context["item"], "customClass", [], "any", false, false, false, 6)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "customClass", [], "any", false, false, false, 6), "html", null, true))) : (print ("")));
                echo " ";
                echo twig_escape_filter($this->env, ($context["menuItemChiren"] ?? null), "html", null, true);
                echo "\">
        <a href=\"";
                // line 7
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "href", [], "any", false, false, false, 7), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 7), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 7), "html", null, true);
                echo "</a>
        ";
                // line 8
                if (twig_get_attribute($this->env, $this->source, $context["item"], "description", [], "any", false, false, false, 8)) {
                    // line 9
                    echo "          <span class=\"menu-item-description\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "description", [], "any", false, false, false, 9), "html", null, true);
                    echo "</span>
        ";
                }
                // line 11
                echo "        
        ";
                // line 12
                if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "itemsMenu", [], "any", false, false, false, 12))) {
                    // line 13
                    echo "          ";
                    echo twig_call_macro($macros["_self"], "macro_nav", [twig_get_attribute($this->env, $this->source, $context["item"], "itemsMenu", [], "any", false, false, false, 13), twig_get_attribute($this->env, $this->source, $context["item"], "itemParams", [], "any", false, false, false, 13), ($context["i"] ?? null), (($context["level"] ?? null) + 1)], 13, $context, $this->getSourceContext());
                    echo "
        ";
                }
                // line 15
                echo "      </li>
      ";
                // line 16
                if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "itemsMenu", [], "any", false, false, false, 16))) {
                    // line 17
                    echo "        ";
                    $context["i"] = (($context["i"] ?? null) + twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "itemsMenu", [], "any", false, false, false, 17)));
                    // line 18
                    echo "      ";
                }
                // line 19
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 20
            echo "  </ul>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "@views/macros/navigation/nav.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 20,  126 => 19,  123 => 18,  120 => 17,  118 => 16,  115 => 15,  109 => 13,  107 => 12,  104 => 11,  98 => 9,  96 => 8,  88 => 7,  77 => 6,  74 => 5,  71 => 4,  67 => 3,  56 => 2,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@views/macros/navigation/nav.twig", "D:\\wamp64\\www\\lec2\\wp-content\\themes\\lec2\\resources\\views\\frontend\\src\\views\\macros\\navigation\\nav.twig");
    }
}
