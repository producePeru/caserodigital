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

/* Grocery/template/extension/module/wd_category_list.twig */
class __TwigTemplate_f99e7c9ba4f8a1ae230c03af4eed179db092c69b15338f1941301cec84dc7080 extends \Twig\Template
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
        echo "<div class=\"wd_category_feature bottom-to-top hb-animate-element\" id=\"wd_category_feature\">
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"wdfcat-items\">
\t\t\t<div class=\"tab-head\">
\t\t\t\t<div class=\"title-wrapper\">
\t\t\t\t\t<div class=\"hometab-heading box-heading\">";
        // line 7
        echo ($context["heading_title"] ?? null);
        echo "</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t\t<div class=\"list_carousel row responsive clearfix\">
\t\t\t\t\t<div class=\"product-list category_list_carousel\" id=\"wd_cat_featured\">
\t\t\t\t\t\t";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 13
            echo "\t\t\t\t\t\t";
            if (((twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 13) % 1) == 1)) {
                // line 14
                echo "\t\t\t\t\t\t<li class=\"double-slideitem slider-item\">
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t";
            }
            // line 17
            echo "\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t<div class=\"content\">
\t\t\t\t\t\t\t\t<div class=\"wd_cat_content\">
\t\t\t\t\t\t\t\t\t<div class=\"cat-img\">
\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 21
            echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 21);
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
            // line 22
            echo twig_get_attribute($this->env, $this->source, $context["category"], "thumb", [], "any", false, false, false, 22);
            echo "\" alt=\"";
            echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 22);
            echo "\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 22);
            echo "\" class=\"cat_image1\">
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div> 
\t\t\t\t\t\t\t\t\t<div class=\"wdcat-content\">
\t\t\t\t\t\t\t\t\t\t<div class=\"wdcat-inner\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"cat-infor\">
\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"title\"><a href=\"";
            // line 28
            echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 28);
            echo "\" class=\"btn-pattern\">";
            echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 28);
            echo "</a></h4>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-item\"><p class=\"desc\">";
            // line 29
            echo twig_get_attribute($this->env, $this->source, $context["category"], "product_count", [], "any", false, false, false, 29);
            echo "<span> items</span></p></div>
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t";
            // line 32
            if ((twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 32) >= 4)) {
                // line 33
                echo "\t\t\t\t\t\t\t\t\t\t\t<li class=\"cat-more\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 34
                echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 34);
                echo "\" class=\"category-viewall\">Shop Now</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 37
            echo "\t\t\t\t\t\t\t\t\t\t</div> 
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div><!-- Caption END -->
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
            // line 42
            if (((twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 42) % 1) != 1)) {
                // line 43
                echo "\t\t\t\t\t\t</ul>
\t\t\t\t\t</li>
\t\t\t\t";
            }
            // line 46
            echo "\t\t\t\t\t\t";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>";
    }

    public function getTemplateName()
    {
        return "Grocery/template/extension/module/wd_category_list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  152 => 47,  138 => 46,  133 => 43,  131 => 42,  124 => 37,  118 => 34,  115 => 33,  113 => 32,  107 => 29,  101 => 28,  88 => 22,  84 => 21,  78 => 17,  73 => 14,  70 => 13,  53 => 12,  45 => 7,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Grocery/template/extension/module/wd_category_list.twig", "");
    }
}
