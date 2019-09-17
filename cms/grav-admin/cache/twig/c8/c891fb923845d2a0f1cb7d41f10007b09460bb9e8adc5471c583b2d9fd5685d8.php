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

/* fullscreen-menu.html.twig */
class __TwigTemplate_93ba23b5d24ac84c75a781ac26ca2f5dac1c07d5f7bd02ad5c595f121ac6552a extends \Twig\Template
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
        echo "<div class=\"fullscreen-menu\">
    ";
        // line 2
        echo $this->env->getExtension('Grav\Plugin\ServiceTwigExtensions')->service_render("renderer", ($context["scope"] ?? null), "first");
        echo "
    ";
        // line 3
        echo $this->env->getExtension('Grav\Plugin\ServiceTwigExtensions')->service_render("renderer", ($context["scope"] ?? null), "before:parent");
        echo "
    ";
        // line 4
        echo $this->env->getExtension('Grav\Plugin\ServiceTwigExtensions')->service_render("renderer", ($context["scope"] ?? null), "after:parent");
        echo "
    ";
        // line 5
        echo $this->env->getExtension('Grav\Plugin\ServiceTwigExtensions')->service_render("renderer", ($context["scope"] ?? null), "last");
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "fullscreen-menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 5,  41 => 4,  37 => 3,  33 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"fullscreen-menu\">
    {{ service_render('renderer', scope, 'first') | raw }}
    {{ service_render('renderer', scope, 'before:parent') | raw }}
    {{ service_render('renderer', scope, 'after:parent') | raw }}
    {{ service_render('renderer', scope, 'last') | raw }}
</div>
", "fullscreen-menu.html.twig", "/Users/mac/Desktop/IntengineWebsite/cms/grav-admin/user/plugins/admin-power-tools/admin/templates/fullscreen-menu.html.twig");
    }
}
