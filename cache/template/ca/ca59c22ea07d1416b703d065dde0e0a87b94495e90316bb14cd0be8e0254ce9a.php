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

/* Grocery/template/product/category.twig */
class __TwigTemplate_2992479887bfa73dae0d3f2dcc268e7bde3d1e5c52e6665c27902e27a0fd2703 extends \Twig\Template
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
<div id=\"product-special\" class=\"container\">
  <div class=\"row\">";
        // line 3
        echo ($context["column_left"] ?? null);
        echo "
    ";
        // line 4
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 5
            echo "    ";
            $context["class"] = "col-sm-6";
            // line 6
            echo "    ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 7
            echo "    ";
            $context["class"] = "col-sm-9";
            // line 8
            echo "    ";
        } else {
            // line 9
            echo "    ";
            $context["class"] = "col-sm-12";
            // line 10
            echo "    ";
        }
        // line 11
        echo "    <div id=\"content\" class=\"";
        echo ($context["class"] ?? null);
        echo "\">
      <ul class=\"breadcrumb\">
    ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 14
            echo "    <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 14);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 14);
            echo "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "  </ul>
      ";
        // line 17
        echo ($context["content_top"] ?? null);
        echo "
     
\t     
      ";
        // line 20
        if ((($context["thumb"] ?? null) || ($context["description"] ?? null))) {
            echo " 
      <div class=\"block-category\">
      <div class=\"row category_thumb\">
          ";
            // line 26
            echo "          

          <div class=\"col-sm-9 category_details\">
            <h2 class=\"page-title\">";
            // line 29
            echo ($context["heading_title"] ?? null);
            echo "</h2>
            ";
            // line 30
            if (($context["description"] ?? null)) {
                // line 31
                echo "            <div class=\"category_description\">";
                echo ($context["description"] ?? null);
                echo "</div>
            ";
            }
            // line 33
            echo "            ";
            if (($context["categories"] ?? null)) {
                // line 34
                echo "            <div class=\"col-sm-12 title-description\">
              <h3 class=\"refine-search\">";
                // line 35
                echo ($context["text_refine"] ?? null);
                echo "</h3>
              <div class=\"category_list\">
              <ul>
                ";
                // line 38
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                    // line 39
                    echo "                    <div class=\"category-item\">
                    ";
                    // line 40
                    if (twig_get_attribute($this->env, $this->source, $context["category"], "img", [], "any", false, false, false, 40)) {
                        // line 41
                        echo "                      <div class=\"category_img\"><a href=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 41);
                        echo "\"><img src=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["category"], "img", [], "any", false, false, false, 41);
                        echo "\" data-rel=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["category"], "img", [], "any", false, false, false, 41);
                        echo "\" alt=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 41);
                        echo "\" title=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 41);
                        echo "\" class=\"img-thumbnail\"  /></a></div>
                      ";
                    }
                    // line 43
                    echo "                    
                    <a href=\"";
                    // line 44
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 44);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 44);
                    echo "</a>
                    </div>   
                  ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 47
                echo "                </ul>
              </div>
            </div>
          ";
            }
            // line 51
            echo "          </div>
        </div>
         
      </div>
      ";
        }
        // line 56
        echo "
      ";
        // line 57
        if (($context["products"] ?? null)) {
            // line 58
            echo "      <div class=\"category_filter\">
        <div class=\"col-md-4 btn-list-grid\">
          <div class=\"btn-group\">
             <button type=\"button\" id=\"grid-view\" class=\"btn btn-default grid\"  title=\"";
            // line 61
            echo ($context["button_grid"] ?? null);
            echo "\"><i class=\"fa fa-th\"></i></button>
            <button type=\"button\" id=\"list-view\" class=\"btn btn-default list\" title=\"";
            // line 62
            echo ($context["button_list"] ?? null);
            echo "\"><i class=\"fa fa-th-list\"></i></button>
           
          </div>
        </div>
    <div class=\"compare-total\"><a href=\"";
            // line 66
            echo ($context["compare"] ?? null);
            echo "\" id=\"compare-total\">";
            echo ($context["text_compare"] ?? null);
            echo "</a></div>
    <div class=\"pagination-right\">
     <div class=\"sort-by-wrapper\">
      <div class=\"col-md-2 text-right sort-by\">
        <label class=\"control-label\" for=\"input-sort\">";
            // line 70
            echo ($context["text_sort"] ?? null);
            echo "</label>
      </div>
      <div class=\"col-md-3 text-right sort\">
        <select id=\"input-sort\" class=\"form-control\" onchange=\"location = this.value;\">
        ";
            // line 74
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["sorts"]);
            foreach ($context['_seq'] as $context["_key"] => $context["sorts"]) {
                echo " 
        ";
                // line 75
                if ((twig_get_attribute($this->env, $this->source, $context["sorts"], "value", [], "any", false, false, false, 75) == sprintf("%s-%s", ($context["sort"] ?? null), ($context["order"] ?? null)))) {
                    // line 76
                    echo "        <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "href", [], "any", false, false, false, 76);
                    echo " \" selected=\"selected\">";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "text", [], "any", false, false, false, 76);
                    echo "</option>
        ";
                } else {
                    // line 78
                    echo "        <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "href", [], "any", false, false, false, 78);
                    echo " \">";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "text", [], "any", false, false, false, 78);
                    echo " </option>
         ";
                }
                // line 80
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sorts'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 81
            echo "        </select>
      </div>
     </div>
     <div class=\"show-wrapper\">
      <div class=\"col-md-1 text-right show\">
        <label class=\"control-label\" for=\"input-limit\">";
            // line 86
            echo ($context["text_limit"] ?? null);
            echo "</label>
      </div>
      <div class=\"col-md-2 text-right limit\">
        <select id=\"input-limit\" class=\"form-control\" onchange=\"location = this.value;\">
        ";
            // line 90
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["limits"]);
            foreach ($context['_seq'] as $context["_key"] => $context["limits"]) {
                // line 91
                echo "        ";
                if ((twig_get_attribute($this->env, $this->source, $context["limits"], "value", [], "any", false, false, false, 91) == ($context["limit"] ?? null))) {
                    // line 92
                    echo "        <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["limits"], "href", [], "any", false, false, false, 92);
                    echo " \" selected=\"selected\">";
                    echo twig_get_attribute($this->env, $this->source, $context["limits"], "text", [], "any", false, false, false, 92);
                    echo "</option>
        ";
                } else {
                    // line 94
                    echo "        <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["limits"], "href", [], "any", false, false, false, 94);
                    echo " \">";
                    echo twig_get_attribute($this->env, $this->source, $context["limits"], "text", [], "any", false, false, false, 94);
                    echo " </option>
        ";
                }
                // line 96
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['limits'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 97
            echo "        </select>
      </div>
    </div>
      </div>
    </div>
    <div class=\"row cat_prod\">
     <div class=\"category_prod\">
        ";
            // line 104
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 105
                echo "        
        <div class=\"product-layout product-list col-xs-12\">
          <div class=\"product-block product-thumb\">
            <div class=\"product-block-inner\">
              <div class=\"image ";
                // line 109
                if ((twig_get_attribute($this->env, $this->source, $context["product"], "qty", [], "any", false, false, false, 109) == 0)) {
                    echo "outstock";
                }
                echo "\">
                ";
                // line 110
                if (twig_get_attribute($this->env, $this->source, $context["product"], "thumb_swap", [], "any", false, false, false, 110)) {
                    // line 111
                    echo "                  <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 111);
                    echo "\">
                  <img src=\"";
                    // line 112
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 112);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 112);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 112);
                    echo "\" class=\"img-responsive reg-image\"/>
                  <div class=\"image_content\"><img class=\"img-responsive hover-image\" src=\"";
                    // line 113
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb_swap", [], "any", false, false, false, 113);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 113);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 113);
                    echo "\"/></div>
                  </a>
                ";
                } else {
                    // line 116
                    echo "                  <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 116);
                    echo "\">
                  <img src=\"";
                    // line 117
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 117);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 117);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 117);
                    echo "\" class=\"img-responsive\"/></a>
                ";
                }
                // line 119
                echo "                  
                ";
                // line 120
                if (twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 120)) {
                    // line 121
                    echo "                  <span class=\"special-tag\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "percentsaving", [], "any", false, false, false, 121);
                    echo "%</span>
                ";
                }
                // line 123
                echo "                ";
                if ((twig_get_attribute($this->env, $this->source, $context["product"], "qty", [], "any", false, false, false, 123) == 0)) {
                    // line 124
                    echo "                  <span class=\"stock_status\">";
                    echo ($context["text_outstock"] ?? null);
                    echo "</span>
                ";
                }
                // line 125
                echo "     
                
                 <div class=\"product_hover_block\">
                <div class=\"wishlist-button offer-btn\">
                  <button class=\"wishlist\" type=\"button\"  title=\"";
                // line 129
                echo ($context["button_wishlist"] ?? null);
                echo " \" onclick=\"wishlist.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 129);
                echo " ');\"></button>
                </div>
                  <div class=\"compare-button offer-btn\">
                    <button class=\"compare_button\" type=\"button\"  title=\"";
                // line 132
                echo ($context["button_compare"] ?? null);
                echo " \" onclick=\"compare.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 132);
                echo " ');\">";
                echo ($context["button_compare"] ?? null);
                echo "</button>
                  </div>
                  <div class=\"quickview-button offer-btn\">
                    <a class=\"quickbox\"  title=\"";
                // line 135
                echo ($context["button_quickview"] ?? null);
                echo "\" href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "quick", [], "any", false, false, false, 135);
                echo "\">";
                echo ($context["button_quickview"] ?? null);
                echo "</a>
                  </div>
                </div>            \t
                <div class=\"countdown\">
                  ";
                // line 139
                if (twig_get_attribute($this->env, $this->source, $context["product"], "specialTime", [], "any", false, false, false, 139)) {
                    // line 140
                    echo "                    <div class=\"count-down clock\">
                  <div data-countdown=\"";
                    // line 141
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "specialTime", [], "any", false, false, false, 141);
                    echo "\" class=\"countbox hastime\"></div>
                  </div>\t
                  ";
                }
                // line 144
                echo "                </div>\t
              </div>
              <div class=\"product-details\">
                <div class=\"caption\">
                  ";
                // line 149
                echo "                  ";
                // line 150
                echo "                  <h4><a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 150);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 150);
                echo "</a></h4>
                  
                  ";
                // line 153
                echo "                    <div class=\"rating\">
                    ";
                // line 154
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 155
                    echo "                    ";
                    if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 155) < $context["i"])) {
                        // line 156
                        echo "                    <span class=\"fa fa-stack\"><i class=\"fa fa-star off fa-stack-2x\"></i></span>
                    ";
                    } else {
                        // line 158
                        echo "                    <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
                    ";
                    }
                    // line 160
                    echo "                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 161
                echo "                    ";
                // line 162
                echo "                    </div>
                  ";
                // line 163
                echo "   
                  
                  <p class=\"description\">";
                // line 165
                echo twig_get_attribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 165);
                echo "</p>
                
                  ";
                // line 167
                if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 167)) {
                    // line 168
                    echo "                    <p class=\"price\">
                      ";
                    // line 169
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 169)) {
                        // line 170
                        echo "                        ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 170);
                        echo "
                      ";
                    } else {
                        // line 172
                        echo "                        <span class=\"price-new\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 172);
                        echo "</span> <span class=\"price-old\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 172);
                        echo "</span>
                      ";
                    }
                    // line 174
                    echo "                    </p>
                  ";
                }
                // line 176
                echo "            
                  <div class=\"countdown\">
                    ";
                // line 178
                if (twig_get_attribute($this->env, $this->source, $context["product"], "specialTime", [], "any", false, false, false, 178)) {
                    // line 179
                    echo "                      <div class=\"count-down clock\">
                    <div data-countdown=\"";
                    // line 180
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "specialTime", [], "any", false, false, false, 180);
                    echo "\" class=\"countbox hastime\"></div>
                    </div>\t
                    ";
                }
                // line 183
                echo "                  </div>\t
                
                  <div class=\"product_hover_block\">
                    <div class=\"action\">
                      ";
                // line 187
                if ((twig_get_attribute($this->env, $this->source, $context["product"], "qty", [], "any", false, false, false, 187) > 0)) {
                    // line 188
                    echo "                    <button type=\"button\" class=\"cart_button\" onclick=\"cart.add('";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 188);
                    echo "');\" title=\"";
                    echo ($context["button_cart"] ?? null);
                    echo "\" >";
                    echo ($context["button_cart"] ?? null);
                    echo "</button>
                    ";
                } else {
                    // line 190
                    echo "                        <button type=\"button\" class=\"cart_button out_of_stock\" title=\"";
                    echo ($context["text_outstock"] ?? null);
                    echo "\" >";
                    echo ($context["text_outstock"] ?? null);
                    echo "</button>
                    ";
                }
                // line 192
                echo "                    </div>
                    <div class=\"wishlist-button offer-btn\">
                      <button class=\"wishlist\" type=\"button\"  title=\"";
                // line 194
                echo ($context["button_wishlist"] ?? null);
                echo " \" onclick=\"wishlist.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 194);
                echo " ');\"></button>
                    </div>
                    <div class=\"compare-button offer-btn\">
                      <button class=\"compare_button\" type=\"button\"  title=\"";
                // line 197
                echo ($context["button_compare"] ?? null);
                echo " \" onclick=\"compare.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 197);
                echo " ');\">";
                echo ($context["button_compare"] ?? null);
                echo "</button>
                    </div>
                    <div class=\"quickview-button offer-btn\">
                      <a class=\"quickbox\"  title=\"";
                // line 200
                echo ($context["button_quickview"] ?? null);
                echo "\" href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "quick", [], "any", false, false, false, 200);
                echo "\">";
                echo ($context["button_quickview"] ?? null);
                echo "</a>
                    </div>
                  </div>

                   <div class=\"action\">
                    ";
                // line 205
                if ((twig_get_attribute($this->env, $this->source, $context["product"], "qty", [], "any", false, false, false, 205) > 0)) {
                    // line 206
                    echo "                  <button type=\"button\" class=\"cart_button\" onclick=\"cart.add('";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 206);
                    echo "');\" title=\"";
                    echo ($context["button_cart"] ?? null);
                    echo "\" >";
                    echo ($context["button_cart"] ?? null);
                    echo "</button>
                  ";
                } else {
                    // line 208
                    echo "                      <button type=\"button\" class=\"cart_button out_of_stock\" title=\"";
                    echo ($context["text_outstock"] ?? null);
                    echo "\" >";
                    echo ($context["text_outstock"] ?? null);
                    echo "</button>
                  ";
                }
                // line 210
                echo "                  </div>
                
                </div>
              </div> 
            </div>
          </div>
        </div>
       
        <script> 
            \$('.total-review";
                // line 219
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 219);
                echo "').on('click', function() { 
             var t='";
                // line 220
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 220);
                echo "'; 
            const parseResult = new DOMParser().parseFromString(t, \"text/html\");
            const parsedUrl = parseResult.documentElement.textContent;
            window.location.href = parsedUrl + '&review';
            return false;
          });
      </script>
  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 227
            echo "</div> </div>
      <div class=\"pagination-wrapper\">
        <div class=\"col-sm-6 text-right page-result\">";
            // line 229
            echo ($context["results"] ?? null);
            echo "</div>  
      <div class=\"col-sm-6 text-left page-link\">";
            // line 230
            echo ($context["pagination"] ?? null);
            echo "</div>
      
     </div>     
      ";
        } else {
            // line 234
            echo "      <p>";
            echo ($context["text_empty"] ?? null);
            echo "</p>
      <div class=\"buttons\">
        <div class=\"pull-right\"><a href=\"";
            // line 236
            echo ($context["continue"] ?? null);
            echo "\" class=\"btn btn-primary\">";
            echo ($context["button_continue"] ?? null);
            echo "</a></div>
      </div>
      ";
        }
        // line 239
        echo "      ";
        echo ($context["content_bottom"] ?? null);
        echo "</div>
      ";
        // line 240
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>
</div>
</div>
";
        // line 244
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "Grocery/template/product/category.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  665 => 244,  658 => 240,  653 => 239,  645 => 236,  639 => 234,  632 => 230,  628 => 229,  624 => 227,  610 => 220,  606 => 219,  595 => 210,  587 => 208,  577 => 206,  575 => 205,  563 => 200,  553 => 197,  545 => 194,  541 => 192,  533 => 190,  523 => 188,  521 => 187,  515 => 183,  509 => 180,  506 => 179,  504 => 178,  500 => 176,  496 => 174,  488 => 172,  482 => 170,  480 => 169,  477 => 168,  475 => 167,  470 => 165,  466 => 163,  463 => 162,  461 => 161,  455 => 160,  451 => 158,  447 => 156,  444 => 155,  440 => 154,  437 => 153,  429 => 150,  427 => 149,  421 => 144,  415 => 141,  412 => 140,  410 => 139,  399 => 135,  389 => 132,  381 => 129,  375 => 125,  369 => 124,  366 => 123,  360 => 121,  358 => 120,  355 => 119,  346 => 117,  341 => 116,  331 => 113,  323 => 112,  318 => 111,  316 => 110,  310 => 109,  304 => 105,  300 => 104,  291 => 97,  285 => 96,  277 => 94,  269 => 92,  266 => 91,  262 => 90,  255 => 86,  248 => 81,  242 => 80,  234 => 78,  226 => 76,  224 => 75,  218 => 74,  211 => 70,  202 => 66,  195 => 62,  191 => 61,  186 => 58,  184 => 57,  181 => 56,  174 => 51,  168 => 47,  157 => 44,  154 => 43,  140 => 41,  138 => 40,  135 => 39,  131 => 38,  125 => 35,  122 => 34,  119 => 33,  113 => 31,  111 => 30,  107 => 29,  102 => 26,  96 => 20,  90 => 17,  87 => 16,  76 => 14,  72 => 13,  66 => 11,  63 => 10,  60 => 9,  57 => 8,  54 => 7,  51 => 6,  48 => 5,  46 => 4,  42 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Grocery/template/product/category.twig", "");
    }
}
