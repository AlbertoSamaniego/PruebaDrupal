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

/* @help_topics/field_ui.add_field.html.twig */
class __TwigTemplate_5acec52ec880db5d366e4235879019ee extends Template
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
        $__internal_ad96c2d8979d8d23860453e7c5eb1520->enter($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@help_topics/field_ui.add_field.html.twig"));

        // line 8
        ob_start();
        echo t("Content types", array());
        $context["content_types_link_text"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 9
        $context["content_types_link"] = $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\help\HelpTwigExtension']->getRouteLink($this->sandbox->ensureToStringAllowed(($context["content_types_link_text"] ?? null), 9, $this->source), "entity.node_type.collection"));
        // line 10
        $context["content_structure_topic"] = $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\help\HelpTwigExtension']->getTopicLink("core.content_structure"));
        // line 11
        echo "<h2>";
        echo t("Goal", array());
        echo "</h2>
<p>";
        // line 12
        echo t("Add a field to an entity sub-type; see @content_structure_topic for an overview of entity types and sub-types, as well as an overview of field types.", array("@content_structure_topic" => ($context["content_structure_topic"] ?? null), ));
        echo "</p>
<h2>";
        // line 13
        echo t("Steps", array());
        echo "</h2>
<ol>
  <li>";
        // line 15
        echo t("Navigate to the page for managing the entity sub-type you want to add the field to. For example, to add a field to a content type, in the <em>Manage</em> administrative menu, navigate to <em>Structure</em> &gt; <em>@content_types_link</em>.", array("@content_types_link" => ($context["content_types_link"] ?? null), ));
        echo "</li>
  <li>";
        // line 16
        echo t("Find the particular sub-type that you want to add the field to, and click <em>Manage fields</em>.", array());
        echo "</li>
  <li>";
        // line 17
        echo t("Click <em>Add field</em>.", array());
        echo "</li>
  <li>";
        // line 18
        echo t("In <em>Add a new field</em>, select the type of field you want to add; see @content_structure_topic for an overview of field types.", array("@content_structure_topic" => ($context["content_structure_topic"] ?? null), ));
        echo "</li>
  <li>";
        // line 19
        echo t("The <em>Label</em> field should now be visible; enter a label for the field, which is used as the field label for both content editing and content display.", array());
        echo "</li>
  <li>";
        // line 20
        echo t("Click <em>Save and continue</em>.", array());
        echo "</li>
  <li>";
        // line 21
        echo t("On the next screen, enter a value for <em>Allowed number of values</em>. You can limit the field to one value per entity item, a set number of values, or set it to have unlimited values. Click <em>Save field settings</em>.", array());
        echo "</li>
  <li>";
        // line 22
        echo t("On the next screen, optionally edit the settings for the field, which vary depending on what field type you are creating. For all fields, you can edit the <em>Label</em>, <em>Help text</em> (text to be displayed below the field on the content editing page), and <em>Required field</em> (to make it so a value must be entered in order to save the content when editing). You can also configure a default value for the field.", array());
        echo "</li>
  <li>";
        // line 23
        echo t("Click <em>Save settings</em>. You should be returned to the <em>Manage fields</em> page, with your new field in the list.", array());
        echo "</li>
</ol>";
        
        $__internal_ad96c2d8979d8d23860453e7c5eb1520->leave($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@help_topics/field_ui.add_field.html.twig";
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
        return array (  96 => 23,  92 => 22,  88 => 21,  84 => 20,  80 => 19,  76 => 18,  72 => 17,  68 => 16,  64 => 15,  59 => 13,  55 => 12,  50 => 11,  48 => 10,  46 => 9,  42 => 8,);
    }

    public function getSourceContext()
    {
        return new Source("{% line 8 %}{% set content_types_link_text %}{% trans %}Content types{% endtrans %}{% endset %}
{% set content_types_link = render_var(help_route_link(content_types_link_text, 'entity.node_type.collection')) %}
{% set content_structure_topic = render_var(help_topic_link('core.content_structure')) %}
<h2>{% trans %}Goal{% endtrans %}</h2>
<p>{% trans %}Add a field to an entity sub-type; see {{ content_structure_topic }} for an overview of entity types and sub-types, as well as an overview of field types.{% endtrans %}</p>
<h2>{% trans %}Steps{% endtrans %}</h2>
<ol>
  <li>{% trans %}Navigate to the page for managing the entity sub-type you want to add the field to. For example, to add a field to a content type, in the <em>Manage</em> administrative menu, navigate to <em>Structure</em> &gt; <em>{{ content_types_link }}</em>.{% endtrans %}</li>
  <li>{% trans %}Find the particular sub-type that you want to add the field to, and click <em>Manage fields</em>.{% endtrans %}</li>
  <li>{% trans %}Click <em>Add field</em>.{% endtrans %}</li>
  <li>{% trans %}In <em>Add a new field</em>, select the type of field you want to add; see {{ content_structure_topic }} for an overview of field types.{% endtrans %}</li>
  <li>{% trans %}The <em>Label</em> field should now be visible; enter a label for the field, which is used as the field label for both content editing and content display.{% endtrans %}</li>
  <li>{% trans %}Click <em>Save and continue</em>.{% endtrans %}</li>
  <li>{% trans %}On the next screen, enter a value for <em>Allowed number of values</em>. You can limit the field to one value per entity item, a set number of values, or set it to have unlimited values. Click <em>Save field settings</em>.{% endtrans %}</li>
  <li>{% trans %}On the next screen, optionally edit the settings for the field, which vary depending on what field type you are creating. For all fields, you can edit the <em>Label</em>, <em>Help text</em> (text to be displayed below the field on the content editing page), and <em>Required field</em> (to make it so a value must be entered in order to save the content when editing). You can also configure a default value for the field.{% endtrans %}</li>
  <li>{% trans %}Click <em>Save settings</em>. You should be returned to the <em>Manage fields</em> page, with your new field in the list.{% endtrans %}</li>
</ol>", "@help_topics/field_ui.add_field.html.twig", "/var/www/html/web/core/modules/field_ui/help_topics/field_ui.add_field.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 8, "trans" => 8);
        static $filters = array("escape" => 12);
        static $functions = array("render_var" => 9, "help_route_link" => 9, "help_topic_link" => 10);

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
