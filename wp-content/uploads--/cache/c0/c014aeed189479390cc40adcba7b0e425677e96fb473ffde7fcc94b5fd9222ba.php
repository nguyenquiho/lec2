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

/* @views/components/modal-form/modal-form.twig */
class __TwigTemplate_fe90cb510d60dec70b12d878e8c51d48c37dc33da036fc8ee1165305280e6407 extends \Twig\Template
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
        $macros["forms"] = $this->macros["forms"] = $this->loadTemplate("@views/macros/forms/forms.twig", "@views/components/modal-form/modal-form.twig", 1)->unwrap();
        // line 2
        $context["colClass"] = "col-lg-3";
        // line 3
        $context["formContent"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["global"] ?? null), "theme_options", [], "any", false, false, false, 3), "form_contact_top", [], "any", false, false, false, 3);
        // line 4
        $context["firstnameLabel"] = twig_get_attribute($this->env, $this->source, ($context["formContent"] ?? null), "firstname", [], "any", false, false, false, 4);
        // line 5
        $context["lastnameLabel"] = twig_get_attribute($this->env, $this->source, ($context["formContent"] ?? null), "lastname", [], "any", false, false, false, 5);
        // line 6
        $context["phoneLabel"] = twig_get_attribute($this->env, $this->source, ($context["formContent"] ?? null), "phone", [], "any", false, false, false, 6);
        // line 7
        $context["messageLabel"] = twig_get_attribute($this->env, $this->source, ($context["formContent"] ?? null), "message", [], "any", false, false, false, 7);
        // line 8
        $context["dataProtectionLabel"] = twig_get_attribute($this->env, $this->source, ($context["formContent"] ?? null), "privacy_policy", [], "any", false, false, false, 8);
        // line 9
        $context["agreementText"] = twig_get_attribute($this->env, $this->source, ($context["formContent"] ?? null), "agreement", [], "any", false, false, false, 9);
        // line 10
        $context["buttonText"] = twig_get_attribute($this->env, $this->source, ($context["formContent"] ?? null), "submit_button", [], "any", false, false, false, 10);
        // line 11
        $context["sendText"] = twig_get_attribute($this->env, $this->source, ($context["formContent"] ?? null), "request_text", [], "any", false, false, false, 11);
        // line 12
        $context["downloadText"] = twig_get_attribute($this->env, $this->source, ($context["formContent"] ?? null), "download_pdf", [], "any", false, false, false, 12);
        // line 13
        $context["emailLabel"] = twig_get_attribute($this->env, $this->source, ($context["formContent"] ?? null), "email", [], "any", false, false, false, 13);
        // line 14
        if ((($context["modalType"] ?? null) == "contact")) {
            // line 15
            echo "\t";
            $context["colClass"] = "col-lg-3 col-md-6";
        }
        // line 17
        echo "<div class=\"form modal-form js-modal-form\">
\t<div class=\"form-body\">
\t\t<form>
\t\t\t<div class=\"row row--group\">
\t\t\t\t<div class=\"";
        // line 21
        echo twig_escape_filter($this->env, ($context["colClass"] ?? null), "html", null, true);
        echo " col-item\">
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<div class=\"form-field\">
\t\t\t\t\t\t\t";
        // line 24
        echo twig_call_macro($macros["forms"], "macro_input", [["id" => ("firstname" . ($context["modalType"] ?? null)), "name" => "firstname", "value" => "", "placeholder" => ($context["firstnameLabel"] ?? null), "type" => "text", "autocomplete" => false, "required" => true, "requireOption" => true]], 24, $context, $this->getSourceContext());
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-3 col-md-6 col-item\">
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<div class=\"form-field\">
\t\t\t\t\t\t\t";
        // line 31
        echo twig_call_macro($macros["forms"], "macro_input", [["id" => ("lastname" . ($context["modalType"] ?? null)), "name" => "lastname", "value" => "", "placeholder" => ($context["lastnameLabel"] ?? null), "type" => "text", "autocomplete" => false, "required" => true, "requireOption" => true]], 31, $context, $this->getSourceContext());
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-3 col-md-6 col-item\">
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t";
        // line 37
        echo twig_call_macro($macros["forms"], "macro_input", [["id" => ("email" . ($context["modalType"] ?? null)), "name" => "email", "value" => "", "placeholder" => ($context["emailLabel"] ?? null), "type" => "text", "autocomplete" => false, "required" => true, "requireOption" => true]], 37, $context, $this->getSourceContext());
        echo "
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-3 col-md-6 col-item\">
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t";
        // line 42
        echo twig_call_macro($macros["forms"], "macro_input", [["id" => ("phone" . ($context["modalType"] ?? null)), "name" => "phone", "value" => "", "placeholder" => ($context["phoneLabel"] ?? null), "type" => "text", "autocomplete" => false, "required" => true]], 42, $context, $this->getSourceContext());
        echo "
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-12 col-item\">
\t\t\t\t\t<div class=\"form-group form-group--message\">
\t\t\t\t\t\t";
        // line 47
        echo twig_call_macro($macros["forms"], "macro_textarea", [["id" => ("message" . ($context["modalType"] ?? null)), "name" => "message", "value" => "", "placeholder" => ($context["messageLabel"] ?? null), "type" => "text", "requireOption" => true]], 47, $context, $this->getSourceContext());
        echo "
\t\t\t\t\t</div>
\t\t\t\t</div>
        <div class=\"col-md-12 col-item\">
          <div class=\"form-group form-group--checkbox\">
              ";
        // line 52
        echo twig_call_macro($macros["forms"], "macro_input", [["id" => ("dataProtection" . ($context["modalType"] ?? null)), "name" => "data_protection", "value" => 1, "label" => ($context["dataProtectionLabel"] ?? null), "type" => "checkbox"]], 52, $context, $this->getSourceContext());
        echo "
          </div>
        </div>
        <div class=\"col-md-12 col-item\">
          <div class=\"form-agreement\">";
        // line 56
        echo ($context["agreementText"] ?? null);
        echo "</div>
        </div>
\t\t\t</div>
      <div class=\"form-group-actions\">
        ";
        // line 60
        if ((($context["modalType"] ?? null) == "contact")) {
            // line 61
            echo "          <button type=\"submit\" class=\"btn btn-info\">";
            echo twig_escape_filter($this->env, ($context["buttonText"] ?? null), "html", null, true);
            echo "</button>
          <a class=\"btn btn-outline-info\" href=\"";
            // line 62
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["global"] ?? null), "theme_options", [], "any", false, false, false, 62), "form_contact_top", [], "any", false, false, false, 62), "pdf_file_download", [], "any", false, false, false, 62), "url", [], "any", false, false, false, 62), "html", null, true);
            echo "\"  target=\"_blank\" rel=\"noopener\" download>";
            echo twig_escape_filter($this->env, ($context["downloadText"] ?? null), "html", null, true);
            echo "</a>
        ";
        } else {
            // line 64
            echo "          <button type=\"submit\" class=\"btn btn-info\">";
            echo twig_escape_filter($this->env, ($context["sendText"] ?? null), "html", null, true);
            echo "</button>
        ";
        }
        // line 66
        echo "      </div>
\t\t</form>
\t</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "@views/components/modal-form/modal-form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  158 => 66,  152 => 64,  145 => 62,  140 => 61,  138 => 60,  131 => 56,  124 => 52,  116 => 47,  108 => 42,  100 => 37,  91 => 31,  81 => 24,  75 => 21,  69 => 17,  65 => 15,  63 => 14,  61 => 13,  59 => 12,  57 => 11,  55 => 10,  53 => 9,  51 => 8,  49 => 7,  47 => 6,  45 => 5,  43 => 4,  41 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@views/components/modal-form/modal-form.twig", "D:\\wamp64\\www\\lec2\\wp-content\\themes\\lec2\\resources\\views\\frontend\\src\\views\\components\\modal-form\\modal-form.twig");
    }
}
