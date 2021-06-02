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

/* @views/components/header/header.twig */
class __TwigTemplate_2b8d43468aef12879f5762c8b298224bb2e6882796c0304014e9c49c9173a7fc extends \Twig\Template
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
        echo "<header class=\"site-header ";
        ((twig_get_attribute($this->env, $this->source, ($context["viewData"] ?? null), "headerTheme", [], "any", false, false, false, 1)) ? (print (twig_escape_filter($this->env, (" site-header--" . twig_get_attribute($this->env, $this->source, ($context["viewData"] ?? null), "headerTheme", [], "any", false, false, false, 1)), "html", null, true))) : (print ("")));
        echo "\">
\t<div class=\"header-inner\">
\t\t<div class=\"header-left\">
\t\t\t<a href=\"";
        // line 4
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["global"] ?? null), "home_url", [], "any", false, false, false, 4), "html", null, true);
        echo "\" title=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["global"] ?? null), "theme_options", [], "any", false, false, false, 4), "page_title", [], "any", false, false, false, 4), "html", null, true);
        echo "\">
\t\t\t\t<img src=\"";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["global"] ?? null), "theme_options", [], "any", false, false, false, 5), "website", [], "any", false, false, false, 5), "header_logo", [], "any", false, false, false, 5), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["global"] ?? null), "blog_name", [], "any", false, false, false, 5), "html", null, true);
        echo "\" class=\"logo logo-dark\">
\t\t\t\t<img src=\"";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["global"] ?? null), "theme_options", [], "any", false, false, false, 6), "website", [], "any", false, false, false, 6), "white_header_logo", [], "any", false, false, false, 6), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["global"] ?? null), "blog_name", [], "any", false, false, false, 6), "html", null, true);
        echo "\" class=\"logo logo-white\">
\t\t\t</a>
\t\t</div>
\t\t<div class=\"header-right\">
\t\t\t<button class=\"menu-toggle\" data-href=\"#header-nav\" id=\"menu-toggle\">
\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t</button>
\t\t\t<div id=\"header-nav\">
\t\t\t\t<div class=\"menu-mobile\">
\t\t\t\t\t<div class=\"header-menu\">
\t\t\t\t\t\t";
        // line 18
        $this->loadTemplate("@views/components/menu/menu.twig", "@views/components/header/header.twig", 18)->display($context);
        // line 19
        echo "\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"header-action\">
\t\t\t\t\t\t<a href=\"";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["global"] ?? null), "theme_options", [], "any", false, false, false, 21), "links", [], "any", false, false, false, 21), "trainings_overview_listing_link", [], "any", false, false, false, 21), "html", null, true);
        echo "\" class=\"header-write btn\" data-custom-modal=\"#shortiesForm\" data-show=\"right\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["global"] ?? null), "theme_options", [], "any", false, false, false, 21), "text_translation", [], "any", false, false, false, 21), "default_global_settings_text", [], "any", false, false, false, 21), "default_global_settings_shorties", [], "any", false, false, false, 21), "html", null, true);
        echo "<em class=\"icon-caret-down\"></em></a>
\t\t\t\t\t\t<button class=\"header-request btn ";
        // line 22
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["viewData"] ?? null), "btnRequestClass", [], "any", true, true, false, 22)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["viewData"] ?? null), "btnRequestClass", [], "any", false, false, false, 22), "btn-primary")) : ("btn-primary")), "html", null, true);
        echo "\" data-toggle=\"modal\" data-target=\"#contactForm\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["global"] ?? null), "theme_options", [], "any", false, false, false, 22), "text_translation", [], "any", false, false, false, 22), "default_global_settings_text", [], "any", false, false, false, 22), "default_global_settings_we_are_hiring", [], "any", false, false, false, 22), "html", null, true);
        echo "</button>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"header-socials d-lock d-lg-none\">
\t\t\t\t\t\t";
        // line 25
        $this->loadTemplate("@views/components/socials/socials.twig", "@views/components/header/header.twig", 25)->display(twig_array_merge($context, ["socials" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 26
($context["global"] ?? null), "theme_options", [], "any", false, false, false, 26), "footer_menu_website", [], "any", false, false, false, 26), "footer_social_networks", [], "any", false, false, false, 26)]));
        // line 28
        echo "\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</header>
";
        // line 34
        $this->loadTemplate("@views/components/filter-shorties/filter-shorties.twig", "@views/components/header/header.twig", 34)->display(twig_array_merge($context, ["id" => "shortiesForm", "trainingCat" => twig_get_attribute($this->env, $this->source,         // line 36
($context["global"] ?? null), "filter_shorties", [], "any", false, false, false, 36), "buttonFilterText" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 37
($context["global"] ?? null), "theme_options", [], "any", false, false, false, 37), "text_translation", [], "any", false, false, false, 37), "default_global_settings_buttons", [], "any", false, false, false, 37), "filter", [], "any", false, false, false, 37)]));
        // line 39
        echo "
";
        // line 40
        $this->loadTemplate("@views/components/filter-schedule/filter-schedule.twig", "@views/components/header/header.twig", 40)->display(twig_array_merge($context, ["id" => "scheduleForm", "type" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 42
($context["global"] ?? null), "filter_schedule", [], "any", false, false, false, 42), "types", [], "any", false, false, false, 42), "fromLabel" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 43
($context["global"] ?? null), "theme_options", [], "any", false, false, false, 43), "text_translation", [], "any", false, false, false, 43), "default_global_settings_text", [], "any", false, false, false, 43), "from_text", [], "any", false, false, false, 43), "toLabel" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 44
($context["global"] ?? null), "theme_options", [], "any", false, false, false, 44), "text_translation", [], "any", false, false, false, 44), "default_global_settings_text", [], "any", false, false, false, 44), "to_text", [], "any", false, false, false, 44), "location" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 45
($context["global"] ?? null), "filter_schedule", [], "any", false, false, false, 45), "location", [], "any", false, false, false, 45), "keywordLabel" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 46
($context["global"] ?? null), "theme_options", [], "any", false, false, false, 46), "text_translation", [], "any", false, false, false, 46), "default_global_settings_text", [], "any", false, false, false, 46), "keyword_text", [], "any", false, false, false, 46), "buttonFilterText" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 47
($context["global"] ?? null), "theme_options", [], "any", false, false, false, 47), "text_translation", [], "any", false, false, false, 47), "default_global_settings_buttons", [], "any", false, false, false, 47), "filter", [], "any", false, false, false, 47)]));
        // line 49
        echo "
";
        // line 50
        $this->loadTemplate("@views/components/filter-modules/filter-modules.twig", "@views/components/header/header.twig", 50)->display(twig_array_merge($context, ["id" => "filterModules", "action" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 52
($context["global"] ?? null), "theme_options", [], "any", false, false, false, 52), "journey", [], "any", false, false, false, 52), "journey_link", [], "any", false, false, false, 52), "typeLabel" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 53
($context["global"] ?? null), "theme_options", [], "any", false, false, false, 53), "text_translation", [], "any", false, false, false, 53), "default_global_settings_text", [], "any", false, false, false, 53), "typeText", [], "any", false, false, false, 53), "formatLabel" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 54
($context["global"] ?? null), "theme_options", [], "any", false, false, false, 54), "text_translation", [], "any", false, false, false, 54), "default_global_settings_text", [], "any", false, false, false, 54), "formatText", [], "any", false, false, false, 54), "keywordLabel" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 55
($context["global"] ?? null), "theme_options", [], "any", false, false, false, 55), "text_translation", [], "any", false, false, false, 55), "default_global_settings_text", [], "any", false, false, false, 55), "keyword_text", [], "any", false, false, false, 55), "trainingCat" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 56
($context["global"] ?? null), "filter_modules", [], "any", false, false, false, 56), "training_cat", [], "any", false, false, false, 56), "trainingType" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 57
($context["global"] ?? null), "filter_modules", [], "any", false, false, false, 57), "training_type", [], "any", false, false, false, 57), "buttonText" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 58
($context["global"] ?? null), "theme_options", [], "any", false, false, false, 58), "text_translation", [], "any", false, false, false, 58), "default_global_settings_buttons", [], "any", false, false, false, 58), "show_trainings", [], "any", false, false, false, 58)]));
    }

    public function getTemplateName()
    {
        return "@views/components/header/header.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 58,  128 => 57,  127 => 56,  126 => 55,  125 => 54,  124 => 53,  123 => 52,  122 => 50,  119 => 49,  117 => 47,  116 => 46,  115 => 45,  114 => 44,  113 => 43,  112 => 42,  111 => 40,  108 => 39,  106 => 37,  105 => 36,  104 => 34,  96 => 28,  94 => 26,  93 => 25,  85 => 22,  79 => 21,  75 => 19,  73 => 18,  56 => 6,  50 => 5,  44 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@views/components/header/header.twig", "D:\\wamp64\\www\\lec2\\wp-content\\themes\\lec2\\resources\\views\\frontend\\src\\views\\components\\header\\header.twig");
    }
}
