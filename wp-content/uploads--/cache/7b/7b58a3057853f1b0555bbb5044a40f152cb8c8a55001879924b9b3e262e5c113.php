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

/* @views/pages/trainings-overview-listing/includes/course-listing/course-listing.twig */
class __TwigTemplate_791bd3eadbbe1edf16acd805ab901577e5e4da0108b5383f5439e95087a45250 extends \Twig\Template
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
        $macros["forms"] = $this->macros["forms"] = $this->loadTemplate("@views/macros/forms/forms.twig", "@views/pages/trainings-overview-listing/includes/course-listing/course-listing.twig", 1)->unwrap();
        // line 2
        $macros["__internal_b2214e5b1c74be8dc4ecc24af4ace6c8c1fab805fdfb9c423be37c379dc7f781"] = $this->macros["__internal_b2214e5b1c74be8dc4ecc24af4ace6c8c1fab805fdfb9c423be37c379dc7f781"] = $this->loadTemplate("@views/macros/pagination/pagination.twig", "@views/pages/trainings-overview-listing/includes/course-listing/course-listing.twig", 2)->unwrap();
        // line 3
        echo "
<div class=\"course-listing-block\">
\t<div class=\"container\">
\t\t<div class=\"row course-listing\">
\t\t\t<div class=\"col-md-6 course-card-col\" rv-each-item=\"trainings.courseList\">
\t\t\t\t<div class=\"course-card\">
\t\t\t\t\t<div class=\"course-card-image\">
\t\t\t\t\t\t<img class=\"rounded-8\" rv-src=\"item.thumbnail\" rv-alt=\"item.post_title\"/>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"course-card-content\">
\t\t\t\t\t\t<h3 class=\"course-card-title\">
\t\t\t\t\t\t\t<a rv-href=\"";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "url", [], "any", false, false, false, 14), "html", null, true);
        echo "\" rv-text=\"item.post_title\"></a>
\t\t\t\t\t\t</h3>
\t\t\t\t\t\t<div class=\"course-card-description\" rv-text=\"item.post_excerpt\"></div>
\t\t\t\t\t\t<div class=\"course-card-link\">
\t\t\t\t\t\t\t<a class=\"btn btn-primary\" rv-href=\"item.url\">";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["global"] ?? null), "theme_options", [], "any", false, false, false, 18), "text_translation", [], "any", false, false, false, 18), "default_global_settings_buttons", [], "any", false, false, false, 18), "see_trainings_options", [], "any", false, false, false, 18), "html", null, true);
        echo "</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div id=\"pagination-container\"></div>
\t\t";
        // line 26
        echo "\t</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "@views/pages/trainings-overview-listing/includes/course-listing/course-listing.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 26,  61 => 18,  54 => 14,  41 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@views/pages/trainings-overview-listing/includes/course-listing/course-listing.twig", "D:\\wamp64\\www\\lec2\\wp-content\\themes\\lec2\\resources\\views\\frontend\\src\\views\\pages\\trainings-overview-listing\\includes\\course-listing\\course-listing.twig");
    }
}
