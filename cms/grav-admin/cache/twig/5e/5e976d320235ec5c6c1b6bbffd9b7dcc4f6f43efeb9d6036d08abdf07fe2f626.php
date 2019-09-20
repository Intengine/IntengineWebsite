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

/* partials/page_head.html.twig */
class __TwigTemplate_b47ff31a7c0c8b1d477d5048b7e2f9ce3f8bb80c928f8302c8433be89b34166c extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'head_title' => [$this, 'block_head_title'],
            'head_application' => [$this, 'block_head_application'],
            'assets' => [$this, 'block_assets'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@nucleus/page_head.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("@nucleus/page_head.html.twig", "partials/page_head.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        $this->env->getExtension('Phive\Twig\Extensions\Deferred\DeferredExtension')->resolve($this, $context, $blocks);
    }

    // line 3
    public function block_head_title($context, array $blocks = [])
    {
        // line 4
        echo "    <meta charset=\"utf-8\" />
    <title>";
        // line 5
        if ($this->getAttribute(($context["header"] ?? null), "title", [])) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["header"] ?? null), "title", []), "html", null, true);
            echo " | ";
        }
        echo twig_escape_filter($this->env, $this->getAttribute(($context["site"] ?? null), "title", []), "html", null, true);
        echo "</title>
    ";
        // line 6
        $this->loadTemplate("partials/metadata.html.twig", "partials/page_head.html.twig", 6)->display($context);
        // line 7
        echo "    <link rel=\"canonical\" href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["page"] ?? null), "url", [0 => true, 1 => true], "method"), "html", null, true);
        echo "\" />
    ";
        // line 8
        if ($this->getAttribute(($context["header"] ?? null), "robots", [])) {
            // line 9
            echo "        <meta name=\"robots\" content=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["header"] ?? null), "robots", []), "html", null, true);
            echo "\">
    ";
        }
    }

    // line 13
    public function block_head_application($context, array $blocks = [])
    {
        // line 14
        echo "    ";
        $this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "platform", []), "finalize", []);
        // line 15
        echo "
    ";
        // line 16
        $this->displayBlock('assets', $context, $blocks);
        // line 20
        echo "
";
    }

    public function block_assets($context, array $blocks = array())
    {
        $this->env->getExtension('Phive\Twig\Extensions\Deferred\DeferredExtension')->defer($this, 'assets');
    }

    // line 16
    public function block_assets_deferred($context, array $blocks = array())
    {
        // line 17
        echo "        ";
        echo $this->getAttribute(($context["assets"] ?? null), "css", [], "method");
        echo "
        ";
        // line 18
        echo $this->getAttribute(($context["assets"] ?? null), "js", [], "method");
        echo "
    ";
        $this->env->getExtension('Phive\Twig\Extensions\Deferred\DeferredExtension')->resolve($this, $context, $blocks);
    }

    public function getTemplateName()
    {
        return "partials/page_head.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 18,  97 => 17,  94 => 16,  84 => 20,  82 => 16,  79 => 15,  76 => 14,  73 => 13,  65 => 9,  63 => 8,  58 => 7,  56 => 6,  48 => 5,  45 => 4,  42 => 3,  31 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"@nucleus/page_head.html.twig\" %}

{% block head_title %}
    <meta charset=\"utf-8\" />
    <title>{% if header.title %}{{ header.title }} | {% endif %}{{ site.title }}</title>
    {% include 'partials/metadata.html.twig' %}
    <link rel=\"canonical\" href=\"{{ page.url(true, true) }}\" />
    {% if header.robots %}
        <meta name=\"robots\" content=\"{{ header.robots }}\">
    {% endif %}
{% endblock %}

{% block head_application %}
    {% do gantry.platform.finalize %}

    {% block assets deferred %}
        {{ assets.css()|raw }}
        {{ assets.js()|raw }}
    {% endblock %}

{% endblock %}", "partials/page_head.html.twig", "/Users/sylwesterpilarz/Desktop/IntengineWebsite/cms/grav-admin/user/plugins/gantry5/engines/nucleus/templates/partials/page_head.html.twig");
    }
}
