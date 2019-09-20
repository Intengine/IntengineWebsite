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

/* @particles/gp_iconblock1.html.twig */
class __TwigTemplate_e6af5e12d898060082637638bb8d83d73530e99a519c402e11d9753b0cfe5a5f extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'particle' => [$this, 'block_particle'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@nucleus/partials/particle.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 3
        ob_start();
        // line 4
        echo "\t<div id=\"";
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "\" class=\"gp_iconblock1 ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "class", []), "html", null, true);
        echo "\">
\t\t";
        // line 5
        if (($this->getAttribute(($context["particle"] ?? null), "heading_title", []) || $this->getAttribute(($context["particle"] ?? null), "heading_desc", []))) {
            // line 6
            echo "\t\t\t<div class=\"gp_heading\">
\t\t\t\t";
            // line 7
            if ($this->getAttribute(($context["particle"] ?? null), "heading_title", [])) {
                // line 8
                echo "\t\t\t\t\t<";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "heading_title_tag", []));
                echo " style=\"margin-top:0;\">";
                echo $this->getAttribute(($context["particle"] ?? null), "heading_title", []);
                echo "</";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "heading_title_tag", []));
                echo ">
\t\t\t\t";
            }
            // line 10
            echo "\t\t\t\t";
            if ($this->getAttribute(($context["particle"] ?? null), "heading_desc", [])) {
                // line 11
                echo "\t\t\t\t\t<div>";
                echo nl2br($this->getAttribute(($context["particle"] ?? null), "heading_desc", []));
                echo "</div>
\t\t\t\t";
            }
            // line 13
            echo "\t\t\t</div>
\t\t";
        }
        $context["containerblock_start"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 17
        $context["containerblock_end"] = ('' === $tmp = "\t</div>
") ? '' : new Markup($tmp, $this->env->getCharset());
        // line 21
        ob_start();
        // line 22
        echo "\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["particle"] ?? null), "gp_items", []));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 23
            echo "\t\t<div class=\"g-block size-";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "columns", []), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "class", []), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "variations", []), "html", null, true);
            echo "\">
\t\t\t<div class=\"gp_content\">
\t\t\t\t";
            // line 25
            if ($this->getAttribute($context["item"], "icon", [])) {
                // line 26
                echo "\t\t\t\t\t<i class=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "icon", []), "html", null, true);
                echo " gp_icon\" style=\"color: ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "icon_color", []));
                echo ";\"></i>
\t\t\t\t";
            }
            // line 28
            echo "\t\t\t\t";
            if ($this->getAttribute($context["item"], "title", [])) {
                // line 29
                echo "\t\t\t\t\t<h4>";
                echo $this->getAttribute($context["item"], "title", []);
                echo "</h4>
\t\t\t\t";
            }
            // line 31
            echo "\t\t\t\t";
            if ($this->getAttribute($context["item"], "description", [])) {
                // line 32
                echo "\t\t\t\t\t<div>";
                echo $this->getAttribute($context["item"], "description", []);
                echo "</div>
\t\t\t\t";
            }
            // line 34
            echo "\t\t\t</div>
\t\t</div>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        $context["gp_contents"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 39
        ob_start();
        // line 40
        echo "\t";
        if ($this->getAttribute(($context["particle"] ?? null), "button_text", [])) {
            // line 41
            echo "\t\t<div class=\"gp_buttons\">
\t\t\t<a href=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "button_url", []));
            echo "\" class=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "button_class", []));
            echo "\">";
            echo $this->getAttribute(($context["particle"] ?? null), "button_text", []);
            echo " </a>
\t\t</div>
\t";
        }
        $context["gp_buttons"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 1
        $this->parent = $this->loadTemplate("@nucleus/partials/particle.html.twig", "@particles/gp_iconblock1.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 47
    public function block_stylesheets($context, array $blocks = [])
    {
        // line 48
        echo "\t<style type=\"text/css\">
\t\t";
        // line 49
        if ($this->getAttribute(($context["particle"] ?? null), "mobile_padding", [])) {
            // line 50
            echo "\t\t\t@media only all and (max-width: 767px) {
\t\t\t\t#";
            // line 51
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo " {
\t\t\t\t\tpadding: ";
            // line 52
            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "mobile_padding", []));
            echo " !important;
\t\t\t\t}
\t\t\t}
\t\t";
        }
        // line 56
        echo "\t\t#";
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo " {
\t\t\t";
        // line 57
        if ($this->getAttribute(($context["particle"] ?? null), "text_color", [])) {
            // line 58
            echo "\t\t\t\tcolor: ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "text_color", []));
            echo ";
\t\t\t";
        }
        // line 60
        echo "\t\t\t";
        if ($this->getAttribute(($context["particle"] ?? null), "padding", [])) {
            // line 61
            echo "\t\t\t\tpadding: ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "padding", []));
            echo ";
\t\t\t";
        }
        // line 63
        echo "\t\t\t";
        if ($this->getAttribute(($context["particle"] ?? null), "font_size", [])) {
            // line 64
            echo "\t\t\t\tfont-size: ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "font_size", []));
            echo ";
\t\t\t";
        }
        // line 66
        echo "\t\t\ttext-align: ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "text_align", []));
        echo ";
\t\t}

\t\t#";
        // line 69
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo " .gp_heading {
\t\t\ttext-align: ";
        // line 70
        echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "heading_text_align", []));
        echo ";
\t\t}
\t\t";
        // line 72
        if ($this->getAttribute(($context["particle"] ?? null), "text_color", [])) {
            // line 73
            echo "\t\t\t#";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo " h4 {
\t\t\t\tcolor: ";
            // line 74
            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "text_color", []));
            echo ";
\t\t\t}
\t\t";
        }
        // line 77
        echo "\t\t#";
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo " .gp_icon {
\t\t\topacity: ";
        // line 78
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["particle"] ?? null), "icon_opacity", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["particle"] ?? null), "icon_opacity", []), "0.6")) : ("0.6")), "html", null, true);
        echo ";
\t\t}
\t</style>
";
    }

    // line 83
    public function block_particle($context, array $blocks = [])
    {
        // line 84
        echo "\t";
        echo twig_escape_filter($this->env, ($context["containerblock_start"] ?? null), "html", null, true);
        echo "
\t\t<div class=\"g-grid\">
\t\t\t";
        // line 86
        if ($this->getAttribute(($context["particle"] ?? null), "gp_items", [])) {
            // line 87
            echo "\t\t\t\t";
            echo twig_escape_filter($this->env, ($context["gp_contents"] ?? null), "html", null, true);
            echo "
\t\t\t";
        }
        // line 89
        echo "\t\t</div>
\t\t";
        // line 90
        echo twig_escape_filter($this->env, ($context["gp_buttons"] ?? null), "html", null, true);
        echo "
\t";
        // line 91
        echo twig_escape_filter($this->env, ($context["containerblock_end"] ?? null), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "@particles/gp_iconblock1.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  276 => 91,  272 => 90,  269 => 89,  263 => 87,  261 => 86,  255 => 84,  252 => 83,  244 => 78,  239 => 77,  233 => 74,  228 => 73,  226 => 72,  221 => 70,  217 => 69,  210 => 66,  204 => 64,  201 => 63,  195 => 61,  192 => 60,  186 => 58,  184 => 57,  179 => 56,  172 => 52,  168 => 51,  165 => 50,  163 => 49,  160 => 48,  157 => 47,  152 => 1,  141 => 42,  138 => 41,  135 => 40,  133 => 39,  124 => 34,  118 => 32,  115 => 31,  109 => 29,  106 => 28,  98 => 26,  96 => 25,  86 => 23,  81 => 22,  79 => 21,  76 => 17,  71 => 13,  65 => 11,  62 => 10,  52 => 8,  50 => 7,  47 => 6,  45 => 5,  38 => 4,  36 => 3,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@nucleus/partials/particle.html.twig' %}

{% set containerblock_start %}
\t<div id=\"{{ id }}\" class=\"gp_iconblock1 {{ particle.class }}\">
\t\t{% if particle.heading_title or particle.heading_desc %}
\t\t\t<div class=\"gp_heading\">
\t\t\t\t{% if particle.heading_title %}
\t\t\t\t\t<{{ particle.heading_title_tag|e }} style=\"margin-top:0;\">{{ particle.heading_title|raw }}</{{ particle.heading_title_tag|e }}>
\t\t\t\t{% endif %}
\t\t\t\t{% if particle.heading_desc %}
\t\t\t\t\t<div>{{ particle.heading_desc|raw|nl2br }}</div>
\t\t\t\t{% endif %}
\t\t\t</div>
\t\t{% endif %}
{% endset %}

{% set containerblock_end %}
\t</div>
{% endset %}

{% set gp_contents %}
\t{% for item in particle.gp_items %}
\t\t<div class=\"g-block size-{{ particle.columns }} {{ item.class }} {{ item.variations }}\">
\t\t\t<div class=\"gp_content\">
\t\t\t\t{% if item.icon %}
\t\t\t\t\t<i class=\"{{ item.icon }} gp_icon\" style=\"color: {{ item.icon_color|e }};\"></i>
\t\t\t\t{% endif %}
\t\t\t\t{% if item.title %}
\t\t\t\t\t<h4>{{ item.title|raw }}</h4>
\t\t\t\t{% endif %}
\t\t\t\t{% if item.description %}
\t\t\t\t\t<div>{{ item.description|raw }}</div>
\t\t\t\t{% endif %}
\t\t\t</div>
\t\t</div>
\t{% endfor %}
{% endset %}

{% set gp_buttons %}
\t{% if particle.button_text %}
\t\t<div class=\"gp_buttons\">
\t\t\t<a href=\"{{ particle.button_url|e }}\" class=\"{{ particle.button_class|e }}\">{{ particle.button_text|raw }} </a>
\t\t</div>
\t{% endif %}
{% endset %}

{% block stylesheets %}
\t<style type=\"text/css\">
\t\t{% if particle.mobile_padding %}
\t\t\t@media only all and (max-width: 767px) {
\t\t\t\t#{{ id }} {
\t\t\t\t\tpadding: {{ particle.mobile_padding|e }} !important;
\t\t\t\t}
\t\t\t}
\t\t{% endif %}
\t\t#{{ id }} {
\t\t\t{% if particle.text_color %}
\t\t\t\tcolor: {{ particle.text_color|e }};
\t\t\t{% endif %}
\t\t\t{% if particle.padding %}
\t\t\t\tpadding: {{ particle.padding|e }};
\t\t\t{% endif %}
\t\t\t{% if particle.font_size %}
\t\t\t\tfont-size: {{ particle.font_size|e }};
\t\t\t{% endif %}
\t\t\ttext-align: {{ particle.text_align|e }};
\t\t}

\t\t#{{ id }} .gp_heading {
\t\t\ttext-align: {{ particle.heading_text_align|e }};
\t\t}
\t\t{% if particle.text_color %}
\t\t\t#{{ id }} h4 {
\t\t\t\tcolor: {{ particle.text_color|e }};
\t\t\t}
\t\t{% endif %}
\t\t#{{ id }} .gp_icon {
\t\t\topacity: {{ particle.icon_opacity|default('0.6') }};
\t\t}
\t</style>
{% endblock %}

{% block particle %}
\t{{ containerblock_start }}
\t\t<div class=\"g-grid\">
\t\t\t{% if particle.gp_items %}
\t\t\t\t{{ gp_contents }}
\t\t\t{% endif %}
\t\t</div>
\t\t{{ gp_buttons }}
\t{{ containerblock_end }}
{% endblock %}", "@particles/gp_iconblock1.html.twig", "/Users/sylwesterpilarz/Desktop/IntengineWebsite/cms/grav-admin/user/data/gantry5/themes/g5_helium/particles/gp_iconblock1.html.twig");
    }
}
