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

/* @views/components/advantage-card/advantage-card.twig */
class __TwigTemplate_b9a804e444bbff5478006317c213bd019569563b4e9e4820e9dd98c8d209dbfe extends \Twig\Template
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
        echo "<div class=";
        echo twig_escape_filter($this->env, ($context["colClass"] ?? null), "html", null, true);
        echo ">
\t<div class=\"advantage-item\">
\t\t<img src=\"";
        // line 3
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["advantageItem"] ?? null), "image", [], "any", false, false, false, 3), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["advantageItem"] ?? null), "title", [], "any", false, false, false, 3), "html", null, true);
        echo "\"/>
\t\t<h4 class=\"advantage-title\">
\t\t\t";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["advantageItem"] ?? null), "title", [], "any", false, false, false, 5), "html", null, true);
        echo "
\t\t</h4>
\t\t<p class=\"advantage-description\">
\t\t\t";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["advantageItem"] ?? null), "description", [], "any", false, false, false, 8), "html", null, true);
        echo "
\t\t</p>
\t</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "@views/components/advantage-card/advantage-card.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 8,  50 => 5,  43 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@views/components/advantage-card/advantage-card.twig", "D:\\wamp64\\www\\lec2\\wp-content\\themes\\lec2\\resources\\views\\frontend\\src\\views\\components\\advantage-card\\advantage-card.twig");
    }
}
