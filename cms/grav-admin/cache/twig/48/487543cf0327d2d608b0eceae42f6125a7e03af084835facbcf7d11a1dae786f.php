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

/* @particles/jlopenstreetmap.html.twig */
class __TwigTemplate_96997ee8419284ec3051c8c5ed8d3208a1606e172533db52417ccc7651ecad3a extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
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
        // line 14
        ob_start();
        // line 15
        if (($this->getAttribute(($context["particle"] ?? null), "viewport_height", []) == "none")) {
        } elseif (($this->getAttribute(        // line 16
($context["particle"] ?? null), "viewport_height", []) == "full")) {
            // line 17
            echo "jl-height-viewport=\"offset-top: true\"
";
        } elseif (($this->getAttribute(        // line 18
($context["particle"] ?? null), "viewport_height", []) == "percent")) {
            // line 19
            echo "jl-height-viewport=\"offset-top: true;offset-bottom: 20\"
";
        } elseif (($this->getAttribute(        // line 20
($context["particle"] ?? null), "viewport_height", []) == "section")) {
            // line 21
            echo "jl-height-viewport=\"offset-top: true;offset-bottom: 50\"
";
        } elseif (($this->getAttribute(        // line 22
($context["particle"] ?? null), "viewport_height", []) == "expand")) {
            // line 23
            echo "jl-height-viewport=\"expand: true\"
";
        }
        $context["viewport_height"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 28
        ob_start();
        // line 29
        if (($this->getAttribute(($context["particle"] ?? null), "viewport_height", []) == "full")) {
        } else {
            // line 31
            if (($this->getAttribute(($context["particle"] ?? null), "padding", []) == "default")) {
            } else {
                echo " jl-section-";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "padding", []));
            }
        }
        $context["padding"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 36
        ob_start();
        // line 37
        if (($this->getAttribute(($context["particle"] ?? null), "container", []) == "1")) {
            // line 38
            echo "<div class=\"jl-container\"><div class=\"g5-content g5-particle\">";
        }
        $context["container"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 42
        ob_start();
        // line 43
        if (($this->getAttribute(($context["particle"] ?? null), "container", []) == "1")) {
            // line 44
            echo "</div></div>";
        }
        $context["endcontainer"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 48
        ob_start();
        // line 49
        if ($this->getAttribute(($context["particle"] ?? null), "parallax_bg_color", [])) {
            // line 50
            echo "style=\"background-color: ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "parallax_bg_color", []), "html", null, true);
            echo ";\"";
        }
        $context["parallax_bg_color"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 54
        ob_start();
        // line 55
        if (($this->getAttribute(($context["particle"] ?? null), "g_maxwidth", []) != "inherit")) {
            echo " jl-width-";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "g_maxwidth", []), "html", null, true);
            if (($this->getAttribute(($context["particle"] ?? null), "g_maxwidth_breakpoint", []) != "always")) {
                echo "@";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "g_maxwidth_breakpoint", []), "html", null, true);
            }
            if (($this->getAttribute(($context["particle"] ?? null), "g_maxwidth_alignment", []) == "left")) {
            } elseif (($this->getAttribute(($context["particle"] ?? null), "g_maxwidth_alignment", []) == "center")) {
                echo " jl-margin-auto";
            } else {
                echo " jl-margin-auto-left";
            }
        }
        $context["content_maxwidth"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 59
        ob_start();
        // line 60
        if ($this->getAttribute(($context["particle"] ?? null), "parallax_image", [])) {
            // line 61
            echo "<div data-src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc($this->getAttribute(($context["particle"] ?? null), "parallax_image", [])));
            echo "\" class=\"";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo " jl-background-norepeat";
            echo twig_escape_filter($this->env, ($context["padding"] ?? null), "html", null, true);
            echo twig_escape_filter($this->env, ($context["content_maxwidth"] ?? null), "html", null, true);
            echo " jl-background-";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "background_image_position", []));
            if (($this->getAttribute(($context["particle"] ?? null), "background_image_size", []) != "auto")) {
                echo " jl-background-";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "background_image_size", []));
            }
            if (($this->getAttribute(($context["particle"] ?? null), "parallax_bg_visibility", []) != "always")) {
                echo " jl-background-image@";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "parallax_bg_visibility", []));
            }
            if (($this->getAttribute(($context["particle"] ?? null), "vertical_alignment", []) != "none")) {
                echo " jl-flex jl-flex-";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "vertical_alignment", []));
            }
            if (($this->getAttribute(($context["particle"] ?? null), "parallax_text_color", []) != "default")) {
                echo " jl-";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "parallax_text_color", []));
            }
            if (($this->getAttribute(($context["particle"] ?? null), "blendmode", []) != "inherit")) {
                echo " jl-background-blend-";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "blendmode", []));
            }
            echo "\" ";
            echo twig_escape_filter($this->env, ($context["parallax_bg_color"] ?? null), "html", null, true);
            if (((($this->getAttribute(($context["particle"] ?? null), "horizontal_start", []) || $this->getAttribute(($context["particle"] ?? null), "horizontal_end", [])) || $this->getAttribute(($context["particle"] ?? null), "vertical_start", [])) || $this->getAttribute(($context["particle"] ?? null), "vertical_end", []))) {
                echo " jl-parallax=\"";
                if (($this->getAttribute(($context["particle"] ?? null), "horizontal_start", []) || $this->getAttribute(($context["particle"] ?? null), "horizontal_end", []))) {
                    echo "bgx: ";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "horizontal_start", []));
                    echo ",";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "horizontal_end", []));
                    echo ";";
                }
                if (($this->getAttribute(($context["particle"] ?? null), "vertical_start", []) || $this->getAttribute(($context["particle"] ?? null), "vertical_end", []))) {
                    echo "bgy: ";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "vertical_start", []));
                    echo ",";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "vertical_end", []));
                    echo ";";
                }
                if (($this->getAttribute(($context["particle"] ?? null), "parallax_bg_breakpoint", []) != "always")) {
                    echo " media: @";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "parallax_bg_breakpoint", []));
                }
                echo "\" ";
            }
            echo " jl-img ";
            echo twig_escape_filter($this->env, ($context["viewport_height"] ?? null), "html", null, true);
            echo ">
";
            // line 62
            echo twig_escape_filter($this->env, ($context["container"] ?? null), "html", null, true);
            echo "
";
        }
        $context["parallaxbackground"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 67
        ob_start();
        // line 68
        if ($this->getAttribute(($context["particle"] ?? null), "parallax_image", [])) {
            // line 69
            echo twig_escape_filter($this->env, ($context["endcontainer"] ?? null), "html", null, true);
            echo "
</div>
";
        }
        $context["endparallaxbackground"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 75
        ob_start();
        // line 76
        if (($this->getAttribute(($context["particle"] ?? null), "pa_horizontal_start", []) || $this->getAttribute(($context["particle"] ?? null), "pa_horizontal_end", []))) {
            echo "x: ";
            if (($this->getAttribute(($context["particle"] ?? null), "pa_horizontal_start", []) == "")) {
                echo "0";
            } else {
                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "pa_horizontal_start", []), "html", null, true);
            }
            echo ",";
            if (($this->getAttribute(($context["particle"] ?? null), "pa_horizontal_end", []) == "")) {
                echo "0";
            } else {
                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "pa_horizontal_end", []), "html", null, true);
            }
            echo ";";
        }
        $context["pahorizontal"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 80
        ob_start();
        // line 81
        if (($this->getAttribute(($context["particle"] ?? null), "pa_vertical_start", []) || $this->getAttribute(($context["particle"] ?? null), "pa_vertical_end", []))) {
            echo "y: ";
            if (($this->getAttribute(($context["particle"] ?? null), "pa_vertical_start", []) == "")) {
                echo "0";
            } else {
                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "pa_vertical_start", []), "html", null, true);
            }
            echo ",";
            if (($this->getAttribute(($context["particle"] ?? null), "pa_vertical_end", []) == "")) {
                echo "0";
            } else {
                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "pa_vertical_end", []), "html", null, true);
            }
            echo ";";
        }
        $context["pavertical"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 85
        ob_start();
        // line 86
        if (($this->getAttribute(($context["particle"] ?? null), "scale_start", []) || $this->getAttribute(($context["particle"] ?? null), "scale_end", []))) {
            echo "scale: ";
            if (($this->getAttribute(($context["particle"] ?? null), "scale_start", []) == "")) {
                echo "1";
            } else {
                echo twig_escape_filter($this->env, ($this->getAttribute(($context["particle"] ?? null), "scale_start", []) / 100), "html", null, true);
            }
            echo ",";
            if (($this->getAttribute(($context["particle"] ?? null), "scale_end", []) == "")) {
                echo "1";
            } else {
                echo " ";
                echo twig_escape_filter($this->env, ($this->getAttribute(($context["particle"] ?? null), "scale_end", []) / 100), "html", null, true);
            }
            echo ";";
        }
        $context["scale"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 90
        ob_start();
        if (($this->getAttribute(($context["particle"] ?? null), "rotate_start", []) || $this->getAttribute(($context["particle"] ?? null), "rotate_end", []))) {
            // line 91
            echo "rotate: ";
            if (($this->getAttribute(($context["particle"] ?? null), "rotate_start", []) == "")) {
                echo "0";
            } else {
                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "rotate_start", []), "html", null, true);
            }
            echo ",";
            if (($this->getAttribute(($context["particle"] ?? null), "rotate_end", []) == "")) {
                echo "0";
            } else {
                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "rotate_end", []), "html", null, true);
            }
            echo ";";
        }
        $context["rotate"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 95
        ob_start();
        // line 96
        if (($this->getAttribute(($context["particle"] ?? null), "opacity_start", []) || $this->getAttribute(($context["particle"] ?? null), "opacity_end", []))) {
            echo "opacity: ";
            if (($this->getAttribute(($context["particle"] ?? null), "opacity_start", []) == "")) {
                echo "1";
            } else {
                echo twig_escape_filter($this->env, ($this->getAttribute(($context["particle"] ?? null), "opacity_start", []) / 100), "html", null, true);
            }
            echo ",";
            if (($this->getAttribute(($context["particle"] ?? null), "opacity_end", []) == "")) {
                echo "1";
            } else {
                echo twig_escape_filter($this->env, ($this->getAttribute(($context["particle"] ?? null), "opacity_end", []) / 100), "html", null, true);
            }
            echo ";";
        }
        $context["opacity"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 100
        ob_start();
        // line 101
        if (($this->getAttribute(($context["particle"] ?? null), "animation", []) == "parallax")) {
            // line 102
            if ((((((((((((($this->getAttribute(($context["particle"] ?? null), "pa_horizontal_start", []) || $this->getAttribute(($context["particle"] ?? null), "pa_horizontal_end", [])) || $this->getAttribute(($context["particle"] ?? null), "pa_vertical_start", [])) || $this->getAttribute(($context["particle"] ?? null), "pa_vertical_end", [])) || $this->getAttribute(($context["particle"] ?? null), "scale_start", [])) || $this->getAttribute(($context["particle"] ?? null), "scale_end", [])) || $this->getAttribute(($context["particle"] ?? null), "rotate_start", [])) || $this->getAttribute(($context["particle"] ?? null), "rotate_end", [])) || $this->getAttribute(($context["particle"] ?? null), "opacity_start", [])) || $this->getAttribute(($context["particle"] ?? null), "opacity_end", [])) || $this->getAttribute(($context["particle"] ?? null), "easing", [])) || $this->getAttribute(($context["particle"] ?? null), "pa_viewport", [])) || $this->getAttribute(($context["particle"] ?? null), "pa_breakpoint", []))) {
                echo " jl-parallax=\"";
                echo twig_escape_filter($this->env, ($context["pahorizontal"] ?? null), "html", null, true);
                echo twig_escape_filter($this->env, ($context["pavertical"] ?? null), "html", null, true);
                echo twig_escape_filter($this->env, ($context["scale"] ?? null), "html", null, true);
                echo twig_escape_filter($this->env, ($context["rotate"] ?? null), "html", null, true);
                echo twig_escape_filter($this->env, ($context["opacity"] ?? null), "html", null, true);
                if (($this->getAttribute(($context["particle"] ?? null), "easing", []) == "")) {
                } else {
                    echo "easing: ";
                    echo twig_escape_filter($this->env, ($this->getAttribute(($context["particle"] ?? null), "easing", []) / 100), "html", null, true);
                    echo ";";
                }
                if (($this->getAttribute(($context["particle"] ?? null), "pa_viewport", []) != "")) {
                    echo "viewport:";
                    echo twig_escape_filter($this->env, ($this->getAttribute(($context["particle"] ?? null), "pa_viewport", []) / 100), "html", null, true);
                    echo ";";
                }
                if (($this->getAttribute(($context["particle"] ?? null), "pa_breakpoint", []) != "always")) {
                    echo "media: @";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "pa_breakpoint", []));
                }
                echo "\"";
            }
        } else {
            // line 104
            if (($this->getAttribute(($context["particle"] ?? null), "animation", []) != "inherit")) {
                echo " jl-scrollspy=\"cls:jl-animation-";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "animation", []));
                if (($this->getAttribute(($context["particle"] ?? null), "animation_repeat", []) != "disabled")) {
                    echo "; repeat: true";
                }
                if (($this->getAttribute(($context["particle"] ?? null), "animation_delay", []) != "")) {
                    echo "; delay: ";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "animation_delay", []));
                }
                echo "\"";
            }
        }
        $context["animation"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 109
        ob_start();
        // line 110
        if (($this->getAttribute(($context["particle"] ?? null), "align", []) != "inherit")) {
            echo " jl-text-";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "align", []));
            if (($this->getAttribute(($context["particle"] ?? null), "breakpoint", []) != "always")) {
                echo "@";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "breakpoint", []));
            }
        }
        if ((($this->getAttribute(($context["particle"] ?? null), "align", []) != "inherit") && ($this->getAttribute(($context["particle"] ?? null), "breakpoint", []) != "always"))) {
            if (($this->getAttribute(($context["particle"] ?? null), "fallback", []) != "inherit")) {
                echo " jl-text-";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "fallback", []));
            }
        }
        $context["particle_alignment"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 114
        ob_start();
        // line 115
        if ($this->getAttribute(($context["particle"] ?? null), "particle_title", [])) {
            // line 116
            echo "<";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "particle_title_element", []));
            echo " id=\"";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "\" class=\"g5-particle-title";
            if (($this->getAttribute(($context["particle"] ?? null), "particle_title_align", []) != "inherit")) {
                echo " jl-text-";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "particle_title_align", []));
            }
            if (($this->getAttribute(($context["particle"] ?? null), "particle_predefined_color", []) != "default")) {
                echo " jl-text-";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "particle_predefined_color", []));
            }
            if (($this->getAttribute(($context["particle"] ?? null), "particle_title_style", []) != "default")) {
                echo " jl-";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "particle_title_style", []));
            }
            if (($this->getAttribute(($context["particle"] ?? null), "particle_title_decoration", []) != "none")) {
                echo " jl-heading-";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "particle_title_decoration", []));
            }
            echo "\">
";
            // line 117
            if (($this->getAttribute(($context["particle"] ?? null), "particle_title_decoration", []) == "line")) {
                echo " <span>";
                echo $this->getAttribute(($context["particle"] ?? null), "particle_title", []);
                echo "</span>
";
            } else {
                // line 118
                echo " ";
                echo $this->getAttribute(($context["particle"] ?? null), "particle_title", []);
                echo "
";
            }
            // line 120
            echo "</";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "particle_title_element", []));
            echo ">
";
        }
        $context["particle_title_style"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 124
        ob_start();
        // line 125
        echo "\t\t";
        if (($this->getAttribute(($context["particle"] ?? null), "image_width", []) != "")) {
            // line 126
            echo "    width = \"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "image_width", []), "html", null, true);
            echo "\"
    ";
        }
        $context["imagewidth"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 130
        ob_start();
        // line 131
        echo "\t\t";
        if (($this->getAttribute(($context["particle"] ?? null), "image_height", []) != "")) {
            // line 132
            echo "    height = \"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "image_height", []), "html", null, true);
            echo "\"
    ";
        }
        $context["imageheight"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 1
        $this->parent = $this->loadTemplate("@nucleus/partials/particle.html.twig", "@particles/jlopenstreetmap.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_stylesheets($context, array $blocks = [])
    {
        // line 4
        echo "<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc("gantry-theme://css/leaflet.css"), "html", null, true);
        echo "\">
<style>
";
        // line 6
        if (($this->getAttribute(($context["particle"] ?? null), "particle_title_color", []) || $this->getAttribute(($context["particle"] ?? null), "particle_title_fontsize", []))) {
            // line 7
            echo "#";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo ".g5-particle-title { ";
            if ($this->getAttribute(($context["particle"] ?? null), "particle_title_color", [])) {
                echo "color: ";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "particle_title_color", []), "html", null, true);
                echo ";";
            }
            if ($this->getAttribute(($context["particle"] ?? null), "particle_title_fontsize", [])) {
                echo "font-size: ";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "particle_title_fontsize", []), "html", null, true);
                echo "px;";
            }
            echo " }
";
        }
        // line 9
        echo "#map";
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo " { height: ";
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["particle"] ?? null), "map_height", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["particle"] ?? null), "map_height", []), "400")) : ("400")));
        echo "px; z-index: 1;}
</style>
";
    }

    // line 137
    public function block_particle($context, array $blocks = [])
    {
        // line 138
        if ($this->getAttribute(($context["particle"] ?? null), "enabled", [])) {
            // line 139
            echo twig_escape_filter($this->env, ($context["parallaxbackground"] ?? null), "html", null, true);
            echo "
";
            // line 140
            echo twig_escape_filter($this->env, ($context["particle_title_style"] ?? null), "html", null, true);
            echo "
<div class=\"tm-map-wrapper";
            // line 141
            echo twig_escape_filter($this->env, ($context["content_maxwidth"] ?? null), "html", null, true);
            if ($this->getAttribute(($context["particle"] ?? null), "class", [])) {
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "class", []), "html", null, true);
            }
            echo twig_escape_filter($this->env, ($context["particle_alignment"] ?? null), "html", null, true);
            if (($this->getAttribute(($context["particle"] ?? null), "margin", []) == "inherit")) {
            } elseif (($this->getAttribute(($context["particle"] ?? null), "margin", []) == "default")) {
                echo " jl-margin";
            } else {
                echo " jl-margin-";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "margin", []));
            }
            if (($this->getAttribute(($context["particle"] ?? null), "visibility", []) != "inherit")) {
                echo " jl-visible@";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "visibility", []));
            }
            if (($this->getAttribute(($context["particle"] ?? null), "box_shadow", []) != "none")) {
                echo " jl-box-shadow-";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "box_shadow", []));
            }
            if (($this->getAttribute(($context["particle"] ?? null), "box_shadow_hover", []) != "none")) {
                echo " jl-box-shadow-hover-";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "box_shadow_hover", []));
            }
            echo "\"";
            echo twig_escape_filter($this->env, ($context["animation"] ?? null), "html", null, true);
            echo ">
 <div id=\"map";
            // line 142
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "\"></div>
</div>
";
            // line 144
            echo twig_escape_filter($this->env, ($context["endparallaxbackground"] ?? null), "html", null, true);
            echo "
";
        }
    }

    // line 148
    public function block_javascript_footer($context, array $blocks = [])
    {
        // line 149
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc("gantry-theme://js/leaflet.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\">

";
        // line 152
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["particle"] ?? null), "items", []));
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
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 153
            if (($this->getAttribute($context["loop"], "index", []) == "1")) {
                // line 154
                echo "var mymap = L.map('map";
                echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                echo "', {zoomControl: ";
                if ($this->getAttribute(($context["particle"] ?? null), "zoom_control", [])) {
                    echo "true";
                } else {
                    echo "false";
                }
                echo ", scrollWheelZoom: ";
                if ($this->getAttribute(($context["particle"] ?? null), "scroll_wheel", [])) {
                    echo "true";
                } else {
                    echo "false";
                }
                echo " }).setView([";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "latitude", []));
                echo ", ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "longitude", []));
                echo "], ";
                echo twig_escape_filter($this->env, (($this->getAttribute(($context["particle"] ?? null), "map_zoom", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["particle"] ?? null), "map_zoom", []), "11")) : ("11")));
                echo ");
";
            }
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 157
        echo "mymap.dragging.";
        if ($this->getAttribute(($context["particle"] ?? null), "dragg", [])) {
            echo "enable";
        } else {
            echo "disable";
        }
        echo "();
mymap.doubleClickZoom.";
        // line 158
        if ($this->getAttribute(($context["particle"] ?? null), "double_click_zoom", [])) {
            echo "enable";
        } else {
            echo "disable";
        }
        echo "();
L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token={accessToken}', {
\t\t";
        // line 160
        if ($this->getAttribute(($context["particle"] ?? null), "contributors", [])) {
            echo "attribution: 'Map data &copy; <a href=\"https://www.openstreetmap.org/\">OpenStreetMap</a> contributors, <a href=\"https://creativecommons.org/licenses/by-sa/2.0/\">CC-BY-SA</a>, Imagery &copy; <a href=\"https://www.mapbox.com/\">Mapbox</a>',";
        }
        // line 161
        echo "    maxZoom: ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "map_maxzoom", []), "html", null, true);
        echo ",
    id: 'mapbox.";
        // line 162
        echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "map_style", []), "html", null, true);
        echo "',
    accessToken: '";
        // line 163
        echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "accesstoken", []), "html", null, true);
        echo "'
}).addTo(mymap);

var LeafIcon = L.Icon.extend({
    options: {
\t\t\ticonSize: [25, 41],
\t\t\ticonAnchor: [12, 41],
\t\t\tpopupAnchor: [1, -34],
\t\t\tshadowSize: [41, 41]
    }
});

";
        // line 175
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["particle"] ?? null), "items", []));
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
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 176
            echo "
";
            // line 177
            if ($this->getAttribute($context["item"], "icon", [])) {
                // line 178
                echo "


var icon_";
                // line 181
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", []), "html", null, true);
                echo " = new LeafIcon({iconUrl: '";
                echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc($this->getAttribute($context["item"], "icon", [])));
                echo "', shadowUrl: '";
                echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc($this->getAttribute($context["item"], "icon_shadow", [])));
                echo "'})

var marker = L.marker([";
                // line 183
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "latitude", []));
                echo ", ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "longitude", []));
                echo "], {icon: icon_";
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", []), "html", null, true);
                echo "}).addTo(mymap);
";
            } else {
                // line 185
                echo "var marker = L.marker([";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "latitude", []));
                echo ", ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "longitude", []));
                echo "]).addTo(mymap);
";
            }
            // line 187
            echo "

marker.bindPopup(\"";
            // line 189
            echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->getAttribute($context["item"], "pop_content", []), "js"), "html", null, true);
            echo "\"";
            if ($this->getAttribute($context["item"], "pop_content_width", [])) {
                echo ", {maxWidth: \"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "pop_content_width", []));
                echo "\"}";
            }
            echo ")";
            if ($this->getAttribute(($context["particle"] ?? null), "popup", [])) {
                echo ".openPopup()";
            }
            echo ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 191
        echo "
</script>
";
    }

    public function getTemplateName()
    {
        return "@particles/jlopenstreetmap.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  722 => 191,  696 => 189,  692 => 187,  684 => 185,  675 => 183,  666 => 181,  661 => 178,  659 => 177,  656 => 176,  639 => 175,  624 => 163,  620 => 162,  615 => 161,  611 => 160,  602 => 158,  593 => 157,  557 => 154,  555 => 153,  538 => 152,  531 => 149,  528 => 148,  521 => 144,  516 => 142,  486 => 141,  482 => 140,  478 => 139,  476 => 138,  473 => 137,  463 => 9,  446 => 7,  444 => 6,  438 => 4,  435 => 3,  430 => 1,  423 => 132,  420 => 131,  418 => 130,  411 => 126,  408 => 125,  406 => 124,  399 => 120,  393 => 118,  386 => 117,  362 => 116,  360 => 115,  358 => 114,  342 => 110,  340 => 109,  325 => 104,  299 => 102,  297 => 101,  295 => 100,  278 => 96,  276 => 95,  260 => 91,  257 => 90,  239 => 86,  237 => 85,  220 => 81,  218 => 80,  201 => 76,  199 => 75,  192 => 69,  190 => 68,  188 => 67,  182 => 62,  124 => 61,  122 => 60,  120 => 59,  104 => 55,  102 => 54,  96 => 50,  94 => 49,  92 => 48,  88 => 44,  86 => 43,  84 => 42,  80 => 38,  78 => 37,  76 => 36,  68 => 31,  65 => 29,  63 => 28,  58 => 23,  56 => 22,  53 => 21,  51 => 20,  48 => 19,  46 => 18,  43 => 17,  41 => 16,  39 => 15,  37 => 14,  31 => 1,);
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

{% block stylesheets %}
<link rel=\"stylesheet\" href=\"{{ url('gantry-theme://css/leaflet.css') }}\">
<style>
{% if particle.particle_title_color or particle.particle_title_fontsize %}
#{{ id }}.g5-particle-title { {% if particle.particle_title_color %}color: {{ particle.particle_title_color }};{% endif %}{% if particle.particle_title_fontsize %}font-size: {{particle.particle_title_fontsize}}px;{% endif %} }
{% endif %}
#map{{id}} { height: {{particle.map_height|default('400')|e}}px; z-index: 1;}
</style>
{% endblock %}

{# set Viewport Height #}
{% set viewport_height %}
{% if particle.viewport_height == 'none' %}
{% elseif particle.viewport_height == 'full' %}
jl-height-viewport=\"offset-top: true\"
{% elseif particle.viewport_height == 'percent' %}
jl-height-viewport=\"offset-top: true;offset-bottom: 20\"
{% elseif particle.viewport_height == 'section' %}
jl-height-viewport=\"offset-top: true;offset-bottom: 50\"
{% elseif particle.viewport_height == 'expand' %}
jl-height-viewport=\"expand: true\"
{% endif %}
{% endset %}

{# set padding #}
{% set padding %}
{% if particle.viewport_height == 'full' %}
{% else %}
{% if particle.padding == 'default' %}{% else %} jl-section-{{particle.padding|e}}{% endif %}
{% endif %}
{% endset %}

{# set Container #}
{% set container %}
{% if particle.container == '1' %}
<div class=\"jl-container\"><div class=\"g5-content g5-particle\">{% endif %}
{% endset %}

{# set End Container #}
{% set endcontainer %}
{% if particle.container == '1' %}
</div></div>{% endif %}
{% endset %}

{# set Background color #}
{% set parallax_bg_color %}
{% if particle.parallax_bg_color %}
style=\"background-color: {{particle.parallax_bg_color}};\"{% endif %}
{% endset %}

{# Set Max-Width Content #}
{% set content_maxwidth %}
{% if particle.g_maxwidth != 'inherit' %} jl-width-{{particle.g_maxwidth}}{% if particle.g_maxwidth_breakpoint != 'always' %}@{{particle.g_maxwidth_breakpoint}}{% endif %}{% if particle.g_maxwidth_alignment == 'left' %}{% elseif particle.g_maxwidth_alignment == 'center' %} jl-margin-auto{% else %} jl-margin-auto-left{% endif %}{% endif %}
{% endset %}

{# set Parallax Background #}
{% set parallaxbackground %}
{% if particle.parallax_image %}
<div data-src=\"{{ url(particle.parallax_image)|e }}\" class=\"{{id}} jl-background-norepeat{{padding}}{{content_maxwidth}} jl-background-{{particle.background_image_position|e}}{% if particle.background_image_size != 'auto' %} jl-background-{{particle.background_image_size|e}}{% endif %}{% if particle.parallax_bg_visibility != 'always' %} jl-background-image@{{particle.parallax_bg_visibility|e}}{% endif %}{% if particle.vertical_alignment != 'none' %} jl-flex jl-flex-{{particle.vertical_alignment|e}}{% endif %}{% if particle.parallax_text_color != 'default' %} jl-{{particle.parallax_text_color|e}}{% endif %}{% if particle.blendmode != 'inherit' %} jl-background-blend-{{particle.blendmode|e}}{% endif %}\" {{parallax_bg_color}}{% if particle.horizontal_start or particle.horizontal_end or particle.vertical_start or particle.vertical_end %} jl-parallax=\"{% if particle.horizontal_start or particle.horizontal_end %}bgx: {{particle.horizontal_start|e}},{{particle.horizontal_end|e}};{% endif %}{% if particle.vertical_start or particle.vertical_end %}bgy: {{particle.vertical_start|e}},{{particle.vertical_end|e}};{% endif %}{% if particle.parallax_bg_breakpoint != 'always' %} media: @{{particle.parallax_bg_breakpoint|e}}{% endif %}\" {% endif %} jl-img {{viewport_height}}>
{{container}}
{% endif %}
{% endset %}

{# End Parallax Background #}
{% set endparallaxbackground %}
{% if particle.parallax_image %}
{{endcontainer}}
</div>
{% endif %}
{% endset %}

{# Set Horizontal #}
{% set pahorizontal %}
{% if particle.pa_horizontal_start or particle.pa_horizontal_end %}x: {% if particle.pa_horizontal_start == '' %}0{% else %}{{particle.pa_horizontal_start }}{% endif %},{% if particle.pa_horizontal_end == '' %}0{% else %}{{particle.pa_horizontal_end }}{% endif %};{% endif %}
{% endset %}

{# Set Vertical #}
{% set pavertical %}
{% if particle.pa_vertical_start or particle.pa_vertical_end %}y: {% if particle.pa_vertical_start == '' %}0{% else %}{{particle.pa_vertical_start }}{% endif %},{% if particle.pa_vertical_end == '' %}0{% else %}{{particle.pa_vertical_end }}{% endif %};{% endif %}
{% endset %}

{# Set Scale #}
{% set scale %}
{% if particle.scale_start or particle.scale_end %}scale: {% if particle.scale_start == '' %}1{% else %}{{particle.scale_start / 100 }}{% endif %},{% if particle.scale_end == '' %}1{% else %} {{particle.scale_end / 100 }}{% endif %};{% endif %}
{% endset %}

{# Set Rotate #}
{% set rotate %}{% if particle.rotate_start or particle.rotate_end %}
rotate: {% if particle.rotate_start == '' %}0{% else %}{{particle.rotate_start}}{% endif %},{% if particle.rotate_end == '' %}0{% else %}{{particle.rotate_end}}{% endif %};{% endif %}
{% endset %}

{# Set Opacity #}
{% set opacity %}
{% if particle.opacity_start or particle.opacity_end %}opacity: {% if particle.opacity_start == '' %}1{% else %}{{particle.opacity_start / 100 }}{% endif %},{% if particle.opacity_end == '' %}1{% else %}{{particle.opacity_end / 100 }}{% endif %};{% endif %}
{% endset %}

{# set Animation #}
{% set animation %}
{% if particle.animation == 'parallax' %}
{% if particle.pa_horizontal_start or particle.pa_horizontal_end or particle.pa_vertical_start or particle.pa_vertical_end or particle.scale_start or particle.scale_end or particle.rotate_start or particle.rotate_end or particle.opacity_start or particle.opacity_end or particle.easing or particle.pa_viewport or particle.pa_breakpoint %} jl-parallax=\"{{pahorizontal}}{{pavertical}}{{scale}}{{rotate}}{{opacity}}{% if particle.easing == '' %}{% else %}easing: {{ particle.easing / 100 }};{% endif %}{% if particle.pa_viewport != '' %}viewport:{{ particle.pa_viewport / 100 }};{% endif %}{% if particle.pa_breakpoint != 'always' %}media: @{{particle.pa_breakpoint|e}}{% endif %}\"{% endif %}
{% else %}
{% if particle.animation != 'inherit' %} jl-scrollspy=\"cls:jl-animation-{{particle.animation|e}}{% if particle.animation_repeat != 'disabled' %}; repeat: true{% endif %}{% if particle.animation_delay != '' %}; delay: {{particle.animation_delay|e}}{% endif %}\"{% endif %}
{% endif %}
{% endset %}

{# Set Particle Alignment #}
{% set particle_alignment %}
{% if particle.align != 'inherit' %} jl-text-{{particle.align|e}}{% if particle.breakpoint != 'always' %}@{{particle.breakpoint|e}}{% endif %}{% endif %}{% if particle.align != 'inherit' and particle.breakpoint != 'always' %}{% if particle.fallback != 'inherit' %} jl-text-{{particle.fallback|e}}{% endif %}{% endif %}
{% endset %}

{# set Particle Title Style #}
{% set particle_title_style %}
{% if particle.particle_title %}
<{{particle.particle_title_element|e}} id=\"{{ id }}\" class=\"g5-particle-title{% if particle.particle_title_align != 'inherit' %} jl-text-{{particle.particle_title_align|e}}{% endif %}{% if particle.particle_predefined_color != 'default' %} jl-text-{{particle.particle_predefined_color|e}}{% endif %}{% if particle.particle_title_style != 'default' %} jl-{{particle.particle_title_style|e}}{% endif %}{% if particle.particle_title_decoration != 'none' %} jl-heading-{{particle.particle_title_decoration|e}}{% endif %}\">
{% if particle.particle_title_decoration == 'line' %} <span>{{particle.particle_title|raw}}</span>
{% else %} {{particle.particle_title|raw}}
{% endif %}
</{{particle.particle_title_element|e}}>
{% endif %}
{% endset %}

{% set imagewidth %}
\t\t{% if particle.image_width != '' %}
    width = \"{{particle.image_width}}\"
    {% endif %}
{% endset %}

{% set imageheight %}
\t\t{% if particle.image_height != '' %}
    height = \"{{particle.image_height}}\"
    {% endif %}
{% endset %}


{% block particle %}
{% if particle.enabled %}
{{parallaxbackground}}
{{particle_title_style}}
<div class=\"tm-map-wrapper{{content_maxwidth}}{% if particle.class %} {{ particle.class }}{% endif %}{{particle_alignment}}{% if particle.margin == 'inherit' %}{% elseif particle.margin == 'default' %} jl-margin{% else %} jl-margin-{{particle.margin|e}}{% endif %}{% if particle.visibility != 'inherit' %} jl-visible@{{particle.visibility|e}}{% endif %}{% if particle.box_shadow != 'none' %} jl-box-shadow-{{particle.box_shadow|e}}{% endif %}{% if particle.box_shadow_hover != 'none' %} jl-box-shadow-hover-{{particle.box_shadow_hover|e}}{% endif %}\"{{animation}}>
 <div id=\"map{{id}}\"></div>
</div>
{{endparallaxbackground}}
{% endif %}
{% endblock %}

{% block javascript_footer %}
<script src=\"{{ url('gantry-theme://js/leaflet.js') }}\"></script>
<script type=\"text/javascript\">

{% for item in particle.items %}
{% if loop.index == '1' %}
var mymap = L.map('map{{id}}', {zoomControl: {% if particle.zoom_control %}true{% else %}false{% endif %}, scrollWheelZoom: {% if particle.scroll_wheel %}true{% else %}false{% endif %} }).setView([{{item.latitude|e}}, {{item.longitude|e}}], {{particle.map_zoom|default('11')|e}});
{% endif %}
{% endfor %}
mymap.dragging.{% if particle.dragg %}enable{% else %}disable{% endif %}();
mymap.doubleClickZoom.{% if particle.double_click_zoom %}enable{% else %}disable{% endif %}();
L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token={accessToken}', {
\t\t{% if particle.contributors %}attribution: 'Map data &copy; <a href=\"https://www.openstreetmap.org/\">OpenStreetMap</a> contributors, <a href=\"https://creativecommons.org/licenses/by-sa/2.0/\">CC-BY-SA</a>, Imagery &copy; <a href=\"https://www.mapbox.com/\">Mapbox</a>',{% endif %}
    maxZoom: {{particle.map_maxzoom}},
    id: 'mapbox.{{particle.map_style}}',
    accessToken: '{{particle.accesstoken}}'
}).addTo(mymap);

var LeafIcon = L.Icon.extend({
    options: {
\t\t\ticonSize: [25, 41],
\t\t\ticonAnchor: [12, 41],
\t\t\tpopupAnchor: [1, -34],
\t\t\tshadowSize: [41, 41]
    }
});

{% for item in particle.items %}

{% if item.icon %}



var icon_{{loop.index}} = new LeafIcon({iconUrl: '{{ url(item.icon)|e }}', shadowUrl: '{{ url(item.icon_shadow)|e }}'})

var marker = L.marker([{{item.latitude|e}}, {{item.longitude|e}}], {icon: icon_{{loop.index}}}).addTo(mymap);
{% else %}
var marker = L.marker([{{item.latitude|e}}, {{item.longitude|e}}]).addTo(mymap);
{% endif %}


marker.bindPopup(\"{{item.pop_content|e('js')}}\"{% if item.pop_content_width %}, {maxWidth: \"{{item.pop_content_width|e}}\"}{% endif %}){% if particle.popup %}.openPopup(){% endif %};
{% endfor %}

</script>
{% endblock %}
", "@particles/jlopenstreetmap.html.twig", "/Users/sylwesterpilarz/Desktop/IntengineWebsite/cms/grav-admin/user/themes/g5_helium/particles/jlopenstreetmap.html.twig");
    }
}
