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

/* @views/components/top-banner-title/top-banner-title.twig */
class __TwigTemplate_64b032758fdffb04310e137e04d0065d08a4a56ee2a5b3982a12e4855753ca42 extends \Twig\Template
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
        echo "<div class=\"top-banner top-banner-title top-banner--";
        echo twig_escape_filter($this->env, (((isset($context["theme"]) || array_key_exists("theme", $context))) ? (_twig_default_filter(($context["theme"] ?? null), "gray")) : ("gray")), "html", null, true);
        echo "\">
\t<div class=\"container\">
\t\t<div class=\"top-banner-content\">
\t\t\t<h1 class=\"text-center\">";
        // line 4
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "title", [], "any", false, false, false, 4)), "html", null, true);
        echo "</h1>
\t\t</div>
\t</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "@views/components/top-banner-title/top-banner-title.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@views/components/top-banner-title/top-banner-title.twig", "D:\\wamp64\\www\\lec2\\wp-content\\themes\\lec2\\resources\\views\\frontend\\src\\views\\components\\top-banner-title\\top-banner-title.twig");
    }
}
