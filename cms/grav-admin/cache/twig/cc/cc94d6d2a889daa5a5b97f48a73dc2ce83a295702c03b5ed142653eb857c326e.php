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

/* @particles/jluikit.html.twig */
class __TwigTemplate_5c8010336896f975999ec2bd196b78dee2b877a3c764740db2a4c5fd97e4a88c extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
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
        $this->parent = $this->loadTemplate("@nucleus/partials/particle.html.twig", "@particles/jluikit.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_particle($context, array $blocks = [])
    {
        // line 4
        $assetFunction = $this->env->getFunction('parse_assets')->getCallable();
        $assetVariables = ["priority" => 11];
        if ($assetVariables && !is_array($assetVariables)) {
            throw new UnexpectedValueException('{% scripts with x %}: x is not an array');
        }
        $location = "head";
        if ($location && !is_string($location)) {
            throw new UnexpectedValueException('{% scripts in x %}: x is not a string');
        }
        $priority = isset($assetVariables['priority']) ? $assetVariables['priority'] : 0;
        ob_start();
        // line 5
        if ($this->getAttribute(($context["particle"] ?? null), "enabled", [])) {
            // line 6
            if (($this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "page", []), "direction", []) == "rtl")) {
                // line 7
                echo "<link rel=\"stylesheet\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc("gantry-theme://css/jluikit-rtl.min.css"), "html", null, true);
                echo "\">
";
            } else {
                // line 9
                echo "<link rel=\"stylesheet\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc("gantry-theme://css/jluikit.min.css"), "html", null, true);
                echo "\">
";
            }
        }
        $content = ob_get_clean();
        $assetFunction($content, $location, $priority);
        // line 14
        $assetFunction = $this->env->getFunction('parse_assets')->getCallable();
        $assetVariables = ["priority" => 10];
        if ($assetVariables && !is_array($assetVariables)) {
            throw new UnexpectedValueException('{% scripts with x %}: x is not an array');
        }
        $location = (($this->getAttribute(($context["particle"] ?? null), "jslocation", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["particle"] ?? null), "jslocation", []), "footer")) : ("footer"));
        if ($location && !is_string($location)) {
            throw new UnexpectedValueException('{% scripts in x %}: x is not a string');
        }
        $priority = isset($assetVariables['priority']) ? $assetVariables['priority'] : 0;
        ob_start();
        // line 15
        if ($this->getAttribute(($context["particle"] ?? null), "enabled", [])) {
            // line 16
            echo "<script src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc("gantry-theme://js/jluikit.min.js"), "html", null, true);
            echo "\" type=\"text/javascript\"></script>
<script src=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc("gantry-theme://js/jluikit-icons.min.js"), "html", null, true);
            echo "\" type=\"text/javascript\"></script>
";
        }
        $content = ob_get_clean();
        $assetFunction($content, $location, $priority);
    }

    public function getTemplateName()
    {
        return "@particles/jluikit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 17,  87 => 16,  85 => 15,  73 => 14,  64 => 9,  58 => 7,  56 => 6,  54 => 5,  42 => 4,  39 => 3,  29 => 1,);
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

{% block particle %}
{% assets in 'head' with { priority: 11 } %}
{% if particle.enabled %}
{% if gantry.page.direction == 'rtl' %}
<link rel=\"stylesheet\" href=\"{{ url('gantry-theme://css/jluikit-rtl.min.css') }}\">
{% else %}
<link rel=\"stylesheet\" href=\"{{ url('gantry-theme://css/jluikit.min.css') }}\">
{% endif %}
{% endif %}
{% endassets -%}

{% assets in particle.jslocation|default('footer') with { priority: 10 } %}
{% if particle.enabled %}
<script src=\"{{ url('gantry-theme://js/jluikit.min.js') }}\" type=\"text/javascript\"></script>
<script src=\"{{ url('gantry-theme://js/jluikit-icons.min.js') }}\" type=\"text/javascript\"></script>
{% endif %}
{% endassets -%}
{% endblock %}
", "@particles/jluikit.html.twig", "/Users/mac/Desktop/IntengineWebsite/cms/grav-admin/user/data/gantry5/themes/g5_helium/particles/jluikit.html.twig");
    }
}
