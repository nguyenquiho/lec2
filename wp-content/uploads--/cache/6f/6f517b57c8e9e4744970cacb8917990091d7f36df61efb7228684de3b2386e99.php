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

/* @views/components/news-feed/news-feed.twig */
class __TwigTemplate_61b59e93652d36c29097068f261b1f0ef10093bb630aaecb4ac86b5b2e27c1ab extends \Twig\Template
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
        echo "<div class=\"news-feed-block hide js-news-feed-block\">
\t<div class=\"container\">
\t\t<h2 class=\"text-center\">";
        // line 3
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "news_feed_title", [], "any", false, false, false, 3), "html", null, true);
        echo "</h2>
\t\t<div class=\"news-feed-list\" >
\t\t\t<div class=\"news-feed-col\" rv-each-post=\"postList.items\">
\t\t\t\t<div class=\"news-feed-item\">
\t\t\t\t\t<div rv-if=\"post.thumbnail | isEmpty\" class=\"news-feed-video\">
\t\t\t\t\t\t<video class=\"rounded-8\" rv-poster=\"post.custom_data.video.thumbnail\" controls>
\t\t\t\t\t\t\t<source rv-src=\"post.custom_data.video.custom_data.video_file.url\" type=\"video/mp4\">
\t\t\t\t\t\t</video>
            <video class=\"rounded-8\" rv-if=\"post.custom_data.video.custom_data.video_file | isEmpty\" rv-poster=\"post.custom_data.video.thumbnail\" controls>
\t\t\t\t\t\t\t<source rv-src=\"post.custom_data.video.custom_data.video_url\" type=\"video/mp4\">
\t\t\t\t\t\t</video>
\t\t\t\t\t</div>
\t\t\t\t\t<div rv-if=\"post.thumbnail | isNotEmpty\" class=\"news-feed-image\">
\t\t\t\t\t\t<img class=\"rounded-8\" rv-src=\"post.thumbnail\" rv-alt=\"post.post_title\"/>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"news-feed-content\">
\t\t\t\t\t\t<h4 class=\"news-feed-title\" rv-text=\"post.post_title\"></h4>
\t\t\t\t\t\t<p class=\"news-feed-description\" rv-text=\"post.custom_data.short_description\"></p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"news-feed-link\">
\t\t\t\t\t\t<a rv-href=\"post.url\">";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["global"] ?? null), "theme_options", [], "any", false, false, false, 23), "text_translation", [], "any", false, false, false, 23), "default_global_settings_text", [], "any", false, false, false, 23), "more", [], "any", false, false, false, 23), "html", null, true);
        echo "
\t\t\t\t\t\t\t<i class=\"icon-chevron-right-solid\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"news-feed-btn text-center\">
\t\t\t<a href=\"";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "news_feed_link", [], "any", false, false, false, 31), "html", null, true);
        echo "\" class=\"btn btn-primary\">
\t\t\t\t";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["global"] ?? null), "theme_options", [], "any", false, false, false, 32), "text_translation", [], "any", false, false, false, 32), "default_global_settings_buttons", [], "any", false, false, false, 32), "read_all_news", [], "any", false, false, false, 32), "html", null, true);
        echo "
      </a>
\t\t</div>
\t</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "@views/components/news-feed/news-feed.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 32,  75 => 31,  64 => 23,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@views/components/news-feed/news-feed.twig", "D:\\wamp64\\www\\lec2\\wp-content\\themes\\lec2\\resources\\views\\frontend\\src\\views\\components\\news-feed\\news-feed.twig");
    }
}
