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

/* fullscreen.html.twig */
class __TwigTemplate_9332d17dcd290063da86e3ddc0fcefc359a865e335b0c668302c7af796353fff extends \Twig\Template
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
        // line 1
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "plugin://admin-power-tools/assets/fullscreen_util.js"], "method");
        // line 2
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "plugin://admin-power-tools/assets/fullscreen.css"], "method");
        // line 3
        echo "
<style>
    .fullscreen-enable {
        display: inline-block;
    }

    .fullscreen-disable {
        display: none;
    }

    *:-webkit-full-screen .fullscreen-disable {
        display: inline-block;
    }

    *:-webkit-full-screen .fullscreen-enable {
        display: none;
    }

    .fullscreen-menu {
        display: none;
    }

    *:-webkit-full-screen .fullscreen-menu {
        display: block;
    }

    /* Match button element's align */
    /* TODO the action service should render a BUTTON and not an A for the move-section-to-child page action*/
    *:-webkit-full-screen a.button {
        margin-bottom: 6px;
    }


</style>

<button class=\"button fullscreen-enable\"
        onclick='_doFullScreen(\"";
        // line 39
        echo twig_escape_filter($this->env, ($context["targetSelector"] ?? null), "html", null, true);
        echo "\"); return false;'>
    <i class=\"fa fa-expand\"></i>
    Fullscreen
</button>
<button class=\"button fullscreen-disable\"
        onclick='_doFullScreenRestore(); return false;'>
    <i class=\"fa fa-compress\"></i>
    Exit Fullscreen
</button>
";
    }

    public function getTemplateName()
    {
        return "fullscreen.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 39,  34 => 3,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% do assets.addJs(\"plugin://admin-power-tools/assets/fullscreen_util.js\") %}
{% do assets.addCss('plugin://admin-power-tools/assets/fullscreen.css') %}

<style>
    .fullscreen-enable {
        display: inline-block;
    }

    .fullscreen-disable {
        display: none;
    }

    *:-webkit-full-screen .fullscreen-disable {
        display: inline-block;
    }

    *:-webkit-full-screen .fullscreen-enable {
        display: none;
    }

    .fullscreen-menu {
        display: none;
    }

    *:-webkit-full-screen .fullscreen-menu {
        display: block;
    }

    /* Match button element's align */
    /* TODO the action service should render a BUTTON and not an A for the move-section-to-child page action*/
    *:-webkit-full-screen a.button {
        margin-bottom: 6px;
    }


</style>

<button class=\"button fullscreen-enable\"
        onclick='_doFullScreen(\"{{ targetSelector }}\"); return false;'>
    <i class=\"fa fa-expand\"></i>
    Fullscreen
</button>
<button class=\"button fullscreen-disable\"
        onclick='_doFullScreenRestore(); return false;'>
    <i class=\"fa fa-compress\"></i>
    Exit Fullscreen
</button>
", "fullscreen.html.twig", "/Users/mac/Desktop/IntengineWebsite/cms/grav-admin/user/plugins/admin-power-tools/admin/templates/fullscreen.html.twig");
    }
}
