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

/* Grocery/template/extension/module/latest.twig */
class __TwigTemplate_809d597e47ba39c7f19228dbea5f9bde8afa0de916fc449381d46bca6065af5f extends \Twig\Template
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
        echo "<div class=\"box latest\">
\t<div class=\"container-fluid\">
\t\t<div class=\"row\">
  <div class=\"box-heading\">";
        // line 4
        echo ($context["heading_title"] ?? null);
        echo "</div>
  <div class=\"box-content\">
\t\t";
        // line 6
        $context["sliderFor"] = 5;
        // line 7
        echo "\t\t";
        $context["productCount"] = twig_length_filter($this->env, ($context["products"] ?? null));
        // line 8
        echo "\t";
        if ((($context["productCount"] ?? null) >= ($context["sliderFor"] ?? null))) {
            // line 9
            echo "\t\t<div class=\"customNavigation\">
\t\t\t<a class=\"fa prev fa-arrow-left\">&nbsp;</a>
\t\t\t<a class=\"fa next fa-arrow-right\">&nbsp;</a>
\t\t</div>\t
\t";
        }
        // line 14
        echo "\t
\t<div class=\"box-product ";
        // line 15
        if ((($context["productCount"] ?? null) >= ($context["sliderFor"] ?? null))) {
            echo "product-carousel";
        } else {
            echo " productbox-grid";
        }
        echo "\" id=\"";
        if ((($context["productCount"] ?? null) >= ($context["sliderFor"] ?? null))) {
            echo "latest-carousel";
        } else {
            echo " latest-grid";
        }
        echo "\">
  ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 17
            echo "  <div class=\"";
            if ((($context["productCount"] ?? null) >= ($context["sliderFor"] ?? null))) {
                echo "slider-item";
            } else {
                echo "product-items";
            }
            echo "\">
    <div class=\"product-block product-thumb transition\">
\t  <div class=\"product-block-inner\">\t  \t
\t\t\t<div class=\"image\">
\t\t\t";
            // line 21
            if (twig_get_attribute($this->env, $this->source, $context["product"], "thumb_swap", [], "any", false, false, false, 21)) {
                // line 22
                echo "\t\t\t\t\t<a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 22);
                echo "\">
\t\t\t\t\t<img src=\"";
                // line 23
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 23);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 23);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 23);
                echo "\" class=\"img-responsive reg-image\"/>
\t\t\t\t\t<div class=\"image_content\"><img class=\"img-responsive hover-image\" src=\"";
                // line 24
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb_swap", [], "any", false, false, false, 24);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 24);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 24);
                echo "\"/></div>
\t\t\t\t\t</a>
\t\t\t\t\t";
            } else {
                // line 27
                echo "\t\t\t\t\t<a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 27);
                echo "\">
\t\t\t\t\t<img src=\"";
                // line 28
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 28);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 28);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 28);
                echo "\" class=\"img-responsive\"/></a>
\t\t\t";
            }
            // line 30
            echo "\t\t\t\t
\t\t\t<div class=\"product_hover_block\">
\t\t\t<div class=\"action\">
\t\t\t   <button type=\"button\" class=\"cart_button\" onclick=\"cart.add('";
            // line 33
            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 33);
            echo " ');\" title=\"";
            echo ($context["button_cart"] ?? null);
            echo "\" ><i class=\"fa fa-shopping-cart\" area-hidden=\"true\"></i> </button>
\t\t\t\t <div class=\"quickview-button\">
\t\t\t\t\t\t\t<a class=\"quickbox\"  title=\"";
            // line 35
            echo ($context["button_quickview"] ?? null);
            echo "\" href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "quick", [], "any", false, false, false, 35);
            echo "\"><i class=\"fa fa-eye\"></i></a>
\t\t\t\t </div>
\t\t\t\t <button class=\"wishlist\" type=\"button\"  title=\"";
            // line 37
            echo ($context["button_wishlist"] ?? null);
            echo " \" onclick=\"wishlist.add('";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 37);
            echo " ');\"><i class=\"fa fa-heart\"></i></button>
\t\t\t\t <button class=\"compare_button\" type=\"button\"  title=\"";
            // line 38
            echo ($context["button_compare"] ?? null);
            echo " \" onclick=\"compare.add('";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 38);
            echo " ');\"><i class=\"fa fa-exchange\"></i></button>
\t\t\t  </div>
\t\t</div>
\t\t\t</div>
      \t<div class=\"product-details\">
\t\t\t<div class=\"caption\">
\t\t\t\t<h4><a href=\"";
            // line 44
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 44);
            echo " \">";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 44);
            echo " </a></h4>
\t\t\t\t";
            // line 46
            echo "\t\t\t\t\t\t\t<div class=\"rating\">
\t\t\t\t\t\t\t";
            // line 47
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, 5));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 48
                echo "\t\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 48) < $context["i"])) {
                    // line 49
                    echo "\t\t\t\t\t\t\t<span class=\"fa fa-stack\"><i class=\"fa fa-star off fa-stack-2x\"></i></span>
\t\t\t\t\t\t\t";
                } else {
                    // line 51
                    echo "\t\t\t\t\t\t\t<span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
\t\t\t\t\t\t\t";
                }
                // line 53
                echo "\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 54
            echo "\t\t\t\t\t\t\t";
            // line 55
            echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
            // line 56
            echo "  
\t\t\t\t";
            // line 58
            echo "\t\t\t\t  
\t\t\t\t";
            // line 59
            if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 59)) {
                // line 60
                echo "        \t\t\t<p class=\"price\">
       \t\t\t    ";
                // line 61
                if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 61)) {
                    // line 62
                    echo "          \t\t\t";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 62);
                    echo "
         \t\t\t";
                } else {
                    // line 64
                    echo "         \t\t\t<span class=\"price-new\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 64);
                    echo "</span> <span class=\"price-old\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 64);
                    echo "</span>
\t\t\t        ";
                }
                // line 66
                echo "  \t\t            ";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 66)) {
                    // line 67
                    echo "\t\t            <span class=\"price-tax\">";
                    echo ($context["text_tax"] ?? null);
                    echo " ";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 67);
                    echo "</span>
          \t\t\t";
                }
                // line 69
                echo "\t\t\t        </p>
\t            ";
            }
            // line 71
            echo "\t\t\t</div>\t\t
 \t    
\t\t\t
\t  \t</div>
  \t</div>
\t</div>
</div>
  
 ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 80
        echo "</div>
  </div>
</div>
</div>
</div>
<span class=\"latest_default_width\" style=\"display:none; visibility:hidden\"></span>
";
    }

    public function getTemplateName()
    {
        return "Grocery/template/extension/module/latest.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  261 => 80,  247 => 71,  243 => 69,  235 => 67,  232 => 66,  224 => 64,  218 => 62,  216 => 61,  213 => 60,  211 => 59,  208 => 58,  205 => 56,  202 => 55,  200 => 54,  194 => 53,  190 => 51,  186 => 49,  183 => 48,  179 => 47,  176 => 46,  170 => 44,  159 => 38,  153 => 37,  146 => 35,  139 => 33,  134 => 30,  125 => 28,  120 => 27,  110 => 24,  102 => 23,  97 => 22,  95 => 21,  83 => 17,  79 => 16,  65 => 15,  62 => 14,  55 => 9,  52 => 8,  49 => 7,  47 => 6,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Grocery/template/extension/module/latest.twig", "");
    }
}
