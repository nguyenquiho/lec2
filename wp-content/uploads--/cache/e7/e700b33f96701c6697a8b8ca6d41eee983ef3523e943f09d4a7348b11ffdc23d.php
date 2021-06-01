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

/* @views/blocks/meta-head.twig */
class __TwigTemplate_113d8cc9b2f67ce7fbbe90d9a6fd90090dcd1b5a459ec5739f61ccc76dbf397a extends \Twig\Template
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
        echo "<link rel=\"apple-touch-icon\" sizes=\"180x180\" href=\"";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('fe_assets')->getCallable(), ["images/favicons/apple-touch-icon.png"]), "html", null, true);
        echo "\">
<link rel=\"icon\" type=\"image/png\" sizes=\"32x32\" href=\"";
        // line 3
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('fe_assets')->getCallable(), ["images/favicons/favicon-32x32.png"]), "html", null, true);
        echo "\">
<link rel=\"icon\" type=\"image/png\" sizes=\"16x16\" href=\"";
        // line 4
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('fe_assets')->getCallable(), ["images/favicons/favicon-16x16.png"]), "html", null, true);
        echo "\">
<link rel=\"manifest\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('fe_assets')->getCallable(), ["images/favicons/site.webmanifest"]), "html", null, true);
        echo "\">

";
        // line 8
        echo "<meta property=\"og:image:height\" content=\"630\"/>
<meta property=\"og:image:width\" content=\"1200\"/>
<meta property=\"og:image\" content=\"";
        // line 10
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('fe_assets')->getCallable(), ["images/social-image.png"]), "html", null, true);
        echo "\"/>
";
    }

    public function getTemplateName()
    {
        return "@views/blocks/meta-head.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 10,  55 => 8,  50 => 5,  46 => 4,  42 => 3,  37 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "@views/blocks/meta-head.twig", "D:\\wamp64\\www\\lec2\\wp-content\\themes\\lec2\\resources\\views\\frontend\\src\\views\\blocks\\meta-head.twig");
    }
}
