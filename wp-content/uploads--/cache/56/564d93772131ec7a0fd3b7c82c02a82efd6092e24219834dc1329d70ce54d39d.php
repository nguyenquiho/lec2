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

/* @views/components/filter-form/filter-form.twig */
class __TwigTemplate_86c8d83393eca75f3892523f9264fc59e1dc06a0e810f9900d59b455177474ae extends \Twig\Template
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
        $macros["forms"] = $this->macros["forms"] = $this->loadTemplate("@views/macros/forms/forms.twig", "@views/components/filter-form/filter-form.twig", 1)->unwrap();
        // line 2
        echo "<div class=\"filter-block\">
  <div class=\"container inner\">
    <div class=\"filter-form js-filter-form\">
      <form>
        <div class=\"form-group form-group--type\">
          ";
        // line 7
        echo twig_call_macro($macros["forms"], "macro_select", [["name" => "training_cat_id", "id" => "trainingCat", "classes" => "selectpicker", "options" => ($context["trainingCat"] ?? null), "search" => false]], 7, $context, $this->getSourceContext());
        echo "
        </div>
        <div class=\"form-group form-group--type\">
          ";
        // line 10
        echo twig_call_macro($macros["forms"], "macro_select", [["name" => "training_type_id", "id" => "trainingType", "classes" => "selectpicker", "options" => ($context["trainingType"] ?? null), "search" => false]], 10, $context, $this->getSourceContext());
        echo "
        </div>
        <div class=\"form-group form-group--query\">
          ";
        // line 13
        echo twig_call_macro($macros["forms"], "macro_input", [["id" => "search", "name" => "search", "placeholder" => ($context["searchLabel"] ?? null), "type" => "text", "autocomplete" => false]], 13, $context, $this->getSourceContext());
        echo "
        </div>
        <div class=\"form-group  form-group--action\">
          <button type=\"submit\" class=\"btn btn-info\">";
        // line 16
        echo ($context["buttonSearchText"] ?? null);
        echo "</button>
        </div>
      </form>
    </div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "@views/components/filter-form/filter-form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 16,  58 => 13,  52 => 10,  46 => 7,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@views/components/filter-form/filter-form.twig", "D:\\wamp64\\www\\lec2\\wp-content\\themes\\lec2\\resources\\views\\frontend\\src\\views\\components\\filter-form\\filter-form.twig");
    }
}
