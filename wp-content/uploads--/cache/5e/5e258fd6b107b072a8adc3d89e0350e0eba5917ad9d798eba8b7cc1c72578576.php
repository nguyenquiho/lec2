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

/* pages/home/home.twig */
class __TwigTemplate_20db8a99f88163a6b1f99e5f7ae129c255f19ced002b4c1815ca9c1900bdb002 extends \Twig\Template
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
        $context["viewData"] = ["bodyClass" => "home-page", "jsController" => "home", "btnRequestClass" => "btn-outline-info", "headerTheme" => "dark", "footerType" => "primary"];
        // line 1
        $this->parent = $this->loadTemplate("@views/layouts/layout-default.twig", "pages/home/home.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 15
    public function block_pageContent($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 16
        echo "  ";
        $context["homeBanner"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page_data"] ?? null), "custom_data", [], "any", false, false, false, 16), "home_banner", [], "any", false, false, false, 16);
        // line 17
        echo "
  ";
        // line 18
        $context["homeBannerData"] = ["top_banner_title" => twig_get_attribute($this->env, $this->source,         // line 19
($context["homeBanner"] ?? null), "home_title", [], "any", false, false, false, 19), "top_banner_video" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 20
($context["page_data"] ?? null), "custom_data", [], "any", false, false, false, 20), "video", [], "any", false, false, false, 20)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[0] ?? null) : null), "custom_data", [], "any", false, false, false, 20), "video_file", [], "any", false, false, false, 20), "url", [], "any", false, false, false, 20), "top_banner_video_poster" => twig_get_attribute($this->env, $this->source, (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 21
($context["page_data"] ?? null), "custom_data", [], "any", false, false, false, 21), "video", [], "any", false, false, false, 21)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[0] ?? null) : null), "thumbnail", [], "any", false, false, false, 21), "top_banner_description" => twig_get_attribute($this->env, $this->source,         // line 22
($context["homeBanner"] ?? null), "home_description", [], "any", false, false, false, 22), "top_banner_subtitle" => twig_get_attribute($this->env, $this->source,         // line 23
($context["homeBanner"] ?? null), "home_subtitle", [], "any", false, false, false, 23)];
        // line 26
        echo "
  ";
        // line 27
        $this->loadTemplate("@views/pages/home/includes/top-banner/top-banner.twig", "pages/home/home.twig", 27)->display(twig_array_merge($context, ["topBannerData" =>         // line 28
($context["homeBannerData"] ?? null)]));
        // line 30
        echo "
  ";
        // line 33
        echo "
  ";
        // line 34
        $this->loadTemplate("@views/components/journey-block/journey-block.twig", "pages/home/home.twig", 34)->display(twig_array_merge($context, ["data" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 35
($context["global"] ?? null), "theme_options", [], "any", false, false, false, 35), "journey", [], "any", false, false, false, 35)]));
        // line 37
        echo "
  ";
        // line 38
        $this->loadTemplate("@views/components/news-feed/news-feed.twig", "pages/home/home.twig", 38)->display(twig_array_merge($context, ["data" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 39
($context["page_data"] ?? null), "custom_data", [], "any", false, false, false, 39), "news_feed", [], "any", false, false, false, 39)]));
        // line 41
        echo "
  ";
        // line 42
        $this->loadTemplate("@views/components/training-card/training-card.twig", "pages/home/home.twig", 42)->display(twig_array_merge($context, ["data" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 43
($context["page_data"] ?? null), "custom_data", [], "any", false, false, false, 43), "training_types", [], "any", false, false, false, 43)]));
        // line 45
        echo "
  ";
        // line 46
        $this->loadTemplate("@views/pages/home/includes/highlight/highlight.twig", "pages/home/home.twig", 46)->display(twig_array_merge($context, ["data" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 47
($context["page_data"] ?? null), "custom_data", [], "any", false, false, false, 47), "highlight_list", [], "any", false, false, false, 47)]));
        // line 49
        echo "
   ";
        // line 50
        $this->loadTemplate("@views/pages/home/includes/advantage-block/advantage-block.twig", "pages/home/home.twig", 50)->display(twig_array_merge($context, ["data" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 51
($context["page_data"] ?? null), "custom_data", [], "any", false, false, false, 51), "advantages", [], "any", false, false, false, 51)]));
        // line 53
        echo "
  ";
        // line 54
        $this->loadTemplate("@views/components/get-opportunities/get-opportunities.twig", "pages/home/home.twig", 54)->display(twig_array_merge($context, ["btnTheme" => "primary"]));
        // line 57
        echo "
";
    }

    public function getTemplateName()
    {
        return "pages/home/home.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 57,  108 => 54,  105 => 53,  103 => 51,  102 => 50,  99 => 49,  97 => 47,  96 => 46,  93 => 45,  91 => 43,  90 => 42,  87 => 41,  85 => 39,  84 => 38,  81 => 37,  79 => 35,  78 => 34,  75 => 33,  72 => 30,  70 => 28,  69 => 27,  66 => 26,  64 => 23,  63 => 22,  62 => 21,  61 => 20,  60 => 19,  59 => 18,  56 => 17,  53 => 16,  49 => 15,  44 => 1,  42 => 6,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "pages/home/home.twig", "D:\\wamp64\\www\\lec2\\wp-content\\themes\\lec2\\resources\\views\\frontend\\src\\views\\pages\\home\\home.twig");
    }
}
