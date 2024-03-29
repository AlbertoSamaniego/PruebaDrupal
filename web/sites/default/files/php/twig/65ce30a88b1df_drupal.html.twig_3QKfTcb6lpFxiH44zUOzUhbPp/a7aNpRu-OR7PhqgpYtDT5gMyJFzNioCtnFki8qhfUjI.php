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

/* @webprofiler/Collector/drupal.html.twig */
class __TwigTemplate_a326366f4b3e8fbefe03c747562f25b2 extends Template
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
        $__internal_ad96c2d8979d8d23860453e7c5eb1520->enter($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@webprofiler/Collector/drupal.html.twig"));

        // line 1
        $this->displayBlock('toolbar', $context, $blocks);
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["collector", "profiler_url", "block_status"]);        
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
        echo "    <span class=\"sf-toolbar-label\">
      ";
        // line 5
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_include($this->env, $context, "@webprofiler/Icon/drupal-10.svg"));
        echo "
    </span>
    <span class=\"sf-toolbar-value\">";
        // line 7
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "drupalVersion", [], "any", false, false, true, 7), 7, $this->source), "html", null, true);
        echo "</span>
  ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 9
        echo "
  ";
        // line 10
        ob_start();
        // line 11
        echo "    <div class=\"sf-toolbar-info-group\">
      <div class=\"sf-toolbar-info-piece\">
        <b>Profiler token</b>
        <span>
          ";
        // line 15
        if (($context["profiler_url"] ?? null)) {
            // line 16
            echo "            <a href=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["profiler_url"] ?? null), 16, $this->source), "html", null, true);
            echo "\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "token", [], "any", false, false, true, 16), 16, $this->source), "html", null, true);
            echo "</a>
          ";
        } else {
            // line 18
            echo "            ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "token", [], "any", false, false, true, 18), 18, $this->source), "html", null, true);
            echo "
          ";
        }
        // line 20
        echo "        </span>
      </div>

      ";
        // line 23
        if (twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "traceId", [], "any", false, false, true, 23)) {
            // line 24
            echo "        <div class=\"sf-toolbar-info-piece\">
          <b>Trace Id</b>
          <span>
            ";
            // line 27
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "traceId", [], "any", false, false, true, 27), 27, $this->source), "html", null, true);
            echo "
          </span>
        </div>
      ";
        }
        // line 31
        echo "    </div>

    <div class=\"sf-toolbar-info-group\">
      <div class=\"sf-toolbar-info-piece sf-toolbar-info-php\">
        <b>PHP version</b>
        <span";
        // line 36
        if (twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "phpversionextra", [], "any", false, false, true, 36)) {
            echo " title=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "phpversion", [], "any", false, false, true, 36), 36, $this->source) . $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "phpversionextra", [], "any", false, false, true, 36), 36, $this->source)), "html", null, true);
            echo "\"";
        }
        echo ">
          ";
        // line 37
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "phpversion", [], "any", false, false, true, 37), 37, $this->source), "html", null, true);
        echo "
          &nbsp; <a href=\"";
        // line 38
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getPath("system.php"));
        echo "\">View phpinfo()</a>
        </span>
      </div>

      <div class=\"sf-toolbar-info-piece sf-toolbar-info-php-ext\">
        <b>PHP Extensions</b>
        <span
          class=\"sf-toolbar-status sf-toolbar-status-";
        // line 45
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "hasxdebug", [], "any", false, false, true, 45)) ? ("green") : ("gray")));
        echo "\">xdebug ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "hasxdebug", [], "any", false, false, true, 45)) ? ("✓") : ("✗")));
        echo "</span>
        <span
          class=\"sf-toolbar-status sf-toolbar-status-";
        // line 47
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "hasapcu", [], "any", false, false, true, 47)) ? ("green") : ("gray")));
        echo "\">APCu ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "hasapcu", [], "any", false, false, true, 47)) ? ("✓") : ("✗")));
        echo "</span>
        <span
          class=\"sf-toolbar-status sf-toolbar-status-";
        // line 49
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "haszendopcache", [], "any", false, false, true, 49)) ? ("green") : ("red")));
        echo "\">OPcache ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "haszendopcache", [], "any", false, false, true, 49)) ? ("✓") : ("✗")));
        echo "</span>
      </div>

      <div class=\"sf-toolbar-info-piece\">
        <b>PHP SAPI</b>
        <span>";
        // line 54
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "sapiName", [], "any", false, false, true, 54), 54, $this->source), "html", null, true);
        echo "</span>
      </div>
    </div>

    <div class=\"sf-toolbar-info-group\">
      <div class=\"sf-toolbar-info-piece\">
        <b>Drupal version</b>
        <span>";
        // line 61
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "drupalVersion", [], "any", false, false, true, 61), 61, $this->source), "html", null, true);
        echo "</span>
      </div>
      <div class=\"sf-toolbar-info-piece\">
        <b>Drupal profile</b>
        <span>";
        // line 65
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "drupalProfile", [], "any", false, false, true, 65), 65, $this->source), "html", null, true);
        echo "</span>
      </div>
      ";
        // line 67
        if (twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "getGitCommit", [], "any", false, false, true, 67)) {
            // line 68
            echo "        <div class=\"sf-toolbar-info-piece\">
          <b>Git commit</b>
          <span><abbr title=\"";
            // line 70
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "getGitCommit", [], "any", false, false, true, 70), 70, $this->source), "html", null, true);
            echo "\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "getAbbrGitCommit", [], "any", false, false, true, 70), 70, $this->source), "html", null, true);
            echo "</abbr></span>
        </div>
      ";
        }
        // line 73
        echo "    </div>

    <div class=\"sf-toolbar-info-group\">
      <div class=\"sf-toolbar-info-piece\">
        <b>Webprofiler</b>
        <span>
          <a href=\"";
        // line 79
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "getWebprofilerConfigUrl", [], "any", false, false, true, 79), 79, $this->source), "html", null, true);
        echo "\" title=\"Configure Webprofiler\">
            Configure
          </a>
        </span>
      </div>
      <div class=\"sf-toolbar-info-piece\">
        <b>Resources</b>
        <span>
          <a href=\"https://www.drupal.org/documentation\" rel=\"help\">
            Read Drupal Docs
          </a>
        </span>
      </div>
      <div class=\"sf-toolbar-info-piece\">
        <b>Help</b>
        <span>
          <a href=\"https://www.drupal.org/contribute\">Get involved!</a>
        </span>
      </div>
    </div>
  ";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 100
        echo "
  ";
        // line 101
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_include($this->env, $context, "@webprofiler/Profiler/toolbar_item.html.twig", ["link" => true, "name" => "config", "status" => ($context["block_status"] ?? null), "additional_classes" => "sf-toolbar-block-right"]));
        echo "
";
        
        $__internal_ad96c2d8979d8d23860453e7c5eb1520->leave($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@webprofiler/Collector/drupal.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  245 => 101,  242 => 100,  218 => 79,  210 => 73,  202 => 70,  198 => 68,  196 => 67,  191 => 65,  184 => 61,  174 => 54,  164 => 49,  157 => 47,  150 => 45,  140 => 38,  136 => 37,  128 => 36,  121 => 31,  114 => 27,  109 => 24,  107 => 23,  102 => 20,  96 => 18,  88 => 16,  86 => 15,  80 => 11,  78 => 10,  75 => 9,  70 => 7,  65 => 5,  62 => 4,  60 => 3,  57 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block toolbar %}

  {% set icon %}
    <span class=\"sf-toolbar-label\">
      {{ include('@webprofiler/Icon/drupal-10.svg') }}
    </span>
    <span class=\"sf-toolbar-value\">{{ collector.drupalVersion }}</span>
  {% endset %}

  {% set text %}
    <div class=\"sf-toolbar-info-group\">
      <div class=\"sf-toolbar-info-piece\">
        <b>Profiler token</b>
        <span>
          {% if profiler_url %}
            <a href=\"{{ profiler_url }}\">{{ collector.token }}</a>
          {% else %}
            {{ collector.token }}
          {% endif %}
        </span>
      </div>

      {% if collector.traceId %}
        <div class=\"sf-toolbar-info-piece\">
          <b>Trace Id</b>
          <span>
            {{ collector.traceId }}
          </span>
        </div>
      {% endif %}
    </div>

    <div class=\"sf-toolbar-info-group\">
      <div class=\"sf-toolbar-info-piece sf-toolbar-info-php\">
        <b>PHP version</b>
        <span{% if collector.phpversionextra %} title=\"{{ collector.phpversion ~ collector.phpversionextra }}\"{% endif %}>
          {{ collector.phpversion }}
          &nbsp; <a href=\"{{ path('system.php') }}\">View phpinfo()</a>
        </span>
      </div>

      <div class=\"sf-toolbar-info-piece sf-toolbar-info-php-ext\">
        <b>PHP Extensions</b>
        <span
          class=\"sf-toolbar-status sf-toolbar-status-{{ collector.hasxdebug ? 'green' : 'gray' }}\">xdebug {{ collector.hasxdebug ? '✓' : '✗' }}</span>
        <span
          class=\"sf-toolbar-status sf-toolbar-status-{{ collector.hasapcu ? 'green' : 'gray' }}\">APCu {{ collector.hasapcu ? '✓' : '✗' }}</span>
        <span
          class=\"sf-toolbar-status sf-toolbar-status-{{ collector.haszendopcache ? 'green' : 'red' }}\">OPcache {{ collector.haszendopcache ? '✓' : '✗' }}</span>
      </div>

      <div class=\"sf-toolbar-info-piece\">
        <b>PHP SAPI</b>
        <span>{{ collector.sapiName }}</span>
      </div>
    </div>

    <div class=\"sf-toolbar-info-group\">
      <div class=\"sf-toolbar-info-piece\">
        <b>Drupal version</b>
        <span>{{ collector.drupalVersion }}</span>
      </div>
      <div class=\"sf-toolbar-info-piece\">
        <b>Drupal profile</b>
        <span>{{ collector.drupalProfile }}</span>
      </div>
      {% if collector.getGitCommit %}
        <div class=\"sf-toolbar-info-piece\">
          <b>Git commit</b>
          <span><abbr title=\"{{ collector.getGitCommit }}\">{{ collector.getAbbrGitCommit }}</abbr></span>
        </div>
      {% endif %}
    </div>

    <div class=\"sf-toolbar-info-group\">
      <div class=\"sf-toolbar-info-piece\">
        <b>Webprofiler</b>
        <span>
          <a href=\"{{ collector.getWebprofilerConfigUrl }}\" title=\"Configure Webprofiler\">
            Configure
          </a>
        </span>
      </div>
      <div class=\"sf-toolbar-info-piece\">
        <b>Resources</b>
        <span>
          <a href=\"https://www.drupal.org/documentation\" rel=\"help\">
            Read Drupal Docs
          </a>
        </span>
      </div>
      <div class=\"sf-toolbar-info-piece\">
        <b>Help</b>
        <span>
          <a href=\"https://www.drupal.org/contribute\">Get involved!</a>
        </span>
      </div>
    </div>
  {% endset %}

  {{ include('@webprofiler/Profiler/toolbar_item.html.twig', { link: true, name: 'config', status: block_status, additional_classes: 'sf-toolbar-block-right' }) }}
{% endblock %}
", "@webprofiler/Collector/drupal.html.twig", "/var/www/html/web/modules/contrib/webprofiler/templates/Collector/drupal.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("block" => 1, "set" => 3, "if" => 15);
        static $filters = array("escape" => 7);
        static $functions = array("include" => 5, "path" => 38);

        try {
            $this->sandbox->checkSecurity(
                ['block', 'set', 'if'],
                ['escape'],
                ['include', 'path']
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
