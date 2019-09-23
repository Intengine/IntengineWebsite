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

/* @particles/jldivider.html.twig */
class __TwigTemplate_918b068a9f24b6ec3ebf6db079469c03f6269376b1b0fd9d444619855f0357a4 extends \Twig\Template
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
        // line 125
        ob_start();
        // line 126
        if (($this->getAttribute(($context["particle"] ?? null), "divider_style", []) == "default")) {
            echo " class=\"jl-hr\"";
        } elseif (($this->getAttribute(($context["particle"] ?? null), "divider_style", []) == "icon")) {
            echo " class=\"jl-divider-icon\"";
        } elseif (($this->getAttribute(($context["particle"] ?? null), "divider_style", []) == "vertical")) {
            echo " class=\"jl-divider-vertical\"";
        } else {
            echo " class=\"jl-divider-small";
            if (($this->getAttribute(($context["particle"] ?? null), "divider_align", []) != "inherit")) {
                echo " jl-text-";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "divider_align", []));
                if (($this->getAttribute(($context["particle"] ?? null), "divider_breakpoint", []) != "always")) {
                    echo "@";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "divider_breakpoint", []));
                }
            }
            if (($this->getAttribute(($context["particle"] ?? null), "divider_fallback", []) != "inherit")) {
                echo " jl-text-";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "divider_fallback", []));
            }
            echo "\"
";
        }
        $context["dividerstyle"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 1
        $this->parent = $this->loadTemplate("@nucleus/partials/particle.html.twig", "@particles/jldivider.html.twig", 1);
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
            echo "</style>
";
        }
    }

    // line 130
    public function block_particle($context, array $blocks = [])
    {
        // line 131
        if ($this->getAttribute(($context["particle"] ?? null), "enabled", [])) {
            // line 132
            echo twig_escape_filter($this->env, ($context["parallaxbackground"] ?? null), "html", null, true);
            echo "
";
            // line 133
            echo twig_escape_filter($this->env, ($context["particle_title_style"] ?? null), "html", null, true);
            echo "
<div class=\"tm-divider-wrapper";
            // line 134
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
            // line 135
            if (($this->getAttribute(($context["particle"] ?? null), "divider_element", []) == "hr")) {
                // line 136
                echo "<hr";
                echo twig_escape_filter($this->env, ($context["dividerstyle"] ?? null), "html", null, true);
                echo ">
";
            } else {
                // line 138
                echo "<div";
                echo twig_escape_filter($this->env, ($context["dividerstyle"] ?? null), "html", null, true);
                echo "></div>
";
            }
            // line 140
            echo "</div>
";
            // line 141
            echo twig_escape_filter($this->env, ($context["endparallaxbackground"] ?? null), "html", null, true);
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "@particles/jldivider.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  522 => 141,  519 => 140,  513 => 138,  507 => 136,  505 => 135,  483 => 134,  479 => 133,  475 => 132,  473 => 131,  470 => 130,  464 => 9,  447 => 7,  445 => 6,  442 => 5,  440 => 4,  437 => 3,  432 => 1,  407 => 126,  405 => 125,  398 => 120,  392 => 118,  385 => 117,  361 => 116,  359 => 115,  357 => 114,  341 => 110,  339 => 109,  324 => 104,  298 => 102,  296 => 101,  294 => 100,  277 => 96,  275 => 95,  259 => 91,  256 => 90,  238 => 86,  236 => 85,  219 => 81,  217 => 80,  200 => 76,  198 => 75,  191 => 69,  189 => 68,  187 => 67,  181 => 62,  123 => 61,  121 => 60,  119 => 59,  103 => 55,  101 => 54,  95 => 50,  93 => 49,  91 => 48,  87 => 44,  85 => 43,  83 => 42,  79 => 38,  77 => 37,  75 => 36,  67 => 31,  64 => 29,  62 => 28,  57 => 23,  55 => 22,  52 => 21,  50 => 20,  47 => 19,  45 => 18,  42 => 17,  40 => 16,  38 => 15,  36 => 14,  30 => 1,);
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
</style>
{% endif %}
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

{# Set Divider Style #}
{% set dividerstyle %}
{% if particle.divider_style == 'default' %} class=\"jl-hr\"{% elseif particle.divider_style == 'icon' %} class=\"jl-divider-icon\"{% elseif particle.divider_style == 'vertical' %} class=\"jl-divider-vertical\"{% else %} class=\"jl-divider-small{% if particle.divider_align != 'inherit' %} jl-text-{{particle.divider_align|e}}{% if particle.divider_breakpoint != 'always' %}@{{particle.divider_breakpoint|e}}{% endif %}{% endif %}{% if particle.divider_fallback != 'inherit' %} jl-text-{{particle.divider_fallback|e}}{% endif %}\"
{% endif %}
{% endset %}

{% block particle %}
{% if particle.enabled %}
{{parallaxbackground}}
{{particle_title_style}}
<div class=\"tm-divider-wrapper{{content_maxwidth}}{% if particle.class %} {{ particle.class }}{% endif %}{{particle_alignment}}{% if particle.margin == 'inherit' %}{% elseif particle.margin == 'default' %} jl-margin{% else %} jl-margin-{{particle.margin|e}}{% endif %}{% if particle.visibility != 'inherit' %} jl-visible@{{particle.visibility|e}}{% endif %}\"{{animation}}>
{% if particle.divider_element == 'hr' %}
<hr{{dividerstyle}}>
{% else %}
<div{{dividerstyle}}></div>
{% endif %}
</div>
{{endparallaxbackground}}
{% endif %}
{% endblock %}
", "@particles/jldivider.html.twig", "/Users/mac/Desktop/IntengineWebsite/cms/grav-admin/user/data/gantry5/themes/g5_helium/particles/jldivider.html.twig");
    }
}
