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

/* @Page:/Users/mac/Desktop/IntengineWebsite/localhost/grav-admin/user/pages/01.home/03._highlights */
class __TwigTemplate_13a34c74db568e4f30edc728b956f358548b3e9fb09fa8add18f20d68c24af3a extends \Twig\Template
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
        <h2>MOVIE DIRECTOR</h2>
    </section>
    <i id=\"to-start\" class=\"pulse fa fa-angle-down\"></i>
</section>
";
    }

    public function getTemplateName()
    {
        return "@Page:/Users/mac/Desktop/IntengineWebsite/localhost/grav-admin/user/pages/01.home/03._highlights";
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
        <h2>MOVIE DIRECTOR</h2>
    </section>
    <i id=\"to-start\" class=\"pulse fa fa-angle-down\"></i>
</section>
", "@Page:/Users/mac/Desktop/IntengineWebsite/localhost/grav-admin/user/pages/01.home/03._highlights", "");
    }
}
