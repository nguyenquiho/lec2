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

/* pages/trainings-overview-listing-detail/trainings-overview-listing-detail.twig */
class __TwigTemplate_a352d2f41bf44fb14044a200bb1da5882f63fa5c9e00c231342440cfa9d5ecd2 extends \Twig\Template
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
        $context["viewData"] = ["bodyClass" => "trainings-overview-listing-detail-page", "jsController" => "trainings-overview-listing-detail", "headerTheme" => "gray", "footerType" => "primary"];
        // line 1
        $this->parent = $this->loadTemplate("@views/layouts/layout-default.twig", "pages/trainings-overview-listing-detail/trainings-overview-listing-detail.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_pageContent($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 15
        echo "
  ";
        // line 16
        $context["TrainingDetailData"] = ["top_banner_title" => twig_get_attribute($this->env, $this->source,         // line 17
($context["page_data"] ?? null), "post_title", [], "any", false, false, false, 17), "top_banner_background" => twig_get_attribute($this->env, $this->source,         // line 18
($context["page_data"] ?? null), "thumbnail", [], "any", false, false, false, 18), "top_banner_description" => twig_get_attribute($this->env, $this->source,         // line 19
($context["page_data"] ?? null), "post_content", [], "any", false, false, false, 19)];
        // line 22
        echo "
  ";
        // line 23
        $this->loadTemplate("@views/pages/trainings-overview-listing-detail/includes/top-banner/top-banner.twig", "pages/trainings-overview-listing-detail/trainings-overview-listing-detail.twig", 23)->display(twig_array_merge($context, ["topBannerData" =>         // line 24
($context["TrainingDetailData"] ?? null), "theme" => "gray"]));
        // line 27
        echo "
  ";
        // line 28
        $this->loadTemplate("@views/components/banner-loop/banner-loop.twig", "pages/trainings-overview-listing-detail/trainings-overview-listing-detail.twig", 28)->display(twig_array_merge($context, ["data" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 29
($context["page_data"] ?? null), "custom_data", [], "any", false, false, false, 29), "training_overview_list", [], "any", false, false, false, 29)]));
        // line 31
        echo "  ";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page_data"] ?? null), "custom_data", [], "any", false, false, false, 31), "training_types", [], "any", false, false, false, 31) != [])) {
            // line 32
            echo "    ";
            $this->loadTemplate("@views/pages/trainings-overview-listing-detail/includes/training-type/training-type.twig", "pages/trainings-overview-listing-detail/trainings-overview-listing-detail.twig", 32)->display(twig_array_merge($context, ["data" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 33
($context["page_data"] ?? null), "custom_data", [], "any", false, false, false, 33), "training_types", [], "any", false, false, false, 33), "agenda" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 34
($context["page_data"] ?? null), "custom_data", [], "any", false, false, false, 34), "agenda", [], "any", false, false, false, 34)]));
            // line 36
            echo "  ";
        }
        // line 37
        echo "
  ";
        // line 38
        $this->loadTemplate("@views/components/get-opportunities/get-opportunities.twig", "pages/trainings-overview-listing-detail/trainings-overview-listing-detail.twig", 38)->display(twig_array_merge($context, ["btnTheme" => "primary"]));
        // line 41
        echo "
";
    }

    public function getTemplateName()
    {
        return "pages/trainings-overview-listing-detail/trainings-overview-listing-detail.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 41,  87 => 38,  84 => 37,  81 => 36,  79 => 34,  78 => 33,  76 => 32,  73 => 31,  71 => 29,  70 => 28,  67 => 27,  65 => 24,  64 => 23,  61 => 22,  59 => 19,  58 => 18,  57 => 17,  56 => 16,  53 => 15,  49 => 14,  44 => 1,  42 => 6,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "pages/trainings-overview-listing-detail/trainings-overview-listing-detail.twig", "D:\\wamp64\\www\\lec2\\wp-content\\themes\\lec2\\resources\\views\\frontend\\src\\views\\pages\\trainings-overview-listing-detail\\trainings-overview-listing-detail.twig");
    }
}
