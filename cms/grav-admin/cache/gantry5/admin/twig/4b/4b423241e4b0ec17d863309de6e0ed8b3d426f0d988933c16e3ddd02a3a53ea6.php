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

/* @gantry-admin/pages/menu/particle.html.twig */
class __TwigTemplate_aea93c61161bc71a78f37ae2eac79e8d6ec44210d100bcee12fd0987d50e9823 extends \Twig\Template
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
        return $this->loadTemplate((((($context["ajax"] ?? null) - ($context["suffix"] ?? null))) ? ("@gantry-admin/partials/ajax.html.twig") : ("@gantry-admin/partials/base.html.twig")), "@gantry-admin/pages/menu/particle.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_gantry($context, array $blocks = [])
    {
        // line 4
        echo "<form method=\"post\" action=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["gantry"] ?? null), "route", [0 => ($context["action"] ?? null)], "method"), "html", null, true);
        echo "\">
    <div class=\"g-tabs\" role=\"tablist\">
        <ul>
            <li class=\"active\">
                <a href=\"#\" id=\"g-switcher-platforms-tab\" role=\"presentation\" aria-controls=\"g-switcher-platforms\" role=\"tab\" aria-expanded=\"true\">
                    ";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transFilter("GANTRY5_PLATFORM_PARTICLE"), "html", null, true);
        echo "
                </a>
            </li>
            <li>
                <a href=\"#\" id=\"g-settings-block-tab\" role=\"presentation\" aria-controls=\"g-settings-block\" role=\"tab\" aria-expanded=\"false\">
                    ";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transFilter("GANTRY5_PLATFORM_BLOCK"), "html", null, true);
        echo "
                </a>
            </li>
        </ul>
    </div>

    <div class=\"g-panes\">
        <div class=\"g-pane active\" role=\"tabpanel\" id=\"g-settings-particle\" aria-labelledby=\"g-settings-particle-tab\" aria-expanded=\"true\">
            <div class=\"card settings-block\">
                <h4>
                    <span data-title-editable=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute(($context["item"] ?? null), "title", []), "html", null, true);
        echo "\" class=\"title\">";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["item"] ?? null), "title", []), "html", null, true);
        echo "</span>
                    <i class=\"fa fa-pencil font-small\" aria-hidden=\"true\" tabindex=\"0\" aria-label=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transFilter("GANTRY5_PLATFORM_EDIT_TITLE", $this->getAttribute(($context["item"] ?? null), "title", [])), "html", null, true);
        echo "\" data-title-edit=\"\"></i>
                    <span class=\"badge font-small\">";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["item"] ?? null), "options", []), "type", []), "html", null, true);
        echo "</span>
                    ";
        // line 27
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["particle"] ?? null), "form", []), "fields", []), "enabled", [])) {
            // line 28
            echo "                    ";
            $this->loadTemplate("forms/fields/enable/enable.html.twig", "@gantry-admin/pages/menu/particle.html.twig", 28)->display(twig_array_merge($context, ["name" => (($context["prefix"] ?? null) . "enabled"), "field" => $this->getAttribute($this->getAttribute($this->getAttribute(($context["particle"] ?? null), "form", []), "fields", []), "enabled", []), "value" => $this->getAttribute($this->getAttribute($this->getAttribute(($context["item"] ?? null), "options", []), "particle", []), "enabled", []), "default" => 1]));
            // line 29
            echo "                    ";
        }
        // line 30
        echo "                </h4>

                <div class=\"inner-params\">
                    ";
        // line 33
        $this->loadTemplate("forms/fields.html.twig", "@gantry-admin/pages/menu/particle.html.twig", 33)->display(twig_array_merge($context, ["blueprints" => $this->getAttribute(($context["particle"] ?? null), "form", []), "data" => ($context["data"] ?? null), "prefix" => ($context["prefix"] ?? null), "skip" => [0 => "enabled"]]));
        // line 34
        echo "                </div>
            </div>
        </div>

        <div class=\"g-pane\" role=\"tabpanel\" id=\"g-settings-block\" aria-labelledby=\"g-settings-block-tab\" aria-expanded=\"false\">
            <div class=\"card settings-block\">
                <h4>
                    ";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transFilter("GANTRY5_PLATFORM_BLOCK"), "html", null, true);
        echo "
                </h4>
                <div class=\"inner-params\">
                    ";
        // line 44
        $this->loadTemplate("forms/fields.html.twig", "@gantry-admin/pages/menu/particle.html.twig", 44)->display(twig_array_merge($context, ["blueprints" => $this->getAttribute(($context["block"] ?? null), "form", []), "data" => $this->getAttribute(($context["item"] ?? null), "options", []), "prefix" => "block."]));
        // line 45
        echo "                </div>
            </div>
        </div>
    </div>

    <div class=\"g-modal-actions\">
        ";
        // line 51
        if ($this->getAttribute(($context["gantry"] ?? null), "authorize", [0 => "menu.edit", 1 => ($context["id"] ?? null)], "method")) {
            // line 52
            echo "        <button class=\"button button-primary\" type=\"submit\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transFilter("GANTRY5_PLATFORM_APPLY"), "html", null, true);
            echo "</button>
        <button class=\"button button-primary\" data-apply-and-save=\"\">";
            // line 53
            echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transFilter("GANTRY5_PLATFORM_APPLY_SAVE"), "html", null, true);
            echo "</button>
        ";
        }
        // line 55
        echo "        <button class=\"button g5-dialog-close\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transFilter("GANTRY5_PLATFORM_CANCEL"), "html", null, true);
        echo "</button>
    </div>
</form>
";
    }

    public function getTemplateName()
    {
        return "@gantry-admin/pages/menu/particle.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 55,  132 => 53,  127 => 52,  125 => 51,  117 => 45,  115 => 44,  109 => 41,  100 => 34,  98 => 33,  93 => 30,  90 => 29,  87 => 28,  85 => 27,  81 => 26,  77 => 25,  71 => 24,  58 => 14,  50 => 9,  41 => 4,  38 => 3,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@gantry-admin/pages/menu/particle.html.twig", "/Users/sylwesterpilarz/Desktop/prgm/IntengineWebsite/cms/grav-admin/user/plugins/gantry5/admin/templates/pages/menu/particle.html.twig");
    }
}
