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

/* themes/contrib/seven/templates/classy/navigation/toolbar.html.twig */
class __TwigTemplate_39d4df0bae9d4a97862bca6308af77be extends Template
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
        $__internal_ad96c2d8979d8d23860453e7c5eb1520->enter($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "themes/contrib/seven/templates/classy/navigation/toolbar.html.twig"));

        // line 23
        echo "<div";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", ["toolbar"], "method", false, false, true, 23), 23, $this->source), "html", null, true);
        echo ">
  <nav";
        // line 24
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["toolbar_attributes"] ?? null), "addClass", ["toolbar-bar", "clearfix"], "method", false, false, true, 24), 24, $this->source), "html", null, true);
        echo ">
    <h2 class=\"visually-hidden\">";
        // line 25
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["toolbar_heading"] ?? null), 25, $this->source), "html", null, true);
        echo "</h2>
    ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["tabs"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["tab"]) {
            // line 27
            echo "      ";
            $context["tray"] = (($__internal_compile_0 = ($context["trays"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[$context["key"]] ?? null) : null);
            // line 28
            echo "      <div";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["tab"], "attributes", [], "any", false, false, true, 28), "addClass", ["toolbar-tab"], "method", false, false, true, 28), 28, $this->source), "html", null, true);
            echo ">
        ";
            // line 29
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["tab"], "link", [], "any", false, false, true, 29), 29, $this->source), "html", null, true);
            echo "
        ";
            // line 30
            ob_start();
            // line 31
            echo "          <div";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["tray"] ?? null), "attributes", [], "any", false, false, true, 31), 31, $this->source), "html", null, true);
            echo ">
            ";
            // line 32
            if (twig_get_attribute($this->env, $this->source, ($context["tray"] ?? null), "label", [], "any", false, false, true, 32)) {
                // line 33
                echo "              <nav class=\"toolbar-lining clearfix\" role=\"navigation\" aria-label=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["tray"] ?? null), "label", [], "any", false, false, true, 33), 33, $this->source), "html", null, true);
                echo "\">
                <h3 class=\"toolbar-tray-name visually-hidden\">";
                // line 34
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["tray"] ?? null), "label", [], "any", false, false, true, 34), 34, $this->source), "html", null, true);
                echo "</h3>
            ";
            } else {
                // line 36
                echo "              <nav class=\"toolbar-lining clearfix\" role=\"navigation\">
            ";
            }
            // line 38
            echo "            ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["tray"] ?? null), "links", [], "any", false, false, true, 38), 38, $this->source), "html", null, true);
            echo "
            </nav>
          </div>
        ";
            $___internal_parse_1_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 30
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_spaceless($___internal_parse_1_));
            // line 42
            echo "      </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['tab'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "  </nav>
  ";
        // line 45
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["remainder"] ?? null), 45, $this->source), "html", null, true);
        echo "
</div>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["attributes", "toolbar_attributes", "toolbar_heading", "tabs", "trays", "remainder"]);        
        $__internal_ad96c2d8979d8d23860453e7c5eb1520->leave($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "themes/contrib/seven/templates/classy/navigation/toolbar.html.twig";
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
        return array (  114 => 45,  111 => 44,  104 => 42,  102 => 30,  94 => 38,  90 => 36,  85 => 34,  80 => 33,  78 => 32,  73 => 31,  71 => 30,  67 => 29,  62 => 28,  59 => 27,  55 => 26,  51 => 25,  47 => 24,  42 => 23,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Theme override for the administrative toolbar.
 *
 * Available variables:
 * - attributes: HTML attributes for the wrapper.
 * - toolbar_attributes: HTML attributes to apply to the toolbar.
 * - toolbar_heading: The heading or label for the toolbar.
 * - tabs: List of tabs for the toolbar.
 *   - attributes: HTML attributes for the tab container.
 *   - link: Link or button for the menu tab.
 * - trays: Toolbar tray list, each associated with a tab. Each tray in trays
 *   contains:
 *   - attributes: HTML attributes to apply to the tray.
 *   - label: The tray's label.
 *   - links: The tray menu links.
 * - remainder: Any non-tray, non-tab elements left to be rendered.
 *
 * @see template_preprocess_toolbar()
 */
#}
<div{{ attributes.addClass('toolbar') }}>
  <nav{{ toolbar_attributes.addClass('toolbar-bar', 'clearfix') }}>
    <h2 class=\"visually-hidden\">{{ toolbar_heading }}</h2>
    {% for key, tab in tabs %}
      {% set tray = trays[key] %}
      <div{{ tab.attributes.addClass('toolbar-tab') }}>
        {{ tab.link }}
        {% apply spaceless %}
          <div{{ tray.attributes }}>
            {% if tray.label %}
              <nav class=\"toolbar-lining clearfix\" role=\"navigation\" aria-label=\"{{ tray.label }}\">
                <h3 class=\"toolbar-tray-name visually-hidden\">{{ tray.label }}</h3>
            {% else %}
              <nav class=\"toolbar-lining clearfix\" role=\"navigation\">
            {% endif %}
            {{ tray.links }}
            </nav>
          </div>
        {% endapply %}
      </div>
    {% endfor %}
  </nav>
  {{ remainder }}
</div>
", "themes/contrib/seven/templates/classy/navigation/toolbar.html.twig", "/var/www/html/web/themes/contrib/seven/templates/classy/navigation/toolbar.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 26, "set" => 27, "apply" => 30, "if" => 32);
        static $filters = array("escape" => 23, "spaceless" => 30);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['for', 'set', 'apply', 'if'],
                ['escape', 'spaceless'],
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
