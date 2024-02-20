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

/* @help_topics/user.new_role.html.twig */
class __TwigTemplate_2ed3a6e773a834fe6d3ecd2e9d0c1dfb extends Template
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
        $__internal_ad96c2d8979d8d23860453e7c5eb1520->enter($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@help_topics/user.new_role.html.twig"));

        // line 7
        ob_start();
        echo t("Roles", array());
        $context["roles_link_text"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 8
        $context["roles_link"] = $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\help\HelpTwigExtension']->getRouteLink($this->sandbox->ensureToStringAllowed(($context["roles_link_text"] ?? null), 8, $this->source), "entity.user_role.collection"));
        // line 9
        echo "<h2>";
        echo t("Goal", array());
        echo "</h2>
<p>";
        // line 10
        echo t("Create a new role.", array());
        echo "</p>
<h2>";
        // line 11
        echo t("Steps", array());
        echo "</h2>
<ol>
  <li>";
        // line 13
        echo t("In the <em>Manage</em> administrative menu, navigate to <em>People</em> &gt; <em>@roles_link</em>.", array("@roles_link" => ($context["roles_link"] ?? null), ));
        echo "</li>
  <li>";
        // line 14
        echo t("Click <em>Add role</em>.", array());
        echo "</li>
  <li>";
        // line 15
        echo t("Enter the desired <em>Role name</em>. If desired, click <em>Edit</em> to change the <em>Machine name</em> for the role.", array());
        echo "</li>
  <li>";
        // line 16
        echo t("Click <em>Save</em>. You should be returned to the <em>Roles</em> page and your new role should be in the role list.", array());
        echo "</li>
</ol>";
        
        $__internal_ad96c2d8979d8d23860453e7c5eb1520->leave($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@help_topics/user.new_role.html.twig";
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
        return array (  74 => 16,  70 => 15,  66 => 14,  62 => 13,  57 => 11,  53 => 10,  48 => 9,  46 => 8,  42 => 7,);
    }

    public function getSourceContext()
    {
        return new Source("{% line 7 %}{% set roles_link_text %}{% trans %}Roles{% endtrans %}{% endset %}
{% set roles_link = render_var(help_route_link(roles_link_text, 'entity.user_role.collection')) %}
<h2>{% trans %}Goal{% endtrans %}</h2>
<p>{% trans %}Create a new role.{% endtrans %}</p>
<h2>{% trans %}Steps{% endtrans %}</h2>
<ol>
  <li>{% trans %}In the <em>Manage</em> administrative menu, navigate to <em>People</em> &gt; <em>{{ roles_link }}</em>.{% endtrans %}</li>
  <li>{% trans %}Click <em>Add role</em>.{% endtrans %}</li>
  <li>{% trans %}Enter the desired <em>Role name</em>. If desired, click <em>Edit</em> to change the <em>Machine name</em> for the role.{% endtrans %}</li>
  <li>{% trans %}Click <em>Save</em>. You should be returned to the <em>Roles</em> page and your new role should be in the role list.{% endtrans %}</li>
</ol>", "@help_topics/user.new_role.html.twig", "/var/www/html/web/core/modules/user/help_topics/user.new_role.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 7, "trans" => 7);
        static $filters = array("escape" => 13);
        static $functions = array("render_var" => 8, "help_route_link" => 8);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'trans'],
                ['escape'],
                ['render_var', 'help_route_link']
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
