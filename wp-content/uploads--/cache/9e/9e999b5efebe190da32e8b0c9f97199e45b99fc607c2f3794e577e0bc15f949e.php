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

/* @views/pages/trainings-overview-listing-detail/includes/top-banner/top-banner.twig */
class __TwigTemplate_2c1cbaf0058ff6c939474a251f85a0b873c208ee24a4346ab00f6800dd63bc0b extends \Twig\Template
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
        echo "<div class=\"top-banner top-banner--training-overview-listing-detail\">
  <div class=\"container training-detail-container\">
    ";
        // line 3
        $context["breadcrumb_items"] = twig_array_merge(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["global"] ?? null), "theme_options", [], "any", false, false, false, 3), "breadcrumb_items", [], "any", false, false, false, 3), [0 => ["title" => twig_get_attribute($this->env, $this->source,         // line 4
($context["page_data"] ?? null), "post_title", [], "any", false, false, false, 4)]]);
        // line 6
        echo "    ";
        $this->loadTemplate("@views/components/breadcrumb/breadcrumb.twig", "@views/pages/trainings-overview-listing-detail/includes/top-banner/top-banner.twig", 6)->display(twig_array_merge($context, ["items" =>         // line 7
($context["breadcrumb_items"] ?? null)]));
        // line 9
        echo "    <h1>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["topBannerData"] ?? null), "top_banner_title", [], "any", false, false, false, 9), "html", null, true);
        echo "</h1>
    <div class=\"top-banner-text\">
      <div class=\"top-banner-image\">
          <img class=\"rounded-8\" src=\"";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["topBannerData"] ?? null), "top_banner_background", [], "any", false, false, false, 12), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["topBannerData"] ?? null), "top_banner_title", [], "any", false, false, false, 12), "html", null, true);
        echo "\"/>
      </div>
      <div class=\"lead\">";
        // line 14
        echo call_user_func_array($this->env->getFilter('content')->getCallable(), [twig_get_attribute($this->env, $this->source, ($context["topBannerData"] ?? null), "top_banner_description", [], "any", false, false, false, 14)]);
        echo "</div>
      </div>
    </div>
  </div>
</div>

";
    }

    public function getTemplateName()
    {
        return "@views/pages/trainings-overview-listing-detail/includes/top-banner/top-banner.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 14,  55 => 12,  48 => 9,  46 => 7,  44 => 6,  42 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@views/pages/trainings-overview-listing-detail/includes/top-banner/top-banner.twig", "D:\\wamp64\\www\\lec2\\wp-content\\themes\\lec2\\resources\\views\\frontend\\src\\views\\pages\\trainings-overview-listing-detail\\includes\\top-banner\\top-banner.twig");
    }
}
