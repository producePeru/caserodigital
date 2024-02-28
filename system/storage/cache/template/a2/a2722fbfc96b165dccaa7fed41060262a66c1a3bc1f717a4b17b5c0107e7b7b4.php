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

/* Grocery/template/extension/module/productcategory.twig */
class __TwigTemplate_0601a78f98ed7f5d436bd5efce4c412c6b69cc1c35e0e586317e2ad32a042fbb extends \Twig\Template
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
        echo "<div class=\"box ProductbyCategory bottom-to-top hb-animate-element\">
 <div class=\"container\">
 <div class=\"row\">
<div class=\"ProductbyCategory-wrapper\">
  <div class=\"tab-head\">
  <div class=\"title-wrapper\">
   <div class=\"hometab-heading box-heading\">";
        // line 7
        echo ($context["heading_title"] ?? null);
        echo "</div>
  </div>
    <div id=\"tabss\" class=\"htabs\">
      <ul class=\"etabs\">
        ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 12
            echo "          <li class=\"tab\">
            <a href=\"#";
            // line 13
            echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 13);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["category"], "nameview", [], "any", false, false, false, 13);
            echo "</a>
          </li> 
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "      </ul>
    </div>
  </div>
<div class=\"right-part\">
<div class=\"product-column\">
  ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 22
            echo "  <div id=\"";
            echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 22);
            echo "\" class=\"tab-content\">
  <div class=\"box-content\">

  ";
            // line 25
            if ((($context["slide_value"] ?? null) == 1)) {
                // line 26
                echo "  \t<div class=\"customNavigation\">
\t\t<a class=\"fa fa-angle-left wdproductcategory_prev prev\">&nbsp;</a>
\t\t<a class=\"fa fa-angle-right wdproductcategory_next next\">&nbsp;</a>
\t\t</div>
\t";
            }
            // line 31
            echo "  
\t<div class=\"box-product ";
            // line 32
            if ((($context["slide_value"] ?? null) == 1)) {
                echo "productcategorycarousel owl-carousel";
            } else {
                echo "productbox-grid";
            }
            echo "\" id=\"";
            if ((($context["slide_value"] ?? null) == 1)) {
                echo "productcategory";
                echo twig_get_attribute($this->env, $this->source, $context["category"], "count", [], "any", false, false, false, 32);
                echo "-carousel";
            } else {
                echo "productcategory";
                echo twig_get_attribute($this->env, $this->source, $context["category"], "count", [], "any", false, false, false, 32);
                echo "-grid";
            }
            echo "\">

  ";
            // line 34
            if (twig_get_attribute($this->env, $this->source, $context["category"], "products", [], "any", false, false, false, 34)) {
                echo " 
\t ";
                // line 35
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["category"], "products", [], "any", false, false, false, 35));
                foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                    // line 36
                    echo "  <div class=\"";
                    if ((($context["slide_value"] ?? null) == 1)) {
                        echo "slider-item";
                    } else {
                        echo "product-items";
                    }
                    echo "\">
    <div class=\"product-block product-thumb transition\">
    <div class=\"product-block-inner\">
      <div class=\"image ";
                    // line 39
                    if ((twig_get_attribute($this->env, $this->source, $context["product"], "qty", [], "any", false, false, false, 39) == 0)) {
                        echo "outstock";
                    }
                    echo "\">
        ";
                    // line 40
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "thumb_swap", [], "any", false, false, false, 40)) {
                        // line 41
                        echo "          <a href=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 41);
                        echo "\">
          <img src=\"";
                        // line 42
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 42);
                        echo "\" title=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 42);
                        echo "\" alt=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 42);
                        echo "\" class=\"img-responsive reg-image\"/>
            <div class=\"image_content\">
              <img class=\"img-responsive hover-image\" src=\"";
                        // line 44
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb_swap", [], "any", false, false, false, 44);
                        echo "\" title=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 44);
                        echo "\" alt=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 44);
                        echo "\"/>
            </div>
          </a>
          ";
                    } else {
                        // line 48
                        echo "          <a href=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 48);
                        echo "\">
          <img src=\"";
                        // line 49
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 49);
                        echo "\" title=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 49);
                        echo "\" alt=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 49);
                        echo "\" class=\"img-responsive\"/></a>
        ";
                    }
                    // line 51
                    echo "        ";
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 51)) {
                        // line 52
                        echo "          <span class=\"special-tag\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "percentsaving", [], "any", false, false, false, 52);
                        echo "%</span>
        ";
                    }
                    // line 54
                    echo "        ";
                    if ((twig_get_attribute($this->env, $this->source, $context["product"], "qty", [], "any", false, false, false, 54) == 0)) {
                        // line 55
                        echo "          <span class=\"stock_status\">";
                        echo ($context["text_outstock"] ?? null);
                        echo "</span>
        ";
                    }
                    // line 57
                    echo "             
        <div class=\"product_hover_block\">
          <div class=\"wishlist-button offer-btn\">
            <button class=\"wishlist\" type=\"button\"  title=\"";
                    // line 60
                    echo ($context["button_wishlist"] ?? null);
                    echo " \" onclick=\"wishlist.add('";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 60);
                    echo " ');\"></button>
          </div>
          <div class=\"compare-button offer-btn\">
            <button class=\"compare_button\" type=\"button\"  title=\"";
                    // line 63
                    echo ($context["button_compare"] ?? null);
                    echo " \" onclick=\"compare.add('";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 63);
                    echo " ');\">";
                    echo ($context["button_compare"] ?? null);
                    echo "</button>
          </div>
          <div class=\"quickview-button offer-btn\">
            <a class=\"quickbox\"  title=\"";
                    // line 66
                    echo ($context["button_quickview"] ?? null);
                    echo "\" href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "quick", [], "any", false, false, false, 66);
                    echo "\">";
                    echo ($context["button_quickview"] ?? null);
                    echo "</a>
          </div>
        </div>
        <div class=\"countdown\">
          ";
                    // line 70
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "specialTime", [], "any", false, false, false, 70)) {
                        // line 71
                        echo "            <div class=\"count-down clock\">
              <div data-countdown=\"";
                        // line 72
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "specialTime", [], "any", false, false, false, 72);
                        echo "\" class=\"countbox hastime\"></div>
            </div>\t
          ";
                    }
                    // line 75
                    echo "        </div>\t
\t  \t</div>
      <div class=\"product-details\">
        <div class=\"caption\">   
          ";
                    // line 81
                    echo "
          ";
                    // line 83
                    echo "          <h4><a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 83);
                    echo " \">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 83);
                    echo " </a></h4>

          ";
                    // line 89
                    echo "
        
          <div class=\"rating\">
            ";
                    // line 92
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 93
                        echo "            ";
                        if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 93) < $context["i"])) {
                            // line 94
                            echo "            <span class=\"fa fa-stack\"><i class=\"fa fa-star off fa-stack-2x\"></i></span>
            ";
                        } else {
                            // line 96
                            echo "            <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
            ";
                        }
                        // line 98
                        echo "            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 99
                    echo "            ";
                    // line 100
                    echo "          </div>

          ";
                    // line 102
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 102)) {
                        // line 103
                        echo "            <p class=\"price\">
              ";
                        // line 104
                        if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 104)) {
                            // line 105
                            echo "              ";
                            echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 105);
                            echo "
              ";
                        } else {
                            // line 107
                            echo "              <span class=\"price-new\">";
                            echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 107);
                            echo "</span> <span class=\"price-old\">";
                            echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 107);
                            echo "</span>
              ";
                        }
                        // line 109
                        echo "                ";
                        if (twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 109)) {
                            // line 110
                            echo "                <span class=\"price-tax\">";
                            echo ($context["text_tax"] ?? null);
                            echo " ";
                            echo twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 110);
                            echo "</span>
                ";
                        }
                        // line 112
                        echo "            </p>
          ";
                    }
                    // line 113
                    echo " 

          <div class=\"action\">
            ";
                    // line 116
                    if ((twig_get_attribute($this->env, $this->source, $context["product"], "qty", [], "any", false, false, false, 116) > 0)) {
                        // line 117
                        echo "                <button type=\"button\" class=\"cart_button\" onclick=\"cart.add('";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 117);
                        echo "');\" title=\"";
                        echo ($context["button_cart"] ?? null);
                        echo "\" >";
                        echo ($context["button_cart"] ?? null);
                        echo "</button>
                ";
                    } else {
                        // line 119
                        echo "                <button type=\"button\" class=\"cart_button out_of_stock\" title=\"";
                        echo ($context["text_outstock"] ?? null);
                        echo "\" >";
                        echo ($context["text_outstock"] ?? null);
                        echo "</button>
            ";
                    }
                    // line 121
                    echo "          </div>\t

        </div>\t
      </div>
  </div>
</div>
    <script> 
    \$('.total-review";
                    // line 128
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 128);
                    echo "').on('click', function() { 
    var t='";
                    // line 129
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 129);
                    echo "'; 
    const parseResult = new DOMParser().parseFromString(t, \"text/html\");
    const parsedUrl = parseResult.documentElement.textContent;
    window.location.href = parsedUrl + '&review';
    return false;
   });
  </script>
  </div>
  ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 137
                echo " ";
                // line 138
                echo "
";
            } else {
                // line 140
                echo " <span class=\"listing\">";
                echo ($context["listing"] ?? null);
                echo "</span> 
";
            }
            // line 142
            echo "</div>
</div>
</div>
<span class=\"productcategory";
            // line 145
            echo twig_get_attribute($this->env, $this->source, $context["category"], "count", [], "any", false, false, false, 145);
            echo "_default_width wdproductcategory\" style=\"display:none; visibility:hidden\"> </span>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 146
        echo " ";
        // line 147
        echo "</div></div>
</div>
";
        // line 149
        echo ($context["bannersecond"] ?? null);
        echo "

</div>
</div>
</div>
<script>
\$('#tabss a').tabss();

\$(document).ready(function(){
\t\$('.productcategorycarousel').owlCarousel({
\t\titems: 6,
\t\tsingleItem: false,
\t\tnavigation: false,
\t\tpagination: false,
\t\titemsDesktop : [1529,5],
\t\titemsDesktopSmall :\t[1199,4],
\t\titemsTablet :\t[991,3],
\t\titemsTabletSmall :\t[600,2],
\t\titemsMobile :\t[543,2]
\t});
\t// Custom Navigation Events
\t\$(\".wdproductcategory_next\").click(function(){
\t\t\$('.productcategorycarousel').trigger('owl.next');
\t})
\t\$(\".wdproductcategory_prev\").click(function(){
\t\t\$('.productcategorycarousel').trigger('owl.prev');
\t});\t
});\t

</script>

<style>

</style>

";
    }

    public function getTemplateName()
    {
        return "Grocery/template/extension/module/productcategory.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  417 => 149,  413 => 147,  411 => 146,  403 => 145,  398 => 142,  392 => 140,  388 => 138,  386 => 137,  371 => 129,  367 => 128,  358 => 121,  350 => 119,  340 => 117,  338 => 116,  333 => 113,  329 => 112,  321 => 110,  318 => 109,  310 => 107,  304 => 105,  302 => 104,  299 => 103,  297 => 102,  293 => 100,  291 => 99,  285 => 98,  281 => 96,  277 => 94,  274 => 93,  270 => 92,  265 => 89,  257 => 83,  254 => 81,  248 => 75,  242 => 72,  239 => 71,  237 => 70,  226 => 66,  216 => 63,  208 => 60,  203 => 57,  197 => 55,  194 => 54,  188 => 52,  185 => 51,  176 => 49,  171 => 48,  160 => 44,  151 => 42,  146 => 41,  144 => 40,  138 => 39,  127 => 36,  123 => 35,  119 => 34,  100 => 32,  97 => 31,  90 => 26,  88 => 25,  81 => 22,  77 => 21,  70 => 16,  59 => 13,  56 => 12,  52 => 11,  45 => 7,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Grocery/template/extension/module/productcategory.twig", "");
    }
}
