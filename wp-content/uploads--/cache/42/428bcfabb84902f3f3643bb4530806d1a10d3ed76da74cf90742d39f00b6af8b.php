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

/* @views/components/get-offer-form/get-offer-form.twig */
class __TwigTemplate_ae0dea5ac7a04431d637f7e0a8b6ec9231708f5f22484424d4ba3afa7cad8ca1 extends \Twig\Template
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
        $macros["forms"] = $this->macros["forms"] = $this->loadTemplate("@views/macros/forms/forms.twig", "@views/components/get-offer-form/get-offer-form.twig", 1)->unwrap();
        // line 2
        echo "<div class=\"form offer-form js-offer-form ";
        ((($context["btnTheme"] ?? null)) ? (print (twig_escape_filter($this->env, ("offer-form--" . ($context["btnTheme"] ?? null)), "html", null, true))) : (print ("")));
        echo "\">
\t";
        // line 3
        if (twig_get_attribute($this->env, $this->source, ($context["global"] ?? null), "is_adapter", [], "any", false, false, false, 3)) {
            // line 4
            echo "\t\t<form>
      ";
            // line 5
            $context["agreeText"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["global"] ?? null), "theme_options", [], "any", false, false, false, 5), "form_offer", [], "any", false, false, false, 5), "agreement", [], "any", false, false, false, 5);
            // line 6
            echo "      <div class=\"form-group form-group--checkbox\">
          ";
            // line 7
            echo twig_call_macro($macros["forms"], "macro_input", [["id" => "agree", "name" => "agree", "value" => "", "label" => ($context["agreeText"] ?? null), "type" => "checkbox"]], 7, $context, $this->getSourceContext());
            echo "
      </div>
      ";
            // line 9
            $context["emailPlaceholder"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["global"] ?? null), "theme_options", [], "any", false, false, false, 9), "text_translation", [], "any", false, false, false, 9), "default_global_settings_text", [], "any", false, false, false, 9), "default_global_settings_email", [], "any", false, false, false, 9);
            // line 10
            echo "      <div class=\"form-group\">
        ";
            // line 11
            echo twig_call_macro($macros["forms"], "macro_input", [["id" => "email", "name" => "email", "value" => "", "placeholder" => ($context["emailPlaceholder"] ?? null), "type" => "email", "autocomplete" => false]], 11, $context, $this->getSourceContext());
            echo "
      </div>
      <div class=\"form-actions\">
        <button class=\"btn btn-";
            // line 14
            echo twig_escape_filter($this->env, (((isset($context["btnTheme"]) || array_key_exists("btnTheme", $context))) ? (_twig_default_filter(($context["btnTheme"] ?? null), "info")) : ("info")), "html", null, true);
            echo "\" type=\"submit\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["global"] ?? null), "theme_options", [], "any", false, false, false, 14), "text_translation", [], "any", false, false, false, 14), "default_global_settings_buttons", [], "any", false, false, false, 14), "default_global_settings_subscribe", [], "any", false, false, false, 14), "html", null, true);
            echo "</button>
      </div>
    </form>
\t";
        } else {
            // line 18
            echo "\t\t";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["global"] ?? null), "languages", [], "any", false, false, false, 18), "current", [], "any", false, false, false, 18) == "de")) {
                // line 19
                echo "\t\t\t";
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["global"] ?? null), "newsletter", [], "any", false, false, false, 19), "newsletter_de", [], "any", false, false, false, 19);
                echo "
\t\t";
            } else {
                // line 21
                echo "\t\t\t";
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["global"] ?? null), "newsletter", [], "any", false, false, false, 21), "newsletter_en", [], "any", false, false, false, 21);
                echo "
\t\t";
            }
            // line 23
            echo "\t";
        }
        // line 24
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "@views/components/get-offer-form/get-offer-form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 24,  94 => 23,  88 => 21,  82 => 19,  79 => 18,  70 => 14,  64 => 11,  61 => 10,  59 => 9,  54 => 7,  51 => 6,  49 => 5,  46 => 4,  44 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@views/components/get-offer-form/get-offer-form.twig", "D:\\wamp64\\www\\lec2\\wp-content\\themes\\lec2\\resources\\views\\frontend\\src\\views\\components\\get-offer-form\\get-offer-form.twig");
    }
}
