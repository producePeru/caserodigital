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

/* Grocery/template/extension/module/blogger.twig */
class __TwigTemplate_a393c5e5ed1d91c8738ae9c103678d206efdc2abe83f34c9023cd420bc2b613e extends \Twig\Template
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
        echo "<div class=\"box webdigifyblog bottom-to-top hb-animate-element\">
<div class=\"container\">
\t<div class=\"row\">
\t<div class=\"blog-wrapper\">
\t";
        // line 5
        $context["sliderFor"] = 3;
        // line 6
        echo "\t";
        $context["blogCount"] = twig_length_filter($this->env, ($context["blogs"] ?? null));
        // line 7
        echo "\t<div class=\"title-wrapper\">
\t\t<div class=\"box-heading\">";
        // line 8
        echo ($context["heading_title"] ?? null);
        echo "</div>
\t</div>
 ";
        // line 10
        if ((($context["blogCount"] ?? null) >= ($context["sliderFor"] ?? null))) {
            // line 11
            echo " <div class=\"customNavigation\">
\t <a class=\"fa prev wdblog_prev fa-arrow-left\">&nbsp;</a>
\t <a class=\"fa next wdblog_next fa-arrow-right\">&nbsp;</a>
 </div>\t
";
        }
        // line 16
        echo "  <div class=\"box-content\">
    <div class=\"box-product ";
        // line 17
        if ((($context["blogCount"] ?? null) >= ($context["sliderFor"] ?? null))) {
            echo "owl-carousel blogcarousel ";
        } else {
            echo "productbox-grid";
        }
        echo "\" id=\"";
        if ((($context["blogCount"] ?? null) >= ($context["sliderFor"] ?? null))) {
            echo "blog-carousel";
        } else {
            echo "blog-grid";
        }
        echo "\">
    ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["blogs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["blog"]) {
            echo " 
    <div class=\"";
            // line 19
            if ((($context["blogCount"] ?? null) >= ($context["sliderFor"] ?? null))) {
                echo "blog-item";
            } else {
                echo " product-items";
            }
            echo "\">
\t<div class=\"product-block\">
     ";
            // line 21
            if (twig_get_attribute($this->env, $this->source, $context["blog"], "image", [], "any", false, false, false, 21)) {
                echo " 
\t  <div class=\"blog-left\">
\t  <div class=\"blog-image\">
\t  <img src=\"";
                // line 24
                echo twig_get_attribute($this->env, $this->source, $context["blog"], "image", [], "any", false, false, false, 24);
                echo "\" alt=\"";
                echo ($context["heading_title"] ?? null);
                echo "\" title=\"";
                echo ($context["heading_title"] ?? null);
                echo "\" class=\"img-thumbnail\" />
\t  <div class=\"post-image-hover\"> </div>
\t<span class=\"post_hover\">
\t\t<div class=\"full-img offer-btn\"><a class=\"icon zoom\" title=\"Click to view Full Image \" href=\"";
                // line 27
                echo twig_get_attribute($this->env, $this->source, $context["blog"], "image", [], "any", false, false, false, 27);
                echo "\" data-lightbox=\"example-set\"><i class=\"fa fa-search-plus\"></i> </a></div>
\t\t<div class=\"read_more offer-btn\"><a class=\"icon readmore_link\" title=\"Click to view Read More \" href=\"";
                // line 28
                echo twig_get_attribute($this->env, $this->source, $context["blog"], "href", [], "any", false, false, false, 28);
                echo "\"><i class=\"fa fa-link\"></i></a></div>
\t</span>


\t  </div>
\t   <div class=\"blog-right\"> 
\t   ";
                // line 37
                echo "\t   <div class=\"view-blog\">
\t\t<div class=\"date-time\"> <i class=\"fa fa-calendar\"></i>  ";
                // line 38
                echo twig_get_attribute($this->env, $this->source, $context["blog"], "date_added", [], "any", false, false, false, 38);
                echo "</div>
\t\t<h4><a href=\"";
                // line 39
                echo twig_get_attribute($this->env, $this->source, $context["blog"], "href", [], "any", false, false, false, 39);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["blog"], "title", [], "any", false, false, false, 39);
                echo "</a> </h4>
\t\t<div class=\"blog-desc\"> ";
                // line 40
                echo twig_get_attribute($this->env, $this->source, $context["blog"], "description", [], "any", false, false, false, 40);
                echo "  </div>
\t   <div class=\"read-more\"> <a href=\"";
                // line 41
                echo twig_get_attribute($this->env, $this->source, $context["blog"], "href", [], "any", false, false, false, 41);
                echo "\"> <i class=\"fa fa-link\"></i> ";
                echo ($context["text_read_more"] ?? null);
                echo "</a> </div>
\t  </div>
     
\t </div>
\t  </div>
\t ";
            }
            // line 46
            echo " \t
\t 
    </div>
\t</div>
     ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['blog'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo " \t 
   
  </div>
  ";
        // line 56
        echo "\t<span class=\"blog_default_width\" style=\"display:none; visibility:hidden\"></span>
  </div>
 </div>

 </div>
  </div>
 </div>
<script type=\"text/javascript\">

\$(document).ready(function(){
\$('.blogcarousel').owlCarousel({
\t\titems: 4,
\t\tautoPlay: false,
\t\tsingleItem: false,
\t\tnavigation: false,
\t\tnavigationText: ['<i class=\"fa fa-chevron-left fa-5x\"></i>', '<i class=\"fa fa-chevron-right fa-5x\"></i>'],
\t\tpagination: false,
\t\titemsDesktop : [1199,3],
\t\titemsDesktopSmall:[991,2],
\t\titemsTablet :\t[480,1]
\t});

\t// Custom Navigation Events
\t\$(\".wdblog_next\").click(function(){
\t\t\$('.blogcarousel').trigger('owl.next');
\t})
\t\$(\".wdblog_prev\").click(function(){
\t\t\$('.blogcarousel').trigger('owl.prev');
\t});
});\t
</script>";
    }

    public function getTemplateName()
    {
        return "Grocery/template/extension/module/blogger.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  169 => 56,  164 => 50,  154 => 46,  143 => 41,  139 => 40,  133 => 39,  129 => 38,  126 => 37,  117 => 28,  113 => 27,  103 => 24,  97 => 21,  88 => 19,  82 => 18,  68 => 17,  65 => 16,  58 => 11,  56 => 10,  51 => 8,  48 => 7,  45 => 6,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Grocery/template/extension/module/blogger.twig", "");
    }
}
