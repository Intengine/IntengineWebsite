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

/* forms/fields/order-child/order-child.html.twig */
class __TwigTemplate_14e15f65b30965ab7faedea356d8c913ad50a0d243866437fbae0623b2660a83 extends \Twig\Template
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
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "admin-power-tools", [], "array"), "child_reordering_enabled", [])) {
            // line 2
            echo "    
    ";
            // line 3
            $context["value"] = (((null === ($context["value"] ?? null))) ? ($this->getAttribute(($context["field"] ?? null), "default", [])) : (($context["value"] ?? null)));
            // line 4
            echo "    ";
            $context["siblings"] = $this->getAttribute(($context["data"] ?? null), "children", []);
            // line 5
            echo "    ";
            $context["canOrder"] = true;
            // line 6
            echo "    ";
            $context["vertical"] = ($this->getAttribute(($context["field"] ?? null), "style", []) == "vertical");
            // line 7
            echo "
    ";
            // line 9
            echo "
    <div class=\"form-field grid pure-g";
            // line 10
            if (($context["vertical"] ?? null)) {
                echo " vertical";
            }
            echo "\">
        <div class=\"form-label";
            // line 11
            if ( !($context["vertical"] ?? null)) {
                echo " block size-1-3 pure-u-1-3";
            }
            echo "\">
            <label>
                ";
            // line 13
            if ($this->getAttribute(($context["field"] ?? null), "help", [])) {
                // line 14
                echo "                    <span class=\"tooltip\" data-asTooltip-position=\"w\"
                          title=\"";
                // line 15
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter(twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "help", []))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter($this->getAttribute(($context["field"] ?? null), "label", [])), "html", null, true);
                echo "</span>
                ";
            } else {
                // line 17
                echo "                    ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter($this->getAttribute(($context["field"] ?? null), "label", [])), "html", null, true);
                echo "
                ";
            }
            // line 19
            echo "                ";
            echo ((twig_in_filter($this->getAttribute($this->getAttribute(($context["field"] ?? null), "validate", []), "required", []), [0 => "on", 1 => "true", 2 => 1])) ? ("<span class=\"required\">*</span>") : (""));
            echo "
            </label>
        </div>
        <div class=\"form-data";
            // line 22
            if ( !($context["vertical"] ?? null)) {
                echo " block size-2-3 pure-u-2-3";
            }
            echo "\">
            <div class=\"form-order-wrapper ";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "size", []), "html", null, true);
            echo "\">
                <input
                        type=\"hidden\"
                        data-order-child
                        ";
            // line 27
            if (($this->getAttribute(($context["field"] ?? null), "disabled", []) || ($context["isDisabledToggleable"] ?? null))) {
                echo "disabled=\"disabled\"";
            }
            // line 28
            echo "                        name=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->fieldNameFilter((($context["scope"] ?? null) . $this->getAttribute(($context["field"] ?? null), "name", []))), "html", null, true);
            echo "\"
                        value=\"\"/>
                ";
            // line 30
            if ( !($context["canOrder"] ?? null)) {
                // line 31
                echo "                    <div class=\"notice\">";
                echo $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.ORDERING_DISABLED_BECAUSE_PAGE_NO_PREFIX");
                echo "</div>
                ";
            }
            // line 33
            echo "                ";
            if ((twig_length_filter($this->env, ($context["siblings"] ?? null)) == 0)) {
                // line 34
                echo "                    <label>No Child Pages</label>
                ";
            } elseif ((twig_length_filter($this->env,             // line 35
($context["siblings"] ?? null)) < 200)) {
                // line 36
                echo "                    ";
                $context["sortable_count"] = 0;
                // line 37
                echo "                    <ul id=\"ordering-child\" class=\"orderable ";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "classes", []), "html", null, true);
                echo "\">
                        ";
                // line 38
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["siblings"] ?? null));
                $context['loop'] = [
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                ];
                foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                    if ($this->getAttribute($context["page"], "order", [])) {
                        // line 39
                        echo "                            <li class=\"drag-handle\"
                                data-id=\"";
                        // line 40
                        echo twig_escape_filter($this->env, $this->getAttribute($context["page"], "slug", []), "html", null, true);
                        echo "\" ";
                        echo ((($this->getAttribute($context["page"], "slug", []) == $this->getAttribute(($context["data"] ?? null), "slug", []))) ? ("data-active-id") : (""));
                        echo "><span
                                        class=\"page-order\">";
                        // line 41
                        echo twig_escape_filter($this->env, $this->getAttribute($context["page"], "order", []), "html", null, true);
                        echo "</span> ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["page"], "title", []));
                        echo " <a
                                        href=\"";
                        // line 42
                        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->getPageUrl($context, $context["page"]), "html", null, true);
                        echo "\"><i class=\"fa fa-external-link\"></i></a></li>
                            ";
                        // line 43
                        $context["sortable_count"] = $this->getAttribute($context["loop"], "index", []);
                        // line 44
                        echo "                        ";
                        ++$context['loop']['index0'];
                        ++$context['loop']['index'];
                        $context['loop']['first'] = false;
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 45
                echo "                    </ul>
                    ";
                // line 46
                if ((($context["sortable_count"] ?? null) < twig_length_filter($this->env, ($context["siblings"] ?? null)))) {
                    // line 47
                    echo "                        <label>";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.UNSORTABLE_PAGES"), "html", null, true);
                    echo "</label>
                        <ul class=\"orderable disabled\">
                            ";
                    // line 49
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["siblings"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                        if ( !$this->getAttribute($context["page"], "order", [])) {
                            // line 50
                            echo "                                <li ";
                            echo ((($this->getAttribute($context["page"], "slug", []) == $this->getAttribute(($context["data"] ?? null), "slug", []))) ? ("data-active-id") : (""));
                            echo ">";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["page"], "title", []));
                            echo " <a
                                            href=\"";
                            // line 51
                            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->getPageUrl($context, $context["page"]), "html", null, true);
                            echo "\"><i class=\"fa fa-external-link\"></i></a></li>
                            ";
                        }
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 53
                    echo "                        </ul>
                    ";
                }
                // line 55
                echo "                ";
            } else {
                // line 56
                echo "                    <div class=\"notice\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.ORDERING_DISABLED_BECAUSE_TOO_MANY_SIBLINGS"), "html", null, true);
                echo "</div>
                ";
            }
            // line 58
            echo "            </div>
        </div>
    </div>
";
        }
    }

    public function getTemplateName()
    {
        return "forms/fields/order-child/order-child.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  224 => 58,  218 => 56,  215 => 55,  211 => 53,  202 => 51,  195 => 50,  190 => 49,  184 => 47,  182 => 46,  179 => 45,  169 => 44,  167 => 43,  163 => 42,  157 => 41,  151 => 40,  148 => 39,  137 => 38,  132 => 37,  129 => 36,  127 => 35,  124 => 34,  121 => 33,  115 => 31,  113 => 30,  107 => 28,  103 => 27,  96 => 23,  90 => 22,  83 => 19,  77 => 17,  70 => 15,  67 => 14,  65 => 13,  58 => 11,  52 => 10,  49 => 9,  46 => 7,  43 => 6,  40 => 5,  37 => 4,  35 => 3,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% if config.plugins['admin-power-tools'].child_reordering_enabled %}
    
    {% set value = (value is null ? field.default : value) %}
    {% set siblings = data.children %}
    {% set canOrder = true %}
    {% set vertical = field.style == 'vertical' %}

    {#TODO refactor common code from order and order-child#}

    <div class=\"form-field grid pure-g{% if vertical %} vertical{% endif %}\">
        <div class=\"form-label{% if not vertical %} block size-1-3 pure-u-1-3{% endif %}\">
            <label>
                {% if field.help %}
                    <span class=\"tooltip\" data-asTooltip-position=\"w\"
                          title=\"{{ field.help|e|tu }}\">{{ field.label|tu }}</span>
                {% else %}
                    {{ field.label|tu }}
                {% endif %}
                {{ field.validate.required in ['on', 'true', 1] ? '<span class=\"required\">*</span>' }}
            </label>
        </div>
        <div class=\"form-data{% if not vertical %} block size-2-3 pure-u-2-3{% endif %}\">
            <div class=\"form-order-wrapper {{ field.size }}\">
                <input
                        type=\"hidden\"
                        data-order-child
                        {% if field.disabled or isDisabledToggleable %}disabled=\"disabled\"{% endif %}
                        name=\"{{ (scope ~ field.name)|fieldName }}\"
                        value=\"\"/>
                {% if not canOrder %}
                    <div class=\"notice\">{{ \"PLUGIN_ADMIN.ORDERING_DISABLED_BECAUSE_PAGE_NO_PREFIX\"|tu|raw }}</div>
                {% endif %}
                {% if siblings|length == 0 %}
                    <label>No Child Pages</label>
                {% elseif siblings|length < 200 %}
                    {% set sortable_count = 0 %}
                    <ul id=\"ordering-child\" class=\"orderable {{ field.classes }}\">
                        {% for page in siblings if page.order %}
                            <li class=\"drag-handle\"
                                data-id=\"{{ page.slug }}\" {{ page.slug == data.slug ? 'data-active-id' : '' }}><span
                                        class=\"page-order\">{{ page.order }}</span> {{ page.title|e }} <a
                                        href=\"{{ getPageUrl(page) }}\"><i class=\"fa fa-external-link\"></i></a></li>
                            {% set sortable_count = loop.index %}
                        {% endfor %}
                    </ul>
                    {% if sortable_count < siblings|length %}
                        <label>{{ \"PLUGIN_ADMIN.UNSORTABLE_PAGES\"|tu }}</label>
                        <ul class=\"orderable disabled\">
                            {% for page in siblings if not page.order %}
                                <li {{ page.slug == data.slug ? 'data-active-id' : '' }}>{{ page.title|e }} <a
                                            href=\"{{ getPageUrl(page) }}\"><i class=\"fa fa-external-link\"></i></a></li>
                            {% endfor %}
                        </ul>
                    {% endif %}
                {% else %}
                    <div class=\"notice\">{{ \"PLUGIN_ADMIN.ORDERING_DISABLED_BECAUSE_TOO_MANY_SIBLINGS\"|tu }}</div>
                {% endif %}
            </div>
        </div>
    </div>
{% endif %}", "forms/fields/order-child/order-child.html.twig", "/Users/sylwesterpilarz/Desktop/IntengineWebsite/cms/grav-admin/user/plugins/admin-power-tools/admin/templates/forms/fields/order-child/order-child.html.twig");
    }
}
