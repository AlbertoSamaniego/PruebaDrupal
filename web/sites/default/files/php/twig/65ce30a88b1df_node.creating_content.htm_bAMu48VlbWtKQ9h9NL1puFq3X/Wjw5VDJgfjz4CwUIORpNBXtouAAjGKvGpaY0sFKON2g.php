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

/* @help_topics/node.creating_content.html.twig */
class __TwigTemplate_561f0ceee09f35ee53dd74ae101a6eff extends Template
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
        $__internal_ad96c2d8979d8d23860453e7c5eb1520->enter($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@help_topics/node.creating_content.html.twig"));

        // line 8
        ob_start();
        // line 9
        echo "  ";
        echo t("Content", array());
        $context["content_link_text"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 11
        $context["content_link"] = $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\help\HelpTwigExtension']->getRouteLink($this->sandbox->ensureToStringAllowed(($context["content_link_text"] ?? null), 11, $this->source), "system.admin_content"));
        // line 12
        ob_start();
        // line 13
        echo "  ";
        echo t("Access the Content overview page", array());
        $context["content_permissions_link_text"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 15
        $context["content_permissions_link"] = $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\help\HelpTwigExtension']->getRouteLink($this->sandbox->ensureToStringAllowed(($context["content_permissions_link_text"] ?? null), 15, $this->source), "user.admin_permissions.module", ["modules" => "node"]));
        // line 16
        $context["content_overview_topic"] = $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\help\HelpTwigExtension']->getTopicLink("node.overview"));
        // line 17
        echo "<h2>";
        echo t("Goal", array());
        echo "</h2>
<p>";
        // line 18
        echo t("Create and publish a content item. See @content_overview_topic for more about content types and content items.", array("@content_overview_topic" => ($context["content_overview_topic"] ?? null), ));
        echo "</p>
<h2>";
        // line 19
        echo t("Who can create content?", array());
        echo "</h2>
<p>";
        // line 20
        echo t("Users with the <em>@content_permissions_link</em> permission can visit the <em>Content</em> page as described in this topic. Each content type has its own create permissions. For example, to create content of type Article, a user would need the Article: Create new content permission. In addition, users with the <em>Bypass content access control</em> or <em>Administer content</em> permission can create content items of all types. Some contributed modules change the permission structure for creating content.", array("@content_permissions_link" => ($context["content_permissions_link"] ?? null), ));
        echo "</p>
<h2>";
        // line 21
        echo t("Steps", array());
        echo "</h2>
<ol>
  <li>";
        // line 23
        echo t("In the <em>Manage</em> administrative menu, navigate to <em>@content_link</em>.", array("@content_link" => ($context["content_link"] ?? null), ));
        echo "</li>
  <li>";
        // line 24
        echo t("Click <em>Add content</em>.", array());
        echo "</li>
  <li>";
        // line 25
        echo t("If there is more than one content type defined on your site that you have permission to create, click the name of the type of content you want to create.", array());
        echo "</li>
  <li>";
        // line 26
        echo t("On the content edit form, enter the <em>Title</em> of your content, which will show as the page title when the content item is displayed on a page, and also as the label for the content item in administration screens.", array());
        echo "</li>
  <li>";
        // line 27
        echo t("Fill in the other fields shown on the edit form for this specific content type.", array());
        echo "</li>
  <li>";
        // line 28
        echo t("Leave the <em>Published</em> field checked to publish the content immediately, or uncheck it to make it unpublished. Unpublished content is generally not shown to non-administrative site users.", array());
        echo "</li>
  <li>";
        // line 29
        echo t("Optionally, click <em>Preview</em> to preview the content.", array());
        echo "</li>
  <li>";
        // line 30
        echo t("Click <em>Save</em>. You will see the content displayed on a page.", array());
        echo "</li>
</ol>
<h2>";
        // line 32
        echo t("Additional resources", array());
        echo "</h2>
<ul>
  <li><a href=\"https://www.drupal.org/docs/user_guide/en/content-chapter.html\">";
        // line 34
        echo t("Basic Page Management (Drupal User Guide)", array());
        echo "</a></li>
  <li><a href=\"https://www.drupal.org/docs/user_guide/en/content-create.html\">";
        // line 35
        echo t("Creating a Content Item (Drupal User Guide)", array());
        echo "</a></li>
</ul>";
        
        $__internal_ad96c2d8979d8d23860453e7c5eb1520->leave($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@help_topics/node.creating_content.html.twig";
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
        return array (  124 => 35,  120 => 34,  115 => 32,  110 => 30,  106 => 29,  102 => 28,  98 => 27,  94 => 26,  90 => 25,  86 => 24,  82 => 23,  77 => 21,  73 => 20,  69 => 19,  65 => 18,  60 => 17,  58 => 16,  56 => 15,  52 => 13,  50 => 12,  48 => 11,  44 => 9,  42 => 8,);
    }

    public function getSourceContext()
    {
        return new Source("{% line 8 %}{% set content_link_text %}
  {% trans %}Content{% endtrans %}
{% endset %}
{% set content_link = render_var(help_route_link(content_link_text, 'system.admin_content')) %}
{% set content_permissions_link_text %}
  {% trans %}Access the Content overview page{% endtrans %}
{% endset %}
{% set content_permissions_link = render_var(help_route_link(content_permissions_link_text, 'user.admin_permissions.module', {'modules': 'node'})) %}
{% set content_overview_topic = render_var(help_topic_link('node.overview')) %}
<h2>{% trans %}Goal{% endtrans %}</h2>
<p>{% trans %}Create and publish a content item. See {{ content_overview_topic }} for more about content types and content items.{% endtrans %}</p>
<h2>{% trans %}Who can create content?{% endtrans %}</h2>
<p>{% trans %}Users with the <em>{{ content_permissions_link }}</em> permission can visit the <em>Content</em> page as described in this topic. Each content type has its own create permissions. For example, to create content of type Article, a user would need the Article: Create new content permission. In addition, users with the <em>Bypass content access control</em> or <em>Administer content</em> permission can create content items of all types. Some contributed modules change the permission structure for creating content.{% endtrans %}</p>
<h2>{% trans %}Steps{% endtrans %}</h2>
<ol>
  <li>{% trans %}In the <em>Manage</em> administrative menu, navigate to <em>{{ content_link }}</em>.{% endtrans %}</li>
  <li>{% trans %}Click <em>Add content</em>.{% endtrans %}</li>
  <li>{% trans %}If there is more than one content type defined on your site that you have permission to create, click the name of the type of content you want to create.{% endtrans %}</li>
  <li>{% trans %}On the content edit form, enter the <em>Title</em> of your content, which will show as the page title when the content item is displayed on a page, and also as the label for the content item in administration screens.{% endtrans %}</li>
  <li>{% trans %}Fill in the other fields shown on the edit form for this specific content type.{% endtrans %}</li>
  <li>{% trans %}Leave the <em>Published</em> field checked to publish the content immediately, or uncheck it to make it unpublished. Unpublished content is generally not shown to non-administrative site users.{% endtrans %}</li>
  <li>{% trans %}Optionally, click <em>Preview</em> to preview the content.{% endtrans %}</li>
  <li>{% trans %}Click <em>Save</em>. You will see the content displayed on a page.{% endtrans %}</li>
</ol>
<h2>{% trans %}Additional resources{% endtrans %}</h2>
<ul>
  <li><a href=\"https://www.drupal.org/docs/user_guide/en/content-chapter.html\">{% trans %}Basic Page Management (Drupal User Guide){% endtrans %}</a></li>
  <li><a href=\"https://www.drupal.org/docs/user_guide/en/content-create.html\">{% trans %}Creating a Content Item (Drupal User Guide){% endtrans %}</a></li>
</ul>", "@help_topics/node.creating_content.html.twig", "/var/www/html/web/core/modules/node/help_topics/node.creating_content.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 8, "trans" => 9);
        static $filters = array("escape" => 18);
        static $functions = array("render_var" => 11, "help_route_link" => 11, "help_topic_link" => 16);

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
