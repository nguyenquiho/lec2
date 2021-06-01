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

/* @views/components/footer/footer.twig */
class __TwigTemplate_77bc2505c9c495faebc30971c600ec7e720a828fd8dd657e2974a05cddc3796e extends \Twig\Template
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
        $macros["__internal_badc595bfefd61924e9b6e53c8643e1bd676d14ba383ddd53db64c63132b0dbc"] = $this->macros["__internal_badc595bfefd61924e9b6e53c8643e1bd676d14ba383ddd53db64c63132b0dbc"] = $this->loadTemplate("@views/macros/navigation/list.twig", "@views/components/footer/footer.twig", 1)->unwrap();
        // line 2
        echo "
";
        // line 3
        $context["footerMenu"] = [];
        // line 4
        $context["footer_menu_items"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["global"] ?? null), "theme_options", [], "any", false, false, false, 4), "footer_menu_website", [], "any", false, false, false, 4), "footer_menu_items", [], "any", false, false, false, 4);
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["footer_menu_items"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["menuItem"]) {
            // line 6
            echo "    ";
            $context["footerMenu"] = twig_array_merge(($context["footerMenu"] ?? null), [0 => ["title" => twig_get_attribute($this->env, $this->source,             // line 7
$context["menuItem"], "footer_menu_item_title", [], "any", false, false, false, 7), "href" => twig_get_attribute($this->env, $this->source,             // line 8
$context["menuItem"], "footer_menu_item_url", [], "any", false, false, false, 8)]]);
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menuItem'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "<footer class=\"site-footer";
        ((twig_get_attribute($this->env, $this->source, ($context["viewData"] ?? null), "footerType", [], "any", false, false, false, 11)) ? (print (twig_escape_filter($this->env, (" site-footer--" . twig_get_attribute($this->env, $this->source, ($context["viewData"] ?? null), "footerType", [], "any", false, false, false, 11)), "html", null, true))) : (print ("")));
        echo "\">
\t<div class=\"container\">
\t\t<div class=\"footer-copy-right\">";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["global"] ?? null), "theme_options", [], "any", false, false, false, 13), "website", [], "any", false, false, false, 13), "copy_right_text", [], "any", false, false, false, 13), "html", null, true);
        echo "</div>
\t\t<div class=\"footer-bottom\">
      <div class=\"footer-social-col\">
\t\t\t\t";
        // line 16
        $this->loadTemplate("@views/components/socials/socials.twig", "@views/components/footer/footer.twig", 16)->display(twig_array_merge($context, ["socials" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 17
($context["global"] ?? null), "theme_options", [], "any", false, false, false, 17), "footer_menu_website", [], "any", false, false, false, 17), "footer_social_networks", [], "any", false, false, false, 17)]));
        // line 19
        echo "\t\t\t</div>
\t\t\t<div class=\"footer-menu\">
\t\t\t\t";
        // line 21
        echo twig_call_macro($macros["__internal_badc595bfefd61924e9b6e53c8643e1bd676d14ba383ddd53db64c63132b0dbc"], "macro_list", [($context["footerMenu"] ?? null)], 21, $context, $this->getSourceContext());
        echo "
\t\t\t</div>
\t\t</div>
\t</div>
</footer>
";
    }

    public function getTemplateName()
    {
        return "@views/components/footer/footer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 21,  74 => 19,  72 => 17,  71 => 16,  65 => 13,  59 => 11,  53 => 8,  52 => 7,  50 => 6,  46 => 5,  44 => 4,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@views/components/footer/footer.twig", "D:\\wamp64\\www\\lec2\\wp-content\\themes\\lec2\\resources\\views\\frontend\\src\\views\\components\\footer\\footer.twig");
    }
}
