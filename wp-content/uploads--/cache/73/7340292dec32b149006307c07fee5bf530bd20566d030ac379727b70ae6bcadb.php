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

/* @views/layouts/layout-basic.twig */
class __TwigTemplate_ab5a208e81127e2aecd57a249822554b4efcbbbd01d4b77c2c9ab312ed699565 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'bodyContent' => [$this, 'block_bodyContent'],
            'footerContent' => [$this, 'block_footerContent'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
";
        // line 2
        $context["layoutData"] = ["layoutClass" => ""];
        // line 14
        echo "
\t<html ";
        // line 15
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('language_attributes')->getCallable(), []), "html", null, true);
        echo "> <head>
\t\t<meta charset=\"";
        // line 16
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('blog_info')->getCallable(), ["charset"]), "html", null, true);
        echo "\">
\t\t<meta name=\"description\" content=\"";
        // line 17
        echo twig_escape_filter($this->env, ($context["site_description"] ?? null), "html", null, true);
        echo "\">

\t\t";
        // line 19
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('wp_head')->getCallable(), []), "html", null, true);
        echo "

\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=5.0\">
\t\t<link href=\"https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;1,300;1,400;1,600&family=Roboto:ital,wght@0,300;0,400;0,500;0,700;0,900;1,300;1,400;1,500;1,700;1,900&display=swap\" rel=\"preload\" rel=\"stylesheet\">
\t\t<link href=\"https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css\" rel=\"stylesheet\" type=\"text/css\" />
    ";
        // line 25
        echo "\t\t";
        $this->loadTemplate("@views/blocks/meta-head.twig", "@views/layouts/layout-basic.twig", 25)->display($context);
        // line 26
        echo "
\t\t";
        // line 27
        $context["wp_config"] = ["isMock" => twig_get_attribute($this->env, $this->source,         // line 28
($context["global"] ?? null), "is_adapter", [], "any", false, false, false, 28), "ajaxUrl" => twig_get_attribute($this->env, $this->source,         // line 29
($context["global"] ?? null), "ajax_url", [], "any", false, false, false, 29), "feAssetsUrl" => twig_get_attribute($this->env, $this->source,         // line 30
($context["global"] ?? null), "fe_assets_url", [], "any", false, false, false, 30)];
        // line 32
        echo "
\t\t<script>
\t\t\tvar eli = {
\t\t\t\tcontroller: \"";
        // line 35
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["viewData"] ?? null), "jsController", [], "any", false, false, false, 35), "html", null, true);
        echo "\",
\t\t\t\twpConfig: ";
        // line 36
        echo json_encode(($context["wp_config"] ?? null));
        echo ",
\t\t\t\tform_offer: ";
        // line 37
        echo json_encode(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["global"] ?? null), "theme_options", [], "any", false, false, false, 37), "form_offer", [], "any", false, false, false, 37));
        echo ",
        requestFailed: ";
        // line 38
        echo json_encode(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["global"] ?? null), "theme_options", [], "any", false, false, false, 38), "text_translation", [], "any", false, false, false, 38), "default_global_settings_text", [], "any", false, false, false, 38), "request_failed", [], "any", false, false, false, 38));
        echo ",
        thank: ";
        // line 39
        echo json_encode(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["global"] ?? null), "theme_options", [], "any", false, false, false, 39), "text_translation", [], "any", false, false, false, 39), "default_global_settings_text", [], "any", false, false, false, 39), "thank", [], "any", false, false, false, 39));
        echo ",
        thankDescription: ";
        // line 40
        echo json_encode(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["global"] ?? null), "theme_options", [], "any", false, false, false, 40), "text_translation", [], "any", false, false, false, 40), "default_global_settings_text", [], "any", false, false, false, 40), "thankDescription", [], "any", false, false, false, 40));
        echo ",
      };
\t\t</script>
    <style type=\"text/css\">
        ";
        // line 44
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["global"] ?? null), "theme_options", [], "any", false, false, false, 44), "website", [], "any", false, false, false, 44), "css_override", [], "any", false, false, false, 44);
        echo "
    </style>

\t</head>
\t<body ";
        // line 48
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('body_class')->getCallable(), [("sarita-theme " . twig_get_attribute($this->env, $this->source, ($context["viewData"] ?? null), "bodyClass", [], "any", false, false, false, 48))]), "html", null, true);
        echo ">
\t\t<div class=\"site\">
\t\t\t";
        // line 50
        $this->displayBlock('bodyContent', $context, $blocks);
        // line 55
        echo "\t\t\t";
        $this->displayBlock('footerContent', $context, $blocks);
        // line 56
        echo "\t\t</div>
\t\t";
        // line 57
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('wp_footer')->getCallable(), []), "html", null, true);
        echo "

\t</body>
</html>
";
    }

    // line 50
    public function block_bodyContent($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 51
        echo "\t\t\t\t<h1>
\t\t\t\t\tBody say hi!!
\t\t\t\t</h1>
\t\t\t";
    }

    // line 55
    public function block_footerContent($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "@views/layouts/layout-basic.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 55,  144 => 51,  140 => 50,  131 => 57,  128 => 56,  125 => 55,  123 => 50,  118 => 48,  111 => 44,  104 => 40,  100 => 39,  96 => 38,  92 => 37,  88 => 36,  84 => 35,  79 => 32,  77 => 30,  76 => 29,  75 => 28,  74 => 27,  71 => 26,  68 => 25,  60 => 19,  55 => 17,  51 => 16,  47 => 15,  44 => 14,  42 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@views/layouts/layout-basic.twig", "D:\\wamp64\\www\\lec2\\wp-content\\themes\\lec2\\resources\\views\\frontend\\src\\views\\layouts\\layout-basic.twig");
    }
}
