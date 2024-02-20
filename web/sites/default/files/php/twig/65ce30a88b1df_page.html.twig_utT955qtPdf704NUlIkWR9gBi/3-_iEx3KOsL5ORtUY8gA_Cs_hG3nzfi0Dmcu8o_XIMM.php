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

/* themes/contrib/zurb_foundation/templates/page.html.twig */
class __TwigTemplate_c997ad254416d133709ed942773c33a3 extends Template
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
        $__internal_ad96c2d8979d8d23860453e7c5eb1520->enter($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "themes/contrib/zurb_foundation/templates/page.html.twig"));

        // line 48
        echo "
<div class=\"off-canvas-wrapper\">
  <div class=\"inner-wrap off-canvas-wrapper-inner\" id=\"inner-wrap\" data-off-canvas-wrapper>
    <aside id=\"left-off-canvas-menu\" class=\"off-canvas left-off-canvas-menu position-left\" role=\"complementary\" data-off-canvas>
      ";
        // line 52
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "left_off_canvas", [], "any", false, false, true, 52), 52, $this->source), "html", null, true);
        echo "
    </aside>

    <aside id=\"right-off-canvas-menu\" class=\"off-canvas right-off-canvas-menu position-right\" role=\"complementary\" data-off-canvas>
      ";
        // line 56
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "right_off_canvas", [], "any", false, false, true, 56), 56, $this->source), "html", null, true);
        echo "
    </aside>

    <div class=\"off-canvas-content\" data-off-canvas-content>
      ";
        // line 60
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "meta_header", [], "any", false, false, true, 60)) {
            // line 61
            echo "        ";
            if (($context["meta_header_grid"] ?? null)) {
                // line 62
                echo "          <div class=\"grid-container\">
        ";
            }
            // line 64
            echo "        ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "meta_header", [], "any", false, false, true, 64), 64, $this->source), "html", null, true);
            echo "
        ";
            // line 65
            if (($context["meta_header_grid"] ?? null)) {
                // line 66
                echo "          </div>
        ";
            }
            // line 68
            echo "      ";
        }
        // line 69
        echo "
      <header class=\"header\" role=\"banner\" aria-label=\"";
        // line 70
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Site header"));
        echo "\">
        ";
        // line 71
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 71)) {
            // line 72
            echo "          <div class=\"grid-container\">
            ";
            // line 73
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 73), 73, $this->source), "html", null, true);
            echo "
          </div>
        ";
        }
        // line 76
        echo "      </header>

      ";
        // line 78
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "help", [], "any", false, false, true, 78)) {
            // line 79
            echo "        <div class=\"l-help grid-container\">
          ";
            // line 80
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "help", [], "any", false, false, true, 80), 80, $this->source), "html", null, true);
            echo "
        </div>
      ";
        }
        // line 83
        echo "
      <div class=\"grid-container\">
        <main id=\"main\" class=\"grid-x grid-margin-x\" role=\"main\">
          <a id=\"main-content\" tabindex=\"-1\"></a>";
        // line 87
        echo "
          ";
        // line 88
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 88)) {
            // line 89
            echo "            <div id=\"highlighted\" class=\"cell\">
              ";
            // line 90
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 90), 90, $this->source), "html", null, true);
            echo "
            </div>
          ";
        }
        // line 93
        echo "
          ";
        // line 94
        if (($context["breadcrumb"] ?? null)) {
            echo " ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["breadcrumb"] ?? null), 94, $this->source), "html", null, true);
            echo " ";
        }
        // line 95
        echo "
          <div class=\"";
        // line 96
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["main_grid"] ?? null), 96, $this->source), "html", null, true);
        echo "\">
            ";
        // line 97
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 97), 97, $this->source), "html", null, true);
        echo "
          </div>
          ";
        // line 99
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 99)) {
            // line 100
            echo "            <div id=\"sidebar-first\" class=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebar_first_grid"] ?? null), 100, $this->source), "html", null, true);
            echo " sidebar\" role=\"complementary\">
              ";
            // line 101
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 101), 101, $this->source), "html", null, true);
            echo "
            </div>
          ";
        }
        // line 104
        echo "          ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 104)) {
            // line 105
            echo "            <div id=\"sidebar-second\" class=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebar_sec_grid"] ?? null), 105, $this->source), "html", null, true);
            echo " sidebar\" role=\"complementary\">
              ";
            // line 106
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 106), 106, $this->source), "html", null, true);
            echo "
            </div>
          ";
        }
        // line 109
        echo "
        </main>
      </div>

      ";
        // line 113
        if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 113) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_middle", [], "any", false, false, true, 113)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_last", [], "any", false, false, true, 113))) {
            // line 114
            echo "        <footer class=\"grid-container footer\" id=\"footer\">
          <div class=\"grid-x grid-margin-x\">

            ";
            // line 117
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 117)) {
                // line 118
                echo "              <div id=\"footer-first\" class=\"cell large-4\">
                ";
                // line 119
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 119), 119, $this->source), "html", null, true);
                echo "
              </div>
            ";
            }
            // line 122
            echo "
            ";
            // line 123
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_middle", [], "any", false, false, true, 123)) {
                // line 124
                echo "              <div id=\"footer-middle\" class=\"cell large-4\">
                ";
                // line 125
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_middle", [], "any", false, false, true, 125), 125, $this->source), "html", null, true);
                echo "
              </div>
            ";
            }
            // line 128
            echo "
            ";
            // line 129
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_last", [], "any", false, false, true, 129)) {
                // line 130
                echo "              <div id=\"footer-last\" class=\"cell large-4\">
                ";
                // line 131
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_last", [], "any", false, false, true, 131), 131, $this->source), "html", null, true);
                echo "
              </div>
            ";
            }
            // line 134
            echo "
          </div>
        </footer>
      ";
        }
        // line 138
        echo "
      ";
        // line 139
        if (($context["block_copyright_show"] ?? null)) {
            // line 140
            echo "        <div class=\"bottom-bar callout secondary grid-x\">

          ";
            // line 142
            if ( !($context["block_copyright_custom_text"] ?? null)) {
                // line 143
                echo "            <p>&copy; ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
                echo " ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["site_name"] ?? null), 143, $this->source), "html", null, true);
                echo " ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("All rights reserved."));
                echo "</p>
          ";
            } else {
                // line 145
                echo "            ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["block_copyright"] ?? null), 145, $this->source), "html", null, true);
                echo "
          ";
            }
            // line 147
            echo "
        </div>
      ";
        }
        // line 150
        echo "
    </div>
  </div>
</div>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["page", "meta_header_grid", "breadcrumb", "main_grid", "sidebar_first_grid", "sidebar_sec_grid", "block_copyright_show", "block_copyright_custom_text", "site_name", "block_copyright"]);        
        $__internal_ad96c2d8979d8d23860453e7c5eb1520->leave($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "themes/contrib/zurb_foundation/templates/page.html.twig";
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
        return array (  275 => 150,  270 => 147,  264 => 145,  254 => 143,  252 => 142,  248 => 140,  246 => 139,  243 => 138,  237 => 134,  231 => 131,  228 => 130,  226 => 129,  223 => 128,  217 => 125,  214 => 124,  212 => 123,  209 => 122,  203 => 119,  200 => 118,  198 => 117,  193 => 114,  191 => 113,  185 => 109,  179 => 106,  174 => 105,  171 => 104,  165 => 101,  160 => 100,  158 => 99,  153 => 97,  149 => 96,  146 => 95,  140 => 94,  137 => 93,  131 => 90,  128 => 89,  126 => 88,  123 => 87,  118 => 83,  112 => 80,  109 => 79,  107 => 78,  103 => 76,  97 => 73,  94 => 72,  92 => 71,  88 => 70,  85 => 69,  82 => 68,  78 => 66,  76 => 65,  71 => 64,  67 => 62,  64 => 61,  62 => 60,  55 => 56,  48 => 52,  42 => 48,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Zurb Foundations's theme implementation to display a single page.
 *
 * The doctype, html, head and body tags are not in this template. Instead they
 * can be found in the html.html.twig template in this directory.
 *
 * Available variables:
 *
 * General utility variables:
 * - base_path: The base URL path of the Drupal installation. Will usually be
 *   \"/\" unless you have installed Drupal in a sub-directory.
 * - is_front: A flag indicating if the current page is the front page.
 * - logged_in: A flag indicating if the user is registered and signed in.
 * - is_admin: A flag indicating if the user has permission to access
 *   administration pages.
 *
 * Site identity:
 * - front_page: The URL of the front page. Use this instead of base_path when
 *   linking to the front page. This includes the language domain or prefix.
 * - site_slogan: The slogan of the site. This is empty when displaying the site
 *   slogan has been disabled in theme settings.
 *
 * Page content (in order of occurrence in the default page.html.twig):
 * - messages: Status and error messages. Should be displayed prominently.
 * - node: Fully loaded node, if there is an automatically-loaded node
 *   associated with the page and the node ID is the second argument in the
 *   page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - page.meta_header: Extra items to come before the main Header.
 * - page.header: Items for the header region.
 * - page.help: Dynamic help text, mostly for admin pages.
 * - page.highlighted: Items for the highlighted content region.
 * - page.content: The main content of the current page.
 * - page.sidebar_first: Items for the first sidebar.
 * - page.sidebar_second: Items for the second sidebar.
 * - page.footer_first: Items for the first footer column.
 * - page.footer_middle: Items for the second footer column.
 * - page.footer_last: Items for the last footer column.
 *
 * @see template_preprocess_page()
 * @see html.html.twig
 */
#}

<div class=\"off-canvas-wrapper\">
  <div class=\"inner-wrap off-canvas-wrapper-inner\" id=\"inner-wrap\" data-off-canvas-wrapper>
    <aside id=\"left-off-canvas-menu\" class=\"off-canvas left-off-canvas-menu position-left\" role=\"complementary\" data-off-canvas>
      {{ page.left_off_canvas }}
    </aside>

    <aside id=\"right-off-canvas-menu\" class=\"off-canvas right-off-canvas-menu position-right\" role=\"complementary\" data-off-canvas>
      {{ page.right_off_canvas }}
    </aside>

    <div class=\"off-canvas-content\" data-off-canvas-content>
      {% if page.meta_header %}
        {% if meta_header_grid %}
          <div class=\"grid-container\">
        {% endif %}
        {{ page.meta_header }}
        {% if meta_header_grid %}
          </div>
        {% endif %}
      {% endif %}

      <header class=\"header\" role=\"banner\" aria-label=\"{{ 'Site header'|t }}\">
        {% if page.header %}
          <div class=\"grid-container\">
            {{ page.header }}
          </div>
        {% endif %}
      </header>

      {% if page.help %}
        <div class=\"l-help grid-container\">
          {{ page.help }}
        </div>
      {% endif %}

      <div class=\"grid-container\">
        <main id=\"main\" class=\"grid-x grid-margin-x\" role=\"main\">
          <a id=\"main-content\" tabindex=\"-1\"></a>{# link is in html.html.twig #}

          {% if page.highlighted %}
            <div id=\"highlighted\" class=\"cell\">
              {{ page.highlighted }}
            </div>
          {% endif %}

          {% if breadcrumb %} {{ breadcrumb }} {% endif %}

          <div class=\"{{ main_grid }}\">
            {{ page.content }}
          </div>
          {% if page.sidebar_first %}
            <div id=\"sidebar-first\" class=\"{{ sidebar_first_grid }} sidebar\" role=\"complementary\">
              {{ page.sidebar_first }}
            </div>
          {% endif %}
          {% if page.sidebar_second %}
            <div id=\"sidebar-second\" class=\"{{ sidebar_sec_grid }} sidebar\" role=\"complementary\">
              {{ page.sidebar_second }}
            </div>
          {% endif %}

        </main>
      </div>

      {% if page.footer_first or page.footer_middle or page.footer_last %}
        <footer class=\"grid-container footer\" id=\"footer\">
          <div class=\"grid-x grid-margin-x\">

            {% if page.footer_first %}
              <div id=\"footer-first\" class=\"cell large-4\">
                {{ page.footer_first }}
              </div>
            {% endif %}

            {% if page.footer_middle %}
              <div id=\"footer-middle\" class=\"cell large-4\">
                {{ page.footer_middle }}
              </div>
            {% endif %}

            {% if page.footer_last %}
              <div id=\"footer-last\" class=\"cell large-4\">
                {{ page.footer_last }}
              </div>
            {% endif %}

          </div>
        </footer>
      {% endif %}

      {% if block_copyright_show %}
        <div class=\"bottom-bar callout secondary grid-x\">

          {% if not block_copyright_custom_text %}
            <p>&copy; {{ \"now\"|date('Y') }} {{ site_name }} {{ 'All rights reserved.'|t }}</p>
          {% else %}
            {{ block_copyright }}
          {% endif %}

        </div>
      {% endif %}

    </div>
  </div>
</div>
", "themes/contrib/zurb_foundation/templates/page.html.twig", "/var/www/html/web/themes/contrib/zurb_foundation/templates/page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 60);
        static $filters = array("escape" => 52, "t" => 70, "date" => 143);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape', 't', 'date'],
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
