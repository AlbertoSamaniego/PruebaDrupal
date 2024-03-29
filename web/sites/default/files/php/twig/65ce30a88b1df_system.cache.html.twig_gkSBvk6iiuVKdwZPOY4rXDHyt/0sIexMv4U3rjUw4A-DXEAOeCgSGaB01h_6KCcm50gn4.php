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

/* @help_topics/system.cache.html.twig */
class __TwigTemplate_cfa71c0994f5207ef89a152192d26dad extends Template
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
        $__internal_ad96c2d8979d8d23860453e7c5eb1520->enter($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@help_topics/system.cache.html.twig"));

        // line 6
        ob_start();
        echo t("Performance", array());
        $context["performance_link_text"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 7
        $context["performance_link"] = $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\help\HelpTwigExtension']->getRouteLink($this->sandbox->ensureToStringAllowed(($context["performance_link_text"] ?? null), 7, $this->source), "system.performance_settings"));
        // line 8
        echo "<h2>";
        echo t("Goal", array());
        echo "</h2>
<p>";
        // line 9
        echo t("Clear the data in the site cache.", array());
        echo "</p>
<h2>";
        // line 10
        echo t("What is the cache?", array());
        echo "</h2>
<p>";
        // line 11
        echo t("Some of the calculations that are done when your site loads a page take a long time to run. To save time when these calculations would need to be done again, their results can be <em>cached</em> in your site's database. There are internal mechanisms to <em>clear</em> cached data when the conditions or assumptions that went into the calculation have changed, but you can also clear cached data manually. When your site is misbehaving, a good first step is to clear the cache and see if the problem goes away.", array());
        echo "</p>
<h2>";
        // line 12
        echo t("Steps", array());
        echo "</h2>
<ol>
  <li>";
        // line 14
        echo t("In the <em>Manage</em> administrative menu, navigate to <em>Configuration</em> &gt; <em>Development</em> &gt; <em>@performance_link</em>.", array("@performance_link" => ($context["performance_link"] ?? null), ));
        echo "</li>
  <li>";
        // line 15
        echo t("Click <em>Clear all caches</em>. Your site's cached data will be cleared.", array());
        echo "</li>
</ol>
<h2>";
        // line 17
        echo t("Additional resources", array());
        echo "</h2>
<ul>
    <li>";
        // line 19
        echo t("<a href=\"https://www.drupal.org/docs/user_guide/en/prevent-cache.html\">Concept: Cache (Drupal User Guide)</a>", array());
        echo "</li>
</ul>";
        
        $__internal_ad96c2d8979d8d23860453e7c5eb1520->leave($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@help_topics/system.cache.html.twig";
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
        return array (  84 => 19,  79 => 17,  74 => 15,  70 => 14,  65 => 12,  61 => 11,  57 => 10,  53 => 9,  48 => 8,  46 => 7,  42 => 6,);
    }

    public function getSourceContext()
    {
        return new Source("{% line 6 %}{% set performance_link_text %}{% trans %}Performance{% endtrans %}{% endset %}
{% set performance_link = render_var(help_route_link(performance_link_text, 'system.performance_settings')) %}
<h2>{% trans %}Goal{% endtrans %}</h2>
<p>{% trans %}Clear the data in the site cache.{% endtrans %}</p>
<h2>{% trans %}What is the cache?{% endtrans %}</h2>
<p>{% trans %}Some of the calculations that are done when your site loads a page take a long time to run. To save time when these calculations would need to be done again, their results can be <em>cached</em> in your site's database. There are internal mechanisms to <em>clear</em> cached data when the conditions or assumptions that went into the calculation have changed, but you can also clear cached data manually. When your site is misbehaving, a good first step is to clear the cache and see if the problem goes away.{% endtrans %}</p>
<h2>{% trans %}Steps{% endtrans %}</h2>
<ol>
  <li>{% trans %}In the <em>Manage</em> administrative menu, navigate to <em>Configuration</em> &gt; <em>Development</em> &gt; <em>{{ performance_link }}</em>.{% endtrans %}</li>
  <li>{% trans %}Click <em>Clear all caches</em>. Your site's cached data will be cleared.{% endtrans %}</li>
</ol>
<h2>{% trans %}Additional resources{% endtrans %}</h2>
<ul>
    <li>{% trans %}<a href=\"https://www.drupal.org/docs/user_guide/en/prevent-cache.html\">Concept: Cache (Drupal User Guide)</a>{% endtrans %}</li>
</ul>", "@help_topics/system.cache.html.twig", "/var/www/html/web/core/modules/system/help_topics/system.cache.html.twig");
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
