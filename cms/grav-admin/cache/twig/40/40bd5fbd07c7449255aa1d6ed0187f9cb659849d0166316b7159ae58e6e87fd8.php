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
class __TwigTemplate_9a2ff9ea88dc99ad27167f7070dcbc57f6600e39e29268faca1958e4b9d8c314 extends \Twig\Template
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
        echo "<h1>Welcome to&nbsp;<a href='/admin/powertools/edit-section/?section=%23+Welcome+to'><i class='fa fa-edit' style='font-size:initial' title='Edit Section'></i></a></h1>
<h2><strong>INTENGINE</strong>&nbsp;<a href='/admin/powertools/edit-section/?section=%23%23+%2A%2AINTENGINE%2A%2A'><i class='fa fa-edit' style='font-size:initial' title='Edit Section'></i></a></h2>
<h3>My name is Sylvester and I'm creator.&nbsp;<a href='/admin/powertools/edit-section/?section=%23%23%23+My+name+is+Sylvester+and+I%27m+creator.'><i class='fa fa-edit' style='font-size:initial' title='Edit Section'></i></a></h3>
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
        return new Source("<h1>Welcome to&nbsp;<a href='/admin/powertools/edit-section/?section=%23+Welcome+to'><i class='fa fa-edit' style='font-size:initial' title='Edit Section'></i></a></h1>
<h2><strong>INTENGINE</strong>&nbsp;<a href='/admin/powertools/edit-section/?section=%23%23+%2A%2AINTENGINE%2A%2A'><i class='fa fa-edit' style='font-size:initial' title='Edit Section'></i></a></h2>
<h3>My name is Sylvester and I'm creator.&nbsp;<a href='/admin/powertools/edit-section/?section=%23%23%23+My+name+is+Sylvester+and+I%27m+creator.'><i class='fa fa-edit' style='font-size:initial' title='Edit Section'></i></a></h3>
<p><a href=\"/admin/pages//\" target=\"_blank\">Edit Page On Grav</a></p>", "@Page:/Users/mac/Desktop/IntengineWebsite/cms/grav-admin/user/pages/01.home", "");
    }
}
