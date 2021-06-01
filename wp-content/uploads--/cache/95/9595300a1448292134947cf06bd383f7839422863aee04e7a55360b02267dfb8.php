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

/* @views/components/filter-shorties/filter-shorties.twig */
class __TwigTemplate_6f1d143119804a495774feb72e87d204977ed1d672ed167c7a6d4d54424ec0af extends \Twig\Template
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
        $macros["forms"] = $this->macros["forms"] = $this->loadTemplate("@views/macros/forms/forms.twig", "@views/components/filter-shorties/filter-shorties.twig", 1)->unwrap();
        // line 2
        echo "
<div id=\"";
        // line 3
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "\" class=\"filter-shorties-form js-filter-shorties-form filter-header\">
\t";
        // line 7
        echo "\t<form>
\t\t<div class=\"form-group form-group--type\">
\t\t\t";
        // line 9
        echo twig_call_macro($macros["forms"], "macro_select", [["name" => "training_cat_id", "id" => "training_cat_id", "classes" => "selectpicker", "options" => ($context["trainingCat"] ?? null), "search" => false]], 9, $context, $this->getSourceContext());
        echo "
\t\t</div>
\t\t<div class=\"form-group  form-group--action\">
\t\t\t<button type=\"submit\" class=\"btn btn-info\">";
        // line 12
        echo ($context["buttonFilterText"] ?? null);
        echo "</button>
\t\t</div>
\t</form>
\t<div class=\"filter-header__content\">
\t\t<div class=\"course-item-listing\">
\t\t\t<div class=\"course-item\" rv-each-item=\"courseList.items\">
\t\t\t\t<h5 rv-text=\"item.post_title\"></h5>
\t\t\t\t<div class=\"course-item-content\">
\t\t\t\t\t<div class=\"course-item-left\">
\t\t\t\t\t\t<p class=\"course-item-time\" rv-text=\"item.time\"></p>
\t\t\t\t\t\t<p class=\"course-item-type\" rv-text=\"item.type\"></p>
\t\t\t\t\t\t<a class=\"course-item-infor-link\" rv-href=\"item.infor_url\">";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["global"] ?? null), "theme_options", [], "any", false, false, false, 23), "text_translation", [], "any", false, false, false, 23), "default_global_settings_text", [], "any", false, false, false, 23), "more_information", [], "any", false, false, false, 23), "html", null, true);
        echo "
\t\t\t\t\t\t\t<i class=\"icon-chevron-right-solid\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"course-item-link\">
\t\t\t\t\t\t<a class=\"btn btn-primary\" rv-href=\"item.buy_url\">";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["global"] ?? null), "theme_options", [], "any", false, false, false, 28), "text_translation", [], "any", false, false, false, 28), "default_global_settings_buttons", [], "any", false, false, false, 28), "buy", [], "any", false, false, false, 28), "html", null, true);
        echo "</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div id=\"pagination-filter-shorties\" class=\"pagination-header\"></div>
\t</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "@views/components/filter-shorties/filter-shorties.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 28,  70 => 23,  56 => 12,  50 => 9,  46 => 7,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@views/components/filter-shorties/filter-shorties.twig", "D:\\wamp64\\www\\lec2\\wp-content\\themes\\lec2\\resources\\views\\frontend\\src\\views\\components\\filter-shorties\\filter-shorties.twig");
    }
}
