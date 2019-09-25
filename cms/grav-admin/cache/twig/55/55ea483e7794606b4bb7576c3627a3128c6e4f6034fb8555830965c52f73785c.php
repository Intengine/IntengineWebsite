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

/* @particles/logo-image-hover.html.twig */
class __TwigTemplate_97de6c22a315bce452ed54499a723929d8d0427122060e9fb4f6eb27688b1e21 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'particle' => [$this, 'block_particle'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 17
        return "@nucleus/partials/particle.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 19
        $context["cAttrs"] = "";
        // line 20
        if ($this->getAttribute($this->getAttribute(($context["particle"] ?? null), "tag", []), "attributes", [])) {
            // line 21
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["particle"] ?? null), "tag", []), "attributes", []));
            foreach ($context['_seq'] as $context["_key"] => $context["attr"]) {
                // line 22
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["attr"]);
                foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                    // line 23
                    $context["cAttrs"] = (((((($context["cAttrs"] ?? null) . " ") . twig_escape_filter($this->env, $context["key"])) . "=\"") . twig_escape_filter($this->env, $context["value"], "html_attr")) . "\"");
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attr'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 28
        if ($this->getAttribute($this->getAttribute(($context["particle"] ?? null), "css", []), "class", [])) {
            // line 29
            $context["cClass"] = (" " . $this->getAttribute($this->getAttribute(($context["particle"] ?? null), "css", []), "class", []));
        } else {
            // line 31
            $context["cClass"] = "";
        }
        // line 34
        $context["imageDefault"] = $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc($this->getAttribute($this->getAttribute($this->getAttribute(($context["particle"] ?? null), "image", []), "default", []), "url", []));
        // line 35
        $context["imageHover"] = $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc($this->getAttribute($this->getAttribute($this->getAttribute(($context["particle"] ?? null), "image", []), "hover", []), "url", []));
        // line 36
        $context["imageTitle"] = (($this->getAttribute($this->getAttribute($this->getAttribute(($context["particle"] ?? null), "image", []), "default", []), "title", [])) ? (((" title=\"" . $this->getAttribute($this->getAttribute($this->getAttribute(($context["particle"] ?? null), "image", []), "default", []), "title", [])) . "\"")) : (""));
        // line 37
        $context["imageHoverTitle"] = (($this->getAttribute($this->getAttribute($this->getAttribute(($context["particle"] ?? null), "image", []), "hover", []), "title", [])) ? (((" title=\"" . $this->getAttribute($this->getAttribute($this->getAttribute(($context["particle"] ?? null), "image", []), "hover", []), "title", [])) . "\"")) : (""));
        // line 38
        $context["imageAlt"] = (($this->getAttribute($this->getAttribute($this->getAttribute(($context["particle"] ?? null), "image", []), "default", []), "alt", [])) ? (((" alt=\"" . $this->getAttribute($this->getAttribute($this->getAttribute(($context["particle"] ?? null), "image", []), "default", []), "alt", [])) . "\"")) : (""));
        // line 39
        $context["imageHoverAlt"] = (($this->getAttribute($this->getAttribute($this->getAttribute(($context["particle"] ?? null), "image", []), "hover", []), "alt", [])) ? (((" alt=\"" . $this->getAttribute($this->getAttribute($this->getAttribute(($context["particle"] ?? null), "image", []), "hover", []), "alt", [])) . "\"")) : (""));
        // line 40
        $context["imageDefLazyLoad"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["particle"] ?? null), "image", []), "default", []), "lazy_load", []);
        // line 41
        $context["imageHovLazyLoad"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["particle"] ?? null), "image", []), "hover", []), "lazy_load", []);
        // line 43
        $context["effectMulti"] = (($this->getAttribute($this->getAttribute(($context["particle"] ?? null), "effect", [], "any", false, true), "multi", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["particle"] ?? null), "effect", [], "any", false, true), "multi", []), "t1")) : ("t1"));
        // line 44
        $context["effectSingle"] = (($this->getAttribute($this->getAttribute(($context["particle"] ?? null), "effect", [], "any", false, true), "single", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["particle"] ?? null), "effect", [], "any", false, true), "single", []), "none")) : ("none"));
        // line 45
        $context["ofClass"] = (($this->getAttribute($this->getAttribute(($context["particle"] ?? null), "effect", []), "overflow", [])) ? (" of-hidden") : (""));
        // line 47
        $context["text"] = (($this->getAttribute($this->getAttribute(($context["particle"] ?? null), "text", [], "any", false, true), "text", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["particle"] ?? null), "text", [], "any", false, true), "text", []), "Logo / Image")) : ("Logo / Image"));
        // line 48
        $context["tStyle"] = (($this->getAttribute($this->getAttribute(($context["particle"] ?? null), "text", [], "any", false, true), "style", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["particle"] ?? null), "text", [], "any", false, true), "style", []), "none")) : ("none"));
        // line 49
        $context["tClass"] = (($this->getAttribute($this->getAttribute($this->getAttribute(($context["particle"] ?? null), "text", []), "css", []), "class", [])) ? (((" class=\"" . twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["particle"] ?? null), "text", []), "css", []), "class", []))) . "\"")) : (""));
        // line 50
        $context["aTitle"] = (($this->getAttribute($this->getAttribute(($context["particle"] ?? null), "link", []), "title", [])) ? (((" title=\"" . $this->getAttribute($this->getAttribute(($context["particle"] ?? null), "link", []), "title", [])) . "\"")) : (""));
        // line 51
        $context["aUrl"] = _twig_default_filter($this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc($this->getAttribute($this->getAttribute(($context["particle"] ?? null), "link", []), "url", [])), $this->getAttribute(($context["gantry"] ?? null), "siteUrl", [], "method"));
        // line 53
        if ((($context["aUrl"] ?? null) == $this->getAttribute(($context["gantry"] ?? null), "siteUrl", [], "method"))) {
            // line 54
            $context["aRel"] = " rel=\"home\"";
        } else {
            // line 56
            $context["aRel"] = "";
        }
        // line 59
        if ((($this->getAttribute($this->getAttribute(($context["particle"] ?? null), "link", []), "target", []) != "none") &&  !twig_test_empty($this->getAttribute($this->getAttribute(($context["particle"] ?? null), "link", []), "target", [])))) {
            // line 60
            $context["aTarget"] = ((" target=\"" . $this->getAttribute($this->getAttribute(($context["particle"] ?? null), "link", []), "target", [])) . "\"");
        } else {
            // line 62
            $context["aTarget"] = "";
        }
        // line 65
        $context["scriptType"] = "text/javascript";
        // line 67
        $context["jsPlace"] = (($this->getAttribute($this->getAttribute(($context["particle"] ?? null), "js", [], "any", false, true), "placement", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["particle"] ?? null), "js", [], "any", false, true), "placement", []), "head")) : ("head"));
        // line 68
        $context["jsExec"] = (($this->getAttribute($this->getAttribute(($context["particle"] ?? null), "js", [], "any", false, true), "execution", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["particle"] ?? null), "js", [], "any", false, true), "execution", []), "both")) : ("both"));
        // line 69
        $context["jsExecAttr"] = $this->getAttribute($this, "getJSExecution", [0 => ($context["jsExec"] ?? null)], "method");
        // line 70
        $context["jsPrior"] = (($this->getAttribute($this->getAttribute(($context["particle"] ?? null), "js", [], "any", false, true), "priority", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["particle"] ?? null), "js", [], "any", false, true), "priority", []), 0)) : (0));
        // line 71
        $context["jsHandle"] = (($this->getAttribute($this->getAttribute(($context["particle"] ?? null), "js", [], "any", false, true), "handle", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["particle"] ?? null), "js", [], "any", false, true), "handle", []), "inline")) : ("inline"));
        // line 73
        $context["cdnRepo"] = (($this->getAttribute($this->getAttribute(($context["particle"] ?? null), "cdn", [], "any", false, true), "base_url", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["particle"] ?? null), "cdn", [], "any", false, true), "base_url", []), "https://cdn.jsdelivr.net/gh/thexmanxyz/Logo-Image-Hover-Gantry@latest/src/js")) : ("https://cdn.jsdelivr.net/gh/thexmanxyz/Logo-Image-Hover-Gantry@latest/src/js"));
        // line 74
        $context["jsPath"] = $this->getAttribute($this, "getResourceFilePath", [0 => $this->getAttribute(($context["particle"] ?? null), "js", []), 1 => ($context["cdnRepo"] ?? null), 2 => "logo-image-hover", 3 => "js"], "method");
        // line 76
        ob_start();
        // line 77
        if ((((($this->getAttribute(($context["particle"] ?? null), "render", []) == "default") &&  !($context["imageDefault"] ?? null)) || ($this->getAttribute(($context["particle"] ?? null), "render", []) == "text")) || ($this->getAttribute(($context["particle"] ?? null), "render", []) == "both"))) {
            // line 78
            echo $this->getAttribute($this, "renderTag", [0 => ($context["tStyle"] ?? null), 1 => ($context["tClass"] ?? null), 2 => 0], "method");
            echo ($context["text"] ?? null);
            echo $this->getAttribute($this, "renderTag", [0 => ($context["tStyle"] ?? null), 1 => "", 2 => 1], "method");
        }
        $context["textTag"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 17
        $this->parent = $this->loadTemplate("@nucleus/partials/particle.html.twig", "@particles/logo-image-hover.html.twig", 17);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 82
    public function block_particle($context, array $blocks = [])
    {
        // line 83
        echo "<div class=\"g-logo-image-hover";
        echo twig_escape_filter($this->env, ($context["ofClass"] ?? null));
        echo twig_escape_filter($this->env, ($context["cClass"] ?? null));
        echo "\"";
        echo ($context["cAttrs"] ?? null);
        echo ">";
        // line 84
        $context["lazyState"] = (((($context["imageDefLazyLoad"] ?? null) || ($context["imageHovLazyLoad"] ?? null))) ? ("true") : ("false"));
        // line 85
        $context["effectState"] = (((((($context["jsHandle"] ?? null) == "extern") && (($context["effectMulti"] ?? null) == "t1")) && ($context["imageHover"] ?? null))) ? ("true") : ("false"));
        // line 87
        if (($this->getAttribute($this->getAttribute(($context["particle"] ?? null), "link", []), "enabled", []) == 1)) {
            echo "<a href=\"";
            echo twig_escape_filter($this->env, ($context["aUrl"] ?? null), "html", null, true);
            echo "\"";
            echo ($context["aTarget"] ?? null);
            echo ($context["aTitle"] ?? null);
            echo ($context["aRel"] ?? null);
            echo ">";
        }
        // line 88
        if (($this->getAttribute($this->getAttribute(($context["particle"] ?? null), "text", []), "position", []) == "before")) {
            echo ($context["textTag"] ?? null);
        }
        // line 89
        if (((($this->getAttribute(($context["particle"] ?? null), "render", []) == "default") || ($this->getAttribute(($context["particle"] ?? null), "render", []) == "image")) || ($this->getAttribute(($context["particle"] ?? null), "render", []) == "both"))) {
            // line 90
            echo $this->getAttribute($this, "renderImage", [0 => ($context["imageDefault"] ?? null), 1 => ($context["imageHover"] ?? null), 2 => ($context["imageTitle"] ?? null), 3 => ($context["imageHoverTitle"] ?? null), 4 => ($context["imageAlt"] ?? null), 5 => ($context["imageHoverAlt"] ?? null), 6 => ($context["imageDefLazyLoad"] ?? null), 7 => ($context["imageHovLazyLoad"] ?? null), 8 => ($context["effectSingle"] ?? null), 9 => ($context["effectMulti"] ?? null), 10 => ($context["jsHandle"] ?? null)], "method");
        }
        // line 92
        if (($this->getAttribute($this->getAttribute(($context["particle"] ?? null), "text", []), "position", []) == "after")) {
            echo ($context["textTag"] ?? null);
        }
        // line 93
        if (($this->getAttribute($this->getAttribute(($context["particle"] ?? null), "link", []), "enabled", []) == 1)) {
            echo "</a>";
        }
        // line 94
        $assetFunction = $this->env->getFunction('parse_assets')->getCallable();
        $assetVariables = ["priority" => ($context["jsPrior"] ?? null)];
        if ($assetVariables && !is_array($assetVariables)) {
            throw new UnexpectedValueException('{% scripts with x %}: x is not an array');
        }
        $location = ($context["jsPlace"] ?? null);
        if ($location && !is_string($location)) {
            throw new UnexpectedValueException('{% scripts in x %}: x is not a string');
        }
        $priority = isset($assetVariables['priority']) ? $assetVariables['priority'] : 0;
        ob_start();
        // line 95
        echo "<script>window.logoimagehover = {lazy: ";
        echo twig_escape_filter($this->env, ($context["lazyState"] ?? null), "html", null, true);
        echo ", effect: ";
        echo twig_escape_filter($this->env, ($context["effectState"] ?? null), "html", null, true);
        echo " };</script>";
        $content = ob_get_clean();
        $assetFunction($content, $location, $priority);
        // line 97
        $assetFunction = $this->env->getFunction('parse_assets')->getCallable();
        $assetVariables = ["priority" => ($context["jsPrior"] ?? null)];
        if ($assetVariables && !is_array($assetVariables)) {
            throw new UnexpectedValueException('{% scripts with x %}: x is not an array');
        }
        $location = ($context["jsPlace"] ?? null);
        if ($location && !is_string($location)) {
            throw new UnexpectedValueException('{% scripts in x %}: x is not a string');
        }
        $priority = isset($assetVariables['priority']) ? $assetVariables['priority'] : 0;
        ob_start();
        // line 98
        echo "<script type=\"";
        echo twig_escape_filter($this->env, ($context["scriptType"] ?? null), "html", null, true);
        echo "\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc(($context["jsPath"] ?? null)), "html", null, true);
        echo "\"";
        echo twig_escape_filter($this->env, ($context["jsExecAttr"] ?? null), "html", null, true);
        echo "></script>";
        $content = ob_get_clean();
        $assetFunction($content, $location, $priority);
        // line 100
        echo "</div>";
    }

    // line 103
    public function getrenderTag($__tag__ = null, $__class__ = null, $__close__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "tag" => $__tag__,
            "class" => $__class__,
            "close" => $__close__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 104
            if ((($context["tag"] ?? null) != "none")) {
                // line 105
                echo "<";
                echo twig_escape_filter($this->env, ($context["tag"] ?? null), "html", null, true);
                echo ($context["class"] ?? null);
                if ((($context["close"] ?? null) == 1)) {
                    echo "/";
                }
                echo ">";
            }
        } catch (\Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (\Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 109
    public function getrenderImage($__imgDef__ = null, $__imgHover__ = null, $__imgTitle__ = null, $__imgHoverTitle__ = null, $__imgAlt__ = null, $__imgHoverAlt__ = null, $__imgLL__ = null, $__imgHoverLL__ = null, $__effectS__ = null, $__effectM__ = null, $__jsType__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "imgDef" => $__imgDef__,
            "imgHover" => $__imgHover__,
            "imgTitle" => $__imgTitle__,
            "imgHoverTitle" => $__imgHoverTitle__,
            "imgAlt" => $__imgAlt__,
            "imgHoverAlt" => $__imgHoverAlt__,
            "imgLL" => $__imgLL__,
            "imgHoverLL" => $__imgHoverLL__,
            "effectS" => $__effectS__,
            "effectM" => $__effectM__,
            "jsType" => $__jsType__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 110
            ob_start();
            if (($context["imgLL"] ?? null)) {
                echo "data-";
            }
            echo "src=\"";
            echo twig_escape_filter($this->env, ($context["imgDef"] ?? null), "html", null, true);
            echo "\"";
            echo ($context["imgTitle"] ?? null);
            echo ($context["imgAlt"] ?? null);
            $context["link_src_top"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 111
            if (($context["imgDef"] ?? null)) {
                // line 112
                if (((($context["effectM"] ?? null) == "t1") ||  !($context["imgHover"] ?? null))) {
                    // line 113
                    if (($context["imgHover"] ?? null)) {
                        // line 114
                        if ((($context["jsType"] ?? null) == "inline")) {
                            // line 115
                            ob_start();
                            echo " onmouseover=\"this.src='";
                            echo twig_escape_filter($this->env, ($context["imgHover"] ?? null), "html", null, true);
                            echo "'\" onmouseout=\"this.src='";
                            echo twig_escape_filter($this->env, ($context["imgDef"] ?? null), "html", null, true);
                            echo "'\"";
                            $context["link_attrs"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                        } else {
                            // line 117
                            ob_start();
                            echo " data-logo-over=\"";
                            echo twig_escape_filter($this->env, ($context["imgHover"] ?? null), "html", null, true);
                            echo "\" data-logo-out=\"";
                            echo twig_escape_filter($this->env, ($context["imgDef"] ?? null), "html", null, true);
                            echo "\"";
                            $context["link_attrs"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                        }
                    } else {
                        // line 120
                        ob_start();
                        $context["link_attrs"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                    }
                    // line 122
                    echo "<img ";
                    echo ($context["link_src_top"] ?? null);
                    echo ($context["link_attrs"] ?? null);
                    echo " class=\"";
                    if ((($context["effectS"] ?? null) != "none")) {
                        echo twig_escape_filter($this->env, ($context["effectS"] ?? null), "html", null, true);
                        echo " ";
                    }
                    echo "front\"/>";
                } else {
                    // line 124
                    ob_start();
                    if (($context["imgHoverLL"] ?? null)) {
                        echo "data-";
                    }
                    echo "src=\"";
                    echo twig_escape_filter($this->env, ($context["imgHover"] ?? null), "html", null, true);
                    echo "\"";
                    echo ($context["imgHoverTitle"] ?? null);
                    echo ($context["imgHoverAlt"] ?? null);
                    $context["link_src_bottom"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                    // line 125
                    echo "<img ";
                    echo ($context["link_src_top"] ?? null);
                    echo " class=\"";
                    echo twig_escape_filter($this->env, ($context["effectM"] ?? null), "html", null, true);
                    echo " front";
                    if (($context["imgLL"] ?? null)) {
                        echo " lazy";
                    }
                    echo "\"/>
            <img ";
                    // line 126
                    echo ($context["link_src_bottom"] ?? null);
                    echo " class=\"";
                    echo twig_escape_filter($this->env, ($context["effectM"] ?? null), "html", null, true);
                    echo " back ";
                    if (($context["imgHoverLL"] ?? null)) {
                        echo " lazy";
                    }
                    echo "\"/>";
                }
            }
        } catch (\Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (\Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 130
    public function getgetResourceFilePath($__element__ = null, $__cdnUrl__ = null, $__cdnFile__ = null, $__type__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "element" => $__element__,
            "cdnUrl" => $__cdnUrl__,
            "cdnFile" => $__cdnFile__,
            "type" => $__type__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 131
            $context["elPath"] = (($this->getAttribute(($context["element"] ?? null), "path", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["element"] ?? null), "path", []), ((($context["cdnFile"] ?? null) . ".") . ($context["type"] ?? null)))) : (((($context["cdnFile"] ?? null) . ".") . ($context["type"] ?? null))));
            // line 132
            $context["elOpt"] = (($this->getAttribute(($context["element"] ?? null), "option", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["element"] ?? null), "option", []), "disabled")) : ("disabled"));
            // line 133
            $context["path"] = ($context["empty"] ?? null);
            // line 134
            if (((($context["elOpt"] ?? null) == "local") || (($context["elOpt"] ?? null) == "global"))) {
                // line 135
                $context["hPath"] = ($context["elPath"] ?? null);
                // line 136
                if (( !twig_test_empty(($context["hPath"] ?? null)) && (twig_lower_filter($this->env, twig_slice($this->env, ($context["hPath"] ?? null), 0, 1)) == "/"))) {
                    // line 137
                    $context["hPath"] = twig_slice($this->env, ($context["hPath"] ?? null), 1, (twig_length_filter($this->env, ($context["hPath"] ?? null)) - 1));
                }
                // line 139
                $context["hPath"] = ((($context["type"] ?? null) . "/") . ($context["hPath"] ?? null));
                // line 140
                if ((($context["elOpt"] ?? null) == "local")) {
                    // line 141
                    $context["path"] = ("gantry-theme://" . ($context["hPath"] ?? null));
                } else {
                    // line 143
                    $context["path"] = ("media/gantry5/engines/nucleus/" . ($context["hPath"] ?? null));
                }
            } elseif ((            // line 145
($context["elOpt"] ?? null) == "custom")) {
                // line 146
                $context["path"] = ($context["elPath"] ?? null);
            }
            // line 148
            if (twig_test_empty(($context["path"] ?? null))) {
                // line 149
                $context["path"] = ((((($context["cdnUrl"] ?? null) . "/") . ($context["cdnFile"] ?? null)) . ".") . ($context["type"] ?? null));
            }
            // line 151
            echo ($context["path"] ?? null);
        } catch (\Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (\Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 154
    public function getgetJSExecution($__type__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "type" => $__type__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 155
            $context["attribute"] = "";
            // line 156
            if (((($context["type"] ?? null) == "defer") || (($context["type"] ?? null) == "both"))) {
                // line 157
                $context["attribute"] = "defer=\"defer\"";
            }
            // line 159
            if ((($context["type"] ?? null) == "both")) {
                // line 160
                $context["attribute"] = (($context["attribute"] ?? null) . " ");
            }
            // line 162
            if (((($context["type"] ?? null) == "async") || (($context["type"] ?? null) == "both"))) {
                // line 163
                $context["attribute"] = (($context["attribute"] ?? null) . "async=\"async\"");
            }
            // line 165
            if ( !twig_test_empty(($context["type"] ?? null))) {
                // line 166
                $context["attribute"] = (" " . ($context["attribute"] ?? null));
            }
            // line 168
            echo ($context["attribute"] ?? null);
        } catch (\Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (\Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "@particles/logo-image-hover.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  490 => 168,  487 => 166,  485 => 165,  482 => 163,  480 => 162,  477 => 160,  475 => 159,  472 => 157,  470 => 156,  468 => 155,  456 => 154,  441 => 151,  438 => 149,  436 => 148,  433 => 146,  431 => 145,  428 => 143,  425 => 141,  423 => 140,  421 => 139,  418 => 137,  416 => 136,  414 => 135,  412 => 134,  410 => 133,  408 => 132,  406 => 131,  391 => 130,  367 => 126,  356 => 125,  345 => 124,  334 => 122,  330 => 120,  320 => 117,  311 => 115,  309 => 114,  307 => 113,  305 => 112,  303 => 111,  292 => 110,  270 => 109,  248 => 105,  246 => 104,  232 => 103,  228 => 100,  218 => 98,  206 => 97,  198 => 95,  186 => 94,  182 => 93,  178 => 92,  175 => 90,  173 => 89,  169 => 88,  159 => 87,  157 => 85,  155 => 84,  148 => 83,  145 => 82,  140 => 17,  134 => 78,  132 => 77,  130 => 76,  128 => 74,  126 => 73,  124 => 71,  122 => 70,  120 => 69,  118 => 68,  116 => 67,  114 => 65,  111 => 62,  108 => 60,  106 => 59,  103 => 56,  100 => 54,  98 => 53,  96 => 51,  94 => 50,  92 => 49,  90 => 48,  88 => 47,  86 => 45,  84 => 44,  82 => 43,  80 => 41,  78 => 40,  76 => 39,  74 => 38,  72 => 37,  70 => 36,  68 => 35,  66 => 34,  63 => 31,  60 => 29,  58 => 28,  47 => 23,  43 => 22,  39 => 21,  37 => 20,  35 => 19,  29 => 17,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{#######################################################}
{#                                                     #}
{#   Logo | Image | Hover - Particle for Gantry        #}
{#                                                     #}
{#   Purpose: This project adds a powerful image /     #}
{#            logo presentation particle to the        #}
{#            Gantry templating framework. The         #}
{#            component supports rollover and many     #}
{#            CSS3 hover and transition effects.       #}
{#                                                     #}
{#   Author: Andreas Kar (thex) <andreas.kar@gmx.at>   #}
{#   Repository: https://git.io/fA9XW                  #}
{#   Homepage: https://gantryprojects.com              #}
{#                                                     #}
{#######################################################}

{% extends '@nucleus/partials/particle.html.twig' %}

{% set cAttrs = '' %}
{% if particle.tag.attributes %}
    {% for attr in particle.tag.attributes %}
        {% for key, value in attr %}
            {% set cAttrs = cAttrs ~ ' ' ~ key|e ~ '=\"' ~ value|e('html_attr') ~ '\"' %}
        {% endfor %}
    {% endfor %}
{% endif %}

{% if particle.css.class %}
    {% set cClass = ' ' ~ particle.css.class %}
{% else %}
    {% set cClass = '' %}
{% endif %}

{% set imageDefault = url(particle.image.default.url) %}
{% set imageHover = url(particle.image.hover.url) %}
{% set imageTitle = (particle.image.default.title ? ' title=\"' ~ particle.image.default.title ~ '\"' : '') %}
{% set imageHoverTitle = (particle.image.hover.title ? ' title=\"' ~ particle.image.hover.title ~ '\"' : '') %}
{% set imageAlt = (particle.image.default.alt ? ' alt=\"' ~ particle.image.default.alt ~ '\"' : '') %}
{% set imageHoverAlt = (particle.image.hover.alt ? ' alt=\"' ~ particle.image.hover.alt ~ '\"' : '') %}
{% set imageDefLazyLoad = particle.image.default.lazy_load %}
{% set imageHovLazyLoad = particle.image.hover.lazy_load %}

{% set effectMulti = particle.effect.multi|default('t1') %}
{% set effectSingle = particle.effect.single|default('none') %}
{% set ofClass =  (particle.effect.overflow ? ' of-hidden' : '') %}

{% set text = particle.text.text|default('Logo / Image') %}
{% set tStyle = particle.text.style|default('none') %}
{% set tClass = (particle.text.css.class ? ' class=\"' ~ particle.text.css.class|e ~ '\"' : '') %}
{% set aTitle = (particle.link.title ? ' title=\"' ~ particle.link.title ~ '\"' : '') %}
{% set aUrl = url(particle.link.url)|default(gantry.siteUrl()) %}

{% if (aUrl == gantry.siteUrl()) %}
    {% set aRel = ' rel=\"home\"' %}
{% else %}
    {% set aRel = '' %}
{% endif %}

{% if particle.link.target != 'none' and particle.link.target is not empty %}
    {% set aTarget = ' target=\"' ~ particle.link.target ~ '\"' %}
{% else %}
    {% set aTarget = '' %}
{% endif %}

{% set scriptType = 'text/javascript' %}

{% set jsPlace = particle.js.placement|default('head') %}
{% set jsExec = particle.js.execution|default(\"both\") %}
{% set jsExecAttr = _self.getJSExecution(jsExec) %}
{% set jsPrior = particle.js.priority|default(0) %}
{% set jsHandle = particle.js.handle|default('inline') %}

{% set cdnRepo = particle.cdn.base_url|default('https://cdn.jsdelivr.net/gh/thexmanxyz/Logo-Image-Hover-Gantry@latest/src/js') %}
{% set jsPath = _self.getResourceFilePath(particle.js, cdnRepo, 'logo-image-hover', 'js') %}

{%- set textTag -%}
    {%- if (particle.render == 'default' and not imageDefault) or particle.render == 'text' or particle.render == 'both' -%}
            {{- _self.renderTag(tStyle, tClass, 0) -}}{{text|raw}}{{- _self.renderTag(tStyle, '', 1) -}}
    {%- endif -%}
{%- endset -%}

{%- block particle -%}
<div class=\"g-logo-image-hover{{ofClass|e}}{{cClass|e}}\"{{cAttrs|raw}}>
    {%- set lazyState = (imageDefLazyLoad or imageHovLazyLoad) ? 'true' : 'false' -%}
    {%- set effectState = (jsHandle == 'extern' and effectMulti == 't1' and imageHover) ? 'true' : 'false' -%}
    
    {%- if particle.link.enabled == 1 -%}<a href=\"{{aUrl}}\"{{aTarget|raw}}{{aTitle|raw}}{{aRel|raw}}>{%- endif -%}
    {%- if particle.text.position == 'before' -%}{{textTag|raw}}{%- endif -%}
    {%- if particle.render == 'default' or particle.render == 'image' or particle.render == 'both' -%}
        {{- _self.renderImage(imageDefault, imageHover, imageTitle, imageHoverTitle, imageAlt, imageHoverAlt, imageDefLazyLoad, imageHovLazyLoad, effectSingle, effectMulti, jsHandle) -}}
    {%- endif -%}
    {% if particle.text.position == 'after' %}{{textTag|raw}}{% endif %}
    {%- if particle.link.enabled == 1 -%}</a>{%- endif -%}
    {%- scripts in jsPlace with { priority: jsPrior } -%}
        <script>window.logoimagehover = {lazy: {{lazyState}}, effect: {{effectState}} };</script>
    {%- endscripts -%}
    {%- scripts in jsPlace with { priority: jsPrior } -%}
        <script type=\"{{scriptType}}\" src=\"{{url(jsPath)}}\"{{jsExecAttr}}></script>
    {%- endscripts -%}
</div>
{%- endblock -%}

{%- macro renderTag(tag, class, close) -%}
    {%- if tag != 'none' -%}
        <{{tag}}{{class|raw}}{% if close == 1 %}/{% endif %}>
    {%- endif -%}
{%- endmacro -%}

{%- macro renderImage(imgDef, imgHover, imgTitle, imgHoverTitle, imgAlt, imgHoverAlt, imgLL, imgHoverLL,  effectS, effectM, jsType) -%}
    {%- set link_src_top -%}{% if imgLL %}data-{% endif %}src=\"{{imgDef}}\"{{imgTitle|raw}}{{imgAlt|raw}}{%- endset -%}
    {%- if imgDef -%}
        {%- if effectM == 't1' or not imgHover -%}
            {%- if imgHover -%}
                {%- if jsType == 'inline' -%}
                    {% set link_attrs %} onmouseover=\"this.src='{{imgHover}}'\" onmouseout=\"this.src='{{imgDef}}'\"{% endset %}
                {%- else -%}
                    {% set link_attrs %} data-logo-over=\"{{imgHover}}\" data-logo-out=\"{{imgDef}}\"{% endset %}
                {%- endif -%}
            {%- else -%}
                {% set link_attrs %}{% endset %}
            {%- endif -%}
            <img {{link_src_top|raw}}{{link_attrs|raw}} class=\"{% if effectS != 'none' %}{{effectS}} {% endif %}front\"/>
        {%- else -%}
            {%- set link_src_bottom -%}{% if imgHoverLL %}data-{% endif %}src=\"{{imgHover}}\"{{imgHoverTitle|raw}}{{imgHoverAlt|raw}}{%- endset -%}
            <img {{link_src_top|raw}} class=\"{{effectM}} front{% if imgLL %} lazy{% endif %}\"/>
            <img {{link_src_bottom|raw}} class=\"{{effectM}} back {% if imgHoverLL %} lazy{% endif %}\"/>
        {%- endif -%}
    {%- endif -%}
{%- endmacro -%}
{%- macro getResourceFilePath(element, cdnUrl, cdnFile, type) -%}
    {%- set elPath = element.path|default(cdnFile ~ \".\" ~ type) -%}
    {%- set elOpt = element.option|default(\"disabled\") -%}
    {%- set path = empty -%}
    {%- if elOpt == 'local' or elOpt == 'global' -%}
        {%- set hPath = elPath -%}
        {%- if hPath is not empty and hPath|slice(0, 1)|lower == '/' -%}
            {%- set hPath = hPath|slice(1, (hPath|length - 1)) -%}
        {%- endif -%}
        {%- set hPath = type ~ '/' ~ hPath -%}
        {%- if elOpt == 'local' -%}
            {%- set path = 'gantry-theme://' ~ hPath -%}
        {%- else -%}
            {%- set path = 'media/gantry5/engines/nucleus/' ~ hPath -%}
        {%- endif -%}
    {%- elseif elOpt == 'custom' -%}
        {%- set path = elPath -%}
    {%- endif -%}
    {%- if path is empty -%}
        {%- set path = cdnUrl ~ '/' ~ cdnFile ~ \".\" ~ type -%}
    {%- endif -%}
    {{- path|raw -}}
{%- endmacro -%}

{%- macro getJSExecution(type) -%}
    {%- set attribute = '' -%}
    {%- if type == 'defer' or type == 'both' -%}
        {%- set attribute = 'defer=\"defer\"' -%}
    {%- endif -%}
    {%- if type == 'both' -%}
        {%- set attribute = attribute ~ ' ' -%}
    {%- endif -%}
    {%- if type == 'async' or type == 'both' -%}
        {%- set attribute = attribute ~ 'async=\"async\"' -%}
    {%- endif -%}
    {%- if type is not empty -%}
        {%- set attribute = ' ' ~ attribute -%}
    {%- endif -%}
    {{- attribute|raw -}}
{%- endmacro -%}", "@particles/logo-image-hover.html.twig", "/Users/mac/Desktop/IntengineWebsite/cms/grav-admin/user/data/gantry5/themes/g5_helium/particles/logo-image-hover.html.twig");
    }
}
