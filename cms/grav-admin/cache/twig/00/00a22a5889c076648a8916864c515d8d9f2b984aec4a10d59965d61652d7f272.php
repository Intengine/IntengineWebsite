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

/* @particles/jloverlay.html.twig */
class __TwigTemplate_73681a86ce1fefdb720d3826cc9f4af54dc63dac75006bcd16c7ac5f9ab5a719 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'particle' => [$this, 'block_particle'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@nucleus/partials/particle.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 22
        ob_start();
        // line 23
        if (preg_match("/#/", twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "link", [])))) {
            echo " jl-scroll";
        }
        $context["linkscroll"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 27
        ob_start();
        // line 28
        if (($this->getAttribute(($context["particle"] ?? null), "viewport_height", []) == "none")) {
        } elseif (($this->getAttribute(        // line 29
($context["particle"] ?? null), "viewport_height", []) == "full")) {
            // line 30
            echo "jl-height-viewport=\"offset-top: true\"
";
        } elseif (($this->getAttribute(        // line 31
($context["particle"] ?? null), "viewport_height", []) == "percent")) {
            // line 32
            echo "jl-height-viewport=\"offset-top: true;offset-bottom: 20\"
";
        } elseif (($this->getAttribute(        // line 33
($context["particle"] ?? null), "viewport_height", []) == "section")) {
            // line 34
            echo "jl-height-viewport=\"offset-top: true;offset-bottom: 50\"
";
        } elseif (($this->getAttribute(        // line 35
($context["particle"] ?? null), "viewport_height", []) == "expand")) {
            // line 36
            echo "jl-height-viewport=\"expand: true\"
";
        }
        $context["viewport_height"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 41
        ob_start();
        // line 42
        if ($this->getAttribute(($context["particle"] ?? null), "title_text_transform", [])) {
            echo " jl-text-";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "title_text_transform", []));
        }
        $context["title_text_transform"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 46
        ob_start();
        // line 47
        if ($this->getAttribute(($context["particle"] ?? null), "meta_text_transform", [])) {
            echo " jl-text-";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "meta_text_transform", []));
        }
        $context["meta_text_transform"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 51
        ob_start();
        // line 52
        if ($this->getAttribute(($context["particle"] ?? null), "content_text_transform", [])) {
            echo " jl-text-";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "content_text_transform", []));
        }
        $context["content_text_transform"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 56
        ob_start();
        // line 57
        if (($this->getAttribute(($context["particle"] ?? null), "viewport_height", []) == "full")) {
        } else {
            // line 59
            if (($this->getAttribute(($context["particle"] ?? null), "padding", []) == "default")) {
            } else {
                echo " jl-section-";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "padding", []));
            }
        }
        $context["padding"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 64
        ob_start();
        // line 65
        if (($this->getAttribute(($context["particle"] ?? null), "container", []) == "1")) {
            // line 66
            echo "<div class=\"jl-container\"><div class=\"g5-content g5-particle\">";
        }
        $context["container"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 70
        ob_start();
        // line 71
        if (($this->getAttribute(($context["particle"] ?? null), "container", []) == "1")) {
            // line 72
            echo "</div></div>";
        }
        $context["endcontainer"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 76
        ob_start();
        // line 77
        if ($this->getAttribute(($context["particle"] ?? null), "parallax_bg_color", [])) {
            // line 78
            echo "style=\"background-color: ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "parallax_bg_color", []), "html", null, true);
            echo ";\"";
        }
        $context["parallax_bg_color"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 82
        ob_start();
        // line 83
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
        // line 87
        ob_start();
        // line 88
        if ($this->getAttribute(($context["particle"] ?? null), "parallax_image", [])) {
            // line 89
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
            // line 90
            echo twig_escape_filter($this->env, ($context["container"] ?? null), "html", null, true);
            echo "
";
        }
        $context["parallaxbackground"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 95
        ob_start();
        // line 96
        if ($this->getAttribute(($context["particle"] ?? null), "parallax_image", [])) {
            // line 97
            echo twig_escape_filter($this->env, ($context["endcontainer"] ?? null), "html", null, true);
            echo "
</div>
";
        }
        $context["endparallaxbackground"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 103
        ob_start();
        // line 104
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
        // line 108
        ob_start();
        // line 109
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
        // line 113
        ob_start();
        // line 114
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
        // line 118
        ob_start();
        if (($this->getAttribute(($context["particle"] ?? null), "rotate_start", []) || $this->getAttribute(($context["particle"] ?? null), "rotate_end", []))) {
            // line 119
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
        // line 123
        ob_start();
        // line 124
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
        // line 128
        ob_start();
        // line 129
        if (($this->getAttribute(($context["particle"] ?? null), "animation", []) == "parallax")) {
            // line 130
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
            // line 132
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
        // line 137
        ob_start();
        // line 138
        if (($this->getAttribute(($context["particle"] ?? null), "overlay_hover", []) == "1")) {
            // line 139
            if (($this->getAttribute(($context["particle"] ?? null), "title_transition", []) != "none")) {
                echo " jl-transition-";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "title_transition", []));
            }
        }
        $context["title_transition"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 144
        ob_start();
        // line 145
        if (($this->getAttribute(($context["particle"] ?? null), "overlay_hover", []) == "1")) {
            // line 146
            if (($this->getAttribute(($context["particle"] ?? null), "meta_transition", []) != "none")) {
                echo " jl-transition-";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "meta_transition", []));
            }
        }
        $context["meta_transition"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 151
        ob_start();
        // line 152
        if (($this->getAttribute(($context["particle"] ?? null), "overlay_hover", []) == "1")) {
            // line 153
            if (($this->getAttribute(($context["particle"] ?? null), "content_transition", []) != "none")) {
                echo " jl-transition-";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "content_transition", []));
            }
        }
        $context["content_transition"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 158
        ob_start();
        // line 159
        if (($this->getAttribute(($context["particle"] ?? null), "overlay_hover", []) == "1")) {
            // line 160
            if (($this->getAttribute(($context["particle"] ?? null), "link_transition", []) != "none")) {
                echo " jl-transition-";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "link_transition", []));
            }
        }
        $context["link_transition"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 165
        ob_start();
        // line 166
        if (($this->getAttribute(($context["particle"] ?? null), "overlay_hover", []) == "1")) {
            echo " jl-transition-";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "overlay_transition", []));
        }
        $context["overlay_transition"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 170
        ob_start();
        // line 171
        if ($this->getAttribute(($context["particle"] ?? null), "image_transition", [])) {
            echo " jl-transition-";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "image_transition", []));
            echo " jl-transition-opaque";
        }
        $context["image_transition"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 175
        ob_start();
        // line 176
        if (($this->getAttribute(($context["particle"] ?? null), "image_transition", []) == "none")) {
            echo " jl-transition-fade";
        } else {
            echo " jl-transition-";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "image_transition", []));
        }
        $context["image_hover_transition"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 180
        ob_start();
        // line 181
        if (($this->getAttribute(($context["particle"] ?? null), "box_shadow", []) != "none")) {
            echo " jl-box-shadow-";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "box_shadow", []));
        }
        if (($this->getAttribute(($context["particle"] ?? null), "box_shadow_hover", []) != "none")) {
            echo " jl-box-shadow-hover-";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "box_shadow_hover", []));
        }
        $context["image_boxshadow"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 185
        ob_start();
        // line 186
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
        // line 190
        ob_start();
        // line 191
        if ($this->getAttribute(($context["particle"] ?? null), "particle_title", [])) {
            // line 192
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
            // line 193
            if (($this->getAttribute(($context["particle"] ?? null), "particle_title_decoration", []) == "line")) {
                echo " <span>";
                echo $this->getAttribute(($context["particle"] ?? null), "particle_title", []);
                echo "</span>
";
            } else {
                // line 194
                echo " ";
                echo $this->getAttribute(($context["particle"] ?? null), "particle_title", []);
                echo "
";
            }
            // line 196
            echo "</";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "particle_title_element", []));
            echo ">
";
        }
        $context["particle_title_style"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 201
        ob_start();
        // line 202
        if (($this->getAttribute(($context["particle"] ?? null), "buttonclass", []) == "link")) {
            echo "jl-link";
        } elseif ((($this->getAttribute(($context["particle"] ?? null), "buttonclass", []) == "link-muted") || ($this->getAttribute(($context["particle"] ?? null), "buttonclass", []) == "link-text"))) {
            echo "jl-";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "buttonclass", []));
        } else {
            echo "jl-button jl-button-";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "buttonclass", []));
        }
        $context["button_cls"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 206
        ob_start();
        // line 207
        if ((((($this->getAttribute(($context["particle"] ?? null), "buttonclass", []) == "link") || ($this->getAttribute(($context["particle"] ?? null), "buttonclass", []) == "link-muted")) || ($this->getAttribute(($context["particle"] ?? null), "buttonclass", []) == "link-text")) || ($this->getAttribute(($context["particle"] ?? null), "buttonclass", []) == "text"))) {
        } else {
            if (($this->getAttribute(($context["particle"] ?? null), "link_button_size", []) != "default")) {
                echo " jl-button-";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "link_button_size", []));
            }
        }
        $context["button_size"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 211
        ob_start();
        // line 212
        if ($this->getAttribute(($context["particle"] ?? null), "buttontext", [])) {
            // line 213
            echo "<div class=\"";
            if (($this->getAttribute(($context["particle"] ?? null), "link_margin_top", []) == "default")) {
                echo "jl-margin-top";
            } else {
                echo "jl-margin-";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "link_margin_top", []));
                echo "-top";
            }
            echo twig_escape_filter($this->env, ($context["link_transition"] ?? null), "html", null, true);
            echo "\"><a class=\"";
            echo twig_escape_filter($this->env, ($context["button_cls"] ?? null), "html", null, true);
            echo twig_escape_filter($this->env, ($context["button_size"] ?? null), "html", null, true);
            echo "\" href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "link", []));
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "buttontext", []));
            echo "\" target=\"";
            echo twig_escape_filter($this->env, (($this->getAttribute(($context["particle"] ?? null), "target", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["particle"] ?? null), "target", []), "_self")) : ("_self")));
            echo "\"";
            echo twig_escape_filter($this->env, ($context["linkscroll"] ?? null), "html", null, true);
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "buttontext", []));
            echo "</a></div>
";
        }
        $context["button"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 1
        $this->parent = $this->loadTemplate("@nucleus/partials/particle.html.twig", "@particles/jloverlay.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_stylesheets($context, array $blocks = [])
    {
        // line 4
        if (((((((($this->getAttribute(($context["particle"] ?? null), "particle_title_color", []) || $this->getAttribute(($context["particle"] ?? null), "particle_title_fontsize", [])) || $this->getAttribute(($context["particle"] ?? null), "title_color", [])) || $this->getAttribute(($context["particle"] ?? null), "title_fontsize", [])) || $this->getAttribute(($context["particle"] ?? null), "customize_content_color", [])) || $this->getAttribute(($context["particle"] ?? null), "customize_content_fontsize", [])) || $this->getAttribute(($context["particle"] ?? null), "meta_color", [])) || $this->getAttribute(($context["particle"] ?? null), "meta_fontsize", []))) {
            // line 5
            echo "<style>
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
            if (($this->getAttribute(($context["particle"] ?? null), "title_color", []) || $this->getAttribute(($context["particle"] ?? null), "title_fontsize", []))) {
                // line 10
                echo "#";
                echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                echo " .tm-title { ";
                if ($this->getAttribute(($context["particle"] ?? null), "title_color", [])) {
                    echo "color: ";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "title_color", []), "html", null, true);
                    echo " !important; ";
                }
                if ($this->getAttribute(($context["particle"] ?? null), "title_fontsize", [])) {
                    echo "font-size: ";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "title_fontsize", []), "html", null, true);
                    echo "px;";
                }
                echo " }
";
            }
            // line 12
            if (($this->getAttribute(($context["particle"] ?? null), "customize_content_color", []) || $this->getAttribute(($context["particle"] ?? null), "customize_content_fontsize", []))) {
                // line 13
                echo "#";
                echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                echo " .tm-content { ";
                if ($this->getAttribute(($context["particle"] ?? null), "customize_content_color", [])) {
                    echo "color: ";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "customize_content_color", []), "html", null, true);
                    echo " !important;";
                }
                if ($this->getAttribute(($context["particle"] ?? null), "customize_content_fontsize", [])) {
                    echo " font-size: ";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "customize_content_fontsize", []), "html", null, true);
                    echo "px;";
                }
                echo " }
";
            }
            // line 15
            if (($this->getAttribute(($context["particle"] ?? null), "meta_color", []) || $this->getAttribute(($context["particle"] ?? null), "meta_fontsize", []))) {
                // line 16
                echo "#";
                echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                echo " .tm-meta { ";
                if ($this->getAttribute(($context["particle"] ?? null), "meta_color", [])) {
                    echo "color: ";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "meta_color", []), "html", null, true);
                    echo ";";
                }
                if ($this->getAttribute(($context["particle"] ?? null), "meta_fontsize", [])) {
                    echo " font-size: ";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "meta_fontsize", []), "html", null, true);
                    echo "px;";
                }
                echo " }
";
            }
            // line 18
            echo "</style>
";
        }
    }

    // line 217
    public function block_particle($context, array $blocks = [])
    {
        // line 218
        if ($this->getAttribute(($context["particle"] ?? null), "enabled", [])) {
            // line 219
            echo twig_escape_filter($this->env, ($context["parallaxbackground"] ?? null), "html", null, true);
            echo "
";
            // line 220
            echo twig_escape_filter($this->env, ($context["particle_title_style"] ?? null), "html", null, true);
            echo "
<div id=\"";
            // line 221
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "\" class=\"tm-overlay-wrapper";
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
            echo "\"";
            echo twig_escape_filter($this->env, ($context["animation"] ?? null), "html", null, true);
            echo ">

";
            // line 223
            if (((($this->getAttribute(($context["particle"] ?? null), "overlay_hover", []) == "1") || ($this->getAttribute(($context["particle"] ?? null), "hover_image", []) != "")) || ($this->getAttribute(($context["particle"] ?? null), "image_transition", []) != "none"))) {
                // line 224
                echo "
";
                // line 225
                if (($this->getAttribute(($context["particle"] ?? null), "link_type", []) == "element")) {
                    // line 226
                    echo "<a class=\"tm-item jl-inline-clip jl-transition-toggle jl-link-reset";
                    echo twig_escape_filter($this->env, ($context["image_boxshadow"] ?? null), "html", null, true);
                    echo "\" href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "link", []));
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "buttontext", []));
                    echo "\" target=\"";
                    echo twig_escape_filter($this->env, (($this->getAttribute(($context["particle"] ?? null), "target", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["particle"] ?? null), "target", []), "_self")) : ("_self")));
                    echo "\"tabindex=\"0\"";
                    echo twig_escape_filter($this->env, ($context["linkscroll"] ?? null), "html", null, true);
                    echo ">
";
                } else {
                    // line 228
                    echo "<div class=\"tm-item jl-inline-clip jl-transition-toggle";
                    if (($this->getAttribute(($context["particle"] ?? null), "overlay_color", []) != "default")) {
                        echo " jl-";
                        echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "overlay_color", []));
                    }
                    echo twig_escape_filter($this->env, ($context["image_boxshadow"] ?? null), "html", null, true);
                    echo "\" tabindex=\"0\">
";
                }
                // line 230
                echo "
";
            } else {
                // line 232
                echo "
";
                // line 233
                if (($this->getAttribute(($context["particle"] ?? null), "link_type", []) == "element")) {
                    // line 234
                    echo "<a class=\"tm-item jl-inline-clip jl-link-reset";
                    echo twig_escape_filter($this->env, ($context["image_boxshadow"] ?? null), "html", null, true);
                    echo "\" href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "link", []));
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "buttontext", []));
                    echo "\" target=\"";
                    echo twig_escape_filter($this->env, (($this->getAttribute(($context["particle"] ?? null), "target", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["particle"] ?? null), "target", []), "_self")) : ("_self")));
                    echo "\"";
                    echo twig_escape_filter($this->env, ($context["linkscroll"] ?? null), "html", null, true);
                    echo ">
";
                } else {
                    // line 236
                    echo "<div class=\"tm-item jl-inline-clip";
                    echo twig_escape_filter($this->env, ($context["image_boxshadow"] ?? null), "html", null, true);
                    echo "\">
";
                }
                // line 238
                echo "
";
            }
            // line 240
            echo "
";
            // line 241
            if (($this->getAttribute(($context["particle"] ?? null), "hover_image", []) != "")) {
                // line 242
                if ($this->getAttribute(($context["particle"] ?? null), "image", [])) {
                    // line 243
                    echo "<img class=\"tm-image\" src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc($this->getAttribute(($context["particle"] ?? null), "image", [])));
                    echo "\"";
                    if ($this->getAttribute(($context["particle"] ?? null), "image_alt", [])) {
                        echo " alt=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "image_alt", []));
                        echo "\"";
                    }
                    echo ">
";
                }
                // line 245
                echo "
";
                // line 246
                if ($this->getAttribute(($context["particle"] ?? null), "hover_image", [])) {
                    // line 247
                    echo "<div class=\"jl-position-cover";
                    echo twig_escape_filter($this->env, ($context["image_hover_transition"] ?? null), "html", null, true);
                    echo "\">
<img class=\"tm-image\" src=\"";
                    // line 248
                    echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc($this->getAttribute(($context["particle"] ?? null), "hover_image", [])));
                    echo "\"";
                    if ($this->getAttribute(($context["particle"] ?? null), "image_alt", [])) {
                        echo " alt=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "image_alt", []));
                        echo "\"";
                    }
                    echo " jl-cover>
</div>
";
                }
                // line 251
                echo "
";
            } else {
                // line 253
                if ($this->getAttribute(($context["particle"] ?? null), "image", [])) {
                    // line 254
                    echo "<img class=\"tm-image";
                    echo twig_escape_filter($this->env, ($context["image_transition"] ?? null), "html", null, true);
                    echo "\" src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc($this->getAttribute(($context["particle"] ?? null), "image", [])));
                    echo "\"";
                    if ($this->getAttribute(($context["particle"] ?? null), "image_alt", [])) {
                        echo " alt=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "image_alt", []));
                        echo "\"";
                    }
                    echo ">
";
                }
            }
            // line 257
            echo "
";
            // line 259
            if ((($this->getAttribute(($context["particle"] ?? null), "title", []) || $this->getAttribute(($context["particle"] ?? null), "meta", [])) || $this->getAttribute(($context["particle"] ?? null), "content", []))) {
                // line 260
                echo "
";
                // line 261
                if (($this->getAttribute(($context["particle"] ?? null), "overlay_style", []) == "none")) {
                    // line 262
                    echo "<div class=\"";
                    if ($this->getAttribute(($context["particle"] ?? null), "overlay_position", [])) {
                        echo "jl-position-";
                        echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "overlay_position", []));
                    }
                    echo "\">

<div class=\"jl-panel";
                    // line 264
                    if (($this->getAttribute(($context["particle"] ?? null), "overlay_padding", []) == "default")) {
                        echo " jl-padding";
                    } else {
                        echo " jl-padding-";
                        echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "overlay_padding", []));
                    }
                    if (($this->getAttribute(($context["particle"] ?? null), "overlay_maxwidth", []) != "none")) {
                        echo " jl-width-";
                        echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "overlay_maxwidth", []));
                    }
                    echo twig_escape_filter($this->env, ($context["overlay_transition"] ?? null), "html", null, true);
                    if (($this->getAttribute(($context["particle"] ?? null), "overlay_color", []) != "default")) {
                        echo " jl-";
                        echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "overlay_color", []));
                    }
                    echo " jl-margin-remove-first-child\">

";
                } else {
                    // line 267
                    echo "
";
                    // line 268
                    if (($this->getAttribute(($context["particle"] ?? null), "overlay_mode", []) == "cover")) {
                        // line 269
                        echo "<div class=\"jl-position-cover";
                        if (($this->getAttribute(($context["particle"] ?? null), "overlay_margin", []) != "none")) {
                            echo " jl-position-";
                            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "overlay_margin", []));
                        }
                        if ($this->getAttribute(($context["particle"] ?? null), "overlay_style", [])) {
                            echo " ";
                            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "overlay_style", []));
                        }
                        echo twig_escape_filter($this->env, ($context["overlay_transition"] ?? null), "html", null, true);
                        echo "\"></div>
";
                    }
                    // line 271
                    echo "
<div class=\"";
                    // line 272
                    if ($this->getAttribute(($context["particle"] ?? null), "overlay_position", [])) {
                        echo "jl-position-";
                        echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "overlay_position", []));
                    }
                    if (($this->getAttribute(($context["particle"] ?? null), "overlay_margin", []) != "none")) {
                        echo " jl-position-";
                        echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "overlay_margin", []));
                    }
                    echo "\">

";
                    // line 274
                    if (($this->getAttribute(($context["particle"] ?? null), "overlay_mode", []) == "cover")) {
                        // line 275
                        echo "<div class=\"jl-overlay";
                        if (($this->getAttribute(($context["particle"] ?? null), "overlay_color", []) != "default")) {
                            echo " jl-";
                            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "overlay_color", []));
                        }
                        echo " jl-margin-remove-first-child";
                        if (($this->getAttribute(($context["particle"] ?? null), "overlay_padding", []) != "default")) {
                            echo " jl-padding-";
                            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "overlay_padding", []));
                        }
                        if (($this->getAttribute(($context["particle"] ?? null), "overlay_maxwidth", []) != "none")) {
                            echo " jl-width-";
                            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "overlay_maxwidth", []));
                        }
                        echo twig_escape_filter($this->env, ($context["overlay_transition"] ?? null), "html", null, true);
                        echo "\">
";
                    } else {
                        // line 277
                        echo "<div class=\"jl-overlay";
                        if (($this->getAttribute(($context["particle"] ?? null), "overlay_color", []) != "default")) {
                            echo " jl-";
                            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "overlay_color", []));
                        }
                        echo " jl-margin-remove-first-child";
                        if (($this->getAttribute(($context["particle"] ?? null), "overlay_padding", []) != "default")) {
                            echo " jl-padding-";
                            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "overlay_padding", []));
                        }
                        if (($this->getAttribute(($context["particle"] ?? null), "overlay_maxwidth", []) != "none")) {
                            echo " jl-width-";
                            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "overlay_maxwidth", []));
                        }
                        if ($this->getAttribute(($context["particle"] ?? null), "overlay_style", [])) {
                            echo " ";
                            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "overlay_style", []));
                        }
                        echo twig_escape_filter($this->env, ($context["overlay_transition"] ?? null), "html", null, true);
                        echo "\">
";
                    }
                    // line 279
                    echo "
";
                }
                // line 281
                echo "
";
                // line 282
                if (($this->getAttribute(($context["particle"] ?? null), "meta_alignment", []) == "top")) {
                    // line 283
                    if ($this->getAttribute(($context["particle"] ?? null), "meta", [])) {
                        // line 284
                        echo "<div class=\"tm-meta";
                        echo twig_escape_filter($this->env, ($context["meta_text_transform"] ?? null), "html", null, true);
                        if (($this->getAttribute(($context["particle"] ?? null), "meta_margin", []) == "default")) {
                            echo " jl-margin-top";
                        } else {
                            echo " jl-margin-";
                            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "meta_margin", []));
                            echo "-top";
                        }
                        if (($this->getAttribute(($context["particle"] ?? null), "pre_meta_color", []) != "default")) {
                            echo " jl-text-";
                            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "pre_meta_color", []));
                        }
                        if (($this->getAttribute(($context["particle"] ?? null), "meta_style", []) != "default")) {
                            echo " jl-";
                            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "meta_style", []));
                        }
                        echo twig_escape_filter($this->env, ($context["meta_transition"] ?? null), "html", null, true);
                        echo "\">
";
                        // line 285
                        echo $this->getAttribute(($context["particle"] ?? null), "meta", []);
                        echo "
</div>
";
                    }
                }
                // line 289
                echo "
";
                // line 290
                if ($this->getAttribute(($context["particle"] ?? null), "title", [])) {
                    // line 291
                    echo "<";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "title_element", []));
                    echo " class=\"tm-title jl-margin-remove-bottom";
                    echo twig_escape_filter($this->env, ($context["title_text_transform"] ?? null), "html", null, true);
                    if (($this->getAttribute(($context["particle"] ?? null), "title_margin", []) == "default")) {
                        echo " jl-margin-top";
                    } else {
                        echo " jl-margin-";
                        echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "title_margin", []));
                        echo "-top";
                    }
                    if (($this->getAttribute(($context["particle"] ?? null), "title_style", []) != "default")) {
                        echo " jl-";
                        echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "title_style", []));
                    }
                    if (($this->getAttribute(($context["particle"] ?? null), "predefined_title_color", []) != "default")) {
                        echo " jl-text-";
                        echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "predefined_title_color", []));
                    }
                    if (($this->getAttribute(($context["particle"] ?? null), "title_decoration", []) != "none")) {
                        echo " jl-heading-";
                        echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "title_decoration", []));
                    }
                    echo twig_escape_filter($this->env, ($context["title_transition"] ?? null), "html", null, true);
                    echo "\">
";
                    // line 292
                    if (($this->getAttribute(($context["particle"] ?? null), "title_decoration", []) == "line")) {
                        echo " <span>";
                        if (($this->getAttribute(($context["particle"] ?? null), "link_type", []) == "content")) {
                            echo "<a class=\"jl-link-reset\" href=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "buttonlink", []));
                            echo "\" title=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "buttontext", []));
                            echo "\" target=\"";
                            echo twig_escape_filter($this->env, (($this->getAttribute(($context["particle"] ?? null), "buttontarget", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["particle"] ?? null), "buttontarget", []), "_self")) : ("_self")));
                            echo "\"";
                            echo twig_escape_filter($this->env, ($context["linkscroll"] ?? null), "html", null, true);
                            echo ">";
                        }
                        echo $this->getAttribute(($context["particle"] ?? null), "title", []);
                        if (($this->getAttribute(($context["particle"] ?? null), "link_type", []) == "content")) {
                            echo "</a>";
                        }
                        echo "</span>
";
                    } else {
                        // line 294
                        if (($this->getAttribute(($context["particle"] ?? null), "link_type", []) == "content")) {
                            echo "<a class=\"jl-link-reset\" href=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "buttonlink", []));
                            echo "\" title=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "buttontext", []));
                            echo "\" target=\"";
                            echo twig_escape_filter($this->env, (($this->getAttribute(($context["particle"] ?? null), "buttontarget", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["particle"] ?? null), "buttontarget", []), "_self")) : ("_self")));
                            echo "\"";
                            echo twig_escape_filter($this->env, ($context["linkscroll"] ?? null), "html", null, true);
                            echo ">";
                        }
                        echo $this->getAttribute(($context["particle"] ?? null), "title", []);
                        if (($this->getAttribute(($context["particle"] ?? null), "link_type", []) == "content")) {
                            echo "</a>";
                        }
                    }
                    // line 296
                    echo "</";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "title_element", []));
                    echo ">
";
                }
                // line 298
                echo "
";
                // line 299
                if (($this->getAttribute(($context["particle"] ?? null), "meta_alignment", []) == "bottom")) {
                    // line 300
                    if ($this->getAttribute(($context["particle"] ?? null), "meta", [])) {
                        // line 301
                        echo "<div class=\"tm-meta";
                        echo twig_escape_filter($this->env, ($context["meta_text_transform"] ?? null), "html", null, true);
                        if (($this->getAttribute(($context["particle"] ?? null), "meta_margin", []) == "default")) {
                            echo " jl-margin-top";
                        } else {
                            echo " jl-margin-";
                            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "meta_margin", []));
                            echo "-top";
                        }
                        if (($this->getAttribute(($context["particle"] ?? null), "pre_meta_color", []) != "default")) {
                            echo " jl-text-";
                            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "pre_meta_color", []));
                        }
                        if (($this->getAttribute(($context["particle"] ?? null), "meta_style", []) != "default")) {
                            echo " jl-";
                            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "meta_style", []));
                        }
                        echo twig_escape_filter($this->env, ($context["meta_transition"] ?? null), "html", null, true);
                        echo "\">
";
                        // line 302
                        echo $this->getAttribute(($context["particle"] ?? null), "meta", []);
                        echo "
</div>
";
                    }
                }
                // line 306
                echo "
";
                // line 307
                if ($this->getAttribute(($context["particle"] ?? null), "content", [])) {
                    // line 308
                    echo "<div class=\"tm-content jl-panel";
                    echo twig_escape_filter($this->env, ($context["content_text_transform"] ?? null), "html", null, true);
                    if (($this->getAttribute(($context["particle"] ?? null), "content_margin_top", []) == "default")) {
                        echo " jl-margin-top";
                    } else {
                        echo " jl-margin-";
                        echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "content_margin_top", []));
                        echo "-top";
                    }
                    if (($this->getAttribute(($context["particle"] ?? null), "content_style", []) != "default")) {
                        echo " jl-text-";
                        echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "content_style", []));
                    }
                    if (($this->getAttribute(($context["particle"] ?? null), "content_text_color", []) != "default")) {
                        echo " jl-text-";
                        echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "content_text_color", []));
                    }
                    echo twig_escape_filter($this->env, ($context["content_transition"] ?? null), "html", null, true);
                    echo "\">
";
                    // line 309
                    echo $this->getAttribute(($context["particle"] ?? null), "content", []);
                    echo "
</div>
";
                }
                // line 312
                echo "
";
                // line 313
                if (($this->getAttribute(($context["particle"] ?? null), "meta_alignment", []) == "content")) {
                    // line 314
                    if ($this->getAttribute(($context["particle"] ?? null), "meta", [])) {
                        // line 315
                        echo "<div class=\"tm-meta";
                        echo twig_escape_filter($this->env, ($context["meta_text_transform"] ?? null), "html", null, true);
                        if (($this->getAttribute(($context["particle"] ?? null), "meta_margin", []) == "default")) {
                            echo " jl-margin-top";
                        } else {
                            echo " jl-margin-";
                            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "meta_margin", []));
                            echo "-top";
                        }
                        if (($this->getAttribute(($context["particle"] ?? null), "pre_meta_color", []) != "default")) {
                            echo " jl-text-";
                            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "pre_meta_color", []));
                        }
                        if (($this->getAttribute(($context["particle"] ?? null), "meta_style", []) != "default")) {
                            echo " jl-";
                            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "meta_style", []));
                        }
                        echo twig_escape_filter($this->env, ($context["meta_transition"] ?? null), "html", null, true);
                        echo "\">
";
                        // line 316
                        echo $this->getAttribute(($context["particle"] ?? null), "meta", []);
                        echo "
</div>
";
                    }
                }
                // line 320
                echo "
";
                // line 321
                if (($this->getAttribute(($context["particle"] ?? null), "link_type", []) == "button")) {
                    // line 322
                    echo twig_escape_filter($this->env, ($context["button"] ?? null), "html", null, true);
                    echo "
";
                }
                // line 324
                echo "
</div>
</div>
";
            }
            // line 328
            echo "

";
            // line 331
            echo "
";
            // line 332
            if (($this->getAttribute(($context["particle"] ?? null), "link_type", []) == "element")) {
                // line 333
                echo "</a>
";
            } else {
                // line 335
                echo "</div>
";
            }
            // line 337
            echo "
</div>

";
            // line 340
            echo twig_escape_filter($this->env, ($context["endparallaxbackground"] ?? null), "html", null, true);
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "@particles/jloverlay.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1205 => 340,  1200 => 337,  1196 => 335,  1192 => 333,  1190 => 332,  1187 => 331,  1183 => 328,  1177 => 324,  1172 => 322,  1170 => 321,  1167 => 320,  1160 => 316,  1139 => 315,  1137 => 314,  1135 => 313,  1132 => 312,  1126 => 309,  1105 => 308,  1103 => 307,  1100 => 306,  1093 => 302,  1072 => 301,  1070 => 300,  1068 => 299,  1065 => 298,  1059 => 296,  1042 => 294,  1021 => 292,  994 => 291,  992 => 290,  989 => 289,  982 => 285,  961 => 284,  959 => 283,  957 => 282,  954 => 281,  950 => 279,  927 => 277,  908 => 275,  906 => 274,  894 => 272,  891 => 271,  877 => 269,  875 => 268,  872 => 267,  852 => 264,  843 => 262,  841 => 261,  838 => 260,  836 => 259,  833 => 257,  818 => 254,  816 => 253,  812 => 251,  800 => 248,  795 => 247,  793 => 246,  790 => 245,  778 => 243,  776 => 242,  774 => 241,  771 => 240,  767 => 238,  761 => 236,  747 => 234,  745 => 233,  742 => 232,  738 => 230,  728 => 228,  714 => 226,  712 => 225,  709 => 224,  707 => 223,  682 => 221,  678 => 220,  674 => 219,  672 => 218,  669 => 217,  663 => 18,  646 => 16,  644 => 15,  627 => 13,  625 => 12,  608 => 10,  606 => 9,  589 => 7,  587 => 6,  584 => 5,  582 => 4,  579 => 3,  574 => 1,  547 => 213,  545 => 212,  543 => 211,  534 => 207,  532 => 206,  521 => 202,  519 => 201,  512 => 196,  506 => 194,  499 => 193,  475 => 192,  473 => 191,  471 => 190,  455 => 186,  453 => 185,  443 => 181,  441 => 180,  433 => 176,  431 => 175,  424 => 171,  422 => 170,  416 => 166,  414 => 165,  407 => 160,  405 => 159,  403 => 158,  396 => 153,  394 => 152,  392 => 151,  385 => 146,  383 => 145,  381 => 144,  374 => 139,  372 => 138,  370 => 137,  355 => 132,  329 => 130,  327 => 129,  325 => 128,  308 => 124,  306 => 123,  290 => 119,  287 => 118,  269 => 114,  267 => 113,  250 => 109,  248 => 108,  231 => 104,  229 => 103,  222 => 97,  220 => 96,  218 => 95,  212 => 90,  154 => 89,  152 => 88,  150 => 87,  134 => 83,  132 => 82,  126 => 78,  124 => 77,  122 => 76,  118 => 72,  116 => 71,  114 => 70,  110 => 66,  108 => 65,  106 => 64,  98 => 59,  95 => 57,  93 => 56,  87 => 52,  85 => 51,  79 => 47,  77 => 46,  71 => 42,  69 => 41,  64 => 36,  62 => 35,  59 => 34,  57 => 33,  54 => 32,  52 => 31,  49 => 30,  47 => 29,  45 => 28,  43 => 27,  38 => 23,  36 => 22,  30 => 1,);
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
{% if particle.particle_title_color or particle.particle_title_fontsize or particle.title_color or particle.title_fontsize or particle.customize_content_color or particle.customize_content_fontsize or particle.meta_color or particle.meta_fontsize %}
<style>
{% if particle.particle_title_color or particle.particle_title_fontsize %}
#{{ id }}.g5-particle-title { {% if particle.particle_title_color %}color: {{ particle.particle_title_color }};{% endif %}{% if particle.particle_title_fontsize %}font-size: {{particle.particle_title_fontsize}}px;{% endif %} }
{% endif %}
{% if particle.title_color or particle.title_fontsize %}
#{{ id }} .tm-title { {% if particle.title_color %}color: {{particle.title_color}} !important; {% endif %}{% if particle.title_fontsize %}font-size: {{particle.title_fontsize}}px;{% endif %} }
{% endif %}
{% if particle.customize_content_color or particle.customize_content_fontsize %}
#{{ id }} .tm-content { {% if particle.customize_content_color %}color: {{particle.customize_content_color}} !important;{% endif %}{% if particle.customize_content_fontsize %} font-size: {{particle.customize_content_fontsize}}px;{% endif %} }
{% endif %}
{% if particle.meta_color or particle.meta_fontsize %}
#{{ id }} .tm-meta { {% if particle.meta_color %}color: {{particle.meta_color}};{% endif %}{% if particle.meta_fontsize %} font-size: {{particle.meta_fontsize}}px;{% endif %} }
{% endif %}
</style>
{% endif %}
{% endblock %}

{% set linkscroll %}
{% if particle.link|e matches '/#/' %} jl-scroll{% endif %}
{% endset %}

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

{# Set Title Text Transform #}
{% set title_text_transform %}
{% if particle.title_text_transform %} jl-text-{{particle.title_text_transform|e}}{% endif %}
{% endset %}

{# Set Meta Text Transform #}
{% set meta_text_transform %}
{% if particle.meta_text_transform %} jl-text-{{particle.meta_text_transform|e}}{% endif %}
{% endset %}

{# Set Content Text Transform #}
{% set content_text_transform %}
{% if particle.content_text_transform %} jl-text-{{particle.content_text_transform|e}}{% endif %}
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

{# Title Transition #}
{% set title_transition %}
{% if particle.overlay_hover == '1' %}
{% if particle.title_transition != 'none' %} jl-transition-{{ particle.title_transition|e }}{% endif %}
{% endif %}
{% endset %}

{# Meta Transition #}
{% set meta_transition %}
{% if particle.overlay_hover == '1' %}
{% if particle.meta_transition != 'none' %} jl-transition-{{ particle.meta_transition|e }}{% endif %}
{% endif %}
{% endset %}

{# Content Transition #}
{% set content_transition %}
{% if particle.overlay_hover == '1' %}
{% if particle.content_transition != 'none' %} jl-transition-{{ particle.content_transition|e }}{% endif %}
{% endif %}
{% endset %}

{# Link Transition #}
{% set link_transition %}
{% if particle.overlay_hover == '1' %}
{% if particle.link_transition != 'none' %} jl-transition-{{ particle.link_transition|e }}{% endif %}
{% endif %}
{% endset %}

{# Overlay Transition #}
{% set overlay_transition %}
{% if particle.overlay_hover == '1' %} jl-transition-{{ particle.overlay_transition|e }}{% endif %}
{% endset %}

{# Image Transition #}
{% set image_transition %}
{% if particle.image_transition %} jl-transition-{{ particle.image_transition|e }} jl-transition-opaque{% endif %}
{% endset %}

{# Image Hover Transition #}
{% set image_hover_transition %}
{% if particle.image_transition == 'none' %} jl-transition-fade{% else %} jl-transition-{{ particle.image_transition|e }}{% endif %}
{% endset %}

{# Image Box Shadow #}
{% set image_boxshadow %}
{% if particle.box_shadow != 'none' %} jl-box-shadow-{{particle.box_shadow|e}}{% endif %}{% if particle.box_shadow_hover != 'none' %} jl-box-shadow-hover-{{particle.box_shadow_hover|e}}{% endif %}
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

{# Set Button Class #}
{% set button_cls %}
{% if particle.buttonclass == 'link' %}jl-link{% elseif particle.buttonclass == 'link-muted' or particle.buttonclass == 'link-text' %}jl-{{particle.buttonclass|e}}{% else %}jl-button jl-button-{{particle.buttonclass|e}}{% endif %}
{% endset %}

{# Set Button Size #}
{% set button_size %}
{% if particle.buttonclass == 'link' or particle.buttonclass == 'link-muted' or particle.buttonclass == 'link-text' or particle.buttonclass == 'text' %}{% else %}{% if particle.link_button_size != 'default' %} jl-button-{{particle.link_button_size|e}}{% endif %}{% endif %}
{% endset %}

{# Set Button #}
{% set button %}
{% if particle.buttontext %}
<div class=\"{% if particle.link_margin_top == 'default' %}jl-margin-top{% else %}jl-margin-{{ particle.link_margin_top|e }}-top{% endif %}{{link_transition}}\"><a class=\"{{button_cls}}{{button_size}}\" href=\"{{ particle.link|e }}\" title=\"{{ particle.buttontext|e }}\" target=\"{{ particle.target|default('_self')|e }}\"{{linkscroll}}>{{ particle.buttontext|e }}</a></div>
{% endif %}
{% endset %}

{% block particle %}
{% if particle.enabled %}
{{parallaxbackground}}
{{particle_title_style}}
<div id=\"{{ id }}\" class=\"tm-overlay-wrapper{{content_maxwidth}}{% if particle.class %} {{ particle.class }}{% endif %}{{particle_alignment}}{% if particle.margin == 'inherit' %}{% elseif particle.margin == 'default' %} jl-margin{% else %} jl-margin-{{particle.margin|e}}{% endif %}{% if particle.visibility != 'inherit' %} jl-visible@{{particle.visibility|e}}{% endif %}\"{{animation}}>

{% if particle.overlay_hover == '1' or particle.hover_image != '' or particle.image_transition != 'none' %}

{% if particle.link_type == 'element' %}
<a class=\"tm-item jl-inline-clip jl-transition-toggle jl-link-reset{{image_boxshadow}}\" href=\"{{ particle.link|e }}\" title=\"{{ particle.buttontext|e }}\" target=\"{{ particle.target|default('_self')|e }}\"tabindex=\"0\"{{linkscroll}}>
{% else %}
<div class=\"tm-item jl-inline-clip jl-transition-toggle{% if particle.overlay_color != 'default' %} jl-{{ particle.overlay_color|e }}{% endif %}{{image_boxshadow}}\" tabindex=\"0\">
{% endif %}

{% else %}

{% if particle.link_type == 'element' %}
<a class=\"tm-item jl-inline-clip jl-link-reset{{image_boxshadow}}\" href=\"{{ particle.link|e }}\" title=\"{{ particle.buttontext|e }}\" target=\"{{ particle.target|default('_self')|e }}\"{{linkscroll}}>
{% else %}
<div class=\"tm-item jl-inline-clip{{image_boxshadow}}\">
{% endif %}

{% endif %}

{% if particle.hover_image != '' %}
{% if particle.image %}
<img class=\"tm-image\" src=\"{{ url(particle.image)|e }}\"{% if particle.image_alt %} alt=\"{{particle.image_alt|e}}\"{% endif %}>
{% endif %}

{% if particle.hover_image %}
<div class=\"jl-position-cover{{image_hover_transition}}\">
<img class=\"tm-image\" src=\"{{ url(particle.hover_image)|e }}\"{% if particle.image_alt %} alt=\"{{particle.image_alt|e}}\"{% endif %} jl-cover>
</div>
{% endif %}

{% else %}
{% if particle.image %}
<img class=\"tm-image{{image_transition}}\" src=\"{{ url(particle.image)|e }}\"{% if particle.image_alt %} alt=\"{{particle.image_alt|e}}\"{% endif %}>
{% endif %}
{% endif %}

{# Load Overlay Style #}
{% if particle.title or particle.meta or particle.content %}

{% if particle.overlay_style == 'none' %}
<div class=\"{% if particle.overlay_position %}jl-position-{{ particle.overlay_position|e }}{% endif %}\">

<div class=\"jl-panel{% if particle.overlay_padding == 'default' %} jl-padding{% else %} jl-padding-{{ particle.overlay_padding|e }}{% endif %}{% if particle.overlay_maxwidth != 'none' %} jl-width-{{ particle.overlay_maxwidth|e }}{% endif %}{{overlay_transition}}{% if particle.overlay_color != 'default' %} jl-{{ particle.overlay_color|e }}{% endif %} jl-margin-remove-first-child\">

{% else %}

{% if particle.overlay_mode == 'cover' %}
<div class=\"jl-position-cover{% if particle.overlay_margin != 'none' %} jl-position-{{ particle.overlay_margin|e }}{% endif %}{% if particle.overlay_style %} {{ particle.overlay_style|e }}{% endif %}{{overlay_transition}}\"></div>
{% endif %}

<div class=\"{% if particle.overlay_position %}jl-position-{{ particle.overlay_position|e }}{% endif %}{% if particle.overlay_margin != 'none' %} jl-position-{{ particle.overlay_margin|e }}{% endif %}\">

{% if particle.overlay_mode == 'cover' %}
<div class=\"jl-overlay{% if particle.overlay_color != 'default' %} jl-{{ particle.overlay_color|e }}{% endif %} jl-margin-remove-first-child{% if particle.overlay_padding != 'default' %} jl-padding-{{ particle.overlay_padding|e }}{% endif %}{% if particle.overlay_maxwidth != 'none' %} jl-width-{{ particle.overlay_maxwidth|e }}{% endif %}{{overlay_transition}}\">
{% else %}
<div class=\"jl-overlay{% if particle.overlay_color != 'default' %} jl-{{ particle.overlay_color|e }}{% endif %} jl-margin-remove-first-child{% if particle.overlay_padding != 'default' %} jl-padding-{{ particle.overlay_padding|e }}{% endif %}{% if particle.overlay_maxwidth != 'none' %} jl-width-{{ particle.overlay_maxwidth|e }}{% endif %}{% if particle.overlay_style %} {{ particle.overlay_style|e }}{% endif %}{{overlay_transition}}\">
{% endif %}

{% endif %}

{% if particle.meta_alignment == 'top' %}
{% if particle.meta %}
<div class=\"tm-meta{{meta_text_transform}}{% if particle.meta_margin == 'default' %} jl-margin-top{% else %} jl-margin-{{ particle.meta_margin|e }}-top{% endif %}{% if particle.pre_meta_color != 'default' %} jl-text-{{ particle.pre_meta_color|e }}{% endif %}{% if particle.meta_style != 'default' %} jl-{{ particle.meta_style|e }}{% endif %}{{meta_transition}}\">
{{particle.meta|raw}}
</div>
{% endif %}
{% endif %}

{% if particle.title %}
<{{particle.title_element|e}} class=\"tm-title jl-margin-remove-bottom{{title_text_transform}}{% if particle.title_margin == 'default' %} jl-margin-top{% else %} jl-margin-{{ particle.title_margin|e }}-top{% endif %}{% if particle.title_style != 'default' %} jl-{{ particle.title_style|e }}{% endif %}{% if particle.predefined_title_color != 'default' %} jl-text-{{ particle.predefined_title_color|e }}{% endif %}{% if particle.title_decoration != 'none' %} jl-heading-{{particle.title_decoration|e}}{% endif %}{{title_transition}}\">
{% if particle.title_decoration == 'line' %} <span>{% if particle.link_type == 'content' %}<a class=\"jl-link-reset\" href=\"{{ particle.buttonlink|e }}\" title=\"{{ particle.buttontext|e }}\" target=\"{{ particle.buttontarget|default('_self')|e }}\"{{linkscroll}}>{% endif %}{{ particle.title|raw }}{% if particle.link_type == 'content' %}</a>{% endif %}</span>
{% else %}
{% if particle.link_type == 'content' %}<a class=\"jl-link-reset\" href=\"{{ particle.buttonlink|e }}\" title=\"{{ particle.buttontext|e }}\" target=\"{{ particle.buttontarget|default('_self')|e }}\"{{linkscroll}}>{% endif %}{{ particle.title|raw }}{% if particle.link_type == 'content' %}</a>{% endif %}
{% endif %}
</{{particle.title_element|e}}>
{% endif %}

{% if particle.meta_alignment == 'bottom' %}
{% if particle.meta %}
<div class=\"tm-meta{{meta_text_transform}}{% if particle.meta_margin == 'default' %} jl-margin-top{% else %} jl-margin-{{ particle.meta_margin|e }}-top{% endif %}{% if particle.pre_meta_color != 'default' %} jl-text-{{ particle.pre_meta_color|e }}{% endif %}{% if particle.meta_style != 'default' %} jl-{{ particle.meta_style|e }}{% endif %}{{meta_transition}}\">
{{particle.meta|raw}}
</div>
{% endif %}
{% endif %}

{% if particle.content %}
<div class=\"tm-content jl-panel{{content_text_transform}}{% if particle.content_margin_top == 'default' %} jl-margin-top{% else %} jl-margin-{{ particle.content_margin_top|e }}-top{% endif %}{% if particle.content_style != 'default' %} jl-text-{{ particle.content_style|e }}{% endif %}{% if particle.content_text_color != 'default' %} jl-text-{{ particle.content_text_color|e }}{% endif %}{{content_transition}}\">
{{particle.content|raw}}
</div>
{% endif %}

{% if particle.meta_alignment == 'content' %}
{% if particle.meta %}
<div class=\"tm-meta{{meta_text_transform}}{% if particle.meta_margin == 'default' %} jl-margin-top{% else %} jl-margin-{{ particle.meta_margin|e }}-top{% endif %}{% if particle.pre_meta_color != 'default' %} jl-text-{{ particle.pre_meta_color|e }}{% endif %}{% if particle.meta_style != 'default' %} jl-{{ particle.meta_style|e }}{% endif %}{{meta_transition}}\">
{{particle.meta|raw}}
</div>
{% endif %}
{% endif %}

{% if particle.link_type == 'button' %}
{{button}}
{% endif %}

</div>
</div>
{% endif %}


{# End Overlay Style #}

{% if particle.link_type == 'element' %}
</a>
{% else %}
</div>
{% endif %}

</div>

{{endparallaxbackground}}
{% endif %}
{% endblock %}
", "@particles/jloverlay.html.twig", "/Users/sylwesterpilarz/Desktop/prgm/IntengineWebsite/cms/grav-admin/user/data/gantry5/themes/g5_helium/particles/jloverlay.html.twig");
    }
}
