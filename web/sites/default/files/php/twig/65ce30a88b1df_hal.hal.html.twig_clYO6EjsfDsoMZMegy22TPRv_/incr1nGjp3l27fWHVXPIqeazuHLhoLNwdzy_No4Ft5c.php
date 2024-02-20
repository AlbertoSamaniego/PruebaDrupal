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

/* @help_topics/hal.hal.html.twig */
class __TwigTemplate_ec130823b4677c1bfb45324b6ac11a13 extends Template
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
        $__internal_ad96c2d8979d8d23860453e7c5eb1520->enter($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@help_topics/hal.hal.html.twig"));

        // line 7
        echo "<h2>";
        echo t("HAL module", array());
        echo "</h2>
<p>";
        // line 8
        echo t("Adds support for serializing content entities using the JSON version of HAL.", array());
        echo "</p>
<h2>";
        // line 9
        echo t("What is Hypertext Application Language (HAL)?", array());
        echo "</h2>
<p>";
        // line 10
        echo t("<a href=\"https://stateless.co/hal_specification.html\">Hypertext Application Language (HAL)</a> is a serialization format that supports linking, which enables web applications to follow links and explore relationships between the data and content items that are provided by the web service. Serialized HAL data can be provided in either JSON or XML format.", array());
        echo "</p>";
        
        $__internal_ad96c2d8979d8d23860453e7c5eb1520->leave($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@help_topics/hal.hal.html.twig";
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
        return array (  55 => 10,  51 => 9,  47 => 8,  42 => 7,);
    }

    public function getSourceContext()
    {
        return new Source("{% line 7 %}<h2>{% trans %}HAL module{% endtrans %}</h2>
<p>{% trans %}Adds support for serializing content entities using the JSON version of HAL.{% endtrans %}</p>
<h2>{% trans %}What is Hypertext Application Language (HAL)?{% endtrans %}</h2>
<p>{% trans %}<a href=\"https://stateless.co/hal_specification.html\">Hypertext Application Language (HAL)</a> is a serialization format that supports linking, which enables web applications to follow links and explore relationships between the data and content items that are provided by the web service. Serialized HAL data can be provided in either JSON or XML format.{% endtrans %}</p>", "@help_topics/hal.hal.html.twig", "/var/www/html/web/modules/contrib/hal/help_topics/hal.hal.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("trans" => 7);
        static $filters = array();
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['trans'],
                [],
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
