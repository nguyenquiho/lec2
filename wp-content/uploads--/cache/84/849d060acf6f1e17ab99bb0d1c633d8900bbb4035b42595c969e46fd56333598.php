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

/* @views/components/training-card/training-card.twig */
class __TwigTemplate_671bcd34b9447b7f0c8d56ca9edd60eeac12bd0e6672da405260d2eec40e8204 extends \Twig\Template
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
        if (twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "training_list", [], "any", false, false, false, 1)) {
            // line 2
            echo "\t<div class=\"training-block js-training-card\">
\t\t<div class=\"container\">
\t\t\t<h2>";
            // line 4
            echo call_user_func_array($this->env->getFilter('content')->getCallable(), [twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "title", [], "any", false, false, false, 4)]);
            echo "</h2>
\t\t\t<div class=\"training-list row\">
\t\t\t\t";
            // line 6
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "training_list", [], "any", false, false, false, 6));
            foreach ($context['_seq'] as $context["_key"] => $context["trainingItem"]) {
                // line 7
                echo "\t\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t\t<a class=\"training-item\" href=\"";
                // line 8
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["global"] ?? null), "theme_options", [], "any", false, false, false, 8), "journey", [], "any", false, false, false, 8), "journey_link", [], "any", false, false, false, 8), "html", null, true);
                echo "\" data-index=\"?search=&training_type_id=";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["trainingItem"], "training_type", [], "any", false, false, false, 8), "ID", [], "any", false, false, false, 8), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t<div class=\"training-img\">
\t\t\t\t\t\t\t\t<img src=\"";
                // line 10
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["trainingItem"], "training_type", [], "any", false, false, false, 10), "thumbnail", [], "any", false, false, false, 10), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["trainingItem"], "training_type", [], "any", false, false, false, 10), "post_title", [], "any", false, false, false, 10), "html", null, true);
                echo "\"/>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"training-content\">
\t\t\t\t\t\t\t\t<h4 class=\"training-title\">
\t\t\t\t\t\t\t\t\t";
                // line 14
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["trainingItem"], "training_type", [], "any", false, false, false, 14), "post_title", [], "any", false, false, false, 14), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t\t<p class=\"training-description\">
\t\t\t\t\t\t\t\t\t";
                // line 17
                echo twig_get_attribute($this->env, $this->source, $context["trainingItem"], "content", [], "any", false, false, false, 17);
                echo "
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t<div class=\"training-cost\">";
                // line 19
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["global"] ?? null), "theme_options", [], "any", false, false, false, 19), "text_translation", [], "any", false, false, false, 19), "default_global_settings_text", [], "any", false, false, false, 19), "cost", [], "any", false, false, false, 19), "html", null, true);
                echo ":
\t\t\t\t\t\t\t\t\t<strong>
\t\t\t\t\t\t\t\t\t\t";
                // line 21
                echo twig_get_attribute($this->env, $this->source, $context["trainingItem"], "cost", [], "any", false, false, false, 21);
                echo "
\t\t\t\t\t\t\t\t\t</strong>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"training-format\">";
                // line 24
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["global"] ?? null), "theme_options", [], "any", false, false, false, 24), "text_translation", [], "any", false, false, false, 24), "default_global_settings_text", [], "any", false, false, false, 24), "format", [], "any", false, false, false, 24), "html", null, true);
                echo ":
\t\t\t\t\t\t\t\t\t<strong>
\t\t\t\t\t\t\t\t\t\t";
                // line 26
                echo twig_get_attribute($this->env, $this->source, $context["trainingItem"], "format", [], "any", false, false, false, 26);
                echo "
\t\t\t\t\t\t\t\t\t</strong>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"training-time\">";
                // line 29
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["global"] ?? null), "theme_options", [], "any", false, false, false, 29), "text_translation", [], "any", false, false, false, 29), "default_global_settings_text", [], "any", false, false, false, 29), "duration", [], "any", false, false, false, 29), "html", null, true);
                echo ":
\t\t\t\t\t\t\t\t\t<strong>
\t\t\t\t\t\t\t\t\t\t";
                // line 31
                echo twig_get_attribute($this->env, $this->source, $context["trainingItem"], "time", [], "any", false, false, false, 31);
                echo "
\t\t\t\t\t\t\t\t\t</strong>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trainingItem'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 38
            echo "\t\t\t</div>
\t\t</div>
\t</div>
";
        }
    }

    public function getTemplateName()
    {
        return "@views/components/training-card/training-card.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 38,  109 => 31,  104 => 29,  98 => 26,  93 => 24,  87 => 21,  82 => 19,  77 => 17,  71 => 14,  62 => 10,  55 => 8,  52 => 7,  48 => 6,  43 => 4,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@views/components/training-card/training-card.twig", "D:\\wamp64\\www\\lec2\\wp-content\\themes\\lec2\\resources\\views\\frontend\\src\\views\\components\\training-card\\training-card.twig");
    }
}
