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

/* themes/contrib/bootstrap_barrio/templates/misc/status-messages--toasts.html.twig */
class __TwigTemplate_7d786e889329c20e8405ffa27e0a1a24 extends Template
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
        $__internal_ad96c2d8979d8d23860453e7c5eb1520->enter($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "themes/contrib/bootstrap_barrio/templates/misc/status-messages--toasts.html.twig"));

        // line 28
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("bootstrap_barrio/toast"), "html", null, true);
        echo "

<div class=\"toast-container position-fixed top-0 end-0 p3\" aria-live=\"polite\" aria-atomic=\"true\" data-drupal-messages>

  ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["message_list"] ?? null));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 33
            echo "    ";
            // line 34
            $context["classes"] = ["toast", "fade"];
            // line 39
            echo "    ";
            // line 40
            $context["heading"] = ["status" => t("Status message"), "error" => t("Error message"), "warning" => t("Warning message"), "info" => t("Informative message")];
            // line 47
            echo "    ";
            // line 48
            $context["color"] = ["status" => "#28a745", "warning" => "#dc3545", "error" => "#ffc107", "info" => "#17a2b8"];
            // line 55
            echo "    ";
            // line 56
            $context["role"] = ["status" => "status", "warning" => "alert", "error" => "alert", "info" => "info"];
            // line 63
            echo "    ";
            // line 64
            $context["autohide"] = ["status" => "true", "warning" => "false", "error" => "true", "info" => "false"];
            // line 71
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 72
                echo "      <!-- Then put toasts within -->
      <div ";
                // line 73
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(($context["attributes"] ?? null), 73, $this->source), "role", "aria-label"), "addClass", [($context["classes"] ?? null)], "method", false, false, true, 73), "setAttribute", ["data-drupal-selector", "messages"], "method", false, false, true, 73), "setAttribute", ["role", (($__internal_compile_0 = ($context["role"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[$context["type"]] ?? null) : null)], "method", false, false, true, 73), "setAttribute", ["data-bs-autohide", (($__internal_compile_1 = ($context["autohide"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[$context["type"]] ?? null) : null)], "method", false, false, true, 73), 73, $this->source), "html", null, true);
                echo " aria-live=\"assertive\" aria-atomic=\"true\" data-delay=\"10000\">
        <div class=\"toast-header\">
          <svg class=\"bd-placeholder-img rounded mr-2\" width=\"20\" height=\"20\" xmlns=\"http://www.w3.org/2000/svg\" preserveaspectratio=\"xMidYMid slice\" focusable=\"false\" role=\"img\">
            <rect ";
                // line 76
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "setAttribute", ["fill", (($__internal_compile_2 = ($context["color"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[$context["type"]] ?? null) : null)], "method", false, false, true, 76), 76, $this->source), "html", null, true);
                echo " width=\"100%\" height=\"100%\"></rect>
          </svg>
          <strong class=\"me-auto\">";
                // line 78
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_3 = ($context["status_headings"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3[$context["type"]] ?? null) : null), 78, $this->source), "html", null, true);
                echo "</strong>
          <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"toast\" aria-label=\"Close\"></button>
        </div>
        <div class=\"toast-body\">
          ";
                // line 82
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["message"], 82, $this->source), "html", null, true);
                echo "
        </div>
      </div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 86
            echo "  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 87
        echo "</div>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["message_list", "attributes", "status_headings"]);        
        $__internal_ad96c2d8979d8d23860453e7c5eb1520->leave($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "themes/contrib/bootstrap_barrio/templates/misc/status-messages--toasts.html.twig";
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
        return array (  115 => 87,  109 => 86,  99 => 82,  92 => 78,  87 => 76,  81 => 73,  78 => 72,  73 => 71,  71 => 64,  69 => 63,  67 => 56,  65 => 55,  63 => 48,  61 => 47,  59 => 40,  57 => 39,  55 => 34,  53 => 33,  49 => 32,  42 => 28,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Default theme implementation for status messages.
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
 * - display: (optional) May have a value of 'status' or 'error' when only
 *   displaying messages of that specific type.
 * - attributes: HTML attributes for the element, including:
 *   - class: HTML classes.
 *
 * @see template_preprocess_status_messages()
 *
 * @ingroup themeable
 */
#}
{{ attach_library('bootstrap_barrio/toast') }}

<div class=\"toast-container position-fixed top-0 end-0 p3\" aria-live=\"polite\" aria-atomic=\"true\" data-drupal-messages>

  {% for type, messages in message_list %}
    {%
      set classes = [
        'toast',
        'fade',
      ]
    %}
    {%
      set heading = {
        'status': 'Status message'|t,
        'error': 'Error message'|t,
        'warning': 'Warning message'|t,
        'info': 'Informative message'|t,
      }
    %}
    {%
      set color = {
        'status': '#28a745',
        'warning': '#dc3545',
        'error': '#ffc107',
        'info': '#17a2b8',
      }
    %}
    {%
      set role = {
        'status': 'status',
        'warning': 'alert',
        'error': 'alert',
        'info': 'info',
      }
    %}
    {%
      set autohide = {
        'status': 'true',
        'warning': 'false',
        'error': 'true',
        'info': 'false',
      }
    %}
    {% for message in messages %}
      <!-- Then put toasts within -->
      <div {{ attributes|without('role', 'aria-label').addClass(classes).setAttribute('data-drupal-selector', 'messages').setAttribute('role', role[type]).setAttribute('data-bs-autohide', autohide[type]) }} aria-live=\"assertive\" aria-atomic=\"true\" data-delay=\"10000\">
        <div class=\"toast-header\">
          <svg class=\"bd-placeholder-img rounded mr-2\" width=\"20\" height=\"20\" xmlns=\"http://www.w3.org/2000/svg\" preserveaspectratio=\"xMidYMid slice\" focusable=\"false\" role=\"img\">
            <rect {{ attributes.setAttribute('fill', color[type]) }} width=\"100%\" height=\"100%\"></rect>
          </svg>
          <strong class=\"me-auto\">{{ status_headings[type] }}</strong>
          <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"toast\" aria-label=\"Close\"></button>
        </div>
        <div class=\"toast-body\">
          {{ message }}
        </div>
      </div>
    {% endfor %}
  {% endfor %}
</div>
", "themes/contrib/bootstrap_barrio/templates/misc/status-messages--toasts.html.twig", "/var/www/html/web/themes/contrib/bootstrap_barrio/templates/misc/status-messages--toasts.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 32, "set" => 34);
        static $filters = array("escape" => 28, "t" => 41, "without" => 73);
        static $functions = array("attach_library" => 28);

        try {
            $this->sandbox->checkSecurity(
                ['for', 'set'],
                ['escape', 't', 'without'],
                ['attach_library']
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
