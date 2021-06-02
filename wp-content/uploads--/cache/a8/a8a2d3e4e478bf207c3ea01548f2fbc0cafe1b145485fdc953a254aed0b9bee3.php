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

/* @views/pages/trainings-overview-listing/includes/top-banner/top-banner.twig */
class __TwigTemplate_b503a3a8992760cedcafbfe2899978fae25194e637408b98d4976c0af84c3b81 extends \Twig\Template
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
        $macros["forms"] = $this->macros["forms"] = $this->loadTemplate("@views/macros/forms/forms.twig", "@views/pages/trainings-overview-listing/includes/top-banner/top-banner.twig", 1)->unwrap();
        // line 2
        echo "

<div class=\"top-banner top-banner--";
        // line 4
        echo twig_escape_filter($this->env, (((isset($context["theme"]) || array_key_exists("theme", $context))) ? (_twig_default_filter(($context["theme"] ?? null), "default")) : ("default")), "html", null, true);
        echo " top-banner--";
        echo twig_escape_filter($this->env, ($context["classPage"] ?? null), "html", null, true);
        echo "\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"";
        // line 7
        echo twig_escape_filter($this->env, (((isset($context["colContent"]) || array_key_exists("colContent", $context))) ? (_twig_default_filter(($context["colContent"] ?? null), "col-md-6")) : ("col-md-6")), "html", null, true);
        echo "\">
        <div class=\"top-banner-content\">
          <h1 rv-text=\"trainings.category.name\"></h1>
          <p class=\"lead\" rv-text=\"trainings.category.description\"></p>
        </div>
      </div>
      <div class=\"";
        // line 13
        echo twig_escape_filter($this->env, (((isset($context["colImage"]) || array_key_exists("colImage", $context))) ? (_twig_default_filter(($context["colImage"] ?? null), "col-md-6")) : ("col-md-6")), "html", null, true);
        echo "\">
        ";
        // line 14
        if (twig_get_attribute($this->env, $this->source, ($context["topBannerData"] ?? null), "top_banner_background", [], "any", false, false, false, 14)) {
            // line 15
            echo "          <div class=\"top-banner-image\">
            <img class=\"rounded-8\" src=\"";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["topBannerData"] ?? null), "top_banner_background", [], "any", false, false, false, 16), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["topBannerData"] ?? null), "top_banner_title", [], "any", false, false, false, 16), "html", null, true);
            echo "\"/>
          </div>
         ";
        }
        // line 19
        echo "      </div>
    </div>
  </div>
</div>

";
    }

    public function getTemplateName()
    {
        return "@views/pages/trainings-overview-listing/includes/top-banner/top-banner.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 19,  69 => 16,  66 => 15,  64 => 14,  60 => 13,  51 => 7,  43 => 4,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@views/pages/trainings-overview-listing/includes/top-banner/top-banner.twig", "D:\\wamp64\\www\\lec2\\wp-content\\themes\\lec2\\resources\\views\\frontend\\src\\views\\pages\\trainings-overview-listing\\includes\\top-banner\\top-banner.twig");
    }
}
