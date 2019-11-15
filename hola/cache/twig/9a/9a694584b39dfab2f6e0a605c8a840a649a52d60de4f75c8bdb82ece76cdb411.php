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

/* modular/works.html.twig */
class __TwigTemplate_ff037e1d937154e81f3e8f7a6b57ecb913a6c4612d83bdc05604df8b79f3c8f7 extends \Twig\Template
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
        echo "<section id=\"";
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "redirect", [])) {
            echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "redirect", []);
        } else {
            echo twig_lower_filter($this->env, $this->getAttribute(($context["page"] ?? null), "menu", []));
        }
        echo "\"
         class=\"s-works ";
        // line 2
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "sectionBackground", []);
        echo " target-section\">

    <div class=\"row narrow section-intro has-bottom-sep\">
        <div class=\"col-full\">
            <h3>";
        // line 6
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "smallTitle", []);
        echo "</h3>
            <h1>";
        // line 7
        echo $this->getAttribute(($context["page"] ?? null), "title", []);
        echo ".</h1>

            <p class=\"lead\">";
        // line 9
        echo strip_tags($this->getAttribute(($context["page"] ?? null), "content", []));
        echo "</p>
        </div>
    </div>

    <div class=\"row masonry-wrap\">
        <div class=\"masonry\">

            ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "portfolio", []));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 17
            echo "
                <div class=\"masonry__brick\">
                    <div class=\"item-folio\">

                        <div class=\"gallery-wrapper\">
                            <div class=\"item-folio__thumb\">
                                <a href=\"";
            // line 23
            echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), $this->getAttribute($context["item"], "image", []), [], "array"), "url", [], "method");
            echo "\" class=\"thumb-link\" title=\"The Beetle Car\" data-size=\"1050x700\">
                                    <img src=\"";
            // line 24
            echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), $this->getAttribute($context["item"], "image", []), [], "array"), "url", []);
            echo "\"
                                         srcset=\"";
            // line 25
            echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), $this->getAttribute($context["item"], "imageSize1", []), [], "array"), "url", []);
            echo " 1x, ";
            echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), $this->getAttribute($context["item"], "imageSize2", []), [], "array"), "url", []);
            echo " 2x\" alt=\"\">
                                    <span class=\"shadow-overlay\"></span>
                                </a>
                            </div>

                            <div class=\"item-folio__text\">
                                <h3 class=\"item-folio__title\">
                                    ";
            // line 32
            echo $this->getAttribute($context["item"], "title", []);
            echo "
                                </h3>
                                <p class=\"item-folio__cat\">
                                    ";
            // line 35
            echo $this->getAttribute($context["item"], "category", []);
            echo "
                                </p>
                            </div>

                            <div class=\"item-folio__caption\">
                                <p>";
            // line 40
            echo $this->getAttribute($context["item"], "description", []);
            echo "</p>
                            </div>
                        </div>

                        <a href=\"";
            // line 44
            echo $this->getAttribute($context["item"], "link", []);
            echo "\" target=\"_blank\" class=\"item-folio__project-link\" title=\"Project link\">
                            <i class=\"fa fa-link\"></i>
                        </a>

                    </div> <!-- end item-folio -->
                </div> <!-- end masonry__brick -->

            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "
        </div>
    </div> <!-- end masonry -->

</section> <!-- end works -->

<div aria-hidden=\"true\" class=\"pswp\" role=\"dialog\" tabindex=\"-1\">

    <div class=\"pswp__bg\"></div>
    <div class=\"pswp__scroll-wrap\">

        <div class=\"pswp__container\">
            <div class=\"pswp__item\"></div>
            <div class=\"pswp__item\"></div>
            <div class=\"pswp__item\"></div>
        </div>

        <div class=\"pswp__ui pswp__ui--hidden\">
            <div class=\"pswp__top-bar\">
                <div class=\"pswp__counter\"></div>
                <button class=\"pswp__button pswp__button--close\" title=\"Close (Esc)\"></button>
                <button class=\"pswp__button pswp__button--share\" title=\"Share\"></button>
                <button class=\"pswp__button pswp__button--fs\" title=\"Toggle fullscreen\"></button>
                <button class=\"pswp__button pswp__button--zoom\" title=\"Zoom in/out\"></button>
                <div class=\"pswp__preloader\">
                    <div class=\"pswp__preloader__icn\">
                        <div class=\"pswp__preloader__cut\">
                            <div class=\"pswp__preloader__donut\"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"pswp__share-modal pswp__share-modal--hidden pswp__single-tap\">
                <div class=\"pswp__share-tooltip\"></div>
            </div>
            <button class=\"pswp__button pswp__button--arrow--left\" title=\"Previous (arrow left)\"></button>
            <button class=\"pswp__button pswp__button--arrow--right\" title=\"Next (arrow right)\"></button>
            <div class=\"pswp__caption\">
                <div class=\"pswp__caption__center\"></div>
            </div>
        </div>

    </div>

</div> <!-- end photoSwipe background -->

<div id=\"preloader\">
    <div id=\"loader\"></div>
</div>
";
    }

    public function getTemplateName()
    {
        return "modular/works.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 52,  118 => 44,  111 => 40,  103 => 35,  97 => 32,  85 => 25,  81 => 24,  77 => 23,  69 => 17,  65 => 16,  55 => 9,  50 => 7,  46 => 6,  39 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "modular/works.html.twig", "/Users/sylwesterpilarz/Desktop/prgm/IntengineWebsite/hola/user/themes/hola/templates/modular/works.html.twig");
    }
}
