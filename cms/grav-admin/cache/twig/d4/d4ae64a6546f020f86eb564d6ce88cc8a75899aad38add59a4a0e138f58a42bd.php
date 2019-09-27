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

/* partials/dashboard-feed.html.twig */
class __TwigTemplate_d6b7b8787741311ab08d0b4d0d119c8db5d8199dbce37a1cf227fab8b76c2a90 extends \Twig\Template
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
        echo "<div id=\"news-feed\" class=\"dashboard-item admin-block default-box-shadow\">
    <h1>
        ";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.NEWS_FEED"), "html", null, true);
        echo "
        <span class=\"right\">
            <a href=\"#\" class=\"button button-small\" data-refresh=\"feed\"><i class=\"fa fa-refresh\"></i></a>
        </span>
    </h1>

    <div class=\"widget-content\">
        <div class=\"widget-loader\"><i class=\"fa fa-refresh fa-spin\"></i></div>
        <ul></ul>
    </div>
</div>

";
    }

    public function getTemplateName()
    {
        return "partials/dashboard-feed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 3,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<div id=\"news-feed\" class=\"dashboard-item admin-block default-box-shadow\">
    <h1>
        {{ \"PLUGIN_ADMIN.NEWS_FEED\"|tu }}
        <span class=\"right\">
            <a href=\"#\" class=\"button button-small\" data-refresh=\"feed\"><i class=\"fa fa-refresh\"></i></a>
        </span>
    </h1>

    <div class=\"widget-content\">
        <div class=\"widget-loader\"><i class=\"fa fa-refresh fa-spin\"></i></div>
        <ul></ul>
    </div>
</div>

", "partials/dashboard-feed.html.twig", "/Users/mac/Desktop/IntengineWebsite/cms/grav-admin/user/plugins/admin/themes/grav/templates/partials/dashboard-feed.html.twig");
    }
}
