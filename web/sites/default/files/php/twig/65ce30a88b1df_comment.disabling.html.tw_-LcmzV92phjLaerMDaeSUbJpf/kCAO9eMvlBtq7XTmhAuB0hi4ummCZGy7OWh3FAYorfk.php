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

/* @help_topics/comment.disabling.html.twig */
class __TwigTemplate_dd9c92e5734f434b7284a3af887cede4 extends Template
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
        $__internal_ad96c2d8979d8d23860453e7c5eb1520->enter($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@help_topics/comment.disabling.html.twig"));

        // line 7
        ob_start();
        // line 8
        echo t("Administer comments and comment settings", array());
        $context["comment_permissions_text"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 10
        $context["comment_permissions_link"] = $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\help\HelpTwigExtension']->getRouteLink($this->sandbox->ensureToStringAllowed(($context["comment_permissions_text"] ?? null), 10, $this->source), "user.admin_permissions.module", ["modules" => "comment"]));
        // line 11
        $context["comment_config_topic"] = $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\help\HelpTwigExtension']->getTopicLink("comment.configuring"));
        // line 12
        $context["content_structure_topic"] = $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\help\HelpTwigExtension']->getTopicLink("core.content_structure"));
        // line 13
        echo "<h2>";
        echo t("Goal", array());
        echo "</h2>
<p>";
        // line 14
        echo t("Turn off commenting for a particular entity (see @content_structure_topic for more about content entities and fields). Note that if you want to turn off commenting for all entities of an entity type or subtype, you will need to edit the field settings for the comment field; see @comment_config_topic for more about configuring the comment field.", array("@content_structure_topic" => ($context["content_structure_topic"] ?? null), "@comment_config_topic" => ($context["comment_config_topic"] ?? null), ));
        echo "</p>
<h2>";
        // line 15
        echo t("Who can disable comments?", array());
        echo "</h2>
<p>";
        // line 16
        echo t("You will need the <em>@comment_permissions_link</em> permission in order to disable commenting. You will also need permission to edit the entity that the comments are on.", array("@comment_permissions_link" => ($context["comment_permissions_link"] ?? null), ));
        echo "</p>
<h2>";
        // line 17
        echo t("Steps", array());
        echo "</h2>
<ol>
  <li>";
        // line 19
        echo t("Find the entity you want to disable comments for, and edit it. For example, to turn off comments on a content item, you could find it by navigating in the <em>Manage</em> administrative menu to <em>Content</em>, filtering to find the content item, and clicking <em>Edit</em>.", array());
        echo "</li>
  <li>";
        // line 20
        echo t("Under <em>Comment settings</em>, select the desired comment setting:", array());
        // line 21
        echo "    <ul>
      <li>";
        // line 22
        echo t("<em>Open</em>: comments are allowed.", array());
        echo "</li>
      <li>";
        // line 23
        echo t("<em>Closed</em>: past comments remain visible, but no new comments are allowed.", array());
        echo "</li>
      <li>";
        // line 24
        echo t("<em>Hidden</em>: past comments are hidden, and no new comments are allowed.", array());
        echo "</li>
    </ul>
  </li>
  <li>";
        // line 27
        echo t("Save the entity.", array());
        echo "</li>
</ol>";
        
        $__internal_ad96c2d8979d8d23860453e7c5eb1520->leave($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@help_topics/comment.disabling.html.twig";
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
        return array (  98 => 27,  92 => 24,  88 => 23,  84 => 22,  81 => 21,  79 => 20,  75 => 19,  70 => 17,  66 => 16,  62 => 15,  58 => 14,  53 => 13,  51 => 12,  49 => 11,  47 => 10,  44 => 8,  42 => 7,);
    }

    public function getSourceContext()
    {
        return new Source("{% line 7 %}{% set comment_permissions_text %}
{% trans %}Administer comments and comment settings{% endtrans %}
{% endset %}
{% set comment_permissions_link = render_var(help_route_link(comment_permissions_text, 'user.admin_permissions.module', {'modules': 'comment'})) %}
{% set comment_config_topic = render_var(help_topic_link('comment.configuring')) %}
{% set content_structure_topic = render_var(help_topic_link('core.content_structure')) %}
<h2>{% trans %}Goal{% endtrans %}</h2>
<p>{% trans %}Turn off commenting for a particular entity (see {{ content_structure_topic }} for more about content entities and fields). Note that if you want to turn off commenting for all entities of an entity type or subtype, you will need to edit the field settings for the comment field; see {{ comment_config_topic }} for more about configuring the comment field.{% endtrans %}</p>
<h2>{% trans %}Who can disable comments?{% endtrans %}</h2>
<p>{% trans %}You will need the <em>{{ comment_permissions_link }}</em> permission in order to disable commenting. You will also need permission to edit the entity that the comments are on.{% endtrans %}</p>
<h2>{% trans %}Steps{% endtrans %}</h2>
<ol>
  <li>{% trans %}Find the entity you want to disable comments for, and edit it. For example, to turn off comments on a content item, you could find it by navigating in the <em>Manage</em> administrative menu to <em>Content</em>, filtering to find the content item, and clicking <em>Edit</em>.{% endtrans %}</li>
  <li>{% trans %}Under <em>Comment settings</em>, select the desired comment setting:{% endtrans %}
    <ul>
      <li>{% trans %}<em>Open</em>: comments are allowed.{% endtrans %}</li>
      <li>{% trans %}<em>Closed</em>: past comments remain visible, but no new comments are allowed.{% endtrans %}</li>
      <li>{% trans %}<em>Hidden</em>: past comments are hidden, and no new comments are allowed.{% endtrans %}</li>
    </ul>
  </li>
  <li>{% trans %}Save the entity.{% endtrans %}</li>
</ol>", "@help_topics/comment.disabling.html.twig", "/var/www/html/web/core/modules/comment/help_topics/comment.disabling.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 7, "trans" => 8);
        static $filters = array("escape" => 14);
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
