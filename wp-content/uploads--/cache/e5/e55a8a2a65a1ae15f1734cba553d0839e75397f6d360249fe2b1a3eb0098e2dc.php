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

/* @views/components/journey-block/journey-block.twig */
class __TwigTemplate_531b33d45c2cf5c8ed2592cbc31821b5c830e23d51753929e57e02c1e0ba3382 extends \Twig\Template
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
        if (twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "journey_categories", [], "any", false, false, false, 1)) {
            // line 2
            echo "<section class=\"journey-block js-journey-block\">
\t<div class=\"container journey-block-container\">
\t\t<div class=\"inner\">
\t\t\t<h2 class=\"primary-title\">";
            // line 5
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "journey_title", [], "any", false, false, false, 5), "html", null, true);
            echo "</h2>
      <p class=\"lead text-center\">";
            // line 6
            echo twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "journey_desc", [], "any", false, false, false, 6);
            echo "</p>
\t\t\t<div class=\"journey-list\">
        ";
            // line 8
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_reverse_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "journey_categories", [], "any", false, false, false, 8)));
            foreach ($context['_seq'] as $context["_key"] => $context["journeyItem"]) {
                // line 9
                echo "          <a href=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "journey_link", [], "any", false, false, false, 9), "html", null, true);
                echo "\" class=\"journey-item\" data-index=\"?search=&training_cat_id=";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["journeyItem"], "category", [], "any", false, false, false, 9), "term_id", [], "any", false, false, false, 9), "html", null, true);
                echo "\">
            <div class=\"journey-item-inner\">
              <div class=\"journey-item-icon\">
                <span class=\"";
                // line 12
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["journeyItem"], "icon", [], "any", false, false, false, 12), "html", null, true);
                echo "\"></span>
              </div>
              <div class=\"journey-item-content\">
                <h4 class=\"journey-item-title\">";
                // line 15
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["journeyItem"], "category", [], "any", false, false, false, 15), "name", [], "any", false, false, false, 15), "html", null, true);
                echo "</h4>
                <div class=\"journey-item-description\">";
                // line 16
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["journeyItem"], "category", [], "any", false, false, false, 16), "description", [], "any", false, false, false, 16);
                echo "</div>
              </div>
            </div>
          </a>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['journeyItem'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 21
            echo "\t\t\t</div>
\t\t</div>
\t</div>
</section>
";
        }
    }

    public function getTemplateName()
    {
        return "@views/components/journey-block/journey-block.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 21,  76 => 16,  72 => 15,  66 => 12,  57 => 9,  53 => 8,  48 => 6,  44 => 5,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@views/components/journey-block/journey-block.twig", "D:\\wamp64\\www\\lec2\\wp-content\\themes\\lec2\\resources\\views\\frontend\\src\\views\\components\\journey-block\\journey-block.twig");
    }
}
