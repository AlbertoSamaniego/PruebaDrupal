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

/* @help_topics/field_ui.manage_display.html.twig */
class __TwigTemplate_c65d67d39d716ccad729057ca381e6bf extends Template
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
        $__internal_ad96c2d8979d8d23860453e7c5eb1520->enter($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@help_topics/field_ui.manage_display.html.twig"));

        // line 9
        ob_start();
        echo t("Content types", array());
        $context["content_types_link_text"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 10
        $context["content_types_link"] = $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\help\HelpTwigExtension']->getRouteLink($this->sandbox->ensureToStringAllowed(($context["content_types_link_text"] ?? null), 10, $this->source), "entity.node_type.collection"));
        // line 11
        $context["content_structure_topic"] = $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\help\HelpTwigExtension']->getTopicLink("core.content_structure"));
        // line 12
        echo "<h2>";
        echo t("Goal", array());
        echo "</h2>
<p>";
        // line 13
        echo t("Configure the <em>formatters</em> used to display the fields of an entity sub-type, their order in the display, and the formatter settings. See @content_structure_topic for background information.", array("@content_structure_topic" => ($context["content_structure_topic"] ?? null), ));
        echo "</p>
<h2>";
        // line 14
        echo t("Steps", array());
        echo "</h2>
<ol>
  <li>";
        // line 16
        echo t("Navigate to the page for managing the entity type you want to add the field to. For example, to add a field to a content type, in the <em>Manage</em> administrative menu, navigate to <em>Structure</em> &gt; <em>@content_types_link</em>.", array("@content_types_link" => ($context["content_types_link"] ?? null), ));
        echo "</li>
  <li>";
        // line 17
        echo t("Find the particular sub-type that you want to configure the display of, and click <em>Manage display</em> in the <em>Operations</em> list.", array());
        echo "</li>
  <li>";
        // line 18
        echo t("Use the drag arrows to order the fields in your preferred order.", array());
        echo "</li>
  <li>";
        // line 19
        echo t("Drag any fields that you do not wish to see in the display to the <em>Disabled</em> section.", array());
        echo "</li>
  <li>";
        // line 20
        echo t("In the <em>Label</em> column, select the position for each field label in the display, or <em>- Hidden -</em> to hide a label. You can also choose <em>- Visually Hidden-</em> if you want the label's text to appear in the HTML page, so that screen readers and search engines can read it, but it will not be visible.", array());
        echo "</li>
  <li>";
        // line 21
        echo t("In the <em>Format</em> column, select the formatter for displaying each field.", array());
        echo "</li>
  <li>";
        // line 22
        echo t("After selecting the desired formatters, click the settings gear in each row to change the settings for the formatter.", array());
        echo "</li>
  <li>";
        // line 23
        echo t("When you are done making changes, click <em>Save</em>.", array());
        echo "</li>
  <li>";
        // line 24
        echo t("Test the display for your entity sub-type by viewing an entity. If needed, return to these steps to further refine the display.", array());
        echo "</li>
</ol>";
        
        $__internal_ad96c2d8979d8d23860453e7c5eb1520->leave($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@help_topics/field_ui.manage_display.html.twig";
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
        return array (  96 => 24,  92 => 23,  88 => 22,  84 => 21,  80 => 20,  76 => 19,  72 => 18,  68 => 17,  64 => 16,  59 => 14,  55 => 13,  50 => 12,  48 => 11,  46 => 10,  42 => 9,);
    }

    public function getSourceContext()
    {
        return new Source("{% line 9 %}{% set content_types_link_text %}{% trans %}Content types{% endtrans %}{% endset %}
{% set content_types_link = render_var(help_route_link(content_types_link_text, 'entity.node_type.collection')) %}
{% set content_structure_topic = render_var(help_topic_link('core.content_structure')) %}
<h2>{% trans %}Goal{% endtrans %}</h2>
<p>{% trans %}Configure the <em>formatters</em> used to display the fields of an entity sub-type, their order in the display, and the formatter settings. See {{ content_structure_topic }} for background information.{% endtrans %}</p>
<h2>{% trans %}Steps{% endtrans %}</h2>
<ol>
  <li>{% trans %}Navigate to the page for managing the entity type you want to add the field to. For example, to add a field to a content type, in the <em>Manage</em> administrative menu, navigate to <em>Structure</em> &gt; <em>{{ content_types_link }}</em>.{% endtrans %}</li>
  <li>{% trans %}Find the particular sub-type that you want to configure the display of, and click <em>Manage display</em> in the <em>Operations</em> list.{% endtrans %}</li>
  <li>{% trans %}Use the drag arrows to order the fields in your preferred order.{% endtrans %}</li>
  <li>{% trans %}Drag any fields that you do not wish to see in the display to the <em>Disabled</em> section.{% endtrans %}</li>
  <li>{% trans %}In the <em>Label</em> column, select the position for each field label in the display, or <em>- Hidden -</em> to hide a label. You can also choose <em>- Visually Hidden-</em> if you want the label's text to appear in the HTML page, so that screen readers and search engines can read it, but it will not be visible.{% endtrans %}</li>
  <li>{% trans %}In the <em>Format</em> column, select the formatter for displaying each field.{% endtrans %}</li>
  <li>{% trans %}After selecting the desired formatters, click the settings gear in each row to change the settings for the formatter.{% endtrans %}</li>
  <li>{% trans %}When you are done making changes, click <em>Save</em>.{% endtrans %}</li>
  <li>{% trans %}Test the display for your entity sub-type by viewing an entity. If needed, return to these steps to further refine the display.{% endtrans %}</li>
</ol>", "@help_topics/field_ui.manage_display.html.twig", "/var/www/html/web/core/modules/field_ui/help_topics/field_ui.manage_display.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 9, "trans" => 9);
        static $filters = array("escape" => 13);
        static $functions = array("render_var" => 10, "help_route_link" => 10, "help_topic_link" => 11);

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
