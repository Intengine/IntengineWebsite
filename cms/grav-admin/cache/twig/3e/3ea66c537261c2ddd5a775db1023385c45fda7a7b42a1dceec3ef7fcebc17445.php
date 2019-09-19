<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* modal/input.html.twig */
class __TwigTemplate_0d0b518b327f0033e03b19d6aab2a117b46b1814e53cd437296194f52d988b40 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 7
        echo "
";
        // line 8
        $context["title"] = ((($context["title"] ?? null)) ? (($context["title"] ?? null)) : ("Input"));
        // line 9
        $context["subtitle"] = ((($context["subtitle"] ?? null)) ? (($context["subtitle"] ?? null)) : ("Enter value?"));
        // line 10
        $context["message"] = ((($context["message"] ?? null)) ? (($context["message"] ?? null)) : (null));
        // line 11
        echo "
<div onsubmit=\"return false\" class=\"remodal\" data-remodal-id=\"input\" data-remodal-options=\"hashTracking: false\">
    <form>
        ";
        // line 14
        if (($context["title"] ?? null)) {
            // line 15
            echo "            <h1 name=\"title\">";
            echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
            echo "</h1>
        ";
        }
        // line 17
        echo "        ";
        if (($context["subtitle"] ?? null)) {
            // line 18
            echo "            <p name='subtitle' class=\"bigger\">
                ";
            // line 19
            if (($context["context"] ?? null)) {
                // line 20
                echo "                    <strong>";
                echo ($context["subtitle"] ?? null);
                echo "</strong>
                ";
            }
            // line 22
            echo "            </p>
        ";
        }
        // line 24
        echo "        ";
        if (($context["message"] ?? null)) {
            // line 25
            echo "            <p name='message' class=\"bigger\">
                ";
            // line 26
            echo ($context["message"] ?? null);
            echo "
            </p>
        ";
        }
        // line 29
        echo "        <p>
            <input name=\"input\" type=\"text\" autofocus/>
        </p>
        <div class=\"button-bar\">
            <button name=\"cancel\" class=\"button secondary\"><i
                        class=\"fa fa-fw fa-close\"></i> ";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.CANCEL"), "html", null, true);
        echo "</button>
            <button name=\"continue\" class=\"button\"><i
                        class=\"fa fa-fw fa-check\"></i> ";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.CONTINUE"), "html", null, true);
        echo "</button>
        </div>
    </form>
</div>

<script>
    /**
     * 
     * @param opts {title,subtitle,value,callback}
     * @private
     */
    function _doInput(opts) {
        const args = Array.prototype.slice.call(arguments, 1);
        const modal = \$.remodal.lookup[\$('[data-remodal-id=input]').data('remodal')];
        modal.open();

        \$modal = modal.\$model;
        if (opts.title) {
            \$('[name=title]', \$modal).text(opts.title);
        }
        if (opts.subtitle) {
            \$('[name=subtitle]', \$modal).html(opts.subtitle);
        }
        if (opts.value) {
            \$('[name=input]', \$modal).val(opts.value);
        }

        // Remove default button handlers
        \$(document).off('click', '[data-remodal-id=input] .button');
        // Install new button handlers
        \$(document).on('click', '[data-remodal-id=input] .button', function (e) {
            modal.close();
            switch (e.target.name) {
                case 'continue':
                    if (opts.callback) {
                        opts.callback.call(null, \$('[name=input]', \$modal).val());
                    }
                    break;
                case 'cancel':
                    break;
            }
        });
    }
</script>";
    }

    public function getTemplateName()
    {
        return "modal/input.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 36,  89 => 34,  82 => 29,  76 => 26,  73 => 25,  70 => 24,  66 => 22,  60 => 20,  58 => 19,  55 => 18,  52 => 17,  46 => 15,  44 => 14,  39 => 11,  37 => 10,  35 => 9,  33 => 8,  30 => 7,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{#
A simple text input dialog.
title: The title.
subtitle: The HTML subtitle.
message:  The HTML message to display in the main content area.
#}

{% set title = title ?: \"Input\" %}
{% set subtitle = subtitle ?: \"Enter value?\" %}
{% set message = message ?: null %}

<div onsubmit=\"return false\" class=\"remodal\" data-remodal-id=\"input\" data-remodal-options=\"hashTracking: false\">
    <form>
        {% if title %}
            <h1 name=\"title\">{{ title }}</h1>
        {% endif %}
        {% if subtitle %}
            <p name='subtitle' class=\"bigger\">
                {% if context %}
                    <strong>{{ subtitle | raw }}</strong>
                {% endif %}
            </p>
        {% endif %}
        {% if message %}
            <p name='message' class=\"bigger\">
                {{ message | raw }}
            </p>
        {% endif %}
        <p>
            <input name=\"input\" type=\"text\" autofocus/>
        </p>
        <div class=\"button-bar\">
            <button name=\"cancel\" class=\"button secondary\"><i
                        class=\"fa fa-fw fa-close\"></i> {{ \"PLUGIN_ADMIN.CANCEL\"|tu }}</button>
            <button name=\"continue\" class=\"button\"><i
                        class=\"fa fa-fw fa-check\"></i> {{ \"PLUGIN_ADMIN.CONTINUE\"|tu }}</button>
        </div>
    </form>
</div>

<script>
    /**
     * 
     * @param opts {title,subtitle,value,callback}
     * @private
     */
    function _doInput(opts) {
        const args = Array.prototype.slice.call(arguments, 1);
        const modal = \$.remodal.lookup[\$('[data-remodal-id=input]').data('remodal')];
        modal.open();

        \$modal = modal.\$model;
        if (opts.title) {
            \$('[name=title]', \$modal).text(opts.title);
        }
        if (opts.subtitle) {
            \$('[name=subtitle]', \$modal).html(opts.subtitle);
        }
        if (opts.value) {
            \$('[name=input]', \$modal).val(opts.value);
        }

        // Remove default button handlers
        \$(document).off('click', '[data-remodal-id=input] .button');
        // Install new button handlers
        \$(document).on('click', '[data-remodal-id=input] .button', function (e) {
            modal.close();
            switch (e.target.name) {
                case 'continue':
                    if (opts.callback) {
                        opts.callback.call(null, \$('[name=input]', \$modal).val());
                    }
                    break;
                case 'cancel':
                    break;
            }
        });
    }
</script>", "modal/input.html.twig", "/Users/mac/Desktop/IntengineWebsite/cms/grav-admin/user/plugins/editor/admin/templates/modal/input.html.twig");
    }
}
