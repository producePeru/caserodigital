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

/* Grocery/template/common/header.twig */
class __TwigTemplate_8a2b29fc7ce8af99aa0dd5ba305f5ae26d762dfc44ecfbf2442f5efafcbe445c extends \Twig\Template
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
        echo "<!DOCTYPE html>
<!--[if IE]><![endif]-->
<!--[if IE 8 ]><html dir=\"";
        // line 3
        echo ($context["direction"] ?? null);
        echo "\" lang=\"";
        echo ($context["lang"] ?? null);
        echo "\" class=\"ie8\"><![endif]-->
<!--[if IE 9 ]><html dir=\"";
        // line 4
        echo ($context["direction"] ?? null);
        echo "\" lang=\"";
        echo ($context["lang"] ?? null);
        echo "\" class=\"ie9\"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html dir=\"";
        // line 6
        echo ($context["direction"] ?? null);
        echo "\" lang=\"";
        echo ($context["lang"] ?? null);
        echo "\">
<!--<![endif]-->
<head>
<meta charset=\"UTF-8\" />
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
<title>";
        // line 12
        echo ($context["title"] ?? null);
        echo "</title>
<base href=\"";
        // line 13
        echo ($context["base"] ?? null);
        echo "\" />
";
        // line 14
        if (($context["description"] ?? null)) {
            // line 15
            echo "<meta name=\"description\" content=\"";
            echo ($context["description"] ?? null);
            echo "\" />
";
        }
        // line 17
        if (($context["keywords"] ?? null)) {
            // line 18
            echo "<meta name=\"keywords\" content=\"";
            echo ($context["keywords"] ?? null);
            echo "\" />
";
        }
        // line 20
        echo "<script src=\"catalog/view/javascript/jquery/jquery-2.1.1.min.js\"></script>
<script src=\"catalog/view/javascript/bootstrap/js/bootstrap.min.js\"></script>
<script src=\"catalog/view/javascript/jquery/owl-carousel/owl.carousel.min.js\"></script>
<script src=\"catalog/view/javascript/jquery.countdown.min.js\"></script>
<script src=\"catalog/view/javascript/jquery.countdown.js\"></script>
<link href=\"catalog/view/javascript/font-awesome/css/font-awesome.min.css\" rel=\"stylesheet\" type=\"text/css\" /> 
<link href=\"catalog/view/theme/";
        // line 26
        echo ($context["mytemplate"] ?? null);
        echo "/stylesheet/stylesheet.css\" rel=\"stylesheet\" />
<link href=\"https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700&display=swap\" rel=\"stylesheet\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"catalog/view/javascript/jquery/magnific/magnific-popup.css\" />
<link rel=\"stylesheet\" type=\"text/css\" href=\"catalog/view/theme/";
        // line 29
        echo ($context["mytemplate"] ?? null);
        echo "/stylesheet/webdigify/lightbox.css\" />
<link rel=\"stylesheet\" type=\"text/css\" href=\"catalog/view/theme/";
        // line 30
        echo ($context["mytemplate"] ?? null);
        echo "/stylesheet/webdigify/carousel.css\" />
<link rel=\"stylesheet\" type=\"text/css\" href=\"catalog/view/theme/";
        // line 31
        echo ($context["mytemplate"] ?? null);
        echo "/stylesheet/webdigify/custom.css\" />
<link rel=\"stylesheet\" type=\"text/css\" href=\"catalog/view/theme/";
        // line 32
        echo ($context["mytemplate"] ?? null);
        echo "/stylesheet/webdigify/slick.css\" />
<link rel=\"stylesheet\" type=\"text/css\" href=\"catalog/view/theme/";
        // line 33
        echo ($context["mytemplate"] ?? null);
        echo "/stylesheet/webdigify/bootstrap.min.css\" />
<link rel=\"stylesheet\" type=\"text/css\" href=\"catalog/view/theme/";
        // line 34
        echo ($context["mytemplate"] ?? null);
        echo "/stylesheet/webdigify/animate.css\" />
<link rel=\"stylesheet\" type=\"text/css\" href=\"catalog/view/theme/";
        // line 35
        echo ($context["mytemplate"] ?? null);
        echo "/stylesheet/webdigify/category-list.css\" />
<link rel=\"stylesheet\" type=\"text/css\" href=\"catalog/view/theme/";
        // line 36
        echo ($context["mytemplate"] ?? null);
        echo "/stylesheet/webdigify/newsletter.css\" />
<link rel=\"stylesheet\" type=\"text/css\" href=\"catalog/view/theme/";
        // line 37
        echo ($context["mytemplate"] ?? null);
        echo "/stylesheet/webdigify/megamenu.css\" />
<link rel=\"stylesheet\" type=\"text/css\" href=\"catalog/view/javascript/jquery/owl-carousel/owl.carousel.css\" />
<link rel=\"stylesheet\" type=\"text/css\" href=\"catalog/view/javascript/jquery/owl-carousel/owl.transitions.css\" />
";
        // line 40
        if ((($context["direction"] ?? null) == "rtl")) {
            // line 41
            echo "<link rel=\"stylesheet\" type=\"text/css\" href=\"catalog/view/theme/";
            echo ($context["mytemplate"] ?? null);
            echo "/stylesheet/webdigify/rtl.css\">
";
        }
        // line 43
        echo "<link href=\"https://fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\">
<link href=\"https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp\" rel=\"stylesheet\">
";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["styles"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["style"]) {
            // line 46
            echo "<link href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "href", [], "any", false, false, false, 46);
            echo "\" type=\"text/css\" rel=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "rel", [], "any", false, false, false, 46);
            echo "\" media=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "media", [], "any", false, false, false, 46);
            echo "\" />
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['style'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["scripts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 49
            echo "<script src=\"";
            echo $context["script"];
            echo "\"></script>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["links"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            // line 52
            echo "<link href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["link"], "href", [], "any", false, false, false, 52);
            echo "\" rel=\"";
            echo twig_get_attribute($this->env, $this->source, $context["link"], "rel", [], "any", false, false, false, 52);
            echo "\" />
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["analytics"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["analytic"]) {
            // line 55
            echo $context["analytic"];
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['analytic'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "<!-- webdigify www.templatemela.com - Start -->
<script src=\"catalog/view/javascript/webdigify/custom.js\"></script>
<script src=\"catalog/view/javascript/webdigify/jstree.min.js\"></script>
<script src=\"catalog/view/javascript/webdigify/carousel.min.js\"></script>
<script src=\"catalog/view/javascript/webdigify/webdigify.min.js\"></script>
<script src=\"catalog/view/javascript/webdigify/jquery.custom.min.js\"></script>
<script src=\"catalog/view/javascript/webdigify/jquery.formalize.min.js\"></script>
<script src=\"catalog/view/javascript/webdigify/jquery.elevatezoom.min.js\"></script>
<script src=\"catalog/view/javascript/webdigify/bootstrap-notify.min.js\"></script>  
<script src=\"catalog/view/javascript/jquery/magnific/jquery.magnific-popup.min.js\"></script>
<script src=\"catalog/view/javascript/webdigify/tabs.js\"></script>
<script src=\"catalog/view/javascript/webdigify/jquery.hoverdir.js\"></script>
<script src=\"catalog/view/javascript/webdigify/modernizr.js\"></script>
<script src=\"catalog/view/javascript/lightbox/lightbox-2.6.min.js\"></script>
<script src=\"catalog/view/javascript/webdigify/inview.js\"></script>
<script src=\"catalog/view/javascript/webdigify/megamenu.js\"></script>
<script src=\"catalog/view/javascript/webdigify/slick.js\"></script>
<script src=\"catalog/view/javascript/webdigify/parallax.js\"></script>


<!-- ======= Quick view JS ========= -->
<script> 

function quickbox(){
 if (\$(window).width() > 767) {
    \$('.quickview-button').magnificPopup({
      type:'iframe',
      delegate: 'a',
      preloader: true,
      tLoading: 'Loading image #%curr%...',
    });
 }  
}
jQuery(document).ready(function() {quickbox();});
jQuery(window).resize(function() {quickbox();});

</script>

<!-- webdigify www.templatemela.com - End -->

<script src=\"catalog/view/javascript/common.js\"></script>

</head>

";
        // line 101
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 102
            $context["layoutclass"] = "layout-3";
        } elseif ((        // line 103
($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 104
            if (($context["column_left"] ?? null)) {
                // line 105
                $context["layoutclass"] = "layout-2 left-col";
            } elseif (            // line 106
($context["column_right"] ?? null)) {
                // line 107
                $context["layoutclass"] = "layout-2 right-col";
            }
        } else {
            // line 110
            $context["layoutclass"] = "layout-1";
        }
        // line 112
        echo "
<body class=\"";
        // line 113
        echo ($context["class"] ?? null);
        echo " ";
        echo " ";
        echo " ";
        echo ($context["layoutclass"] ?? null);
        echo "\">
<header>
  <nav class=\"header_nav\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"left-nav\">
              ";
        // line 119
        echo ($context["headernavleft"] ?? null);
        echo "
          </div>
          <div class=\"right-nav\">
            ";
        // line 122
        echo ($context["headernavright"] ?? null);
        echo "
            <li class=\"lang-curr-wrapper\">
              ";
        // line 124
        echo ($context["language"] ?? null);
        echo "
              ";
        // line 125
        echo ($context["currency"] ?? null);
        echo "
            </li> 
            <div class=\"account\">     
              <div class=\"dropdown myaccount\"><a href=\"";
        // line 128
        echo ($context["account"] ?? null);
        echo "\" title=\"";
        echo ($context["text_account"] ?? null);
        echo "\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><span class=\"account-title\">";
        echo ($context["text_account"] ?? null);
        echo "</span></a>
                <ul class=\"dropdown-menu dropdown-menu-right myaccount-menu\">
                  <span class=\"drop_account\">
                    <div class=\"login_acc\">
                    ";
        // line 132
        if (($context["logged"] ?? null)) {
            // line 133
            echo "                      <li><a href=\"";
            echo ($context["account"] ?? null);
            echo "\" title=\"";
            echo ($context["text_account"] ?? null);
            echo "\">";
            echo ($context["text_account"] ?? null);
            echo "</a></li>
                      <li><a href=\"";
            // line 134
            echo ($context["checkout"] ?? null);
            echo "\" title=\"";
            echo ($context["text_checkout"] ?? null);
            echo "\"><span class=\"checkout\">";
            echo ($context["text_checkout"] ?? null);
            echo "</span></a></li>
                      <li><a class=\"account_logout1\" href=\"";
            // line 135
            echo ($context["logout"] ?? null);
            echo "\">";
            echo ($context["text_logout"] ?? null);
            echo "</a></li>
                      ";
        } else {
            // line 137
            echo "                        <li><a class=\"login\" href=\"";
            echo ($context["login"] ?? null);
            echo "\">";
            echo ($context["text_login"] ?? null);
            echo "</a></li>
                      <li><a class=\"reg\" href=\"";
            // line 138
            echo ($context["register"] ?? null);
            echo "\">";
            echo ($context["text_register"] ?? null);
            echo "</a></li>
                      <li><a href=\"";
            // line 139
            echo ($context["checkout"] ?? null);
            echo "\" title=\"";
            echo ($context["text_checkout"] ?? null);
            echo "\"><span class=\"checkout\">";
            echo ($context["text_checkout"] ?? null);
            echo "</span></a></li>
                    ";
        }
        // line 141
        echo "                    </div>\t
                  </span>      
                </ul>
              </div>
            </div>
            </div> 
        </div> 
      </div>
  </nav>
  <div id=\"header_top\" class=\"header_top\">
    
  <div class=\"container\">
    <div class=\"row\">
        <div class=\"col-sm-4 header-logo\">
          <div id=\"logo\">";
        // line 155
        if (($context["logo"] ?? null)) {
            echo "<a href=\"";
            echo ($context["home"] ?? null);
            echo "\"><img src=\"";
            echo ($context["logo"] ?? null);
            echo "\" title=\"";
            echo ($context["name"] ?? null);
            echo "\" alt=\"";
            echo ($context["name"] ?? null);
            echo "\" class=\"img-responsive\" /></a>";
        } else {
            // line 156
            echo "            <h1><a href=\"";
            echo ($context["home"] ?? null);
            echo "\">";
            echo ($context["name"] ?? null);
            echo "</a></h1>
            ";
        }
        // line 158
        echo "          </div>
        </div>
        <div class=\"nav2\">   
          
      <div class=\"col-sm-3 header_cart\">";
        // line 162
        echo ($context["cart"] ?? null);
        echo "</div>
          
            <div class=\"header_wishlist\"><a href=\"";
        // line 164
        echo ($context["wishlist"] ?? null);
        echo "\" id=\"wishlist-total\"></a>";
        echo ($context["text_wishlist"] ?? null);
        echo "</div>
            <div class=\"compare\"><a href=\"";
        // line 165
        echo ($context["compare"] ?? null);
        echo "\" id=\"compare-total\" ></a>";
        echo ($context["text_compare"] ?? null);
        echo "</div> 

          </div> 

        <div class=\"col-sm-5 header_search\">";
        // line 169
        echo ($context["search"] ?? null);
        echo "</div>
      
    </div>
  </div>
</div>
<div class=\"header_bottom\">
  <div class=\"container\">
    <div class=\"row\">
    <div class=\"headerbottom\">
      ";
        // line 178
        echo ($context["headerleft"] ?? null);
        echo "
      ";
        // line 179
        echo ($context["headertop"] ?? null);
        echo "
      <div class=\"header_right\"></div>
      </div> 
  <!-- <div id=\"_desktop_contact_link\"></div> -->

</div></div>
</div>
</div>
</header>
<div class=\"content-top-breadcum\">
<div class=\"container\">
</div>
</div>



";
    }

    public function getTemplateName()
    {
        return "Grocery/template/common/header.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  449 => 179,  445 => 178,  433 => 169,  424 => 165,  418 => 164,  413 => 162,  407 => 158,  399 => 156,  387 => 155,  371 => 141,  362 => 139,  356 => 138,  349 => 137,  342 => 135,  334 => 134,  325 => 133,  323 => 132,  312 => 128,  306 => 125,  302 => 124,  297 => 122,  291 => 119,  278 => 113,  275 => 112,  272 => 110,  268 => 107,  266 => 106,  264 => 105,  262 => 104,  260 => 103,  258 => 102,  256 => 101,  210 => 57,  202 => 55,  198 => 54,  187 => 52,  183 => 51,  174 => 49,  170 => 48,  157 => 46,  153 => 45,  149 => 43,  143 => 41,  141 => 40,  135 => 37,  131 => 36,  127 => 35,  123 => 34,  119 => 33,  115 => 32,  111 => 31,  107 => 30,  103 => 29,  97 => 26,  89 => 20,  83 => 18,  81 => 17,  75 => 15,  73 => 14,  69 => 13,  65 => 12,  54 => 6,  47 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Grocery/template/common/header.twig", "");
    }
}
