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

/* @help_topics/locale.translation_status.html.twig */
class __TwigTemplate_774f9438dfca1d314a11aaa71ca560a7 extends Template
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
        $__internal_ad96c2d8979d8d23860453e7c5eb1520->enter($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@help_topics/locale.translation_status.html.twig"));

        // line 8
        ob_start();
        echo t("Languages", array());
        $context["language_text"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 9
        ob_start();
        echo t("Available translation updates", array());
        $context["translation_updates_text"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 10
        $context["language_link"] = $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\help\HelpTwigExtension']->getRouteLink($this->sandbox->ensureToStringAllowed(($context["language_text"] ?? null), 10, $this->source), "entity.configurable_language.collection"));
        // line 11
        $context["translation_updates_link"] = $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\help\HelpTwigExtension']->getRouteLink($this->sandbox->ensureToStringAllowed(($context["translation_updates_text"] ?? null), 11, $this->source), "locale.translate_status"));
        // line 12
        echo "<h2>";
        echo t("Goal", array());
        echo "</h2>
<p>";
        // line 13
        echo t("Check the current status of interface translations, and see if there are any updates available.", array());
        echo "</p>
<h2>";
        // line 14
        echo t("Steps", array());
        echo "</h2>
<ol>
  <li>";
        // line 16
        echo t("In the <em>Manage</em> administrative menu, navigate to <em>Configuration</em> &gt; <em>Region and language</em> &gt; @language_link.", array("@language_link" => ($context["language_link"] ?? null), ));
        echo "</li>
  <li>";
        // line 17
        echo t("Look at the <em>Interface translation</em> column in the language table, to find the percentage of user interface text that has been translated for each language.", array());
        echo "</li>
  <li>";
        // line 18
        echo t("In the <em>Manage</em> administrative menu, navigate to <em>Reports</em> &gt; <em>@translation_updates_link</em>. This report is only available if the core Update Status module is installed.", array("@translation_updates_link" => ($context["translation_updates_link"] ?? null), ));
        echo "</li>
  <li>";
        // line 19
        echo t("Optionally, click <em>Check manually</em> to update the report.", array());
        echo "</li>
  <li>";
        // line 20
        echo t("View the report to find out if any languages have translation updates that you can download.", array());
        echo "</li>
</ol>";
        
        $__internal_ad96c2d8979d8d23860453e7c5eb1520->leave($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@help_topics/locale.translation_status.html.twig";
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
        return array (  84 => 20,  80 => 19,  76 => 18,  72 => 17,  68 => 16,  63 => 14,  59 => 13,  54 => 12,  52 => 11,  50 => 10,  46 => 9,  42 => 8,);
    }

    public function getSourceContext()
    {
        return new Source("{% line 8 %}{% set language_text %}{% trans %}Languages{% endtrans %}{% endset %}
{% set translation_updates_text %}{% trans %}Available translation updates{% endtrans %}{% endset %}
{% set language_link = render_var(help_route_link(language_text, 'entity.configurable_language.collection')) %}
{% set translation_updates_link = render_var(help_route_link(translation_updates_text, 'locale.translate_status')) %}
<h2>{% trans %}Goal{% endtrans %}</h2>
<p>{% trans %}Check the current status of interface translations, and see if there are any updates available.{% endtrans %}</p>
<h2>{% trans %}Steps{% endtrans %}</h2>
<ol>
  <li>{% trans %}In the <em>Manage</em> administrative menu, navigate to <em>Configuration</em> &gt; <em>Region and language</em> &gt; {{ language_link }}.{% endtrans %}</li>
  <li>{% trans %}Look at the <em>Interface translation</em> column in the language table, to find the percentage of user interface text that has been translated for each language.{% endtrans %}</li>
  <li>{% trans %}In the <em>Manage</em> administrative menu, navigate to <em>Reports</em> &gt; <em>{{ translation_updates_link }}</em>. This report is only available if the core Update Status module is installed.{% endtrans %}</li>
  <li>{% trans %}Optionally, click <em>Check manually</em> to update the report.{% endtrans %}</li>
  <li>{% trans %}View the report to find out if any languages have translation updates that you can download.{% endtrans %}</li>
</ol>", "@help_topics/locale.translation_status.html.twig", "/var/www/html/web/core/modules/locale/help_topics/locale.translation_status.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 8, "trans" => 8);
        static $filters = array("escape" => 16);
        static $functions = array("render_var" => 10, "help_route_link" => 10);

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
