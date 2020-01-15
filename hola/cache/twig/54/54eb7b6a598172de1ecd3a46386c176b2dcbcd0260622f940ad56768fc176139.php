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

/* modular/services.html.twig */
class __TwigTemplate_d0fb8ca77047bb99a94a4f12a82b491d3440f70219006d803f0a2be1653eb29d extends \Twig\Template
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
        echo "<section id=\"";
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "redirect", [])) {
            echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "redirect", []);
        } else {
            echo twig_lower_filter($this->env, $this->getAttribute(($context["page"] ?? null), "menu", []));
        }
        echo "\"
         class=\"s-services ";
        // line 2
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "sectionBackground", []);
        echo " target-section\"
         style=\"background: url(";
        // line 3
        echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "sectionbackground", []), [], "array"), "url", []);
        echo ")\">

    <div class=\"overlay\"></div>
    <div class=\"row section-intro\">
        <div class=\"col-twelve\">
            ";
        // line 8
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "smallTitle", [])) {
            // line 9
            echo "                <h3>";
            echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "smallTitle", []);
            echo "</h3>
            ";
        }
        // line 11
        echo "            ";
        if ($this->getAttribute(($context["page"] ?? null), "title", [])) {
            // line 12
            echo "                <h1>";
            echo $this->getAttribute(($context["page"] ?? null), "title", []);
            echo "</h1>
            ";
        }
        // line 14
        echo "           ";
        if ($this->getAttribute(($context["page"] ?? null), "content", [])) {
            // line 15
            echo "            <p class=\"lead\">";
            echo $this->getAttribute(($context["page"] ?? null), "content", []);
            echo "</p>
            ";
        }
        // line 17
        echo "        </div>
    </div> <!-- /section-intro -->

    <div class=\"row services-content\">

        <div id=\"owl-slider\" class=\"owl-carousel services-list\">
            ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "services", []));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 24
            echo "

                <div class=\"service\">
                    <span class=\"icon\"><i class=\"";
            // line 27
            echo $this->getAttribute($context["item"], "icon", []);
            echo "\"></i></span>
                    <div class=\"service-content\">
                        <h3>";
            // line 29
            echo $this->getAttribute($context["item"], "title", []);
            echo "</h3>
                        <p class=\"desc\">";
            // line 30
            echo $this->getAttribute($context["item"], "description", []);
            echo "
                        </p>
                    </div>
                </div>

            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "
        </div> <!-- /services-list -->
    </div>

</section>
";
    }

    public function getTemplateName()
    {
        return "modular/services.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 36,  103 => 30,  99 => 29,  94 => 27,  89 => 24,  85 => 23,  77 => 17,  71 => 15,  68 => 14,  62 => 12,  59 => 11,  53 => 9,  51 => 8,  43 => 3,  39 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "modular/services.html.twig", "/Users/sylwesterpilarz/Desktop/IntengineWebsite/hola/user/themes/hola/templates/modular/services.html.twig");
    }
}
