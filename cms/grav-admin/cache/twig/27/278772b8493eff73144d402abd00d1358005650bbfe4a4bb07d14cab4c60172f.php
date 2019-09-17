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

/* editor2.html.twig */
class __TwigTemplate_5f319bf3e88b0285a53fb409bea0b5bb79d09e2264f1dabfcd4fd257ff32a003 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'footer' => [$this, 'block_footer'],
            'content' => [$this, 'block_content'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "default-admin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 3
        $context["scope"] = ((($context["scope"] ?? null)) ? (($context["scope"] ?? null)) : ("editor"));
        // line 4
        $context["service"] = ((($context["service"] ?? null)) ? (($context["service"] ?? null)) : ("renderer"));
        // line 5
        $context["context"] = ((($context["context"] ?? null)) ? (($context["context"] ?? null)) : ("no_context"));
        // line 7
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "plugin://admin-power-tools/assets/ajax_util.js"], "method");
        // line 8
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "plugin://admin-power-tools/assets/fullscreen_util.js"], "method");
        // line 10
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "plugin://editor/assets/editor.css"], "method");
        // line 13
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "plugin://editor/lib/codemirror/codemirror.css"], "method");
        // line 14
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "plugin://editor/lib/codemirror/codemirror.js"], "method");
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->env->getExtension('Grav\Plugin\ServiceTwigExtensions')->service_list("language"));
        foreach ($context['_seq'] as $context["_key"] => $context["service"]) {
            // line 18
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["service"], "dependencies", []));
            foreach ($context['_seq'] as $context["_key"] => $context["dep"]) {
                // line 19
                $this->getAttribute(($context["assets"] ?? null), "add", [0 => $context["dep"]], "method");
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dep'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['service'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "plugin://editor/assets/editor.js", 1 =>  -1000], "method");
        // line 66
        $context["pageToEdit"] = $this->getAttribute(($context["uri"] ?? null), "query", [0 => "target"], "method");
        // line 67
        $context["language"] = $this->getAttribute(($context["uri"] ?? null), "query", [0 => "language"], "method");
        // line 1
        $this->parent = $this->loadTemplate("default-admin.html.twig", "editor2.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 26
    public function block_stylesheets($context, array $blocks = [])
    {
        // line 27
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <style>
        #admin-main .admin-block {
            padding: 1em;
        }

        .editor {
            width: 100%;
            height: 100%;
            display: flex;
            flex-direction: column;
            padding: .75em;
        }

        .CodeMirror {
            flex: 1;
        }

        *:fullscreen .CodeMirror,
        *:-webkit-full-screen .CodeMirror,
        *:-moz-full-screen .CodeMirror,
        *:-ms-fullscreen .CodeMirror {
            padding: .5em;
        }

        *:-webkit-full-screen .CodeMirror {
            padding: .5em;
        }

        #fullscreen:fullscreen css-ta,
        #fullscreen:-webkit-full-screen css-ta,
        #fullscreen:-moz-full-screen css-ta {
            height: 100%;
            width: 100%;
        }

    </style>
";
    }

    // line 69
    public function block_footer($context, array $blocks = [])
    {
        // line 70
        echo "    ";
        $this->displayParentBlock("footer", $context, $blocks);
        echo "

    ";
        // line 73
        echo "    <script>
        let language = '";
        // line 74
        echo twig_escape_filter($this->env, ($context["language"] ?? null), "html", null, true);
        echo "';
        switch (language) {
            case 'twig':
                language = \"htmltwig\";
                break;
            case 'js':
                language = \"javascript\";
                break;
            case 'md':
                language = \"gfm\";
                break;
            case 'yaml':
                language = \"yacas\";
                break;
        }

        // codemirror
        CodeMirror.defineMode(\"htmltwig\", function (config, parserConfig) {
            return CodeMirror.overlayMode(CodeMirror.getMode(config, parserConfig.backdrop || \"text/html\"), CodeMirror.getMode(config, \"twig\"));
        });
        
        const ele = document.getElementById('css-ta');
        const editor = CodeMirror.fromTextArea(ele, {
            lineNumbers: false,
            mode: language
        });
        ele._editor = editor;
    </script>

    <script>
        function responseHandler(successMessage) {
            return (e) => {
                // console.log(e);
                switch (e.status) {
                    case 200:
                        _toast(successMessage || \"Success!\");
                        const res = JSON.parse(e.responseText);
                        if (res.error) {
                            alert(res.error);
                            return;
                        }
                        if (res.newTarget === null) {
                            // file was deleted. go to file list for language
                            let cur = window.location.href;
                            let index = cur.indexOf(\"/edit?\");
                            cur = cur.substring(0, index) + '/' + '";
        // line 119
        echo twig_escape_filter($this->env, ($context["language"] ?? null), "html", null, true);
        echo "';
                            window.location.href = cur;
                        }
                        else if (res.newTarget) {
                            let cur = window.location.href;
                            // Look-behind does not work on Safari or Firefox
                            // cur = cur.replace(/(?<=target=)[^&]+/, encodeURIComponent(res.newTarget));
                            cur = cur.replace(/(target=)([^&]+)/, \"target=\" + encodeURIComponent(res.newTarget));
                            window.location.href = cur;
                        }
                        return;

                    default:
                        alert(e.statusMessage || e.statusText);
                        return;
                }
            };
        }

        function _doDelete() {
            _post('action', {
                target: '";
        // line 140
        echo twig_escape_filter($this->env, ($context["pageToEdit"] ?? null), "html", null, true);
        echo "',
                op: 'delete'
            }, new responseHandler(`The file ";
        // line 142
        echo twig_escape_filter($this->env, ($context["pageToEdit"] ?? null), "html", null, true);
        echo " was deleted.`));
        }

        function _doRename() {
            _doInput({
                title: 'Rename File',
                subtitle: \"Rename file <strong>";
        // line 148
        echo twig_escape_filter($this->env, ($context["pageToEdit"] ?? null), "html", null, true);
        echo "</strong>.\",
                value: \"";
        // line 149
        echo twig_escape_filter($this->env, basename(($context["pageToEdit"] ?? null)), "html", null, true);
        echo "\",
                callback: function (value) {
                    _post('action', {
                        target: '";
        // line 152
        echo twig_escape_filter($this->env, ($context["pageToEdit"] ?? null), "html", null, true);
        echo "',
                        op: 'rename',
                        value: value
                    }, new responseHandler(`The file ";
        // line 155
        echo twig_escape_filter($this->env, ($context["pageToEdit"] ?? null), "html", null, true);
        echo " was renamed to '\${value}'.`));
                }
            });
        }

        function _doMove() {
            _doInput({
                title: 'Move File',
                subtitle: \"Move file <strong>";
        // line 163
        echo twig_escape_filter($this->env, ($context["pageToEdit"] ?? null), "html", null, true);
        echo "</strong>.\",
                value: \"";
        // line 164
        echo twig_escape_filter($this->env, ($context["pageToEdit"] ?? null), "html", null, true);
        echo "\",
                callback: function (value) {
                    _post('action', {
                        target: '";
        // line 167
        echo twig_escape_filter($this->env, ($context["pageToEdit"] ?? null), "html", null, true);
        echo "',
                        op: 'move',
                        value: value
                    }, new responseHandler(`The file ";
        // line 170
        echo twig_escape_filter($this->env, ($context["pageToEdit"] ?? null), "html", null, true);
        echo " was moved to '\${value}'.`));
                }
            });
        }

        function _doCopy() {
            _doInput({
                title: 'Copy File',
                subtitle: \"Copy file <strong>";
        // line 178
        echo twig_escape_filter($this->env, ($context["pageToEdit"] ?? null), "html", null, true);
        echo "</strong>.\",
                value: \"";
        // line 179
        echo twig_escape_filter($this->env, ($context["pageToEdit"] ?? null), "html", null, true);
        echo "\",
                callback: function (value) {
                    _post('action', {
                        target: '";
        // line 182
        echo twig_escape_filter($this->env, ($context["pageToEdit"] ?? null), "html", null, true);
        echo "',
                        op: 'copy',
                        value: value
                    }, new responseHandler(`The file ";
        // line 185
        echo twig_escape_filter($this->env, ($context["pageToEdit"] ?? null), "html", null, true);
        echo " was copied to '\${value}'.`));
                }
            });
        }

        function _doCreate() {
            _doInput({
                title: 'Create File',
                subtitle: \"Create file in directory <strong>";
        // line 193
        echo twig_escape_filter($this->env, dirname(($context["pageToEdit"] ?? null)), "html", null, true);
        echo "</strong>.\",
                value: \"";
        // line 194
        echo twig_escape_filter($this->env, dirname(($context["pageToEdit"] ?? null)), "html", null, true);
        echo "/new_file.";
        echo twig_escape_filter($this->env, $this->getAttribute(pathinfo(($context["pageToEdit"] ?? null)), "extension", [], "array"), "html", null, true);
        echo "\",
                callback: function (value) {
                    _post('action', {
                        target: value,
                        op: 'create',
                        value: value
                    }, new responseHandler(`The file ";
        // line 200
        echo twig_escape_filter($this->env, ($context["pageToEdit"] ?? null), "html", null, true);
        echo " was copied to '\${value}'.`));
                }
            });
        }

        function _doSave() {
            const ele = document.getElementById('css-ta');
            let value = ele._editor.getValue();

            _post('action', {
                target: '";
        // line 210
        echo twig_escape_filter($this->env, ($context["pageToEdit"] ?? null), "html", null, true);
        echo "',
                op: 'save',
                value: value
            }, new responseHandler('The file ";
        // line 213
        echo twig_escape_filter($this->env, ($context["pageToEdit"] ?? null), "html", null, true);
        echo " was saved.'));
        }
    </script>

    ";
        // line 217
        $this->loadTemplate("modal/confirm.html.twig", "editor2.html.twig", 217)->display(twig_array_merge($context, ["message" => (("Delete the file located at <strong>" . ($context["pageToEdit"] ?? null)) . "</strong>?")]));
        // line 218
        echo "    ";
        $this->loadTemplate("modal/input.html.twig", "editor2.html.twig", 218)->display($context);
        // line 219
        echo "
";
    }

    // line 222
    public function block_content($context, array $blocks = [])
    {
        // line 223
        echo "    ";
        $this->displayParentBlock("content", $context, $blocks);
        echo "
    <div class='editor'>
        <div class='editor-edit-header'>Editing <strong>";
        // line 225
        echo twig_escape_filter($this->env, ($context["pageToEdit"] ?? null), "html", null, true);
        echo "</strong></div>
        ";
        // line 226
        $this->loadTemplate("fullscreen-menu.html.twig", "editor2.html.twig", 226)->display(twig_array_merge($context, ["targetSelector" => ".editor", "scope" => "editor"]));
        // line 227
        echo "        <textarea id='css-ta' style='height:12em; flex:1'>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\CssEditorTwigExtensions')->get_file_contents(($context["pageToEdit"] ?? null)), "html", null, true);
        echo "</textarea>
    </div>
";
    }

    // line 232
    public function block_body($context, array $blocks = [])
    {
        // line 233
        echo "    <div class=\"editor-wrapper\">
        ";
        // line 234
        $this->displayParentBlock("body", $context, $blocks);
        echo "
    </div>
";
    }

    public function getTemplateName()
    {
        return "editor2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  388 => 234,  385 => 233,  382 => 232,  374 => 227,  372 => 226,  368 => 225,  362 => 223,  359 => 222,  354 => 219,  351 => 218,  349 => 217,  342 => 213,  336 => 210,  323 => 200,  312 => 194,  308 => 193,  297 => 185,  291 => 182,  285 => 179,  281 => 178,  270 => 170,  264 => 167,  258 => 164,  254 => 163,  243 => 155,  237 => 152,  231 => 149,  227 => 148,  218 => 142,  213 => 140,  189 => 119,  141 => 74,  138 => 73,  132 => 70,  129 => 69,  86 => 27,  83 => 26,  78 => 1,  76 => 67,  74 => 66,  72 => 23,  62 => 19,  58 => 18,  54 => 17,  52 => 14,  50 => 13,  48 => 10,  46 => 8,  44 => 7,  42 => 5,  40 => 4,  38 => 3,  32 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'default-admin.html.twig' %}

{% set scope = scope ? scope : 'editor' %}
{% set service = service ? service : 'renderer' %}
{% set context = context ? context : \"no_context\" %}

{% do assets.addJs('plugin://admin-power-tools/assets/ajax_util.js') %}
{% do assets.addJs('plugin://admin-power-tools/assets/fullscreen_util.js') %}

{% do assets.addCss('plugin://editor/assets/editor.css') %}

{#CodeMirror#}
{% do assets.addCss('plugin://editor/lib/codemirror/codemirror.css') %}
{% do assets.addJs('plugin://editor/lib/codemirror/codemirror.js') %}

{#CodeMirror modes#}
{% for service in service_list('language') %}
    {% for dep in service.dependencies %}
        {% do assets.add(dep) %}
    {% endfor %}
{% endfor %}

{% do assets.addJs('plugin://editor/assets/editor.js', -1000) %}


{% block stylesheets %}
    {{ parent() }}
    <style>
        #admin-main .admin-block {
            padding: 1em;
        }

        .editor {
            width: 100%;
            height: 100%;
            display: flex;
            flex-direction: column;
            padding: .75em;
        }

        .CodeMirror {
            flex: 1;
        }

        *:fullscreen .CodeMirror,
        *:-webkit-full-screen .CodeMirror,
        *:-moz-full-screen .CodeMirror,
        *:-ms-fullscreen .CodeMirror {
            padding: .5em;
        }

        *:-webkit-full-screen .CodeMirror {
            padding: .5em;
        }

        #fullscreen:fullscreen css-ta,
        #fullscreen:-webkit-full-screen css-ta,
        #fullscreen:-moz-full-screen css-ta {
            height: 100%;
            width: 100%;
        }

    </style>
{% endblock %}

{% set pageToEdit = uri.query('target') %}
{% set language = uri.query('language') %}

{% block footer %}
    {{ parent() }}

    {# make sure text area has rendered first #}
    <script>
        let language = '{{ language }}';
        switch (language) {
            case 'twig':
                language = \"htmltwig\";
                break;
            case 'js':
                language = \"javascript\";
                break;
            case 'md':
                language = \"gfm\";
                break;
            case 'yaml':
                language = \"yacas\";
                break;
        }

        // codemirror
        CodeMirror.defineMode(\"htmltwig\", function (config, parserConfig) {
            return CodeMirror.overlayMode(CodeMirror.getMode(config, parserConfig.backdrop || \"text/html\"), CodeMirror.getMode(config, \"twig\"));
        });
        
        const ele = document.getElementById('css-ta');
        const editor = CodeMirror.fromTextArea(ele, {
            lineNumbers: false,
            mode: language
        });
        ele._editor = editor;
    </script>

    <script>
        function responseHandler(successMessage) {
            return (e) => {
                // console.log(e);
                switch (e.status) {
                    case 200:
                        _toast(successMessage || \"Success!\");
                        const res = JSON.parse(e.responseText);
                        if (res.error) {
                            alert(res.error);
                            return;
                        }
                        if (res.newTarget === null) {
                            // file was deleted. go to file list for language
                            let cur = window.location.href;
                            let index = cur.indexOf(\"/edit?\");
                            cur = cur.substring(0, index) + '/' + '{{ language }}';
                            window.location.href = cur;
                        }
                        else if (res.newTarget) {
                            let cur = window.location.href;
                            // Look-behind does not work on Safari or Firefox
                            // cur = cur.replace(/(?<=target=)[^&]+/, encodeURIComponent(res.newTarget));
                            cur = cur.replace(/(target=)([^&]+)/, \"target=\" + encodeURIComponent(res.newTarget));
                            window.location.href = cur;
                        }
                        return;

                    default:
                        alert(e.statusMessage || e.statusText);
                        return;
                }
            };
        }

        function _doDelete() {
            _post('action', {
                target: '{{ pageToEdit }}',
                op: 'delete'
            }, new responseHandler(`The file {{ pageToEdit }} was deleted.`));
        }

        function _doRename() {
            _doInput({
                title: 'Rename File',
                subtitle: \"Rename file <strong>{{ pageToEdit }}</strong>.\",
                value: \"{{ pageToEdit | basename }}\",
                callback: function (value) {
                    _post('action', {
                        target: '{{ pageToEdit }}',
                        op: 'rename',
                        value: value
                    }, new responseHandler(`The file {{ pageToEdit }} was renamed to '\${value}'.`));
                }
            });
        }

        function _doMove() {
            _doInput({
                title: 'Move File',
                subtitle: \"Move file <strong>{{ pageToEdit }}</strong>.\",
                value: \"{{ pageToEdit }}\",
                callback: function (value) {
                    _post('action', {
                        target: '{{ pageToEdit }}',
                        op: 'move',
                        value: value
                    }, new responseHandler(`The file {{ pageToEdit }} was moved to '\${value}'.`));
                }
            });
        }

        function _doCopy() {
            _doInput({
                title: 'Copy File',
                subtitle: \"Copy file <strong>{{ pageToEdit }}</strong>.\",
                value: \"{{ pageToEdit }}\",
                callback: function (value) {
                    _post('action', {
                        target: '{{ pageToEdit }}',
                        op: 'copy',
                        value: value
                    }, new responseHandler(`The file {{ pageToEdit }} was copied to '\${value}'.`));
                }
            });
        }

        function _doCreate() {
            _doInput({
                title: 'Create File',
                subtitle: \"Create file in directory <strong>{{ pageToEdit|dirname }}</strong>.\",
                value: \"{{ pageToEdit|dirname }}/new_file.{{ pathinfo(pageToEdit)['extension'] }}\",
                callback: function (value) {
                    _post('action', {
                        target: value,
                        op: 'create',
                        value: value
                    }, new responseHandler(`The file {{ pageToEdit }} was copied to '\${value}'.`));
                }
            });
        }

        function _doSave() {
            const ele = document.getElementById('css-ta');
            let value = ele._editor.getValue();

            _post('action', {
                target: '{{ pageToEdit }}',
                op: 'save',
                value: value
            }, new responseHandler('The file {{ pageToEdit }} was saved.'));
        }
    </script>

    {% include 'modal/confirm.html.twig' with {message:\"Delete the file located at <strong>#{pageToEdit}</strong>?\"} %}
    {% include 'modal/input.html.twig' %}

{% endblock %}

{% block content %}
    {{ parent() }}
    <div class='editor'>
        <div class='editor-edit-header'>Editing <strong>{{ pageToEdit }}</strong></div>
        {% include 'fullscreen-menu.html.twig' with {'targetSelector':'.editor', 'scope':'editor'} %}
        <textarea id='css-ta' style='height:12em; flex:1'>{{ get_file_contents(pageToEdit) }}</textarea>
    </div>
{% endblock %}


{% block body %}
    <div class=\"editor-wrapper\">
        {{ parent() }}
    </div>
{% endblock %}", "editor2.html.twig", "/Users/mac/Desktop/IntengineWebsite/cms/grav-admin/user/plugins/editor/admin/templates/editor2.html.twig");
    }
}
