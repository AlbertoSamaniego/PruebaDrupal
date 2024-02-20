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

/* themes/contrib/seven/templates/classy/misc/status-messages.html.twig */
class __TwigTemplate_fa4dc02e975424836bade8ba3546a8e0 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'messages' => [$this, 'block_messages'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_ad96c2d8979d8d23860453e7c5eb1520 = $this->extensions["Drupal\\tracer\\Twig\\Extension\\TraceableProfilerExtension"];
        $__internal_ad96c2d8979d8d23860453e7c5eb1520->enter($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "themes/contrib/seven/templates/classy/misc/status-messages.html.twig"));

        // line 22
        echo "<div data-drupal-messages>
";
        // line 23
        $this->displayBlock('messages', $context, $blocks);
        // line 55
        echo "</div>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["message_list", "status_headings", "attributes"]);        
        $__internal_ad96c2d8979d8d23860453e7c5eb1520->leave($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof);

    }

    // line 23
    public function block_messages($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_ad96c2d8979d8d23860453e7c5eb1520 = $this->extensions["Drupal\\tracer\\Twig\\Extension\\TraceableProfilerExtension"];
        $__internal_ad96c2d8979d8d23860453e7c5eb1520->enter($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "messages"));

        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["message_list"] ?? null));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 25
            echo "  ";
            // line 26
            $context["classes"] = ["messages", ("messages--" . $this->sandbox->ensureToStringAllowed(            // line 28
$context["type"], 28, $this->source))];
            // line 31
            echo "  <div role=\"contentinfo\" aria-label=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_0 = ($context["status_headings"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[$context["type"]] ?? null) : null), 31, $this->source), "html", null, true);
            echo "\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["classes"] ?? null)], "method", false, false, true, 31), 31, $this->source), "role", "aria-label"), "html", null, true);
            echo ">
    ";
            // line 32
            if (($context["type"] == "error")) {
                // line 33
                echo "      <div role=\"alert\">
    ";
            }
            // line 35
            echo "      ";
            if ((($__internal_compile_1 = ($context["status_headings"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[$context["type"]] ?? null) : null)) {
                // line 36
                echo "        <h2 class=\"visually-hidden\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_2 = ($context["status_headings"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[$context["type"]] ?? null) : null), 36, $this->source), "html", null, true);
                echo "</h2>
      ";
            }
            // line 38
            echo "      ";
            if ((twig_length_filter($this->env, $context["messages"]) > 1)) {
                // line 39
                echo "        <ul class=\"messages__list\">
          ";
                // line 40
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["messages"]);
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 41
                    echo "            <li class=\"messages__item\">";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["message"], 41, $this->source), "html", null, true);
                    echo "</li>
          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 43
                echo "        </ul>
      ";
            } else {
                // line 45
                echo "        ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_first($this->env, $this->sandbox->ensureToStringAllowed($context["messages"], 45, $this->source)), "html", null, true);
                echo "
      ";
            }
            // line 47
            echo "    ";
            if (($context["type"] == "error")) {
                // line 48
                echo "      </div>
    ";
            }
            // line 50
            echo "  </div>
  ";
            // line 52
            echo "  ";
            $context["attributes"] = twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "removeClass", [($context["classes"] ?? null)], "method", false, false, true, 52);
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_ad96c2d8979d8d23860453e7c5eb1520->leave($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "themes/contrib/seven/templates/classy/misc/status-messages.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  134 => 52,  131 => 50,  127 => 48,  124 => 47,  118 => 45,  114 => 43,  105 => 41,  101 => 40,  98 => 39,  95 => 38,  89 => 36,  86 => 35,  82 => 33,  80 => 32,  73 => 31,  71 => 28,  70 => 26,  68 => 25,  64 => 24,  57 => 23,  48 => 55,  46 => 23,  43 => 22,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Theme override for status messages.
 *
 * Displays status, error, and warning messages, grouped by type.
 *
 * An invisible heading identifies the messages for assistive technology.
 * Sighted users see a colored box. See http://www.w3.org/TR/WCAG-TECHS/H69.html
 * for info.
 *
 * Add an ARIA label to the contentinfo area so that assistive technology
 * user agents will better describe this landmark.
 *
 * Available variables:
 * - message_list: List of messages to be displayed, grouped by type.
 * - status_headings: List of all status types.
 * - attributes: HTML attributes for the element, including:
 *   - class: HTML classes.
 */
#}
<div data-drupal-messages>
{% block messages %}
{% for type, messages in message_list %}
  {%
    set classes = [
      'messages',
      'messages--' ~ type,
    ]
  %}
  <div role=\"contentinfo\" aria-label=\"{{ status_headings[type] }}\"{{ attributes.addClass(classes)|without('role', 'aria-label') }}>
    {% if type == 'error' %}
      <div role=\"alert\">
    {% endif %}
      {% if status_headings[type] %}
        <h2 class=\"visually-hidden\">{{ status_headings[type] }}</h2>
      {% endif %}
      {% if messages|length > 1 %}
        <ul class=\"messages__list\">
          {% for message in messages %}
            <li class=\"messages__item\">{{ message }}</li>
          {% endfor %}
        </ul>
      {% else %}
        {{ messages|first }}
      {% endif %}
    {% if type == 'error' %}
      </div>
    {% endif %}
  </div>
  {# Remove type specific classes. #}
  {% set attributes = attributes.removeClass(classes) %}
{% endfor %}
{% endblock messages %}
</div>
", "themes/contrib/seven/templates/classy/misc/status-messages.html.twig", "/var/www/html/web/themes/contrib/seven/templates/classy/misc/status-messages.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("block" => 23, "for" => 24, "set" => 26, "if" => 32);
        static $filters = array("escape" => 31, "without" => 31, "length" => 38, "first" => 45);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['block', 'for', 'set', 'if'],
                ['escape', 'without', 'length', 'first'],
                []
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
