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

/* @views/components/modals/modal-contact.twig */
class __TwigTemplate_6b66cf5ac6a7986fd5a8b40d81032ec54f7dbf9bd791c11874b0ce8f8dd858d3 extends \Twig\Template
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
        // line 2
        echo "<div class=\"modal fade modal-base modal-no-header modal-contact\" id=\"";
        echo twig_escape_filter($this->env, ($context["modalID"] ?? null), "html", null, true);
        echo "\" role=\"dialog\" tabindex=\"-1\" aria-labelledby=\"";
        echo twig_escape_filter($this->env, ($context["modalID"] ?? null), "html", null, true);
        echo "Label\" aria-hidden=\"true\">
\t<div class=\"modal-dialog modal-dialog-scrollable modal-dialog-centered\">
\t\t<div class=\"modal-content\">
\t\t\t<div class=\"modal-header\">
\t\t\t\t<h4 class=\"modal-title\" id=\"";
        // line 6
        echo twig_escape_filter($this->env, ($context["modalID"] ?? null), "html", null, true);
        echo "Label\">";
        echo twig_escape_filter($this->env, ($context["modalTitle"] ?? null), "html", null, true);
        echo "</h4>
\t\t\t\t";
        // line 7
        if (($context["modalDescription"] ?? null)) {
            echo "\t\t\t\t
        <p class=\"modal-description\">";
            // line 8
            echo twig_escape_filter($this->env, ($context["modalDescription"] ?? null), "html", null, true);
            echo " </p>
\t\t\t\t";
        }
        // line 10
        echo "\t\t\t\t";
        // line 11
        echo "\t\t\t</div>
\t\t\t<div class=\"modal-body\">
\t\t\t\t";
        // line 13
        $context["formContent"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["global"] ?? null), "theme_options", [], "any", false, false, false, 13), "default_global_settings_contact_form", [], "any", false, false, false, 13);
        // line 14
        echo "\t\t\t\t";
        $this->loadTemplate("@views/components/modal-form/modal-form.twig", "@views/components/modals/modal-contact.twig", 14)->display(twig_array_merge($context, ["modalType" =>         // line 15
($context["modalType"] ?? null)]));
        // line 17
        echo "\t\t\t</div>
\t\t</div>
\t</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "@views/components/modals/modal-contact.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 17,  72 => 15,  70 => 14,  68 => 13,  64 => 11,  62 => 10,  57 => 8,  53 => 7,  47 => 6,  37 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "@views/components/modals/modal-contact.twig", "D:\\wamp64\\www\\lec2\\wp-content\\themes\\lec2\\resources\\views\\frontend\\src\\views\\components\\modals\\modal-contact.twig");
    }
}
