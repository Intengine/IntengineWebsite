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
class __TwigTemplate_618b0aea9d8904084a9bd86ee6abdbd89e1668e833f5a7b57f27f1acded6eec6 extends \Twig\Template
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
        echo "<section class=\"section modular-features \">
        <section class=\"container grid-lg\">
            <div class=\"frame-box\">

                <h2>KONTAKT KURWA</h2>

                <div class=\"columns\">
                                </div>
            </div>
        </section>
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
        return new Source("<section class=\"section modular-features \">
        <section class=\"container grid-lg\">
            <div class=\"frame-box\">

                <h2>KONTAKT KURWA</h2>

                <div class=\"columns\">
                                </div>
            </div>
        </section>
</section>
", "@Page:/Users/mac/Desktop/IntengineWebsite/localhost/grav-admin/user/pages/01.home/03._highlights", "");
    }
}
