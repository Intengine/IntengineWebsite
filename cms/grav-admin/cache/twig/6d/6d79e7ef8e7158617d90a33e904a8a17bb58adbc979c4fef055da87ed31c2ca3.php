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

/* @Page:/Users/mac/Desktop/IntengineWebsite/cms/grav-admin/user/pages/01.home */
class __TwigTemplate_ef9325f23a63dacade143d1944503a5e88377c15610ca8540d0d3600c1db61f7 extends \Twig\Template
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
        echo "<h1>Welcome to INTENGINE&nbsp;<a href='/admin/powertools/edit-section/?section=%23+Welcome+to+INTENGINE'><i class='fa fa-edit' style='font-size:initial' title='Edit Section'></i></a></h1>
<p>My name is Sylvester and I'm developer. I can do anything you want. For almost 10 years I have learning graphic design, web design and programming to fit myself into this world. I hope you enjoy this fantastic travel with me.</p>
<p><a href=\"/admin/pages//\" target=\"_blank\">Edit Page On Grav</a></p>";
    }

    public function getTemplateName()
    {
        return "@Page:/Users/mac/Desktop/IntengineWebsite/cms/grav-admin/user/pages/01.home";
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
        return new Source("<h1>Welcome to INTENGINE&nbsp;<a href='/admin/powertools/edit-section/?section=%23+Welcome+to+INTENGINE'><i class='fa fa-edit' style='font-size:initial' title='Edit Section'></i></a></h1>
<p>My name is Sylvester and I'm developer. I can do anything you want. For almost 10 years I have learning graphic design, web design and programming to fit myself into this world. I hope you enjoy this fantastic travel with me.</p>
<p><a href=\"/admin/pages//\" target=\"_blank\">Edit Page On Grav</a></p>", "@Page:/Users/mac/Desktop/IntengineWebsite/cms/grav-admin/user/pages/01.home", "");
    }
}
