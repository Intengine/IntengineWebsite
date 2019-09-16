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

/* pages/positions/item.html.twig */
class __TwigTemplate_a79a40b16cfbfb19e7cee5af79b90919a6381f6514f653a4a43830d06e43c461 extends \Twig\Template
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
        $context["statuses"] = ["all" => ["label" => "Assigned to all", "icon" => "<i class=\"fa item-status fa-fw fa-circle\" aria-hidden=\"true\"></i>"], "none" => ["label" => "Not assigned", "icon" => "<i class=\"fa item-status fa-fw fa-circle-o\" aria-hidden=\"true\"></i>"], "some" => ["label" => "Some assignments", "icon" => "<i class=\"fa item-status fa-fw fa-adjust\" aria-hidden=\"true\"></i>"]];
        // line 15
        echo "
<li data-pm-blocktype=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute(($context["module"] ?? null), "type", []), "html", null, true);
        echo "\" data-pm-data=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["module"] ?? null), "toJson", [], "method"), "html_attr");
        echo "\">
    ";
        // line 17
        $context["status"] = $this->getAttribute(($context["statuses"] ?? null), $this->getAttribute(($context["module"] ?? null), "assigned", []), [], "array");
        // line 18
        echo "    ";
        // line 19
        echo "    <div class=\"title size-90\">
        <span class=\"title-status\" title=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute(($context["status"] ?? null), "label", []), "html", null, true);
        echo "\" data-tip=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["status"] ?? null), "label", []), "html", null, true);
        echo "\" aria-label=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["status"] ?? null), "label", []), "html", null, true);
        echo "\">";
        echo $this->getAttribute(($context["status"] ?? null), "icon", []);
        echo "</span>
        <span class=\"title-name\" title=\"Type: ";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["module"] ?? null), "options", []), "type", []), "html", null, true);
        echo " (id: ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["module"] ?? null), "name", []), "html", null, true);
        echo ")\">";
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["module"] ?? null), "title", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["module"] ?? null), "title", []), $this->getAttribute(($context["module"] ?? null), "name", []))) : ($this->getAttribute(($context["module"] ?? null), "name", []))), "html", null, true);
        echo "</span>
    </div>
    <i class=\"fa item-settings fa-cog size-10\" aria-hidden=\"true\"></i>
</li>";
    }

    public function getTemplateName()
    {
        return "pages/positions/item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 21,  48 => 20,  45 => 19,  43 => 18,  41 => 17,  35 => 16,  32 => 15,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "pages/positions/item.html.twig", "/Users/sylwesterpilarz/Desktop/prgm/IntengineWebsite/cms/grav-admin/user/plugins/gantry5/admin/templates/pages/positions/item.html.twig");
    }
}
