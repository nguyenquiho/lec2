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

/* @views/components/menu/menu.twig */
class __TwigTemplate_ff1fc9486a44eda429fc15b287faed25a89aa3e047750167167d4fefb19e4ab7 extends \Twig\Template
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
        $macros["__internal_3a7add5a6a37b74daeba80e49c1e85d8259d61bbf004083c29d9c0a73815998d"] = $this->macros["__internal_3a7add5a6a37b74daeba80e49c1e85d8259d61bbf004083c29d9c0a73815998d"] = $this->loadTemplate("@views/macros/navigation/nav.twig", "@views/components/menu/menu.twig", 2)->unwrap();
        // line 3
        echo "
";
        // line 4
        $context["itemsMenu"] = [0 => ["title" => "Trainings Modules", "href" => "#", "customClass" => "menu-item--arrow menu-item--training-modules trainingActive"], 1 => ["title" => "Schedule", "href" => "", "customClass" => "menu-item--arrow menu-item--schedule"], 2 => ["title" => "Partners", "href" => "partners.html", "customClass" => "partnerActive"], 3 => ["title" => "News", "href" => "news.html", "customClass" => "newsActive"], 4 => ["title" => "About Us", "href" => "about.html"], 5 => ["title" => "Contact", "href" => "contact.html"], 6 => ["title" => "Legal Notice", "href" => "legal-notice.html", "customClass" => "d-block d-lg-none"], 7 => ["title" => "TAC", "href" => "tac.html", "customClass" => "d-block d-lg-none"], 8 => ["title" => "Privacy Policy", "href" => "privacy-policy.html", "customClass" => "d-block d-lg-none"]];
        // line 49
        echo "
<nav class=\"nav\" id=\"nav\">
  ";
        // line 51
        if (twig_get_attribute($this->env, $this->source, ($context["global"] ?? null), "is_adapter", [], "any", false, false, false, 51)) {
            // line 52
            echo "\t  ";
            echo twig_call_macro($macros["__internal_3a7add5a6a37b74daeba80e49c1e85d8259d61bbf004083c29d9c0a73815998d"], "macro_nav", [($context["itemsMenu"] ?? null), ["classes" => "nav-menu"]], 52, $context, $this->getSourceContext());
            echo "
  ";
        } else {
            // line 54
            echo "    ";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('wp_nav_menu')->getCallable(), ["primary_navigation", "nav-menu"]), "html", null, true);
            echo "
  ";
        }
        // line 56
        echo "</nav>
";
    }

    public function getTemplateName()
    {
        return "@views/components/menu/menu.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 56,  56 => 54,  50 => 52,  48 => 51,  44 => 49,  42 => 4,  39 => 3,  37 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "@views/components/menu/menu.twig", "D:\\wamp64\\www\\lec2\\wp-content\\themes\\lec2\\resources\\views\\frontend\\src\\views\\components\\menu\\menu.twig");
    }
}
