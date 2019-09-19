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

/* editor-list.html.twig */
class __TwigTemplate_e2a75aa8d0fdf5db3d328f2d917517742b6ef145a10df98c20d652c367ad0fe8 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'content' => [$this, 'block_content'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "default-admin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 3
        $context["scope"] = ((($context["scope"] ?? null)) ? (($context["scope"] ?? null)) : ("editor-list"));
        // line 4
        $context["service"] = ((($context["service"] ?? null)) ? (($context["service"] ?? null)) : ("renderer"));
        // line 5
        $context["context"] = ((($context["context"] ?? null)) ? (($context["context"] ?? null)) : ("no_context"));
        // line 7
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "plugin://editor/assets/editor.css"], "method");
        // line 8
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "plugin://admin-power-tools/assets/fast-filter.js"], "method");
        // line 1
        $this->parent = $this->loadTemplate("default-admin.html.twig", "editor-list.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 11
    public function block_stylesheets($context, array $blocks = [])
    {
        // line 12
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <style>
        .admin-block {
            overflow: auto;
        }
    </style>
";
    }

    // line 21
    public function block_javascripts($context, array $blocks = [])
    {
        // line 22
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script>
        // Prevent page from caching back() and forward()
        //TODO Is this FireFox only?
        // window.onunload = function () {
        // };
    </script>
";
    }

    // line 32
    public function block_content($context, array $blocks = [])
    {
        // line 33
        echo "    <div class=\"editor\">
        ";
        // line 34
        $this->displayParentBlock("content", $context, $blocks);
        echo "
    </div>
";
    }

    // line 39
    public function block_body($context, array $blocks = [])
    {
        // line 40
        echo "    <div class=\"editor-wrapper\">
        ";
        // line 41
        $this->displayParentBlock("body", $context, $blocks);
        echo "
    </div>
";
    }

    public function getTemplateName()
    {
        return "editor-list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 41,  100 => 40,  97 => 39,  90 => 34,  87 => 33,  84 => 32,  71 => 22,  68 => 21,  56 => 12,  53 => 11,  48 => 1,  46 => 8,  44 => 7,  42 => 5,  40 => 4,  38 => 3,  32 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'default-admin.html.twig' %}

{% set scope = scope ? scope : 'editor-list' %}
{% set service = service ? service : 'renderer' %}
{% set context = context ? context : \"no_context\" %}

{% do assets.addCss('plugin://editor/assets/editor.css') %}
{% do assets.addJs('plugin://admin-power-tools/assets/fast-filter.js') %}


{% block stylesheets %}
    {{ parent() }}
    <style>
        .admin-block {
            overflow: auto;
        }
    </style>
{% endblock %}


{% block javascripts %}
    {{ parent() }}
    <script>
        // Prevent page from caching back() and forward()
        //TODO Is this FireFox only?
        // window.onunload = function () {
        // };
    </script>
{% endblock %}


{% block content %}
    <div class=\"editor\">
        {{ parent() }}
    </div>
{% endblock %}


{% block body %}
    <div class=\"editor-wrapper\">
        {{ parent() }}
    </div>
{% endblock %}", "editor-list.html.twig", "/Users/mac/Desktop/IntengineWebsite/cms/grav-admin/user/plugins/editor/admin/templates/editor-list.html.twig");
    }
}
