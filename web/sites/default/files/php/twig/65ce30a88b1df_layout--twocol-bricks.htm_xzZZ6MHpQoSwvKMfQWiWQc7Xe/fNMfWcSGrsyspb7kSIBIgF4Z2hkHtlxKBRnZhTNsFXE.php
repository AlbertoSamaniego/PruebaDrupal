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

/* core/modules/layout_discovery/layouts/twocol_bricks/layout--twocol-bricks.html.twig */
class __TwigTemplate_2de9deb80f0fcfa797956815a04f125f extends Template
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
        $__internal_ad96c2d8979d8d23860453e7c5eb1520->enter($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "core/modules/layout_discovery/layouts/twocol_bricks/layout--twocol-bricks.html.twig"));

        // line 18
        $context["classes"] = ["layout", "layout--twocol-bricks"];
        // line 23
        if (($context["content"] ?? null)) {
            // line 24
            echo "  <div";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["classes"] ?? null)], "method", false, false, true, 24), 24, $this->source), "html", null, true);
            echo ">
    ";
            // line 25
            if (twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "top", [], "any", false, false, true, 25)) {
                // line 26
                echo "      <div ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["region_attributes"] ?? null), "top", [], "any", false, false, true, 26), "addClass", ["layout__region", "layout__region--top"], "method", false, false, true, 26), 26, $this->source), "html", null, true);
                echo ">
        ";
                // line 27
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "top", [], "any", false, false, true, 27), 27, $this->source), "html", null, true);
                echo "
      </div>
    ";
            }
            // line 30
            echo "
    ";
            // line 31
            if (twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "first_above", [], "any", false, false, true, 31)) {
                // line 32
                echo "      <div ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["region_attributes"] ?? null), "first_above", [], "any", false, false, true, 32), "addClass", ["layout__region", "layout__region--first-above"], "method", false, false, true, 32), 32, $this->source), "html", null, true);
                echo ">
        ";
                // line 33
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "first_above", [], "any", false, false, true, 33), 33, $this->source), "html", null, true);
                echo "
      </div>
    ";
            }
            // line 36
            echo "
    ";
            // line 37
            if (twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "second_above", [], "any", false, false, true, 37)) {
                // line 38
                echo "      <div ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["region_attributes"] ?? null), "second_above", [], "any", false, false, true, 38), "addClass", ["layout__region", "layout__region--second-above"], "method", false, false, true, 38), 38, $this->source), "html", null, true);
                echo ">
        ";
                // line 39
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "second_above", [], "any", false, false, true, 39), 39, $this->source), "html", null, true);
                echo "
      </div>
    ";
            }
            // line 42
            echo "
    ";
            // line 43
            if (twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "middle", [], "any", false, false, true, 43)) {
                // line 44
                echo "      <div ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["region_attributes"] ?? null), "middle", [], "any", false, false, true, 44), "addClass", ["layout__region", "layout__region--middle"], "method", false, false, true, 44), 44, $this->source), "html", null, true);
                echo ">
        ";
                // line 45
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "middle", [], "any", false, false, true, 45), 45, $this->source), "html", null, true);
                echo "
      </div>
    ";
            }
            // line 48
            echo "
    ";
            // line 49
            if (twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "first_below", [], "any", false, false, true, 49)) {
                // line 50
                echo "      <div ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["region_attributes"] ?? null), "first_below", [], "any", false, false, true, 50), "addClass", ["layout__region", "layout__region--first-below"], "method", false, false, true, 50), 50, $this->source), "html", null, true);
                echo ">
        ";
                // line 51
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "first_below", [], "any", false, false, true, 51), 51, $this->source), "html", null, true);
                echo "
      </div>
    ";
            }
            // line 54
            echo "
    ";
            // line 55
            if (twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "second_below", [], "any", false, false, true, 55)) {
                // line 56
                echo "      <div ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["region_attributes"] ?? null), "second_below", [], "any", false, false, true, 56), "addClass", ["layout__region", "layout__region--second-below"], "method", false, false, true, 56), 56, $this->source), "html", null, true);
                echo ">
        ";
                // line 57
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "second_below", [], "any", false, false, true, 57), 57, $this->source), "html", null, true);
                echo "
      </div>
    ";
            }
            // line 60
            echo "
    ";
            // line 61
            if (twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "bottom", [], "any", false, false, true, 61)) {
                // line 62
                echo "      <div ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["region_attributes"] ?? null), "bottom", [], "any", false, false, true, 62), "addClass", ["layout__region", "layout__region--bottom"], "method", false, false, true, 62), 62, $this->source), "html", null, true);
                echo ">
        ";
                // line 63
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "bottom", [], "any", false, false, true, 63), 63, $this->source), "html", null, true);
                echo "
      </div>
    ";
            }
            // line 66
            echo "  </div>
";
        }
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["content", "attributes", "region_attributes"]);        
        $__internal_ad96c2d8979d8d23860453e7c5eb1520->leave($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "core/modules/layout_discovery/layouts/twocol_bricks/layout--twocol-bricks.html.twig";
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
        return array (  160 => 66,  154 => 63,  149 => 62,  147 => 61,  144 => 60,  138 => 57,  133 => 56,  131 => 55,  128 => 54,  122 => 51,  117 => 50,  115 => 49,  112 => 48,  106 => 45,  101 => 44,  99 => 43,  96 => 42,  90 => 39,  85 => 38,  83 => 37,  80 => 36,  74 => 33,  69 => 32,  67 => 31,  64 => 30,  58 => 27,  53 => 26,  51 => 25,  46 => 24,  44 => 23,  42 => 18,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Default theme implementation for a two column layout.
 *
 * This template provides a two column display layout with full width areas at
 * the top, bottom and in the middle.
 *
 * Available variables:
 * - in_preview: Whether the plugin is being rendered in preview mode.
 * - content: The content for this layout.
 * - attributes: HTML attributes for the layout <div>.
 *
 * @ingroup themeable
 */
#}
{%
  set classes = [
    'layout',
    'layout--twocol-bricks',
  ]
%}
{% if content %}
  <div{{ attributes.addClass(classes) }}>
    {% if content.top %}
      <div {{ region_attributes.top.addClass('layout__region', 'layout__region--top') }}>
        {{ content.top }}
      </div>
    {% endif %}

    {% if content.first_above %}
      <div {{ region_attributes.first_above.addClass('layout__region', 'layout__region--first-above') }}>
        {{ content.first_above }}
      </div>
    {% endif %}

    {% if content.second_above %}
      <div {{ region_attributes.second_above.addClass('layout__region', 'layout__region--second-above') }}>
        {{ content.second_above }}
      </div>
    {% endif %}

    {% if content.middle %}
      <div {{ region_attributes.middle.addClass('layout__region', 'layout__region--middle') }}>
        {{ content.middle }}
      </div>
    {% endif %}

    {% if content.first_below %}
      <div {{ region_attributes.first_below.addClass('layout__region', 'layout__region--first-below') }}>
        {{ content.first_below }}
      </div>
    {% endif %}

    {% if content.second_below %}
      <div {{ region_attributes.second_below.addClass('layout__region', 'layout__region--second-below') }}>
        {{ content.second_below }}
      </div>
    {% endif %}

    {% if content.bottom %}
      <div {{ region_attributes.bottom.addClass('layout__region', 'layout__region--bottom') }}>
        {{ content.bottom }}
      </div>
    {% endif %}
  </div>
{% endif %}
", "core/modules/layout_discovery/layouts/twocol_bricks/layout--twocol-bricks.html.twig", "/var/www/html/web/core/modules/layout_discovery/layouts/twocol_bricks/layout--twocol-bricks.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 18, "if" => 23);
        static $filters = array("escape" => 24);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
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
