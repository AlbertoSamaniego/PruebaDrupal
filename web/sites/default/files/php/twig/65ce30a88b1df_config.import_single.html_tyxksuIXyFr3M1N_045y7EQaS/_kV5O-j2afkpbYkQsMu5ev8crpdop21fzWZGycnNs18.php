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

/* @help_topics/config.import_single.html.twig */
class __TwigTemplate_4a3461fc4c1145c5fb47bca6aa2c06ba extends Template
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
        $__internal_ad96c2d8979d8d23860453e7c5eb1520->enter($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@help_topics/config.import_single.html.twig"));

        // line 9
        ob_start();
        echo t("Single item", array());
        $context["single_import_link_text"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 10
        $context["single_import_link"] = $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\help\HelpTwigExtension']->getRouteLink($this->sandbox->ensureToStringAllowed(($context["single_import_link_text"] ?? null), 10, $this->source), "config.import_single"));
        // line 11
        $context["export_single_topic"] = $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\help\HelpTwigExtension']->getTopicLink("config.export_single"));
        // line 12
        $context["config_overview_topic"] = $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\help\HelpTwigExtension']->getTopicLink("core.config_overview"));
        // line 13
        echo "<h2>";
        echo t("Goal", array());
        echo "</h2>
<p>";
        // line 14
        echo t("Import a single configuration item in YAML format, such as one that was previously exported (see @export_single_topic). See @config_overview_topic for more information about configuration.", array("@export_single_topic" => ($context["export_single_topic"] ?? null), "@config_overview_topic" => ($context["config_overview_topic"] ?? null), ));
        echo "</p>
<h2>";
        // line 15
        echo t("Steps", array());
        echo "</h2>
<ol>
  <li>";
        // line 17
        echo t("In the <em>Manage</em> administrative menu, navigate to <em>Configuration</em> &gt; <em>Development</em> &gt; <em>Configuration synchronization</em> &gt; <em>Import</em> &gt; <em>@single_import_link</em>.", array("@single_import_link" => ($context["single_import_link"] ?? null), ));
        echo "</li>
  <li>";
        // line 18
        echo t("Select the <em>Configuration type</em> that you want to import.", array());
        echo "</li>
  <li>";
        // line 19
        echo t("On your computer or other device, copy the YAML-format configuration that you want to import to the clipboard.", array());
        echo "</li>
  <li>";
        // line 20
        echo t("Paste the clipboard text into the box labeled <em>Paste your configuration here</em>.", array());
        echo "</li>
  <li>";
        // line 21
        echo t("Click <em>Import</em>.", array());
        echo "</li>
</ol>";
        
        $__internal_ad96c2d8979d8d23860453e7c5eb1520->leave($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@help_topics/config.import_single.html.twig";
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
        return array (  82 => 21,  78 => 20,  74 => 19,  70 => 18,  66 => 17,  61 => 15,  57 => 14,  52 => 13,  50 => 12,  48 => 11,  46 => 10,  42 => 9,);
    }

    public function getSourceContext()
    {
        return new Source("{% line 9 %}{% set single_import_link_text %}{% trans %}Single item{% endtrans %}{% endset %}
{% set single_import_link = render_var(help_route_link(single_import_link_text, 'config.import_single')) %}
{% set export_single_topic = render_var(help_topic_link('config.export_single')) %}
{% set config_overview_topic = render_var(help_topic_link('core.config_overview')) %}
<h2>{% trans %}Goal{% endtrans %}</h2>
<p>{% trans %}Import a single configuration item in YAML format, such as one that was previously exported (see {{ export_single_topic }}). See {{ config_overview_topic }} for more information about configuration.{% endtrans %}</p>
<h2>{% trans %}Steps{% endtrans %}</h2>
<ol>
  <li>{% trans %}In the <em>Manage</em> administrative menu, navigate to <em>Configuration</em> &gt; <em>Development</em> &gt; <em>Configuration synchronization</em> &gt; <em>Import</em> &gt; <em>{{ single_import_link }}</em>.{% endtrans %}</li>
  <li>{% trans %}Select the <em>Configuration type</em> that you want to import.{% endtrans %}</li>
  <li>{% trans %}On your computer or other device, copy the YAML-format configuration that you want to import to the clipboard.{% endtrans %}</li>
  <li>{% trans %}Paste the clipboard text into the box labeled <em>Paste your configuration here</em>.{% endtrans %}</li>
  <li>{% trans %}Click <em>Import</em>.{% endtrans %}</li>
</ol>", "@help_topics/config.import_single.html.twig", "/var/www/html/web/core/modules/config/help_topics/config.import_single.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 9, "trans" => 9);
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
