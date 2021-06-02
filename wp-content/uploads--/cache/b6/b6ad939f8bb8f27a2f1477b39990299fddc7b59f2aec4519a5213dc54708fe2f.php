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

/* @views/pages/home/includes/advantage-block/advantage-block.twig */
class __TwigTemplate_e1e26252f2c421e35a28d43a7e74d21ba191f14293957867223e70c9c2b48d98 extends \Twig\Template
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
        if (twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "advantage_item", [], "any", false, false, false, 1)) {
            // line 2
            echo "  <div class=\"advantage-block\">
    <div class=\"container\">
      <h2 class=\"text-center\"> ";
            // line 4
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "title", [], "any", false, false, false, 4), "html", null, true);
            echo " </h2>
        <div class=\"advantage-list row\">
          ";
            // line 6
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "advantage_item", [], "any", false, false, false, 6));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["advantageItem"]) {
                // line 7
                echo "            ";
                $this->loadTemplate("@views/components/advantage-card/advantage-card.twig", "@views/pages/home/includes/advantage-block/advantage-block.twig", 7)->display(twig_array_merge($context, ["advantageItem" =>                 // line 8
$context["advantageItem"], "colClass" => "col-md-4"]));
                // line 11
                echo "          ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['advantageItem'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 12
            echo "      </div>
    </div>
  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "@views/pages/home/includes/advantage-block/advantage-block.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 12,  69 => 11,  67 => 8,  65 => 7,  48 => 6,  43 => 4,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@views/pages/home/includes/advantage-block/advantage-block.twig", "D:\\wamp64\\www\\lec2\\wp-content\\themes\\lec2\\resources\\views\\frontend\\src\\views\\pages\\home\\includes\\advantage-block\\advantage-block.twig");
    }
}
