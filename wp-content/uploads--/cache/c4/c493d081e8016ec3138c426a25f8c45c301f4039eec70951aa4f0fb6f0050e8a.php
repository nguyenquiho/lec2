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

/* @views/components/filter-modules/filter-modules.twig */
class __TwigTemplate_beb96591d7b323fe2362d7c907edbff485c8534ac82ba5297df3b9e8aa8926d9 extends \Twig\Template
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
        $macros["forms"] = $this->macros["forms"] = $this->loadTemplate("@views/macros/forms/forms.twig", "@views/components/filter-modules/filter-modules.twig", 1)->unwrap();
        // line 2
        echo "
<div id=\"";
        // line 3
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "\" class=\"filter-modules-form js-filter-modules-form filter-header\">
  <form method=\"get\" action=\"";
        // line 4
        echo twig_escape_filter($this->env, ($context["action"] ?? null), "html", null, true);
        echo "\">
    <div class=\"form-group form-group--type\">
      <label for=\"training_type\"> ";
        // line 6
        echo twig_escape_filter($this->env, ($context["typeLabel"] ?? null), "html", null, true);
        echo " </label>
      ";
        // line 7
        echo twig_call_macro($macros["forms"], "macro_select", [["name" => "training_type", "id" => "training_type", "classes" => "selectpicker", "options" => ($context["trainingType"] ?? null)]], 7, $context, $this->getSourceContext());
        echo "
    </div>
    <div class=\"form-group form-group--type\">
      <label for=\"training_format\"> ";
        // line 10
        echo twig_escape_filter($this->env, ($context["formatLabel"] ?? null), "html", null, true);
        echo " </label>
      ";
        // line 11
        echo twig_call_macro($macros["forms"], "macro_select", [["name" => "training_format", "id" => "training_format", "classes" => "selectpicker", "options" => ($context["trainingFormat"] ?? null)]], 11, $context, $this->getSourceContext());
        echo "
    </div>
    <div class=\"form-group  form-group--action\">
      <button type=\"submit\" class=\"btn btn-info\">";
        // line 14
        echo ($context["buttonText"] ?? null);
        echo "</button>
    </div>
  </form>
</div>
";
    }

    public function getTemplateName()
    {
        return "@views/components/filter-modules/filter-modules.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 14,  65 => 11,  61 => 10,  55 => 7,  51 => 6,  46 => 4,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@views/components/filter-modules/filter-modules.twig", "D:\\wamp64\\www\\lec2\\wp-content\\themes\\lec2\\resources\\views\\frontend\\src\\views\\components\\filter-modules\\filter-modules.twig");
    }
}
