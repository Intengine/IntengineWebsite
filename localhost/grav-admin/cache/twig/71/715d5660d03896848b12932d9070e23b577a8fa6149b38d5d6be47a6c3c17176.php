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

/* @Page:/Users/mac/Desktop/IntengineWebsite/localhost/grav-admin/user/pages/01.home */
class __TwigTemplate_2e0260bdca594cf0bf69833c944fab4e0c0fd835e2c23f24505af07a5b9a810b extends \Twig\Template
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
        echo "<h1>Say Hello to Grav!</h1>
<h2>installation successful...</h2>
<p>Congratulations! You have installed the <strong>Base Grav Package</strong> that provides a <strong>simple page</strong> and the default <strong>Quark</strong> theme to get you started.</p>
<div class=\"notices red\">
<p>If you see a <strong>404 Error</strong> when you click <code>Typography</code> in the menu, please refer to the <a href=\"http://learn.getgrav.org/troubleshooting/page-not-found\">troubleshooting guide</a>.</p>
</div>";
    }

    public function getTemplateName()
    {
        return "@Page:/Users/mac/Desktop/IntengineWebsite/localhost/grav-admin/user/pages/01.home";
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
        return new Source("<h1>Say Hello to Grav!</h1>
<h2>installation successful...</h2>
<p>Congratulations! You have installed the <strong>Base Grav Package</strong> that provides a <strong>simple page</strong> and the default <strong>Quark</strong> theme to get you started.</p>
<div class=\"notices red\">
<p>If you see a <strong>404 Error</strong> when you click <code>Typography</code> in the menu, please refer to the <a href=\"http://learn.getgrav.org/troubleshooting/page-not-found\">troubleshooting guide</a>.</p>
</div>", "@Page:/Users/mac/Desktop/IntengineWebsite/localhost/grav-admin/user/pages/01.home", "");
    }
}
