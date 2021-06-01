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

/* @views/pages/home/includes/highlight/highlight.twig */
class __TwigTemplate_a1aac3df5f4601772c3a5f90c3dc316f6d1fc87c17b09fa1ca88c8ba465673d1 extends \Twig\Template
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
        // line 2
        $context["options"] = ["slidesToShow" => 4, "slidesToScroll" => 1, "arrows" => true, "dots" => false, "autoplay" => false, "infinite" => false, "responsive" => [0 => ["breakpoint" => 1024, "settings" => ["slidesToShow" => 2, "arrows" => true]], 1 => ["breakpoint" => 767, "settings" => ["slidesToShow" => 1]]]];
        // line 24
        echo "
";
        // line 25
        if (twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "highlight_list", [], "any", false, false, false, 25)) {
            // line 26
            echo "  <div class=\"highlight-block\">
    <div class=\"container\">
      <h2>";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "highlight_title", [], "any", false, false, false, 28), "html", null, true);
            echo "</h2>
      <div class=\"highlight-list\" data-slick='";
            // line 29
            echo twig_escape_filter($this->env, json_encode(($context["options"] ?? null)), "html", null, true);
            echo "'>
        ";
            // line 30
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "highlight_list", [], "any", false, false, false, 30));
            foreach ($context['_seq'] as $context["_key"] => $context["highlightItem"]) {
                // line 31
                echo "          <div class=\"highlight-col\">
            <div class=\"highlight-item\">
              <div class=\"highlight-icon\">
                <i class=\"icon-tools\"></i>
              </div>
              <h4 class=\"highlight-title\">
                ";
                // line 37
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["highlightItem"], "post_title", [], "any", false, false, false, 37), "html", null, true);
                echo "
              </h4>
              <p class=\"highlight-description\">
                ";
                // line 40
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["highlightItem"], "post_excerpt", [], "any", false, false, false, 40), "html", null, true);
                echo "
              </p>
              <a class=\"highlight-link\" href=\"";
                // line 42
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["highlightItem"], "url", [], "any", false, false, false, 42), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["global"] ?? null), "theme_options", [], "any", false, false, false, 42), "text_translation", [], "any", false, false, false, 42), "default_global_settings_text", [], "any", false, false, false, 42), "explore", [], "any", false, false, false, 42), "html", null, true);
                echo "
                <i class=\"icon-chevron-right-solid\"></i>
              </a>
            </div>
          </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['highlightItem'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 48
            echo "      </div>
    </div>
  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "@views/pages/home/includes/highlight/highlight.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 48,  79 => 42,  74 => 40,  68 => 37,  60 => 31,  56 => 30,  52 => 29,  48 => 28,  44 => 26,  42 => 25,  39 => 24,  37 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "@views/pages/home/includes/highlight/highlight.twig", "D:\\wamp64\\www\\lec2\\wp-content\\themes\\lec2\\resources\\views\\frontend\\src\\views\\pages\\home\\includes\\highlight\\highlight.twig");
    }
}
