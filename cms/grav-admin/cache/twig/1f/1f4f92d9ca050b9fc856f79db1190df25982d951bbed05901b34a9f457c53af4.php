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

/* @particles/wow-js.html.twig */
class __TwigTemplate_e43b9f555a830d5fad5dbba18e44be10446e514b7693585e19be39335d659cc9 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascript_footer' => [$this, 'block_javascript_footer'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@nucleus/partials/particle.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("@nucleus/partials/particle.html.twig", "@particles/wow-js.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_stylesheets($context, array $blocks = [])
    {
        // line 4
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc("gantry-theme://css/animate.min.css"), "html", null, true);
        echo "\" type=\"text/css\"/>
";
    }

    // line 8
    public function block_javascript_footer($context, array $blocks = [])
    {
        // line 9
        echo "\t";
        if ($this->getAttribute(($context["particle"] ?? null), "enabled", [])) {
            // line 10
            echo "\t\t";
            $this->displayParentBlock("javascript_footer", $context, $blocks);
            echo "
\t\t<script src=\"";
            // line 11
            echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc("gantry-theme://js/wow.min.js"), "html", null, true);
            echo "\" type=\"text/javascript\"></script>
\t\t<script type=\"text/javascript\">
\t\t\twow = new WOW({ mobile: ";
            // line 13
            echo twig_escape_filter($this->env, (($this->getAttribute(($context["particle"] ?? null), "mobile", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["particle"] ?? null), "mobile", []), "false")) : ("false")));
            echo ", offset: ";
            echo twig_escape_filter($this->env, (($this->getAttribute(($context["particle"] ?? null), "offset", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["particle"] ?? null), "offset", []), "200")) : ("200")));
            echo " });
\t\t\twow.init();
\t\t</script>
\t";
        }
    }

    public function getTemplateName()
    {
        return "@particles/wow-js.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 13,  65 => 11,  60 => 10,  57 => 9,  54 => 8,  48 => 5,  43 => 4,  40 => 3,  30 => 1,);
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

{% block stylesheets %}
    {{ parent() }}
    <link rel=\"stylesheet\" href=\"{{ url('gantry-theme://css/animate.min.css') }}\" type=\"text/css\"/>
{% endblock %}

{% block javascript_footer %}
\t{% if particle.enabled %}
\t\t{{ parent() }}
\t\t<script src=\"{{ url('gantry-theme://js/wow.min.js') }}\" type=\"text/javascript\"></script>
\t\t<script type=\"text/javascript\">
\t\t\twow = new WOW({ mobile: {{ particle.mobile|default(\"false\")|e }}, offset: {{ particle.offset|default(\"200\")|e }} });
\t\t\twow.init();
\t\t</script>
\t{% endif %}
{% endblock %}", "@particles/wow-js.html.twig", "/Users/sylwesterpilarz/Desktop/IntengineWebsite/cms/grav-admin/user/data/gantry5/themes/g5_helium/particles/wow-js.html.twig");
    }
}
