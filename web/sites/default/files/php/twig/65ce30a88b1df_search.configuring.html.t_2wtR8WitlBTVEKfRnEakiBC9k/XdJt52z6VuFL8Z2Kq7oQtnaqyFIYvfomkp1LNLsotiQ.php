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

/* @help_topics/search.configuring.html.twig */
class __TwigTemplate_7e64ee59c30ece6411a192896835aec0 extends Template
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
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_ad96c2d8979d8d23860453e7c5eb1520 = $this->extensions["Drupal\\tracer\\Twig\\Extension\\TraceableProfilerExtension"];
        $__internal_ad96c2d8979d8d23860453e7c5eb1520->enter($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@help_topics/search.configuring.html.twig"));

        // line 7
        ob_start();
        echo t("Search pages", array());
        $context["search_settings_link_text"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 8
        $context["search_settings_link"] = $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\help\HelpTwigExtension']->getRouteLink($this->sandbox->ensureToStringAllowed(($context["search_settings_link_text"] ?? null), 8, $this->source), "entity.search_page.collection"));
        // line 9
        $context["search_index_topic"] = $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\help\HelpTwigExtension']->getTopicLink("search.index"));
        // line 10
        echo "<h2>";
        echo t("Goal", array());
        echo "</h2>
<p>";
        // line 11
        echo t("Configure one or more search pages.", array());
        echo "</p>
<h2>";
        // line 12
        echo t("Steps", array());
        echo "</h2>
<ol>
  <li>";
        // line 14
        echo t("In the <em>Manage</em> administrative menu, navigate to <em>Configuration</em> &gt; <em>Search and Metadata</em> &gt; <em>@search_settings_link</em>.", array("@search_settings_link" => ($context["search_settings_link"] ?? null), ));
        echo "</li>
  <li>";
        // line 15
        echo t("Scroll down to the <em>Search pages</em> section. You will see a list of the already-configured search pages on your site.", array());
        echo "</li>
  <li>";
        // line 16
        echo t("To configure an existing search page, click <em>Edit</em>. Or, to add a new search page, select the <em>Search page type</em> and click <em>Add search page</em>.", array());
        echo "</li>
  <li>";
        // line 17
        echo t("Enter the desired <em>Label</em> name and URL <em>Path</em> for the search page.", array());
        echo "</li>
  <li>";
        // line 18
        echo t("For <em>Content</em> search pages, select the desired level of influence in ranking search results of the available <em>Content ranking</em> factors.", array());
        echo "</li>
  <li>";
        // line 19
        echo t("Click <em>Save</em>. You will be returned to the <em>Search pages</em> page.", array());
        echo "</li>
  <li>";
        // line 20
        echo t("Verify that the correct search page is listed as <em>Default</em> in the <em>Status</em> column. If not, click <em>Set as default</em> in the <em>Operations</em> list for the correct search page.", array());
        echo "</li>
  <li>";
        // line 21
        echo t("Optionally, disable or delete any search pages that you do not want to have available on the site (disabling is temporary, while deleting is permanent).", array());
        echo "</li>
  <li>";
        // line 22
        echo t("Follow the steps in @search_index_topic to make sure that the search index is updated.", array("@search_index_topic" => ($context["search_index_topic"] ?? null), ));
        echo "</li>
</ol>";
        
        $__internal_ad96c2d8979d8d23860453e7c5eb1520->leave($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@help_topics/search.configuring.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  96 => 22,  92 => 21,  88 => 20,  84 => 19,  80 => 18,  76 => 17,  72 => 16,  68 => 15,  64 => 14,  59 => 12,  55 => 11,  50 => 10,  48 => 9,  46 => 8,  42 => 7,);
    }

    public function getSourceContext()
    {
        return new Source("{% line 7 %}{% set search_settings_link_text %}{% trans %}Search pages{% endtrans %}{% endset %}
{% set search_settings_link = render_var(help_route_link(search_settings_link_text, 'entity.search_page.collection')) %}
{% set search_index_topic = render_var(help_topic_link('search.index')) %}
<h2>{% trans %}Goal{% endtrans %}</h2>
<p>{% trans %}Configure one or more search pages.{% endtrans %}</p>
<h2>{% trans %}Steps{% endtrans %}</h2>
<ol>
  <li>{% trans %}In the <em>Manage</em> administrative menu, navigate to <em>Configuration</em> &gt; <em>Search and Metadata</em> &gt; <em>{{ search_settings_link }}</em>.{% endtrans %}</li>
  <li>{% trans %}Scroll down to the <em>Search pages</em> section. You will see a list of the already-configured search pages on your site.{% endtrans %}</li>
  <li>{% trans %}To configure an existing search page, click <em>Edit</em>. Or, to add a new search page, select the <em>Search page type</em> and click <em>Add search page</em>.{% endtrans %}</li>
  <li>{% trans %}Enter the desired <em>Label</em> name and URL <em>Path</em> for the search page.{% endtrans %}</li>
  <li>{% trans %}For <em>Content</em> search pages, select the desired level of influence in ranking search results of the available <em>Content ranking</em> factors.{% endtrans %}</li>
  <li>{% trans %}Click <em>Save</em>. You will be returned to the <em>Search pages</em> page.{% endtrans %}</li>
  <li>{% trans %}Verify that the correct search page is listed as <em>Default</em> in the <em>Status</em> column. If not, click <em>Set as default</em> in the <em>Operations</em> list for the correct search page.{% endtrans %}</li>
  <li>{% trans %}Optionally, disable or delete any search pages that you do not want to have available on the site (disabling is temporary, while deleting is permanent).{% endtrans %}</li>
  <li>{% trans %}Follow the steps in {{ search_index_topic }} to make sure that the search index is updated.{% endtrans %}</li>
</ol>", "@help_topics/search.configuring.html.twig", "/var/www/html/web/core/modules/search/help_topics/search.configuring.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 7, "trans" => 7);
        static $filters = array("escape" => 14);
        static $functions = array("render_var" => 8, "help_route_link" => 8, "help_topic_link" => 9);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'trans'],
                ['escape'],
                ['render_var', 'help_route_link', 'help_topic_link']
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
