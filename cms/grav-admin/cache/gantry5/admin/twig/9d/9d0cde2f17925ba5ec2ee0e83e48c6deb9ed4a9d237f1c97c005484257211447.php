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

/* @gantry-admin/pages/positions/positions.html.twig */
class __TwigTemplate_8d75a2a9716e3e1ba0554694c54a94f210f164074d8ebd11db30f74afd67428d extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'gantry' => [$this, 'block_gantry'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate((((($context["ajax"] ?? null) - ($context["suffix"] ?? null))) ? ("@gantry-admin/partials/ajax.html.twig") : ("@gantry-admin/partials/base.html.twig")), "@gantry-admin/pages/positions/positions.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_gantry($context, array $blocks = [])
    {
        // line 4
        echo "    <div class=\"menu-header\">
        <span class=\"float-right\">
            <button class=\"button button-back-to-conf\"
                    tabindex=\"0\"
                    aria-label=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transFilter("GANTRY5_PLATFORM_BACK_SETUP"), "html", null, true);
        echo "\"
            >
                <i class=\"fa fa-fw fa-fw fa-arrow-left\" aria-hidden=\"true\"></i> <span>";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transFilter("GANTRY5_PLATFORM_BACK_SETUP"), "html", null, true);
        echo "</span>
            </button>
            <button type=\"submit\"
                    class=\"button button-primary button-save\"
                    data-save=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transFilter("GANTRY5_PLATFORM_POSITIONS"), "html", null, true);
        echo "\"
            >
                <i class=\"fa fa-fw fa-check\" aria-hidden=\"true\"></i> <span>";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transFilter("GANTRY5_PLATFORM_SAVE_POSITIONS"), "html", null, true);
        echo "</span>
            </button>
        </span>
        <h2 class=\"page-title\">
            ";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transFilter("GANTRY5_PLATFORM_POSITIONS"), "html", null, true);
        echo "
            <button data-g-config=\"create\"
                    data-g-create=\"position\"
                    data-g-config-href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute(($context["gantry"] ?? null), "route", [0 => "positions/create"], "method"), "html", null, true);
        echo "\"
                    title=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transFilter("GANTRY5_PLATFORM_ADD_NEW_POSITION"), "html", null, true);
        echo "\"
                    aria-label=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transFilter("GANTRY5_PLATFORM_ADD_NEW_POSITION"), "html", null, true);
        echo "\"
                    data-g-config-method=\"POST\"
                    data-g5-lm-add tabindex=\"0\"
                    class=\"button button-primary\"
            >
                <i class=\"fa fa-fw fa-plus\" aria-hidden=\"true\"></i>
            </button>
        </h2>
    </div>

    <div id=\"positions\">
        <ul class=\"g-grid\">
            ";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["positions"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["name"] => $context["position"]) {
            // line 38
            echo "                <li class=\"card g-block size-1-4\">
                    ";
            // line 39
            $this->loadTemplate("@gantry-admin/layouts/position.html.twig", "@gantry-admin/pages/positions/positions.html.twig", 39)->display($context);
            // line 40
            echo "                </li>
            ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['name'], $context['position'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "            <li class=\"card g-block size-1-4 add-new\">
                <div class=\"page\">
                    <a data-g-config=\"create\"
                       data-g-config-href=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->getAttribute(($context["gantry"] ?? null), "route", [0 => "positions/create"], "method"), "html", null, true);
        echo "\"
                       title=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transFilter("GANTRY5_PLATFORM_ADD_NEW_POSITION"), "html", null, true);
        echo "\"
                       aria-label=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transFilter("GANTRY5_PLATFORM_ADD_NEW_POSITION"), "html", null, true);
        echo "\"
                       data-g-config-method=\"POST\"
                       data-g5-lm-add tabindex=\"0\"
                    >
                        <i class=\"fa fa-fw fa-plus\" aria-hidden=\"true\"></i>
                    </a>
                </div>
            </li>
        </ul>
        <div id=\"trash\" data-g5-positions-erase=\"\"><div class=\"trash-zone\">&times;</div><span>";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transFilter("GANTRY5_PLATFORM_DROP_DELETE"), "html", null, true);
        echo "</span></div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "@gantry-admin/pages/positions/positions.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  162 => 56,  150 => 47,  146 => 46,  142 => 45,  137 => 42,  122 => 40,  120 => 39,  117 => 38,  100 => 37,  85 => 25,  81 => 24,  77 => 23,  71 => 20,  64 => 16,  59 => 14,  52 => 10,  47 => 8,  41 => 4,  38 => 3,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@gantry-admin/pages/positions/positions.html.twig", "/Users/sylwesterpilarz/Desktop/IntengineWebsite/cms/grav-admin/user/plugins/gantry5/admin/templates/pages/positions/positions.html.twig");
    }
}
