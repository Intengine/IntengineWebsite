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

/* @Page:/Users/mac/Desktop/IntengineWebsite/cms/grav-admin/user/plugins/error/pages */
class __TwigTemplate_8828e49f0cc596e29400eb03085224f71dbf7138c83df94e53ea4ccd4030da4a extends \Twig\Template
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
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->env, "PLUGIN_ERROR.ERROR_MESSAGE"), "html", null, true);
        echo "



[Edit Page On Grav](/admin/pages//user/data/gantry5/themes/g5_helium/fonts/bebasneue/bebasneue_regular/bebasneue-regular-webfont.woff2?target=_blank)";
    }

    public function getTemplateName()
    {
        return "@Page:/Users/mac/Desktop/IntengineWebsite/cms/grav-admin/user/plugins/error/pages";
    }

    public function isTraitable()
    {
        return false;
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
        return new Source("{{ 'PLUGIN_ERROR.ERROR_MESSAGE'|t }}



[Edit Page On Grav](/admin/pages//user/data/gantry5/themes/g5_helium/fonts/bebasneue/bebasneue_regular/bebasneue-regular-webfont.woff2?target=_blank)", "@Page:/Users/mac/Desktop/IntengineWebsite/cms/grav-admin/user/plugins/error/pages", "");
    }
}
