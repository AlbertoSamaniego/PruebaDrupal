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

/* @help_topics/responsive_image.style.html.twig */
class __TwigTemplate_d86e637a15b4395decc2544b86f1f486 extends Template
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
        $__internal_ad96c2d8979d8d23860453e7c5eb1520->enter($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@help_topics/responsive_image.style.html.twig"));

        // line 10
        $context["media_topic"] = $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\help\HelpTwigExtension']->getTopicLink("core.media"));
        // line 11
        $context["image_style_topic"] = $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\help\HelpTwigExtension']->getTopicLink("image.style"));
        // line 12
        $context["breakpoint_overview_topic"] = $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\help\HelpTwigExtension']->getTopicLink("breakpoint.overview"));
        // line 13
        ob_start();
        echo t("Responsive image styles", array());
        $context["styles_link_text"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 14
        $context["styles_link"] = $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\help\HelpTwigExtension']->getRouteLink($this->sandbox->ensureToStringAllowed(($context["styles_link_text"] ?? null), 14, $this->source), "entity.responsive_image_style.collection"));
        // line 15
        echo "<h2>";
        echo t("Goal", array());
        echo "</h2>
<p>";
        // line 16
        echo t("Configure a responsive image style, which can be used to display images at different sizes on different devices. See @media_topic for an overview of responsive image styles, and @breakpoint_overview_topic for an overview of breakpoints.", array("@media_topic" => ($context["media_topic"] ?? null), "@breakpoint_overview_topic" => ($context["breakpoint_overview_topic"] ?? null), ));
        echo "</p>
<h2>";
        // line 17
        echo t("Steps", array());
        echo "</h2>
<ol>
  <li>";
        // line 19
        echo t("In the <em>Manage</em> administrative menu, navigate to <em>Configuration</em> &gt; <em>Media</em> &gt; <em>@styles_link</em>.", array("@styles_link" => ($context["styles_link"] ?? null), ));
        echo "</li>
  <li>";
        // line 20
        echo t("Click <em>Add responsive image style</em>.", array());
        echo "</li>
  <li>";
        // line 21
        echo t("Enter a descriptive <em>Label</em> for your style.", array());
        echo "</li>
  <li>";
        // line 22
        echo t("Select a <em>Breakpoint group</em> from the groups defined by your installed themes and modules.", array());
        echo "</li>
  <li>";
        // line 23
        echo t("Select a <em>Fallback image style</em> to use when none of the other styles apply. See @image_style_topic if you need to add a new style.", array("@image_style_topic" => ($context["image_style_topic"] ?? null), ));
        echo "</li>
  <li>";
        // line 24
        echo t("Click <em>Save</em>.", array());
        echo "</li>
  <li>";
        // line 25
        echo t("On the next page, locate the fieldsets for the breakpoints provided by the selected <em>Breakpoint group</em>.", array());
        echo "</li>
  <li>";
        // line 26
        echo t("For each breakpoint that you want to use, expand the corresponding fieldset. Select the <em>Select a single image style.</em> radio button under <em>Type</em> for the breakpoint, and select the <em>Image style</em> to use for images when that breakpoint is in effect. Repeat this step for the rest of the breakpoints you want to use.", array());
        echo "</li>
  <li>";
        // line 27
        echo t("Click <em>Save</em>", array());
        echo "</li>
  <li>";
        // line 28
        echo t("You can now use this responsive image style to format a field containing an image, in your layouts or traditional field displays. See related topics below for more information.", array());
        echo "</li>
</ol>";
        
        $__internal_ad96c2d8979d8d23860453e7c5eb1520->leave($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@help_topics/responsive_image.style.html.twig";
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
        return array (  104 => 28,  100 => 27,  96 => 26,  92 => 25,  88 => 24,  84 => 23,  80 => 22,  76 => 21,  72 => 20,  68 => 19,  63 => 17,  59 => 16,  54 => 15,  52 => 14,  48 => 13,  46 => 12,  44 => 11,  42 => 10,);
    }

    public function getSourceContext()
    {
        return new Source("{% line 10 %}{% set media_topic = render_var(help_topic_link('core.media')) %}
{% set image_style_topic = render_var(help_topic_link('image.style')) %}
{% set breakpoint_overview_topic = render_var(help_topic_link('breakpoint.overview')) %}
{% set styles_link_text %}{% trans %}Responsive image styles{% endtrans %}{% endset %}
{% set styles_link = render_var(help_route_link(styles_link_text, 'entity.responsive_image_style.collection')) %}
<h2>{% trans %}Goal{% endtrans %}</h2>
<p>{% trans %}Configure a responsive image style, which can be used to display images at different sizes on different devices. See {{ media_topic }} for an overview of responsive image styles, and {{ breakpoint_overview_topic }} for an overview of breakpoints.{% endtrans %}</p>
<h2>{% trans %}Steps{% endtrans %}</h2>
<ol>
  <li>{% trans %}In the <em>Manage</em> administrative menu, navigate to <em>Configuration</em> &gt; <em>Media</em> &gt; <em>{{ styles_link }}</em>.{% endtrans %}</li>
  <li>{% trans %}Click <em>Add responsive image style</em>.{% endtrans %}</li>
  <li>{% trans %}Enter a descriptive <em>Label</em> for your style.{% endtrans %}</li>
  <li>{% trans %}Select a <em>Breakpoint group</em> from the groups defined by your installed themes and modules.{% endtrans %}</li>
  <li>{% trans %}Select a <em>Fallback image style</em> to use when none of the other styles apply. See {{ image_style_topic }} if you need to add a new style.{% endtrans %}</li>
  <li>{% trans %}Click <em>Save</em>.{% endtrans %}</li>
  <li>{% trans %}On the next page, locate the fieldsets for the breakpoints provided by the selected <em>Breakpoint group</em>.{% endtrans %}</li>
  <li>{% trans %}For each breakpoint that you want to use, expand the corresponding fieldset. Select the <em>Select a single image style.</em> radio button under <em>Type</em> for the breakpoint, and select the <em>Image style</em> to use for images when that breakpoint is in effect. Repeat this step for the rest of the breakpoints you want to use.{% endtrans %}</li>
  <li>{% trans %}Click <em>Save</em>{% endtrans %}</li>
  <li>{% trans %}You can now use this responsive image style to format a field containing an image, in your layouts or traditional field displays. See related topics below for more information.{% endtrans %}</li>
</ol>", "@help_topics/responsive_image.style.html.twig", "/var/www/html/web/core/modules/responsive_image/help_topics/responsive_image.style.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 10, "trans" => 13);
        static $filters = array("escape" => 16);
        static $functions = array("render_var" => 10, "help_topic_link" => 10, "help_route_link" => 14);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'trans'],
                ['escape'],
                ['render_var', 'help_topic_link', 'help_route_link']
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
