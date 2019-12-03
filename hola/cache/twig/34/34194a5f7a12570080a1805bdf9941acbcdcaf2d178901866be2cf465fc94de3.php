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

/* forms/fields/file/file.html.twig */
class __TwigTemplate_1ab78e6b3b1b3f4bdaf002167708a81c88c2ac0cf01645d66df1b748ac6df193 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'input' => [$this, 'block_input'],
            'prepend' => [$this, 'block_prepend'],
            'file_extras' => [$this, 'block_file_extras'],
            'input_attributes' => [$this, 'block_input_attributes'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "forms/field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 56
        $context["macro"] = $this;
        // line 58
        $context["defaults"] = $this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "form", []);
        // line 59
        $context["files"] = twig_array_merge($this->getAttribute(($context["defaults"] ?? null), "files", []), (((isset($context["field"]) || array_key_exists("field", $context))) ? (_twig_default_filter(($context["field"] ?? null), [])) : ([])));
        // line 60
        $context["limit"] = (( !$this->getAttribute(($context["field"] ?? null), "multiple", [])) ? (1) : ($this->getAttribute(($context["files"] ?? null), "limit", [])));
        // line 1
        $this->parent = $this->loadTemplate("forms/field.html.twig", "forms/fields/file/file.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 62
    public function block_input($context, array $blocks = [])
    {
        // line 63
        echo "    ";
        $context["page_can_upload"] = (($context["exists"] ?? null) || (((($context["type"] ?? null) == "page") &&  !($context["exists"] ?? null)) &&  !((is_string($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = $this->getAttribute(($context["field"] ?? null), "destination", [])) && is_string($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = "@self") && ('' === $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 || 0 === strpos($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4, $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144))) || (is_string($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = $this->getAttribute(($context["field"] ?? null), "destination", [])) && is_string($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = "self@") && ('' === $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 || 0 === strpos($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b, $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002))))));
        // line 64
        echo "    ";
        if ((($context["form"] ?? null) || ( !(isset($context["type"]) || array_key_exists("type", $context)) || ($context["page_can_upload"] ?? null)))) {
            // line 65
            echo "
    ";
            // line 66
            $this->displayBlock('prepend', $context, $blocks);
            // line 67
            echo "    ";
            $context["settings"] = ["name" => $this->getAttribute(($context["field"] ?? null), "name", []), "paramName" => ($this->env->getExtension('Grav\Common\Twig\TwigExtension')->fieldNameFilter((($context["scope"] ?? null) . $this->getAttribute(($context["field"] ?? null), "name", []))) . (($this->getAttribute(($context["files"] ?? null), "multiple", [])) ? ("[]") : (""))), "limit" => ($context["limit"] ?? null), "filesize" => ($context["form_max_filesize"] ?? null), "accept" => $this->getAttribute(($context["files"] ?? null), "accept", []), "resolution" => $this->getAttribute(($context["files"] ?? null), "resolution", []), "resizeWidth" => $this->getAttribute(($context["files"] ?? null), "resizeWidth", []), "resizeHeight" => $this->getAttribute(($context["files"] ?? null), "resizeHeight", []), "resizeQuality" => $this->getAttribute(($context["files"] ?? null), "resizeQuality", [])];
            // line 68
            echo "    ";
            $context["dropzoneSettings"] = $this->getAttribute(($context["field"] ?? null), "dropzone", []);
            // line 69
            echo "    ";
            if ($this->getAttribute(($context["form"] ?? null), "getMediaTaskRoute", [], "method")) {
                // line 70
                echo "        ";
                $context["file_url_add"] = (($context["base_url_relative"] ?? null) . $this->getAttribute(($context["form"] ?? null), "getMediaTaskRoute", [0 => [], 1 => "json"], "method"));
                // line 71
                echo "        ";
                $context["file_task_add"] = ["task" => "media.upload", "name" => $this->getAttribute(($context["field"] ?? null), "name", []), "__form-name__" => $this->getAttribute(($context["form"] ?? null), "name", []), "__unique_form_id__" => $this->getAttribute(($context["form"] ?? null), "uniqueid", [])];
                // line 72
                echo "
        ";
                // line 73
                $context["file_url_remove"] = (($context["base_url_relative"] ?? null) . $this->getAttribute(($context["form"] ?? null), "getMediaTaskRoute", [0 => [], 1 => "json"], "method"));
                // line 74
                echo "        ";
                $context["file_task_remove"] = ["task" => "media.delete", "name" => $this->getAttribute(($context["field"] ?? null), "name", []), "__form-name__" => $this->getAttribute(($context["form"] ?? null), "name", []), "__unique_form_id__" => $this->getAttribute(($context["form"] ?? null), "uniqueid", [])];
                // line 75
                echo "    ";
            } else {
                // line 76
                echo "        ";
                $context["file_url_remove"] = ((($context["file_url_remove"] ?? null)) ? (($context["file_url_remove"] ?? null)) : (($context["base_url_relative"] ?? null)));
                // line 77
                echo "    ";
            }
            // line 78
            echo "
    <div class=\"";
            // line 79
            ((($context["form_field_wrapper_classes"] ?? null)) ? (print (twig_escape_filter($this->env, ($context["form_field_wrapper_classes"] ?? null), "html", null, true))) : (print ("form-input-wrapper")));
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "classes", []), "html", null, true);
            echo " dropzone files-upload ";
            if ( !($this->getAttribute(($context["field"] ?? null), "fancy", []) === false)) {
                echo "form-input-file";
            }
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "size", []), "html", null, true);
            echo "\"
         data-grav-file-settings=\"";
            // line 80
            echo twig_escape_filter($this->env, twig_jsonencode_filter(($context["settings"] ?? null)), "html_attr");
            echo "\"
         data-dropzone-options=\"";
            // line 81
            echo twig_escape_filter($this->env, twig_jsonencode_filter(($context["dropzoneSettings"] ?? null)), "html_attr");
            echo "\"
         ";
            // line 82
            if ((($context["file_task_add"] ?? null) && ($context["file_task_remove"] ?? null))) {
                // line 83
                echo "             data-file-post-add=\"";
                echo twig_escape_filter($this->env, twig_jsonencode_filter(($context["file_task_add"] ?? null)), "html_attr");
                echo "\"
             data-file-post-remove=\"";
                // line 84
                echo twig_escape_filter($this->env, twig_jsonencode_filter(($context["file_task_remove"] ?? null)), "html_attr");
                echo "\"
             data-file-url-add=\"";
                // line 85
                echo twig_escape_filter($this->env, ($context["file_url_add"] ?? null), "html", null, true);
                echo "\"
             data-file-url-remove=\"";
                // line 86
                echo twig_escape_filter($this->env, ($context["file_url_remove"] ?? null), "html", null, true);
                echo "\"
         ";
            } else {
                // line 88
                echo "             ";
                if (($context["file_url_add"] ?? null)) {
                    echo "data-file-url-add=\"";
                    echo twig_escape_filter($this->env, ($context["file_url_add"] ?? null), "html", null, true);
                    echo "\"";
                }
                // line 89
                echo "             ";
                if (($context["file_url_remove"] ?? null)) {
                    echo "data-file-url-remove=\"";
                    echo twig_escape_filter($this->env, ($context["file_url_remove"] ?? null), "html", null, true);
                    echo "\"";
                }
                // line 90
                echo "         ";
            }
            // line 91
            echo "    >

    ";
            // line 93
            $this->displayBlock('file_extras', $context, $blocks);
            // line 94
            echo "    <input
            ";
            // line 96
            echo "            ";
            $this->displayBlock('input_attributes', $context, $blocks);
            // line 105
            echo "    />

    ";
            // line 107
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["value"] ?? null));
            foreach ($context['_seq'] as $context["path"] => $context["file"]) {
                // line 108
                echo "        ";
                echo $context["macro"]->getpreview($context["path"], $context["file"], $context);
                echo "
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['path'], $context['file'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 110
            echo "    ";
            $this->loadTemplate("forms/fields/hidden/hidden.html.twig", "forms/fields/file/file.html.twig", 110)->display(twig_array_merge($context, ["field" => ["name" => ("_json." . $this->getAttribute(($context["field"] ?? null), "name", []))], "value" => twig_jsonencode_filter((($context["value"]) ?? ([])))]));
            // line 111
            echo "    </div>

    ";
        } else {
            // line 114
            echo "        <span class=\"note\">";
            echo $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.CANNOT_ADD_FILES_PAGE_NOT_SAVED");
            echo "</span>
    ";
        }
    }

    // line 66
    public function block_prepend($context, array $blocks = [])
    {
    }

    // line 93
    public function block_file_extras($context, array $blocks = [])
    {
    }

    // line 96
    public function block_input_attributes($context, array $blocks = [])
    {
        // line 97
        echo "                type=\"file\"
                ";
        // line 98
        if ($this->getAttribute(($context["files"] ?? null), "multiple", [])) {
            echo "multiple=\"multiple\"";
        }
        // line 99
        echo "                ";
        if ($this->getAttribute(($context["files"] ?? null), "accept", [])) {
            echo "accept=\"";
            echo twig_escape_filter($this->env, twig_join_filter($this->getAttribute(($context["files"] ?? null), "accept", []), ","), "html", null, true);
            echo "\"";
        }
        // line 100
        echo "                ";
        if (($this->getAttribute(($context["field"] ?? null), "disabled", []) || ($context["isDisabledToggleable"] ?? null))) {
            echo "disabled=\"disabled\"";
        }
        // line 101
        echo "                ";
        if ($this->getAttribute(($context["field"] ?? null), "random_name", [])) {
            echo "random=\"true\"";
        }
        // line 102
        echo "                ";
        if (($context["required"] ?? null)) {
            echo "required=\"required\"";
        }
        // line 103
        echo "                ";
        $this->displayParentBlock("input_attributes", $context, $blocks);
        echo "
            ";
    }

    // line 3
    public function getbytesToSize($__bytes__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "bytes" => $__bytes__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 4
            ob_start(function () { return ''; });
            // line 5
            echo "        ";
            $context["kilobyte"] = 1024;
            // line 6
            echo "        ";
            $context["megabyte"] = (($context["kilobyte"] ?? null) * 1024);
            // line 7
            echo "        ";
            $context["gigabyte"] = (($context["megabyte"] ?? null) * 1024);
            // line 8
            echo "        ";
            $context["terabyte"] = (($context["gigabyte"] ?? null) * 1024);
            // line 9
            echo "
        ";
            // line 10
            if ((($context["bytes"] ?? null) < ($context["kilobyte"] ?? null))) {
                // line 11
                echo "            ";
                echo twig_escape_filter($this->env, (($context["bytes"] ?? null) . " B"), "html", null, true);
                echo "
        ";
            } elseif ((            // line 12
($context["bytes"] ?? null) < ($context["megabyte"] ?? null))) {
                // line 13
                echo "            ";
                echo twig_escape_filter($this->env, (twig_number_format_filter($this->env, (($context["bytes"] ?? null) / ($context["kilobyte"] ?? null)), 2, ".") . " KB"), "html", null, true);
                echo "
        ";
            } elseif ((            // line 14
($context["bytes"] ?? null) < ($context["gigabyte"] ?? null))) {
                // line 15
                echo "            ";
                echo twig_escape_filter($this->env, (twig_number_format_filter($this->env, (($context["bytes"] ?? null) / ($context["megabyte"] ?? null)), 2, ".") . " MB"), "html", null, true);
                echo "
        ";
            } elseif ((            // line 16
($context["bytes"] ?? null) < ($context["terabyte"] ?? null))) {
                // line 17
                echo "            ";
                echo twig_escape_filter($this->env, (twig_number_format_filter($this->env, (($context["bytes"] ?? null) / ($context["gigabyte"] ?? null)), 2, ".") . " GB"), "html", null, true);
                echo "
        ";
            } else {
                // line 19
                echo "            ";
                echo twig_escape_filter($this->env, (twig_number_format_filter($this->env, (($context["bytes"] ?? null) / ($context["terabyte"] ?? null)), 2, ".") . " TB"), "html", null, true);
                echo "
        ";
            }
            // line 21
            echo "    ";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        } catch (\Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (\Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 24
    public function getpreview($__path__ = null, $__value__ = null, $__global__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "path" => $__path__,
            "value" => $__value__,
            "global" => $__global__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 25
            echo "    ";
            if (($context["value"] ?? null)) {
                // line 26
                echo "        ";
                $context["uri"] = $this->getAttribute($this->getAttribute(($context["global"] ?? null), "grav", []), "uri", []);
                // line 27
                echo "        ";
                $context["files"] = $this->getAttribute(($context["global"] ?? null), "files", []);
                // line 28
                echo "        ";
                $context["config"] = $this->getAttribute($this->getAttribute(($context["global"] ?? null), "grav", []), "config", []);
                // line 29
                echo "        ";
                $context["route"] = $this->getAttribute($this->getAttribute(($context["global"] ?? null), "context", []), "route", [], "method");
                // line 30
                echo "
        ";
                // line 31
                $context["type"] = (($this->getAttribute(($context["global"] ?? null), "blueprint_type", [])) ? ($this->getAttribute(($context["global"] ?? null), "blueprint_type", [])) : ((($this->getAttribute($this->getAttribute(($context["global"] ?? null), "admin", []), "location", [])) ? ($this->getAttribute($this->getAttribute(($context["global"] ?? null), "admin", []), "location", [])) : ("config"))));
                // line 32
                echo "
        ";
                // line 33
                $context["blueprint_name"] = $this->getAttribute($this->getAttribute(($context["global"] ?? null), "blueprints", []), "getFilename", []);
                // line 34
                echo "        ";
                if ((($context["type"] ?? null) == "pages")) {
                    // line 35
                    echo "            ";
                    $context["blueprint_name"] = ((($context["type"] ?? null) . "/") . ($context["blueprint_name"] ?? null));
                    // line 36
                    echo "        ";
                }
                // line 37
                echo "        ";
                $context["blueprint"] = base64_encode(($context["blueprint_name"] ?? null));
                // line 38
                echo "        ";
                $context["real_path"] = ((($this->getAttribute(($context["value"] ?? null), "thumb", [], "any", true, true) &&  !(null === $this->getAttribute(($context["value"] ?? null), "thumb", [])))) ? ($this->getAttribute(($context["value"] ?? null), "thumb", [])) : (((($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["global"] ?? null), "context", [], "any", false, true), "media", [], "any", false, true), ($context["path"] ?? null), [], "array", false, true), "relativePath", [], "any", true, true) &&  !(null === $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["global"] ?? null), "context", [], "any", false, true), "media", [], "any", false, true), ($context["path"] ?? null), [], "array", false, true), "relativePath", [])))) ? ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["global"] ?? null), "context", [], "any", false, true), "media", [], "any", false, true), ($context["path"] ?? null), [], "array", false, true), "relativePath", [])) : (((($this->getAttribute($this->getAttribute(($context["global"] ?? null), "form", [], "any", false, true), "getPagePathFromToken", [0 => ($context["path"] ?? null)], "method", true, true) &&  !(null === $this->getAttribute($this->getAttribute(($context["global"] ?? null), "form", [], "any", false, true), "getPagePathFromToken", [0 => ($context["path"] ?? null)], "method")))) ? ($this->getAttribute($this->getAttribute(($context["global"] ?? null), "form", [], "any", false, true), "getPagePathFromToken", [0 => ($context["path"] ?? null)], "method")) : ($this->getAttribute($this->getAttribute(($context["global"] ?? null), "admin", []), "getPagePathFromToken", [0 => ($context["path"] ?? null)], "method")))))));
                // line 39
                echo "
        ";
                // line 40
                $context["remove"] = (($this->getAttribute(($context["global"] ?? null), "file_task_remove", [])) ? ($this->getAttribute(($context["global"] ?? null), "file_url_remove", [])) : ($this->getAttribute(($context["uri"] ?? null), "addNonce", [0 => (((((((((((((((((((((($this->getAttribute(                // line 41
($context["global"] ?? null), "file_url_remove", []) . "/media.json") . "/route") . $this->getAttribute($this->getAttribute(                // line 43
($context["config"] ?? null), "system", []), "param_sep", [])) . base64_encode((($this->getAttribute(($context["global"] ?? null), "base_path", []) . "/") . ($context["real_path"] ?? null)))) . "/task") . $this->getAttribute($this->getAttribute(                // line 44
($context["config"] ?? null), "system", []), "param_sep", [])) . "removeFileFromBlueprint") . "/proute") . $this->getAttribute($this->getAttribute(                // line 45
($context["config"] ?? null), "system", []), "param_sep", [])) . base64_encode(($context["route"] ?? null))) . "/blueprint") . $this->getAttribute($this->getAttribute(                // line 46
($context["config"] ?? null), "system", []), "param_sep", [])) . ($context["blueprint"] ?? null)) . "/type") . $this->getAttribute($this->getAttribute(                // line 47
($context["config"] ?? null), "system", []), "param_sep", [])) . ($context["type"] ?? null)) . "/field") . $this->getAttribute($this->getAttribute(                // line 48
($context["config"] ?? null), "system", []), "param_sep", [])) . $this->getAttribute(($context["files"] ?? null), "name", [])) . "/path") . $this->getAttribute($this->getAttribute(                // line 49
($context["config"] ?? null), "system", []), "param_sep", [])) . base64_encode($this->getAttribute(($context["value"] ?? null), "path", []))), 1 => "admin-form", 2 => "admin-nonce"], "method")));
                // line 50
                echo "
        ";
                // line 51
                $context["file"] = twig_array_merge(($context["value"] ?? null), ["remove" => ($context["remove"] ?? null), "path" => ((($this->getAttribute(($context["value"] ?? null), "thumb_url", [], "any", true, true) &&  !(null === $this->getAttribute(($context["value"] ?? null), "thumb_url", [])))) ? ($this->getAttribute(($context["value"] ?? null), "thumb_url", [])) : (((($this->getAttribute(($context["uri"] ?? null), "rootUrl", []) == "/")) ? ("/") : ((($this->getAttribute(($context["uri"] ?? null), "rootUrl", []) . "/") . ($context["real_path"] ?? null))))))]);
                // line 52
                echo "        <div class=\"hidden\" data-file=\"";
                echo twig_escape_filter($this->env, twig_jsonencode_filter(($context["file"] ?? null)), "html_attr");
                echo "\"></div>
    ";
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

    public function getTemplateName()
    {
        return "forms/fields/file/file.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  403 => 52,  401 => 51,  398 => 50,  396 => 49,  395 => 48,  394 => 47,  393 => 46,  392 => 45,  391 => 44,  390 => 43,  389 => 41,  388 => 40,  385 => 39,  382 => 38,  379 => 37,  376 => 36,  373 => 35,  370 => 34,  368 => 33,  365 => 32,  363 => 31,  360 => 30,  357 => 29,  354 => 28,  351 => 27,  348 => 26,  345 => 25,  331 => 24,  315 => 21,  309 => 19,  303 => 17,  301 => 16,  296 => 15,  294 => 14,  289 => 13,  287 => 12,  282 => 11,  280 => 10,  277 => 9,  274 => 8,  271 => 7,  268 => 6,  265 => 5,  263 => 4,  251 => 3,  244 => 103,  239 => 102,  234 => 101,  229 => 100,  222 => 99,  218 => 98,  215 => 97,  212 => 96,  207 => 93,  202 => 66,  194 => 114,  189 => 111,  186 => 110,  177 => 108,  173 => 107,  169 => 105,  166 => 96,  163 => 94,  161 => 93,  157 => 91,  154 => 90,  147 => 89,  140 => 88,  135 => 86,  131 => 85,  127 => 84,  122 => 83,  120 => 82,  116 => 81,  112 => 80,  100 => 79,  97 => 78,  94 => 77,  91 => 76,  88 => 75,  85 => 74,  83 => 73,  80 => 72,  77 => 71,  74 => 70,  71 => 69,  68 => 68,  65 => 67,  63 => 66,  60 => 65,  57 => 64,  54 => 63,  51 => 62,  46 => 1,  44 => 60,  42 => 59,  40 => 58,  38 => 56,  32 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "forms/fields/file/file.html.twig", "/Users/mac/Desktop/IntengineWebsite/hola/user/plugins/admin/themes/grav/templates/forms/fields/file/file.html.twig");
    }
}
