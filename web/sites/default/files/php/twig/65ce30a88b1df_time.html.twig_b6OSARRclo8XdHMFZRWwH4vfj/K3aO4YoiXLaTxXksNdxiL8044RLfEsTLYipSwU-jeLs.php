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

/* @webprofiler/Collector/time.html.twig */
class __TwigTemplate_4a6a8a178784bde94e212db022fb27c3 extends Template
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
        $__internal_ad96c2d8979d8d23860453e7c5eb1520->enter($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@webprofiler/Collector/time.html.twig"));

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
        $context["has_time_events"] = (twig_length_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "events", [], "any", false, false, true, 3), 3, $this->source)) > 0);
        // line 4
        echo "  ";
        $context["total_time"] = ((($context["has_time_events"] ?? null)) ? (twig_sprintf("%.0f", $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "duration", [], "any", false, false, true, 4), 4, $this->source))) : ("n/a"));
        // line 5
        echo "  ";
        $context["initialization_time"] = ((twig_length_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "events", [], "any", false, false, true, 5), 5, $this->source))) ? (twig_sprintf("%.0f", $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "inittime", [], "any", false, false, true, 5), 5, $this->source))) : ("n/a"));
        // line 6
        echo "  ";
        $context["status_color"] = (((($context["has_time_events"] ?? null) && (twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "duration", [], "any", false, false, true, 6) > 1000))) ? ("yellow") : (""));
        // line 7
        echo "
  ";
        // line 8
        ob_start();
        // line 9
        echo "    ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_include($this->env, $context, "@webprofiler/Icon/time.svg"));
        echo "
    <span class=\"sf-toolbar-value\">";
        // line 10
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["total_time"] ?? null), 10, $this->source), "html", null, true);
        echo "</span>
    <span class=\"sf-toolbar-label\">ms</span>
  ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 13
        echo "
  ";
        // line 14
        ob_start();
        // line 15
        echo "    <div class=\"sf-toolbar-info-piece\">
      <b>Total time</b>
      <span>";
        // line 17
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["total_time"] ?? null), 17, $this->source), "html", null, true);
        echo " ms</span>
    </div>
    <div class=\"sf-toolbar-info-piece\">
      <b>Initialization time</b>
      <span>";
        // line 21
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["initialization_time"] ?? null), 21, $this->source), "html", null, true);
        echo " ms</span>
    </div>
  ";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 24
        echo "
  ";
        // line 25
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_include($this->env, $context, "@webprofiler/Profiler/toolbar_item.html.twig", ["link" => false, "status" => ($context["status_color"] ?? null)]));
        echo "
";
        
        $__internal_ad96c2d8979d8d23860453e7c5eb1520->leave($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@webprofiler/Collector/time.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  112 => 25,  109 => 24,  103 => 21,  96 => 17,  92 => 15,  90 => 14,  87 => 13,  81 => 10,  76 => 9,  74 => 8,  71 => 7,  68 => 6,  65 => 5,  62 => 4,  60 => 3,  57 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block toolbar %}

  {% set has_time_events = collector.events|length > 0 %}
  {% set total_time = has_time_events ? '%.0f'|format(collector.duration) : 'n/a' %}
  {% set initialization_time = collector.events|length ? '%.0f'|format(collector.inittime) : 'n/a' %}
  {% set status_color = has_time_events and collector.duration > 1000 ? 'yellow' %}

  {% set icon %}
    {{ include('@webprofiler/Icon/time.svg') }}
    <span class=\"sf-toolbar-value\">{{ total_time }}</span>
    <span class=\"sf-toolbar-label\">ms</span>
  {% endset %}

  {% set text %}
    <div class=\"sf-toolbar-info-piece\">
      <b>Total time</b>
      <span>{{ total_time }} ms</span>
    </div>
    <div class=\"sf-toolbar-info-piece\">
      <b>Initialization time</b>
      <span>{{ initialization_time }} ms</span>
    </div>
  {% endset %}

  {{ include('@webprofiler/Profiler/toolbar_item.html.twig', { link: false, status: status_color }) }}
{% endblock %}
", "@webprofiler/Collector/time.html.twig", "/var/www/html/web/modules/contrib/webprofiler/templates/Collector/time.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("block" => 1, "set" => 3);
        static $filters = array("length" => 3, "format" => 4, "escape" => 10);
        static $functions = array("include" => 9);

        try {
            $this->sandbox->checkSecurity(
                ['block', 'set'],
                ['length', 'format', 'escape'],
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
