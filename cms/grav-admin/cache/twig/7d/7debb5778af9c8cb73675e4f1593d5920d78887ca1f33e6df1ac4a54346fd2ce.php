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

/* default-admin.html.twig */
class __TwigTemplate_f88ae12b5b428018d7d3a8e2b4fb6a55f41f47f2366e47606d5512f7870a23d2 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'content' => [$this, 'block_content'],
            'titlebar' => [$this, 'block_titlebar'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 3
        $context["scope"] = ((($context["scope"] ?? null)) ? (($context["scope"] ?? null)) : ("no_scope"));
        // line 4
        $context["service"] = ((($context["service"] ?? null)) ? (($context["service"] ?? null)) : ("no_service"));
        // line 5
        $context["context"] = ((($context["context"] ?? null)) ? (($context["context"] ?? null)) : ("no_context"));
        // line 7
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "plugin://core-service-manager/assets/ajax_action.js"], "method");
        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "default-admin.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 9
    public function block_content($context, array $blocks = [])
    {
        // line 10
        echo "    ";
        echo $this->getAttribute(($context["page"] ?? null), "content", []);
        echo "
";
    }

    // line 14
    public function block_titlebar($context, array $blocks = [])
    {
        // line 15
        echo "    <div class=\"button-bar\">
        ";
        // line 16
        echo $this->env->getExtension('Grav\Plugin\ServiceTwigExtensions')->service_render(($context["service"] ?? null), ($context["scope"] ?? null), "first");
        echo "
        ";
        // line 17
        echo $this->env->getExtension('Grav\Plugin\ServiceTwigExtensions')->service_render("action", ($context["scope"] ?? null), "first");
        echo "

        ";
        // line 19
        echo $this->env->getExtension('Grav\Plugin\ServiceTwigExtensions')->service_render(($context["service"] ?? null), ($context["scope"] ?? null), "before:parent");
        echo "
        ";
        // line 20
        echo $this->env->getExtension('Grav\Plugin\ServiceTwigExtensions')->service_render("action", ($context["scope"] ?? null), "before:parent");
        echo "
        
        ";
        // line 22
        echo $this->env->getExtension('Grav\Plugin\ServiceTwigExtensions')->service_render(($context["service"] ?? null), ($context["scope"] ?? null), "after:parent");
        echo "
        ";
        // line 23
        echo $this->env->getExtension('Grav\Plugin\ServiceTwigExtensions')->service_render("action", ($context["scope"] ?? null), "after:parent");
        echo "

        ";
        // line 25
        echo $this->env->getExtension('Grav\Plugin\ServiceTwigExtensions')->service_render(($context["service"] ?? null), ($context["scope"] ?? null), "last");
        echo "
        ";
        // line 26
        echo $this->env->getExtension('Grav\Plugin\ServiceTwigExtensions')->service_render("action", ($context["scope"] ?? null), "last");
        echo "
    </div>

    <h1><i class=\"fa fa-fw ";
        // line 29
        ((($context["icon"] ?? null)) ? (print (twig_escape_filter($this->env, ($context["icon"] ?? null), "html", null, true))) : (print ("fa-list")));
        echo "\"></i> ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["page"] ?? null), "title", []), "html", null, true);
        echo "</h1>
";
    }

    public function getTemplateName()
    {
        return "default-admin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 29,  96 => 26,  92 => 25,  87 => 23,  83 => 22,  78 => 20,  74 => 19,  69 => 17,  65 => 16,  62 => 15,  59 => 14,  52 => 10,  49 => 9,  44 => 1,  42 => 7,  40 => 5,  38 => 4,  36 => 3,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'partials/base.html.twig' %}

{% set scope = scope ? scope : 'no_scope' %}
{% set service = service ? service : 'no_service' %}
{% set context = context ? context : \"no_context\" %}

{% do assets.addJs('plugin://core-service-manager/assets/ajax_action.js') %}

{% block content %}
    {{ page.content | raw }}
{% endblock %}


{% block titlebar %}
    <div class=\"button-bar\">
        {{ service_render(service, scope, 'first') | raw }}
        {{ service_render(\"action\", scope, 'first') | raw }}

        {{ service_render(service, scope, 'before:parent') | raw }}
        {{ service_render(\"action\", scope, 'before:parent') | raw }}
        
        {{ service_render(service, scope, 'after:parent') | raw }}
        {{ service_render(\"action\", scope, 'after:parent') | raw }}

        {{ service_render(service, scope, 'last') | raw }}
        {{ service_render(\"action\", scope, 'last') | raw }}
    </div>

    <h1><i class=\"fa fa-fw {{ icon ? icon : 'fa-list' }}\"></i> {{ page.title }}</h1>
{% endblock %}
", "default-admin.html.twig", "/Users/mac/Desktop/IntengineWebsite/cms/grav-admin/user/plugins/core-service-manager/admin/templates-twelvetone/default-admin.html.twig");
    }
}
