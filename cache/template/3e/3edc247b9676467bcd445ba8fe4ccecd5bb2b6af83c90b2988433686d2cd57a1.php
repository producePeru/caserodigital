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

/* Grocery/template/common/footer.twig */
class __TwigTemplate_89b9055fb2411303736e9c57591c056979f281b78c3c45661b4a12dfcd780014 extends \Twig\Template
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
        echo "<footer class=\"bottom-to-top hb-animate-element\">
     
\t  <div class=\"footer-container\">
\t\t<div class=\"footer-top\">
\t\t\t<div class=\"container\">
\t\t   <div class=\"row\">
\t\t\t";
        // line 7
        echo ($context["footertop"] ?? null);
        echo "
\t\t</div>
\t</div></div>

\t
 <div class=\"footer-middle\">
\t  \t";
        // line 13
        echo ($context["footermiddle"] ?? null);
        echo "
\t  </div>
  <div id=\"footer\">
  
      <div class=\"container\">
\t  <div class=\"row\">

     <div class=\"footer-blocks\">
      ";
        // line 21
        echo ($context["footerleft"] ?? null);
        echo "
\t\t<div id=\"account_link\" class=\"col-sm-3 column\">
        <h5>";
        // line 23
        echo ($context["text_account"] ?? null);
        echo "</h5>
        <ul class=\"list-unstyled\">
          <li><a href=\"";
        // line 25
        echo ($context["account"] ?? null);
        echo "\">";
        echo ($context["text_account"] ?? null);
        echo "</a></li>
          <li><a href=\"";
        // line 26
        echo ($context["order"] ?? null);
        echo "\">";
        echo ($context["text_order"] ?? null);
        echo "</a></li>
          <li><a href=\"";
        // line 27
        echo ($context["wishlist"] ?? null);
        echo "\">";
        echo ($context["text_wishlist"] ?? null);
        echo "</a></li>
          <li><a href=\"";
        // line 28
        echo ($context["affiliate"] ?? null);
        echo "\">";
        echo ($context["text_affiliate"] ?? null);
        echo "</a></li>
\t\t  <li><a href=\"";
        // line 29
        echo ($context["contact"] ?? null);
        echo "\">";
        echo ($context["text_contact"] ?? null);
        echo "</a></li>
        </ul>
\t  </div> 
\t  
\t  ";
        // line 33
        if (($context["informations"] ?? null)) {
            // line 34
            echo "      <div id=\"info\" class=\"col-sm-3 column\">
        <h5>";
            // line 35
            echo ($context["text_information"] ?? null);
            echo "</h5>
        <ul class=\"list-unstyled\">
         ";
            // line 37
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["informations"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
                // line 38
                echo "          <li><a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "href", [], "any", false, false, false, 38);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 38);
                echo "</a></li>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 40
            echo "\t\t  <li><a href=\"";
            echo ($context["all_blogs"] ?? null);
            echo "\">";
            echo ($context["text_blog"] ?? null);
            echo " </a></li>  
        </ul>
      </div>
      ";
        }
        // line 44
        echo "\t  
\t  <div id=\"extra-link\" class=\"col-sm-3 column\">
        <h5>";
        // line 46
        echo ($context["text_extra"] ?? null);
        echo "</h5>
        <ul class=\"list-unstyled\">
          <li><a href=\"";
        // line 48
        echo ($context["sitemap"] ?? null);
        echo "\">";
        echo ($context["text_sitemap"] ?? null);
        echo "</a></li>
\t\t\t  <li><a href=\"";
        // line 49
        echo ($context["newsletter"] ?? null);
        echo "\">";
        echo ($context["text_newsletter"] ?? null);
        echo "</a></li>
          <li><a href=\"";
        // line 50
        echo ($context["manufacturer"] ?? null);
        echo "\">";
        echo ($context["text_manufacturer"] ?? null);
        echo "</a></li>
          <li><a href=\"";
        // line 51
        echo ($context["contact"] ?? null);
        echo "\">";
        echo ($context["text_contact"] ?? null);
        echo "</a></li>
          <li><a href=\"";
        // line 52
        echo ($context["special"] ?? null);
        echo "\">";
        echo ($context["text_special"] ?? null);
        echo "</a></li>
        </ul>
\t  </div> 
\t  
\t\t";
        // line 66
        echo "\t\t  ";
        echo ($context["footerright"] ?? null);
        echo "
</div>
  

</div>
\t</div>
\t\t</div>


\t</div>
\t</div>
\t<div class=\"bottomfooter\">
\t   <div class=\"container\">
\t  <div class=\"row\">
      <div class=\"bottomfooter-inner\">
\t\t
        <p class=\"powered\">";
        // line 82
        echo ($context["powered"] ?? null);
        echo "</p>
\t\t";
        // line 83
        echo ($context["footerbottom"] ?? null);
        echo "
      </div>
</div>
</div>
</div>
\t
</footer>
";
        // line 90
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["scripts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 91
            echo "<script src=\"";
            echo $context["script"];
            echo "\" type=\"text/javascript\"></script>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 93
        echo "<script type=\"text/javascript\">
 \$(document).ready(function(){
    \$('#wdtestimonial-carousel').owlCarousel({
            items: 1,
            autoPlay: true,
            singleItem: true,
            navigation: false,
            pagination: false,
            itemsDesktop : [1500,3],
            itemsDesktopSmall:[991,2],
            itemsTablet :\t[543,1],
            itemsTabletSmall : [479, 1]
            // itemsMobile: [479, 2]
        });
    }); 

</script>

";
        // line 111
        if (($context["module_wd_live_search_status"] ?? null)) {
            // line 112
            echo "
\t\t\t<script><!--
\t\t\t\tvar wd_live_search = {
\t\t\t\t\tselector: '#search input[name=\\'search\\']',
\t\t\t\t\ttext_no_matches: '";
            // line 116
            echo ($context["text_empty"] ?? null);
            echo "',
\t\t\t\t\theight: '50px'
\t\t\t\t}

\t\t\t\t\$(document).ready(function() {
\t\t\t\t\tvar html = '';
\t\t\t\t\thtml += '<div class=\"live-search\">';
\t\t\t\t\thtml += '\t<ul>';
\t\t\t\t\thtml += '\t</ul>';
\t\t\t\t\thtml += '<div class=\"result-text\"></div>';
\t\t\t\t\thtml += '</div>';

\t\t\t\t\t//\$(wd_live_search.selector).parent().closest('div').after(html);
\t\t\t\t\t\$(wd_live_search.selector).after(html);

\t\t\t\t\t\$(wd_live_search.selector).autocomplete({
\t\t\t\t\t\t'source': function(request, response) {
\t\t\t\t\t\t\tvar filter_name = \$(wd_live_search.selector).val();
\t\t\t\t\t\t\tvar cat_id = 0;
\t\t\t\t\t\t\tvar module_wd_live_search_min_length = '";
            // line 135
            echo abs(($context["module_wd_live_search_min_length"] ?? null));
            echo "';
\t\t\t\t\t\t\tif (filter_name.length < module_wd_live_search_min_length) {
\t\t\t\t\t\t\t\t\$('.live-search').css('display','none');
\t\t\t\t\t\t\t\t \$('body').removeClass('search-open');
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\telse{
\t\t\t\t\t\t\t\tvar html = '';
\t\t\t\t\t\t\t\thtml += '<li style=\"text-align: center;height:10px;\">';
\t\t\t\t\t\t\t\thtml +=\t'<img class=\"loading\" src=\"image/catalog/loading.gif\" />';
\t\t\t\t\t\t\t\thtml +=\t'</li>';
\t\t\t\t\t\t\t\t\$('.live-search ul').html(html);
\t\t\t\t\t\t\t\t\$('.live-search').css('display','block');
\t\t\t\t\t\t\t\t\$('body').addClass('search-open');

\t\t\t\t\t\t\t\t\$.ajax({
\t\t\t\t\t\t\t\t\turl: 'index.php?route=extension/module/wd_live_search&filter_name=' +  encodeURIComponent(filter_name),
\t\t\t\t\t\t\t\t\tdataType: 'json',
\t\t\t\t\t\t\t\t\tsuccess: function(result) {
\t\t\t\t\t\t\t\t\t\tvar products = result.products;
\t\t\t\t\t\t\t\t\t\t\$('.live-search ul li').remove();
\t\t\t\t\t\t\t\t\t\t\$('.result-text').html('');
\t\t\t\t\t\t\t\t\t\tif (!\$.isEmptyObject(products)) {
\t\t\t\t\t\t\t\t\t\t\tvar show_image = ";
            // line 157
            echo abs(($context["module_wd_live_search_show_image"] ?? null));
            echo ";
\t\t\t\t\t\t\t\t\t\t\tvar show_price = ";
            // line 158
            echo abs(($context["module_wd_live_search_show_price"] ?? null));
            echo ";
\t\t\t\t\t\t\t\t\t\t\tvar show_description = ";
            // line 159
            echo abs(($context["module_wd_live_search_show_description"] ?? null));
            echo ";
\t\t\t\t\t\t\t\t\t\t\t\$('.result-text').html('<a href=\"";
            // line 160
            echo ($context["module_wd_live_search_href"] ?? null);
            echo "'+filter_name+'\" class=\"view-all-results\">";
            echo twig_escape_filter($this->env, ($context["text_view_all_results"] ?? null));
            echo " ('+result.total+')</a>');

\t\t\t\t\t\t\t\t\t\t\t\$.each(products, function(index,product) {
\t\t\t\t\t\t\t\t\t\t\t\tvar html = '';

\t\t\t\t\t\t\t\t\t\t\t\thtml += '<li>';
\t\t\t\t\t\t\t\t\t\t\t\thtml += '<a href=\"' + product.url + '\" title=\"' + product.name + '\">';
\t\t\t\t\t\t\t\t\t\t\t\tif(product.image && show_image){
\t\t\t\t\t\t\t\t\t\t\t\t\thtml += '\t<div class=\"product-image col-sm-3 col-xs-4\"><img alt=\"' + product.name + '\" src=\"' + product.image + '\"></div>';
\t\t\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\t\t\thtml += '<div class=\"search-description col-sm-9 col-xs-8\">';
\t\t\t\t\t\t\t\t\t\t\t\thtml += '\t<div class=\"product-name\">' + product.name ;
\t\t\t\t\t\t\t\t\t\t\t\tif(show_description){
\t\t\t\t\t\t\t\t\t\t\t\t\thtml += '<p>' + product.extra_info + '</p>';
\t\t\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\t\t\thtml += '</div>';
\t\t\t\t\t\t\t\t\t\t\t\tif(show_price){
\t\t\t\t\t\t\t\t\t\t\t\t\tif (product.special) {
\t\t\t\t\t\t\t\t\t\t\t\t\t\thtml += '\t<div class=\"product-price\"><span class=\"price\">' + product.special + '</span><span class=\"special\">' + product.price + '</span></div>';
\t\t\t\t\t\t\t\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\t\t\t\t\t\t\thtml += '\t<div class=\"product-price\"><span class=\"price\">' + product.price + '</span></div>';
\t\t\t\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\t\t\thtml += '</div>';
\t\t\t\t\t\t\t\t\t\t\t\thtml += '<span style=\"clear:both\"></span>';
\t\t\t\t\t\t\t\t\t\t\t\thtml += '</a>';
\t\t\t\t\t\t\t\t\t\t\t\thtml += '</li>';
\t\t\t\t\t\t\t\t\t\t\t\t\$('.live-search ul').append(html);
\t\t\t\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\t\t\t\tvar html = '';
\t\t\t\t\t\t\t\t\t\t\thtml += '<li style=\"text-align: center;height:10px;\">';
\t\t\t\t\t\t\t\t\t\t\thtml +=\twd_live_search.text_no_matches;
\t\t\t\t\t\t\t\t\t\t\thtml +=\t'</li>';

\t\t\t\t\t\t\t\t\t\t\t\$('.live-search ul').html(html);
\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\t\$('.live-search').css('display','block');
\t\t\t\t\t\t\t\t\t\t\$('body').addClass('search-open');
\t\t\t\t\t\t\t\t\t\treturn false;
\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t}
\t\t\t\t\t\t},
\t\t\t\t\t\t'select': function(product) {
\t\t\t\t\t\t\t\$(wd_live_search.selector).val(product.name);
\t\t\t\t\t\t}
\t\t\t\t\t});
\t\t\t\t\t
\t\t\t\t\t\$(document).bind( \"mouseup touchend\", function(e){
\t\t\t\t\t  var container = \$('.live-search');
\t\t\t\t\t  if (!container.is(e.target) && container.has(e.target).length === 0)
\t\t\t\t\t  {
\t\t\t\t\t    container.hide();
\t\t\t\t\t  }
\t\t\t\t\t});
\t\t\t\t});
\t\t\t//--></script>
\t\t";
        }
        // line 219
        echo "
<!--
OpenCart is open source software and you are free to remove the powered by OpenCart if you want, but its generally accepted practise to make a small donation.
Please donate via PayPal to donate@opencart.com
//--> 
<!-- Theme created by Welford Media for OpenCart 2.0 www.welfordmedia.co.uk -->
</body></html>";
    }

    public function getTemplateName()
    {
        return "Grocery/template/common/footer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  383 => 219,  319 => 160,  315 => 159,  311 => 158,  307 => 157,  282 => 135,  260 => 116,  254 => 112,  252 => 111,  232 => 93,  223 => 91,  219 => 90,  209 => 83,  205 => 82,  185 => 66,  176 => 52,  170 => 51,  164 => 50,  158 => 49,  152 => 48,  147 => 46,  143 => 44,  133 => 40,  122 => 38,  118 => 37,  113 => 35,  110 => 34,  108 => 33,  99 => 29,  93 => 28,  87 => 27,  81 => 26,  75 => 25,  70 => 23,  65 => 21,  54 => 13,  45 => 7,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Grocery/template/common/footer.twig", "");
    }
}
