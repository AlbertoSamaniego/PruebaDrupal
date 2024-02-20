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

/* themes/contrib/zurb_foundation/templates/menu--main.html.twig */
class __TwigTemplate_65445af15bfeb3977adb123c612f5af1 extends Template
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
        $__internal_ad96c2d8979d8d23860453e7c5eb1520->enter($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "themes/contrib/zurb_foundation/templates/menu--main.html.twig"));

        // line 21
        $macros["menus"] = $this->macros["menus"] = $this;
        // line 22
        echo "
";
        // line 27
        echo "
";
        // line 28
        if (($context["top_bar"] ?? null)) {
            // line 29
            echo "  ";
            if (($context["top_bar_sticky"] ?? null)) {
                // line 30
                echo "  <div id=\"top-bar-sticky-container\" data-sticky-container>
  ";
            }
            // line 32
            echo "    <div ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["top_bar_attributes"] ?? null), 32, $this->source), "html", null, true);
            echo ">
      <div class=\"title-bar\" data-responsive-toggle=\"main-menu\" data-hide-for=\"medium\">
        <button class=\"menu-icon\" type=\"button\" data-toggle></button>
        <div class=\"title-bar-title\">";
            // line 35
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["top_bar_menu_text"] ?? null), 35, $this->source), "html", null, true);
            echo "</div>
      </div>
      <nav class=\"top-bar\" id=\"main-menu\" role=\"navigation\">
        <div class=\"top-bar-left\">
          <ul class=\"dropdown menu\" data-dropdown-menu>
            <li class=\"menu-text\">";
            // line 40
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["site_name"] ?? null), 40, $this->source), "html", null, true);
            echo "</li>
          </ul>
        </div>
        <div class=\"top-bar-right\">
          ";
            // line 44
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_call_macro($macros["menus"], "macro_menu_links", [($context["items"] ?? null), ($context["attributes"] ?? null), 0, 1], 44, $context, $this->getSourceContext()));
            echo "
          ";
            // line 45
            if (($context["top_bar_search"] ?? null)) {
                // line 46
                echo "            ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["top_bar_search"] ?? null), 46, $this->source), "html", null, true);
                echo "
          ";
            }
            // line 48
            echo "          ";
            if (($context["top_bar_languageswitcher"] ?? null)) {
                // line 49
                echo "            ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["top_bar_languageswitcher"] ?? null), 49, $this->source), "html", null, true);
                echo "
          ";
            }
            // line 51
            echo "        </div>
      </nav>
    </div>
  ";
            // line 54
            if (($context["top_bar_sticky"] ?? null)) {
                // line 55
                echo "  </div>
  ";
            }
        } else {
            // line 58
            echo "  ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_call_macro($macros["menus"], "macro_menu_links", [($context["items"] ?? null), ($context["attributes"] ?? null), 0, 0], 58, $context, $this->getSourceContext()));
            echo "
";
        }
        // line 60
        echo "
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["_self", "top_bar", "top_bar_sticky", "top_bar_attributes", "top_bar_menu_text", "site_name", "items", "attributes", "top_bar_search", "top_bar_languageswitcher", "menu_level"]);        
        $__internal_ad96c2d8979d8d23860453e7c5eb1520->leave($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof);

    }

    // line 61
    public function macro_menu_links($__items__ = null, $__attributes__ = null, $__menu_level__ = null, $__top_bar__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "items" => $__items__,
            "attributes" => $__attributes__,
            "menu_level" => $__menu_level__,
            "top_bar" => $__top_bar__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_ad96c2d8979d8d23860453e7c5eb1520 = $this->extensions["Drupal\\tracer\\Twig\\Extension\\TraceableProfilerExtension"];
            $__internal_ad96c2d8979d8d23860453e7c5eb1520->enter($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "menu_links"));

            // line 62
            echo "  ";
            $macros["menus"] = $this;
            // line 63
            echo "  ";
            if (($context["items"] ?? null)) {
                // line 64
                echo "    ";
                if (($context["top_bar"] ?? null)) {
                    // line 65
                    echo "      ";
                    if ((($context["menu_level"] ?? null) == 0)) {
                        // line 66
                        echo "        <ul";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", ["menu", "vertical", "medium-horizontal"], "method", false, false, true, 66), "setAttribute", ["data-responsive-menu", "drilldown medium-dropdown"], "method", false, false, true, 66), 66, $this->source), "html", null, true);
                        echo ">
      ";
                    } else {
                        // line 68
                        echo "        <ul class=\"submenu menu vertical\" data-submenu>
      ";
                    }
                    // line 70
                    echo "    ";
                } else {
                    // line 71
                    echo "      ";
                    if ((($context["menu_level"] ?? null) == 0)) {
                        // line 72
                        echo "        <ul";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", ["dropdown", "menu"], "method", false, false, true, 72), 72, $this->source), "html", null, true);
                        echo " data-dropdown-menu>
      ";
                    } else {
                        // line 74
                        echo "        <ul class=\"menu\">
      ";
                    }
                    // line 76
                    echo "    ";
                }
                // line 77
                echo "    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 78
                    echo "      ";
                    if (($context["top_bar"] ?? null)) {
                        // line 79
                        echo "        ";
                        // line 80
                        $context["item_classes"] = [(( !twig_test_empty(twig_get_attribute($this->env, $this->source,                         // line 81
$context["item"], "below", [], "any", false, false, true, 81))) ? ("has-submenu") : ("")), ((twig_get_attribute($this->env, $this->source,                         // line 82
$context["item"], "is_expanded", [], "any", false, false, true, 82)) ? ("menu-item--expanded") : ("")), ((twig_get_attribute($this->env, $this->source,                         // line 83
$context["item"], "is_collapsed", [], "any", false, false, true, 83)) ? ("menu-item--collapsed") : ("")), ((twig_get_attribute($this->env, $this->source,                         // line 84
$context["item"], "in_active_trail", [], "any", false, false, true, 84)) ? ("menu-item--active-trail is-active") : (""))];
                        // line 87
                        echo "      ";
                    }
                    // line 88
                    echo "      <li";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 88), "addClass", [($context["item_classes"] ?? null)], "method", false, false, true, 88), 88, $this->source), "html", null, true);
                    echo ">
        ";
                    // line 89
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getLink($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 89), 89, $this->source), $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 89), 89, $this->source)), "html", null, true);
                    echo "
        ";
                    // line 90
                    if (twig_get_attribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 90)) {
                        // line 91
                        echo "            ";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_call_macro($macros["menus"], "macro_menu_links", [twig_get_attribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 91), ($context["attributes"] ?? null), (($context["menu_level"] ?? null) + 1), ($context["top_bar"] ?? null)], 91, $context, $this->getSourceContext()));
                        echo "
        ";
                    }
                    // line 93
                    echo "      </li>
    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 95
                echo "    </ul>
  ";
            }
            
            $__internal_ad96c2d8979d8d23860453e7c5eb1520->leave($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "themes/contrib/zurb_foundation/templates/menu--main.html.twig";
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
        return array (  232 => 95,  225 => 93,  219 => 91,  217 => 90,  213 => 89,  208 => 88,  205 => 87,  203 => 84,  202 => 83,  201 => 82,  200 => 81,  199 => 80,  197 => 79,  194 => 78,  189 => 77,  186 => 76,  182 => 74,  176 => 72,  173 => 71,  170 => 70,  166 => 68,  160 => 66,  157 => 65,  154 => 64,  151 => 63,  148 => 62,  129 => 61,  120 => 60,  114 => 58,  109 => 55,  107 => 54,  102 => 51,  96 => 49,  93 => 48,  87 => 46,  85 => 45,  81 => 44,  74 => 40,  66 => 35,  59 => 32,  55 => 30,  52 => 29,  50 => 28,  47 => 27,  44 => 22,  42 => 21,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Theme override to display a menu.
 *
 * Available variables:
 * - menu_name: The machine name of the menu.
 * - items: A nested list of menu items. Each menu item contains:
 *   - attributes: HTML attributes for the menu item.
 *   - below: The menu item child items.
 *   - title: The menu link title.
 *   - url: The menu link url, instance of \\Drupal\\Core\\Url
 *   - localized_options: Menu link localized options.
 *   - is_expanded: TRUE if the link has visible children within the current
 *     menu tree.
 *   - is_collapsed: TRUE if the link has children within the current menu tree
 *     that are not currently visible.
 *   - in_active_trail: TRUE if the link is in the active trail.
 */
#}
{% import _self as menus %}

{#
  We call a macro which calls itself to render the full tree.
  @see http://twig.sensiolabs.org/doc/tags/macro.html
#}

{% if top_bar %}
  {% if top_bar_sticky %}
  <div id=\"top-bar-sticky-container\" data-sticky-container>
  {% endif %}
    <div {{ top_bar_attributes }}>
      <div class=\"title-bar\" data-responsive-toggle=\"main-menu\" data-hide-for=\"medium\">
        <button class=\"menu-icon\" type=\"button\" data-toggle></button>
        <div class=\"title-bar-title\">{{ top_bar_menu_text }}</div>
      </div>
      <nav class=\"top-bar\" id=\"main-menu\" role=\"navigation\">
        <div class=\"top-bar-left\">
          <ul class=\"dropdown menu\" data-dropdown-menu>
            <li class=\"menu-text\">{{ site_name }}</li>
          </ul>
        </div>
        <div class=\"top-bar-right\">
          {{ menus.menu_links(items, attributes, 0, 1) }}
          {% if top_bar_search %}
            {{ top_bar_search }}
          {% endif %}
          {% if top_bar_languageswitcher %}
            {{ top_bar_languageswitcher }}
          {% endif %}
        </div>
      </nav>
    </div>
  {% if top_bar_sticky %}
  </div>
  {% endif %}
{% else %}
  {{ menus.menu_links(items, attributes, 0, 0) }}
{% endif %}

{% macro menu_links(items, attributes, menu_level, top_bar) %}
  {% import _self as menus %}
  {% if items %}
    {% if top_bar %}
      {% if menu_level == 0 %}
        <ul{{ attributes.addClass('menu', 'vertical', 'medium-horizontal').setAttribute('data-responsive-menu', 'drilldown medium-dropdown') }}>
      {% else %}
        <ul class=\"submenu menu vertical\" data-submenu>
      {% endif %}
    {% else %}
      {% if menu_level == 0 %}
        <ul{{ attributes.addClass('dropdown', 'menu') }} data-dropdown-menu>
      {% else %}
        <ul class=\"menu\">
      {% endif %}
    {% endif %}
    {% for item in items %}
      {% if top_bar %}
        {%
          set item_classes = [
            item.below is not empty ? 'has-submenu' ,
            item.is_expanded ? 'menu-item--expanded',
            item.is_collapsed ? 'menu-item--collapsed',
            item.in_active_trail ? 'menu-item--active-trail is-active',
          ]
        %}
      {% endif %}
      <li{{ item.attributes.addClass(item_classes) }}>
        {{ link(item.title, item.url) }}
        {% if item.below %}
            {{ menus.menu_links(item.below, attributes, menu_level + 1, top_bar) }}
        {% endif %}
      </li>
    {% endfor %}
    </ul>
  {% endif %}
{% endmacro %}
", "themes/contrib/zurb_foundation/templates/menu--main.html.twig", "/var/www/html/web/themes/contrib/zurb_foundation/templates/menu--main.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("import" => 21, "if" => 28, "macro" => 61, "for" => 77, "set" => 80);
        static $filters = array("escape" => 32);
        static $functions = array("link" => 89);

        try {
            $this->sandbox->checkSecurity(
                ['import', 'if', 'macro', 'for', 'set'],
                ['escape'],
                ['link']
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
