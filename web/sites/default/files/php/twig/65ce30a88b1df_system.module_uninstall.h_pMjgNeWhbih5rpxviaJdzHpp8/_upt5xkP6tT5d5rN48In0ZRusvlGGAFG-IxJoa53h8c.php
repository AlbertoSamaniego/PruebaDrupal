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

/* @help_topics/system.module_uninstall.html.twig */
class __TwigTemplate_fec1b5d962c5a039ac4fda83ec362d89 extends Template
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
        $__internal_ad96c2d8979d8d23860453e7c5eb1520->enter($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@help_topics/system.module_uninstall.html.twig"));

        // line 8
        ob_start();
        echo t("Uninstall", array());
        $context["uninstall_link_text"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 9
        $context["uninstall_link"] = $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\help\HelpTwigExtension']->getRouteLink($this->sandbox->ensureToStringAllowed(($context["uninstall_link_text"] ?? null), 9, $this->source), "system.modules_uninstall"));
        // line 10
        $context["maintenance_topic"] = $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\help\HelpTwigExtension']->getTopicLink("system.maintenance_mode"));
        // line 11
        echo "<h2>";
        echo t("Goal", array());
        echo "</h2>
<p>";
        // line 12
        echo t("Uninstall a module. Your site should be in <em>maintenance mode</em> when you uninstall modules. See @maintenance_topic for details.", array("@maintenance_topic" => ($context["maintenance_topic"] ?? null), ));
        echo "</p>
<h2>";
        // line 13
        echo t("Steps", array());
        echo "</h2>
<ol>
  <li>";
        // line 15
        echo t("In the <em>Manage</em> administrative menu, navigate to <em>Extend</em> &gt; <em>@uninstall_link</em>.", array("@uninstall_link" => ($context["uninstall_link"] ?? null), ));
        echo "</li>
  <li>";
        // line 16
        echo t("Enter a word from the module name or description into the filter box, to make the list of modules smaller. Locate the module you want to uninstall.", array());
        echo "</li>
  <li>";
        // line 17
        echo t("In the <em>Description</em> column, see if there are reasons that this module cannot be uninstalled. For example, you may have created content using this module (which you would need to delete first), or there may be another module installed that requires this module to be installed (you would need to uninstall the other module first).", array());
        echo "</li>
  <li>";
        // line 18
        echo t("If there are no reasons listed, the module can be uninstalled. Check the box in the <em>Uninstall</em> column, next to the module's name.", array());
        echo "</li>
  <li>";
        // line 19
        echo t("Click <em>Uninstall</em> at the bottom of the page. Verify the list of modules to be uninstalled and configuration to be deleted on the confirmation page, and click <em>Uninstall</em>.", array());
        echo "</li>
  <li>";
        // line 20
        echo t("Wait for the module to be uninstalled. You should be returned to the <em>Uninstall</em> page with a message saying the module was uninstalled.", array());
        echo "</li>
</ol>";
        
        $__internal_ad96c2d8979d8d23860453e7c5eb1520->leave($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@help_topics/system.module_uninstall.html.twig";
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
        return array (  84 => 20,  80 => 19,  76 => 18,  72 => 17,  68 => 16,  64 => 15,  59 => 13,  55 => 12,  50 => 11,  48 => 10,  46 => 9,  42 => 8,);
    }

    public function getSourceContext()
    {
        return new Source("{% line 8 %}{% set uninstall_link_text %}{% trans %}Uninstall{% endtrans %}{% endset %}
{% set uninstall_link = render_var(help_route_link(uninstall_link_text, 'system.modules_uninstall')) %}
{% set maintenance_topic = render_var(help_topic_link('system.maintenance_mode')) %}
<h2>{% trans %}Goal{% endtrans %}</h2>
<p>{% trans %}Uninstall a module. Your site should be in <em>maintenance mode</em> when you uninstall modules. See {{ maintenance_topic }} for details.{% endtrans %}</p>
<h2>{% trans %}Steps{% endtrans %}</h2>
<ol>
  <li>{% trans %}In the <em>Manage</em> administrative menu, navigate to <em>Extend</em> &gt; <em>{{ uninstall_link }}</em>.{% endtrans %}</li>
  <li>{% trans %}Enter a word from the module name or description into the filter box, to make the list of modules smaller. Locate the module you want to uninstall.{% endtrans %}</li>
  <li>{% trans %}In the <em>Description</em> column, see if there are reasons that this module cannot be uninstalled. For example, you may have created content using this module (which you would need to delete first), or there may be another module installed that requires this module to be installed (you would need to uninstall the other module first).{% endtrans %}</li>
  <li>{% trans %}If there are no reasons listed, the module can be uninstalled. Check the box in the <em>Uninstall</em> column, next to the module's name.{% endtrans %}</li>
  <li>{% trans %}Click <em>Uninstall</em> at the bottom of the page. Verify the list of modules to be uninstalled and configuration to be deleted on the confirmation page, and click <em>Uninstall</em>.{% endtrans %}</li>
  <li>{% trans %}Wait for the module to be uninstalled. You should be returned to the <em>Uninstall</em> page with a message saying the module was uninstalled.{% endtrans %}</li>
</ol>", "@help_topics/system.module_uninstall.html.twig", "/var/www/html/web/core/modules/system/help_topics/system.module_uninstall.html.twig");
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
