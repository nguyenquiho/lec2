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

/* @views/layouts/layout-default.twig */
class __TwigTemplate_fcad04fff14061e61864193abed8370bec85af6f45bb3373b6b182c5349dbb47 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'bodyContent' => [$this, 'block_bodyContent'],
            'pageContent' => [$this, 'block_pageContent'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@views/layouts/layout-basic.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@views/layouts/layout-basic.twig", "@views/layouts/layout-default.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_bodyContent($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "
  ";
        // line 5
        $this->loadTemplate("@views/components/header/header.twig", "@views/layouts/layout-default.twig", 5)->display($context);
        // line 6
        echo "
  <main class=\"site-main\">
    ";
        // line 8
        $this->displayBlock('pageContent', $context, $blocks);
        // line 9
        echo "  </main>

  ";
        // line 11
        $this->loadTemplate("@views/components/footer/footer.twig", "@views/layouts/layout-default.twig", 11)->display($context);
        // line 12
        echo "  ";
        $this->loadTemplate("@views/components/modals/modal-contact.twig", "@views/layouts/layout-default.twig", 12)->display(twig_array_merge($context, ["modalTitle" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 13
($context["global"] ?? null), "theme_options", [], "any", false, false, false, 13), "form_contact_top", [], "any", false, false, false, 13), "hiring_popup_label", [], "any", false, false, false, 13), "modalDescription" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 14
($context["global"] ?? null), "theme_options", [], "any", false, false, false, 14), "form_contact_top", [], "any", false, false, false, 14), "hiring_popup_description", [], "any", false, false, false, 14), "modalType" => "contact", "modalID" => "contactForm"]));
        // line 18
        echo "
  ";
        // line 19
        $this->loadTemplate("@views/components/modals/modal-contact.twig", "@views/layouts/layout-default.twig", 19)->display(twig_array_merge($context, ["modalTitle" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 20
($context["global"] ?? null), "theme_options", [], "any", false, false, false, 20), "form_contact_top", [], "any", false, false, false, 20), "request_text", [], "any", false, false, false, 20), "modalDescription" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 21
($context["global"] ?? null), "theme_options", [], "any", false, false, false, 21), "form_contact_top", [], "any", false, false, false, 21), "request_form_description", [], "any", false, false, false, 21), "modalType" => "request", "modalID" => "requestForm"]));
    }

    // line 8
    public function block_pageContent($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "@views/layouts/layout-default.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 8,  78 => 21,  77 => 20,  76 => 19,  73 => 18,  71 => 14,  70 => 13,  68 => 12,  66 => 11,  62 => 9,  60 => 8,  56 => 6,  54 => 5,  51 => 4,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@views/layouts/layout-default.twig", "D:\\wamp64\\www\\lec2\\wp-content\\themes\\lec2\\resources\\views\\frontend\\src\\views\\layouts\\layout-default.twig");
    }
}
