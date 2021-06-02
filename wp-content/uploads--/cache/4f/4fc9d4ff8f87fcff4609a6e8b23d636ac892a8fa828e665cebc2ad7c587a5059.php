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

/* pages/trainings-overview-listing/trainings-overview-listing.twig */
class __TwigTemplate_63099d02b71be364a60ea3733670427dcdb00bd14420f2c38bcebd95de2e1398 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'pageContent' => [$this, 'block_pageContent'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@views/layouts/layout-default.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        $context["viewData"] = ["bodyClass" => "trainings-overview-listing", "jsController" => "trainings-overview-listing", "headerTheme" => "white", "footerType" => "primary"];
        // line 1
        $this->parent = $this->loadTemplate("@views/layouts/layout-default.twig", "pages/trainings-overview-listing/trainings-overview-listing.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_pageContent($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 15
        echo "  ";
        $context["bannerData"] = ["top_banner_title" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 16
($context["page_data"] ?? null), "custom_data", [], "any", false, false, false, 16), "banner", [], "any", false, false, false, 16), "title", [], "any", false, false, false, 16), "top_banner_description" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 17
($context["page_data"] ?? null), "custom_data", [], "any", false, false, false, 17), "banner", [], "any", false, false, false, 17), "description", [], "any", false, false, false, 17), "top_banner_background" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 18
($context["page_data"] ?? null), "custom_data", [], "any", false, false, false, 18), "banner", [], "any", false, false, false, 18), "image", [], "any", false, false, false, 18)];
        // line 20
        echo "  ";
        $this->loadTemplate("@views/pages/trainings-overview-listing/includes/top-banner/top-banner.twig", "pages/trainings-overview-listing/trainings-overview-listing.twig", 20)->display(twig_array_merge($context, ["topBannerData" =>         // line 21
($context["bannerData"] ?? null), "classPage" => "trainings-listing", "theme" => "white"]));
        // line 25
        echo "  <div class=\"trainings-overview-content\">
    ";
        // line 26
        $this->loadTemplate("@views/components/filter-form/filter-form.twig", "pages/trainings-overview-listing/trainings-overview-listing.twig", 26)->display(twig_array_merge($context, ["action" => twig_get_attribute($this->env, $this->source,         // line 27
($context["page_data"] ?? null), "url", [], "any", false, false, false, 27), "trainingType" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 28
($context["page_data"] ?? null), "custom_data", [], "any", false, false, false, 28), "training_types", [], "any", false, false, false, 28), "trainingCat" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 29
($context["page_data"] ?? null), "custom_data", [], "any", false, false, false, 29), "cats", [], "any", false, false, false, 29), "searchLabel" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 30
($context["global"] ?? null), "theme_options", [], "any", false, false, false, 30), "text_translation", [], "any", false, false, false, 30), "default_global_settings_text", [], "any", false, false, false, 30), "search", [], "any", false, false, false, 30), "buttonSearchText" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 31
($context["global"] ?? null), "theme_options", [], "any", false, false, false, 31), "text_translation", [], "any", false, false, false, 31), "default_global_settings_buttons", [], "any", false, false, false, 31), "filter", [], "any", false, false, false, 31)]));
        // line 33
        echo "    ";
        $this->loadTemplate("@views/pages/trainings-overview-listing/includes/course-listing/course-listing.twig", "pages/trainings-overview-listing/trainings-overview-listing.twig", 33)->display(twig_array_merge($context, ["list" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 34
($context["page_data"] ?? null), "custom_data", [], "any", false, false, false, 34), "trainings", [], "any", false, false, false, 34), "data", [], "any", false, false, false, 34), "current_page" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 35
($context["page_data"] ?? null), "custom_data", [], "any", false, false, false, 35), "trainings", [], "any", false, false, false, 35), "current_page", [], "any", false, false, false, 35), "total" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 36
($context["page_data"] ?? null), "custom_data", [], "any", false, false, false, 36), "trainings", [], "any", false, false, false, 36), "total_pages", [], "any", false, false, false, 36), "path" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 37
($context["page_data"] ?? null), "custom_data", [], "any", false, false, false, 37), "trainings", [], "any", false, false, false, 37), "path", [], "any", false, false, false, 37)]));
        // line 39
        echo "  </div>
  ";
        // line 40
        $this->loadTemplate("@views/components/get-opportunities/get-opportunities.twig", "pages/trainings-overview-listing/trainings-overview-listing.twig", 40)->display(twig_array_merge($context, ["btnTheme" => "primary"]));
    }

    public function getTemplateName()
    {
        return "pages/trainings-overview-listing/trainings-overview-listing.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 40,  80 => 39,  78 => 37,  77 => 36,  76 => 35,  75 => 34,  73 => 33,  71 => 31,  70 => 30,  69 => 29,  68 => 28,  67 => 27,  66 => 26,  63 => 25,  61 => 21,  59 => 20,  57 => 18,  56 => 17,  55 => 16,  53 => 15,  49 => 14,  44 => 1,  42 => 6,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "pages/trainings-overview-listing/trainings-overview-listing.twig", "D:\\wamp64\\www\\lec2\\wp-content\\themes\\lec2\\resources\\views\\frontend\\src\\views\\pages\\trainings-overview-listing\\trainings-overview-listing.twig");
    }
}
