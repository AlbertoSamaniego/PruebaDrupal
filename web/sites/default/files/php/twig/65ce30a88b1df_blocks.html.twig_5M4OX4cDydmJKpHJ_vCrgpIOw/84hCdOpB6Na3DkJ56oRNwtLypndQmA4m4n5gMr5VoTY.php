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

/* @webprofiler/Collector/blocks.html.twig */
class __TwigTemplate_ac6eb7c80d052b864566e5411edd9a96 extends Template
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
            'panel' => [$this, 'block_panel'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_ad96c2d8979d8d23860453e7c5eb1520 = $this->extensions["Drupal\\tracer\\Twig\\Extension\\TraceableProfilerExtension"];
        $__internal_ad96c2d8979d8d23860453e7c5eb1520->enter($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@webprofiler/Collector/blocks.html.twig"));

        // line 1
        $this->displayBlock('toolbar', $context, $blocks);
        // line 21
        echo "
";
        // line 22
        $this->displayBlock('panel', $context, $blocks);
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["collector", "profiler_url"]);        
        $__internal_ad96c2d8979d8d23860453e7c5eb1520->leave($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof);

    }

    // line 1
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
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_include($this->env, $context, "@webprofiler/Icon/006--blocks.svg"));
        echo "
    <span class=\"sf-toolbar-value\">";
        // line 5
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "getRenderedBlocksCount", [], "any", false, false, true, 5), 5, $this->source), "html", null, true);
        echo "</span>
  ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 7
        echo "
  ";
        // line 8
        ob_start();
        // line 9
        echo "    <div class=\"sf-toolbar-info-piece\">
      <b>Loaded blocks</b>
      <span class=\"sf-toolbar-status\">";
        // line 11
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "getLoadedBlocksCount", [], "any", false, false, true, 11), 11, $this->source), "html", null, true);
        echo " ";
        if ((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "getLoadedBlocksCount", [], "any", false, false, true, 11) == 0)) {
            echo "(";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Maybe some are cached"));
            echo ")";
        }
        echo "</span>
    </div>
    <div class=\"sf-toolbar-info-piece\">
      <b>Rendered blocks</b>
      <span class=\"sf-toolbar-status\">";
        // line 15
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "getRenderedBlocksCount", [], "any", false, false, true, 15), 15, $this->source), "html", null, true);
        echo " ";
        if ((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "getRenderedBlocksCount", [], "any", false, false, true, 15) == 0)) {
            echo "(";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Maybe some are cached"));
            echo ")";
        }
        echo "</span>
    </div>
  ";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 18
        echo "
  ";
        // line 19
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_include($this->env, $context, "@webprofiler/Profiler/toolbar_item.html.twig", ["link" => ($context["profiler_url"] ?? null)]));
        echo "
";
        
        $__internal_ad96c2d8979d8d23860453e7c5eb1520->leave($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof);

    }

    // line 22
    public function block_panel($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_ad96c2d8979d8d23860453e7c5eb1520 = $this->extensions["Drupal\\tracer\\Twig\\Extension\\TraceableProfilerExtension"];
        $__internal_ad96c2d8979d8d23860453e7c5eb1520->enter($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "panel"));

        // line 23
        echo "  ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "panel", [], "method", false, false, true, 23), 23, $this->source), "html", null, true);
        echo "
";
        
        $__internal_ad96c2d8979d8d23860453e7c5eb1520->leave($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@webprofiler/Collector/blocks.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  132 => 23,  125 => 22,  116 => 19,  113 => 18,  101 => 15,  88 => 11,  84 => 9,  82 => 8,  79 => 7,  74 => 5,  69 => 4,  67 => 3,  64 => 2,  57 => 1,  49 => 22,  46 => 21,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block toolbar %}

  {% set icon %}
    {{ include('@webprofiler/Icon/006--blocks.svg') }}
    <span class=\"sf-toolbar-value\">{{ collector.getRenderedBlocksCount }}</span>
  {% endset %}

  {% set text %}
    <div class=\"sf-toolbar-info-piece\">
      <b>Loaded blocks</b>
      <span class=\"sf-toolbar-status\">{{ collector.getLoadedBlocksCount }} {% if collector.getLoadedBlocksCount == 0 %}({{ 'Maybe some are cached'|t }}){% endif %}</span>
    </div>
    <div class=\"sf-toolbar-info-piece\">
      <b>Rendered blocks</b>
      <span class=\"sf-toolbar-status\">{{ collector.getRenderedBlocksCount }} {% if collector.getRenderedBlocksCount == 0 %}({{ 'Maybe some are cached'|t }}){% endif %}</span>
    </div>
  {% endset %}

  {{ include('@webprofiler/Profiler/toolbar_item.html.twig', { link: profiler_url }) }}
{% endblock %}

{% block panel %}
  {{ collector.panel() }}
{% endblock %}
", "@webprofiler/Collector/blocks.html.twig", "/var/www/html/web/modules/contrib/webprofiler/templates/Collector/blocks.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("block" => 1, "set" => 3, "if" => 11);
        static $filters = array("escape" => 5, "t" => 11);
        static $functions = array("include" => 4);

        try {
            $this->sandbox->checkSecurity(
                ['block', 'set', 'if'],
                ['escape', 't'],
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
