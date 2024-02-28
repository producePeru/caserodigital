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

/* Grocery/template/product/search.twig */
class __TwigTemplate_fef1a6360a494b3ba98cc530982dd140b466ab318d30207b537d0d18864ad639 extends \Twig\Template
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
<div id=\"product-search\" class=\"container\">
  <ul class=\"breadcrumb\">
     ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 5
            echo "    <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 5);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 5);
            echo "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "  </ul>
  <div class=\"row\">";
        // line 8
        echo ($context["column_left"] ?? null);
        echo "
    ";
        // line 9
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 10
            echo "    ";
            $context["class"] = "col-sm-6";
            // line 11
            echo "    ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 12
            echo "    ";
            $context["class"] = "col-sm-9";
            // line 13
            echo "    ";
        } else {
            // line 14
            echo "    ";
            $context["class"] = "col-sm-12";
            // line 15
            echo "    ";
        }
        // line 16
        echo "    <div id=\"content\" class=\"";
        echo ($context["class"] ?? null);
        echo "\">";
        echo ($context["content_top"] ?? null);
        echo "
      <h2 class=\"page-title\">";
        // line 17
        echo ($context["heading_title"] ?? null);
        echo "</h2>
      <label class=\"control-label \" for=\"input-search\">";
        // line 18
        echo ($context["entry_search"] ?? null);
        echo "</label>
      <div class=\"row\">
        <div class=\"col-sm-4 search_term\">
          <input type=\"text\" name=\"search\" value=\"";
        // line 21
        echo ($context["search"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["text_keyword"] ?? null);
        echo "\" id=\"input-search\" class=\"form-control\" />
        </div>
        <div class=\"col-sm-3 sort category_dropdown\">
          <select name=\"category_id\" class=\"form-control\">
            <option value=\"0\">";
        // line 25
        echo ($context["text_category"] ?? null);
        echo "</option>
            ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category_1"]) {
            // line 27
            echo "            ";
            if ((twig_get_attribute($this->env, $this->source, $context["category_1"], "category_id", [], "any", false, false, false, 27) == ($context["category_id"] ?? null))) {
                // line 28
                echo "            <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["category_1"], "category_id", [], "any", false, false, false, 28);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["category_1"], "name", [], "any", false, false, false, 28);
                echo "</option>
            ";
            } else {
                // line 30
                echo "            <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["category_1"], "category_id", [], "any", false, false, false, 30);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["category_1"], "name", [], "any", false, false, false, 30);
                echo "</option>
            ";
            }
            // line 32
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["category_1"], "children", [], "any", false, false, false, 32));
            foreach ($context['_seq'] as $context["_key"] => $context["category_2"]) {
                // line 33
                echo "            ";
                if ((twig_get_attribute($this->env, $this->source, $context["category_2"], "category_id", [], "any", false, false, false, 33) == ($context["category_id"] ?? null))) {
                    // line 34
                    echo "            <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["category_2"], "category_id", [], "any", false, false, false, 34);
                    echo "\" selected=\"selected\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                    echo twig_get_attribute($this->env, $this->source, $context["category_2"], "name", [], "any", false, false, false, 34);
                    echo "</option>
            ";
                } else {
                    // line 36
                    echo "            <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["category_2"], "category_id", [], "any", false, false, false, 36);
                    echo "\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                    echo twig_get_attribute($this->env, $this->source, $context["category_2"], "name", [], "any", false, false, false, 36);
                    echo "</option>
            ";
                }
                // line 38
                echo "            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["category_2"], "children", [], "any", false, false, false, 38));
                foreach ($context['_seq'] as $context["_key"] => $context["category_3"]) {
                    // line 39
                    echo "            ";
                    if ((twig_get_attribute($this->env, $this->source, $context["category_3"], "category_id", [], "any", false, false, false, 39) == ($context["category_id"] ?? null))) {
                        // line 40
                        echo "            <option value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["category_3"], "category_id", [], "any", false, false, false, 40);
                        echo "\" selected=\"selected\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                        echo twig_get_attribute($this->env, $this->source, $context["category_3"], "name", [], "any", false, false, false, 40);
                        echo "</option>
            ";
                    } else {
                        // line 42
                        echo "            <option value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["category_3"], "category_id", [], "any", false, false, false, 42);
                        echo "\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                        echo twig_get_attribute($this->env, $this->source, $context["category_3"], "name", [], "any", false, false, false, 42);
                        echo "</option>
            ";
                    }
                    // line 44
                    echo "            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category_3'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 45
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category_2'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 46
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category_1'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "          </select>
        </div>
        <div class=\"col-sm-3 search_subcategory\">
          <label class=\"checkbox-inline\">
           ";
        // line 51
        if (($context["sub_category"] ?? null)) {
            // line 52
            echo "            <input type=\"checkbox\" name=\"sub_category\" value=\"1\" checked=\"checked\" />
            ";
        } else {
            // line 54
            echo "            <input type=\"checkbox\" name=\"sub_category\" value=\"1\" />
            ";
        }
        // line 56
        echo "            ";
        echo ($context["text_sub_category"] ?? null);
        echo "</label>
        </div>
      </div>
      <p>
          <label class=\"checkbox-inline\">
          ";
        // line 61
        if (($context["description"] ?? null)) {
            // line 62
            echo "          <input type=\"checkbox\" name=\"description\" value=\"1\" id=\"description\" checked=\"checked\" />
          ";
        } else {
            // line 64
            echo "          <input type=\"checkbox\" name=\"description\" value=\"1\" id=\"description\" />
          ";
        }
        // line 66
        echo "          ";
        echo ($context["entry_description"] ?? null);
        echo "</label>
      </p>
      <input type=\"button\" value=\"";
        // line 68
        echo ($context["button_search"] ?? null);
        echo "\" id=\"button-search\" class=\"btn btn-primary\" />
      <h3>";
        // line 69
        echo ($context["text_search"] ?? null);
        echo "</h3>
      ";
        // line 70
        if (($context["products"] ?? null)) {
            // line 71
            echo "      <div class=\"category_filter\">
        <div class=\"col-md-4 btn-list-grid\">
          <div class=\"btn-group\">
             <button type=\"button\" id=\"grid-view\" class=\"btn btn-default grid\" title=\"";
            // line 74
            echo ($context["button_grid"] ?? null);
            echo "\"><i class=\"fa fa-th\"></i></button>
            <button type=\"button\" id=\"list-view\" class=\"btn btn-default list\"  title=\"";
            // line 75
            echo ($context["button_list"] ?? null);
            echo "\"><i class=\"fa fa-th-list\"></i></button>
          </div>
        </div>
    <div class=\"compare-total\"><a href=\"";
            // line 78
            echo ($context["compare"] ?? null);
            echo "\" id=\"compare-total\">";
            echo ($context["text_compare"] ?? null);
            echo "</a></div>
    <div class=\"pagination-right\">
     <div class=\"sort-by-wrapper\">
      <div class=\"col-md-2 text-right sort-by\">
        <label class=\"control-label\" for=\"input-sort\">";
            // line 82
            echo ($context["text_sort"] ?? null);
            echo "</label>
      </div>
      <div class=\"col-md-3 text-right sort\">
        <select id=\"input-sort\" class=\"form-control\" onchange=\"location = this.value;\">
        ";
            // line 86
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["sorts"]);
            foreach ($context['_seq'] as $context["_key"] => $context["sorts"]) {
                echo " 
        ";
                // line 87
                if ((twig_get_attribute($this->env, $this->source, $context["sorts"], "value", [], "any", false, false, false, 87) == sprintf("%s-%s", ($context["sort"] ?? null), ($context["order"] ?? null)))) {
                    // line 88
                    echo "        <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "href", [], "any", false, false, false, 88);
                    echo " \" selected=\"selected\">";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "text", [], "any", false, false, false, 88);
                    echo "</option>
        ";
                } else {
                    // line 90
                    echo "        <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "href", [], "any", false, false, false, 90);
                    echo " \">";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "text", [], "any", false, false, false, 90);
                    echo " </option>
         ";
                }
                // line 92
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sorts'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 93
            echo "        </select>
      </div>
     </div>
     <div class=\"show-wrapper\">
      <div class=\"col-md-1 text-right show\">
        <label class=\"control-label\" for=\"input-limit\">";
            // line 98
            echo ($context["text_limit"] ?? null);
            echo "</label>
      </div>
      <div class=\"col-md-2 text-right limit\">
        <select id=\"input-limit\" class=\"form-control\" onchange=\"location = this.value;\">
        ";
            // line 102
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["limits"]);
            foreach ($context['_seq'] as $context["_key"] => $context["limits"]) {
                // line 103
                echo "        ";
                if ((twig_get_attribute($this->env, $this->source, $context["limits"], "value", [], "any", false, false, false, 103) == ($context["limit"] ?? null))) {
                    // line 104
                    echo "        <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["limits"], "href", [], "any", false, false, false, 104);
                    echo " \" selected=\"selected\">";
                    echo twig_get_attribute($this->env, $this->source, $context["limits"], "text", [], "any", false, false, false, 104);
                    echo "</option>
        ";
                } else {
                    // line 106
                    echo "        <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["limits"], "href", [], "any", false, false, false, 106);
                    echo " \">";
                    echo twig_get_attribute($this->env, $this->source, $context["limits"], "text", [], "any", false, false, false, 106);
                    echo " </option>
        ";
                }
                // line 108
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['limits'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 109
            echo "        </select>
      </div>
    </div>
      </div>
    </div>
    <div class=\"row\">
        ";
            // line 115
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 116
                echo "        <div class=\"product-layout product-list col-xs-12\">
          <div class=\"product-block product-thumb\">
         <div class=\"product-block-inner\">
      <div class=\"image ";
                // line 119
                if ((twig_get_attribute($this->env, $this->source, $context["product"], "qty", [], "any", false, false, false, 119) == 0)) {
                    echo "outstock";
                }
                echo "\">
        ";
                // line 120
                if (twig_get_attribute($this->env, $this->source, $context["product"], "thumb_swap", [], "any", false, false, false, 120)) {
                    // line 121
                    echo "      <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 121);
                    echo "\">
      <img src=\"";
                    // line 122
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 122);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 122);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 122);
                    echo "\" class=\"img-responsive reg-image\"/>
      <div class=\"image_content\"><img class=\"img-responsive hover-image\" src=\"";
                    // line 123
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb_swap", [], "any", false, false, false, 123);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 123);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 123);
                    echo "\"/></div>
      </a>
      ";
                } else {
                    // line 126
                    echo "      <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 126);
                    echo "\">
      <img src=\"";
                    // line 127
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 127);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 127);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 127);
                    echo "\" class=\"img-responsive\"/></a>
      ";
                }
                // line 129
                echo "       
              ";
                // line 130
                if (twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 130)) {
                    // line 131
                    echo "                <span class=\"special-tag\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "percentsaving", [], "any", false, false, false, 131);
                    echo "%</span>
              ";
                }
                // line 133
                echo "
              ";
                // line 134
                if ((twig_get_attribute($this->env, $this->source, $context["product"], "qty", [], "any", false, false, false, 134) == 0)) {
                    // line 135
                    echo "                <span class=\"stock_status\">";
                    echo ($context["text_outstock"] ?? null);
                    echo "</span>
              ";
                }
                // line 136
                echo "   

             <div class=\"product_hover_block\">
                <div class=\"wishlist-button offer-btn\">
                  <button class=\"wishlist\" type=\"button\"  title=\"";
                // line 140
                echo ($context["button_wishlist"] ?? null);
                echo " \" onclick=\"wishlist.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 140);
                echo " ');\"></button>
                </div>
                <div class=\"compare-button offer-btn\">
                  <button class=\"compare_button\" type=\"button\"  title=\"";
                // line 143
                echo ($context["button_compare"] ?? null);
                echo " \" onclick=\"compare.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 143);
                echo " ');\">";
                echo ($context["button_compare"] ?? null);
                echo "</button>
                </div>
                <div class=\"quickview-button offer-btn\">
                  <a class=\"quickbox\"  title=\"";
                // line 146
                echo ($context["button_quickview"] ?? null);
                echo "\" href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "quick", [], "any", false, false, false, 146);
                echo "\">";
                echo ($context["button_quickview"] ?? null);
                echo "</a>
                </div>
              </div>  
              <div class=\"countdown\">
                ";
                // line 150
                if (twig_get_attribute($this->env, $this->source, $context["product"], "specialTime", [], "any", false, false, false, 150)) {
                    // line 151
                    echo "                  <div class=\"count-down clock\">
                <div data-countdown=\"";
                    // line 152
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "specialTime", [], "any", false, false, false, 152);
                    echo "\" class=\"countbox hastime\"></div>
                </div>\t
                ";
                }
                // line 155
                echo "              </div>\t
               
            </div>   
            <div class=\"product-details\">
              <div class=\"caption\">
                ";
                // line 162
                echo "               <span class=\"product-cat\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "catname", [], "any", false, false, false, 162);
                echo "</span> 
               <h4><a href=\"";
                // line 163
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 163);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 163);
                echo "</a></h4>
               
              ";
                // line 166
                echo "                <div class=\"rating\">
                ";
                // line 167
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 168
                    echo "                ";
                    if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 168) < $context["i"])) {
                        // line 169
                        echo "                <span class=\"fa fa-stack\"><i class=\"fa fa-star off fa-stack-2x\"></i></span>
                ";
                    } else {
                        // line 171
                        echo "                <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
                ";
                    }
                    // line 173
                    echo "                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 174
                echo "                ";
                // line 175
                echo "                </div>
              ";
                // line 176
                echo "   

              <p class=\"description\">";
                // line 178
                echo twig_get_attribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 178);
                echo "</p>
     
              ";
                // line 180
                if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 180)) {
                    // line 181
                    echo "              <p class=\"price\">
                ";
                    // line 182
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 182)) {
                        // line 183
                        echo "                ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 183);
                        echo "
              ";
                    } else {
                        // line 185
                        echo "              <span class=\"price-new\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 185);
                        echo "</span> <span class=\"price-old\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 185);
                        echo "</span>
              ";
                    }
                    // line 187
                    echo "              </p>
              ";
                }
                // line 189
                echo "
              <div class=\"countdown\">
                ";
                // line 191
                if (twig_get_attribute($this->env, $this->source, $context["product"], "specialTime", [], "any", false, false, false, 191)) {
                    // line 192
                    echo "                  <div class=\"count-down clock\">
                <div data-countdown=\"";
                    // line 193
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "specialTime", [], "any", false, false, false, 193);
                    echo "\" class=\"countbox hastime\"></div>
                </div>\t
                ";
                }
                // line 196
                echo "              </div>\t

              <div class=\"product_hover_block\">
                <div class=\"action\">
                  ";
                // line 200
                if ((twig_get_attribute($this->env, $this->source, $context["product"], "qty", [], "any", false, false, false, 200) > 0)) {
                    // line 201
                    echo "                 <button type=\"button\" class=\"cart_button\" onclick=\"cart.add('";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 201);
                    echo "');\" title=\"";
                    echo ($context["button_cart"] ?? null);
                    echo "\" >";
                    echo ($context["button_cart"] ?? null);
                    echo "</button>
                 ";
                } else {
                    // line 203
                    echo "                     <button type=\"button\" class=\"cart_button out_of_stock\" title=\"";
                    echo ($context["text_outstock"] ?? null);
                    echo "\" >";
                    echo ($context["text_outstock"] ?? null);
                    echo "</button>
                 ";
                }
                // line 205
                echo "                </div>
                <div class=\"wishlist-button offer-btn\">
                  <button class=\"wishlist\" type=\"button\"  title=\"";
                // line 207
                echo ($context["button_wishlist"] ?? null);
                echo " \" onclick=\"wishlist.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 207);
                echo " ');\"></button>
                </div>
                <div class=\"compare-button offer-btn\">
                  <button class=\"compare_button\" type=\"button\"  title=\"";
                // line 210
                echo ($context["button_compare"] ?? null);
                echo " \" onclick=\"compare.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 210);
                echo " ');\">";
                echo ($context["button_compare"] ?? null);
                echo "</button>
                </div>
                <div class=\"quickview-button offer-btn\">
                  <a class=\"quickbox\"  title=\"";
                // line 213
                echo ($context["button_quickview"] ?? null);
                echo "\" href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "quick", [], "any", false, false, false, 213);
                echo "\">";
                echo ($context["button_quickview"] ?? null);
                echo "</a>
                </div>
              </div>

               <div class=\"action\">
                  ";
                // line 218
                if ((twig_get_attribute($this->env, $this->source, $context["product"], "qty", [], "any", false, false, false, 218) > 0)) {
                    // line 219
                    echo "                    <button type=\"button\" class=\"cart_button\" onclick=\"cart.add('";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 219);
                    echo "');\" title=\"";
                    echo ($context["button_cart"] ?? null);
                    echo "\" >";
                    echo ($context["button_cart"] ?? null);
                    echo "</button>
                  ";
                } else {
                    // line 221
                    echo "                    <button type=\"button\" class=\"cart_button out_of_stock\" title=\"";
                    echo ($context["text_outstock"] ?? null);
                    echo "\" >";
                    echo ($context["text_outstock"] ?? null);
                    echo "</button>
                  ";
                }
                // line 223
                echo "                </div>
           
            
              </div>
            </div>
      </div>
          </div>
        </div>
        <script> 
            \$('.total-review";
                // line 232
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 232);
                echo "').on('click', function() { 
             var t='";
                // line 233
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 233);
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
            // line 240
            echo "</div>
       <div class=\"pagination-wrapper\">
      <div class=\"col-sm-6 text-left page-link\">";
            // line 242
            echo ($context["pagination"] ?? null);
            echo "</div>
      <div class=\"col-sm-6 text-right page-result\">";
            // line 243
            echo ($context["results"] ?? null);
            echo "</div>
     </div>  
      ";
        } else {
            // line 246
            echo "      <p>";
            echo ($context["text_empty"] ?? null);
            echo "</p>
      ";
        }
        // line 248
        echo "      ";
        echo ($context["content_bottom"] ?? null);
        echo "</div>
    ";
        // line 249
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>
";
        // line 251
        echo ($context["footer"] ?? null);
        echo "
<script>//<!--
\$('#button-search').bind('click', function() {
  url = 'index.php?route=product/search';
  
  var search = \$('#content input[name=\\'search\\']').prop('value');
  
  if (search) {
    url += '&search=' + encodeURIComponent(search);
  }

  var category_id = \$('#content select[name=\\'category_id\\']').prop('value');
  
  if (category_id > 0) {
    url += '&category_id=' + encodeURIComponent(category_id);
  }
  
  var sub_category = \$('#content input[name=\\'sub_category\\']:checked').prop('value');
  
  if (sub_category) {
    url += '&sub_category=true';
  }
    
  var filter_description = \$('#content input[name=\\'description\\']:checked').prop('value');
  
  if (filter_description) {
    url += '&description=true';
  }

  location = url;
});

\$('#content input[name=\\'search\\']').bind('keydown', function(e) {
  if (e.keyCode == 13) {
    \$('#button-search').trigger('click');
  }
});

\$('select[name=\\'category_id\\']').on('change', function() {
  if (this.value == '0') {
    \$('input[name=\\'sub_category\\']').prop('disabled', true);
  } else {
    \$('input[name=\\'sub_category\\']').prop('disabled', false);
  }
});

\$('select[name=\\'category_id\\']').trigger('change');
//--></script>";
    }

    public function getTemplateName()
    {
        return "Grocery/template/product/search.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  725 => 251,  720 => 249,  715 => 248,  709 => 246,  703 => 243,  699 => 242,  695 => 240,  681 => 233,  677 => 232,  666 => 223,  658 => 221,  648 => 219,  646 => 218,  634 => 213,  624 => 210,  616 => 207,  612 => 205,  604 => 203,  594 => 201,  592 => 200,  586 => 196,  580 => 193,  577 => 192,  575 => 191,  571 => 189,  567 => 187,  559 => 185,  553 => 183,  551 => 182,  548 => 181,  546 => 180,  541 => 178,  537 => 176,  534 => 175,  532 => 174,  526 => 173,  522 => 171,  518 => 169,  515 => 168,  511 => 167,  508 => 166,  501 => 163,  496 => 162,  489 => 155,  483 => 152,  480 => 151,  478 => 150,  467 => 146,  457 => 143,  449 => 140,  443 => 136,  437 => 135,  435 => 134,  432 => 133,  426 => 131,  424 => 130,  421 => 129,  412 => 127,  407 => 126,  397 => 123,  389 => 122,  384 => 121,  382 => 120,  376 => 119,  371 => 116,  367 => 115,  359 => 109,  353 => 108,  345 => 106,  337 => 104,  334 => 103,  330 => 102,  323 => 98,  316 => 93,  310 => 92,  302 => 90,  294 => 88,  292 => 87,  286 => 86,  279 => 82,  270 => 78,  264 => 75,  260 => 74,  255 => 71,  253 => 70,  249 => 69,  245 => 68,  239 => 66,  235 => 64,  231 => 62,  229 => 61,  220 => 56,  216 => 54,  212 => 52,  210 => 51,  204 => 47,  198 => 46,  192 => 45,  186 => 44,  178 => 42,  170 => 40,  167 => 39,  162 => 38,  154 => 36,  146 => 34,  143 => 33,  138 => 32,  130 => 30,  122 => 28,  119 => 27,  115 => 26,  111 => 25,  102 => 21,  96 => 18,  92 => 17,  85 => 16,  82 => 15,  79 => 14,  76 => 13,  73 => 12,  70 => 11,  67 => 10,  65 => 9,  61 => 8,  58 => 7,  47 => 5,  43 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Grocery/template/product/search.twig", "");
    }
}
