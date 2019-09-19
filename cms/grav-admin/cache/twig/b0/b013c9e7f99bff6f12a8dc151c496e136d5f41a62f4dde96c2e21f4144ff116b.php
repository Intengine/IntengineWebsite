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

/* @particles/contentarray.html.twig */
class __TwigTemplate_d81518591b8b38e7dd2595f6970a3d0203b2438ec4b8d9a7841c1ab913973262 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'particle' => [$this, 'block_particle'],
            'javascript_footer' => [$this, 'block_javascript_footer'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@nucleus/partials/particle.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 3
        $context["attr_extra"] = $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->attributeArrayFilter($this->getAttribute(($context["particle"] ?? null), "extra", []));
        // line 4
        $context["article_settings"] = $this->getAttribute(($context["particle"] ?? null), "article", []);
        // line 5
        $context["filter"] = $this->getAttribute(($context["article_settings"] ?? null), "filter", []);
        // line 6
        $context["sort"] = $this->getAttribute(($context["article_settings"] ?? null), "sort", []);
        // line 7
        $context["limit"] = $this->getAttribute(($context["article_settings"] ?? null), "limit", []);
        // line 8
        $context["start"] = ($this->getAttribute(($context["limit"] ?? null), "start", []) + max(0, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->intFilter($this->getAttribute(($context["ajax"] ?? null), "start", []))));
        // line 9
        $context["display"] = $this->getAttribute(($context["article_settings"] ?? null), "display", []);
        // line 10
        $context["collection"] = $this->getAttribute($this->getAttribute(($context["grav"] ?? null), "page", []), "collection", [0 => ["items" => ["@taxonomy.category" => twig_split_filter($this->env, $this->getAttribute(        // line 12
($context["filter"] ?? null), "categories", []), " ")], "order" => ["by" => $this->getAttribute(        // line 13
($context["sort"] ?? null), "orderby", []), "dir" => $this->getAttribute(($context["sort"] ?? null), "ordering", [])], "url_taxonomy_filters" => false], 1 => false], "method");
        // line 17
        $context["total"] = $this->getAttribute(($context["collection"] ?? null), "count", [], "method");
        // line 18
        $context["pages"] = $this->getAttribute(($context["collection"] ?? null), "slice", [0 => ($context["start"] ?? null), 1 => $this->getAttribute(($context["limit"] ?? null), "total", [])], "method");
        // line 1
        $this->parent = $this->loadTemplate("@nucleus/partials/particle.html.twig", "@particles/contentarray.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 20
    public function block_particle($context, array $blocks = [])
    {
        // line 21
        echo "
    ";
        // line 23
        echo "    <div class=\"g-content-array g-grav-pages";
        if ($this->getAttribute($this->getAttribute(($context["particle"] ?? null), "css", []), "class", [])) {
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["particle"] ?? null), "css", []), "class", []), "html", null, true);
        }
        echo "\"";
        echo ($context["attr_extra"] ?? null);
        echo ">

        ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["pages"] ?? null), "batch", [0 => $this->getAttribute(($context["limit"] ?? null), "columns", [])], "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["column"]) {
            // line 26
            echo "            <div class=\"g-grid\">
                ";
            // line 27
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["column"]);
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 28
                echo "
                    <div class=\"g-block\">
                        <div class=\"g-content\">
                            <div class=\"g-array-item\">
                                ";
                // line 32
                if ($this->getAttribute($this->getAttribute(($context["display"] ?? null), "image", []), "enabled", [])) {
                    // line 33
                    echo "                                    ";
                    if (($this->getAttribute($this->getAttribute(($context["display"] ?? null), "image", []), "enabled", []) == "intro")) {
                        // line 34
                        echo "                                        ";
                        $context["file"] = (($this->env->getExtension('Grav\Common\Twig\TwigExtension')->definedDefaultFilter($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["page"], "header", []), "image", []), "summary", []), "enabled", []), false)) ? ((($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["page"], "header", []), "image", []), "summary", []), "file", [])) ? ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["page"], "header", []), "image", []), "summary", []), "file", [])) : (true))) : (""));
                        // line 35
                        echo "                                    ";
                    } elseif (($this->getAttribute($this->getAttribute(($context["display"] ?? null), "image", []), "enabled", []) == "full")) {
                        // line 36
                        echo "                                        ";
                        $context["file"] = (($this->env->getExtension('Grav\Common\Twig\TwigExtension')->definedDefaultFilter($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["page"], "header", []), "image", []), "text", []), "enabled", []), false)) ? ((($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["page"], "header", []), "image", []), "text", []), "file", [])) ? ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["page"], "header", []), "image", []), "text", []), "file", [])) : (true))) : (""));
                        // line 37
                        echo "                                    ";
                    }
                    // line 38
                    echo "
                                    ";
                    // line 39
                    $context["image"] = (((($context["file"] ?? null) === true)) ? (twig_first($this->env, $this->getAttribute($this->getAttribute($context["page"], "media", []), "images", []))) : (((($context["file"] ?? null)) ? ($this->getAttribute($this->getAttribute($this->getAttribute($context["page"], "media", []), "images", []), ($context["file"] ?? null), [], "array")) : (""))));
                    // line 40
                    echo "
                                    ";
                    // line 41
                    if (($context["image"] ?? null)) {
                        // line 42
                        echo "                                    <div class=\"g-array-item-image\">
                                        <a href=\"";
                        // line 43
                        echo twig_escape_filter($this->env, $this->getAttribute($context["page"], "url", []), "html", null, true);
                        echo "\">
                                            ";
                        // line 44
                        echo $this->getAttribute($this->getAttribute(($context["image"] ?? null), "cropZoom", [0 => $this->env->getExtension('Grav\Common\Twig\TwigExtension')->definedDefaultFilter($this->getAttribute($this->getAttribute($this->getAttribute($context["page"], "header", []), "image", []), "width", []), 900), 1 => $this->env->getExtension('Grav\Common\Twig\TwigExtension')->definedDefaultFilter($this->getAttribute($this->getAttribute($this->getAttribute($context["page"], "header", []), "image", []), "height", []), 300)], "method"), "html", []);
                        echo "
                                        </a>
                                    </div>
                                    ";
                    }
                    // line 48
                    echo "                                ";
                }
                // line 49
                echo "
                                ";
                // line 50
                if ($this->getAttribute($this->getAttribute(($context["display"] ?? null), "title", []), "enabled", [])) {
                    // line 51
                    echo "                                    <div class=\"g-array-item-title\">
                                        <h3 class=\"g-item-title\">
                                            <a href=\"";
                    // line 53
                    echo twig_escape_filter($this->env, $this->getAttribute($context["page"], "url", []), "html", null, true);
                    echo "\">
                                                ";
                    // line 54
                    echo (($this->getAttribute($this->getAttribute(($context["display"] ?? null), "title", []), "limit", [])) ? ($this->env->getExtension('Gantry\Component\Twig\TwigExtension')->truncateText(twig_escape_filter($this->env, $this->getAttribute($context["page"], "title", [])), $this->getAttribute($this->getAttribute(($context["display"] ?? null), "title", []), "limit", []))) : (twig_escape_filter($this->env, $this->getAttribute($context["page"], "title", []))));
                    echo "
                                            </a>
                                        </h3>
                                    </div>
                                ";
                }
                // line 59
                echo "
                                ";
                // line 60
                if ((($this->getAttribute($this->getAttribute(($context["display"] ?? null), "date", []), "enabled", []) || ($this->getAttribute($this->getAttribute(($context["display"] ?? null), "author", []), "enabled", []) && (($this->getAttribute($this->getAttribute($this->getAttribute($context["page"], "header", []), "author", []), "username", []) || $this->getAttribute($this->getAttribute($this->getAttribute($context["page"], "header", []), "author", []), "name", [])) || $this->getAttribute($this->getAttribute($this->getAttribute($context["page"], "header", []), "author", []), "alias", [])))) || $this->getAttribute($this->getAttribute(($context["display"] ?? null), "category", []), "enabled", []))) {
                    // line 61
                    echo "                                    <div class=\"g-array-item-details\">
                                        ";
                    // line 62
                    if ($this->getAttribute($this->getAttribute(($context["display"] ?? null), "date", []), "enabled", [])) {
                        // line 63
                        echo "                                            <span class=\"g-array-item-date\">
                                                ";
                        // line 64
                        if (($this->getAttribute($this->getAttribute(($context["display"] ?? null), "date", []), "enabled", []) == "published")) {
                            // line 65
                            echo "                                                    <i class=\"fa fa-clock-o\" aria-hidden=\"true\"></i>";
                            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["page"], "publishDate", [], "method"), $this->getAttribute($this->getAttribute(($context["display"] ?? null), "date", []), "format", [])), "html", null, true);
                            echo "
                                                ";
                        } elseif (($this->getAttribute($this->getAttribute(                        // line 66
($context["display"] ?? null), "date", []), "enabled", []) == "modified")) {
                            // line 67
                            echo "                                                    <i class=\"fa fa-clock-o\" aria-hidden=\"true\"></i>";
                            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["page"], "modified", []), $this->getAttribute($this->getAttribute(($context["display"] ?? null), "date", []), "format", [])), "html", null, true);
                            echo "
                                                ";
                        } else {
                            // line 69
                            echo "                                                    <i class=\"fa fa-clock-o\" aria-hidden=\"true\"></i>";
                            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["page"], "date", []), $this->getAttribute($this->getAttribute(($context["display"] ?? null), "date", []), "format", [])), "html", null, true);
                            echo "
                                                ";
                        }
                        // line 71
                        echo "                                            </span>
                                        ";
                    }
                    // line 73
                    echo "
                                        ";
                    // line 74
                    if (($this->getAttribute($this->getAttribute(($context["display"] ?? null), "author", []), "enabled", []) && (($this->getAttribute($this->getAttribute($this->getAttribute($context["page"], "header", []), "author", []), "username", []) || $this->getAttribute($this->getAttribute($this->getAttribute($context["page"], "header", []), "author", []), "name", [])) || $this->getAttribute($this->getAttribute($this->getAttribute($context["page"], "header", []), "author", []), "alias", [])))) {
                        // line 75
                        echo "                                            ";
                        if ($this->getAttribute($this->getAttribute($this->getAttribute($context["page"], "header", []), "author", []), "name", [])) {
                            // line 76
                            echo "                                                ";
                            $context["author"] = $this->getAttribute($this->getAttribute($this->getAttribute($context["page"], "header", []), "author", []), "name", []);
                            // line 77
                            echo "                                            ";
                        } elseif ($this->getAttribute($this->getAttribute($this->getAttribute($context["page"], "header", []), "author", []), "alias", [])) {
                            // line 78
                            echo "                                                ";
                            $context["author"] = $this->getAttribute($this->getAttribute($this->getAttribute($context["page"], "header", []), "author", []), "alias", []);
                            // line 79
                            echo "                                            ";
                        } else {
                            // line 80
                            echo "                                                ";
                            $context["author"] = $this->getAttribute($this->getAttribute($this->getAttribute($context["page"], "header", []), "author", []), "username", []);
                            // line 81
                            echo "                                            ";
                        }
                        // line 82
                        echo "
                                            <span class=\"g-array-item-author\">
                                                <i class=\"fa fa-user\" aria-hidden=\"true\"></i>";
                        // line 84
                        echo twig_escape_filter($this->env, ($context["author"] ?? null), "html", null, true);
                        echo "
                                            </span>
                                        ";
                    }
                    // line 87
                    echo "
                                        ";
                    // line 88
                    if ($this->getAttribute($this->getAttribute(($context["display"] ?? null), "category", []), "enabled", [])) {
                        // line 89
                        echo "                                            <span class=\"g-array-item-category\">
                                                ";
                        // line 90
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($context["page"], "taxonomy", []), "category", []));
                        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                            // line 91
                            echo "                                                    ";
                            if ($this->getAttribute($this->getAttribute(($context["display"] ?? null), "category", []), "route", [])) {
                                // line 92
                                echo "                                                        <a href=\"";
                                echo twig_escape_filter($this->env, (($context["base_url"] ?? null) . $this->getAttribute($this->getAttribute(($context["display"] ?? null), "category", []), "route", [])), "html", null, true);
                                echo "\">
                                                            <i class=\"fa fa-folder-open\" aria-hidden=\"true\"></i>";
                                // line 93
                                echo $context["category"];
                                echo "
                                                        </a>
                                                    ";
                            } else {
                                // line 96
                                echo "                                                        <i class=\"fa fa-folder-open\" aria-hidden=\"true\"></i>";
                                echo $context["category"];
                                echo "
                                                    ";
                            }
                            // line 98
                            echo "                                                ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 99
                        echo "                                            </span>
                                        ";
                    }
                    // line 101
                    echo "                                    </div>
                                ";
                }
                // line 103
                echo "
                                ";
                // line 104
                if ($this->getAttribute($this->getAttribute(($context["display"] ?? null), "text", []), "type", [])) {
                    // line 105
                    echo "                                    ";
                    $context["page_text"] = ((($this->getAttribute($this->getAttribute(($context["display"] ?? null), "text", []), "type", []) == "intro")) ? ($this->getAttribute($context["page"], "summary", [])) : ($this->getAttribute($context["page"], "content", [])));
                    // line 106
                    echo "                                    <div class=\"g-array-item-text\">
                                        ";
                    // line 107
                    if (($this->getAttribute($this->getAttribute(($context["display"] ?? null), "text", []), "formatting", []) == "text")) {
                        // line 108
                        echo "                                            ";
                        echo $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->truncateText(($context["page_text"] ?? null), $this->getAttribute($this->getAttribute(($context["display"] ?? null), "text", []), "limit", []));
                        echo "
                                        ";
                    } else {
                        // line 110
                        echo "                                            ";
                        echo $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->truncateHtml(($context["page_text"] ?? null), $this->getAttribute($this->getAttribute(($context["display"] ?? null), "text", []), "limit", []));
                        echo "
                                        ";
                    }
                    // line 112
                    echo "                                    </div>
                                ";
                }
                // line 114
                echo "
                                ";
                // line 115
                if ($this->getAttribute($this->getAttribute(($context["display"] ?? null), "read_more", []), "enabled", [])) {
                    // line 116
                    echo "                                    <div class=\"g-array-item-read-more\">
                                        <a href=\"";
                    // line 117
                    echo twig_escape_filter($this->env, $this->getAttribute($context["page"], "url", []), "html", null, true);
                    echo "\">
                                            <button class=\"button";
                    // line 118
                    if ($this->getAttribute($this->getAttribute(($context["display"] ?? null), "read_more", []), "css", [])) {
                        echo " ";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["display"] ?? null), "read_more", []), "css", []), "html", null, true);
                    }
                    echo "\">";
                    echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["display"] ?? null), "read_more", [], "any", false, true), "label", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["display"] ?? null), "read_more", [], "any", false, true), "label", []), "Read More...")) : ("Read More...")), "html", null, true);
                    echo "</button>

                                        </a>
                                    </div>
                                ";
                }
                // line 123
                echo "                            </div>
                        </div>
                    </div>

                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 128
            echo "            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['column'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 130
        echo "
        ";
        // line 131
        if (((($context["total"] ?? null) > $this->getAttribute(($context["limit"] ?? null), "total", [])) && $this->getAttribute(($context["display"] ?? null), "pagination_buttons", []))) {
            // line 132
            echo "            <div class=\"g-content-array-pagination\">
                <button class=\"button float-left contentarray-button pagination-button pagination-button-prev\" data-id=\"";
            // line 133
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "\" data-start=\"";
            echo twig_escape_filter($this->env, max(0, (($context["start"] ?? null) - $this->getAttribute(($context["limit"] ?? null), "total", []))), "html", null, true);
            echo "\"";
            echo ((((($context["start"] ?? null) - $this->getAttribute(($context["limit"] ?? null), "total", [])) < 0)) ? (" disabled") : (""));
            echo ">Prev</button>
                <button class=\"button float-right contentarray-button pagination-button pagination-button-next\" data-id=\"";
            // line 134
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "\" data-start=\"";
            echo twig_escape_filter($this->env, (($context["start"] ?? null) + $this->getAttribute(($context["limit"] ?? null), "total", [])), "html", null, true);
            echo "\"";
            echo ((((($context["start"] ?? null) + $this->getAttribute(($context["limit"] ?? null), "total", [])) >= ($context["total"] ?? null))) ? (" disabled") : (""));
            echo ">Next</button>
                <div class=\"clearfix\"></div>
            </div>
        ";
        }
        // line 138
        echo "    </div>

";
    }

    // line 142
    public function block_javascript_footer($context, array $blocks = [])
    {
        // line 143
        echo "    ";
        if (((($context["total"] ?? null) > $this->getAttribute(($context["limit"] ?? null), "total", [])) && $this->getAttribute(($context["display"] ?? null), "pagination_buttons", []))) {
            // line 144
            echo "        ";
            $this->getAttribute(($context["gantry"] ?? null), "load", [0 => "jquery"], "method");
            // line 145
            echo "        <script>
            (function (\$) {
                \$(document).on('click', 'button.contentarray-button', function () {
                    var id = \$(this).attr('data-id'),
                        start = \$(this).attr('data-start'),
                        request = {
                            'outline': ";
            // line 151
            echo twig_jsonencode_filter($this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "page", []), "outline", []));
            echo ",
                            'id'     : id,
                            'start'  : start
                        };
                    \$.ajax('";
            // line 155
            echo twig_escape_filter($this->env, (($context["base_url"] ?? null) . "/api/particle.json"), "html", null, true);
            echo "', {
                        type       : 'GET',
                        data       : request,
                        indexValue : id + '-particle',
                        success: function (response) {
                            if(response.html) {
                                \$('#' + this.indexValue).html(response.html);
                            } else {
                                // TODO: Improve error handling -- instead of replacing particle content, display flash message or something...
                                \$('#' + this.indexValue).html(response.message);
                            }
                            if (response._debugbar && window.phpdebugbar) {
                                window.phpdebugbar.addDataSet(response._debugbar);
                            }
                        },
                        error: function(response) {
                            // TODO: Improve error handling -- instead of replacing particle content, display flash message or something...
                            \$('#' + this.indexValue).html('AJAX FAILED ON ERROR');
                        }
                    });
                    return false;
                });
            })(jQuery)
        </script>
    ";
        }
    }

    public function getTemplateName()
    {
        return "@particles/contentarray.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  410 => 155,  403 => 151,  395 => 145,  392 => 144,  389 => 143,  386 => 142,  380 => 138,  369 => 134,  361 => 133,  358 => 132,  356 => 131,  353 => 130,  346 => 128,  336 => 123,  323 => 118,  319 => 117,  316 => 116,  314 => 115,  311 => 114,  307 => 112,  301 => 110,  295 => 108,  293 => 107,  290 => 106,  287 => 105,  285 => 104,  282 => 103,  278 => 101,  274 => 99,  268 => 98,  262 => 96,  256 => 93,  251 => 92,  248 => 91,  244 => 90,  241 => 89,  239 => 88,  236 => 87,  230 => 84,  226 => 82,  223 => 81,  220 => 80,  217 => 79,  214 => 78,  211 => 77,  208 => 76,  205 => 75,  203 => 74,  200 => 73,  196 => 71,  190 => 69,  184 => 67,  182 => 66,  177 => 65,  175 => 64,  172 => 63,  170 => 62,  167 => 61,  165 => 60,  162 => 59,  154 => 54,  150 => 53,  146 => 51,  144 => 50,  141 => 49,  138 => 48,  131 => 44,  127 => 43,  124 => 42,  122 => 41,  119 => 40,  117 => 39,  114 => 38,  111 => 37,  108 => 36,  105 => 35,  102 => 34,  99 => 33,  97 => 32,  91 => 28,  87 => 27,  84 => 26,  80 => 25,  69 => 23,  66 => 21,  63 => 20,  58 => 1,  56 => 18,  54 => 17,  52 => 13,  51 => 12,  50 => 10,  48 => 9,  46 => 8,  44 => 7,  42 => 6,  40 => 5,  38 => 4,  36 => 3,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@nucleus/partials/particle.html.twig' %}

{% set attr_extra = particle.extra|attribute_array %}
{% set article_settings = particle.article %}
{% set filter = article_settings.filter %}
{% set sort = article_settings.sort %}
{% set limit = article_settings.limit %}
{% set start = limit.start + max(0, ajax.start|int) %}
{% set display = article_settings.display %}
{% set collection = grav.page.collection(
    {
        items: {'@taxonomy.category': filter.categories|split(' ')},
        order: {by: sort.orderby, dir: sort.ordering},
        url_taxonomy_filters: false
    },
    false) %}
{% set total = collection.count() %}
{% set pages = collection.slice(start, limit.total) %}

{% block particle %}

    {# All pages #}
    <div class=\"g-content-array g-grav-pages{% if particle.css.class %} {{ particle.css.class }}{% endif %}\" {{- attr_extra|raw }}>

        {% for column in pages.batch(limit.columns) %}
            <div class=\"g-grid\">
                {% for page in column %}

                    <div class=\"g-block\">
                        <div class=\"g-content\">
                            <div class=\"g-array-item\">
                                {% if display.image.enabled %}
                                    {% if display.image.enabled == 'intro' %}
                                        {% set file = page.header.image.summary.enabled|defined(false) ? (page.header.image.summary.file ?: true) %}
                                    {% elseif display.image.enabled == 'full' %}
                                        {% set file = page.header.image.text.enabled|defined(false) ? (page.header.image.text.file ?: true) %}
                                    {% endif %}

                                    {% set image = file is same as(true) ? page.media.images|first : (file ? page.media.images[file]) %}

                                    {% if image %}
                                    <div class=\"g-array-item-image\">
                                        <a href=\"{{ page.url }}\">
                                            {{ image.cropZoom(page.header.image.width|defined(900), page.header.image.height|defined(300)).html|raw }}
                                        </a>
                                    </div>
                                    {% endif %}
                                {% endif %}

                                {% if display.title.enabled %}
                                    <div class=\"g-array-item-title\">
                                        <h3 class=\"g-item-title\">
                                            <a href=\"{{ page.url }}\">
                                                {{ (display.title.limit ? page.title|e|truncate_text(display.title.limit) : page.title|e)|raw }}
                                            </a>
                                        </h3>
                                    </div>
                                {% endif %}

                                {% if display.date.enabled or (display.author.enabled and (page.header.author.username or page.header.author.name or page.header.author.alias)) or display.category.enabled %}
                                    <div class=\"g-array-item-details\">
                                        {% if display.date.enabled %}
                                            <span class=\"g-array-item-date\">
                                                {% if display.date.enabled == 'published' %}
                                                    <i class=\"fa fa-clock-o\" aria-hidden=\"true\"></i>{{ page.publishDate()|date(display.date.format) }}
                                                {% elseif display.date.enabled == 'modified' %}
                                                    <i class=\"fa fa-clock-o\" aria-hidden=\"true\"></i>{{ page.modified|date(display.date.format) }}
                                                {% else %}
                                                    <i class=\"fa fa-clock-o\" aria-hidden=\"true\"></i>{{ page.date|date(display.date.format) }}
                                                {% endif %}
                                            </span>
                                        {% endif %}

                                        {% if display.author.enabled and (page.header.author.username or page.header.author.name or page.header.author.alias) %}
                                            {% if page.header.author.name %}
                                                {% set author = page.header.author.name %}
                                            {% elseif page.header.author.alias %}
                                                {% set author = page.header.author.alias %}
                                            {% else %}
                                                {% set author = page.header.author.username %}
                                            {% endif %}

                                            <span class=\"g-array-item-author\">
                                                <i class=\"fa fa-user\" aria-hidden=\"true\"></i>{{ author }}
                                            </span>
                                        {% endif %}

                                        {% if display.category.enabled %}
                                            <span class=\"g-array-item-category\">
                                                {% for category in page.taxonomy.category %}
                                                    {% if display.category.route %}
                                                        <a href=\"{{ base_url ~ display.category.route }}\">
                                                            <i class=\"fa fa-folder-open\" aria-hidden=\"true\"></i>{{ category|raw }}
                                                        </a>
                                                    {% else %}
                                                        <i class=\"fa fa-folder-open\" aria-hidden=\"true\"></i>{{ category|raw }}
                                                    {% endif %}
                                                {% endfor %}
                                            </span>
                                        {% endif %}
                                    </div>
                                {% endif %}

                                {% if display.text.type %}
                                    {% set page_text = display.text.type == 'intro' ? page.summary : page.content %}
                                    <div class=\"g-array-item-text\">
                                        {% if display.text.formatting == 'text' %}
                                            {{ page_text|truncate_text(display.text.limit)|raw }}
                                        {% else %}
                                            {{ page_text|truncate_html(display.text.limit)|raw }}
                                        {% endif %}
                                    </div>
                                {% endif %}

                                {% if display.read_more.enabled %}
                                    <div class=\"g-array-item-read-more\">
                                        <a href=\"{{ page.url }}\">
                                            <button class=\"button{% if display.read_more.css %} {{ display.read_more.css }}{% endif %}\">{{ display.read_more.label|default('Read More...') }}</button>

                                        </a>
                                    </div>
                                {% endif %}
                            </div>
                        </div>
                    </div>

                {% endfor %}
            </div>
        {% endfor %}

        {% if total > limit.total and display.pagination_buttons %}
            <div class=\"g-content-array-pagination\">
                <button class=\"button float-left contentarray-button pagination-button pagination-button-prev\" data-id=\"{{ id }}\" data-start=\"{{ max(0, start - limit.total) }}\"{{ start - limit.total < 0 ? ' disabled' }}>Prev</button>
                <button class=\"button float-right contentarray-button pagination-button pagination-button-next\" data-id=\"{{ id }}\" data-start=\"{{ start + limit.total }}\"{{ start + limit.total >= total ? ' disabled' }}>Next</button>
                <div class=\"clearfix\"></div>
            </div>
        {% endif %}
    </div>

{% endblock %}

{% block javascript_footer %}
    {% if total > limit.total and display.pagination_buttons %}
        {% do gantry.load('jquery') %}
        <script>
            (function (\$) {
                \$(document).on('click', 'button.contentarray-button', function () {
                    var id = \$(this).attr('data-id'),
                        start = \$(this).attr('data-start'),
                        request = {
                            'outline': {{ gantry.page.outline|json_encode|raw }},
                            'id'     : id,
                            'start'  : start
                        };
                    \$.ajax('{{ base_url ~ '/api/particle.json' }}', {
                        type       : 'GET',
                        data       : request,
                        indexValue : id + '-particle',
                        success: function (response) {
                            if(response.html) {
                                \$('#' + this.indexValue).html(response.html);
                            } else {
                                // TODO: Improve error handling -- instead of replacing particle content, display flash message or something...
                                \$('#' + this.indexValue).html(response.message);
                            }
                            if (response._debugbar && window.phpdebugbar) {
                                window.phpdebugbar.addDataSet(response._debugbar);
                            }
                        },
                        error: function(response) {
                            // TODO: Improve error handling -- instead of replacing particle content, display flash message or something...
                            \$('#' + this.indexValue).html('AJAX FAILED ON ERROR');
                        }
                    });
                    return false;
                });
            })(jQuery)
        </script>
    {% endif %}
{% endblock %}
", "@particles/contentarray.html.twig", "/Users/mac/Desktop/IntengineWebsite/cms/grav-admin/user/plugins/gantry5/engines/nucleus/particles/contentarray.html.twig");
    }
}
