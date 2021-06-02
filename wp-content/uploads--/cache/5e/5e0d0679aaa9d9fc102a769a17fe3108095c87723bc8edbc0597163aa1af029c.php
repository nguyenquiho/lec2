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

/* @views/pages/trainings-overview-listing-detail/includes/training-type/training-type.twig */
class __TwigTemplate_724b775a64bc2848a04c80328b5b56f99cb2c01dedec52c4636df992b4476e33 extends \Twig\Template
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
        $macros["forms"] = $this->macros["forms"] = $this->loadTemplate("@views/macros/forms/forms.twig", "@views/pages/trainings-overview-listing-detail/includes/training-type/training-type.twig", 1)->unwrap();
        // line 3
        $context["options"] = ["slidesToShow" => 5, "slidesToScroll" => 1, "arrows" => false, "dots" => false, "autoplay" => false, "infinite" => false, "focusOnSelect" => false, "responsive" => [0 => ["breakpoint" => 1399, "settings" => ["slidesToShow" => 5, "focusOnSelect" => true]], 1 => ["breakpoint" => 1199, "settings" => ["slidesToShow" => 4]], 2 => ["breakpoint" => 1025, "settings" => ["arrows" => true, "slidesToShow" => 3, "variableWidth" => false, "centerMode" => false]], 3 => ["breakpoint" => 767, "settings" => ["arrows" => true, "slidesToShow" => 2, "variableWidth" => false, "centerMode" => false]]]];
        // line 46
        echo "<div class=\"training-type-block\">
<div class=\"container\">
  <h2 class=\"training-type-block-title\">";
        // line 48
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["global"] ?? null), "theme_options", [], "any", false, false, false, 48), "text_translation", [], "any", false, false, false, 48), "default_global_settings_text", [], "any", false, false, false, 48), "choose_type", [], "any", false, false, false, 48), "html", null, true);
        echo "</h2>
  <div class=\"training-type-list\" data-slick='";
        // line 49
        echo twig_escape_filter($this->env, json_encode(($context["options"] ?? null)), "html", null, true);
        echo "'>
    ";
        // line 50
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["data"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["trainingItem"]) {
            // line 51
            echo "      <div class=\"training-type-column\">
        <div class=\"training-type\" data-index=\"training-type-";
            // line 52
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 52), "html", null, true);
            echo "\" data-target=\"#training-type-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 52), "html", null, true);
            echo "\">
          <h3 class=\"training-type-title\">";
            // line 53
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["trainingItem"], "post_title", [], "any", false, false, false, 53), "html", null, true);
            echo "</h3>
          <img class=\"rounded-8\" src=\"";
            // line 54
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["trainingItem"], "thumbnail", [], "any", false, false, false, 54), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["trainingItem"], "post_title", [], "any", false, false, false, 54), "html", null, true);
            echo "\"/>
        </div>
      </div>
    ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trainingItem'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        echo "  </div>
</div>

<div class=\"training-body\">
\t<div class=\"container\">
\t\t";
        // line 63
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["data"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["trainingItem"]) {
            // line 64
            echo "
\t\t\t<div class=\"training-container\" id=\"training-type-";
            // line 65
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 65), "html", null, true);
            echo "\">
\t\t\t\t<dl class=\"training-body-row training-body-row--oneline\">
\t\t\t\t\t<dt class=\"training-body-content left\">
\t\t\t\t\t\t";
            // line 68
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["global"] ?? null), "theme_options", [], "any", false, false, false, 68), "text_translation", [], "any", false, false, false, 68), "default_global_settings_text", [], "any", false, false, false, 68), "type_training", [], "any", false, false, false, 68), "html", null, true);
            echo ":
\t\t\t\t\t</dt>
\t\t\t\t\t<dd class=\"training-body-content right\">";
            // line 70
            echo twig_get_attribute($this->env, $this->source, $context["trainingItem"], "post_title", [], "any", false, false, false, 70);
            echo "</dd>
\t\t\t\t</dl>
\t\t\t\t";
            // line 72
            if ((twig_get_attribute($this->env, $this->source, $context["trainingItem"], "execution_of_training_select", [], "any", false, false, false, 72) && (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["trainingItem"], "execution_of_training_select", [], "any", false, false, false, 72)) > 0))) {
                // line 73
                echo "        \t\t<dl class=\"training-body-row training-body-row--oneline\" id=\"execution\">
\t\t\t\t\t<dt class=\"training-body-content left\">
\t\t\t\t\t\t";
                // line 75
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["global"] ?? null), "theme_options", [], "any", false, false, false, 75), "text_translation", [], "any", false, false, false, 75), "default_global_settings_text", [], "any", false, false, false, 75), "execution_of_training", [], "any", false, false, false, 75), "html", null, true);
                echo ":
\t\t\t\t\t</dt>
\t\t\t\t\t";
                // line 77
                $context["executionOfTrainingValue"] = "";
                // line 78
                echo "\t\t\t\t\t<dd class=\"training-body-content right\">
\t\t\t\t\t\t";
                // line 79
                if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["trainingItem"], "execution_of_training_select", [], "any", false, false, false, 79)) > 1)) {
                    // line 80
                    echo "\t\t\t\t\t\t\t";
                    echo twig_call_macro($macros["forms"], "macro_selectCost", [["name" => "executionOfTrainingSelect", "classes" => "selectpicker selectprimary", "options" => twig_get_attribute($this->env, $this->source, $context["trainingItem"], "execution_of_training_select", [], "any", false, false, false, 80)]], 80, $context, $this->getSourceContext());
                    echo "
\t\t\t\t\t\t";
                } else {
                    // line 82
                    echo "              ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = twig_get_attribute($this->env, $this->source, $context["trainingItem"], "execution_of_training_select", [], "any", false, false, false, 82)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[0] ?? null) : null), "label", [], "any", false, false, false, 82), "html", null, true);
                    echo "
              ";
                    // line 83
                    $context["executionOfTrainingValue"] = twig_get_attribute($this->env, $this->source, (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = twig_get_attribute($this->env, $this->source, $context["trainingItem"], "execution_of_training_select", [], "any", false, false, false, 83)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[0] ?? null) : null), "value", [], "any", false, false, false, 83);
                    // line 84
                    echo "\t\t\t\t\t\t";
                }
                // line 85
                echo "\t\t\t\t\t</dd>
\t\t\t\t</dl>
\t\t\t\t";
            }
            // line 88
            echo "\t\t\t\t";
            $context["cost"] = twig_get_attribute($this->env, $this->source, $context["trainingItem"], "cost", [], "any", false, false, false, 88);
            // line 89
            echo "\t\t\t\t";
            if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["trainingItem"], "execution_of_training_select", [], "any", false, false, false, 89)) > 0)) {
                // line 90
                echo "\t\t\t\t\t";
                $context["cost"] = twig_get_attribute($this->env, $this->source, (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = twig_get_attribute($this->env, $this->source, $context["trainingItem"], "execution_of_training_select", [], "any", false, false, false, 90)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b[0] ?? null) : null), "cost", [], "any", false, false, false, 90);
                // line 91
                echo "\t\t\t\t";
            }
            // line 92
            echo "\t\t\t\t";
            if (($context["cost"] ?? null)) {
                // line 93
                echo "\t\t\t\t<dl class=\"training-body-row training-body-row--cost\">
\t\t\t\t\t<dt class=\"training-body-content left\">
\t\t\t\t\t\t";
                // line 95
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["global"] ?? null), "theme_options", [], "any", false, false, false, 95), "text_translation", [], "any", false, false, false, 95), "default_global_settings_text", [], "any", false, false, false, 95), "cost", [], "any", false, false, false, 95), "html", null, true);
                echo ":
\t\t\t\t\t</dt>
\t\t\t\t\t<dd class=\"training-body-content right\"><span class=\"cost-value\">";
                // line 97
                echo ($context["cost"] ?? null);
                echo "</span></dd>
\t\t\t\t</dl>
\t\t\t\t";
            }
            // line 100
            echo "\t\t\t\t";
            $context["defaultHiddenClass"] = " hidden";
            // line 101
            echo "\t\t\t\t";
            if (((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["trainingItem"], "execution_of_training_select", [], "any", false, false, false, 101)) > 0) && (twig_get_attribute($this->env, $this->source, (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = twig_get_attribute($this->env, $this->source, $context["trainingItem"], "execution_of_training_select", [], "any", false, false, false, 101)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002[0] ?? null) : null), "value", [], "any", false, false, false, 101) == "live_video"))) {
                // line 102
                echo "\t\t\t\t\t";
                $context["defaultHiddenClass"] = "";
                // line 103
                echo "\t\t\t\t";
            }
            // line 104
            echo "
\t\t\t\t";
            // line 105
            if (twig_get_attribute($this->env, $this->source, $context["trainingItem"], "format", [], "any", false, false, false, 105)) {
                // line 106
                echo "        <dl class=\"training-body-row training-body-row--format";
                echo twig_escape_filter($this->env, ($context["defaultHiddenClass"] ?? null), "html", null, true);
                echo "\">
\t\t\t\t\t<dt class=\"training-body-content left\">
\t\t\t\t\t\t";
                // line 108
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["global"] ?? null), "theme_options", [], "any", false, false, false, 108), "text_translation", [], "any", false, false, false, 108), "default_global_settings_text", [], "any", false, false, false, 108), "format", [], "any", false, false, false, 108), "html", null, true);
                echo ":
\t\t\t\t\t</dt>
\t\t\t\t\t<dd class=\"training-body-content right\">";
                // line 110
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["trainingItem"], "format", [], "any", false, false, false, 110), "html", null, true);
                echo "</dd>
\t\t\t\t</dl>
\t\t\t\t";
            }
            // line 113
            echo "\t\t\t\t";
            if ((twig_get_attribute($this->env, $this->source, $context["trainingItem"], "time_select", [], "any", false, false, false, 113) || twig_get_attribute($this->env, $this->source, $context["trainingItem"], "no_time", [], "any", false, false, false, 113))) {
                // line 114
                echo "        <dl class=\"training-body-row training-body-row--date";
                echo twig_escape_filter($this->env, ($context["defaultHiddenClass"] ?? null), "html", null, true);
                echo "\">
\t\t\t\t\t<dt class=\"training-body-content left\">
\t\t\t\t\t\t";
                // line 116
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["global"] ?? null), "theme_options", [], "any", false, false, false, 116), "text_translation", [], "any", false, false, false, 116), "default_global_settings_text", [], "any", false, false, false, 116), "date", [], "any", false, false, false, 116), "html", null, true);
                echo ":
\t\t\t\t\t</dt>
          ";
                // line 118
                if ((twig_get_attribute($this->env, $this->source, $context["trainingItem"], "time_select", [], "any", false, false, false, 118) && (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["trainingItem"], "time_select", [], "any", false, false, false, 118)) > 0))) {
                    // line 119
                    echo "\t\t\t\t\t  <dd class=\"training-body-content right\">";
                    echo twig_call_macro($macros["forms"], "macro_select", [["name" => "time_select", "classes" => "selectpicker selectprimary", "options" => twig_get_attribute($this->env, $this->source, $context["trainingItem"], "time_select", [], "any", false, false, false, 119)]], 119, $context, $this->getSourceContext());
                    echo "</dd>
          ";
                } else {
                    // line 121
                    echo "            <dd class=\"training-body-content right no_time_select\"> ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["trainingItem"], "no_time", [], "any", false, false, false, 121), "label", [], "any", false, false, false, 121), "html", null, true);
                    echo "</dd>
          ";
                }
                // line 123
                echo "        </dl>
\t\t\t\t";
            }
            // line 125
            echo "        ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["trainingItem"], "execution_of_training", [], "any", false, false, false, 125), "has_live_course", [], "any", false, false, false, 125)) {
                // line 126
                echo "        <dl class=\"training-body-row training-body-row--duration";
                echo twig_escape_filter($this->env, ($context["defaultHiddenClass"] ?? null), "html", null, true);
                echo "\">
          <dt class=\"training-body-content left\">
            ";
                // line 128
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["global"] ?? null), "theme_options", [], "any", false, false, false, 128), "text_translation", [], "any", false, false, false, 128), "default_global_settings_text", [], "any", false, false, false, 128), "duration", [], "any", false, false, false, 128), "html", null, true);
                echo ":
          </dt>
          <dd class=\"training-body-content right\">";
                // line 130
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["trainingItem"], "execution_of_training", [], "any", false, false, false, 130), "duration", [], "any", false, false, false, 130);
                echo "</dd>
        </dl>
        ";
            }
            // line 133
            echo "\t\t\t\t<dl class=\"training-body-row\">
\t\t\t\t\t<dt class=\"training-body-content left\">
\t\t\t\t\t\t";
            // line 135
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["global"] ?? null), "theme_options", [], "any", false, false, false, 135), "text_translation", [], "any", false, false, false, 135), "default_global_settings_text", [], "any", false, false, false, 135), "participant_documents_provided", [], "any", false, false, false, 135), "html", null, true);
            echo ":
\t\t\t\t\t</dt>
\t\t\t\t\t<dd class=\"training-body-content right\">";
            // line 137
            echo twig_get_attribute($this->env, $this->source, $context["trainingItem"], "participant_documents_provided", [], "any", false, false, false, 137);
            echo "</dd>
\t\t\t\t</dl>
\t\t\t\t<dl class=\"training-body-row\">
\t\t\t\t\t<dt class=\"training-body-content left\">
\t\t\t\t\t\t";
            // line 141
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["global"] ?? null), "theme_options", [], "any", false, false, false, 141), "text_translation", [], "any", false, false, false, 141), "default_global_settings_text", [], "any", false, false, false, 141), "course_objectives", [], "any", false, false, false, 141), "html", null, true);
            echo ":
\t\t\t\t\t</dt>
\t\t\t\t\t<dd class=\"training-body-content training-body-content--richtext right\">";
            // line 143
            echo twig_get_attribute($this->env, $this->source, $context["trainingItem"], "course_objectives", [], "any", false, false, false, 143);
            echo "</dd>
\t\t\t\t</dl>
\t\t\t\t<div class=\"buy-link text-center\">
\t\t\t\t\t";
            // line 146
            if ((twig_get_attribute($this->env, $this->source, $context["trainingItem"], "post_title", [], "any", false, false, false, 146) == "Inhouse")) {
                // line 147
                echo "\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-info\" data-toggle=\"modal\" data-target=\"#requestForm\">
\t\t\t\t\t\t\t\t";
                // line 148
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["global"] ?? null), "theme_options", [], "any", false, false, false, 148), "form_contact_top", [], "any", false, false, false, 148), "request_text", [], "any", false, false, false, 148), "html", null, true);
                echo "
\t\t\t\t\t\t\t</button>
\t\t\t\t\t";
            } else {
                // line 151
                echo "\t\t\t\t\t\t\t";
                $context["trainingUrlValue"] = "";
                // line 152
                echo "\t\t\t\t\t\t\t";
                if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["trainingItem"], "execution_of_training_select", [], "any", false, false, false, 152)) > 0)) {
                    // line 153
                    echo "\t\t\t\t\t\t\t\t";
                    $context["trainingUrlValue"] = twig_get_attribute($this->env, $this->source, (($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = twig_get_attribute($this->env, $this->source, $context["trainingItem"], "execution_of_training_select", [], "any", false, false, false, 153)) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4[0] ?? null) : null), "url", [], "any", false, false, false, 153);
                    // line 154
                    echo "\t\t\t\t\t\t";
                }
                // line 155
                echo "\t\t\t\t\t\t";
                $context["defaultTime"] = "";
                // line 156
                echo "\t\t\t\t\t\t";
                if ((((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["trainingItem"], "execution_of_training_select", [], "any", false, false, false, 156)) > 0) && (twig_get_attribute($this->env, $this->source, (($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = twig_get_attribute($this->env, $this->source, $context["trainingItem"], "execution_of_training_select", [], "any", false, false, false, 156)) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666[0] ?? null) : null), "value", [], "any", false, false, false, 156) == "live_video")) && (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["trainingItem"], "time_select", [], "any", false, false, false, 156)) > 0))) {
                    // line 157
                    echo "\t\t\t\t\t\t\t";
                    $context["defaultTime"] = twig_get_attribute($this->env, $this->source, (($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = twig_get_attribute($this->env, $this->source, $context["trainingItem"], "time_select", [], "any", false, false, false, 157)) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e[0] ?? null) : null), "value", [], "any", false, false, false, 157);
                    // line 158
                    echo "\t\t\t\t\t\t";
                }
                // line 159
                echo "\t\t\t\t\t\t<input type=\"hidden\" name=\"time_default\" value=\"\"/>
\t\t\t\t\t\t";
                // line 161
                echo "\t\t\t\t\t\t";
                if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["trainingItem"], "execution_of_training_select", [], "any", false, false, false, 161)) > 0)) {
                    // line 162
                    echo "\t\t\t\t\t\t\t<form method=\"post\" action=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page_data"] ?? null), "custom_data", [], "any", false, false, false, 162), "checkout_url", [], "any", false, false, false, 162), "html", null, true);
                    echo "\">
\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"training_id\" value=\"";
                    // line 164
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["page_data"] ?? null), "ID", [], "any", false, false, false, 164), "html", null, true);
                    echo "\"/>
\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"training_type_id\" id=\"training_type_id\" value=\"";
                    // line 165
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["trainingItem"], "ID", [], "any", false, false, false, 165), "html", null, true);
                    echo "\"/>
\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"execution_of_training\" value=\"";
                    // line 166
                    echo twig_escape_filter($this->env, ($context["executionOfTrainingValue"] ?? null), "html", null, true);
                    echo "\"/>
\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"training_url\" value=\"";
                    // line 167
                    echo twig_escape_filter($this->env, ($context["trainingUrlValue"] ?? null), "html", null, true);
                    echo "\"/>
\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"time\" value=\"";
                    // line 168
                    echo twig_escape_filter($this->env, ($context["defaultTime"] ?? null), "html", null, true);
                    echo "\"/>
\t\t\t\t\t\t\t\t\t\t";
                    // line 169
                    $context["btnHiddenClass"] = "";
                    // line 170
                    echo "\t\t\t\t\t\t\t\t\t\t";
                    if ((((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["trainingItem"], "execution_of_training_select", [], "any", false, false, false, 170)) == 1) && (twig_get_attribute($this->env, $this->source, (($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 = twig_get_attribute($this->env, $this->source, $context["trainingItem"], "execution_of_training_select", [], "any", false, false, false, 170)) && is_array($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52) || $__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 instanceof ArrayAccess ? ($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52[0] ?? null) : null), "value", [], "any", false, false, false, 170) == "live_video")) && twig_get_attribute($this->env, $this->source, $context["trainingItem"], "no_time", [], "any", false, false, false, 170))) {
                        // line 171
                        echo "\t\t\t\t\t\t\t\t\t\t\t";
                        $context["btnHiddenClass"] = " hidden";
                        // line 172
                        echo "\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 173
                    echo "
\t\t\t\t\t\t\t\t\t\t<input type=\"submit\" name=\"buyTraining\" class=\"btn btn-info btn-buy-training";
                    // line 174
                    echo twig_escape_filter($this->env, ($context["btnHiddenClass"] ?? null), "html", null, true);
                    echo "\" value=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["global"] ?? null), "theme_options", [], "any", false, false, false, 174), "text_translation", [], "any", false, false, false, 174), "default_global_settings_buttons", [], "any", false, false, false, 174), "buy_training", [], "any", false, false, false, 174), "html", null, true);
                    echo "\"/>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t";
                }
                // line 178
                echo "\t\t\t\t\t";
            }
            // line 179
            echo "\t\t\t\t\t";
            if (twig_get_attribute($this->env, $this->source, $context["trainingItem"], "pdf_file", [], "any", false, false, false, 179)) {
                // line 180
                echo "\t\t\t\t\t\t<a href=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["trainingItem"], "pdf_file", [], "any", false, false, false, 180), "html", null, true);
                echo "\" download class=\"btn btn-outline-info\">
\t\t\t\t\t\t\t";
                // line 181
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["global"] ?? null), "theme_options", [], "any", false, false, false, 181), "text_translation", [], "any", false, false, false, 181), "default_global_settings_buttons", [], "any", false, false, false, 181), "download_pdf", [], "any", false, false, false, 181), "html", null, true);
                echo "
\t\t\t\t\t\t</a>
\t\t\t\t\t";
            }
            // line 184
            echo "\t\t\t\t</div>
\t\t\t</div>
\t\t";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trainingItem'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 187
        echo "\t</div>
</div>

<div class=\"agenda-block\">
\t";
        // line 191
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["data"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["trainingItem"]) {
            // line 192
            echo "\t\t";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["trainingItem"], "agenda", [], "any", false, false, false, 192), "title", [], "any", false, false, false, 192)) {
                // line 193
                echo "\t\t\t<div class=\"container\" id=\"training-type-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 193), "html", null, true);
                echo "\">
\t\t\t\t<div class=\"accordion\" id=\"accordionAgenda-";
                // line 194
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 194), "html", null, true);
                echo "\">
\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t<div class=\"card-header\" id=\"headingOne-";
                // line 196
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 196), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t<h3 class=\"collapsed\" data-toggle=\"collapse\" data-target=\"#collapseOne-";
                // line 197
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 197), "html", null, true);
                echo "\" aria-expanded=\"false\" aria-controls=\"collapseOne-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 197), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t";
                // line 198
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["trainingItem"], "agenda", [], "any", false, false, false, 198), "title", [], "any", false, false, false, 198), "html", null, true);
                echo "
\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t<p class=\"agenda-description\">";
                // line 200
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["trainingItem"], "agenda", [], "any", false, false, false, 200), "agenda_description", [], "any", false, false, false, 200), "html", null, true);
                echo "</p>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div id=\"collapseOne-";
                // line 203
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 203), "html", null, true);
                echo "\" class=\"collapse\" aria-labelledby=\"headingOne-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 203), "html", null, true);
                echo "\" data-parent=\"#accordionAgenda-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 203), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t<dl class=\"card-body row\">
\t\t\t\t\t\t\t\t<dt class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t";
                // line 206
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["trainingItem"], "agenda", [], "any", false, false, false, 206), "agenda_left", [], "any", false, false, false, 206);
                echo "
\t\t\t\t\t\t\t\t</dt>
\t\t\t\t\t\t\t\t<dd class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t";
                // line 209
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["trainingItem"], "agenda", [], "any", false, false, false, 209), "agenda_right", [], "any", false, false, false, 209);
                echo "
\t\t\t\t\t\t\t\t</dd>
\t\t\t\t\t\t\t</dl>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t";
            }
            // line 217
            echo "\t";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trainingItem'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 218
        echo "</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "@views/pages/trainings-overview-listing-detail/includes/training-type/training-type.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  549 => 218,  535 => 217,  524 => 209,  518 => 206,  508 => 203,  502 => 200,  497 => 198,  491 => 197,  487 => 196,  482 => 194,  477 => 193,  474 => 192,  457 => 191,  451 => 187,  435 => 184,  429 => 181,  424 => 180,  421 => 179,  418 => 178,  409 => 174,  406 => 173,  403 => 172,  400 => 171,  397 => 170,  395 => 169,  391 => 168,  387 => 167,  383 => 166,  379 => 165,  375 => 164,  369 => 162,  366 => 161,  363 => 159,  360 => 158,  357 => 157,  354 => 156,  351 => 155,  348 => 154,  345 => 153,  342 => 152,  339 => 151,  333 => 148,  330 => 147,  328 => 146,  322 => 143,  317 => 141,  310 => 137,  305 => 135,  301 => 133,  295 => 130,  290 => 128,  284 => 126,  281 => 125,  277 => 123,  271 => 121,  265 => 119,  263 => 118,  258 => 116,  252 => 114,  249 => 113,  243 => 110,  238 => 108,  232 => 106,  230 => 105,  227 => 104,  224 => 103,  221 => 102,  218 => 101,  215 => 100,  209 => 97,  204 => 95,  200 => 93,  197 => 92,  194 => 91,  191 => 90,  188 => 89,  185 => 88,  180 => 85,  177 => 84,  175 => 83,  170 => 82,  164 => 80,  162 => 79,  159 => 78,  157 => 77,  152 => 75,  148 => 73,  146 => 72,  141 => 70,  136 => 68,  130 => 65,  127 => 64,  110 => 63,  103 => 58,  83 => 54,  79 => 53,  73 => 52,  70 => 51,  53 => 50,  49 => 49,  45 => 48,  41 => 46,  39 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@views/pages/trainings-overview-listing-detail/includes/training-type/training-type.twig", "D:\\wamp64\\www\\lec2\\wp-content\\themes\\lec2\\resources\\views\\frontend\\src\\views\\pages\\trainings-overview-listing-detail\\includes\\training-type\\training-type.twig");
    }
}
