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

/* @webprofiler/Collector/forms.html.twig */
class __TwigTemplate_8e65ce5f860e1281579debcd62489b32 extends Template
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
        $__internal_ad96c2d8979d8d23860453e7c5eb1520->enter($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@webprofiler/Collector/forms.html.twig"));

        // line 1
        $this->displayBlock('toolbar', $context, $blocks);
        // line 31
        echo "
";
        // line 32
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
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_include($this->env, $context, "@webprofiler/Icon/form.svg"));
        echo "
    <span class=\"sf-toolbar-value\">";
        // line 5
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "getFormsCount", [], "any", false, false, true, 5), 5, $this->source), "html", null, true);
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
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "getForms", [], "any", false, false, true, 9)) == 0)) {
            // line 10
            echo "      <div class=\"sf-toolbar-info-piece\">
        <b>";
            // line 11
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("No forms collected"));
            echo "</b>
      </div>
    ";
        }
        // line 14
        echo "
    ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "getForms", [], "any", false, false, true, 15));
        foreach ($context['_seq'] as $context["key"] => $context["form"]) {
            // line 16
            echo "      <div class=\"sf-toolbar-info-piece\">
        <b>";
            // line 17
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["key"], 17, $this->source), "html", null, true);
            echo "</b>
        <span>
          <a
            href=\"";
            // line 20
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\webprofiler\Twig\Extension\CodeExtension']->getFileLink($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["form"], "class", [], "any", false, false, true, 20), "file", [], "any", false, false, true, 20), 20, $this->source), $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["form"], "class", [], "any", false, false, true, 20), "line", [], "any", false, false, true, 20), 20, $this->source)), "html", null, true);
            echo "\"
            title=\"";
            // line 21
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["form"], "class", [], "any", false, false, true, 21), "class", [], "any", false, false, true, 21), 21, $this->source), "html", null, true);
            echo "\">
            ";
            // line 22
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_striptags($this->extensions['Drupal\webprofiler\Twig\Extension\CodeExtension']->abbrClass($this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["form"], "class", [], "any", false, false, true, 22), "class", [], "any", false, false, true, 22), 22, $this->source), "html", null, true))), "html", null, true);
            echo " :: ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["form"], "class", [], "any", false, false, true, 22), "method", [], "any", false, false, true, 22), 22, $this->source), "html", null, true);
            echo "
          </a>
        </span>
      </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['form'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "  ";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 28
        echo "
  ";
        // line 29
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_include($this->env, $context, "@webprofiler/Profiler/toolbar_item.html.twig", ["link" => ($context["profiler_url"] ?? null)]));
        echo "
";
        
        $__internal_ad96c2d8979d8d23860453e7c5eb1520->leave($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof);

    }

    // line 32
    public function block_panel($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_ad96c2d8979d8d23860453e7c5eb1520 = $this->extensions["Drupal\\tracer\\Twig\\Extension\\TraceableProfilerExtension"];
        $__internal_ad96c2d8979d8d23860453e7c5eb1520->enter($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "panel"));

        // line 33
        echo "  ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "panel", [], "method", false, false, true, 33), 33, $this->source), "html", null, true);
        echo "
";
        
        $__internal_ad96c2d8979d8d23860453e7c5eb1520->leave($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@webprofiler/Collector/forms.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  155 => 33,  148 => 32,  139 => 29,  136 => 28,  133 => 27,  120 => 22,  116 => 21,  112 => 20,  106 => 17,  103 => 16,  99 => 15,  96 => 14,  90 => 11,  87 => 10,  84 => 9,  82 => 8,  79 => 7,  74 => 5,  69 => 4,  67 => 3,  64 => 2,  57 => 1,  49 => 32,  46 => 31,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block toolbar %}

  {% set icon %}
    {{ include('@webprofiler/Icon/form.svg') }}
    <span class=\"sf-toolbar-value\">{{ collector.getFormsCount }}</span>
  {% endset %}

  {% set text %}
    {% if collector.getForms|length == 0 %}
      <div class=\"sf-toolbar-info-piece\">
        <b>{{ 'No forms collected'|t }}</b>
      </div>
    {% endif %}

    {% for key, form in collector.getForms %}
      <div class=\"sf-toolbar-info-piece\">
        <b>{{ key }}</b>
        <span>
          <a
            href=\"{{ form.class.file|file_link(form.class.line) }}\"
            title=\"{{ form.class.class }}\">
            {{ form.class.class|abbr_class|striptags }} :: {{ form.class.method }}
          </a>
        </span>
      </div>
    {% endfor %}
  {% endset %}

  {{ include('@webprofiler/Profiler/toolbar_item.html.twig', { link: profiler_url }) }}
{% endblock %}

{% block panel %}
  {{ collector.panel() }}
{% endblock %}
", "@webprofiler/Collector/forms.html.twig", "/var/www/html/web/modules/contrib/webprofiler/templates/Collector/forms.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("block" => 1, "set" => 3, "if" => 9, "for" => 15);
        static $filters = array("escape" => 5, "length" => 9, "t" => 11, "file_link" => 20, "striptags" => 22, "abbr_class" => 22);
        static $functions = array("include" => 4);

        try {
            $this->sandbox->checkSecurity(
                ['block', 'set', 'if', 'for'],
                ['escape', 'length', 't', 'file_link', 'striptags', 'abbr_class'],
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
