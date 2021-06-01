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

/* @views/components/get-opportunities/get-opportunities.twig */
class __TwigTemplate_886ee72c862073b7d8a6606042e39c6e1e79e99aa4f9c81fdecdefbb33ad509f extends \Twig\Template
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
        $macros["forms"] = $this->macros["forms"] = $this->loadTemplate("@views/macros/forms/forms.twig", "@views/components/get-opportunities/get-opportunities.twig", 1)->unwrap();
        // line 2
        echo "
<div class=\"get-opportunities-block ";
        // line 3
        echo twig_escape_filter($this->env, ($context["theme"] ?? null), "html", null, true);
        echo "\">
\t<div class=\"container\">
\t\t<h2>";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["global"] ?? null), "theme_options", [], "any", false, false, false, 5), "form_offer", [], "any", false, false, false, 5), "title", [], "any", false, false, false, 5), "html", null, true);
        echo "</h2>
\t\t<div class=\"get-opportunities-description\">
      ";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["global"] ?? null), "theme_options", [], "any", false, false, false, 7), "form_offer", [], "any", false, false, false, 7), "description", [], "any", false, false, false, 7), "html", null, true);
        echo "
\t\t</div>
    ";
        // line 9
        $this->loadTemplate("@views/components/get-offer-form/get-offer-form.twig", "@views/components/get-opportunities/get-opportunities.twig", 9)->display(twig_array_merge($context, ["btnTheme" =>         // line 10
($context["btnTheme"] ?? null)]));
        // line 12
        echo "\t</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "@views/components/get-opportunities/get-opportunities.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 12,  58 => 10,  57 => 9,  52 => 7,  47 => 5,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@views/components/get-opportunities/get-opportunities.twig", "D:\\wamp64\\www\\lec2\\wp-content\\themes\\lec2\\resources\\views\\frontend\\src\\views\\components\\get-opportunities\\get-opportunities.twig");
    }
}
