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

/* @help_topics/contact.adding_fields.html.twig */
class __TwigTemplate_a893379012dd492798ca1dbded5b5a14 extends Template
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
        $__internal_ad96c2d8979d8d23860453e7c5eb1520->enter($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@help_topics/contact.adding_fields.html.twig"));

        // line 6
        ob_start();
        echo t("Contact forms", array());
        $context["contact_link_text"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 7
        $context["contact_link"] = $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\help\HelpTwigExtension']->getRouteLink($this->sandbox->ensureToStringAllowed(($context["contact_link_text"] ?? null), 7, $this->source), "entity.contact_form.collection"));
        // line 8
        echo "<h2>";
        echo t("Goal", array());
        echo "</h2>
<p>";
        // line 9
        echo t("Add, remove, or rearrange the fields on personal and site-wide contact forms.", array());
        echo "</p>
<h2>";
        // line 10
        echo t("What are the fields on contact forms?", array());
        echo "</h2>
<p>";
        // line 11
        echo t("Both personal and site-wide contact forms will always have <em>Subject</em> and <em>Message</em> fields. You can add additional fields for users to fill out if desired. Note that if you want to display other content on a form page, such as text or images, you can use a content block.", array());
        echo "</p>
<h2>";
        // line 12
        echo t("Steps", array());
        echo "</h2>
<ol>
  <li>";
        // line 14
        echo t("In the <em>Manage</em> administrative menu, navigate to <em>Structure</em> &gt; <em>@contact_link</em>.", array("@contact_link" => ($context["contact_link"] ?? null), ));
        echo "</li>
  <li>";
        // line 15
        echo t("Click <em>Manage fields</em> for the form you want to change the fields of, and add or remove one or more fields on the form.", array());
        echo "</li>
  <li>";
        // line 16
        echo t("Click <em>Manage form display</em> to change the order or configuration of the fields on the form.", array());
        echo "</li>
</ol>";
        
        $__internal_ad96c2d8979d8d23860453e7c5eb1520->leave($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@help_topics/contact.adding_fields.html.twig";
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
        return array (  78 => 16,  74 => 15,  70 => 14,  65 => 12,  61 => 11,  57 => 10,  53 => 9,  48 => 8,  46 => 7,  42 => 6,);
    }

    public function getSourceContext()
    {
        return new Source("{% line 6 %}{% set contact_link_text %}{% trans %}Contact forms{% endtrans %}{% endset %}
{% set contact_link = render_var(help_route_link(contact_link_text, 'entity.contact_form.collection')) %}
<h2>{% trans %}Goal{% endtrans %}</h2>
<p>{% trans %}Add, remove, or rearrange the fields on personal and site-wide contact forms.{% endtrans %}</p>
<h2>{% trans %}What are the fields on contact forms?{% endtrans %}</h2>
<p>{% trans %}Both personal and site-wide contact forms will always have <em>Subject</em> and <em>Message</em> fields. You can add additional fields for users to fill out if desired. Note that if you want to display other content on a form page, such as text or images, you can use a content block.{% endtrans %}</p>
<h2>{% trans %}Steps{% endtrans %}</h2>
<ol>
  <li>{% trans %}In the <em>Manage</em> administrative menu, navigate to <em>Structure</em> &gt; <em>{{ contact_link }}</em>.{% endtrans %}</li>
  <li>{% trans %}Click <em>Manage fields</em> for the form you want to change the fields of, and add or remove one or more fields on the form.{% endtrans %}</li>
  <li>{% trans %}Click <em>Manage form display</em> to change the order or configuration of the fields on the form.{% endtrans %}</li>
</ol>", "@help_topics/contact.adding_fields.html.twig", "/var/www/html/web/core/modules/contact/help_topics/contact.adding_fields.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 6, "trans" => 6);
        static $filters = array("escape" => 14);
        static $functions = array("render_var" => 7, "help_route_link" => 7);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'trans'],
                ['escape'],
                ['render_var', 'help_route_link']
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
