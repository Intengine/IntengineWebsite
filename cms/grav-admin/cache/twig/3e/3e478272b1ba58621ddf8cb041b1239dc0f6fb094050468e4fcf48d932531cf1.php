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

/* @particles/jlvideobackground.html.twig */
class __TwigTemplate_2aa90dd7d8c9554cfe005652fb39b11012ff0e17ac646255aa971ec6bae653d3 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
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
        $this->parent = $this->loadTemplate("@nucleus/partials/particle.html.twig", "@particles/jlvideobackground.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_stylesheets($context, array $blocks = [])
    {
        // line 4
        echo "  <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc("gantry-theme://css/jquery.mb.YTPlayer.min.css"), "html", null, true);
        echo "\" type=\"text/css\"/>
";
    }

    // line 7
    public function block_javascript_footer($context, array $blocks = [])
    {
        // line 8
        $this->getAttribute(($context["gantry"] ?? null), "load", [0 => "jquery"], "method");
        // line 9
        echo "  <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc("gantry-theme://js/jquery.mb.YTPlayer.min.js"), "html", null, true);
        echo "\"></script>
  <script>
      jQuery(function(\$) {
          ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["particle"] ?? null), "items", []));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 13
            echo "          ";
            if (preg_match("/^[-+]?[0-9]*\\.?[0-9]+\$/", $this->getAttribute($context["item"], "opacity", []))) {
                // line 14
                echo "              ";
                $context["opacity"] = $this->getAttribute($context["item"], "opacity", []);
                // line 15
                echo "          ";
            } else {
                // line 16
                echo "              ";
                $context["opacity"] = 1;
                // line 17
                echo "          ";
            }
            // line 18
            echo "              var data = \"{videoURL: '";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "url", []), "html", null, true);
            echo "',addRaster:true,containment:'#";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "element", []), "html", null, true);
            echo "',startAt: ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "start", []), "html", null, true);
            echo ",vol: ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "vol", []), "html", null, true);
            echo ", mute: ";
            echo ((($this->getAttribute($context["item"], "vol", []) == 0)) ? ("true") : ("false"));
            echo ", addRaster: ";
            echo ((($this->getAttribute($context["item"], "addraster", []) == 1)) ? ("true") : ("false"));
            echo ", showControls: ";
            echo (($this->getAttribute($context["item"], "controls", [])) ? ("true") : ("false"));
            echo ", autoPlay: ";
            echo (($this->getAttribute($context["item"], "autoplay", [])) ? ("true") : ("false"));
            echo ", loop: ";
            ((($this->getAttribute($context["item"], "loop", []) == 0)) ? (print ("false")) : (print (twig_escape_filter($this->env, $this->getAttribute($context["item"], "loop", []), "html", null, true))));
            echo ", showYTLogo: ";
            echo (($this->getAttribute($context["item"], "logo", [])) ? ("true") : ("false"));
            echo ", stopMovieOnBlur: ";
            echo (($this->getAttribute($context["item"], "stopvideo", [])) ? ("true") : ("false"));
            echo ", quality: '";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "quality", []), "html", null, true);
            echo "', ratio: '";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "ratio", []), "html", null, true);
            echo "', opacity: '";
            echo twig_escape_filter($this->env, ($context["opacity"] ?? null), "html", null, true);
            echo "'}\";
              var \$div = \$('<div />').appendTo('body');
              \$div.attr('id', 'jl-background-container');
              \$div.attr('data-property',data);
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "          \$(\"#jl-background-container\").YTPlayer();
      });
  </script>
";
    }

    public function getTemplateName()
    {
        return "@particles/jlvideobackground.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 23,  81 => 18,  78 => 17,  75 => 16,  72 => 15,  69 => 14,  66 => 13,  62 => 12,  55 => 9,  53 => 8,  50 => 7,  43 => 4,  40 => 3,  30 => 1,);
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
  <link rel=\"stylesheet\" href=\"{{ url('gantry-theme://css/jquery.mb.YTPlayer.min.css') }}\" type=\"text/css\"/>
{% endblock %}

{% block javascript_footer %}
{% do gantry.load('jquery') %}
  <script src=\"{{ url('gantry-theme://js/jquery.mb.YTPlayer.min.js') }}\"></script>
  <script>
      jQuery(function(\$) {
          {% for item in particle.items %}
          {% if item.opacity matches '/^[-+]?[0-9]*\\\\.?[0-9]+\$/' %}
              {% set opacity = item.opacity %}
          {% else %}
              {% set opacity = 1 %}
          {% endif %}
              var data = \"{videoURL: '{{item.url}}',addRaster:true,containment:'#{{item.element}}',startAt: {{item.start}},vol: {{item.vol }}, mute: {{item.vol == 0 ? 'true' : 'false'}}, addRaster: {{item.addraster == 1 ? 'true' : 'false'}}, showControls: {{item.controls  ? 'true' : 'false'}}, autoPlay: {{item.autoplay ? 'true' : 'false'}}, loop: {{item.loop == 0 ? 'false' : item.loop}}, showYTLogo: {{item.logo ? 'true' : 'false'}}, stopMovieOnBlur: {{item.stopvideo ? 'true' : 'false'}}, quality: '{{item.quality}}', ratio: '{{item.ratio}}', opacity: '{{opacity}}'}\";
              var \$div = \$('<div />').appendTo('body');
              \$div.attr('id', 'jl-background-container');
              \$div.attr('data-property',data);
          {% endfor %}
          \$(\"#jl-background-container\").YTPlayer();
      });
  </script>
{% endblock %}
", "@particles/jlvideobackground.html.twig", "/Users/sylwesterpilarz/Desktop/IntengineWebsite/cms/grav-admin/user/data/gantry5/themes/g5_helium/particles/jlvideobackground.html.twig");
    }
}
