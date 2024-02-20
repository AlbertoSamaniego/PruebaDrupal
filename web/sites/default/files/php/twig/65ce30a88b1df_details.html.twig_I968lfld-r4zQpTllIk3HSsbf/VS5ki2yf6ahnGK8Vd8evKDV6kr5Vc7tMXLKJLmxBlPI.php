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

/* themes/contrib/seven/templates/details.html.twig */
class __TwigTemplate_ddefc6a9c40a424dd550ae7244fadc7c extends Template
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
        $__internal_ad96c2d8979d8d23860453e7c5eb1520->enter($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "themes/contrib/seven/templates/details.html.twig"));

        // line 23
        echo "<details";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", ["seven-details"], "method", false, false, true, 23), 23, $this->source), "html", null, true);
        echo ">";
        // line 24
        if (($context["title"] ?? null)) {
            // line 26
            $context["summary_classes"] = ["seven-details__summary", ((            // line 28
($context["required"] ?? null)) ? ("js-form-required") : ("")), ((            // line 29
($context["required"] ?? null)) ? ("form-required") : (""))];
            // line 32
            echo "    <summary";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["summary_attributes"] ?? null), "addClass", [($context["summary_classes"] ?? null)], "method", false, false, true, 32), 32, $this->source), "html", null, true);
            echo ">
      <span>";
            // line 33
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 33, $this->source), "html", null, true);
            echo "</span>
    </summary>";
        }
        // line 36
        echo "<div class=\"seven-details__wrapper details-wrapper\">
    ";
        // line 37
        if (($context["errors"] ?? null)) {
            // line 38
            echo "      <div class=\"form-item form-item--error-message\">
        <strong>";
            // line 39
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["errors"] ?? null), 39, $this->source), "html", null, true);
            echo "</strong>
      </div>
    ";
        }
        // line 42
        if (($context["description"] ?? null)) {
            // line 43
            echo "<div class=\"seven-details__description\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["description"] ?? null), 43, $this->source), "html", null, true);
            echo "</div>";
        }
        // line 45
        if (($context["children"] ?? null)) {
            // line 46
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["children"] ?? null), 46, $this->source), "html", null, true);
        }
        // line 48
        if (($context["value"] ?? null)) {
            // line 49
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["value"] ?? null), 49, $this->source), "html", null, true);
        }
        // line 51
        echo "</div>
</details>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["attributes", "title", "required", "summary_attributes", "errors", "description", "children", "value"]);        
        $__internal_ad96c2d8979d8d23860453e7c5eb1520->leave($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "themes/contrib/seven/templates/details.html.twig";
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
        return array (  93 => 51,  90 => 49,  88 => 48,  85 => 46,  83 => 45,  78 => 43,  76 => 42,  70 => 39,  67 => 38,  65 => 37,  62 => 36,  57 => 33,  52 => 32,  50 => 29,  49 => 28,  48 => 26,  46 => 24,  42 => 23,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Theme override for a details element.
 *
 * Available variables
 * - attributes: A list of HTML attributes for the details element.
 * - errors: (optional) Any errors for this details element, may not be set.
 * - title: (optional) The title of the element, may not be set.
 * - summary_attributes: A list of HTML attributes for the summary element.
 * - description: (optional) The description of the element, may not be set.
 * - children: (optional) The children of the element, may not be set.
 * - value: (optional) The value of the element, may not be set.
 *
 * @see template_preprocess_details()
 */
#}
{#
  Prefix 'details' class to avoid collision with Modernizr.

  @todo Remove prefix after https://www.drupal.org/node/2981732 has been solved.
#}
<details{{ attributes.addClass('seven-details') }}>
  {%- if title -%}
    {%
      set summary_classes = [
        'seven-details__summary',
        required ? 'js-form-required',
        required ? 'form-required',
      ]
    %}
    <summary{{ summary_attributes.addClass(summary_classes) }}>
      <span>{{ title }}</span>
    </summary>
  {%- endif -%}
  <div class=\"seven-details__wrapper details-wrapper\">
    {% if errors %}
      <div class=\"form-item form-item--error-message\">
        <strong>{{ errors }}</strong>
      </div>
    {% endif %}
    {%- if description -%}
      <div class=\"seven-details__description\">{{ description }}</div>
    {%- endif -%}
    {%- if children -%}
      {{ children }}
    {%- endif -%}
    {%- if value -%}
      {{ value }}
    {%- endif -%}
  </div>
</details>
", "themes/contrib/seven/templates/details.html.twig", "/var/www/html/web/themes/contrib/seven/templates/details.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 24, "set" => 26);
        static $filters = array("escape" => 23);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set'],
                ['escape'],
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
