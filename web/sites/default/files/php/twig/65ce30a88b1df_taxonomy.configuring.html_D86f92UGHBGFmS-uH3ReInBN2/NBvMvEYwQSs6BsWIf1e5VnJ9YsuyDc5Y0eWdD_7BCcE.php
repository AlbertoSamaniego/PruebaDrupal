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

/* @help_topics/taxonomy.configuring.html.twig */
class __TwigTemplate_c5ae86947370a3923bf13ed8dc9343ac extends Template
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
        $__internal_ad96c2d8979d8d23860453e7c5eb1520->enter($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@help_topics/taxonomy.configuring.html.twig"));

        // line 9
        ob_start();
        // line 10
        echo "  ";
        echo t("Administer vocabularies and terms", array());
        $context["taxonomy_permissions_link_text"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 12
        $context["taxonomy_permissions_link"] = $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\help\HelpTwigExtension']->getRouteLink($this->sandbox->ensureToStringAllowed(($context["taxonomy_permissions_link_text"] ?? null), 12, $this->source), "user.admin_permissions.module", ["modules" => "taxonomy"]));
        // line 13
        ob_start();
        // line 14
        echo "  ";
        echo t("Taxonomy", array());
        $context["taxonomy_admin_link_text"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 16
        $context["taxonomy_admin_link"] = $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\help\HelpTwigExtension']->getRouteLink($this->sandbox->ensureToStringAllowed(($context["taxonomy_admin_link_text"] ?? null), 16, $this->source), "entity.taxonomy_vocabulary.collection"));
        // line 17
        $context["taxonomy_overview_topic"] = $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\help\HelpTwigExtension']->getTopicLink("taxonomy.overview"));
        // line 18
        $context["content_structure_topic"] = $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\help\HelpTwigExtension']->getTopicLink("core.content_structure"));
        // line 19
        echo "<h2>";
        echo t("Goal", array());
        echo "</h2>
<p>";
        // line 20
        echo t("Create a taxonomy vocabulary and add a reference field for that vocabulary to a content entity. See @taxonomy_overview_topic for information about taxonomy and @content_structure_topic for more on content entities.", array("@taxonomy_overview_topic" => ($context["taxonomy_overview_topic"] ?? null), "@content_structure_topic" => ($context["content_structure_topic"] ?? null), ));
        echo "</p>
<h2>";
        // line 21
        echo t("Who can configure a taxonomy vocabulary?", array());
        echo "</h2>
<p>";
        // line 22
        echo t("Users with the <em>@taxonomy_permissions_link</em> permission can configure a vocabulary. To add a field in the administrative interface, the core Field UI module must be installed, and you will also need the <em>Administer fields</em> permission for the entity you are adding the field to.", array("@taxonomy_permissions_link" => ($context["taxonomy_permissions_link"] ?? null), ));
        echo "</p>
<h2>";
        // line 23
        echo t("Steps", array());
        echo "</h2>
<ol>
  <li>";
        // line 25
        echo t("In the <em>Manage</em> administrative menu, navigate to <em>Structure</em> &gt; <em>@taxonomy_admin_link</em>.", array("@taxonomy_admin_link" => ($context["taxonomy_admin_link"] ?? null), ));
        echo "</li>
  <li>";
        // line 26
        echo t("Click <em>Add vocabulary</em>.", array());
        echo "</li>
  <li>";
        // line 27
        echo t("In the <em>Name</em> field, enter a name for the vocabulary (for example \"Ingredients\"), which is how it will be shown in the administrative interface. Optionally, add a description.", array());
        echo "</li>
  <li>";
        // line 28
        echo t("Click <em>Save</em>. Your vocabulary will be created and you will see the page that lists all the terms in this vocabulary.", array());
        echo "</li>
  <li>";
        // line 29
        echo t("Optionally, click <em>Add term</em> to add a term to the new vocabulary. In the <em>Name</em> field, enter the term name (for example \"Butter\"). Click <em>Save</em>. You will receive a confirmation about the term you created. You may optionally continue to add more terms.", array());
        echo "</li>
  <li>";
        // line 30
        echo t("If you have the Field UI module installed, follow the instructions on the related <em>Adding a reference field to an entity sub-type</em> topic to add a taxonomy reference field to the entity type of your choice. The settings page will allow you to choose the <em>Vocabulary</em> that you created as the vocabulary to reference.", array());
        echo "</li>
  <li>";
        // line 31
        echo t("You may also want to configure the display and form display of the new field (see related topics).", array());
        echo "</li>
</ol>
<h2>";
        // line 33
        echo t("Additional resources", array());
        echo "</h2>
<ul>
  <li><a href=\"https://www.drupal.org/docs/user_guide/en/structure-taxonomy-setup.html\">";
        // line 35
        echo t("Setting Up a Taxonomy (Drupal User Guide)", array());
        echo "</a></li>
</ul>";
        
        $__internal_ad96c2d8979d8d23860453e7c5eb1520->leave($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@help_topics/taxonomy.configuring.html.twig";
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
        return array (  118 => 35,  113 => 33,  108 => 31,  104 => 30,  100 => 29,  96 => 28,  92 => 27,  88 => 26,  84 => 25,  79 => 23,  75 => 22,  71 => 21,  67 => 20,  62 => 19,  60 => 18,  58 => 17,  56 => 16,  52 => 14,  50 => 13,  48 => 12,  44 => 10,  42 => 9,);
    }

    public function getSourceContext()
    {
        return new Source("{% line 9 %}{% set taxonomy_permissions_link_text %}
  {% trans %}Administer vocabularies and terms{% endtrans %}
{% endset %}
{% set taxonomy_permissions_link = render_var(help_route_link(taxonomy_permissions_link_text, 'user.admin_permissions.module', {'modules': 'taxonomy'})) %}
{% set taxonomy_admin_link_text %}
  {% trans %}Taxonomy{% endtrans %}
{% endset %}
{% set taxonomy_admin_link = render_var(help_route_link(taxonomy_admin_link_text, 'entity.taxonomy_vocabulary.collection')) %}
{% set taxonomy_overview_topic = render_var(help_topic_link('taxonomy.overview')) %}
{% set content_structure_topic = render_var(help_topic_link('core.content_structure')) %}
<h2>{% trans %}Goal{% endtrans %}</h2>
<p>{% trans %}Create a taxonomy vocabulary and add a reference field for that vocabulary to a content entity. See {{ taxonomy_overview_topic }} for information about taxonomy and {{ content_structure_topic }} for more on content entities.{% endtrans %}</p>
<h2>{% trans %}Who can configure a taxonomy vocabulary?{% endtrans %}</h2>
<p>{% trans %}Users with the <em>{{ taxonomy_permissions_link }}</em> permission can configure a vocabulary. To add a field in the administrative interface, the core Field UI module must be installed, and you will also need the <em>Administer fields</em> permission for the entity you are adding the field to.{% endtrans %}</p>
<h2>{% trans %}Steps{% endtrans %}</h2>
<ol>
  <li>{% trans %}In the <em>Manage</em> administrative menu, navigate to <em>Structure</em> &gt; <em>{{ taxonomy_admin_link }}</em>.{% endtrans %}</li>
  <li>{% trans %}Click <em>Add vocabulary</em>.{% endtrans %}</li>
  <li>{% trans %}In the <em>Name</em> field, enter a name for the vocabulary (for example \"Ingredients\"), which is how it will be shown in the administrative interface. Optionally, add a description.{% endtrans %}</li>
  <li>{% trans %}Click <em>Save</em>. Your vocabulary will be created and you will see the page that lists all the terms in this vocabulary.{% endtrans %}</li>
  <li>{% trans %}Optionally, click <em>Add term</em> to add a term to the new vocabulary. In the <em>Name</em> field, enter the term name (for example \"Butter\"). Click <em>Save</em>. You will receive a confirmation about the term you created. You may optionally continue to add more terms.{% endtrans %}</li>
  <li>{% trans %}If you have the Field UI module installed, follow the instructions on the related <em>Adding a reference field to an entity sub-type</em> topic to add a taxonomy reference field to the entity type of your choice. The settings page will allow you to choose the <em>Vocabulary</em> that you created as the vocabulary to reference.{% endtrans %}</li>
  <li>{% trans %}You may also want to configure the display and form display of the new field (see related topics).{% endtrans %}</li>
</ol>
<h2>{% trans %}Additional resources{% endtrans %}</h2>
<ul>
  <li><a href=\"https://www.drupal.org/docs/user_guide/en/structure-taxonomy-setup.html\">{% trans %}Setting Up a Taxonomy (Drupal User Guide){% endtrans %}</a></li>
</ul>", "@help_topics/taxonomy.configuring.html.twig", "/var/www/html/web/core/modules/taxonomy/help_topics/taxonomy.configuring.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 9, "trans" => 10);
        static $filters = array("escape" => 20);
        static $functions = array("render_var" => 12, "help_route_link" => 12, "help_topic_link" => 17);

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
