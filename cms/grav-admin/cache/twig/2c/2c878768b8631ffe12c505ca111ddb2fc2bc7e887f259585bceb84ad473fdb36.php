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

/* @particles/smoothscroll.html.twig */
class __TwigTemplate_294e1c6526d35714f999f05d04396c93cb054523c45f536abcb6056d97906062 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'javascript' => [$this, 'block_javascript'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@nucleus/partials/particle.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("@nucleus/partials/particle.html.twig", "@particles/smoothscroll.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_javascript($context, array $blocks = [])
    {
        // line 4
        echo "
<script>
jQuery(document).ready(function(){
  jQuery('a[href^=\"#\"]').on('click',function (e) {
      e.preventDefault();

      var target = this.hash;
      var ID = jQuery(this).attr(\"id\") ;

      if (ID != \"g-totop\") {
        if (!target) {target=\".site\";}
        var \$target = jQuery(target);
        jQuery('html, body').stop().animate({
          'scrollTop': \$target.offset().top
          }, ";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "duration", []), "html", null, true);
        echo ", '";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "easing", []), "html", null, true);
        echo "', function () {if (target!=\".site\") {window.location.hash = target;}
      });}
  });
});
</script>
";
    }

    public function getTemplateName()
    {
        return "@particles/smoothscroll.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 18,  42 => 4,  39 => 3,  29 => 1,);
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

{% block javascript %}

<script>
jQuery(document).ready(function(){
  jQuery('a[href^=\"#\"]').on('click',function (e) {
      e.preventDefault();

      var target = this.hash;
      var ID = jQuery(this).attr(\"id\") ;

      if (ID != \"g-totop\") {
        if (!target) {target=\".site\";}
        var \$target = jQuery(target);
        jQuery('html, body').stop().animate({
          'scrollTop': \$target.offset().top
          }, {{ particle.duration }}, '{{ particle.easing }}', function () {if (target!=\".site\") {window.location.hash = target;}
      });}
  });
});
</script>
{% endblock %}
", "@particles/smoothscroll.html.twig", "/Users/sylwesterpilarz/Desktop/prgm/IntengineWebsite/cms/grav-admin/user/data/gantry5/themes/g5_helium/particles/smoothscroll.html.twig");
    }
}
