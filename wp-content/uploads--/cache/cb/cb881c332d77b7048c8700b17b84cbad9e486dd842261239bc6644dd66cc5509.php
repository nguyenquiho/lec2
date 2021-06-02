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

/* @views/components/banner-loop/banner-loop.twig */
class __TwigTemplate_471666c5fd29e75c4f7de20a96a6b4b790abab97cd8ef149ca70d39f2aad0581 extends \Twig\Template
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
        // line 1
        echo "<div class=\"banner-loop-block\">
\t<div class=\"container\">
\t\t";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["data"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 4
            echo "\t\t\t<div class=\"banner-loop\">
\t\t\t\t";
            // line 5
            if (twig_get_attribute($this->env, $this->source, $context["item"], "image", [], "any", false, false, false, 5)) {
                // line 6
                echo "\t\t\t\t\t<div class=\"banner-loop-image\"><img class=\"rounded-8\" src=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "image", [], "any", false, false, false, 6), "html", null, true);
                echo "\"/></div>
\t\t\t\t\t<div class=\"banner-loop-content\">
\t\t\t\t\t\t";
                // line 8
                if (twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 8)) {
                    // line 9
                    echo "\t\t\t\t\t\t\t<h2 class=\"banner-loop-title\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 9), "html", null, true);
                    echo "</h2>
\t\t\t\t\t\t";
                }
                // line 11
                echo "\t\t\t\t\t\t";
                if (twig_get_attribute($this->env, $this->source, $context["item"], "is_show", [], "any", false, false, false, 11)) {
                    // line 12
                    echo "\t\t\t\t\t\t\t<img class=\"banner-loop-logo\" src=\"";
                    echo twig_escape_filter($this->env, ($context["partner_logo"] ?? null), "html", null, true);
                    echo "\"/>
\t\t\t\t\t\t";
                }
                // line 14
                echo "\t\t\t\t\t\t<div class=\"banner-loop-text\">";
                echo call_user_func_array($this->env->getFilter('content')->getCallable(), [twig_get_attribute($this->env, $this->source, $context["item"], "content", [], "any", false, false, false, 14)]);
                echo "</div>
\t\t\t\t\t</div>
\t\t\t\t";
            } else {
                // line 17
                echo "\t\t\t\t\t<div class=\"banner-loop-content-text\">
\t\t\t\t\t\t";
                // line 18
                if (twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 18)) {
                    // line 19
                    echo "\t\t\t\t\t\t\t<h2 class=\"banner-loop-title\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 19), "html", null, true);
                    echo "</h2>
\t\t\t\t\t\t";
                }
                // line 21
                echo "            ";
                if (twig_get_attribute($this->env, $this->source, $context["item"], "is_show", [], "any", false, false, false, 21)) {
                    // line 22
                    echo "              <img class=\"banner-loop-logo\" src=\"";
                    echo twig_escape_filter($this->env, ($context["partner_logo"] ?? null), "html", null, true);
                    echo "\"/>
            ";
                }
                // line 24
                echo "\t\t\t\t\t\t<div class=\"banner-loop-text\">";
                echo call_user_func_array($this->env->getFilter('content')->getCallable(), [twig_get_attribute($this->env, $this->source, $context["item"], "content", [], "any", false, false, false, 24)]);
                echo "</div>
\t\t\t\t\t</div>
\t\t\t\t";
            }
            // line 27
            echo "\t\t\t</div>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "\t</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "@views/components/banner-loop/banner-loop.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 29,  107 => 27,  100 => 24,  94 => 22,  91 => 21,  85 => 19,  83 => 18,  80 => 17,  73 => 14,  67 => 12,  64 => 11,  58 => 9,  56 => 8,  50 => 6,  48 => 5,  45 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@views/components/banner-loop/banner-loop.twig", "D:\\wamp64\\www\\lec2\\wp-content\\themes\\lec2\\resources\\views\\frontend\\src\\views\\components\\banner-loop\\banner-loop.twig");
    }
}
