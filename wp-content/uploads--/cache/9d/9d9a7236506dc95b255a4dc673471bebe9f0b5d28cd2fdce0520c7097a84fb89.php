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

/* @views/components/socials/socials.twig */
class __TwigTemplate_17c4388152b782a12b81d0860fe23229068455b21c368fde629eaa98bf57a728 extends \Twig\Template
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
        if (($context["socials"] ?? null)) {
            // line 2
            echo "<div class=\"socials\">
  ";
            // line 3
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["socials"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["social"]) {
                // line 4
                echo "    <a href=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["social"], "footer_social_network_url", [], "any", false, false, false, 4), "html", null, true);
                echo "\" target=\"_blank\" rel=\"noopener\" title=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["social"], "footer_socical_network_title", [], "any", false, false, false, 4), "html", null, true);
                echo "\">
      <i class=\"icon ";
                // line 5
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["social"], "footer_socical_network_icon_font", [], "any", false, false, false, 5), "html", null, true);
                echo "\"></i>
    </a>
  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['social'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 8
            echo "</div>
";
        }
    }

    public function getTemplateName()
    {
        return "@views/components/socials/socials.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 8,  53 => 5,  46 => 4,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@views/components/socials/socials.twig", "D:\\wamp64\\www\\lec2\\wp-content\\themes\\lec2\\resources\\views\\frontend\\src\\views\\components\\socials\\socials.twig");
    }
}
