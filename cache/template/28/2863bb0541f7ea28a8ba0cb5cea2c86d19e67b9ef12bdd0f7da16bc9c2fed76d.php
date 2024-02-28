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

/* Grocery/template/extension/module/webdigifytabs.twig */
class __TwigTemplate_697d44f3b6540b319e5bc496ebbbf2506548d78602fb00bb52fec36f683d9f19 extends \Twig\Template
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
        echo "<div class=\"hometab box bottom-to-top hb-animate-element\">
<div class=\"container\">
<div class=\"row\">
\t\t<div class=\"hometab-wrapper\">
\t<div class=\"tab-head\">
\t\t<div class=\"title-wrapper\">
\t\t\t<div class=\"hometab-heading box-heading\">";
        // line 7
        echo ($context["heading_title"] ?? null);
        echo "</div>
\t\t</div>
\t\t
\t<div id=\"tabs\" class=\"htabs\">
\t<ul class='etabs'>
\t\t<li class='tab'>
\t\t\t";
        // line 13
        if (($context["latestproducts"] ?? null)) {
            // line 14
            echo "\t\t\t\t<a href=\"#tab-latest\">";
            echo ($context["tab_latest"] ?? null);
            echo "</a>
\t\t\t";
        }
        // line 16
        echo "\t\t</li>
\t\t<li class='tab'>
\t\t\t";
        // line 18
        if (($context["bestsellersproducts"] ?? null)) {
            // line 19
            echo "\t\t\t<a href=\"#tab-bestseller\">";
            echo ($context["tab_bestseller"] ?? null);
            echo "</a>
\t\t\t";
        }
        // line 21
        echo "\t\t</li>
\t\t<li class='tab'>
\t\t\t";
        // line 23
        if (($context["featuredproducts"] ?? null)) {
            // line 24
            echo "\t\t\t<a href=\"#tab-featured\">";
            echo ($context["tab_featured"] ?? null);
            echo "</a>
\t\t\t";
        }
        // line 26
        echo "\t\t</li>\t
\t\t</ul>

\t</div>
</div>
";
        // line 31
        if (($context["bestsellersproducts"] ?? null)) {
            // line 32
            echo " <div id=\"tab-bestseller\" class=\"tab-content\">
    \t  <div class=\"box\">
\t\t\t\t<div class=\"box-content\">
\t\t\t\t\t";
            // line 35
            $context["sliderFor"] = 7;
            // line 36
            echo "\t\t\t\t\t";
            $context["productCount"] = twig_length_filter($this->env, ($context["bestsellersproducts"] ?? null));
            // line 37
            echo "\t\t\t\t\t
\t\t\t\t\t";
            // line 38
            if ((($context["productCount"] ?? null) >= ($context["sliderFor"] ?? null))) {
                // line 39
                echo "\t\t\t\t\t\t<div class=\"customNavigation\">
\t\t\t\t\t\t\t<a class=\"fa prev fa-arrow-left\">&nbsp;</a>
\t\t\t\t\t\t\t<a class=\"fa next fa-arrow-right\">&nbsp;</a>
\t\t\t\t\t\t</div>\t
\t\t\t\t\t";
            }
            // line 44
            echo "\t\t\t\t\t<div class=\"box-product ";
            if ((($context["productCount"] ?? null) >= ($context["sliderFor"] ?? null))) {
                echo "product-carousel";
            } else {
                echo " productbox-grid";
            }
            echo "\" id=\"";
            if ((($context["productCount"] ?? null) >= ($context["sliderFor"] ?? null))) {
                echo "tabbestseller-carousel";
            } else {
                echo "tabbestseller-grid";
            }
            echo "\">
\t\t\t\t\t\t";
            // line 45
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["bestsellersproducts"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 46
                echo "\t\t\t\t\t\t\t<div class=\"";
                if ((($context["productCount"] ?? null) >= ($context["sliderFor"] ?? null))) {
                    echo "slider-item";
                } else {
                    echo "product-items";
                }
                echo "\">
\t\t\t\t\t\t\t\t<div class=\"product-block product-thumb transition\">
\t\t\t\t\t\t\t\t\t<div class=\"product-block-inner\">\t  \t
\t\t\t\t\t\t\t\t\t\t<div class=\"";
                // line 49
                if ((twig_get_attribute($this->env, $this->source, $context["product"], "qty", [], "any", false, false, false, 49) > 0)) {
                    echo "image";
                } else {
                    echo "image outstock";
                }
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t";
                // line 50
                if (twig_get_attribute($this->env, $this->source, $context["product"], "thumb_swap", [], "any", false, false, false, 50)) {
                    // line 51
                    echo "      \t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 51);
                    echo "\">
      \t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                    // line 52
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 52);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 52);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 52);
                    echo "\" class=\"img-responsive reg-image\"/>
      \t\t\t\t\t\t\t\t\t\t\t\t<img class=\"img-responsive hover-image\" src=\"";
                    // line 53
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb_swap", [], "any", false, false, false, 53);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 53);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 53);
                    echo "\"/>
      \t\t\t\t\t\t\t\t\t\t\t\t</a>
      \t\t\t\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 56
                    echo "      \t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 56);
                    echo "\">
      \t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                    // line 57
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 57);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 57);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 57);
                    echo "\" class=\"img-responsive\"/></a>
      \t\t\t\t\t\t\t\t\t\t";
                }
                // line 59
                echo "\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t";
                // line 60
                if (twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 60)) {
                    // line 61
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"special-tag\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "percentsaving", [], "any", false, false, false, 61);
                    echo "%</span>
\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 63
                echo "\t\t\t\t\t\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["product"], "qty", [], "any", false, false, false, 63) == 0)) {
                    // line 64
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"stock_status\">";
                    echo ($context["text_outstock"] ?? null);
                    echo "</span>
\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 66
                echo "\t\t\t\t\t\t\t\t\t\t\t<div class=\"product_hover_block\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"wishlist-button offer-btn\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"wishlist\" type=\"button\"  title=\"";
                // line 68
                echo ($context["button_wishlist"] ?? null);
                echo " \" onclick=\"wishlist.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 68);
                echo " ');\"></button>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"compare-button offer-btn\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"compare_button\" type=\"button\"  title=\"";
                // line 71
                echo ($context["button_compare"] ?? null);
                echo " \" onclick=\"compare.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 71);
                echo " ');\">";
                echo ($context["button_compare"] ?? null);
                echo "</button>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"quickview-button offer-btn\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"quickbox\"  title=\"";
                // line 74
                echo ($context["button_quickview"] ?? null);
                echo "\" href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "quick", [], "any", false, false, false, 74);
                echo "\">";
                echo ($context["button_quickview"] ?? null);
                echo "</a>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"countdown\">
\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 78
                if (twig_get_attribute($this->env, $this->source, $context["product"], "specialTime", [], "any", false, false, false, 78)) {
                    // line 79
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"count-down clock\">
\t\t\t\t\t\t\t\t\t\t\t\t<div data-countdown=\"";
                    // line 80
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "specialTime", [], "any", false, false, false, 80);
                    echo "\" class=\"countbox hastime\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>\t
\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 83
                echo "\t\t\t\t\t\t\t\t\t\t\t</div>\t
   \t
            \t\t\t\t</div>


\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"product-details\">
\t\t\t\t\t\t\t\t<div class=\"caption\">
\t\t\t\t\t\t\t\t\t";
                // line 92
                echo "\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t";
                // line 94
                echo "\t\t\t\t\t\t\t\t\t<h4><a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 94);
                echo " \">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 94);
                echo " </a></h4>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t ";
                // line 100
                echo "
\t\t\t\t\t\t\t\t";
                // line 102
                echo "\t\t\t\t\t\t\t\t\t <div class=\"rating\">
\t\t\t\t\t\t\t\t\t ";
                // line 103
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 104
                    echo "\t\t\t\t\t\t\t\t\t ";
                    if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 104) < $context["i"])) {
                        // line 105
                        echo "\t\t\t\t\t\t\t\t\t <span class=\"fa fa-stack\"><i class=\"fa fa-star off fa-stack-2x\"></i></span>
\t\t\t\t\t\t\t\t\t ";
                    } else {
                        // line 107
                        echo "\t\t\t\t\t\t\t\t\t <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
\t\t\t\t\t\t\t\t\t ";
                    }
                    // line 109
                    echo "\t\t\t\t\t\t\t\t\t ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 110
                echo "\t\t\t\t\t\t\t\t\t ";
                // line 111
                echo "\t\t\t\t\t\t\t\t\t </div>
\t\t\t\t\t\t\t\t ";
                // line 112
                echo "   \t
\t\t\t\t\t\t\t\t 
\t\t\t\t\t\t\t\t";
                // line 114
                if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 114)) {
                    // line 115
                    echo "\t\t\t\t\t\t\t\t\t<p class=\"price\">
\t\t\t\t\t\t\t\t\t";
                    // line 116
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 116)) {
                        // line 117
                        echo "\t\t\t\t\t\t\t\t\t";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 117);
                        echo "
\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 119
                        echo "\t\t\t\t\t\t\t\t\t<span class=\"price-new\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 119);
                        echo "</span> <span class=\"price-old\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 119);
                        echo "</span>
\t\t\t\t\t\t\t\t\t";
                    }
                    // line 121
                    echo "\t\t\t\t\t\t\t\t\t";
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 121)) {
                        // line 122
                        echo "\t\t\t\t\t\t\t\t\t<span class=\"price-tax\">";
                        echo ($context["text_tax"] ?? null);
                        echo " ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 122);
                        echo "</span>
\t\t\t\t\t\t\t\t\t";
                    }
                    // line 124
                    echo "\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t";
                }
                // line 126
                echo "\t\t\t\t\t\t\t\t<div class=\"action\">
\t\t\t\t\t\t\t\t\t";
                // line 127
                if ((twig_get_attribute($this->env, $this->source, $context["product"], "qty", [], "any", false, false, false, 127) > 0)) {
                    // line 128
                    echo "\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"cart_button\" onclick=\"cart.add('";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 128);
                    echo "');\" title=\"";
                    echo ($context["button_cart"] ?? null);
                    echo "\" >";
                    echo ($context["button_cart"] ?? null);
                    echo "</button>
\t\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 130
                    echo "\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"cart_button out_of_stock\" title=\"";
                    echo ($context["text_outstock"] ?? null);
                    echo "\" >";
                    echo ($context["text_outstock"] ?? null);
                    echo "</button>
\t\t\t\t\t\t\t\t\t";
                }
                // line 132
                echo "\t\t\t\t\t\t\t\t</div>\t\t
\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t</div>\t\t

\t\t\t\t\t\t\t</div>\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 143
            echo "\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t </div>
\t\t <span class=\"tabbestseller_default_width\" style=\"display:none; visibility:hidden\"></span> 
 </div>
";
        }
        // line 149
        if (($context["latestproducts"] ?? null)) {
            // line 150
            echo "<div id=\"tab-latest\" class=\"tab-content\">
\t<div class=\"box\">
\t\t\t\t<div class=\"box-content\">

\t\t\t\t\t";
            // line 154
            $context["sliderFor"] = 7;
            // line 155
            echo "\t\t\t\t\t";
            $context["productCount"] = twig_length_filter($this->env, ($context["latestproducts"] ?? null));
            // line 156
            echo "\t\t\t\t\t
\t\t\t\t\t\t";
            // line 157
            if ((($context["productCount"] ?? null) >= ($context["sliderFor"] ?? null))) {
                // line 158
                echo "\t\t\t\t\t\t<div class=\"customNavigation\">
\t\t\t\t\t\t\t<a class=\"fa prev fa-arrow-left\">&nbsp;</a>
\t\t\t\t\t\t\t<a class=\"fa next fa-arrow-right\">&nbsp;</a>
\t\t\t\t\t\t</div>\t
\t\t\t\t\t";
            }
            // line 163
            echo "\t\t\t\t\t<div class=\"box-product ";
            if ((($context["productCount"] ?? null) >= ($context["sliderFor"] ?? null))) {
                echo "product-carousel";
            } else {
                echo " productbox-grid";
            }
            echo "\" id=\"";
            if ((($context["productCount"] ?? null) >= ($context["sliderFor"] ?? null))) {
                echo "tablatest-carousel";
            } else {
                echo "tablatest-grid";
            }
            echo "\">
\t\t\t\t\t";
            // line 164
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["latestproducts"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 165
                echo "\t\t\t\t\t\t\t<div class=\"";
                if ((($context["productCount"] ?? null) >= ($context["sliderFor"] ?? null))) {
                    echo "slider-item";
                } else {
                    echo "product-items";
                }
                echo "\">
\t\t\t\t\t\t\t\t<div class=\"product-block product-thumb transition\">
\t\t\t\t\t\t\t\t\t<div class=\"product-block-inner\">\t  \t
\t\t\t\t\t\t\t\t\t\t<div class=\"";
                // line 168
                if ((twig_get_attribute($this->env, $this->source, $context["product"], "qty", [], "any", false, false, false, 168) > 0)) {
                    echo "image";
                } else {
                    echo "image outstock";
                }
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t";
                // line 169
                if (twig_get_attribute($this->env, $this->source, $context["product"], "thumb_swap", [], "any", false, false, false, 169)) {
                    // line 170
                    echo "      \t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 170);
                    echo "\">
      \t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                    // line 171
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 171);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 171);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 171);
                    echo "\" class=\"img-responsive reg-image\"/>
      \t\t\t\t\t\t\t\t\t\t\t\t<img class=\"img-responsive hover-image\" src=\"";
                    // line 172
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb_swap", [], "any", false, false, false, 172);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 172);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 172);
                    echo "\"/>
      \t\t\t\t\t\t\t\t\t\t\t\t</a>
      \t\t\t\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 175
                    echo "      \t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 175);
                    echo "\">
      \t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                    // line 176
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 176);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 176);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 176);
                    echo "\" class=\"img-responsive\"/></a>
      \t\t\t\t\t\t\t\t\t\t";
                }
                // line 178
                echo "\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t";
                // line 179
                if (twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 179)) {
                    // line 180
                    echo "\t\t\t\t\t\t\t\t\t\t\t<span class=\"special-tag\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "percentsaving", [], "any", false, false, false, 180);
                    echo "%</span>
\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 182
                echo "\t\t\t\t\t\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["product"], "qty", [], "any", false, false, false, 182) == 0)) {
                    // line 183
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"stock_status\">";
                    echo ($context["text_outstock"] ?? null);
                    echo "</span>
\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 185
                echo "   \t
\t\t\t\t\t\t\t\t\t\t<div class=\"product_hover_block\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"wishlist-button offer-btn\">
\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"wishlist\" type=\"button\"  title=\"";
                // line 188
                echo ($context["button_wishlist"] ?? null);
                echo " \" onclick=\"wishlist.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 188);
                echo " ');\"></button>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"compare-button offer-btn\">
\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"compare_button\" type=\"button\"  title=\"";
                // line 191
                echo ($context["button_compare"] ?? null);
                echo " \" onclick=\"compare.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 191);
                echo " ');\">";
                echo ($context["button_compare"] ?? null);
                echo "</button>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"quickview-button offer-btn\">
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"quickbox\"  title=\"";
                // line 194
                echo ($context["button_quickview"] ?? null);
                echo "\" href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "quick", [], "any", false, false, false, 194);
                echo "\">";
                echo ($context["button_quickview"] ?? null);
                echo "</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"countdown\">
\t\t\t\t\t\t\t\t\t\t\t";
                // line 198
                if (twig_get_attribute($this->env, $this->source, $context["product"], "specialTime", [], "any", false, false, false, 198)) {
                    // line 199
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"count-down clock\">
\t\t\t\t\t\t\t\t\t\t\t<div data-countdown=\"";
                    // line 200
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "specialTime", [], "any", false, false, false, 200);
                    echo "\" class=\"countbox hastime\"></div>
\t\t\t\t\t\t\t\t\t\t\t</div>\t
\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 203
                echo "\t\t\t\t\t\t\t\t\t\t</div>\t
\t\t\t\t\t\t\t\t\t
            </div>
       

\t\t\t\t\t\t<div class=\"product-details\">
\t\t\t\t\t\t\t<div class=\"caption\">
\t\t\t\t\t\t\t\t";
                // line 211
                echo "
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t";
                // line 214
                echo "
\t\t\t\t\t\t\t\t<h4><a href=\"";
                // line 215
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 215);
                echo " \">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 215);
                echo " </a></h4>

\t\t\t\t\t\t\t\t";
                // line 221
                echo "
\t\t\t\t\t\t\t\t";
                // line 223
                echo "\t\t\t\t\t\t\t\t\t <div class=\"rating\">
\t\t\t\t\t\t\t\t\t ";
                // line 224
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 225
                    echo "\t\t\t\t\t\t\t\t\t ";
                    if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 225) < $context["i"])) {
                        // line 226
                        echo "\t\t\t\t\t\t\t\t\t <span class=\"fa fa-stack\"><i class=\"fa fa-star off fa-stack-2x\"></i></span>
\t\t\t\t\t\t\t\t\t ";
                    } else {
                        // line 228
                        echo "\t\t\t\t\t\t\t\t\t <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
\t\t\t\t\t\t\t\t\t ";
                    }
                    // line 230
                    echo "\t\t\t\t\t\t\t\t\t ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 231
                echo "\t\t\t\t\t\t\t\t\t ";
                // line 232
                echo "\t\t\t\t\t\t\t\t\t </div>
\t\t\t\t\t\t\t\t ";
                // line 233
                echo "   

\t\t\t\t\t\t\t\t";
                // line 235
                if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 235)) {
                    // line 236
                    echo "\t\t\t\t\t\t\t\t\t<p class=\"price\">
\t\t\t\t\t\t\t\t\t";
                    // line 237
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 237)) {
                        // line 238
                        echo "\t\t\t\t\t\t\t\t\t";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 238);
                        echo "
\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 240
                        echo "\t\t\t\t\t\t\t\t\t<span class=\"price-new\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 240);
                        echo "</span> <span class=\"price-old\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 240);
                        echo "</span>
\t\t\t\t\t\t\t\t\t";
                    }
                    // line 242
                    echo "\t\t\t\t\t\t\t\t\t";
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 242)) {
                        // line 243
                        echo "\t\t\t\t\t\t\t\t\t<span class=\"price-tax\">";
                        echo ($context["text_tax"] ?? null);
                        echo " ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 243);
                        echo "</span>
\t\t\t\t\t\t\t\t\t";
                    }
                    // line 245
                    echo "\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t";
                }
                // line 247
                echo "\t\t\t\t\t\t\t\t<div class=\"action\">
\t\t\t\t\t\t\t\t\t";
                // line 248
                if ((twig_get_attribute($this->env, $this->source, $context["product"], "qty", [], "any", false, false, false, 248) > 0)) {
                    // line 249
                    echo "\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"cart_button\" onclick=\"cart.add('";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 249);
                    echo "');\" title=\"";
                    echo ($context["button_cart"] ?? null);
                    echo "\" >";
                    echo ($context["button_cart"] ?? null);
                    echo "</button>
\t\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 251
                    echo "\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"cart_button out_of_stock\" title=\"";
                    echo ($context["text_outstock"] ?? null);
                    echo "\" >";
                    echo ($context["text_outstock"] ?? null);
                    echo "</button>
\t\t\t\t\t\t\t\t\t";
                }
                // line 253
                echo "\t\t\t\t\t\t\t\t</div>\t
\t\t\t\t\t\t\t
\t            \t \t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t</div>\t\t
\t\t\t\t\t\t\t\t\t</div>\t\t\t
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 263
            echo "\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t </div>
\t\t\t  <span class=\"tablatest_default_width\" style=\"display:none; visibility:hidden\"></span>
 </div>
";
        }
        // line 269
        echo "
";
        // line 270
        if (($context["featuredproducts"] ?? null)) {
            // line 271
            echo " <div id=\"tab-featured\" class=\"tab-content\">
    \t  <div class=\"box\">
\t\t\t\t<div class=\"box-content\">
\t\t\t\t\t";
            // line 274
            $context["sliderFor"] = 7;
            // line 275
            echo "\t\t\t\t\t";
            $context["productCount"] = twig_length_filter($this->env, ($context["featuredproducts"] ?? null));
            // line 276
            echo "\t\t\t\t\t
\t\t\t\t\t";
            // line 277
            if ((($context["productCount"] ?? null) >= ($context["sliderFor"] ?? null))) {
                // line 278
                echo "\t\t\t\t\t\t<div class=\"customNavigation\">
\t\t\t\t\t\t\t<a class=\"fa prev fa-arrow-left\">&nbsp;</a>
\t\t\t\t\t\t\t<a class=\"fa next fa-arrow-right\">&nbsp;</a>
\t\t\t\t\t\t</div>\t
\t\t\t\t\t";
            }
            // line 283
            echo "\t\t\t\t\t<div class=\"box-product ";
            if ((($context["productCount"] ?? null) >= ($context["sliderFor"] ?? null))) {
                echo "product-carousel";
            } else {
                echo " productbox-grid-hometab";
            }
            echo "\" id=\"";
            if ((($context["productCount"] ?? null) >= ($context["sliderFor"] ?? null))) {
                echo "tabfeatured-carousel";
            } else {
                echo "tabfeatured-grid";
            }
            echo "\">
\t\t\t\t\t\t";
            // line 284
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["featuredproducts"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 285
                echo "\t\t\t\t\t\t\t<div class=\"";
                if ((($context["productCount"] ?? null) >= ($context["sliderFor"] ?? null))) {
                    echo "slider-item";
                } else {
                    echo "product-items";
                }
                echo "\">
\t\t\t\t\t\t\t\t<div class=\"product-block product-thumb transition\">
\t\t\t\t\t\t\t\t\t<div class=\"product-block-inner\">\t  \t
\t\t\t\t\t\t\t\t\t\t<div class=\"image ";
                // line 288
                if ((twig_get_attribute($this->env, $this->source, $context["product"], "qty", [], "any", false, false, false, 288) == 0)) {
                    echo "outstock";
                }
                echo "\">

\t\t\t\t\t\t\t\t\t\t\t";
                // line 290
                if (twig_get_attribute($this->env, $this->source, $context["product"], "thumb_swap", [], "any", false, false, false, 290)) {
                    // line 291
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 291);
                    echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                    // line 293
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 293);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 293);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 293);
                    echo "\" class=\"img-responsive reg-image\"/>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"image_content\">
\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"img-responsive hover-image\" src=\"";
                    // line 295
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb_swap", [], "any", false, false, false, 295);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 295);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 295);
                    echo "\"/></div>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 298
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 298);
                    echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                    // line 299
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 299);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 299);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 299);
                    echo "\" class=\"img-responsive\"/></a>
      \t\t\t\t\t\t\t\t\t";
                }
                // line 301
                echo "\t\t\t\t\t\t\t\t\t\t\t";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 301)) {
                    // line 302
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"special-tag\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "percentsaving", [], "any", false, false, false, 302);
                    echo "%</span>
\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 304
                echo "\t\t\t\t\t\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["product"], "qty", [], "any", false, false, false, 304) == 0)) {
                    // line 305
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"stock_status\">";
                    echo ($context["text_outstock"] ?? null);
                    echo "</span>
\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 307
                echo "\t\t\t\t\t\t\t            
\t\t\t\t\t\t\t\t\t\t\t<div class=\"product_hover_block\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"wishlist-button offer-btn\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"wishlist\" type=\"button\"  title=\"";
                // line 310
                echo ($context["button_wishlist"] ?? null);
                echo " \" onclick=\"wishlist.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 310);
                echo " ');\"></button>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"compare-button offer-btn\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"compare_button\" type=\"button\"  title=\"";
                // line 314
                echo ($context["button_compare"] ?? null);
                echo " \" onclick=\"compare.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 314);
                echo " ');\">";
                echo ($context["button_compare"] ?? null);
                echo "</button>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"quickview-button offer-btn\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"quickbox\"  title=\"";
                // line 317
                echo ($context["button_quickview"] ?? null);
                echo "\" href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "quick", [], "any", false, false, false, 317);
                echo "\">";
                echo ($context["button_quickview"] ?? null);
                echo "</a>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"countdown\">
\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 321
                if (twig_get_attribute($this->env, $this->source, $context["product"], "specialTime", [], "any", false, false, false, 321)) {
                    // line 322
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"count-down clock\">
\t\t\t\t\t\t\t\t\t\t\t\t<div data-countdown=\"";
                    // line 323
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "specialTime", [], "any", false, false, false, 323);
                    echo "\" class=\"countbox hastime\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>\t
\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 326
                echo "\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t          
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"product-details\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"caption\">
\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 332
                echo "\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 335
                echo "\t\t\t\t\t\t\t\t\t\t\t\t<h4><a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 335);
                echo " \">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 335);
                echo " </a></h4>
\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 338
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t <div class=\"rating\">
\t\t\t\t\t\t\t\t\t\t\t\t\t ";
                // line 339
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 340
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t ";
                    if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 340) < $context["i"])) {
                        // line 341
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t <span class=\"fa fa-stack\"><i class=\"fa fa-star off fa-stack-2x\"></i></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t ";
                    } else {
                        // line 343
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t ";
                    }
                    // line 345
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 346
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t ";
                // line 347
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t </div>
\t\t\t\t\t\t\t\t\t\t\t\t ";
                // line 348
                echo "   
\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 350
                if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 350)) {
                    // line 351
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"price\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 352
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 352)) {
                        // line 353
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 353);
                        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 355
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"price-new\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 355);
                        echo "</span> <span class=\"price-old\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 355);
                        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 357
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 357)) {
                        // line 358
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"price-tax\">";
                        echo ($context["text_tax"] ?? null);
                        echo " ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 358);
                        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 360
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 362
                echo "\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"action\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 364
                if ((twig_get_attribute($this->env, $this->source, $context["product"], "qty", [], "any", false, false, false, 364) > 0)) {
                    // line 365
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"cart_button\" onclick=\"cart.add('";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 365);
                    echo "');\" title=\"";
                    echo ($context["button_cart"] ?? null);
                    echo "\" >";
                    echo ($context["button_cart"] ?? null);
                    echo "</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 367
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"cart_button out_of_stock\" title=\"";
                    echo ($context["text_outstock"] ?? null);
                    echo "\" >";
                    echo ($context["text_outstock"] ?? null);
                    echo "</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 369
                echo "\t\t\t\t\t\t\t\t\t\t\t\t</div>\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t 
\t\t\t\t\t\t\t\t\t\t\t</div>\t\t
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<script> 
\t\t\t\t\t\t\t\t     \$('.total-review";
                // line 376
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 376);
                echo "').on('click', function() { 
\t\t\t\t\t\t\t\t       var t='";
                // line 377
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 377);
                echo "'; 
\t\t\t\t\t\t\t\t       const parseResult = new DOMParser().parseFromString(t, \"text/html\");
\t\t\t\t\t\t\t\t       const parsedUrl = parseResult.documentElement.textContent;
\t\t\t\t\t\t\t\t       window.location.href = parsedUrl + '&review';
\t\t\t\t\t\t\t\t       return false;
\t\t\t\t\t\t\t\t    });
\t\t\t\t\t\t\t\t </script>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 386
            echo "\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t </div>
\t\t\t <span class=\"tabfeatured_default_width\" style=\"display:none; visibility:hidden\"></span>
 </div>
";
        }
        // line 392
        echo "
\t</div>
\t</div>
\t</div>\t\t
</div>
<script type=\"text/javascript\">
\$('#tabs a').tabs();
</script> ";
    }

    public function getTemplateName()
    {
        return "Grocery/template/extension/module/webdigifytabs.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1023 => 392,  1015 => 386,  1000 => 377,  996 => 376,  987 => 369,  979 => 367,  969 => 365,  967 => 364,  963 => 362,  959 => 360,  951 => 358,  948 => 357,  940 => 355,  934 => 353,  932 => 352,  929 => 351,  927 => 350,  923 => 348,  920 => 347,  918 => 346,  912 => 345,  908 => 343,  904 => 341,  901 => 340,  897 => 339,  894 => 338,  886 => 335,  882 => 332,  875 => 326,  869 => 323,  866 => 322,  864 => 321,  853 => 317,  843 => 314,  834 => 310,  829 => 307,  823 => 305,  820 => 304,  814 => 302,  811 => 301,  802 => 299,  797 => 298,  787 => 295,  778 => 293,  772 => 291,  770 => 290,  763 => 288,  752 => 285,  748 => 284,  733 => 283,  726 => 278,  724 => 277,  721 => 276,  718 => 275,  716 => 274,  711 => 271,  709 => 270,  706 => 269,  698 => 263,  683 => 253,  675 => 251,  665 => 249,  663 => 248,  660 => 247,  656 => 245,  648 => 243,  645 => 242,  637 => 240,  631 => 238,  629 => 237,  626 => 236,  624 => 235,  620 => 233,  617 => 232,  615 => 231,  609 => 230,  605 => 228,  601 => 226,  598 => 225,  594 => 224,  591 => 223,  588 => 221,  581 => 215,  578 => 214,  574 => 211,  565 => 203,  559 => 200,  556 => 199,  554 => 198,  543 => 194,  533 => 191,  525 => 188,  520 => 185,  514 => 183,  511 => 182,  505 => 180,  503 => 179,  500 => 178,  491 => 176,  486 => 175,  476 => 172,  468 => 171,  463 => 170,  461 => 169,  453 => 168,  442 => 165,  438 => 164,  423 => 163,  416 => 158,  414 => 157,  411 => 156,  408 => 155,  406 => 154,  400 => 150,  398 => 149,  390 => 143,  374 => 132,  366 => 130,  356 => 128,  354 => 127,  351 => 126,  347 => 124,  339 => 122,  336 => 121,  328 => 119,  322 => 117,  320 => 116,  317 => 115,  315 => 114,  311 => 112,  308 => 111,  306 => 110,  300 => 109,  296 => 107,  292 => 105,  289 => 104,  285 => 103,  282 => 102,  279 => 100,  271 => 94,  268 => 92,  258 => 83,  252 => 80,  249 => 79,  247 => 78,  236 => 74,  226 => 71,  218 => 68,  214 => 66,  208 => 64,  205 => 63,  199 => 61,  197 => 60,  194 => 59,  185 => 57,  180 => 56,  170 => 53,  162 => 52,  157 => 51,  155 => 50,  147 => 49,  136 => 46,  132 => 45,  117 => 44,  110 => 39,  108 => 38,  105 => 37,  102 => 36,  100 => 35,  95 => 32,  93 => 31,  86 => 26,  80 => 24,  78 => 23,  74 => 21,  68 => 19,  66 => 18,  62 => 16,  56 => 14,  54 => 13,  45 => 7,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Grocery/template/extension/module/webdigifytabs.twig", "");
    }
}
