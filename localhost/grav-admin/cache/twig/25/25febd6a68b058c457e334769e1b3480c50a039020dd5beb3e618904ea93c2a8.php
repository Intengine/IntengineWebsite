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

/* partials/login-status.html.twig */
class __TwigTemplate_29a3fe96ce0d24c9cf004e61c91bd6a72227b4581541ab0b4f0c94aa59dd80d2 extends \Twig\Template
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
        echo "<span class=\"login-status\">
    ";
        // line 2
        if ($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "user", []), "authenticated", [])) {
            // line 3
            echo "        <strong>";
            echo (($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "user", []), "fullname", [])) ? ($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "user", []), "fullname", [])) : ($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "user", []), "username", [])));
            echo "</strong>, <a class=\"logout\" href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["uri"] ?? null), "addNonce", [0 => (((twig_trim_filter((($context["base_url_relative"] ?? null) . $this->getAttribute(($context["uri"] ?? null), "path", [])), "/") . "/task") . $this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", []), "param_sep", [])) . "login.logout"), 1 => "logout-form", 2 => "logout-nonce"], "method"));
            echo "\">";
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->env, "PLUGIN_LOGIN.BTN_LOGOUT");
            echo "</a>
    ";
        }
        // line 5
        echo "</span>
";
    }

    public function getTemplateName()
    {
        return "partials/login-status.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 5,  35 => 3,  33 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<span class=\"login-status\">
    {% if grav.user.authenticated %}
        <strong>{{ grav.user.fullname ?: grav.user.username }}</strong>, <a class=\"logout\" href=\"{{ uri.addNonce((base_url_relative ~ uri.path)|trim('/') ~ '/task' ~ config.system.param_sep ~ 'login.logout', 'logout-form', 'logout-nonce')|e }}\">{{ 'PLUGIN_LOGIN.BTN_LOGOUT'|t }}</a>
    {% endif %}
</span>
", "partials/login-status.html.twig", "/Users/mac/Desktop/IntengineWebsite/localhost/grav-admin/user/plugins/login/templates/partials/login-status.html.twig");
    }
}
