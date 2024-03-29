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

/* core/modules/views_ui/templates/views-ui-view-displays-list.html.twig */
class __TwigTemplate_1c6177cdc653c2d1e8642e0a86497bdc extends Template
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
        $__internal_ad96c2d8979d8d23860453e7c5eb1520->enter($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "core/modules/views_ui/templates/views-ui-view-displays-list.html.twig"));

        // line 14
        echo "<ul>
  ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["displays"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["display"]) {
            // line 16
            echo "    <li>
      ";
            // line 17
            if (twig_get_attribute($this->env, $this->source, $context["display"], "path", [], "any", false, false, true, 17)) {
                // line 18
                echo "        ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["display"], "display", [], "any", false, false, true, 18), 18, $this->source), "html", null, true);
                echo " <span data-drupal-selector=\"views-table-filter-text-source\">(";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["display"], "path", [], "any", false, false, true, 18), 18, $this->source), "html", null, true);
                echo ")</span>
      ";
            } else {
                // line 20
                echo "        ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["display"], "display", [], "any", false, false, true, 20), 20, $this->source), "html", null, true);
                echo "
      ";
            }
            // line 22
            echo "    </li>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['display'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "</ul>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["displays"]);        
        $__internal_ad96c2d8979d8d23860453e7c5eb1520->leave($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "core/modules/views_ui/templates/views-ui-view-displays-list.html.twig";
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
        return array (  75 => 24,  68 => 22,  62 => 20,  54 => 18,  52 => 17,  49 => 16,  45 => 15,  42 => 14,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Default theme implementation for views displays on the views listing page.
 *
 * Available variables:
 * - displays: Contains multiple display instances. Each display contains:
 *   - display: Display name.
 *   - path: Path to display, if any.
 *
 * @ingroup themeable
 */
#}
<ul>
  {% for display in displays %}
    <li>
      {% if display.path %}
        {{ display.display }} <span data-drupal-selector=\"views-table-filter-text-source\">({{ display.path }})</span>
      {% else %}
        {{ display.display }}
      {% endif %}
    </li>
  {% endfor %}
</ul>
", "core/modules/views_ui/templates/views-ui-view-displays-list.html.twig", "/var/www/html/web/core/modules/views_ui/templates/views-ui-view-displays-list.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 15, "if" => 17);
        static $filters = array("escape" => 18);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['for', 'if'],
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
