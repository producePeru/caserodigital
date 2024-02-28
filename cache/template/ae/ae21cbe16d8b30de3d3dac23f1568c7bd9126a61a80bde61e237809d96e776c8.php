<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* Grocery/template/extension/module/slideshow.twig */
class __TwigTemplate_07362ad03426521ccb4d4d2fa74f41c239b071c7f9e3b925bf59ea8744c5294a extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<div class=\"top-slider\">
<div class=\"main-slider\">
<div id=\"spinner\"></div>
<div class=\"swiper-viewport\">
  <div id=\"slideshow";
        // line 5
        echo ($context["module"] ?? null);
        echo "\" class=\"swiper-container\" style=\"opacity: 1;\">
    <div class=\"swiper-wrapper\"> 
      ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["banners"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["banner"]) {
            // line 8
            echo "        <div class=\"swiper-slide text-center\">
          ";
            // line 9
            if (twig_get_attribute($this->env, $this->source, $context["banner"], "link", [], "any", false, false, false, 9)) {
                // line 10
                echo "          <a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["banner"], "link", [], "any", false, false, false, 10);
                echo "\">
            <img src=\"";
                // line 11
                echo twig_get_attribute($this->env, $this->source, $context["banner"], "image", [], "any", false, false, false, 11);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["banner"], "title", [], "any", false, false, false, 11);
                echo "\" class=\"img-responsive\" />
          </a>
          ";
            } else {
                // line 14
                echo "          <img src=\"";
                echo twig_get_attribute($this->env, $this->source, $context["banner"], "image", [], "any", false, false, false, 14);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["banner"], "title", [], "any", false, false, false, 14);
                echo "\" class=\"img-responsive\" />
          ";
            }
            // line 16
            echo "          ";
            // line 17
            echo "            
              <div class=\"slider-content\">
               <div class=\"main-carousel-content\">
                <div class=\"slider-details\">";
            // line 20
            echo twig_get_attribute($this->env, $this->source, $context["banner"], "title1", [], "any", false, false, false, 20);
            echo "</div>
                <div class=\"slider-title\">";
            // line 21
            echo twig_get_attribute($this->env, $this->source, $context["banner"], "title", [], "any", false, false, false, 21);
            echo "</div>
                <div class=\"slider-description\">";
            // line 22
            echo twig_get_attribute($this->env, $this->source, $context["banner"], "description", [], "any", false, false, false, 22);
            echo "</div>
                <div class=\"slider-buttons\">
                  <div class=\"slider-button\"> <a class=\"btn-primary\" href=\"";
            // line 24
            echo twig_get_attribute($this->env, $this->source, $context["banner"], "link", [], "any", false, false, false, 24);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["banner"], "button", [], "any", false, false, false, 24);
            echo "</a></div>
                </div>
              </div>
            </div>
          </div> 
       ";
            // line 30
            echo "      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['banner'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "      
       </div>
  </div>

  <div class=\"swiper-pagination slideshow";
        // line 35
        echo ($context["module"] ?? null);
        echo "\"></div>
  <div class=\"swiper-pager\">
    <div class=\"swiper-button-next\"></div>
    <div class=\"swiper-button-prev\"></div>
  </div>
</div>
</div>
</div>
<script>
\$(window).load(function() {\t\t
\$('#slideshow0').swiper({
\tmode: 'horizontal',
\tslidesPerView: 3,
\tpagination: false,//'.slideshow0',
  autoplay:true,
\tpaginationClickable: true,
\tnextButton: '.swiper-button-next',
  prevButton: '.swiper-button-prev',
  spaceBetween: 30,
\tautoplay: 5500,
  autoplayDisableOnInteraction: true,
\tloop: true,
  effect:'slide',

   breakpoints: {
    991: {
      slidesPerView: 2,
      spaceBetween:15
    },
    479: {
      slidesPerView: 1,
      spaceBetween: 10
    }
    }
});
\t});
</script>
<script>
\t// Can also be used with \$(document).ready()
\t\$(window).load(function() {\t\t
\t  \$(\"#spinner\").fadeOut(\"slow\");
\t});\t
</script>";
    }

    public function getTemplateName()
    {
        return "Grocery/template/extension/module/slideshow.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 35,  114 => 31,  108 => 30,  98 => 24,  93 => 22,  89 => 21,  85 => 20,  80 => 17,  78 => 16,  70 => 14,  62 => 11,  57 => 10,  55 => 9,  52 => 8,  48 => 7,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Grocery/template/extension/module/slideshow.twig", "");
    }
}
