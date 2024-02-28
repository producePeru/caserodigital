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

/* Grocery/template/product/product.twig */
class __TwigTemplate_8e55a27d71d5ad7bb2fd7ff0a10c9442c60d9ae2176d0f6a4ec90690b6ede032 extends \Twig\Template
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
        echo ($context["header"] ?? null);
        echo "
<div id=\"product-product\" class=\"container\">
  
  <div class=\"row\">";
        // line 4
        echo ($context["column_left"] ?? null);
        echo "
    ";
        // line 5
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 6
            echo "    ";
            $context["class"] = "col-sm-6 productpage";
            // line 7
            echo "    ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 8
            echo "    ";
            $context["class"] = "col-sm-9 productpage";
            // line 9
            echo "    ";
        } else {
            // line 10
            echo "    ";
            $context["class"] = "col-sm-12 productpage";
            // line 11
            echo "    ";
        }
        // line 12
        echo "    <div id=\"content\" class=\"";
        echo ($context["class"] ?? null);
        echo "\">
    <ul class=\"breadcrumb\">
    ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 15
            echo "    <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 15);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 15);
            echo "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "  </ul>
  ";
        // line 18
        echo ($context["content_top"] ?? null);
        echo "
      <div class=\"row\">
        <div class=\"product_content\">
        <div class=\"product-container\"> ";
        // line 21
        if ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 22
            echo "        ";
            $context["class"] = "col-sm-6 product-left";
            // line 23
            echo "        ";
        } else {
            // line 24
            echo "        ";
            $context["class"] = "col-sm-4 product-left";
            // line 25
            echo "        ";
        }
        // line 26
        echo "        <div class=\"";
        echo ($context["class"] ?? null);
        echo "\"> 
    <div class=\"product-info\">    
     ";
        // line 28
        if ((($context["thumb"] ?? null) || ($context["images"] ?? null))) {
            // line 29
            echo "          <div class=\"left product-image thumbnails\">
         ";
            // line 30
            if (($context["thumb"] ?? null)) {
                echo "      
    <!-- Webdigify Cloud-Zoom Image Effect Start -->
      <div class=\"image\"><a class=\"thumbnail\" href=\"";
                // line 32
                echo ($context["popup"] ?? null);
                echo "\" title=\"";
                echo ($context["heading_title"] ?? null);
                echo "\"><img id=\"tmzoom\" src=\"";
                echo ($context["thumb"] ?? null);
                echo "\" data-zoom-image=\"";
                echo ($context["popup"] ?? null);
                echo "\" title=\"";
                echo ($context["heading_title"] ?? null);
                echo "\" alt=\"";
                echo ($context["heading_title"] ?? null);
                echo "\" /></a></div> 
      ";
            }
            // line 34
            echo "      ";
            if (($context["images"] ?? null)) {
                // line 35
                echo "       ";
                $context["sliderFor"] = 3;
                // line 36
                echo "      ";
                $context["imageCount"] = twig_length_filter($this->env, ($context["images"] ?? null));
                echo " 
      
      <div class=\"additional-carousel\">  
        ";
                // line 39
                if ((($context["imageCount"] ?? null) >= ($context["sliderFor"] ?? null))) {
                    // line 40
                    echo "        <div class=\"additional-wrapper\">
          <div class=\"customNavigation\">
            <a class=\"fa prev fa-arrow-left\">&nbsp;</a>
            <a class=\"fa next fa-arrow-right\">&nbsp;</a>
          </div> 
       ";
                }
                // line 45
                echo "        
        <div id=\"additional-carousel\" class=\"image-additional ";
                // line 46
                if ((($context["imageCount"] ?? null) >= ($context["sliderFor"] ?? null))) {
                    echo "product-carousel";
                }
                echo "\">
            
        <div class=\"slider-item\">
          <div class=\"product-block\">   
            <a href=\"";
                // line 50
                echo ($context["popup"] ?? null);
                echo "\" title=\"";
                echo ($context["heading_title"] ?? null);
                echo "\" class=\"elevatezoom-gallery\" data-image=\"";
                echo ($context["thumb"] ?? null);
                echo "\" data-zoom-image=\"";
                echo ($context["popup"] ?? null);
                echo "\"><img src=\"";
                echo ($context["thumb"] ?? null);
                echo "\" title=\"";
                echo ($context["heading_title"] ?? null);
                echo "\" alt=\"";
                echo ($context["heading_title"] ?? null);
                echo "\" /></a>
          </div>
          </div>    
          
        ";
                // line 54
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["images"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                    // line 55
                    echo "          <div class=\"slider-item\">
          <div class=\"product-block\">   
                <a href=\"";
                    // line 57
                    echo twig_get_attribute($this->env, $this->source, $context["image"], "popup", [], "any", false, false, false, 57);
                    echo "\" title=\"";
                    echo ($context["heading_title"] ?? null);
                    echo "\" class=\"elevatezoom-gallery\" data-image=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["image"], "thumb", [], "any", false, false, false, 57);
                    echo "\" data-zoom-image=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["image"], "popup", [], "any", false, false, false, 57);
                    echo "\"><img src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["image"], "thumb", [], "any", false, false, false, 57);
                    echo "\" title=\"";
                    echo ($context["heading_title"] ?? null);
                    echo "\" alt=\"";
                    echo ($context["heading_title"] ?? null);
                    echo "\" /></a>
          </div>
          </div>    
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 60
                echo "        
          </div>
        <span class=\"additional_default_width\" style=\"display:none; visibility:hidden\"></span>
        </div></div>
    ";
            }
            // line 64
            echo "         

  <!-- Webdigify Cloud-Zoom Image Effect End-->
    </div>
    ";
        }
        // line 69
        echo "        </div>
        </div>
        ";
        // line 71
        if ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 72
            echo "        ";
            $context["class"] = "col-sm-6 product-right";
            // line 73
            echo "        ";
        } else {
            // line 74
            echo "        ";
            $context["class"] = "col-sm-5 product-right";
            // line 75
            echo "        ";
        }
        // line 76
        echo "       
        <div class=\"";
        // line 77
        echo ($context["class"] ?? null);
        echo "\">
          
          <div class=\"product-detail-left\">
          <h3 class=\"product-title\">";
        // line 80
        echo ($context["heading_title"] ?? null);
        echo "</h3>
           ";
        // line 81
        if (($context["review_status"] ?? null)) {
            // line 82
            echo "          <div class=\"rating-wrapper\">
            ";
            // line 83
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, 5));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 84
                echo "              ";
                if ((($context["rating"] ?? null) < $context["i"])) {
                    // line 85
                    echo "                <span class=\"fa fa-stack\"><i class=\"fa fa-star off fa-stack-2x\"></i></span>
              ";
                } else {
                    // line 87
                    echo "                <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
              ";
                }
                // line 89
                echo "              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 90
            echo "              <a href=\"\" class=\"review-count\" onclick=\"\$('a[href=\\'#tab-review\\']').trigger('click'); return false;\">";
            echo ($context["reviews"] ?? null);
            echo "</a>  
              <a href=\"\" onclick=\"\$('a[href=\\'#tab-review\\']').trigger('click'); return false;\" class=\"write-review\"><i class=\"fa fa-pencil\"></i>";
            // line 91
            echo ($context["text_write"] ?? null);
            echo "</a>
          </div>
          ";
        }
        // line 94
        echo "            <div class=\"description\">
        <table class=\"product-description\">

            ";
        // line 97
        if (($context["manufacturer"] ?? null)) {
            // line 98
            echo "            <tr><td><span class=\"desc\">";
            echo ($context["text_manufacturer"] ?? null);
            echo "</span></td><td class=\"description-right\"><a href=\"";
            echo ($context["manufacturers"] ?? null);
            echo "\">";
            echo ($context["manufacturer"] ?? null);
            echo "</a></td></tr>
            ";
        }
        // line 100
        echo "            <tr><td><span class=\"desc\">";
        echo ($context["text_model"] ?? null);
        echo "</span></td><td  class=\"description-right\"> ";
        echo ($context["model"] ?? null);
        echo "</td></tr>
            ";
        // line 101
        if (($context["reward"] ?? null)) {
            // line 102
            echo "           <tr><td><span class=\"desc\">";
            echo ($context["text_reward"] ?? null);
            echo "</span> </td><td class=\"description-right\" >";
            echo ($context["reward"] ?? null);
            echo "</td></tr>
            ";
        }
        // line 104
        echo "            ";
        if (($context["sku"] ?? null)) {
            // line 105
            echo "           <tr><td><span class=\"desc\">SKU :</span> </td><td class=\"description-right\" >";
            echo ($context["sku"] ?? null);
            echo "</td></tr>
            ";
        }
        // line 107
        echo "             ";
        if ((($context["stock_qty"] ?? null) == "false")) {
            // line 108
            echo "           <tr><td><span class=\"desc\">";
            echo ($context["text_stock"] ?? null);
            echo "</span> </td><td class=\"description-right\" >
            <span style=\"color:#ff0000;\">";
            // line 109
            echo ($context["stock"] ?? null);
            echo "</span>
          </td></tr> ";
        }
        // line 111
        echo "    
          </table>
          ";
        // line 113
        if ((($context["stock_qty"] ?? null) == "true")) {
            // line 114
            echo "          \t<span class=\"stock_msg\" style=\"color:#228B22;\">";
            echo ($context["text_productavail"] ?? null);
            echo " : ";
            echo ($context["qty_stock"] ?? null);
            echo "</span>
          ";
        }
        // line 116
        echo "
      </div>
      

          ";
        // line 120
        if (($context["price"] ?? null)) {
            // line 121
            echo "          <ul class=\"list-unstyled\">
            ";
            // line 122
            if ( !($context["special"] ?? null)) {
                // line 123
                echo "            <li>
              <h4 class=\"special-price\"><span class=\"old-prices\">";
                // line 124
                echo ($context["price"] ?? null);
                echo "</span></h4>
            </li>
            ";
            } else {
                // line 127
                echo "            <li><h4 class=\"special-price\"><span class=\"new-prices\">";
                echo ($context["special"] ?? null);
                echo "</span></h4>
            \t<span class=\"old-price\" style=\"text-decoration: line-through;\"><span class=\"old-prices\">";
                // line 128
                echo ($context["price"] ?? null);
                echo "</span></span>
            \t<span class=\"discount-per\">&nbsp;&nbsp;";
                // line 129
                echo ($context["percentsaving"] ?? null);
                echo "% off</span>
            </li>
            ";
            }
            // line 132
            echo "            ";
            if (($context["tax"] ?? null)) {
                // line 133
                echo "            <li class=\"price-tax\">";
                echo ($context["text_tax"] ?? null);
                echo " <span class=\"product-tax\">";
                echo ($context["tax"] ?? null);
                echo "</span></li>
            ";
            }
            // line 135
            echo "            ";
            if (($context["points"] ?? null)) {
                // line 136
                echo "            <li class=\"rewardpoint\">";
                echo ($context["text_points"] ?? null);
                echo " ";
                echo ($context["points"] ?? null);
                echo "</li>
            ";
            }
            // line 138
            echo "            ";
            if (($context["discounts"] ?? null)) {
                // line 139
                echo "           
            ";
                // line 140
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["discounts"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["discount"]) {
                    // line 141
                    echo "            <li class=\"discount\">";
                    echo twig_get_attribute($this->env, $this->source, $context["discount"], "quantity", [], "any", false, false, false, 141);
                    echo ($context["text_discount"] ?? null);
                    echo twig_get_attribute($this->env, $this->source, $context["discount"], "price", [], "any", false, false, false, 141);
                    echo "</li>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['discount'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 143
                echo "            ";
            }
            // line 144
            echo "          </ul>
          ";
        }
        // line 146
        echo "          <div id=\"product\">
       ";
        // line 147
        if (($context["options"] ?? null)) {
            // line 148
            echo "            <h3 class=\"product-option\">";
            echo ($context["text_option"] ?? null);
            echo "</h3>
            ";
            // line 149
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["options"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                // line 150
                echo "            ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 150) == "select")) {
                    // line 151
                    echo "            <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 151)) {
                        echo " required";
                    }
                    echo "\">
              <label class=\"control-label\" for=\"input-option";
                    // line 152
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 152);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 152);
                    echo "</label>
              <select name=\"option[";
                    // line 153
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 153);
                    echo "]\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 153);
                    echo "\" class=\"form-control\">
                <option value=\"\">";
                    // line 154
                    echo ($context["text_select"] ?? null);
                    echo "</option>
                ";
                    // line 155
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 155));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 156
                        echo "                <option value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 156);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 156);
                        echo "
                ";
                        // line 157
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 157)) {
                            // line 158
                            echo "                (";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 158);
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 158);
                            echo ")
                ";
                        }
                        // line 159
                        echo " </option>
                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 161
                    echo "              </select>
            </div>
            ";
                }
                // line 164
                echo "            ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 164) == "radio")) {
                    // line 165
                    echo "            <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 165)) {
                        echo " required";
                    }
                    echo "\">
              <label class=\"control-label\">";
                    // line 166
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 166);
                    echo "</label>
              <div id=\"input-option";
                    // line 167
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 167);
                    echo "\"> ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 167));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 168
                        echo "                <div class=\"radio\">
                  <label>
                    <input type=\"radio\" name=\"option[";
                        // line 170
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 170);
                        echo "]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 170);
                        echo "\" />
                    ";
                        // line 171
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 171)) {
                            echo " <img src=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 171);
                            echo "\" alt=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 171);
                            echo " ";
                            if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 171)) {
                                echo " ";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 171);
                                echo " ";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 171);
                                echo " ";
                            }
                            echo "\" class=\"img-thumbnail\" /> ";
                        }
                        echo "                  
                    ";
                        // line 172
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 172);
                        echo "
                    ";
                        // line 173
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 173)) {
                            // line 174
                            echo "                    (";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 174);
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 174);
                            echo ")
                    ";
                        }
                        // line 175
                        echo " </label>
                </div>
                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 177
                    echo " </div>
            </div>
            ";
                }
                // line 180
                echo "            ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 180) == "checkbox")) {
                    // line 181
                    echo "            <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 181)) {
                        echo " required";
                    }
                    echo "\">
              <label class=\"control-label\">";
                    // line 182
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 182);
                    echo "</label>
              <div id=\"input-option";
                    // line 183
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 183);
                    echo "\"> ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 183));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 184
                        echo "                <div class=\"checkbox\">
                  <label>
                    <input type=\"checkbox\" name=\"option[";
                        // line 186
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 186);
                        echo "][]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 186);
                        echo "\" />
                    ";
                        // line 187
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 187)) {
                            echo " <img src=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 187);
                            echo "\" alt=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 187);
                            echo " ";
                            if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 187)) {
                                echo " ";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 187);
                                echo " ";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 187);
                                echo " ";
                            }
                            echo "\" class=\"img-thumbnail\" /> ";
                        }
                        // line 188
                        echo "                    ";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 188);
                        echo "
                    ";
                        // line 189
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 189)) {
                            // line 190
                            echo "                    (";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 190);
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 190);
                            echo ")
                    ";
                        }
                        // line 191
                        echo " </label>
                </div>
                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 193
                    echo " </div>
            </div>
            ";
                }
                // line 196
                echo "            ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 196) == "text")) {
                    // line 197
                    echo "            <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 197)) {
                        echo " required";
                    }
                    echo "\">
              <label class=\"control-label\" for=\"input-option";
                    // line 198
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 198);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 198);
                    echo "</label>
              <input type=\"text\" name=\"option[";
                    // line 199
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 199);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 199);
                    echo "\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 199);
                    echo "\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 199);
                    echo "\" class=\"form-control\" />
            </div>
            ";
                }
                // line 202
                echo "            ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 202) == "textarea")) {
                    // line 203
                    echo "            <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 203)) {
                        echo " required";
                    }
                    echo "\">
              <label class=\"control-label\" for=\"input-option";
                    // line 204
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 204);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 204);
                    echo "</label>
              <textarea name=\"option[";
                    // line 205
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 205);
                    echo "]\" rows=\"5\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 205);
                    echo "\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 205);
                    echo "\" class=\"form-control\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 205);
                    echo "</textarea>
            </div>
            ";
                }
                // line 208
                echo "            ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 208) == "file")) {
                    // line 209
                    echo "            <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 209)) {
                        echo " required";
                    }
                    echo "\">
              <label class=\"control-label\">";
                    // line 210
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 210);
                    echo "</label>
              <button type=\"button\" id=\"button-upload";
                    // line 211
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 211);
                    echo "\" data-loading-text=\"";
                    echo ($context["text_loading"] ?? null);
                    echo "\" class=\"btn btn-default btn-block\"><i class=\"fa fa-upload\"></i> ";
                    echo ($context["button_upload"] ?? null);
                    echo "</button>
              <input type=\"hidden\" name=\"option[";
                    // line 212
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 212);
                    echo "]\" value=\"\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 212);
                    echo "\" />
            </div>
            ";
                }
                // line 215
                echo "            ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 215) == "date")) {
                    // line 216
                    echo "            <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 216)) {
                        echo " required";
                    }
                    echo "\">
              <label class=\"control-label\" for=\"input-option";
                    // line 217
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 217);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 217);
                    echo "</label>
              <div class=\"input-group date\">
                <input type=\"text\" name=\"option[";
                    // line 219
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 219);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 219);
                    echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 219);
                    echo "\" class=\"form-control\" />
                <span class=\"input-group-btn\">
                <button class=\"btn btn-default\" type=\"button\"><i class=\"fa fa-calendar\"></i></button>
                </span></div>
            </div>
            ";
                }
                // line 225
                echo "            ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 225) == "datetime")) {
                    // line 226
                    echo "            <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 226)) {
                        echo " required";
                    }
                    echo "\">
              <label class=\"control-label\" for=\"input-option";
                    // line 227
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 227);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 227);
                    echo "</label>
              <div class=\"input-group datetime\">
                <input type=\"text\" name=\"option[";
                    // line 229
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 229);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 229);
                    echo "\" data-date-format=\"YYYY-MM-DD HH:mm\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 229);
                    echo "\" class=\"form-control\" />
                <span class=\"input-group-btn\">
                <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                </span></div>
            </div>
            ";
                }
                // line 235
                echo "            ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 235) == "time")) {
                    // line 236
                    echo "            <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 236)) {
                        echo " required";
                    }
                    echo "\">
              <label class=\"control-label\" for=\"input-option";
                    // line 237
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 237);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 237);
                    echo "</label>
              <div class=\"input-group time\">
                <input type=\"text\" name=\"option[";
                    // line 239
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 239);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 239);
                    echo "\" data-date-format=\"HH:mm\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 239);
                    echo "\" class=\"form-control\" />
                <span class=\"input-group-btn\">
                <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                </span></div>
            </div>
            ";
                }
                // line 245
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 246
            echo "            ";
        }
        // line 247
        echo "            ";
        if (($context["recurrings"] ?? null)) {
            // line 248
            echo "            <hr>
            <h3>";
            // line 249
            echo ($context["text_payment_recurring"] ?? null);
            echo "</h3>
            <div class=\"form-group required\">
              <select name=\"recurring_id\" class=\"form-control\">
                <option value=\"\">";
            // line 252
            echo ($context["text_select"] ?? null);
            echo "</option>
                ";
            // line 253
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["recurrings"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["recurring"]) {
                // line 254
                echo "                <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["recurring"], "recurring_id", [], "any", false, false, false, 254);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["recurring"], "name", [], "any", false, false, false, 254);
                echo "</option>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['recurring'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 256
            echo "              </select>
              <div class=\"help-block\" id=\"recurring-description\"></div>
            </div>
            ";
        }
        // line 260
        echo "            <div class=\"form-group qty\">
              ";
        // line 261
        if ((($context["stock_qty"] ?? null) == "true")) {
            echo " 
              <div class=\"col-lg-3 col-md-12 col-sm-12 col-xs-12 op-box qty-plus-minus\">
                  <button type=\"button\" class=\"form-control pull-left btn-number btnminus\" disabled=\"disabled\" data-type=\"minus\" data-field=\"quantity\"></button>
                ";
            // line 265
            echo "                 <input id=\"input-quantity\" type=\"text\" name=\"quantity\" value=\"";
            echo ($context["minimum"] ?? null);
            echo "\" size=\"2\" id=\"input-quantity\" class=\"form-control input-number pull-left\" />
                  <input type=\"hidden\" name=\"product_id\" value=\"";
            // line 266
            echo ($context["product_id"] ?? null);
            echo "\" />
                   <button type=\"button\" class=\"form-control pull-left btn-number btnplus\" data-type=\"plus\" data-field=\"quantity\"></button>
                   </div>
              <button type=\"button\" id=\"button-cart\" data-loading-text=\"";
            // line 269
            echo ($context["text_loading"] ?? null);
            echo "\" class=\"btn btn-primary btn-lg btn-block\">";
            echo ($context["button_cart"] ?? null);
            echo "</button>
              ";
        } else {
            // line 271
            echo "              <button type=\"button\" id=\"button\" data-loading-text=\"";
            echo ($context["text_loading"] ?? null);
            echo "\" class=\"btn btn-primary btn-lg btn-block disabled\">";
            echo ($context["text_outstock"] ?? null);
            echo "</button> 
              ";
        }
        // line 273
        echo "               <div class=\"btn-group prd_page\">

            <button type=\"button\" class=\"btn btn-default wishlist\" title=\"";
        // line 275
        echo ($context["button_wishlist"] ?? null);
        echo "\" onclick=\"wishlist.add('";
        echo ($context["product_id"] ?? null);
        echo "');\">";
        echo ($context["button_wishlist"] ?? null);
        echo "</button>
            <button type=\"button\" class=\"btn btn-default compare\" title=\"";
        // line 276
        echo ($context["button_compare"] ?? null);
        echo "\" onclick=\"compare.add('";
        echo ($context["product_id"] ?? null);
        echo "');\">";
        echo ($context["button_compare"] ?? null);
        echo "</button>
          </div>
          </div>
            
          ";
        // line 280
        if ((($context["minimum"] ?? null) > 1)) {
            // line 281
            echo "            <div class=\"alert alert-info\"><i class=\"fa fa-info-circle\"></i> ";
            echo ($context["text_minimum"] ?? null);
            echo "</div>
            ";
        }
        // line 283
        echo "            </div> </div>

           

           <hr>
       <!-- AddThis Button BEGIN -->
            <div class=\"addthis_toolbox addthis_default_style\" data-url=\"";
        // line 289
        echo ($context["share"] ?? null);
        echo "\"><a class=\"addthis_button_facebook_like\" fb:like:layout=\"button_count\"></a> <a class=\"addthis_button_tweet\"></a> <a class=\"addthis_button_pinterest_pinit\"></a> <a class=\"addthis_counter addthis_pill_style\"></a></div>
            <script type=\"text/javascript\" src=\"//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-515eeaf54693130e\"></script> 
            <!-- AddThis Button END --> 
           
            <div class=\"content_product_block\">";
        // line 293
        echo ($context["productblock"] ?? null);
        echo "</div>
           
      </div>
     
            </div>
            ";
        // line 300
        echo "      </div>
     
          
      ";
        // line 303
        if (($context["tags"] ?? null)) {
            // line 304
            echo "        <p>";
            echo ($context["text_tags"] ?? null);
            echo "
        ";
            // line 305
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(0, twig_length_filter($this->env, ($context["tags"] ?? null))));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 306
                echo "        ";
                if (($context["i"] < (twig_length_filter($this->env, ($context["tags"] ?? null)) - 1))) {
                    echo " <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["tags"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[$context["i"]] ?? null) : null), "href", [], "any", false, false, false, 306);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["tags"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[$context["i"]] ?? null) : null), "tag", [], "any", false, false, false, 306);
                    echo "</a>,
        ";
                } else {
                    // line 307
                    echo " <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["tags"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b[$context["i"]] ?? null) : null), "href", [], "any", false, false, false, 307);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = ($context["tags"] ?? null)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002[$context["i"]] ?? null) : null), "tag", [], "any", false, false, false, 307);
                    echo "</a> ";
                }
                // line 308
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo " </p>
        ";
        }
        // line 310
        echo "      ";
        echo ($context["content_bottom"] ?? null);
        echo "
    </div></div>
   
    ";
        // line 313
        echo ($context["column_right"] ?? null);
        echo "
    
     <!-- product page tab code start-->
     ";
        // line 316
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 317
            echo "         ";
            $context["class"] = "col-sm-6";
            // line 318
            echo "         ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 319
            echo "         ";
            $context["class"] = "col-sm-12";
            // line 320
            echo "         ";
        } else {
            // line 321
            echo "         ";
            $context["class"] = "col-sm-12";
            // line 322
            echo "        ";
        }
        // line 323
        echo "    <div id=\"tabs_info\" class=\"product-tab ";
        echo ($context["class"] ?? null);
        echo "\">
          <ul class=\"nav nav-tabs\">
            <li class=\"active\"><a href=\"#tab-description\" data-toggle=\"tab\">";
        // line 325
        echo ($context["tab_description"] ?? null);
        echo "</a></li>
            ";
        // line 326
        if (($context["attribute_groups"] ?? null)) {
            // line 327
            echo "            <li><a href=\"#tab-specification\" data-toggle=\"tab\">";
            echo ($context["tab_attribute"] ?? null);
            echo "</a></li>
            ";
        }
        // line 329
        echo "          </ul>
          <div class=\"tab-content\">
            <div class=\"tab-pane active\" id=\"tab-description\">";
        // line 331
        echo ($context["description"] ?? null);
        echo "</div>
            ";
        // line 332
        if (($context["attribute_groups"] ?? null)) {
            // line 333
            echo "            <div class=\"tab-pane\" id=\"tab-specification\">
              <table class=\"table table-bordered\">
                ";
            // line 335
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["attribute_groups"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["attribute_group"]) {
                // line 336
                echo "                <thead>
                  <tr>
                    <td colspan=\"2\"><strong>";
                // line 338
                echo twig_get_attribute($this->env, $this->source, $context["attribute_group"], "name", [], "any", false, false, false, 338);
                echo "</strong></td>
                  </tr>
                </thead>
                <tbody>
                ";
                // line 342
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["attribute_group"], "attribute", [], "any", false, false, false, 342));
                foreach ($context['_seq'] as $context["_key"] => $context["attribute"]) {
                    // line 343
                    echo "                <tr>
                  <td>";
                    // line 344
                    echo twig_get_attribute($this->env, $this->source, $context["attribute"], "name", [], "any", false, false, false, 344);
                    echo "</td>
                  <td>";
                    // line 345
                    echo twig_get_attribute($this->env, $this->source, $context["attribute"], "text", [], "any", false, false, false, 345);
                    echo "</td>
                </tr>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 348
                echo "                  </tbody>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute_group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 350
            echo "              </table>
            </div>
            ";
        }
        // line 353
        echo "            </div>
      </div>
      <div class=\"product-review\">

        ";
        // line 357
        if (($context["review_status"] ?? null)) {
            // line 358
            echo "        <a href=\"#tab-review\" data-toggle=\"tab\" class=\"box-heading\">";
            echo ($context["tab_review"] ?? null);
            echo "</a>
        ";
        }
        // line 360
        echo "        
      </div>
      ";
        // line 362
        if (($context["review_status"] ?? null)) {
            // line 363
            echo "            <div class=\"tab-pane\" id=\"tab-review\">
              <form class=\"form-horizontal\" id=\"form-review\">
                <div id=\"review\"></div>
                <div class=\"product-comment\">
                <h4>";
            // line 367
            echo ($context["text_write"] ?? null);
            echo "</h4>
                ";
            // line 368
            if (($context["review_guest"] ?? null)) {
                // line 369
                echo "                <div class=\"form-group required\">
                  <div class=\"col-sm-12\">
                    <label class=\"control-label\" for=\"input-name\">";
                // line 371
                echo ($context["entry_name"] ?? null);
                echo "</label>
                    <input type=\"text\" name=\"name\" value=\"";
                // line 372
                echo ($context["customer_name"] ?? null);
                echo "\" id=\"input-name\" class=\"form-control\" />
                  </div>
                </div>
                <div class=\"form-group required\">
                  <div class=\"col-sm-12\">
                    <label class=\"control-label\" for=\"input-review\">";
                // line 377
                echo ($context["entry_review"] ?? null);
                echo "</label>
                    <textarea name=\"text\" rows=\"5\" id=\"input-review\" class=\"form-control\"></textarea>
                    <div class=\"help-block\">";
                // line 379
                echo ($context["text_note"] ?? null);
                echo "</div>
                  </div>
                </div>
                <div class=\"form-group required\">
                  <div class=\"col-sm-12\">
                    <label class=\"control-label\">";
                // line 384
                echo ($context["entry_rating"] ?? null);
                echo "</label>
                    &nbsp;&nbsp;&nbsp; ";
                // line 385
                echo ($context["entry_bad"] ?? null);
                echo "&nbsp;
                    <input type=\"radio\" name=\"rating\" value=\"1\" />
                    &nbsp;
                    <input type=\"radio\" name=\"rating\" value=\"2\" />
                    &nbsp;
                    <input type=\"radio\" name=\"rating\" value=\"3\" />
                    &nbsp;
                    <input type=\"radio\" name=\"rating\" value=\"4\" />
                    &nbsp;
                    <input type=\"radio\" name=\"rating\" value=\"5\" />
                    &nbsp;";
                // line 395
                echo ($context["entry_good"] ?? null);
                echo "</div>
                </div>
                ";
                // line 397
                echo ($context["captcha"] ?? null);
                echo "
                <div class=\"buttons clearfix\">
                  <div class=\"pull-right\">
                    <button type=\"button\" id=\"button-review\" data-loading-text=\"";
                // line 400
                echo ($context["text_loading"] ?? null);
                echo "\" class=\"btn btn-primary\">";
                echo ($context["button_continue"] ?? null);
                echo "</button>
                  </div>
                </div></div>
                ";
            } else {
                // line 404
                echo "                ";
                echo ($context["text_login"] ?? null);
                echo "
                ";
            }
            // line 406
            echo "              </form>
            </div>
            ";
        }
        // line 409
        echo "            ";
        if (($context["products"] ?? null)) {
            // line 410
            echo "            <div class=\"box related_prd\">
              <div class=\"container\">
                <div class=\"row\">
            <div class=\"box-head\"> 
            <div class=\"title-wrapper\">
              <div class=\"box-heading\">";
            // line 415
            echo ($context["text_related"] ?? null);
            echo "</div>
            </div>
            
            </div>
            <div class=\"box-content\">
            <div id=\"products-related\" class=\"related-products\">
            
            ";
            // line 422
            $context["sliderFor"] = 5;
            // line 423
            echo "            ";
            $context["productCount"] = twig_length_filter($this->env, ($context["products"] ?? null));
            echo " 
            
            ";
            // line 425
            if ((($context["productCount"] ?? null) >= ($context["sliderFor"] ?? null))) {
                // line 426
                echo "             <div class=\"customNavigation\">
               <a class=\"fa prev fa-arrow-left\">&nbsp;</a>
               <a class=\"fa next fa-arrow-right\">&nbsp;</a>
             </div>  
            ";
            }
            // line 431
            echo "            
            <div class=\"box-product ";
            // line 432
            if ((($context["productCount"] ?? null) >= ($context["sliderFor"] ?? null))) {
                echo "product-carousel";
            } else {
                echo "productbox-grid";
            }
            echo "\" id=\"";
            if ((($context["productCount"] ?? null) >= ($context["sliderFor"] ?? null))) {
                echo "related-carousel";
            } else {
                echo "related-grid";
            }
            echo "\">
               ";
            // line 433
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 434
                echo "            <div class=\"";
                if ((($context["productCount"] ?? null) >= ($context["sliderFor"] ?? null))) {
                    echo "slider-item";
                } else {
                    echo "product-items";
                }
                echo "\">
              <div class=\"product-block product-thumb transition\">
                 <div class=\"product-block-inner\">     
            <div class=\"image ";
                // line 437
                if ((twig_get_attribute($this->env, $this->source, $context["product"], "qty", [], "any", false, false, false, 437) == 0)) {
                    echo "outstock";
                }
                echo "\">
            ";
                // line 438
                if (twig_get_attribute($this->env, $this->source, $context["product"], "thumb_swap", [], "any", false, false, false, 438)) {
                    // line 439
                    echo "            <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 439);
                    echo "\">
            <img src=\"";
                    // line 440
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 440);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 440);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 440);
                    echo "\" class=\"img-responsive reg-image\"/>
            <div class=\"image_content\"><img class=\"img-responsive hover-image\" src=\"";
                    // line 441
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb_swap", [], "any", false, false, false, 441);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 441);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 441);
                    echo "\"/>
            </div>
            </a>
            ";
                } else {
                    // line 445
                    echo "            <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 445);
                    echo "\">
            <img src=\"";
                    // line 446
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 446);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 446);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 446);
                    echo "\" class=\"img-responsive\"/></a>
            ";
                }
                // line 448
                echo "            
            ";
                // line 449
                if (twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 449)) {
                    // line 450
                    echo "            <span class=\"special-tag\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "percentsaving", [], "any", false, false, false, 450);
                    echo "%</span>
            ";
                }
                // line 452
                echo "            ";
                if ((twig_get_attribute($this->env, $this->source, $context["product"], "qty", [], "any", false, false, false, 452) == 0)) {
                    // line 453
                    echo "                   <span class=\"stock_status\">";
                    echo ($context["text_outstock"] ?? null);
                    echo "</span>
                 ";
                }
                // line 455
                echo "      
      \t<div class=\"product_hover_block\">
                 <div class=\"wishlist-button offer-btn\">
\t\t\t\t\t\t\t\t\t\t\t<button class=\"wishlist\" type=\"button\"  title=\"";
                // line 458
                echo ($context["button_wishlist"] ?? null);
                echo " \" onclick=\"wishlist.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 458);
                echo " ');\"></button>
\t\t\t\t\t\t\t\t\t\t</div>
              
                  <div class=\"compare-button offer-btn\">
                    <button class=\"compare_button\" type=\"button\"  title=\"";
                // line 462
                echo ($context["button_compare"] ?? null);
                echo " \" onclick=\"compare.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 462);
                echo " ');\">";
                echo ($context["button_compare"] ?? null);
                echo "</button>
                  </div>
                  <div class=\"quickview-button offer-btn\">
                    <a class=\"quickbox\"  title=\"";
                // line 465
                echo ($context["button_quickview"] ?? null);
                echo "\" href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "quick", [], "any", false, false, false, 465);
                echo "\">";
                echo ($context["button_quickview"] ?? null);
                echo "</a>
                  </div>
                </div>
                <div class=\"countdown\">
                  ";
                // line 469
                if (twig_get_attribute($this->env, $this->source, $context["product"], "specialTime", [], "any", false, false, false, 469)) {
                    // line 470
                    echo "                    <div class=\"count-down clock\">
                  <div data-countdown=\"";
                    // line 471
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "specialTime", [], "any", false, false, false, 471);
                    echo "\" class=\"countbox hastime\"></div>
                  </div>\t
                  ";
                }
                // line 474
                echo "                </div>\t
               
            </div>
            <div class=\"product-details\">
              <div class=\"caption\">
                  ";
                // line 480
                echo "                <span class=\"product-cat\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "catname", [], "any", false, false, false, 480);
                echo "</span>
                  
                <h4><a href=\"";
                // line 482
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 482);
                echo " \">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 482);
                echo " </a></h4> 
                
                ";
                // line 485
                echo "                  <div class=\"rating\">
                    ";
                // line 486
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 487
                    echo "                    ";
                    if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 487) < $context["i"])) {
                        // line 488
                        echo "                    <span class=\"fa fa-stack\"><i class=\"fa fa-star off fa-stack-2x\"></i></span>
                    ";
                    } else {
                        // line 490
                        echo "                    <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
                    ";
                    }
                    // line 492
                    echo "                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 493
                echo "                    ";
                // line 494
                echo "                  </div>
                ";
                // line 495
                echo "   

                ";
                // line 497
                if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 497)) {
                    // line 498
                    echo "                  <p class=\"price\">
                  ";
                    // line 499
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 499)) {
                        // line 500
                        echo "                  ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 500);
                        echo "
                  ";
                    } else {
                        // line 502
                        echo "                  <span class=\"price-new\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 502);
                        echo "</span> <span class=\"price-old\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 502);
                        echo "</span>
                  ";
                    }
                    // line 504
                    echo "                  ";
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 504)) {
                        // line 505
                        echo "                  <span class=\"price-tax\">";
                        echo ($context["text_tax"] ?? null);
                        echo " ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 505);
                        echo "</span>
                  ";
                    }
                    // line 507
                    echo "                  </p>
                ";
                }
                // line 509
                echo "
                <div class=\"action\">
                  ";
                // line 511
                if ((twig_get_attribute($this->env, $this->source, $context["product"], "qty", [], "any", false, false, false, 511) > 0)) {
                    // line 512
                    echo "                    <button type=\"button\" class=\"cart_button\" onclick=\"cart.add('";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 512);
                    echo "');\" title=\"";
                    echo ($context["button_cart"] ?? null);
                    echo "\" >";
                    echo ($context["button_cart"] ?? null);
                    echo "</button>
                    ";
                } else {
                    // line 514
                    echo "                    <button type=\"button\" class=\"cart_button out_of_stock\" title=\"";
                    echo ($context["text_outstock"] ?? null);
                    echo "\" >";
                    echo ($context["text_outstock"] ?? null);
                    echo "</button>
                  ";
                }
                // line 516
                echo "                </div>\t
                
              </div>\t
            </div>
            
            </div>
             </div>
            </div>
            
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 526
            echo "            </div>
            <span class=\"related_default_width\" style=\"display:none; visibility:hidden\"></span>
            </div>
            </div>
            </div>
            </div>
            </div>
            ";
        }
        // line 534
        echo "    </div>
  </div>
<script type=\"text/javascript\">
\$('select[name=\\'recurring_id\\'], input[name=\"quantity\"]').change(function(){
  \$.ajax({
    url: 'index.php?route=product/product/getRecurringDescription',
    type: 'post',
    data: \$('input[name=\\'product_id\\'], input[name=\\'quantity\\'], select[name=\\'recurring_id\\']'),
    dataType: 'json',
    beforeSend: function() {
      \$('#recurring-description').html('');
    },
    success: function(json) {
      \$('.alert-dismissible, .text-danger').remove();

      if (json['success']) {
        \$('#recurring-description').html(json['success']);
      }
    }
  });
});
</script> 
<script type=\"text/javascript\">
\$('#button-cart').on('click', function() {
  \$.ajax({
    url: 'index.php?route=checkout/cart/add',
    type: 'post',
    data: \$('#product input[type=\\'text\\'], #product input[type=\\'hidden\\'], #product input[type=\\'radio\\']:checked, #product input[type=\\'checkbox\\']:checked, #product select, #product textarea'),
    dataType: 'json',
    beforeSend: function() {
      \$('#button-cart').button('loading');
    },
    complete: function() {
      \$('#button-cart').button('reset');
    },
    success: function(json) {
      \$('.alert-dismissible, .text-danger').remove();
      \$('.form-group').removeClass('has-error');

      if (json['error']) {
        if (json['error']['option']) {
          for (i in json['error']['option']) {
            var element = \$('#input-option' + i.replace('_', '-'));

            if (element.parent().hasClass('input-group')) {
              element.parent().before('<div class=\"text-danger\">' + json['error']['option'][i] + '</div>');
            } else {
              element.before('<div class=\"text-danger\">' + json['error']['option'][i] + '</div>');
            }
          }
        }

        if (json['error']['recurring']) {
          \$('select[name=\\'recurring_id\\']').after('<div class=\"text-danger\">' + json['error']['recurring'] + '</div>');
        }

        // Highlight any found errors
        \$('.text-danger').parent().addClass('has-error');
      }

      if (json['success']) {
        \$.notify({
          message: json['success'],
          target: '_blank'
        },{
          // settings
          element: 'body',
          position: null,
          type: \"info\",
          allow_dismiss: true,
          newest_on_top: false,
          placement: {
            from: \"top\",
            align: \"center\"
          },
          offset: 0,
          spacing: 10,
          z_index: 2031,
          delay: 5000,
          timer: 1000,
          url_target: '_blank',
          mouse_over: null,
          animate: {
            enter: 'animated fadeInDown',
            exit: 'animated fadeOutUp'
          },
          onShow: null,
          onShown: null,
          onClose: null,
          onClosed: null,
          icon_type: 'class',
          template: '<div data-notify=\"container\" class=\"col-xs-11 col-sm-3 alert alert-success\" role=\"alert\">' +
            '<button type=\"button\" aria-hidden=\"true\" class=\"close\" data-notify=\"dismiss\">&nbsp;&times;</button>' +
            '<span data-notify=\"message\"><i class=\"fa fa-check-circle\"></i>&nbsp; {2}</span>' +
            '<div class=\"progress\" data-notify=\"progressbar\">' +
              '<div class=\"progress-bar progress-bar-success\" role=\"progressbar\" aria-valuenow=\"0\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 0%;\"></div>' +
            '</div>' +
            '<a href=\"{3}\" target=\"{4}\" data-notify=\"url\"></a>' +
          '</div>' 
        });

        \$('#cart > button').html('<div class=\"cart_detail\"><div class=\"cart_image\"></div><span id=\"cart-total\"> ' + json['total'] + '</span>'  + '</div>');

        //\$('html, body').animate({ scrollTop: 0 }, 'slow');

        \$('#cart > ul').load('index.php?route=common/cart/info ul li');
      }
    },
        error: function(xhr, ajaxOptions, thrownError) {
            alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
  });
});
</script> 
<script type=\"text/javascript\">
\$('.date').datetimepicker({
  language: '";
        // line 650
        echo ($context["datepicker"] ?? null);
        echo "',
  pickTime: false
});

\$('.datetime').datetimepicker({
  language: '";
        // line 655
        echo ($context["datepicker"] ?? null);
        echo "',
  pickDate: true,
  pickTime: true
});

\$('.time').datetimepicker({
  language: '";
        // line 661
        echo ($context["datepicker"] ?? null);
        echo "',
  pickDate: false
});

\$('button[id^=\\'button-upload\\']').on('click', function() {
  var node = this;

  \$('#form-upload').remove();

  \$('body').prepend('<form enctype=\"multipart/form-data\" id=\"form-upload\" style=\"display: none;\"><input type=\"file\" name=\"file\" /></form>');

  \$('#form-upload input[name=\\'file\\']').trigger('click');

  if (typeof timer != 'undefined') {
      clearInterval(timer);
  }

  timer = setInterval(function() {
    if (\$('#form-upload input[name=\\'file\\']').val() != '') {
      clearInterval(timer);

      \$.ajax({
        url: 'index.php?route=tool/upload',
        type: 'post',
        dataType: 'json',
        data: new FormData(\$('#form-upload')[0]),
        cache: false,
        contentType: false,
        processData: false,
        beforeSend: function() {
          \$(node).button('loading');
        },
        complete: function() {
          \$(node).button('reset');
        },
        success: function(json) {
          \$('.text-danger').remove();

          if (json['error']) {
            \$(node).parent().find('input').after('<div class=\"text-danger\">' + json['error'] + '</div>');
          }

          if (json['success']) {
            alert(json['success']);

            \$(node).parent().find('input').val(json['code']);
          }
        },
        error: function(xhr, ajaxOptions, thrownError) {
          alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
      });
    }
  }, 500);
});
</script> 
<script type=\"text/javascript\">
\$('#review').delegate('.pagination a', 'click', function(e) {
    e.preventDefault();

    \$('#review').fadeOut('slow');

    \$('#review').load(this.href);

    \$('#review').fadeIn('slow');
});

\$('#review').load('index.php?route=product/product/review&product_id=";
        // line 728
        echo ($context["product_id"] ?? null);
        echo "');

\$('#button-review').on('click', function() {
  \$.ajax({
    url: 'index.php?route=product/product/write&product_id=";
        // line 732
        echo ($context["product_id"] ?? null);
        echo "',
    type: 'post',
    dataType: 'json',
    data: \$(\"#form-review\").serialize(),
    beforeSend: function() {
      \$('#button-review').button('loading');
    },
    complete: function() {
      \$('#button-review').button('reset');
    },
    success: function(json) {
      \$('.alert-dismissible').remove();

      if (json['error']) {
        \$('#review').after('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error'] + '</div>');
      }

      if (json['success']) {
        \$('#review').after('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ' + json['success'] + '</div>');

        \$('input[name=\\'name\\']').val('');
        \$('textarea[name=\\'text\\']').val('');
        \$('input[name=\\'rating\\']:checked').prop('checked', false);
      }
    }
  });
});

//\$(document).ready(function() {
//  \$('.thumbnails').magnificPopup({
//    type:'image',
//    delegate: 'a',
//    gallery: {
//      enabled: true
//    }
//  });
//});


\$(document).ready(function() {
  var ramswaroop = new URLSearchParams(window.location.search);
  var tarun = ramswaroop.has('review');
  if (tarun == true) {
    setTimeout(function(){ 
      \$('html, body').animate({scrollTop: \$('#tabs_info').offset().top}, 'slow'); 
      \$('a[href=\\'#tab-review\\']').trigger('click');
    }, 1000);
    return false;
  }
});

\$(document).ready(function() {
if (\$(window).width() > 767) {
    \$(\"#tmzoom\").elevateZoom({
        
        gallery:'additional-carousel',
        //inner zoom         
                 
        zoomType : \"inner\", 
        cursor: \"crosshair\" 
        
        /*//tint
        
        tint:true, 
        tintColour:'#F90', 
        tintOpacity:0.5
        
        //lens zoom
        
        zoomType : \"lens\", 
        lensShape : \"round\", 
        lensSize : 200 
        
        //Mousewheel zoom
        
        scrollZoom : true*/
        
        
      });
    var z_index = 0;
                  
                  \$(document).on('click', '.thumbnail', function () {
                    \$('.thumbnails').magnificPopup('open', z_index);
                    return false;
                  });
              
                  \$('.additional-carousel a').click(function() {
                    var smallImage = \$(this).attr('data-image');
                    var largeImage = \$(this).attr('data-zoom-image');
                    var ez =   \$('#tmzoom').data('elevateZoom');  
                    \$('.thumbnail').attr('href', largeImage);  
                    ez.swaptheimage(smallImage, largeImage); 
                    z_index = \$(this).index('.additional-carousel a');
                    return false;
                  });
      
  }else{
    \$(document).on('click', '.thumbnail', function () {
    \$('.thumbnails').magnificPopup('open', 0);
    return false;
    });
  }
});
\$(document).ready(function() {     
  \$('.thumbnails').magnificPopup({
    delegate: 'a.elevatezoom-gallery',
    type: 'image',
    tLoading: 'Loading image #%curr%...',
    mainClass: 'mfp-with-zoom',
    gallery: {
      enabled: true,
      navigateByImgClick: true,
      preload: [0,1] // Will preload 0 - before current, and 1 after the current image
    },
    image: {
      tError: '<a href=\"%url%\">The image #%curr%</a> could not be loaded.',
      titleSrc: function(item) {
        return item.el.attr('title');
      }
    }
  });
});

\$('#custom_tab a').tabs();
 \$('#tabs a').tabs();

</script>
<!--for product quantity plus minus-->
<script type=\"text/javascript\">
    //plugin bootstrap minus and plus
    \$(document).ready(function() {
    \$('.btn-number').click(function(e){
    e.preventDefault();
    var fieldName = \$(this).attr('data-field');
    var type = \$(this).attr('data-type');
    var input = \$(\"input[name='\" + fieldName + \"']\");
    var currentVal = parseInt(input.val());
    if (!isNaN(currentVal)) {
    if (type == 'minus') {
    var minValue = parseInt(input.attr('min'));
    if (!minValue) minValue = 1;
    if (currentVal > minValue) {
    input.val(currentVal - 1).change();
    }
    if (parseInt(input.val()) == minValue) {
    \$(this).attr('disabled', true);
    }

    } else if (type == 'plus') {
    var maxValue = parseInt(input.attr('max'));
    if (!maxValue) maxValue = 999;
    if (currentVal < maxValue) {
    input.val(currentVal + 1).change();
    }
    if (parseInt(input.val()) == maxValue) {
    \$(this).attr('disabled', true);
    }

    }
    } else {
    input.val(0);
    }
    });
    \$('.input-number').focusin(function(){
    \$(this).data('oldValue', \$(this).val());
    });
    \$('.input-number').change(function() {

    var minValue = parseInt(\$(this).attr('min'));
    var maxValue = parseInt(\$(this).attr('max'));
    if (!minValue) minValue = 1;
    if (!maxValue) maxValue = 999;
    var valueCurrent = parseInt(\$(this).val());
    var name = \$(this).attr('name');
    if (valueCurrent >= minValue) {
    \$(\".btn-number[data-type='minus'][data-field='\" + name + \"']\").removeAttr('disabled')
    } else {
    alert('Sorry, the minimum value was reached');
    \$(this).val(\$(this).data('oldValue'));
    }
    if (valueCurrent <= maxValue) {
    \$(\".btn-number[data-type='plus'][data-field='\" + name + \"']\").removeAttr('disabled')
    } else {
    alert('Sorry, the maximum value was reached');
    \$(this).val(\$(this).data('oldValue'));
    }
    });
    \$(\".input-number\").keydown(function (e) {
    // Allow: backspace, delete, tab, escape, enter and .
    if (\$.inArray(e.keyCode, [46, 8, 9, 27, 13, 190]) !== - 1 ||
            // Allow: Ctrl+A
                    (e.keyCode == 65 && e.ctrlKey === true) ||
                    // Allow: home, end, left, right
                            (e.keyCode >= 35 && e.keyCode <= 39)) {
            // let it happen, don't do anything
            return;
            }
            // Ensure that it is a number and stop the keypress
            if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
            e.preventDefault();
            }
            });
    });
</script>


";
        // line 938
        if ((array_key_exists("update_price_status", $context) && ($context["update_price_status"] ?? null))) {
            // line 939
            echo "          
          <script type=\"text/javascript\">
          
            \$(\"#product input[type='checkbox']\").click(function() {
              changePrice();
            });
            
            \$(\"#product input[type='radio']\").click(function() {
              changePrice();
            });
            
            \$(\"#product select\").change(function() {
              changePrice();
            });
            
            \$(\"#input-quantity\").keyup(function() {
              changePrice();
            });
            
            function changePrice() {
              \$.ajax({
                url: 'index.php?route=product/product/updatePrice&product_id=";
            // line 960
            echo ($context["product_id"] ?? null);
            echo "',
                type: 'post',
                dataType: 'json',
                data: \$('#product input[name=\\'quantity\\'], #product select, #product input[type=\\'checkbox\\']:checked, #product input[type=\\'radio\\']:checked'),
                beforeSend: function() {
                  
                },
                complete: function() {
                  
                },
                success: function(json) {
                  \$('.alert-success, .alert-danger').remove();
                  
                  if(json['new_price_found']) {
                    \$('.new-prices').html(json['total_price']);
                    \$('.product-tax').html(json['tax_price']);
                  } else {
                    \$('.old-prices').html(json['total_price']);
                    \$('.product-tax').html(json['tax_price']);
                  }
                }
              });
            }
          </script>
          
        ";
        }
        // line 986
        echo " 
";
        // line 987
        echo ($context["footer"] ?? null);
        echo " 
";
    }

    public function getTemplateName()
    {
        return "Grocery/template/product/product.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  2055 => 987,  2052 => 986,  2023 => 960,  2000 => 939,  1998 => 938,  1789 => 732,  1782 => 728,  1712 => 661,  1703 => 655,  1695 => 650,  1577 => 534,  1567 => 526,  1552 => 516,  1544 => 514,  1534 => 512,  1532 => 511,  1528 => 509,  1524 => 507,  1516 => 505,  1513 => 504,  1505 => 502,  1499 => 500,  1497 => 499,  1494 => 498,  1492 => 497,  1488 => 495,  1485 => 494,  1483 => 493,  1477 => 492,  1473 => 490,  1469 => 488,  1466 => 487,  1462 => 486,  1459 => 485,  1452 => 482,  1446 => 480,  1439 => 474,  1433 => 471,  1430 => 470,  1428 => 469,  1417 => 465,  1407 => 462,  1398 => 458,  1393 => 455,  1387 => 453,  1384 => 452,  1378 => 450,  1376 => 449,  1373 => 448,  1364 => 446,  1359 => 445,  1348 => 441,  1340 => 440,  1335 => 439,  1333 => 438,  1327 => 437,  1316 => 434,  1312 => 433,  1298 => 432,  1295 => 431,  1288 => 426,  1286 => 425,  1280 => 423,  1278 => 422,  1268 => 415,  1261 => 410,  1258 => 409,  1253 => 406,  1247 => 404,  1238 => 400,  1232 => 397,  1227 => 395,  1214 => 385,  1210 => 384,  1202 => 379,  1197 => 377,  1189 => 372,  1185 => 371,  1181 => 369,  1179 => 368,  1175 => 367,  1169 => 363,  1167 => 362,  1163 => 360,  1157 => 358,  1155 => 357,  1149 => 353,  1144 => 350,  1137 => 348,  1128 => 345,  1124 => 344,  1121 => 343,  1117 => 342,  1110 => 338,  1106 => 336,  1102 => 335,  1098 => 333,  1096 => 332,  1092 => 331,  1088 => 329,  1082 => 327,  1080 => 326,  1076 => 325,  1070 => 323,  1067 => 322,  1064 => 321,  1061 => 320,  1058 => 319,  1055 => 318,  1052 => 317,  1050 => 316,  1044 => 313,  1037 => 310,  1028 => 308,  1021 => 307,  1011 => 306,  1007 => 305,  1002 => 304,  1000 => 303,  995 => 300,  987 => 293,  980 => 289,  972 => 283,  966 => 281,  964 => 280,  953 => 276,  945 => 275,  941 => 273,  933 => 271,  926 => 269,  920 => 266,  915 => 265,  909 => 261,  906 => 260,  900 => 256,  889 => 254,  885 => 253,  881 => 252,  875 => 249,  872 => 248,  869 => 247,  866 => 246,  860 => 245,  847 => 239,  840 => 237,  833 => 236,  830 => 235,  817 => 229,  810 => 227,  803 => 226,  800 => 225,  787 => 219,  780 => 217,  773 => 216,  770 => 215,  762 => 212,  754 => 211,  750 => 210,  743 => 209,  740 => 208,  728 => 205,  722 => 204,  715 => 203,  712 => 202,  700 => 199,  694 => 198,  687 => 197,  684 => 196,  679 => 193,  671 => 191,  664 => 190,  662 => 189,  657 => 188,  641 => 187,  635 => 186,  631 => 184,  625 => 183,  621 => 182,  614 => 181,  611 => 180,  606 => 177,  598 => 175,  591 => 174,  589 => 173,  585 => 172,  567 => 171,  561 => 170,  557 => 168,  551 => 167,  547 => 166,  540 => 165,  537 => 164,  532 => 161,  525 => 159,  518 => 158,  516 => 157,  509 => 156,  505 => 155,  501 => 154,  495 => 153,  489 => 152,  482 => 151,  479 => 150,  475 => 149,  470 => 148,  468 => 147,  465 => 146,  461 => 144,  458 => 143,  447 => 141,  443 => 140,  440 => 139,  437 => 138,  429 => 136,  426 => 135,  418 => 133,  415 => 132,  409 => 129,  405 => 128,  400 => 127,  394 => 124,  391 => 123,  389 => 122,  386 => 121,  384 => 120,  378 => 116,  370 => 114,  368 => 113,  364 => 111,  359 => 109,  354 => 108,  351 => 107,  345 => 105,  342 => 104,  334 => 102,  332 => 101,  325 => 100,  315 => 98,  313 => 97,  308 => 94,  302 => 91,  297 => 90,  291 => 89,  287 => 87,  283 => 85,  280 => 84,  276 => 83,  273 => 82,  271 => 81,  267 => 80,  261 => 77,  258 => 76,  255 => 75,  252 => 74,  249 => 73,  246 => 72,  244 => 71,  240 => 69,  233 => 64,  226 => 60,  204 => 57,  200 => 55,  196 => 54,  177 => 50,  168 => 46,  165 => 45,  157 => 40,  155 => 39,  148 => 36,  145 => 35,  142 => 34,  127 => 32,  122 => 30,  119 => 29,  117 => 28,  111 => 26,  108 => 25,  105 => 24,  102 => 23,  99 => 22,  97 => 21,  91 => 18,  88 => 17,  77 => 15,  73 => 14,  67 => 12,  64 => 11,  61 => 10,  58 => 9,  55 => 8,  52 => 7,  49 => 6,  47 => 5,  43 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Grocery/template/product/product.twig", "");
    }
}
