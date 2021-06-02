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

/* @views/components/filter-schedule/filter-schedule.twig */
class __TwigTemplate_094d1abe149cea4d0964b366f03cd3ddf119719d04b359243e4a6bc0eb2896a7 extends \Twig\Template
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
        $macros["forms"] = $this->macros["forms"] = $this->loadTemplate("@views/macros/forms/forms.twig", "@views/components/filter-schedule/filter-schedule.twig", 1)->unwrap();
        // line 2
        echo "
<div id=\"";
        // line 3
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "\" class=\"filter-schedule-form js-filter-schedule-form filter-header\">
\t<form>
\t\t<div class=\"form-group-filter\">
\t\t\t<div class=\"form-group form-group--type\">
\t\t\t\t<!-- start: this will remove after localtion and date finish -->
\t\t\t\t";
        // line 8
        $context["typeSelect"] = [];
        // line 9
        echo "\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["type"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["typeItem"]) {
            // line 10
            echo "\t\t\t\t\t";
            $context["disabled"] = false;
            // line 11
            echo "\t\t\t\t\t";
            if ((twig_get_attribute($this->env, $this->source, $context["typeItem"], "value", [], "any", false, false, false, 11) == "location")) {
                // line 12
                echo "\t\t\t\t\t\t";
                $context["disabled"] = true;
                // line 13
                echo "\t\t\t\t\t";
            }
            // line 14
            echo "
\t\t\t\t\t";
            // line 15
            $context["typeSelect"] = twig_array_merge(($context["typeSelect"] ?? null), [0 => ["label" => twig_get_attribute($this->env, $this->source,             // line 16
$context["typeItem"], "label", [], "any", false, false, false, 16), "value" => twig_get_attribute($this->env, $this->source,             // line 17
$context["typeItem"], "value", [], "any", false, false, false, 17), "disabled" =>             // line 18
($context["disabled"] ?? null)]]);
            // line 20
            echo "\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['typeItem'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "\t\t\t\t<!-- end: this will remove after localtion and date finish -->
\t\t\t\t";
        // line 22
        echo twig_call_macro($macros["forms"], "macro_select", [["name" => "type_id", "id" => "type_select", "classes" => "selectpicker", "options" => ($context["typeSelect"] ?? null), "search" => false]], 22, $context, $this->getSourceContext());
        echo "
\t\t\t</div>
\t\t\t<div class=\"form-group form-group--type location\">
\t\t\t\t";
        // line 25
        echo twig_call_macro($macros["forms"], "macro_select", [["name" => "location_id", "id" => "location", "classes" => "selectpicker", "options" => ($context["location"] ?? null), "search" => false]], 25, $context, $this->getSourceContext());
        echo "
\t\t\t</div>
\t\t\t<div class=\"form-group form-group--type date-picker\">
\t\t\t\t";
        // line 28
        echo twig_call_macro($macros["forms"], "macro_input", [["id" => "fromDatepicker", "name" => "from", "value" => "", "placeholder" => ($context["fromLabel"] ?? null), "type" => "text", "autocomplete" => false, "required" => true]], 28, $context, $this->getSourceContext());
        echo "
\t\t\t</div>
\t\t\t<div class=\"form-group form-group--type date-picker\">
\t\t\t\t";
        // line 31
        echo twig_call_macro($macros["forms"], "macro_input", [["id" => "toDatepicker", "name" => "to", "value" => "", "placeholder" => ($context["toLabel"] ?? null), "type" => "text", "autocomplete" => false, "required" => true]], 31, $context, $this->getSourceContext());
        echo "
\t\t\t</div>
\t\t\t<div class=\"form-group form-group--type keyword\">
\t\t\t\t";
        // line 34
        echo twig_call_macro($macros["forms"], "macro_input", [["id" => "keyword", "name" => "keyword", "value" => "", "placeholder" => ($context["keywordLabel"] ?? null), "type" => "text", "autocomplete" => false]], 34, $context, $this->getSourceContext());
        echo "
\t\t\t</div>
\t\t</div>
\t\t<div class=\"form-group  form-group--action\">
\t\t\t<button type=\"submit\" class=\"btn btn-info\">";
        // line 38
        echo ($context["buttonFilterText"] ?? null);
        echo "</button>
\t\t</div>
\t</form>
\t<div class=\"filter-header__content\">
\t\t<div class=\"course-item-listing\">
\t\t\t<div class=\"course-item\" rv-each-item=\"courseListSchedule.items\">
\t\t\t\t<h5 rv-text=\"item.post_title\"></h5>
\t\t\t\t<div class=\"course-item-content\">
\t\t\t\t\t<div class=\"course-item-left\">
\t\t\t\t\t\t<a class=\"course-item-infor-link\" rv-href=\"item.infor_url\">";
        // line 47
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["global"] ?? null), "theme_options", [], "any", false, false, false, 47), "text_translation", [], "any", false, false, false, 47), "default_global_settings_text", [], "any", false, false, false, 47), "more_information", [], "any", false, false, false, 47), "html", null, true);
        echo "
\t\t\t\t\t\t\t<i class=\"icon-chevron-right-solid\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div id=\"pagination-schedule\"  class=\"pagination-header\"></div>
\t</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "@views/components/filter-schedule/filter-schedule.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 47,  117 => 38,  110 => 34,  104 => 31,  98 => 28,  92 => 25,  86 => 22,  83 => 21,  77 => 20,  75 => 18,  74 => 17,  73 => 16,  72 => 15,  69 => 14,  66 => 13,  63 => 12,  60 => 11,  57 => 10,  52 => 9,  50 => 8,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@views/components/filter-schedule/filter-schedule.twig", "D:\\wamp64\\www\\lec2\\wp-content\\themes\\lec2\\resources\\views\\frontend\\src\\views\\components\\filter-schedule\\filter-schedule.twig");
    }
}
