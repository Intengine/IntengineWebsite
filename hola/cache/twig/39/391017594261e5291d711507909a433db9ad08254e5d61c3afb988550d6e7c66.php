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

/* forms/fields/textarea/textarea.html.twig */
class __TwigTemplate_f9268872d982befef44e4058dd248b618da46a1617df2387e9d125b89e786ee6 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'input' => [$this, 'block_input'],
            'prepend' => [$this, 'block_prepend'],
            'input_attributes' => [$this, 'block_input_attributes'],
            'append' => [$this, 'block_append'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "forms/field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("forms/field.html.twig", "forms/fields/textarea/textarea.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_input($context, array $blocks = [])
    {
        // line 4
        echo "    <div class=\"";
        echo ((($context["form_field_wrapper_classes"] ?? null)) ? (($context["form_field_wrapper_classes"] ?? null)) : ("form-textarea-wrapper"));
        echo " ";
        echo $this->getAttribute(($context["field"] ?? null), "size", []);
        echo " ";
        echo $this->getAttribute(($context["field"] ?? null), "wrapper_classes", []);
        echo "\">
        ";
        // line 5
        $this->displayBlock('prepend', $context, $blocks);
        // line 6
        echo "        <textarea
            ";
        // line 8
        echo "            name=\"";
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->fieldNameFilter((($context["scope"] ?? null) . $this->getAttribute(($context["field"] ?? null), "name", [])));
        echo "\"
            ";
        // line 10
        echo "            ";
        $this->displayBlock('input_attributes', $context, $blocks);
        // line 33
        echo "            >";
        echo twig_escape_filter($this->env, twig_trim_filter(($context["value"] ?? null)), "html");
        echo "</textarea>
            ";
        // line 34
        $this->displayBlock('append', $context, $blocks);
        // line 35
        echo "            ";
        if ((($context["inline_errors"] ?? null) && ($context["errors"] ?? null))) {
            // line 36
            echo "                <div class=\"";
            echo ((($context["form_errors_classes"] ?? null)) ? (($context["form_errors_classes"] ?? null)) : ("form-errors"));
            echo "\">
                    <p class=\"form-message\"><i class=\"fa fa-exclamation-circle\"></i> ";
            // line 37
            echo twig_first($this->env, ($context["errors"] ?? null));
            echo "</p>
                </div>
            ";
        }
        // line 40
        echo "    </div>
";
    }

    // line 5
    public function block_prepend($context, array $blocks = [])
    {
    }

    // line 10
    public function block_input_attributes($context, array $blocks = [])
    {
        // line 11
        echo "                class=\"";
        echo ($context["form_field_textarea_classes"] ?? null);
        echo " ";
        echo $this->getAttribute(($context["field"] ?? null), "classes", []);
        echo " ";
        echo $this->getAttribute(($context["field"] ?? null), "size", []);
        echo "\"
                ";
        // line 12
        if ($this->getAttribute(($context["field"] ?? null), "id", [], "any", true, true)) {
            echo "id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "id", []));
            echo "\" ";
        }
        // line 13
        echo "                ";
        if ($this->getAttribute(($context["field"] ?? null), "style", [], "any", true, true)) {
            echo "style=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "style", []));
            echo "\" ";
        }
        // line 14
        echo "                ";
        if (($this->getAttribute(($context["field"] ?? null), "disabled", []) || ($context["isDisabledToggleable"] ?? null))) {
            echo "disabled=\"disabled\"";
        }
        // line 15
        echo "                ";
        if ($this->getAttribute(($context["field"] ?? null), "placeholder", [])) {
            echo "placeholder=\"";
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->env, $this->getAttribute(($context["field"] ?? null), "placeholder", []));
            echo "\"";
        }
        // line 16
        echo "                ";
        if (twig_in_filter($this->getAttribute(($context["field"] ?? null), "autofocus", []), [0 => "on", 1 => "true", 2 => 1])) {
            echo "autofocus=\"autofocus\"";
        }
        // line 17
        echo "                ";
        if (twig_in_filter($this->getAttribute(($context["field"] ?? null), "novalidate", []), [0 => "on", 1 => "true", 2 => 1])) {
            echo "novalidate=\"novalidate\"";
        }
        // line 18
        echo "                ";
        if (twig_in_filter($this->getAttribute(($context["field"] ?? null), "readonly", []), [0 => "on", 1 => "true", 2 => 1])) {
            echo "readonly=\"readonly\"";
        }
        // line 19
        echo "                ";
        if (twig_in_filter($this->getAttribute(($context["field"] ?? null), "autocomplete", []), [0 => "on", 1 => "off"])) {
            echo "autocomplete=\"";
            echo $this->getAttribute(($context["field"] ?? null), "autocomplete", []);
            echo "\"";
        }
        // line 20
        echo "                ";
        if (($context["required"] ?? null)) {
            echo "required=\"required\"";
        }
        // line 21
        echo "                ";
        if ($this->getAttribute($this->getAttribute(($context["field"] ?? null), "validate", []), "pattern", [])) {
            echo "pattern=\"";
            echo $this->getAttribute($this->getAttribute(($context["field"] ?? null), "validate", []), "pattern", []);
            echo "\"";
        }
        // line 22
        echo "                ";
        if ($this->getAttribute($this->getAttribute(($context["field"] ?? null), "validate", []), "message", [])) {
            echo "title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->env, $this->getAttribute($this->getAttribute(($context["field"] ?? null), "validate", []), "message", [])));
            echo "\"";
        }
        // line 23
        echo "                ";
        if ($this->getAttribute(($context["field"] ?? null), "rows", [], "any", true, true)) {
            echo "rows=\"";
            echo $this->getAttribute(($context["field"] ?? null), "rows", []);
            echo "\"";
        }
        // line 24
        echo "                ";
        if ($this->getAttribute(($context["field"] ?? null), "cols", [], "any", true, true)) {
            echo "cols=\"";
            echo $this->getAttribute(($context["field"] ?? null), "cols", []);
            echo "\"";
        }
        // line 25
        echo "                ";
        if ($this->getAttribute(($context["field"] ?? null), "minlength", [], "any", true, true)) {
            echo "minlength=\"";
            echo $this->getAttribute(($context["field"] ?? null), "minlength", []);
            echo "\"";
        }
        // line 26
        echo "                ";
        if ($this->getAttribute(($context["field"] ?? null), "maxlength", [], "any", true, true)) {
            echo "maxlength=\"";
            echo $this->getAttribute(($context["field"] ?? null), "maxlength", []);
            echo "\"";
        }
        // line 27
        echo "                ";
        if ($this->getAttribute(($context["field"] ?? null), "datasets", [])) {
            // line 28
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["field"] ?? null), "datasets", []));
            foreach ($context['_seq'] as $context["datakey"] => $context["datavalue"]) {
                // line 29
                echo "                        data-";
                echo $context["datakey"];
                echo "=\"";
                echo twig_escape_filter($this->env, $context["datavalue"], "html_attr");
                echo "\"
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['datakey'], $context['datavalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 31
            echo "                ";
        }
        // line 32
        echo "            ";
    }

    // line 34
    public function block_append($context, array $blocks = [])
    {
    }

    public function getTemplateName()
    {
        return "forms/fields/textarea/textarea.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  230 => 34,  226 => 32,  223 => 31,  212 => 29,  207 => 28,  204 => 27,  197 => 26,  190 => 25,  183 => 24,  176 => 23,  169 => 22,  162 => 21,  157 => 20,  150 => 19,  145 => 18,  140 => 17,  135 => 16,  128 => 15,  123 => 14,  116 => 13,  110 => 12,  101 => 11,  98 => 10,  93 => 5,  88 => 40,  82 => 37,  77 => 36,  74 => 35,  72 => 34,  67 => 33,  64 => 10,  59 => 8,  56 => 6,  54 => 5,  45 => 4,  42 => 3,  32 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "forms/fields/textarea/textarea.html.twig", "/Users/mac/Desktop/IntengineWebsite/hola/user/plugins/form/templates/forms/fields/textarea/textarea.html.twig");
    }
}
