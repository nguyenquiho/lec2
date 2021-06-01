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

/* @views/pages/home/includes/top-banner/top-banner.twig */
class __TwigTemplate_b9ee3359221b549c6d5e52519cde2970ded249e4a8bac9418241f39448837ff3 extends \Twig\Template
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
        $macros["forms"] = $this->macros["forms"] = $this->loadTemplate("@views/macros/forms/forms.twig", "@views/pages/home/includes/top-banner/top-banner.twig", 1)->unwrap();
        // line 2
        echo "

<div class=\"top-banner top-banner--default top-banner--homepage\">
  <div class=\"container\">
    <h1 class=\"title\">";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["topBannerData"] ?? null), "top_banner_title", [], "any", false, false, false, 6), "html", null, true);
        echo "</h1>
    <div class=\"row\">
      <div class=\"";
        // line 8
        echo twig_escape_filter($this->env, (((isset($context["colContent"]) || array_key_exists("colContent", $context))) ? (_twig_default_filter(($context["colContent"] ?? null), "col-lg-6")) : ("col-lg-6")), "html", null, true);
        echo "\">
        <div class=\"top-banner-content\">
          <h4>";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["topBannerData"] ?? null), "top_banner_subtitle", [], "any", false, false, false, 10), "html", null, true);
        echo "</h4>
          <div class=\"lead\">";
        // line 11
        echo call_user_func_array($this->env->getFilter('content')->getCallable(), [twig_get_attribute($this->env, $this->source, ($context["topBannerData"] ?? null), "top_banner_description", [], "any", false, false, false, 11)]);
        echo "</div>
        </div>
      </div>
      <div class=\"";
        // line 14
        echo twig_escape_filter($this->env, (((isset($context["colImage"]) || array_key_exists("colImage", $context))) ? (_twig_default_filter(($context["colImage"] ?? null), "col-lg-6")) : ("col-lg-6")), "html", null, true);
        echo "\">
        <div class=\"top-banner-video\">
          <video poster=\"";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["topBannerData"] ?? null), "top_banner_video_poster", [], "any", false, false, false, 16), "html", null, true);
        echo "\" controls autoplay muted loop>
            <source src=\"";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["topBannerData"] ?? null), "top_banner_video", [], "any", false, false, false, 17), "html", null, true);
        echo "\" type=\"video/mp4\">
            Your browser does not support the video tag.
          </video>
        </div>
      </div>
    </div>
  </div>
</div>

";
    }

    public function getTemplateName()
    {
        return "@views/pages/home/includes/top-banner/top-banner.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 17,  70 => 16,  65 => 14,  59 => 11,  55 => 10,  50 => 8,  45 => 6,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@views/pages/home/includes/top-banner/top-banner.twig", "D:\\wamp64\\www\\lec2\\wp-content\\themes\\lec2\\resources\\views\\frontend\\src\\views\\pages\\home\\includes\\top-banner\\top-banner.twig");
    }
}
