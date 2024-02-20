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

/* themes/contrib/zurb_foundation/templates/status-messages.html.twig */
class __TwigTemplate_37ad539b12ba149207e8f0946b4e6762 extends Template
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
        $__internal_ad96c2d8979d8d23860453e7c5eb1520->enter($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "themes/contrib/zurb_foundation/templates/status-messages.html.twig"));

        // line 24
        if (($context["zurb_foundation_status_in_reveal"] ?? null)) {
            // line 25
            echo "  <div id=\"status-messages\" data-reveal class=\"reveal\" role=\"dialog\" data-animation-in=\"fade-in\" data-animation-out=\"fade-out\">
";
        }
        // line 27
        echo "
  <div data-drupal-messages>
  ";
        // line 29
        $this->displayBlock('messages', $context, $blocks);
        // line 75
        echo "  </div>

";
        // line 77
        if (($context["zurb_foundation_status_in_reveal"] ?? null)) {
            // line 78
            echo "  <button class=\"close-button\" aria-label=\"Dismiss alert\" type=\"button\" data-close>
    <span aria-hidden=\"true\">&times;</span>
  </button>
</div>
";
        }
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["zurb_foundation_status_in_reveal", "message_list", "zurb_status_class_mapping", "status_headings", "attributes"]);        
        $__internal_ad96c2d8979d8d23860453e7c5eb1520->leave($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof);

    }

    // line 29
    public function block_messages($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_ad96c2d8979d8d23860453e7c5eb1520 = $this->extensions["Drupal\\tracer\\Twig\\Extension\\TraceableProfilerExtension"];
        $__internal_ad96c2d8979d8d23860453e7c5eb1520->enter($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "messages"));

        // line 30
        echo "  ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["message_list"] ?? null));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 31
            echo "    ";
            // line 32
            $context["classes"] = ["zurb-foundation-callout", "callout", "messages", ("messages--" . $this->sandbox->ensureToStringAllowed(            // line 36
$context["type"], 36, $this->source)), (((($__internal_compile_0 =             // line 37
($context["zurb_status_class_mapping"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[$context["type"]] ?? null) : null)) ? ((($__internal_compile_1 = ($context["zurb_status_class_mapping"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[$context["type"]] ?? null) : null)) : (""))];
            // line 40
            echo "    <div role=\"contentinfo\" aria-label=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_2 = ($context["status_headings"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[$context["type"]] ?? null) : null), 40, $this->source), "html", null, true);
            echo "\" data-closable=\"fade-out\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["classes"] ?? null)], "method", false, false, true, 40), 40, $this->source), "role", "aria-label", "data-closable"), "html", null, true);
            echo ">

      ";
            // line 42
            if ( !($context["zurb_foundation_status_in_reveal"] ?? null)) {
                // line 43
                echo "        <button class=\"close-button\" aria-label=\"Dismiss alert\" type=\"button\" data-close>
          <span aria-hidden=\"true\">&times;</span>
        </button>
      ";
            }
            // line 47
            echo "
      ";
            // line 48
            if (($context["type"] == "error")) {
                // line 49
                echo "        <div role=\"alert\">
      ";
            }
            // line 51
            echo "
        ";
            // line 52
            if ((($__internal_compile_3 = ($context["status_headings"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3[$context["type"]] ?? null) : null)) {
                // line 53
                echo "          <h2 class=\"show-for-sr\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_4 = ($context["status_headings"] ?? null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4[$context["type"]] ?? null) : null), 53, $this->source), "html", null, true);
                echo "</h2>
        ";
            }
            // line 55
            echo "
        ";
            // line 56
            if ((twig_length_filter($this->env, $context["messages"]) > 1)) {
                // line 57
                echo "          <ul class=\"messages__list\">
            ";
                // line 58
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["messages"]);
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 59
                    echo "              <li class=\"messages__item\">";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["message"], 59, $this->source), "html", null, true);
                    echo "</li>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 61
                echo "          </ul>
        ";
            } else {
                // line 63
                echo "          ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_first($this->env, $this->sandbox->ensureToStringAllowed($context["messages"], 63, $this->source)), "html", null, true);
                echo "
        ";
            }
            // line 65
            echo "
      ";
            // line 66
            if (($context["type"] == "error")) {
                // line 67
                echo "        </div>
      ";
            }
            // line 69
            echo "    </div>

    ";
            // line 72
            echo "    ";
            $context["attributes"] = twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "removeClass", [($context["classes"] ?? null)], "method", false, false, true, 72);
            // line 73
            echo "  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 74
        echo "  ";
        
        $__internal_ad96c2d8979d8d23860453e7c5eb1520->leave($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "themes/contrib/zurb_foundation/templates/status-messages.html.twig";
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
        return array (  181 => 74,  175 => 73,  172 => 72,  168 => 69,  164 => 67,  162 => 66,  159 => 65,  153 => 63,  149 => 61,  140 => 59,  136 => 58,  133 => 57,  131 => 56,  128 => 55,  122 => 53,  120 => 52,  117 => 51,  113 => 49,  111 => 48,  108 => 47,  102 => 43,  100 => 42,  92 => 40,  90 => 37,  89 => 36,  88 => 32,  86 => 31,  81 => 30,  74 => 29,  61 => 78,  59 => 77,  55 => 75,  53 => 29,  49 => 27,  45 => 25,  43 => 24,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Zurb Foundations's theme implementation for status messages.
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
 * - zurb_foundation_status_in_reveal: Boolean indicating whether status
 *   messages should be shown in a Foundation Reveal modal.
 */
#}
{% if zurb_foundation_status_in_reveal %}
  <div id=\"status-messages\" data-reveal class=\"reveal\" role=\"dialog\" data-animation-in=\"fade-in\" data-animation-out=\"fade-out\">
{% endif %}

  <div data-drupal-messages>
  {% block messages %}
  {% for type, messages in message_list %}
    {%
      set classes = [
        'zurb-foundation-callout',
        'callout',
        'messages',
        'messages--' ~ type,
        zurb_status_class_mapping[type] ? zurb_status_class_mapping[type]
      ]
    %}
    <div role=\"contentinfo\" aria-label=\"{{ status_headings[type] }}\" data-closable=\"fade-out\"{{ attributes.addClass(classes)|without('role', 'aria-label', 'data-closable') }}>

      {% if not zurb_foundation_status_in_reveal %}
        <button class=\"close-button\" aria-label=\"Dismiss alert\" type=\"button\" data-close>
          <span aria-hidden=\"true\">&times;</span>
        </button>
      {% endif %}

      {% if type == 'error' %}
        <div role=\"alert\">
      {% endif %}

        {% if status_headings[type] %}
          <h2 class=\"show-for-sr\">{{ status_headings[type] }}</h2>
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

{% if zurb_foundation_status_in_reveal %}
  <button class=\"close-button\" aria-label=\"Dismiss alert\" type=\"button\" data-close>
    <span aria-hidden=\"true\">&times;</span>
  </button>
</div>
{% endif %}
", "themes/contrib/zurb_foundation/templates/status-messages.html.twig", "/var/www/html/web/themes/contrib/zurb_foundation/templates/status-messages.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 24, "block" => 29, "for" => 30, "set" => 32);
        static $filters = array("escape" => 40, "without" => 40, "length" => 56, "first" => 63);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'block', 'for', 'set'],
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
