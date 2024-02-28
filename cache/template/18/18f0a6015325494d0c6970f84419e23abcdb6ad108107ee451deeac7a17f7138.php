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

/* Grocery/template/extension/module/special.twig */
class __TwigTemplate_781bd4ed4fd637058bd4cc2eecb0a0422b89d3b91d94ef657147446536171921 extends \Twig\Template
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
        echo "\t<div class=\"box special bottom-to-top hb-animate-element\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"product-wrapper\">
\t\t\t\t\t<div class=\"title-wrapper\">
\t\t\t\t\t\t<div class=\"box-heading\">";
        // line 6
        echo ($context["heading_title"] ?? null);
        echo "</div>
\t\t\t\t\t</div>

  <div class=\"box-content\">
\t<div class=\"special-inner\">
\t\t";
        // line 11
        $context["sliderFor"] = 7;
        // line 12
        echo "\t\t";
        $context["productCount"] = twig_length_filter($this->env, ($context["products"] ?? null));
        // line 13
        echo "\t";
        if ((($context["productCount"] ?? null) >= ($context["sliderFor"] ?? null))) {
            // line 14
            echo "\t\t<div class=\"customNavigation\">
\t\t\t<a class=\"fa prev wdspecial_prev fa-arrow-left\">&nbsp;</a>
\t\t\t<a class=\"fa next wdspecial_next fa-arrow-right\">&nbsp;</a>
\t\t</div>\t
\t";
        }
        // line 19
        echo "\t
\t<div class=\"box-product ";
        // line 20
        if ((($context["productCount"] ?? null) >= ($context["sliderFor"] ?? null))) {
            echo "owl-carousel specialcarousel";
        } else {
            echo " productbox-grid";
        }
        echo "\" id=\"";
        if ((($context["productCount"] ?? null) >= ($context["sliderFor"] ?? null))) {
            echo "special-carousel";
        } else {
            echo "special-grid";
        }
        echo "\">
  ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 22
            echo "
  <div class=\"";
            // line 23
            if ((($context["productCount"] ?? null) >= ($context["sliderFor"] ?? null))) {
                echo "slider-item";
            } else {
                echo "product-items";
            }
            echo "\">
    <div class=\"product-block product-thumb transition\">
\t  <div class=\"product-block-inner\">\t 
\t\t\t<div class=\"countdown-images\">
\t\t\t\t<div class=\"image ";
            // line 27
            if ((twig_get_attribute($this->env, $this->source, $context["product"], "qty", [], "any", false, false, false, 27) == 0)) {
                echo "outstock";
            }
            echo " special-image\">
\t\t\t\t\t";
            // line 28
            if (twig_get_attribute($this->env, $this->source, $context["product"], "thumb_swap", [], "any", false, false, false, 28)) {
                // line 29
                echo "\t\t\t\t\t\t<a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 29);
                echo "\">
\t\t\t\t\t\t\t<img src=\"";
                // line 30
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 30);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 30);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 30);
                echo "\" class=\"img-responsive reg-image\"/>
\t\t\t\t\t\t\t<div class=\"image_content\">
\t\t\t\t\t\t\t\t<img class=\"img-responsive hover-image\" src=\"";
                // line 32
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb_swap", [], "any", false, false, false, 32);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 32);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 32);
                echo "\"/>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</a>
\t\t\t\t\t";
            } else {
                // line 36
                echo "\t\t\t\t\t\t<a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 36);
                echo "\">
\t\t\t\t\t\t<img src=\"";
                // line 37
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 37);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 37);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 37);
                echo "\" class=\"img-responsive\"/></a>
\t\t\t\t\t";
            }
            // line 39
            echo "\t\t\t\t\t
\t\t\t\t\t";
            // line 40
            if (twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 40)) {
                // line 41
                echo "\t\t\t\t\t\t<span class=\"special-tag\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "percentsaving", [], "any", false, false, false, 41);
                echo "%</span>
\t\t\t\t\t";
            }
            // line 43
            echo "
\t\t\t\t\t<div class=\"product_hover_block\">
\t\t\t\t\t\t<div class=\"wishlist-button offer-btn\">
\t\t\t\t\t\t\t<button class=\"wishlist\" type=\"button\"  title=\"";
            // line 46
            echo ($context["button_wishlist"] ?? null);
            echo " \" onclick=\"wishlist.add('";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 46);
            echo " ');\"></button>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"compare-button offer-btn\">
\t\t\t\t\t\t\t<button class=\"compare_button\" type=\"button\"  title=\"";
            // line 49
            echo ($context["button_compare"] ?? null);
            echo " \" onclick=\"compare.add('";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 49);
            echo " ');\">";
            echo ($context["button_compare"] ?? null);
            echo "</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"quickview-button offer-btn\">
\t\t\t\t\t\t\t<a class=\"quickbox\"  title=\"";
            // line 52
            echo ($context["button_quickview"] ?? null);
            echo "\" href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "quick", [], "any", false, false, false, 52);
            echo "\">";
            echo ($context["button_quickview"] ?? null);
            echo "</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"countdown\">
\t\t\t\t\t\t";
            // line 56
            if (twig_get_attribute($this->env, $this->source, $context["product"], "specialTime", [], "any", false, false, false, 56)) {
                // line 57
                echo "\t\t\t\t\t\t\t<div class=\"count-down clock\">
\t\t\t\t\t\t<div data-countdown=\"";
                // line 58
                echo twig_get_attribute($this->env, $this->source, $context["product"], "specialTime", [], "any", false, false, false, 58);
                echo "\" class=\"countbox hastime\"></div>
\t\t\t\t\t\t</div>\t
\t\t\t\t\t\t";
            }
            // line 61
            echo "\t\t\t\t\t</div>\t
\t\t\t\t</div>
\t\t\t\t
\t\t\t</div>
\t\t\t<div class=\"product-details\">
\t\t\t\t<div class=\"caption\">
\t\t\t\t\t";
            // line 68
            echo "\t\t\t\t\t<h4><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 68);
            echo " \">";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 68);
            echo " </a></h4> 

\t\t\t\t\t";
            // line 71
            echo "\t\t\t\t\t\t<div class=\"rating\">
\t\t\t\t\t\t";
            // line 72
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, 5));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 73
                echo "\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 73) < $context["i"])) {
                    // line 74
                    echo "\t\t\t\t\t\t<span class=\"fa fa-stack\"><i class=\"fa fa-star off fa-stack-2x\"></i></span>
\t\t\t\t\t\t";
                } else {
                    // line 76
                    echo "\t\t\t\t\t\t<span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
\t\t\t\t\t\t";
                }
                // line 78
                echo "\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 79
            echo "\t\t\t\t\t\t";
            // line 80
            echo "\t\t\t\t\t\t</div>
\t\t\t\t\t";
            // line 81
            echo "  


\t\t\t\t\t";
            // line 84
            if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 84)) {
                // line 85
                echo "\t\t\t\t\t\t<p class=\"price\">
\t\t\t\t\t\t";
                // line 86
                if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 86)) {
                    // line 87
                    echo "\t\t\t\t\t\t";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 87);
                    echo "
\t\t\t\t\t\t";
                } else {
                    // line 89
                    echo "\t\t\t\t\t\t<span class=\"price-new\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 89);
                    echo "</span> <span class=\"price-old\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 89);
                    echo "</span>
\t\t\t\t\t\t";
                }
                // line 91
                echo "\t\t\t\t\t\t";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 91)) {
                    // line 92
                    echo "\t\t\t\t\t\t<span class=\"price-tax\">";
                    echo ($context["text_tax"] ?? null);
                    echo " ";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 92);
                    echo "</span>
\t\t\t\t\t\t";
                }
                // line 94
                echo "\t\t\t\t\t\t</p>
\t\t\t\t\t";
            }
            // line 96
            echo "\t\t\t\t\t\t\t\t
\t\t\t\t\t<div id=\"quantity_bar\">
\t\t\t\t\t\t<span class=\"quantity\">";
            // line 98
            echo ($context["text_stock"] ?? null);
            echo " : <span class=\"counter\">";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "qty", [], "any", false, false, false, 98);
            echo "</span></span>
\t\t\t\t\t\t<div class=\"progress\"><div class=\"progress-bar\" role=\"progressbar\" ></div></div>
\t\t\t\t\t</div>\t
\t\t\t\t\t<div class=\"action\">
\t\t\t\t\t\t";
            // line 102
            if ((twig_get_attribute($this->env, $this->source, $context["product"], "qty", [], "any", false, false, false, 102) > 0)) {
                // line 103
                echo "\t\t\t\t\t\t\t<button type=\"button\" class=\"cart_button\" onclick=\"cart.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 103);
                echo "');\" title=\"";
                echo ($context["button_cart"] ?? null);
                echo "\" >";
                echo ($context["button_cart"] ?? null);
                echo "</button>
\t\t\t\t\t\t\t";
            } else {
                // line 105
                echo "\t\t\t\t\t\t\t<button type=\"button\" class=\"cart_button out_of_stock\" title=\"";
                echo ($context["text_outstock"] ?? null);
                echo "\" >";
                echo ($context["text_outstock"] ?? null);
                echo "</button>
\t\t\t\t\t\t";
            }
            // line 107
            echo "\t\t\t\t\t</div>
\t\t\t\t\t";
            // line 109
            echo "
\t\t\t\t</div>\t\t
\t\t\t
\t\t\t\t";
            // line 112
            if ((($context["stock_qty"] ?? null) == "true")) {
                // line 113
                echo "\t\t\t\t\t<span class=\"stock_msg\" style=\"color:#228B22;\">";
                echo ($context["text_productavail"] ?? null);
                echo " : ";
                echo ($context["qty_stock"] ?? null);
                echo "</span>
\t\t\t\t";
            }
            // line 115
            echo "\t\t\t\t\t
\t\t\t</div>
\t\t</div>
\t</div>
</div>

 ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 122
        echo "</div>
  </div></div>
</div>
</div>
</div>
</div>
<span class=\"special_default_width\" style=\"display:none; visibility:hidden\"></span>


<script type=\"text/javascript\"><!--

\$(document).ready(function(){
\t\$('.specialcarousel').owlCarousel({
\t\titems: 6,
\t\tsingleItem: false,
\t\tnavigation: false,
\t\tpagination: false,
\t\titemsDesktop : [1530,5],
\t\titemsDesktopSmall :\t[1199,4],
\t\titemsTablet :\t[991,3],
\t\titemsTabletSmall :\t[767,3],
\t\titemsMobile :\t[543,2]
\t});
\t// Custom Navigation Events
\t\$(\".wdspecial_next\").click(function(){
\t\t\$('.specialcarousel').trigger('owl.next');
\t})
\t\$(\".wdspecial_prev\").click(function(){
\t\t\$('.specialcarousel').trigger('owl.prev');
\t});\t
});\t
--></script>
";
    }

    public function getTemplateName()
    {
        return "Grocery/template/extension/module/special.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  354 => 122,  342 => 115,  334 => 113,  332 => 112,  327 => 109,  324 => 107,  316 => 105,  306 => 103,  304 => 102,  295 => 98,  291 => 96,  287 => 94,  279 => 92,  276 => 91,  268 => 89,  262 => 87,  260 => 86,  257 => 85,  255 => 84,  250 => 81,  247 => 80,  245 => 79,  239 => 78,  235 => 76,  231 => 74,  228 => 73,  224 => 72,  221 => 71,  213 => 68,  205 => 61,  199 => 58,  196 => 57,  194 => 56,  183 => 52,  173 => 49,  165 => 46,  160 => 43,  154 => 41,  152 => 40,  149 => 39,  140 => 37,  135 => 36,  124 => 32,  115 => 30,  110 => 29,  108 => 28,  102 => 27,  91 => 23,  88 => 22,  84 => 21,  70 => 20,  67 => 19,  60 => 14,  57 => 13,  54 => 12,  52 => 11,  44 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Grocery/template/extension/module/special.twig", "");
    }
}
