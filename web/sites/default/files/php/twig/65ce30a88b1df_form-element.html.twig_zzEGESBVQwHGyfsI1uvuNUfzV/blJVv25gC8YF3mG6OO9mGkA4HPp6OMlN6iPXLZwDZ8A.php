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

/* themes/contrib/bootstrap_barrio/templates/form/form-element.html.twig */
class __TwigTemplate_25db38693fae79a9835f6d3a45122e73 extends Template
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
        $__internal_ad96c2d8979d8d23860453e7c5eb1520->enter($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "themes/contrib/bootstrap_barrio/templates/form/form-element.html.twig"));

        // line 47
        echo "
";
        // line 49
        $context["label_attributes"] = ((($context["label_attributes"] ?? null)) ? (($context["label_attributes"] ?? null)) : ($this->extensions['Drupal\Core\Template\TwigExtension']->createAttribute()));
        // line 51
        echo "
";
        // line 52
        if ((($context["type"] ?? null) == "checkbox")) {
            // line 53
            echo "  ";
            $context["wrapperclass"] = (((($context["checkbox_style"] ?? null) != "form-button")) ? ("form-check") : (""));
            // line 54
            echo "  ";
            $context["labelclass"] = (((($context["checkbox_style"] ?? null) == "form-button")) ? ("btn btn-outline-primary") : ("form-check-label"));
            // line 55
            echo "  ";
            $context["inputclass"] = (((($context["checkbox_style"] ?? null) == "form-button")) ? ("btn-check") : ("form-check-input"));
        }
        // line 57
        echo "
";
        // line 58
        if ((($context["type"] ?? null) == "radio")) {
            // line 59
            echo "  ";
            $context["wrapperclass"] = (((($context["checkbox_style"] ?? null) != "form-button")) ? ("form-check") : (""));
            // line 60
            echo "  ";
            $context["labelclass"] = (((($context["checkbox_style"] ?? null) == "form-button")) ? ("btn btn-outline-primary") : ("form-check-label"));
            // line 61
            echo "  ";
            $context["inputclass"] = (((($context["checkbox_style"] ?? null) == "form-button")) ? ("btn-check") : ("form-check-input"));
        }
        // line 63
        echo "
";
        // line 65
        $context["classes"] = ["js-form-item", ("js-form-type-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 67
($context["type"] ?? null), 67, $this->source))), ((twig_in_filter(        // line 68
($context["type"] ?? null), ["checkbox", "radio"])) ? (\Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["type"] ?? null), 68, $this->source))) : (("form-type-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["type"] ?? null), 68, $this->source))))), ((twig_in_filter(        // line 69
($context["type"] ?? null), ["checkbox", "radio"])) ? (($context["wrapperclass"] ?? null)) : ("")), (((        // line 70
($context["checkbox_style"] ?? null) == "form-switch")) ? ("form-switch") : ("")), ((twig_in_filter(        // line 71
($context["type"] ?? null), ["checkbox"])) ? ("mb-3") : ("")), ("js-form-item-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 72
($context["name"] ?? null), 72, $this->source))), ("form-item-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 73
($context["name"] ?? null), 73, $this->source))), ((!twig_in_filter(        // line 74
($context["title_display"] ?? null), ["after", "before"])) ? ("form-no-label") : ("")), (((        // line 75
($context["disabled"] ?? null) == "disabled")) ? ("disabled") : ("")), ((        // line 76
($context["errors"] ?? null)) ? ("has-error") : (""))];
        // line 79
        echo "
";
        // line 80
        if ((($context["title_display"] ?? null) == "invisible")) {
            // line 81
            echo "  ";
            if (array_key_exists("labelclass", $context)) {
                // line 82
                echo "    ";
                $context["labelclass"] = ($this->sandbox->ensureToStringAllowed(($context["labelclass"] ?? null), 82, $this->source) . " visually-hidden");
                // line 83
                echo "  ";
            } else {
                // line 84
                echo "    ";
                $context["labelclass"] = "visually-hidden";
                // line 85
                echo "  ";
            }
        }
        // line 87
        echo "
";
        // line 89
        $context["description_classes"] = ["description", "text-muted", (((        // line 92
($context["description_display"] ?? null) == "invisible")) ? ("visually-hidden") : (""))];
        // line 95
        if (twig_in_filter(($context["type"] ?? null), ["checkbox", "radio"])) {
            // line 96
            echo "  <div";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["classes"] ?? null)], "method", false, false, true, 96), 96, $this->source), "html", null, true);
            echo ">
    ";
            // line 97
            if ( !twig_test_empty(($context["prefix"] ?? null))) {
                // line 98
                echo "      <span class=\"field-prefix\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["prefix"] ?? null), 98, $this->source), "html", null, true);
                echo "</span>
    ";
            }
            // line 100
            echo "    ";
            if (((($context["description_display"] ?? null) == "before") && twig_get_attribute($this->env, $this->source, ($context["description"] ?? null), "content", [], "any", false, false, true, 100))) {
                // line 101
                echo "      <div";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["description"] ?? null), "attributes", [], "any", false, false, true, 101), 101, $this->source), "html", null, true);
                echo ">
        ";
                // line 102
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["description"] ?? null), "content", [], "any", false, false, true, 102), 102, $this->source), "html", null, true);
                echo "
      </div>
    ";
            }
            // line 105
            echo "    ";
            if (twig_in_filter(($context["label_display"] ?? null), ["before", "invisible"])) {
                // line 106
                echo "      <label ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["label_attributes"] ?? null), "addClass", [($context["labelclass"] ?? null)], "method", false, false, true, 106), "setAttribute", ["for", twig_get_attribute($this->env, $this->source, ($context["input_attributes"] ?? null), "id", [], "any", false, false, true, 106)], "method", false, false, true, 106), 106, $this->source), "html", null, true);
                echo ">
        ";
                // line 107
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["input_title"] ?? null), 107, $this->source));
                echo "
      </label>
    ";
            }
            // line 110
            echo "    ";
            if ((($context["checkbox_style"] ?? null) == "form-button")) {
                // line 111
                echo "      <input";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["input_attributes"] ?? null), "addClass", [($context["inputclass"] ?? null)], "method", false, false, true, 111), "setAttribute", ["autocomplete", "off"], "method", false, false, true, 111), 111, $this->source), "html", null, true);
                echo ">
    ";
            } else {
                // line 113
                echo "      <input";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["input_attributes"] ?? null), "addClass", [($context["inputclass"] ?? null)], "method", false, false, true, 113), 113, $this->source), "html", null, true);
                echo ">
    ";
            }
            // line 115
            echo "    ";
            if ((($context["label_display"] ?? null) == "after")) {
                // line 116
                echo "      <label ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["label_attributes"] ?? null), "addClass", [($context["labelclass"] ?? null)], "method", false, false, true, 116), "setAttribute", ["for", twig_get_attribute($this->env, $this->source, ($context["input_attributes"] ?? null), "id", [], "any", false, false, true, 116)], "method", false, false, true, 116), 116, $this->source), "html", null, true);
                echo ">
        ";
                // line 117
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["input_title"] ?? null), 117, $this->source));
                echo "
      </label>
    ";
            }
            // line 120
            echo "    ";
            if ( !twig_test_empty(($context["suffix"] ?? null))) {
                // line 121
                echo "      <span class=\"field-suffix\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["suffix"] ?? null), 121, $this->source), "html", null, true);
                echo "</span>
    ";
            }
            // line 123
            echo "    ";
            if (($context["errors"] ?? null)) {
                // line 124
                echo "      <div class=\"invalid-feedback form-item--error-message\">
        ";
                // line 125
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["errors"] ?? null), 125, $this->source), "html", null, true);
                echo "
      </div>
    ";
            }
            // line 128
            echo "    ";
            if ((twig_in_filter(($context["description_display"] ?? null), ["after", "invisible"]) && twig_get_attribute($this->env, $this->source, ($context["description"] ?? null), "content", [], "any", false, false, true, 128))) {
                // line 129
                echo "      <small";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["description"] ?? null), "attributes", [], "any", false, false, true, 129), "addClass", [($context["description_classes"] ?? null)], "method", false, false, true, 129), 129, $this->source), "html", null, true);
                echo ">
        ";
                // line 130
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["description"] ?? null), "content", [], "any", false, false, true, 130), 130, $this->source), "html", null, true);
                echo "
      </small>
    ";
            }
            // line 133
            echo "  </div>
";
        } else {
            // line 135
            echo "  <div";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["classes"] ?? null), "mb-3", ((($context["float_label"] ?? null)) ? ("form-floating") : (""))], "method", false, false, true, 135), 135, $this->source), "html", null, true);
            echo ">
    ";
            // line 136
            if (twig_in_filter(($context["label_display"] ?? null), ["before", "invisible"])) {
                // line 137
                echo "      ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 137, $this->source), "html", null, true);
                echo "
    ";
            }
            // line 139
            echo "    ";
            if (( !twig_test_empty(($context["prefix"] ?? null)) ||  !twig_test_empty(($context["suffix"] ?? null)))) {
                // line 140
                echo "      <div class=\"input-group";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["errors"] ?? null)) ? (" is-invalid") : ("")));
                echo "\">
    ";
            }
            // line 142
            echo "    ";
            if ( !twig_test_empty(($context["prefix"] ?? null))) {
                // line 143
                echo "      <div class=\"input-group-prepend\">
        <span class=\"field-prefix input-group-text\">";
                // line 144
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["prefix"] ?? null), 144, $this->source), "html", null, true);
                echo "</span>
      </div>
    ";
            }
            // line 147
            echo "    ";
            if (((($context["description_display"] ?? null) == "before") && twig_get_attribute($this->env, $this->source, ($context["description"] ?? null), "content", [], "any", false, false, true, 147))) {
                // line 148
                echo "      <div";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["description"] ?? null), "attributes", [], "any", false, false, true, 148), 148, $this->source), "html", null, true);
                echo ">
        ";
                // line 149
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["description"] ?? null), "content", [], "any", false, false, true, 149), 149, $this->source), "html", null, true);
                echo "
      </div>
    ";
            }
            // line 152
            echo "    ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["children"] ?? null), 152, $this->source), "html", null, true);
            echo "
    ";
            // line 153
            if ( !twig_test_empty(($context["suffix"] ?? null))) {
                // line 154
                echo "      <div class=\"input-group-append\">
        <span class=\"field-suffix input-group-text\">";
                // line 155
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["suffix"] ?? null), 155, $this->source), "html", null, true);
                echo "</span>
      </div>
    ";
            }
            // line 158
            echo "    ";
            if (( !twig_test_empty(($context["prefix"] ?? null)) ||  !twig_test_empty(($context["suffix"] ?? null)))) {
                // line 159
                echo "      </div>
    ";
            }
            // line 161
            echo "    ";
            if ((($context["label_display"] ?? null) == "after")) {
                // line 162
                echo "      ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 162, $this->source), "html", null, true);
                echo "
    ";
            }
            // line 164
            echo "    ";
            if (($context["errors"] ?? null)) {
                // line 165
                echo "      <div class=\"invalid-feedback form-item--error-message\">
        ";
                // line 166
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["errors"] ?? null), 166, $this->source), "html", null, true);
                echo "
      </div>
    ";
            }
            // line 169
            echo "    ";
            if ((twig_in_filter(($context["description_display"] ?? null), ["after", "invisible"]) && twig_get_attribute($this->env, $this->source, ($context["description"] ?? null), "content", [], "any", false, false, true, 169))) {
                // line 170
                echo "      <small";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["description"] ?? null), "attributes", [], "any", false, false, true, 170), "addClass", [($context["description_classes"] ?? null)], "method", false, false, true, 170), 170, $this->source), "html", null, true);
                echo ">
        ";
                // line 171
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["description"] ?? null), "content", [], "any", false, false, true, 171), 171, $this->source), "html", null, true);
                echo "
      </small>
    ";
            }
            // line 174
            echo "  </div>
";
        }
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["type", "checkbox_style", "name", "title_display", "disabled", "errors", "description_display", "attributes", "prefix", "description", "label_display", "input_attributes", "input_title", "suffix", "float_label", "label", "children"]);        
        $__internal_ad96c2d8979d8d23860453e7c5eb1520->leave($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "themes/contrib/bootstrap_barrio/templates/form/form-element.html.twig";
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
        return array (  336 => 174,  330 => 171,  325 => 170,  322 => 169,  316 => 166,  313 => 165,  310 => 164,  304 => 162,  301 => 161,  297 => 159,  294 => 158,  288 => 155,  285 => 154,  283 => 153,  278 => 152,  272 => 149,  267 => 148,  264 => 147,  258 => 144,  255 => 143,  252 => 142,  246 => 140,  243 => 139,  237 => 137,  235 => 136,  230 => 135,  226 => 133,  220 => 130,  215 => 129,  212 => 128,  206 => 125,  203 => 124,  200 => 123,  194 => 121,  191 => 120,  185 => 117,  180 => 116,  177 => 115,  171 => 113,  165 => 111,  162 => 110,  156 => 107,  151 => 106,  148 => 105,  142 => 102,  137 => 101,  134 => 100,  128 => 98,  126 => 97,  121 => 96,  119 => 95,  117 => 92,  116 => 89,  113 => 87,  109 => 85,  106 => 84,  103 => 83,  100 => 82,  97 => 81,  95 => 80,  92 => 79,  90 => 76,  89 => 75,  88 => 74,  87 => 73,  86 => 72,  85 => 71,  84 => 70,  83 => 69,  82 => 68,  81 => 67,  80 => 65,  77 => 63,  73 => 61,  70 => 60,  67 => 59,  65 => 58,  62 => 57,  58 => 55,  55 => 54,  52 => 53,  50 => 52,  47 => 51,  45 => 49,  42 => 47,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Theme override for a form element.
 *
 * Available variables:
 * - attributes: HTML attributes for the containing element.
 * - errors: (optional) Any errors for this form element, may not be set.
 * - prefix: (optional) The form element prefix, may not be set.
 * - suffix: (optional) The form element suffix, may not be set.
 * - required: The required marker, or empty if the associated form element is
 *   not required.
 * - type: The type of the element.
 * - name: The name of the element.
 * - label: A rendered label element.
 * - label_display: Label display setting. It can have these values:
 *   - before: The label is output before the element. This is the default.
 *     The label includes the #title and the required marker, if #required.
 *   - after: The label is output after the element. For example, this is used
 *     for radio and checkbox #type elements. If the #title is empty but the
 *     field is #required, the label will contain only the required marker.
 *   - invisible: Labels are critical for screen readers to enable them to
 *     properly navigate through forms but can be visually distracting. This
 *     property hides the label for everyone except screen readers.
 *   - attribute: Set the title attribute on the element to create a tooltip but
 *     output no label element. This is supported only for checkboxes and radios
 *     in \\Drupal\\Core\\Render\\Element\\CompositeFormElementTrait::preRenderCompositeFormElement().
 *     It is used where a visual label is not needed, such as a table of
 *     checkboxes where the row and column provide the context. The tooltip will
 *     include the title and required marker.
 * - description: (optional) A list of description properties containing:
 *    - content: A description of the form element, may not be set.
 *    - attributes: (optional) A list of HTML attributes to apply to the
 *      description content wrapper. Will only be set when description is set.
 * - description_display: Description display setting. It can have these values:
 *   - before: The description is output before the element.
 *   - after: The description is output after the element. This is the default
 *     value.
 *   - invisible: The description is output after the element, hidden visually
 *     but available to screen readers.
 * - disabled: True if the element is disabled.
 * - title_display: Title display setting.
 *
 * @see template_preprocess_form_element()
 */
#}

{%
  set label_attributes = label_attributes ? label_attributes : create_attribute()
%}

{% if type == 'checkbox' %}
  {% set wrapperclass = checkbox_style != 'form-button' ? \"form-check\" %}
  {% set labelclass = checkbox_style == 'form-button' ? 'btn btn-outline-primary' : \"form-check-label\"  %}
  {% set inputclass = checkbox_style == 'form-button' ? 'btn-check' : \"form-check-input\" %}
{% endif %}

{% if type == 'radio' %}
  {% set wrapperclass = checkbox_style != 'form-button' ? \"form-check\" %}
  {% set labelclass = checkbox_style == 'form-button' ? 'btn btn-outline-primary' : \"form-check-label\"  %}
  {% set inputclass = checkbox_style == 'form-button' ? 'btn-check' : \"form-check-input\" %}
{% endif %}

{%
  set classes = [
    'js-form-item',
    'js-form-type-' ~ type|clean_class,
    type in ['checkbox', 'radio'] ? type|clean_class : 'form-type-' ~ type|clean_class,
    type in ['checkbox', 'radio'] ? wrapperclass,
    checkbox_style == 'form-switch' ? 'form-switch' : '',
    type in ['checkbox'] ? 'mb-3',
    'js-form-item-' ~ name|clean_class,
    'form-item-' ~ name|clean_class,
    title_display not in ['after', 'before'] ? 'form-no-label',
    disabled == 'disabled' ? 'disabled',
    errors ? 'has-error',
  ]
%}

{% if title_display == 'invisible' %}
  {% if labelclass is defined %}
    {% set labelclass = labelclass ~ ' visually-hidden' %}
  {% else %}
    {% set labelclass = 'visually-hidden' %}
  {% endif %}
{% endif %}

{%
  set description_classes = [
    'description',
\t  'text-muted',
    description_display == 'invisible' ? 'visually-hidden',
  ]
%}
{% if type in ['checkbox', 'radio'] %}
  <div{{ attributes.addClass(classes) }}>
    {% if prefix is not empty %}
      <span class=\"field-prefix\">{{ prefix }}</span>
    {% endif %}
    {% if description_display == 'before' and description.content %}
      <div{{ description.attributes }}>
        {{ description.content }}
      </div>
    {% endif %}
    {% if label_display in ['before', 'invisible'] %}
      <label {{ label_attributes.addClass(labelclass).setAttribute('for', input_attributes.id) }}>
        {{ input_title | raw }}
      </label>
    {% endif %}
    {% if checkbox_style == 'form-button' %}
      <input{{ input_attributes.addClass(inputclass).setAttribute('autocomplete', 'off') }}>
    {% else %}
      <input{{ input_attributes.addClass(inputclass) }}>
    {% endif %}
    {% if label_display == 'after' %}
      <label {{ label_attributes.addClass(labelclass).setAttribute('for', input_attributes.id) }}>
        {{ input_title | raw }}
      </label>
    {% endif %}
    {% if suffix is not empty %}
      <span class=\"field-suffix\">{{ suffix }}</span>
    {% endif %}
    {% if errors %}
      <div class=\"invalid-feedback form-item--error-message\">
        {{ errors }}
      </div>
    {% endif %}
    {% if description_display in ['after', 'invisible'] and description.content %}
      <small{{ description.attributes.addClass(description_classes) }}>
        {{ description.content }}
      </small>
    {% endif %}
  </div>
{% else %}
  <div{{ attributes.addClass(classes, 'mb-3', float_label ? 'form-floating') }}>
    {% if label_display in ['before', 'invisible'] %}
      {{ label }}
    {% endif %}
    {% if (prefix is not empty) or (suffix is not empty) %}
      <div class=\"input-group{{ errors ? ' is-invalid' : '' }}\">
    {% endif %}
    {% if prefix is not empty %}
      <div class=\"input-group-prepend\">
        <span class=\"field-prefix input-group-text\">{{ prefix }}</span>
      </div>
    {% endif %}
    {% if description_display == 'before' and description.content %}
      <div{{ description.attributes }}>
        {{ description.content }}
      </div>
    {% endif %}
    {{ children }}
    {% if suffix is not empty %}
      <div class=\"input-group-append\">
        <span class=\"field-suffix input-group-text\">{{ suffix }}</span>
      </div>
    {% endif %}
    {% if (prefix is not empty) or (suffix is not empty) %}
      </div>
    {% endif %}
    {% if label_display == 'after' %}
      {{ label }}
    {% endif %}
    {% if errors %}
      <div class=\"invalid-feedback form-item--error-message\">
        {{ errors }}
      </div>
    {% endif %}
    {% if description_display in ['after', 'invisible'] and description.content %}
      <small{{ description.attributes.addClass(description_classes) }}>
        {{ description.content }}
      </small>
    {% endif %}
  </div>
{% endif %}
", "themes/contrib/bootstrap_barrio/templates/form/form-element.html.twig", "/var/www/html/web/themes/contrib/bootstrap_barrio/templates/form/form-element.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 49, "if" => 52);
        static $filters = array("clean_class" => 67, "escape" => 96, "raw" => 107);
        static $functions = array("create_attribute" => 49);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['clean_class', 'escape', 'raw'],
                ['create_attribute']
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
