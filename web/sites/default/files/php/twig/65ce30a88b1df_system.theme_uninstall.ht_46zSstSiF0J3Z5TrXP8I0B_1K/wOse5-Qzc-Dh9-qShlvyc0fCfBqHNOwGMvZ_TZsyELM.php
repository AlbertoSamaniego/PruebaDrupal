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

/* @help_topics/system.theme_uninstall.html.twig */
class __TwigTemplate_c4123c602072bfb4e19fc23952ce0615 extends Template
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
        $__internal_ad96c2d8979d8d23860453e7c5eb1520->enter($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@help_topics/system.theme_uninstall.html.twig"));

        // line 7
        ob_start();
        echo t("Appearance", array());
        $context["themes_link_text"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 8
        $context["themes_link"] = $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\help\HelpTwigExtension']->getRouteLink($this->sandbox->ensureToStringAllowed(($context["themes_link_text"] ?? null), 8, $this->source), "system.themes_page"));
        // line 9
        echo "<h2>";
        echo t("Goal", array());
        echo "</h2>
<p>";
        // line 10
        echo t("Uninstall a theme that was previously installed, but is no longer being used on the site.", array());
        echo "</p>
<h2>";
        // line 11
        echo t("Steps", array());
        echo "</h2>
<ol>
  <li>";
        // line 13
        echo t("In the <em>Manage</em> administrative menu, navigate to <em>@themes_link</em>.", array("@themes_link" => ($context["themes_link"] ?? null), ));
        echo "</li>
  <li>";
        // line 14
        echo t("Locate the theme that you want to uninstall, in the <em>Installed themes</em> section.", array());
        echo "</li>
  <li>";
        // line 15
        echo t("Click the <em>Uninstall</em> link to uninstall the theme. If there is not an <em>Uninstall</em> link, the theme cannot be uninstalled because it is either being used as the site default theme, being used as the <em>Administration theme</em>, or is the base theme for another installed theme.", array());
        echo "</li>
</ol>";
        
        $__internal_ad96c2d8979d8d23860453e7c5eb1520->leave($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@help_topics/system.theme_uninstall.html.twig";
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
        return array (  70 => 15,  66 => 14,  62 => 13,  57 => 11,  53 => 10,  48 => 9,  46 => 8,  42 => 7,);
    }

    public function getSourceContext()
    {
        return new Source("{% line 7 %}{% set themes_link_text %}{% trans %}Appearance{% endtrans %}{% endset %}
{% set themes_link = render_var(help_route_link(themes_link_text, 'system.themes_page')) %}
<h2>{% trans %}Goal{% endtrans %}</h2>
<p>{% trans %}Uninstall a theme that was previously installed, but is no longer being used on the site.{% endtrans %}</p>
<h2>{% trans %}Steps{% endtrans %}</h2>
<ol>
  <li>{% trans %}In the <em>Manage</em> administrative menu, navigate to <em>{{ themes_link }}</em>.{% endtrans %}</li>
  <li>{% trans %}Locate the theme that you want to uninstall, in the <em>Installed themes</em> section.{% endtrans %}</li>
  <li>{% trans %}Click the <em>Uninstall</em> link to uninstall the theme. If there is not an <em>Uninstall</em> link, the theme cannot be uninstalled because it is either being used as the site default theme, being used as the <em>Administration theme</em>, or is the base theme for another installed theme.{% endtrans %}</li>
</ol>", "@help_topics/system.theme_uninstall.html.twig", "/var/www/html/web/core/modules/system/help_topics/system.theme_uninstall.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 7, "trans" => 7);
        static $filters = array("escape" => 13);
        static $functions = array("render_var" => 8, "help_route_link" => 8);

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
