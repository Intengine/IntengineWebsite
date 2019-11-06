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

/* modular/experience.html.twig */
class __TwigTemplate_e4baf436154eed44e7f473e1fcd0901fbc5f349562ac3ccf88409cf61a8e9955 extends \Twig\Template
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
         class=\"s-experience ";
        // line 2
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "sectionBackground", []);
        echo " target-section\">

    <div class=\"row experience-content experience-content--timeline\">
        <div class=\"col-full text-center\">
            <h3>";
        // line 6
        echo $this->getAttribute(($context["page"] ?? null), "title", []);
        echo "</h3>
        </div>
        ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "experienceTimeline", []));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 9
            echo "            <div class=\"col-six tab-full ";
            if (($context["item"] % 2 == 1)) {
                echo "left";
            } else {
                echo "right";
            }
            echo "\">
                <div class=\"timeline\">
                    <div class=\"timeline__block\">
                        <div class=\"timeline__bullet\"></div>
                        <div class=\"timeline__header\">
                            <p class=\"timeline__timeframe\">";
            // line 14
            echo $this->getAttribute($context["item"], "date", []);
            echo "</p>
                            <h3>";
            // line 15
            echo $this->getAttribute($context["item"], "client", []);
            echo "</h3>
                            <h5>";
            // line 16
            echo $this->getAttribute($context["item"], "position", []);
            echo "</h5>
                        </div>
                        <div class=\"timeline__desc\">
                            <p>";
            // line 19
            echo $this->getAttribute($context["item"], "description", []);
            echo "</p>
                        </div>
                    </div> <!-- end timeline__block -->
                </div> <!-- end timeline -->
            </div> <!-- end left -->
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "    </div> <!-- end experience-content timeline -->

</section>
";
    }

    public function getTemplateName()
    {
        return "modular/experience.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 25,  82 => 19,  76 => 16,  72 => 15,  68 => 14,  55 => 9,  51 => 8,  46 => 6,  39 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "modular/experience.html.twig", "/Users/sylwesterpilarz/Desktop/IntengineWebsite/hola/user/themes/hola/templates/modular/experience.html.twig");
    }
}
