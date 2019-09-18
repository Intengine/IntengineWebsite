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
class __TwigTemplate_6ff06de42cae0cebf2633883510889c8f7c1a66ae16a271bc7491dad06037367 extends \Twig\Template
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
        echo "<h2>Witam na stronie&nbsp;<a href='/admin/powertools/edit-section/?section=%23%23+Witam+na+stronie'><i class='fa fa-edit' style='font-size:initial' title='Edit Section'></i></a></h2>
<h3>Nazywam się Sylvester&nbsp;<a href='/admin/powertools/edit-section/?section=%23%23%23+Nazywam+si%C4%99+Sylvester'><i class='fa fa-edit' style='font-size:initial' title='Edit Section'></i></a></h3>
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
        return new Source("<h2>Witam na stronie&nbsp;<a href='/admin/powertools/edit-section/?section=%23%23+Witam+na+stronie'><i class='fa fa-edit' style='font-size:initial' title='Edit Section'></i></a></h2>
<h3>Nazywam się Sylvester&nbsp;<a href='/admin/powertools/edit-section/?section=%23%23%23+Nazywam+si%C4%99+Sylvester'><i class='fa fa-edit' style='font-size:initial' title='Edit Section'></i></a></h3>
<p><a href=\"/admin/pages//\" target=\"_blank\">Edit Page On Grav</a></p>", "@Page:/Users/mac/Desktop/IntengineWebsite/cms/grav-admin/user/pages/01.home", "");
    }
}
