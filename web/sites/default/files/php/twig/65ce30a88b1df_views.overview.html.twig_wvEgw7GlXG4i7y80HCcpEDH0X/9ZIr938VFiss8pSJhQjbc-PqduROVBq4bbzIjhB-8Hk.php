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

/* @help_topics/views.overview.html.twig */
class __TwigTemplate_68b523ccf70280075845a9694d8ec08a extends Template
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
        $__internal_ad96c2d8979d8d23860453e7c5eb1520->enter($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@help_topics/views.overview.html.twig"));

        // line 9
        echo "<h2>";
        echo t("What is a view?", array());
        echo "</h2>
<p>";
        // line 10
        echo t("A <em>view</em> is a listing of items on your site; for example, a block showing the most recent comments, a page listing news items, or a list of registered users. The listings can be formatted in a table, grid, list, calendar, RSS feed, and other formats (some output formats may require you to install additional contributed modules).", array());
        echo "</p>
<h2>";
        // line 11
        echo t("What are the components of a view?", array());
        echo "</h2>
<p>";
        // line 12
        echo t("When you first create a view, you will specify what type of <em>base data</em> is being displayed in the view, which cannot be changed. After choosing a base data type, you can edit the following components, which allow you to specify which data to output, in what order, and in what format:", array());
        echo "</p>
<ul>
  <li>";
        // line 14
        echo t("<em>Displays</em>: whether the output goes to a page, block, feed, etc.; a single view can have multiple displays, each with different settings.", array());
        echo "</li>
  <li>";
        // line 15
        echo t("<em>Format</em>: the output style for each display, such as content item, grid, table, or HTML list.", array());
        echo "</li>
  <li>";
        // line 16
        echo t("<em>Fields</em>: if the Format allows, the particular fields to display.", array());
        echo "</li>
  <li>";
        // line 17
        echo t("<em>Filter criteria</em>: criteria to limit the data to output, such as whether the content is published, the type of content, etc. Filters can be <em>exposed</em> to let users choose how to filter the data.", array());
        echo "</li>
  <li>";
        // line 18
        echo t("<em>Sort criteria</em>: how to order the data. Sorting can also be exposed to users.", array());
        echo "</li>
  <li>";
        // line 19
        echo t("<em>Page settings</em>, <em>Block settings</em>, etc.: settings specific to the display type, such as the URL for a page display. Most display types support an <em>Access</em> setting, where you can choose a Permission or Role that a user must have in order to see the view.", array());
        echo "</li>
  <li>";
        // line 20
        echo t("<em>Header</em> and <em>Footer</em>: content to display at the top or bottom of the view display.", array());
        echo "</li>
  <li>";
        // line 21
        echo t("<em>No results behavior</em>: what to do if the filter criteria result in having no data to display.", array());
        echo "</li>
  <li>";
        // line 22
        echo t("<em>Pager</em>: how many items to display, and how to paginate if there are additional items to display.", array());
        echo "</li>
  <li>";
        // line 23
        echo t("<em>Advanced</em> &gt; <em>Contextual filters</em>: like regular filters, except the criteria come from the <em>context</em>, such as the current date, page the view is displayed on, etc.", array());
        echo "</li>
  <li>";
        // line 24
        echo t("<em>Advanced</em> &gt; <em>Relationships</em>: additional data to pull in and display, related in some way to the base data of the view (such as data about the user who created the content item).", array());
        echo "</li>
  <li>";
        // line 25
        echo t("<em>Advanced</em> &gt; <em>Exposed form</em>: if you have exposed filters or sorts, how to display the form to the user.", array());
        echo "</li>
</ul>
<h2>";
        // line 27
        echo t("What are bulk operations?", array());
        echo "</h2>
<p>";
        // line 28
        echo t("Views using a table display format can include a bulk operations form, which allows users with sufficient permission to select one or more items from the view and apply an administrative action to them. The bulk actions available are specific to the base data type of the view; for example, a view of content items could support bulk publishing and unpublishing actions. If you have the core Actions UI module installed, see the related topic \"Configuring actions\" for more about actions.", array());
        echo "</p>
<h2>";
        // line 29
        echo t("Managing views overview", array());
        echo "</h2>
<p>";
        // line 30
        echo t("The core Views module handles the display of views, and the core Views UI module allows you to create, edit, and delete views in the administrative interface. See the related topics listed below for specific tasks (if the Views UI module is installed).", array());
        echo "</p>
<h2>";
        // line 31
        echo t("Additional resources", array());
        echo "</h2>
<ul>
  <li>";
        // line 33
        echo t("<a href=\"https://www.drupal.org/docs/user_guide/en/views-chapter.html\">Creating Listings with Views (Drupal User Guide)</a>", array());
        echo "</li>
</ul>";
        
        $__internal_ad96c2d8979d8d23860453e7c5eb1520->leave($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@help_topics/views.overview.html.twig";
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
        return array (  130 => 33,  125 => 31,  121 => 30,  117 => 29,  113 => 28,  109 => 27,  104 => 25,  100 => 24,  96 => 23,  92 => 22,  88 => 21,  84 => 20,  80 => 19,  76 => 18,  72 => 17,  68 => 16,  64 => 15,  60 => 14,  55 => 12,  51 => 11,  47 => 10,  42 => 9,);
    }

    public function getSourceContext()
    {
        return new Source("{% line 9 %}<h2>{% trans %}What is a view?{% endtrans %}</h2>
<p>{% trans %}A <em>view</em> is a listing of items on your site; for example, a block showing the most recent comments, a page listing news items, or a list of registered users. The listings can be formatted in a table, grid, list, calendar, RSS feed, and other formats (some output formats may require you to install additional contributed modules).{% endtrans %}</p>
<h2>{% trans %}What are the components of a view?{% endtrans %}</h2>
<p>{% trans %}When you first create a view, you will specify what type of <em>base data</em> is being displayed in the view, which cannot be changed. After choosing a base data type, you can edit the following components, which allow you to specify which data to output, in what order, and in what format:{% endtrans %}</p>
<ul>
  <li>{% trans %}<em>Displays</em>: whether the output goes to a page, block, feed, etc.; a single view can have multiple displays, each with different settings.{% endtrans %}</li>
  <li>{% trans %}<em>Format</em>: the output style for each display, such as content item, grid, table, or HTML list.{% endtrans %}</li>
  <li>{% trans %}<em>Fields</em>: if the Format allows, the particular fields to display.{% endtrans %}</li>
  <li>{% trans %}<em>Filter criteria</em>: criteria to limit the data to output, such as whether the content is published, the type of content, etc. Filters can be <em>exposed</em> to let users choose how to filter the data.{% endtrans %}</li>
  <li>{% trans %}<em>Sort criteria</em>: how to order the data. Sorting can also be exposed to users.{% endtrans %}</li>
  <li>{% trans %}<em>Page settings</em>, <em>Block settings</em>, etc.: settings specific to the display type, such as the URL for a page display. Most display types support an <em>Access</em> setting, where you can choose a Permission or Role that a user must have in order to see the view.{% endtrans %}</li>
  <li>{% trans %}<em>Header</em> and <em>Footer</em>: content to display at the top or bottom of the view display.{% endtrans %}</li>
  <li>{% trans %}<em>No results behavior</em>: what to do if the filter criteria result in having no data to display.{% endtrans %}</li>
  <li>{% trans %}<em>Pager</em>: how many items to display, and how to paginate if there are additional items to display.{% endtrans %}</li>
  <li>{% trans %}<em>Advanced</em> &gt; <em>Contextual filters</em>: like regular filters, except the criteria come from the <em>context</em>, such as the current date, page the view is displayed on, etc.{% endtrans %}</li>
  <li>{% trans %}<em>Advanced</em> &gt; <em>Relationships</em>: additional data to pull in and display, related in some way to the base data of the view (such as data about the user who created the content item).{% endtrans %}</li>
  <li>{% trans %}<em>Advanced</em> &gt; <em>Exposed form</em>: if you have exposed filters or sorts, how to display the form to the user.{% endtrans %}</li>
</ul>
<h2>{% trans %}What are bulk operations?{% endtrans %}</h2>
<p>{% trans %}Views using a table display format can include a bulk operations form, which allows users with sufficient permission to select one or more items from the view and apply an administrative action to them. The bulk actions available are specific to the base data type of the view; for example, a view of content items could support bulk publishing and unpublishing actions. If you have the core Actions UI module installed, see the related topic \"Configuring actions\" for more about actions.{% endtrans %}</p>
<h2>{% trans %}Managing views overview{% endtrans %}</h2>
<p>{% trans %}The core Views module handles the display of views, and the core Views UI module allows you to create, edit, and delete views in the administrative interface. See the related topics listed below for specific tasks (if the Views UI module is installed).{% endtrans %}</p>
<h2>{% trans %}Additional resources{% endtrans %}</h2>
<ul>
  <li>{% trans %}<a href=\"https://www.drupal.org/docs/user_guide/en/views-chapter.html\">Creating Listings with Views (Drupal User Guide)</a>{% endtrans %}</li>
</ul>", "@help_topics/views.overview.html.twig", "/var/www/html/web/core/modules/views/help_topics/views.overview.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("trans" => 9);
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
