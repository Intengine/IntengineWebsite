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

/* @Page:/Users/mac/Desktop/IntengineWebsite/localhost/grav-admin/user/pages/01.home/01._showcase */
class __TwigTemplate_c975306f74a64a8824ce99b2343180ff4b019530aa70ab228ba556a4aba6dba7 extends \Twig\Template
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
        echo "
<section id=\"\" class=\"section modular-hero hero  \" >
    <div class=\"image-overlay\"></div>
    <section class=\"container grid-lg\" style=\"text-align: center\">
        <h2>INTENGINE</h2>
    </section>
    <i id=\"to-start\" class=\"pulse fa fa-angle-down\"></i>
</section>
";
    }

    public function getTemplateName()
    {
        return "@Page:/Users/mac/Desktop/IntengineWebsite/localhost/grav-admin/user/pages/01.home/01._showcase";
    }

    public function getDebugInfo()
    {
        return array (  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("
<section id=\"\" class=\"section modular-hero hero  \" >
    <div class=\"image-overlay\"></div>
    <section class=\"container grid-lg\" style=\"text-align: center\">
        <h2>INTENGINE</h2>
    </section>
    <i id=\"to-start\" class=\"pulse fa fa-angle-down\"></i>
</section>
", "@Page:/Users/mac/Desktop/IntengineWebsite/localhost/grav-admin/user/pages/01.home/01._showcase", "");
    }
}
