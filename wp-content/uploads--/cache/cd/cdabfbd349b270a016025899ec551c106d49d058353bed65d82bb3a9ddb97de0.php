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

/* /pages/404/404.twig */
class __TwigTemplate_81b7b544c221cdfe77be6646247ff4374d2beed63bc83224f51d42909e9c277c extends \Twig\Template
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
        // line 5
        $context["viewData"] = ["bodyClass" => "error-page", "jsController" => "", "headerTheme" => "dark", "footerType" => "primary"];
        // line 1
        $this->parent = $this->loadTemplate("@views/layouts/layout-default.twig", "/pages/404/404.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 13
    public function block_pageContent($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 14
        echo "  ";
        $context["pageData"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["global"] ?? null), "theme_options", [], "any", false, false, false, 14), "error_page", [], "any", false, false, false, 14);
        // line 15
        echo "  ";
        $this->loadTemplate("@views/components/top-banner-title/top-banner-title.twig", "/pages/404/404.twig", 15)->display(twig_array_merge($context, ["data" => ["title" => twig_get_attribute($this->env, $this->source,         // line 17
($context["pageData"] ?? null), "page_title", [], "any", false, false, false, 17)], "theme" => "default"]));
        // line 21
        echo "  <div class=\"container\">
    <div class=\"error-content\">
      <p class=\"title\">";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["pageData"] ?? null), "error_404", [], "any", false, false, false, 23), "html", null, true);
        echo "</p>
      <p class=\"text\">";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["global"] ?? null), "theme_options", [], "any", false, false, false, 24), "text_translation", [], "any", false, false, false, 24), "default_global_settings_text", [], "any", false, false, false, 24), "page_not_found", [], "any", false, false, false, 24), "html", null, true);
        echo "</p>
      <img class=\"rounded-8\" src=\"";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["pageData"] ?? null), "error_image", [], "any", false, false, false, 25), "html", null, true);
        echo "\" alt=";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["global"] ?? null), "theme_options", [], "any", false, false, false, 25), "text_translation", [], "any", false, false, false, 25), "default_global_settings_text", [], "any", false, false, false, 25), "page_not_found", [], "any", false, false, false, 25), "html", null, true);
        echo " />
      <a class=\"btn btn-info\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["pageData"] ?? null), "home_page", [], "any", false, false, false, 26), "html", null, true);
        echo "\"> ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["global"] ?? null), "theme_options", [], "any", false, false, false, 26), "text_translation", [], "any", false, false, false, 26), "default_global_settings_buttons", [], "any", false, false, false, 26), "go_home", [], "any", false, false, false, 26), "html", null, true);
        echo " </a>
    </div>
  </div>
";
    }

    public function getTemplateName()
    {
        return "/pages/404/404.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 26,  72 => 25,  68 => 24,  64 => 23,  60 => 21,  58 => 17,  56 => 15,  53 => 14,  49 => 13,  44 => 1,  42 => 5,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/pages/404/404.twig", "D:\\wamp64\\www\\lec2\\wp-content\\themes\\lec2\\resources\\views\\frontend\\src\\views\\pages\\404\\404.twig");
    }
}
