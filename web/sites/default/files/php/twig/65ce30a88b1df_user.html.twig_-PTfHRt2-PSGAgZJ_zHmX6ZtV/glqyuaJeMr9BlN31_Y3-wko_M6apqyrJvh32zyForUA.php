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

/* @webprofiler/Collector/user.html.twig */
class __TwigTemplate_4369c730a8d244f6dc2b76623eb0133b extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'toolbar' => [$this, 'block_toolbar'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_ad96c2d8979d8d23860453e7c5eb1520 = $this->extensions["Drupal\\tracer\\Twig\\Extension\\TraceableProfilerExtension"];
        $__internal_ad96c2d8979d8d23860453e7c5eb1520->enter($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@webprofiler/Collector/user.html.twig"));

        // line 1
        $this->displayBlock('toolbar', $context, $blocks);
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["collector"]);        
        $__internal_ad96c2d8979d8d23860453e7c5eb1520->leave($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof);

    }

    public function block_toolbar($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_ad96c2d8979d8d23860453e7c5eb1520 = $this->extensions["Drupal\\tracer\\Twig\\Extension\\TraceableProfilerExtension"];
        $__internal_ad96c2d8979d8d23860453e7c5eb1520->enter($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "toolbar"));

        // line 2
        echo "
  ";
        // line 3
        ob_start();
        // line 4
        echo "    ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_include($this->env, $context, "@webprofiler/Icon/user.svg"));
        echo "
    <span class=\"sf-toolbar-value\">";
        // line 5
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "username", [], "any", false, false, true, 5), 5, $this->source), "html", null, true);
        echo "</span>
  ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 7
        echo "
  ";
        // line 8
        ob_start();
        // line 9
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "authenticated", [], "any", false, false, true, 9)) {
            // line 10
            echo "      <div class=\"sf-toolbar-info-piece\">
        <b>";
            // line 11
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Logged in as"));
            echo "</b>
        <span>";
            // line 12
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "username", [], "any", false, false, true, 12), 12, $this->source), "html", null, true);
            echo "</span>
      </div>
      <div class=\"sf-toolbar-info-piece\">
        <b>Authenticated</b>
        <span class=\"sf-toolbar-status sf-toolbar-status-";
            // line 16
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "authenticated", [], "any", false, false, true, 16)) ? ("green") : ("yellow")));
            echo "\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "authenticated", [], "any", false, false, true, 16)) ? ("Yes") : ("No")));
            echo "</span>
      </div>
      <div class=\"sf-toolbar-info-piece\">
        <b>";
            // line 19
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Roles"));
            echo "</b>
        <span>";
            // line 20
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_join_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "roles", [], "any", false, false, true, 20), 20, $this->source), ", "), "html", null, true);
            echo "</span>
      </div>
      <div class=\"sf-toolbar-info-piece\">
        <b>";
            // line 23
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Authenticated by"));
            echo "</b>
        <span>";
            // line 24
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "provider", [], "any", false, false, true, 24), 24, $this->source), "html", null, true);
            echo "</span>
      </div>
    ";
        } else {
            // line 27
            echo "      <div class=\"sf-toolbar-info-piece\">
        <b>";
            // line 28
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "anonymous", [], "any", false, false, true, 28), 28, $this->source), "html", null, true);
            echo "</b>
      </div>
    ";
        }
        // line 31
        echo "  ";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 32
        echo "
  ";
        // line 33
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_include($this->env, $context, "@webprofiler/Profiler/toolbar_item.html.twig", ["link" => false]));
        echo "
";
        
        $__internal_ad96c2d8979d8d23860453e7c5eb1520->leave($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@webprofiler/Collector/user.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  137 => 33,  134 => 32,  131 => 31,  125 => 28,  122 => 27,  116 => 24,  112 => 23,  106 => 20,  102 => 19,  94 => 16,  87 => 12,  83 => 11,  80 => 10,  77 => 9,  75 => 8,  72 => 7,  67 => 5,  62 => 4,  60 => 3,  57 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block toolbar %}

  {% set icon %}
    {{ include('@webprofiler/Icon/user.svg') }}
    <span class=\"sf-toolbar-value\">{{ collector.username }}</span>
  {% endset %}

  {% set text %}
    {% if collector.authenticated %}
      <div class=\"sf-toolbar-info-piece\">
        <b>{{ 'Logged in as'|t }}</b>
        <span>{{ collector.username }}</span>
      </div>
      <div class=\"sf-toolbar-info-piece\">
        <b>Authenticated</b>
        <span class=\"sf-toolbar-status sf-toolbar-status-{{ collector.authenticated ? 'green' : 'yellow' }}\">{{ collector.authenticated ? 'Yes' : 'No' }}</span>
      </div>
      <div class=\"sf-toolbar-info-piece\">
        <b>{{ 'Roles'|t }}</b>
        <span>{{ collector.roles|join(', ') }}</span>
      </div>
      <div class=\"sf-toolbar-info-piece\">
        <b>{{ 'Authenticated by'|t }}</b>
        <span>{{ collector.provider }}</span>
      </div>
    {% else %}
      <div class=\"sf-toolbar-info-piece\">
        <b>{{ collector.anonymous }}</b>
      </div>
    {% endif %}
  {% endset %}

  {{ include('@webprofiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@webprofiler/Collector/user.html.twig", "/var/www/html/web/modules/contrib/webprofiler/templates/Collector/user.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("block" => 1, "set" => 3, "if" => 9);
        static $filters = array("escape" => 5, "t" => 11, "join" => 20);
        static $functions = array("include" => 4);

        try {
            $this->sandbox->checkSecurity(
                ['block', 'set', 'if'],
                ['escape', 't', 'join'],
                ['include']
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
