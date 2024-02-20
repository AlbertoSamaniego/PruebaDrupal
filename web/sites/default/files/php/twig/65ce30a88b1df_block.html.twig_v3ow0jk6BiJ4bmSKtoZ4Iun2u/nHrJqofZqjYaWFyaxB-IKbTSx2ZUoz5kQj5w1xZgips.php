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

/* themes/contrib/zurb_foundation/templates/block.html.twig */
class __TwigTemplate_ff2d8d16318a844edaaa327cef6a8fb7 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_ad96c2d8979d8d23860453e7c5eb1520 = $this->extensions["Drupal\\tracer\\Twig\\Extension\\TraceableProfilerExtension"];
        $__internal_ad96c2d8979d8d23860453e7c5eb1520->enter($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "themes/contrib/zurb_foundation/templates/block.html.twig"));

        // line 43
        $context["classes"] = ["block", ("block-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source,         // line 45
($context["configuration"] ?? null), "provider", [], "any", false, false, true, 45), 45, $this->source))), ("block-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 46
($context["plugin_id"] ?? null), 46, $this->source)))];
        // line 49
        echo "<div";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["classes"] ?? null)], "method", false, false, true, 49), 49, $this->source), "html", null, true);
        echo ">
  ";
        // line 50
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null), 50, $this->source), "html", null, true);
        echo "
  ";
        // line 51
        if (($context["label"] ?? null)) {
            // line 52
            echo "    <h2 ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_attributes"] ?? null), 52, $this->source), "html", null, true);
            echo ">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 52, $this->source), "html", null, true);
            echo "</h2>
  ";
        }
        // line 54
        echo "  ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 54, $this->source), "html", null, true);
        echo "

  ";
        // line 56
        if (twig_length_filter($this->env, ($context["content_attributes"] ?? null))) {
            // line 57
            echo "  <div ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_attributes"] ?? null), 57, $this->source), "html", null, true);
            echo ">
    ";
        }
        // line 59
        echo "
    ";
        // line 60
        $this->displayBlock('content', $context, $blocks);
        // line 63
        echo "
    ";
        // line 64
        if (twig_length_filter($this->env, ($context["content_attributes"] ?? null))) {
            // line 65
            echo "  </div>
  ";
        }
        // line 67
        echo "
</div>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["configuration", "plugin_id", "attributes", "title_prefix", "label", "title_attributes", "title_suffix", "content_attributes", "content"]);        
        $__internal_ad96c2d8979d8d23860453e7c5eb1520->leave($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof);

    }

    // line 60
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_ad96c2d8979d8d23860453e7c5eb1520 = $this->extensions["Drupal\\tracer\\Twig\\Extension\\TraceableProfilerExtension"];
        $__internal_ad96c2d8979d8d23860453e7c5eb1520->enter($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 61
        echo "      ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 61, $this->source), "html", null, true);
        echo "
    ";
        
        $__internal_ad96c2d8979d8d23860453e7c5eb1520->leave($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "themes/contrib/zurb_foundation/templates/block.html.twig";
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
        return array (  111 => 61,  104 => 60,  94 => 67,  90 => 65,  88 => 64,  85 => 63,  83 => 60,  80 => 59,  74 => 57,  72 => 56,  66 => 54,  58 => 52,  56 => 51,  52 => 50,  47 => 49,  45 => 46,  44 => 45,  43 => 43,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Theme override to display a block.
 *
 * Available variables:
 * - plugin_id: The ID of the block implementation.
 * - label: The configured label of the block if visible.
 * - configuration: A list of the block's configuration values.
 *   - label: The configured label for the block.
 *   - label_display: The display settings for the label.
 *   - provider: The module or other provider that provided this block plugin.
 *   - Block plugin specific settings will also be stored here.
 * - content: The content of this block.
 * - attributes: array of HTML attributes populated by modules, intended to
 *   be added to the main container tag of this template.
 *   - id: A valid HTML ID and guaranteed unique.
 * - title_attributes: Same as attributes, except applied to the main title
 *   tag that appears in the template.
 * - title_prefix: Additional output populated by modules, intended to be
 *   displayed in front of the main title tag that appears in the template.
 * - title_suffix: Additional output populated by modules, intended to be
 *   displayed after the main title tag that appears in the template.
 *
 * Foundation Helper variables:
 * - classes_array: Array of html class attribute values. It is flattened
 *   into a string within the variable classes.
 * - block_zebra: Outputs 'odd' and 'even' dependent on each block region.
 * - zebra: Same output as block_zebra but independent of any block region.
 * - block_id: Counter dependent on each block region.
 * - id: Same output as block_id but independent of any block region.
 * - is_front: Flags true when presented in the front page.
 * - logged_in: Flags true when the current user is a logged-in member.
 * - is_admin: Flags true when the current user is an administrator.
 * - block_html_id: A valid HTML ID and guaranteed unique.
 * - content_attributes: Raw HTML attributes for block content.
 * - title_attributes: Raw HTML attributes for the block title tag.
 *
 * @see template_preprocess_block()
 */
#}
{%
  set classes = [
  'block',
  'block-' ~ configuration.provider|clean_class,
  'block-' ~ plugin_id|clean_class,
]
%}
<div{{ attributes.addClass(classes) }}>
  {{ title_prefix }}
  {% if label %}
    <h2 {{ title_attributes }}>{{ label }}</h2>
  {% endif %}
  {{ title_suffix }}

  {% if content_attributes|length %}
  <div {{ content_attributes }}>
    {% endif %}

    {% block content %}
      {{ content }}
    {% endblock %}

    {% if content_attributes|length %}
  </div>
  {% endif %}

</div>
", "themes/contrib/zurb_foundation/templates/block.html.twig", "/var/www/html/web/themes/contrib/zurb_foundation/templates/block.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 43, "if" => 51, "block" => 60);
        static $filters = array("clean_class" => 45, "escape" => 49, "length" => 56);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'block'],
                ['clean_class', 'escape', 'length'],
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
