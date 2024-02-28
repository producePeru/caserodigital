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

/* Grocery/template/extension/module/wd_megamenu.twig */
class __TwigTemplate_eb42ace733c1682615f35247b7719977951cdd12683900b4b81cca913576a478 extends \Twig\Template
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
        if (($context["warning"] ?? null)) {
        } else {
            // line 3
            echo "    ";
            if ((($context["menu_type"] ?? null) == "horizontal")) {
                // line 4
                echo "        <div class=\"main-category-list left-menu horizontalmenu\">
\t\t<div class=\"cat-menu\">
\t\t\t<div class=\"WD-panel-heading\" title=\"";
                // line 6
                echo ($context["text_menu_title"] ?? null);
                echo "\">
\t\t\t\t";
                // line 8
                echo "\t\t\t\t";
                // line 9
                echo "                <!--<i class='material-icons close-icon'>close</i>-->
\t\t\t</div>
\t\t\t<div class=\"wd-menu horizontal-menu wd-menu-bar\" id=\"wd-menu-";
                // line 11
                echo ($context["module_id"] ?? null);
                echo "\">
            ";
                // line 12
                if (($context["items"] ?? null)) {
                    // line 13
                    echo "                <ul class=\"ul-top-items\">
                    ";
                    // line 14
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["top_item"]) {
                        // line 15
                        echo "                        ";
                        if (twig_get_attribute($this->env, $this->source, $context["top_item"], "status", [], "any", false, false, false, 15)) {
                            // line 16
                            echo "                            <li class=\"li-top-item";
                            if ((twig_get_attribute($this->env, $this->source, $context["top_item"], "sub_menu_type", [], "any", false, false, false, 16) == "mega")) {
                                echo " mega-menu";
                            }
                            if (twig_get_attribute($this->env, $this->source, $context["top_item"], "has_child", [], "any", false, false, false, 16)) {
                                echo " wd-sub-menu";
                            }
                            echo " ";
                            echo (((($context["count"] ?? null) > ($context["item_show"] ?? null))) ? ("over") : (""));
                            echo "\">
                                ";
                            // line 17
                            if (twig_get_attribute($this->env, $this->source, $context["top_item"], "has_link", [], "any", false, false, false, 17)) {
                                // line 18
                                echo "                                    <a class=\"a-top-link\" href=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["top_item"], "link", [], "any", false, false, false, 18);
                                echo "\">
                                        ";
                                // line 19
                                if (twig_get_attribute($this->env, $this->source, $context["top_item"], "icon", [], "any", false, false, false, 19)) {
                                    // line 20
                                    echo "                                            <img src=\"";
                                    echo twig_get_attribute($this->env, $this->source, $context["top_item"], "icon", [], "any", false, false, false, 20);
                                    echo "\" class=\"top-icon\"/>
                                        ";
                                }
                                // line 22
                                echo "                                        ";
                                if (twig_get_attribute($this->env, $this->source, $context["top_item"], "has_title", [], "any", false, false, false, 22)) {
                                    // line 23
                                    echo "                                            <span>";
                                    echo twig_get_attribute($this->env, $this->source, $context["top_item"], "title", [], "any", false, false, false, 23);
                                    echo "</span>
                                        ";
                                }
                                // line 25
                                echo "                                    </a>
                                ";
                            } else {
                                // line 27
                                echo "                                    <a class=\"a-top-link a-item\" href=\"javascript:void(0)\">
                                        ";
                                // line 28
                                if (twig_get_attribute($this->env, $this->source, $context["top_item"], "icon", [], "any", false, false, false, 28)) {
                                    // line 29
                                    echo "                                            <img src=\"";
                                    echo twig_get_attribute($this->env, $this->source, $context["top_item"], "icon", [], "any", false, false, false, 29);
                                    echo "\" class=\"top-icon\"/>
                                        ";
                                }
                                // line 31
                                echo "                                        ";
                                if (twig_get_attribute($this->env, $this->source, $context["top_item"], "has_title", [], "any", false, false, false, 31)) {
                                    // line 32
                                    echo "                                            <span>";
                                    echo twig_get_attribute($this->env, $this->source, $context["top_item"], "title", [], "any", false, false, false, 32);
                                    echo "</span>
                                        ";
                                }
                                // line 34
                                echo "                                    </a>
                                ";
                            }
                            // line 36
                            echo "                                ";
                            if (twig_get_attribute($this->env, $this->source, $context["top_item"], "has_child", [], "any", false, false, false, 36)) {
                                // line 37
                                echo "                                    <!-- Mega Menu -->
                                    ";
                                // line 38
                                if ((twig_get_attribute($this->env, $this->source, $context["top_item"], "sub_menu_type", [], "any", false, false, false, 38) == "mega")) {
                                    // line 39
                                    echo "                                        ";
                                    if ((twig_get_attribute($this->env, $this->source, $context["top_item"], "sub_menu_content_type", [], "any", false, false, false, 39) == "children")) {
                                        // line 40
                                        echo "                                            <div class=\"mega-menu-container product-thumb sub-menu-container ";
                                        if ((twig_get_attribute($this->env, $this->source, ($context["menu_setting"] ?? null), "mega_menu_width", [], "any", false, false, false, 40) == "100%")) {
                                            echo " full-width ";
                                        }
                                        echo "\">
                                                ";
                                        // line 41
                                        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["top_item"], "sub_items", [], "any", false, false, false, 41)) > 0)) {
                                            // line 42
                                            echo "                                                    ";
                                            $context['_parent'] = $context;
                                            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["top_item"], "sub_items", [], "any", false, false, false, 42));
                                            foreach ($context['_seq'] as $context["_key"] => $context["sub_item2"]) {
                                                // line 43
                                                echo "                                                        ";
                                                if (twig_get_attribute($this->env, $this->source, $context["sub_item2"], "status", [], "any", false, false, false, 43)) {
                                                    // line 44
                                                    echo "                                                            <div class=\"";
                                                    if (twig_get_attribute($this->env, $this->source, $context["top_item"], "sub_menu_content_columns", [], "any", false, false, false, 44)) {
                                                        echo "col-sm-";
                                                        echo twig_get_attribute($this->env, $this->source, $context["top_item"], "sub_menu_content_columns", [], "any", false, false, false, 44);
                                                    }
                                                    echo " sub-item2-content\"
                                                                    ";
                                                    // line 45
                                                    if ((twig_get_attribute($this->env, $this->source, $context["top_item"], "sub_menu_content_columns", [], "any", false, false, false, 45) == false)) {
                                                        echo " style=\"width: 20%;\" data-cols=\"12/5\" ";
                                                    } else {
                                                        echo " data-cols=\"";
                                                        echo twig_get_attribute($this->env, $this->source, $context["top_item"], "sub_menu_content_columns", [], "any", false, false, false, 45);
                                                        echo "\" ";
                                                    }
                                                    echo " >
                                                                <a class=\"a-mega-second-link\" href=\"";
                                                    // line 46
                                                    echo twig_get_attribute($this->env, $this->source, $context["sub_item2"], "link", [], "any", false, false, false, 46);
                                                    echo "\"><h4><strong>";
                                                    echo twig_get_attribute($this->env, $this->source, $context["sub_item2"], "title", [], "any", false, false, false, 46);
                                                    echo "</strong></h4></a>
                                                                ";
                                                    // line 47
                                                    if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sub_item2"], "sub_items", [], "any", false, false, false, 47)) > 0)) {
                                                        // line 48
                                                        echo "                                                                    <div class=\"sub_item3-content\">
                                                                        ";
                                                        // line 49
                                                        $context['_parent'] = $context;
                                                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["sub_item2"], "sub_items", [], "any", false, false, false, 49));
                                                        foreach ($context['_seq'] as $context["_key"] => $context["sub_item3"]) {
                                                            // line 50
                                                            echo "                                                                            ";
                                                            if (twig_get_attribute($this->env, $this->source, $context["sub_item3"], "status", [], "any", false, false, false, 50)) {
                                                                // line 51
                                                                echo "                                                                                <a class=\"a-mega-third-link\" href=\"";
                                                                echo twig_get_attribute($this->env, $this->source, $context["sub_item3"], "link", [], "any", false, false, false, 51);
                                                                echo "\"><h5>";
                                                                echo twig_get_attribute($this->env, $this->source, $context["sub_item3"], "title", [], "any", false, false, false, 51);
                                                                echo "</h5></a>
                                                                            ";
                                                            }
                                                            // line 53
                                                            echo "                                                                        ";
                                                        }
                                                        $_parent = $context['_parent'];
                                                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sub_item3'], $context['_parent'], $context['loop']);
                                                        $context = array_intersect_key($context, $_parent) + $_parent;
                                                        // line 54
                                                        echo "                                                                    </div>
                                                                ";
                                                    }
                                                    // line 56
                                                    echo "                                                            </div>
                                                        ";
                                                }
                                                // line 58
                                                echo "                                                    ";
                                            }
                                            $_parent = $context['_parent'];
                                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sub_item2'], $context['_parent'], $context['loop']);
                                            $context = array_intersect_key($context, $_parent) + $_parent;
                                            // line 59
                                            echo "                                                ";
                                        }
                                        // line 60
                                        echo "                                            </div>
                                        ";
                                    }
                                    // line 62
                                    echo "
                                        ";
                                    // line 63
                                    if ((twig_get_attribute($this->env, $this->source, $context["top_item"], "sub_menu_content_type", [], "any", false, false, false, 63) == "category")) {
                                        // line 64
                                        echo "                                            ";
                                        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["top_item"], "sub_menu_content", [], "any", false, false, false, 64)) > 0)) {
                                            // line 65
                                            echo "                                                <div class=\"mega-menu-container product-thumb sub-menu-container ";
                                            if ((twig_get_attribute($this->env, $this->source, ($context["menu_setting"] ?? null), "mega_menu_width", [], "any", false, false, false, 65) == "100%")) {
                                                echo " full-width ";
                                            }
                                            echo "\">
                                                    ";
                                            // line 66
                                            $context['_parent'] = $context;
                                            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["top_item"], "sub_menu_content", [], "any", false, false, false, 66));
                                            foreach ($context['_seq'] as $context["type"] => $context["widgets"]) {
                                                // line 67
                                                echo "                                                        ";
                                                if (($context["type"] == "category")) {
                                                    // line 68
                                                    echo "                                                            ";
                                                    if ((twig_length_filter($this->env, $context["widgets"]) > 0)) {
                                                        // line 69
                                                        echo "                                                                ";
                                                        $context['_parent'] = $context;
                                                        $context['_seq'] = twig_ensure_traversable($context["widgets"]);
                                                        foreach ($context['_seq'] as $context["_key"] => $context["widget"]) {
                                                            // line 70
                                                            echo "                                                                    <div class=\"col-sm-";
                                                            echo twig_get_attribute($this->env, $this->source, $context["widget"], "cols", [], "any", false, false, false, 70);
                                                            echo " sub-item2-content\" data-cols=\"";
                                                            echo twig_get_attribute($this->env, $this->source, $context["widget"], "cols", [], "any", false, false, false, 70);
                                                            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"sub-cate-img\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                                            // line 72
                                                            if (twig_get_attribute($this->env, $this->source, $context["widget"], "image", [], "any", false, false, false, 72)) {
                                                                // line 73
                                                                echo "                                                                            <img src=\"";
                                                                echo twig_get_attribute($this->env, $this->source, $context["widget"], "image", [], "any", false, false, false, 73);
                                                                echo "\" alt=\"";
                                                                echo twig_get_attribute($this->env, $this->source, $context["widget"], "title", [], "any", false, false, false, 73);
                                                                echo "\" class=\"mega-second-image\" />
                                                                        ";
                                                            }
                                                            // line 75
                                                            echo "                                                                        </div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"a-mega-second-link\" href=\"";
                                                            // line 76
                                                            echo twig_get_attribute($this->env, $this->source, $context["widget"], "link", [], "any", false, false, false, 76);
                                                            echo "\"><h4><strong>";
                                                            echo twig_get_attribute($this->env, $this->source, $context["widget"], "title", [], "any", false, false, false, 76);
                                                            echo "</strong></h4></a>
                                                                        ";
                                                            // line 77
                                                            if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["widget"], "children", [], "any", false, false, false, 77)) > 0)) {
                                                                // line 78
                                                                echo "                                                                            <div class=\"sub_item3-content\">
                                                                                ";
                                                                // line 79
                                                                $context['_parent'] = $context;
                                                                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["widget"], "children", [], "any", false, false, false, 79));
                                                                foreach ($context['_seq'] as $context["_key"] => $context["c_category"]) {
                                                                    // line 80
                                                                    echo "                                                                                    <a class=\"a-mega-third-link\" href=\"";
                                                                    echo twig_get_attribute($this->env, $this->source, $context["c_category"], "link", [], "any", false, false, false, 80);
                                                                    echo "\"><h5>";
                                                                    echo twig_get_attribute($this->env, $this->source, $context["c_category"], "title", [], "any", false, false, false, 80);
                                                                    echo "</h5></a>
                                                                                ";
                                                                }
                                                                $_parent = $context['_parent'];
                                                                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c_category'], $context['_parent'], $context['loop']);
                                                                $context = array_intersect_key($context, $_parent) + $_parent;
                                                                // line 82
                                                                echo "                                                                            </div>
                                                                        ";
                                                            }
                                                            // line 84
                                                            echo "                                                                       
                                                                    </div>
                                                                ";
                                                        }
                                                        $_parent = $context['_parent'];
                                                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['widget'], $context['_parent'], $context['loop']);
                                                        $context = array_intersect_key($context, $_parent) + $_parent;
                                                        // line 87
                                                        echo "                                                            ";
                                                    }
                                                    // line 88
                                                    echo "                                                        ";
                                                }
                                                // line 89
                                                echo "                                                    ";
                                            }
                                            $_parent = $context['_parent'];
                                            unset($context['_seq'], $context['_iterated'], $context['type'], $context['widgets'], $context['_parent'], $context['loop']);
                                            $context = array_intersect_key($context, $_parent) + $_parent;
                                            // line 90
                                            echo "                                                </div>
                                            ";
                                        }
                                        // line 92
                                        echo "                                        ";
                                    }
                                    // line 93
                                    echo "
                                        ";
                                    // line 94
                                    if ((twig_get_attribute($this->env, $this->source, $context["top_item"], "sub_menu_content_type", [], "any", false, false, false, 94) == "widget")) {
                                        // line 95
                                        echo "                                            ";
                                        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["top_item"], "sub_menu_content", [], "any", false, false, false, 95)) > 0)) {
                                            // line 96
                                            echo "                                                <div class=\"mega-menu-container product-thumb sub-menu-container ";
                                            if ((twig_get_attribute($this->env, $this->source, ($context["menu_setting"] ?? null), "mega_menu_width", [], "any", false, false, false, 96) == "100%")) {
                                                echo " full-width ";
                                            }
                                            echo "\">
                                                    ";
                                            // line 97
                                            $context['_parent'] = $context;
                                            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["top_item"], "sub_menu_content", [], "any", false, false, false, 97));
                                            foreach ($context['_seq'] as $context["type"] => $context["widgets"]) {
                                                // line 98
                                                echo "                                                        ";
                                                if (($context["type"] == "widget")) {
                                                    // line 99
                                                    echo "                                                            ";
                                                    if ((twig_length_filter($this->env, $context["widgets"]) > 0)) {
                                                        // line 100
                                                        echo "                                                                ";
                                                        $context['_parent'] = $context;
                                                        $context['_seq'] = twig_ensure_traversable($context["widgets"]);
                                                        foreach ($context['_seq'] as $context["_key"] => $context["widget"]) {
                                                            // line 101
                                                            echo "                                                                    ";
                                                            if ((twig_get_attribute($this->env, $this->source, $context["widget"], "type", [], "any", false, false, false, 101) == "category")) {
                                                                // line 102
                                                                echo "                                                                        <div class=\"col-sm-";
                                                                echo twig_get_attribute($this->env, $this->source, $context["widget"], "cols", [], "any", false, false, false, 102);
                                                                echo " sub-item2-content\" data-cols=\"";
                                                                echo twig_get_attribute($this->env, $this->source, $context["widget"], "cols", [], "any", false, false, false, 102);
                                                                echo "\">
                                                                            <div class=\"sub-cate-img\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                                                // line 104
                                                                if (twig_get_attribute($this->env, $this->source, $context["widget"], "image", [], "any", false, false, false, 104)) {
                                                                    // line 105
                                                                    echo "                                                                                <img src=\"";
                                                                    echo twig_get_attribute($this->env, $this->source, $context["widget"], "image", [], "any", false, false, false, 105);
                                                                    echo "\" alt=\"";
                                                                    echo twig_get_attribute($this->env, $this->source, $context["widget"], "title", [], "any", false, false, false, 105);
                                                                    echo "\" class=\"mega-second-image\" />
                                                                            ";
                                                                }
                                                                // line 107
                                                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
                                                                            <a class=\"a-mega-second-link\" href=\"";
                                                                // line 108
                                                                echo twig_get_attribute($this->env, $this->source, $context["widget"], "link", [], "any", false, false, false, 108);
                                                                echo "\"><h4><strong>";
                                                                echo twig_get_attribute($this->env, $this->source, $context["widget"], "title", [], "any", false, false, false, 108);
                                                                echo "</strong></h4></a>
                                                                            ";
                                                                // line 109
                                                                if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["widget"], "children", [], "any", false, false, false, 109)) > 0)) {
                                                                    // line 110
                                                                    echo "                                                                                <div class=\"sub_item3-content\">
                                                                                    ";
                                                                    // line 111
                                                                    $context['_parent'] = $context;
                                                                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["widget"], "children", [], "any", false, false, false, 111));
                                                                    foreach ($context['_seq'] as $context["_key"] => $context["c_category"]) {
                                                                        // line 112
                                                                        echo "                                                                                        <a class=\"a-mega-third-link\" href=\"";
                                                                        echo twig_get_attribute($this->env, $this->source, $context["c_category"], "link", [], "any", false, false, false, 112);
                                                                        echo "\"><h5>";
                                                                        echo twig_get_attribute($this->env, $this->source, $context["c_category"], "title", [], "any", false, false, false, 112);
                                                                        echo "</h5></a>
                                                                                    ";
                                                                    }
                                                                    $_parent = $context['_parent'];
                                                                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c_category'], $context['_parent'], $context['loop']);
                                                                    $context = array_intersect_key($context, $_parent) + $_parent;
                                                                    // line 114
                                                                    echo "                                                                                </div>
                                                                            ";
                                                                }
                                                                // line 116
                                                                echo "                                                                        </div>
                                                                    ";
                                                            }
                                                            // line 118
                                                            echo "
                                                                    ";
                                                            // line 119
                                                            if ((twig_get_attribute($this->env, $this->source, $context["widget"], "type", [], "any", false, false, false, 119) == "product")) {
                                                                // line 120
                                                                echo "                                                                        <div class=\"col-sm-";
                                                                echo twig_get_attribute($this->env, $this->source, $context["widget"], "cols", [], "any", false, false, false, 120);
                                                                echo " sub-item2-content div-product\" data-cols=\"";
                                                                echo twig_get_attribute($this->env, $this->source, $context["widget"], "cols", [], "any", false, false, false, 120);
                                                                echo "\">
                                                                            ";
                                                                // line 121
                                                                if (twig_get_attribute($this->env, $this->source, $context["widget"], "image", [], "any", false, false, false, 121)) {
                                                                    // line 122
                                                                    echo "                                                                                <div class=\"product-img\">
                                                                                <a class=\"a-mega-second-link\" href=\"";
                                                                    // line 123
                                                                    echo twig_get_attribute($this->env, $this->source, $context["widget"], "link", [], "any", false, false, false, 123);
                                                                    echo "\">
                                                                                    <img src=\"";
                                                                    // line 124
                                                                    echo twig_get_attribute($this->env, $this->source, $context["widget"], "image", [], "any", false, false, false, 124);
                                                                    echo "\" alt=\"";
                                                                    echo twig_get_attribute($this->env, $this->source, $context["widget"], "title", [], "any", false, false, false, 124);
                                                                    echo "\" class=\"mega-second-image\" />
                                                                                </a>
                                                                                </div>
                                                                            ";
                                                                }
                                                                // line 128
                                                                echo "                                                                            <a class=\"a-mega-second-link detail\" href=\"";
                                                                echo twig_get_attribute($this->env, $this->source, $context["widget"], "link", [], "any", false, false, false, 128);
                                                                echo "\">
                                                                                <h4><strong>";
                                                                // line 129
                                                                echo twig_get_attribute($this->env, $this->source, $context["widget"], "title", [], "any", false, false, false, 129);
                                                                echo "</strong></h4>
                                                                                ";
                                                                // line 130
                                                                if (twig_get_attribute($this->env, $this->source, $context["widget"], "price", [], "any", false, false, false, 130)) {
                                                                    // line 131
                                                                    echo "                                                                                    <p class=\"price\">
                                                                                        ";
                                                                    // line 132
                                                                    if ( !twig_get_attribute($this->env, $this->source, $context["widget"], "special", [], "any", false, false, false, 132)) {
                                                                        // line 133
                                                                        echo "                                                                                            ";
                                                                        echo twig_get_attribute($this->env, $this->source, $context["widget"], "price", [], "any", false, false, false, 133);
                                                                        echo "
                                                                                        ";
                                                                    } else {
                                                                        // line 135
                                                                        echo "                                                                                            <span class=\"price-new\">";
                                                                        echo twig_get_attribute($this->env, $this->source, $context["widget"], "special", [], "any", false, false, false, 135);
                                                                        echo "</span> <span class=\"price-old\">";
                                                                        echo twig_get_attribute($this->env, $this->source, $context["widget"], "price", [], "any", false, false, false, 135);
                                                                        echo "</span>
                                                                                        ";
                                                                    }
                                                                    // line 137
                                                                    echo "                                                                                        ";
                                                                    if (twig_get_attribute($this->env, $this->source, $context["widget"], "tax", [], "any", false, false, false, 137)) {
                                                                        // line 138
                                                                        echo "                                                                                            <span class=\"price-tax\">";
                                                                        echo ($context["text_tax"] ?? null);
                                                                        echo " ";
                                                                        echo twig_get_attribute($this->env, $this->source, $context["widget"], "tax", [], "any", false, false, false, 138);
                                                                        echo "</span>
                                                                                        ";
                                                                    }
                                                                    // line 140
                                                                    echo "                                                                                    </p>
                                                                                ";
                                                                }
                                                                // line 141
                                                                echo " 
                                                                            </a>
                                                                        </div>
                                                                    ";
                                                            }
                                                            // line 145
                                                            echo "
                                                                    ";
                                                            // line 146
                                                            if ((twig_get_attribute($this->env, $this->source, $context["widget"], "type", [], "any", false, false, false, 146) == "html")) {
                                                                // line 147
                                                                echo "                                                                        <div class=\"col-sm-";
                                                                echo twig_get_attribute($this->env, $this->source, $context["widget"], "cols", [], "any", false, false, false, 147);
                                                                echo " sub-item2-content\" data-cols=\"";
                                                                echo twig_get_attribute($this->env, $this->source, $context["widget"], "cols", [], "any", false, false, false, 147);
                                                                echo "\">
                                                                            <h4><strong>";
                                                                // line 148
                                                                echo twig_get_attribute($this->env, $this->source, $context["widget"], "title", [], "any", false, false, false, 148);
                                                                echo "</strong></h4>
                                                                            ";
                                                                // line 149
                                                                echo twig_get_attribute($this->env, $this->source, $context["widget"], "content", [], "any", false, false, false, 149);
                                                                echo "
                                                                        </div>
                                                                    ";
                                                            }
                                                            // line 152
                                                            echo "
                                                                    ";
                                                            // line 153
                                                            if ((twig_get_attribute($this->env, $this->source, $context["widget"], "type", [], "any", false, false, false, 153) == "link")) {
                                                                // line 154
                                                                echo "                                                                        <div class=\"col-sm-";
                                                                echo twig_get_attribute($this->env, $this->source, $context["widget"], "cols", [], "any", false, false, false, 154);
                                                                echo " sub-item2-content\" data-cols=\"";
                                                                echo twig_get_attribute($this->env, $this->source, $context["widget"], "cols", [], "any", false, false, false, 154);
                                                                echo "\">
                                                                            <a class=\"a-mega-second-link a-widget-link\" href=\"";
                                                                // line 155
                                                                echo twig_get_attribute($this->env, $this->source, $context["widget"], "link", [], "any", false, false, false, 155);
                                                                echo "\"><h4><strong>";
                                                                echo twig_get_attribute($this->env, $this->source, $context["widget"], "title", [], "any", false, false, false, 155);
                                                                echo "</strong></h4></a>
                                                                        </div>
                                                                    ";
                                                            }
                                                            // line 158
                                                            echo "                                                                ";
                                                        }
                                                        $_parent = $context['_parent'];
                                                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['widget'], $context['_parent'], $context['loop']);
                                                        $context = array_intersect_key($context, $_parent) + $_parent;
                                                        // line 159
                                                        echo "                                                            ";
                                                    }
                                                    // line 160
                                                    echo "                                                        ";
                                                }
                                                // line 161
                                                echo "                                                    ";
                                            }
                                            $_parent = $context['_parent'];
                                            unset($context['_seq'], $context['_iterated'], $context['type'], $context['widgets'], $context['_parent'], $context['loop']);
                                            $context = array_intersect_key($context, $_parent) + $_parent;
                                            // line 162
                                            echo "                                                </div>
                                            ";
                                        }
                                        // line 164
                                        echo "                                        ";
                                    }
                                    // line 165
                                    echo "                                    ";
                                }
                                // line 166
                                echo "
                                    <!-- Flyout Menu -->
                                    ";
                                // line 168
                                if ((twig_get_attribute($this->env, $this->source, $context["top_item"], "sub_menu_type", [], "any", false, false, false, 168) == "flyout")) {
                                    // line 169
                                    echo "                                        ";
                                    if ((twig_get_attribute($this->env, $this->source, $context["top_item"], "sub_menu_content_type", [], "any", false, false, false, 169) == "children")) {
                                        // line 170
                                        echo "                                            ";
                                        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["top_item"], "sub_items", [], "any", false, false, false, 170)) > 0)) {
                                            // line 171
                                            echo "                                                <div class=\"wd-sub-menu-container sub-menu-container\">
                                                    <ul class=\"ul-second-items\">
                                                        ";
                                            // line 173
                                            $context['_parent'] = $context;
                                            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["top_item"], "sub_items", [], "any", false, false, false, 173));
                                            foreach ($context['_seq'] as $context["_key"] => $context["sub_item2"]) {
                                                // line 174
                                                echo "                                                            ";
                                                if (twig_get_attribute($this->env, $this->source, $context["sub_item2"], "status", [], "any", false, false, false, 174)) {
                                                    // line 175
                                                    echo "                                                                <li class=\"li-second-items\">
                                                                    <a href=\"";
                                                    // line 176
                                                    echo twig_get_attribute($this->env, $this->source, $context["sub_item2"], "link", [], "any", false, false, false, 176);
                                                    echo "\" class=\"a-second-link a-item\">
                                                                        <span class=\"a-second-title\">";
                                                    // line 177
                                                    echo twig_get_attribute($this->env, $this->source, $context["sub_item2"], "title", [], "any", false, false, false, 177);
                                                    echo "</span>
                                                                        ";
                                                    // line 178
                                                    if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sub_item2"], "sub_items", [], "any", false, false, false, 178)) > 0)) {
                                                        // line 179
                                                        echo "                                                                                <i class=\"material-icons chevron-right\">chevron_right</i>
                                                                        ";
                                                    }
                                                    // line 181
                                                    echo "                                                                    </a>
                                                                    ";
                                                    // line 182
                                                    if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sub_item2"], "sub_items", [], "any", false, false, false, 182)) > 0)) {
                                                        // line 183
                                                        echo "                                                                        <div class=\"flyout-third-items\">
                                                                            <ul class=\"ul-third-items\">
                                                                                ";
                                                        // line 185
                                                        $context['_parent'] = $context;
                                                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["sub_item2"], "sub_items", [], "any", false, false, false, 185));
                                                        foreach ($context['_seq'] as $context["_key"] => $context["sub_item3"]) {
                                                            // line 186
                                                            echo "                                                                                    ";
                                                            if (twig_get_attribute($this->env, $this->source, $context["sub_item3"], "status", [], "any", false, false, false, 186)) {
                                                                // line 187
                                                                echo "                                                                                        <li class=\"li-third-items\">
                                                                                            <a href=\"";
                                                                // line 188
                                                                echo twig_get_attribute($this->env, $this->source, $context["sub_item3"], "link", [], "any", false, false, false, 188);
                                                                echo "\" class=\"a-third-link\"><span class=\"a-third-title\">";
                                                                echo twig_get_attribute($this->env, $this->source, $context["sub_item3"], "title", [], "any", false, false, false, 188);
                                                                echo "</span></a>
                                                                                        </li>
                                                                                    ";
                                                            }
                                                            // line 191
                                                            echo "                                                                                ";
                                                        }
                                                        $_parent = $context['_parent'];
                                                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sub_item3'], $context['_parent'], $context['loop']);
                                                        $context = array_intersect_key($context, $_parent) + $_parent;
                                                        // line 192
                                                        echo "                                                                            </ul>
                                                                        </div>
                                                                    ";
                                                    }
                                                    // line 195
                                                    echo "                                                                </li>
                                                            ";
                                                }
                                                // line 197
                                                echo "                                                        ";
                                            }
                                            $_parent = $context['_parent'];
                                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sub_item2'], $context['_parent'], $context['loop']);
                                            $context = array_intersect_key($context, $_parent) + $_parent;
                                            // line 198
                                            echo "                                                    </ul>
                                                </div>
                                            ";
                                        }
                                        // line 201
                                        echo "                                        ";
                                    }
                                    // line 202
                                    echo "
                                        ";
                                    // line 203
                                    if ((twig_get_attribute($this->env, $this->source, $context["top_item"], "sub_menu_content_type", [], "any", false, false, false, 203) == "category")) {
                                        // line 204
                                        echo "                                            ";
                                        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["top_item"], "sub_menu_content", [], "any", false, false, false, 204)) > 0)) {
                                            // line 205
                                            echo "                                                <div class=\"wd-sub-menu-container sub-menu-container\">
                                                    <ul class=\"ul-second-items\">
                                                        ";
                                            // line 207
                                            $context['_parent'] = $context;
                                            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["top_item"], "sub_menu_content", [], "any", false, false, false, 207));
                                            foreach ($context['_seq'] as $context["type"] => $context["widgets"]) {
                                                // line 208
                                                echo "                                                            ";
                                                if (($context["type"] == "category")) {
                                                    // line 209
                                                    echo "                                                                ";
                                                    if ((twig_length_filter($this->env, $context["widgets"]) > 0)) {
                                                        // line 210
                                                        echo "                                                                    ";
                                                        $context['_parent'] = $context;
                                                        $context['_seq'] = twig_ensure_traversable($context["widgets"]);
                                                        foreach ($context['_seq'] as $context["_key"] => $context["widget"]) {
                                                            // line 211
                                                            echo "                                                                        <li class=\"li-second-items\">
                                                                            <a href=\"";
                                                            // line 212
                                                            echo twig_get_attribute($this->env, $this->source, $context["widget"], "link", [], "any", false, false, false, 212);
                                                            echo "\" class=\"a-second-link a-item\">
                                                                                <span class=\"a-second-title\">";
                                                            // line 213
                                                            echo twig_get_attribute($this->env, $this->source, $context["widget"], "title", [], "any", false, false, false, 213);
                                                            echo "</span>
                                                                                ";
                                                            // line 214
                                                            if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["widget"], "children", [], "any", false, false, false, 214)) > 0)) {
                                                                // line 215
                                                                echo "                                                                                        <i class=\"material-icons chevron-right\">chevron_right</i>
                                                                                ";
                                                            }
                                                            // line 217
                                                            echo "                                                                            </a>
                                                                            ";
                                                            // line 218
                                                            if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["widget"], "children", [], "any", false, false, false, 218)) > 0)) {
                                                                // line 219
                                                                echo "                                                                                <div class=\"flyout-third-items\">
                                                                                    <ul class=\"ul-third-items\">
                                                                                        ";
                                                                // line 221
                                                                $context['_parent'] = $context;
                                                                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["widget"], "children", [], "any", false, false, false, 221));
                                                                foreach ($context['_seq'] as $context["_key"] => $context["c_category"]) {
                                                                    // line 222
                                                                    echo "                                                                                            <li class=\"li-third-items\">
                                                                                                <a href=\"";
                                                                    // line 223
                                                                    echo twig_get_attribute($this->env, $this->source, $context["c_category"], "link", [], "any", false, false, false, 223);
                                                                    echo "\" class=\"a-third-link\"><span class=\"a-third-title\">";
                                                                    echo twig_get_attribute($this->env, $this->source, $context["c_category"], "title", [], "any", false, false, false, 223);
                                                                    echo "</span></a>
                                                                                            </li>
                                                                                        ";
                                                                }
                                                                $_parent = $context['_parent'];
                                                                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c_category'], $context['_parent'], $context['loop']);
                                                                $context = array_intersect_key($context, $_parent) + $_parent;
                                                                // line 226
                                                                echo "                                                                                    </ul>
                                                                                </div>
                                                                            ";
                                                            }
                                                            // line 229
                                                            echo "                                                                        </li>
                                                                    ";
                                                        }
                                                        $_parent = $context['_parent'];
                                                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['widget'], $context['_parent'], $context['loop']);
                                                        $context = array_intersect_key($context, $_parent) + $_parent;
                                                        // line 231
                                                        echo "                                                                ";
                                                    }
                                                    // line 232
                                                    echo "                                                            ";
                                                }
                                                // line 233
                                                echo "                                                        ";
                                            }
                                            $_parent = $context['_parent'];
                                            unset($context['_seq'], $context['_iterated'], $context['type'], $context['widgets'], $context['_parent'], $context['loop']);
                                            $context = array_intersect_key($context, $_parent) + $_parent;
                                            // line 234
                                            echo "                                                    </ul>
                                                </div>
                                            ";
                                        }
                                        // line 237
                                        echo "                                        ";
                                    }
                                    // line 238
                                    echo "                                    ";
                                }
                                // line 239
                                echo "                                ";
                            }
                            // line 240
                            echo "                            </li>
                        ";
                        }
                        // line 242
                        echo "\t\t\t\t\t\t
                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['top_item'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 244
                    echo "\t\t\t\t\t
                </ul>
            ";
                }
                // line 247
                echo "        \t</div>
\t\t</div>
\t\t</div>
    ";
            }
            // line 251
            echo "
    ";
            // line 252
            $context["item_show"] = twig_get_attribute($this->env, $this->source, ($context["menu_setting"] ?? null), "item_show", [], "any", false, false, false, 252);
            // line 253
            echo "    ";
            if ((($context["menu_type"] ?? null) == "vertical")) {
                // line 254
                echo "     <div class=\"main-category-list left-menu\">
        <div class=\"cat-menu\">
            <div class=\"WD-panel-heading\" title=\"";
                // line 256
                echo ($context["text_menu_title"] ?? null);
                echo "\">
            <span>";
                // line 257
                echo ($context["text_menu_title"] ?? null);
                echo "</span>
            ";
                // line 259
                echo "            <!--<i class='material-icons close-icon'>close</i>-->
\t\t</div>
        ";
                // line 261
                $context["count"] = 0;
                // line 262
                echo "        <div class=\"wd-menu vertical-menu\" id=\"wd-menu-";
                echo ($context["module_id"] ?? null);
                echo "\">
            ";
                // line 263
                if (($context["items"] ?? null)) {
                    // line 264
                    echo "                ";
                    // line 267
                    echo "                ";
                    // line 268
                    echo "                <ul class=\"ul-top-items\">
                    ";
                    // line 269
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["top_item"]) {
                        // line 270
                        echo "                        ";
                        if (twig_get_attribute($this->env, $this->source, $context["top_item"], "status", [], "any", false, false, false, 270)) {
                            // line 271
                            echo "                            ";
                            $context["count"] = (($context["count"] ?? null) + 1);
                            // line 272
                            echo "                            ";
                            // line 273
                            echo "                             <li class=\"li-top-item";
                            if ((twig_get_attribute($this->env, $this->source, $context["top_item"], "sub_menu_type", [], "any", false, false, false, 273) == "mega")) {
                                echo " mega-menu";
                            }
                            if (twig_get_attribute($this->env, $this->source, $context["top_item"], "has_child", [], "any", false, false, false, 273)) {
                                echo " wd-sub-menu";
                            }
                            echo " ";
                            echo (((($context["count"] ?? null) > ($context["item_show"] ?? null))) ? ("over") : (""));
                            echo "\">
                                ";
                            // line 274
                            if (twig_get_attribute($this->env, $this->source, $context["top_item"], "has_link", [], "any", false, false, false, 274)) {
                                // line 275
                                echo "                                    <a class=\"a-top-link a-item\" href=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["top_item"], "link", [], "any", false, false, false, 275);
                                echo "\">
                                        ";
                                // line 276
                                if (twig_get_attribute($this->env, $this->source, $context["top_item"], "icon", [], "any", false, false, false, 276)) {
                                    // line 277
                                    echo "                                            <img src=\"";
                                    echo twig_get_attribute($this->env, $this->source, $context["top_item"], "icon", [], "any", false, false, false, 277);
                                    echo "\" class=\"top-icon\"/>
                                        ";
                                }
                                // line 279
                                echo "                                        ";
                                if (twig_get_attribute($this->env, $this->source, $context["top_item"], "has_title", [], "any", false, false, false, 279)) {
                                    // line 280
                                    echo "                                            <span>";
                                    echo twig_get_attribute($this->env, $this->source, $context["top_item"], "title", [], "any", false, false, false, 280);
                                    echo "</span>
                                        ";
                                }
                                // line 282
                                echo "                                        
                                    </a>
                                ";
                            } else {
                                // line 285
                                echo "                                    <a class=\"a-top-link a-item\" href=\"javascript:void(0)\">
                                        ";
                                // line 286
                                if (twig_get_attribute($this->env, $this->source, $context["top_item"], "icon", [], "any", false, false, false, 286)) {
                                    // line 287
                                    echo "                                            <img src=\"";
                                    echo twig_get_attribute($this->env, $this->source, $context["top_item"], "icon", [], "any", false, false, false, 287);
                                    echo "\" class=\"top-icon\"/>
                                        ";
                                }
                                // line 289
                                echo "                                        ";
                                if (twig_get_attribute($this->env, $this->source, $context["top_item"], "has_title", [], "any", false, false, false, 289)) {
                                    // line 290
                                    echo "                                            <span>";
                                    echo twig_get_attribute($this->env, $this->source, $context["top_item"], "title", [], "any", false, false, false, 290);
                                    echo "</span>
                                        ";
                                }
                                // line 292
                                echo "                                    </a>
                                ";
                            }
                            // line 294
                            echo "                                ";
                            if (twig_get_attribute($this->env, $this->source, $context["top_item"], "has_child", [], "any", false, false, false, 294)) {
                                // line 295
                                echo "                                    <!-- Mega Menu -->
                                    ";
                                // line 296
                                if ((twig_get_attribute($this->env, $this->source, $context["top_item"], "sub_menu_type", [], "any", false, false, false, 296) == "mega")) {
                                    // line 297
                                    echo "                                        ";
                                    if ((twig_get_attribute($this->env, $this->source, $context["top_item"], "sub_menu_content_type", [], "any", false, false, false, 297) == "children")) {
                                        // line 298
                                        echo "                                            <div class=\"mega-menu-container product-thumb sub-menu-container ";
                                        if ((twig_get_attribute($this->env, $this->source, ($context["menu_setting"] ?? null), "mega_menu_width", [], "any", false, false, false, 298) == "100%")) {
                                            echo " full-width ";
                                        }
                                        echo "\">
                                                ";
                                        // line 299
                                        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["top_item"], "sub_items", [], "any", false, false, false, 299)) > 0)) {
                                            // line 300
                                            echo "                                                    ";
                                            $context['_parent'] = $context;
                                            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["top_item"], "sub_items", [], "any", false, false, false, 300));
                                            foreach ($context['_seq'] as $context["_key"] => $context["sub_item2"]) {
                                                // line 301
                                                echo "                                                        ";
                                                if (twig_get_attribute($this->env, $this->source, $context["sub_item2"], "status", [], "any", false, false, false, 301)) {
                                                    // line 302
                                                    echo "                                                            <div class=\"";
                                                    if (twig_get_attribute($this->env, $this->source, $context["top_item"], "sub_menu_content_columns", [], "any", false, false, false, 302)) {
                                                        echo "col-sm-";
                                                        echo twig_get_attribute($this->env, $this->source, $context["top_item"], "sub_menu_content_columns", [], "any", false, false, false, 302);
                                                    }
                                                    echo " sub-item2-content\"
                                                                    ";
                                                    // line 303
                                                    if ((twig_get_attribute($this->env, $this->source, $context["top_item"], "sub_menu_content_columns", [], "any", false, false, false, 303) == false)) {
                                                        echo " style=\"width: 20%;\" data-cols=\"12/5\" ";
                                                    } else {
                                                        echo " data-cols=\"";
                                                        echo twig_get_attribute($this->env, $this->source, $context["top_item"], "sub_menu_content_columns", [], "any", false, false, false, 303);
                                                        echo "\" ";
                                                    }
                                                    echo " >
                                                                <a class=\"a-mega-second-link\" href=\"";
                                                    // line 304
                                                    echo twig_get_attribute($this->env, $this->source, $context["sub_item2"], "link", [], "any", false, false, false, 304);
                                                    echo "\"><h4><strong>";
                                                    echo twig_get_attribute($this->env, $this->source, $context["sub_item2"], "title", [], "any", false, false, false, 304);
                                                    echo "</strong></h4></a>
                                                                ";
                                                    // line 305
                                                    if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sub_item2"], "sub_items", [], "any", false, false, false, 305)) > 0)) {
                                                        // line 306
                                                        echo "                                                                    <div class=\"sub_item3-content\">
                                                                        ";
                                                        // line 307
                                                        $context['_parent'] = $context;
                                                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["sub_item2"], "sub_items", [], "any", false, false, false, 307));
                                                        foreach ($context['_seq'] as $context["_key"] => $context["sub_item3"]) {
                                                            // line 308
                                                            echo "                                                                            ";
                                                            if (twig_get_attribute($this->env, $this->source, $context["sub_item3"], "status", [], "any", false, false, false, 308)) {
                                                                // line 309
                                                                echo "                                                                                <a class=\"a-mega-third-link\" href=\"";
                                                                echo twig_get_attribute($this->env, $this->source, $context["sub_item3"], "link", [], "any", false, false, false, 309);
                                                                echo "\"><h5>";
                                                                echo twig_get_attribute($this->env, $this->source, $context["sub_item3"], "title", [], "any", false, false, false, 309);
                                                                echo "</h5></a>
                                                                            ";
                                                            }
                                                            // line 311
                                                            echo "                                                                        ";
                                                        }
                                                        $_parent = $context['_parent'];
                                                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sub_item3'], $context['_parent'], $context['loop']);
                                                        $context = array_intersect_key($context, $_parent) + $_parent;
                                                        // line 312
                                                        echo "                                                                    </div>
                                                                ";
                                                    }
                                                    // line 314
                                                    echo "                                                            </div>
                                                        ";
                                                }
                                                // line 316
                                                echo "                                                    ";
                                            }
                                            $_parent = $context['_parent'];
                                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sub_item2'], $context['_parent'], $context['loop']);
                                            $context = array_intersect_key($context, $_parent) + $_parent;
                                            // line 317
                                            echo "                                                ";
                                        }
                                        // line 318
                                        echo "                                            </div>
                                        ";
                                    } else {
                                        // line 320
                                        echo "                                            ";
                                        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["top_item"], "sub_menu_content", [], "any", false, false, false, 320)) > 0)) {
                                            // line 321
                                            echo "                                                <div class=\"mega-menu-container product-thumb sub-menu-container ";
                                            if ((twig_get_attribute($this->env, $this->source, ($context["menu_setting"] ?? null), "mega_menu_width", [], "any", false, false, false, 321) == "100%")) {
                                                echo " full-width ";
                                            }
                                            echo "\">
                                                    ";
                                            // line 322
                                            $context['_parent'] = $context;
                                            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["top_item"], "sub_menu_content", [], "any", false, false, false, 322));
                                            foreach ($context['_seq'] as $context["type"] => $context["widgets"]) {
                                                // line 323
                                                echo "                                                        ";
                                                if (($context["type"] == "category")) {
                                                    // line 324
                                                    echo "                                                            ";
                                                    if ((twig_length_filter($this->env, $context["widgets"]) > 0)) {
                                                        // line 325
                                                        echo "                                                                ";
                                                        $context['_parent'] = $context;
                                                        $context['_seq'] = twig_ensure_traversable($context["widgets"]);
                                                        foreach ($context['_seq'] as $context["_key"] => $context["widget"]) {
                                                            // line 326
                                                            echo "                                                                    <div class=\"col-sm-";
                                                            echo twig_get_attribute($this->env, $this->source, $context["widget"], "cols", [], "any", false, false, false, 326);
                                                            echo " sub-item2-content\" data-cols=\"";
                                                            echo twig_get_attribute($this->env, $this->source, $context["widget"], "cols", [], "any", false, false, false, 326);
                                                            echo "\">
                                                                        <div class=\"sub-cate-img\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                                            // line 328
                                                            if (twig_get_attribute($this->env, $this->source, $context["widget"], "image", [], "any", false, false, false, 328)) {
                                                                // line 329
                                                                echo "                                                                            <img src=\"";
                                                                echo twig_get_attribute($this->env, $this->source, $context["widget"], "image", [], "any", false, false, false, 329);
                                                                echo "\" alt=\"";
                                                                echo twig_get_attribute($this->env, $this->source, $context["widget"], "title", [], "any", false, false, false, 329);
                                                                echo "\" class=\"mega-second-image\" />
                                                                        ";
                                                            }
                                                            // line 331
                                                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"a-mega-second-link\" href=\"";
                                                            // line 332
                                                            echo twig_get_attribute($this->env, $this->source, $context["widget"], "link", [], "any", false, false, false, 332);
                                                            echo "\"><h4><strong>";
                                                            echo twig_get_attribute($this->env, $this->source, $context["widget"], "title", [], "any", false, false, false, 332);
                                                            echo "</strong></h4></a>
                                                                        ";
                                                            // line 333
                                                            if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["widget"], "children", [], "any", false, false, false, 333)) > 0)) {
                                                                // line 334
                                                                echo "                                                                            <div class=\"sub_item3-content\">
                                                                                ";
                                                                // line 335
                                                                $context['_parent'] = $context;
                                                                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["widget"], "children", [], "any", false, false, false, 335));
                                                                foreach ($context['_seq'] as $context["_key"] => $context["c_category"]) {
                                                                    // line 336
                                                                    echo "                                                                                    <a class=\"a-mega-third-link\" href=\"";
                                                                    echo twig_get_attribute($this->env, $this->source, $context["c_category"], "link", [], "any", false, false, false, 336);
                                                                    echo "\"><h5>";
                                                                    echo twig_get_attribute($this->env, $this->source, $context["c_category"], "title", [], "any", false, false, false, 336);
                                                                    echo "</h5></a>
                                                                                ";
                                                                }
                                                                $_parent = $context['_parent'];
                                                                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c_category'], $context['_parent'], $context['loop']);
                                                                $context = array_intersect_key($context, $_parent) + $_parent;
                                                                // line 338
                                                                echo "                                                                            </div>
                                                                        ";
                                                            }
                                                            // line 340
                                                            echo "                                                                    </div>
                                                                ";
                                                        }
                                                        $_parent = $context['_parent'];
                                                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['widget'], $context['_parent'], $context['loop']);
                                                        $context = array_intersect_key($context, $_parent) + $_parent;
                                                        // line 342
                                                        echo "                                                            ";
                                                    }
                                                    // line 343
                                                    echo "                                                        ";
                                                }
                                                // line 344
                                                echo "
                                                        ";
                                                // line 345
                                                if (($context["type"] == "widget")) {
                                                    // line 346
                                                    echo "                                                            ";
                                                    if ((twig_length_filter($this->env, $context["widgets"]) > 0)) {
                                                        // line 347
                                                        echo "                                                                ";
                                                        $context['_parent'] = $context;
                                                        $context['_seq'] = twig_ensure_traversable($context["widgets"]);
                                                        foreach ($context['_seq'] as $context["_key"] => $context["widget"]) {
                                                            // line 348
                                                            echo "                                                                    ";
                                                            if ((twig_get_attribute($this->env, $this->source, $context["widget"], "type", [], "any", false, false, false, 348) == "category")) {
                                                                // line 349
                                                                echo "                                                                        <div class=\"col-sm-";
                                                                echo twig_get_attribute($this->env, $this->source, $context["widget"], "cols", [], "any", false, false, false, 349);
                                                                echo " sub-item2-content\" data-cols=\"";
                                                                echo twig_get_attribute($this->env, $this->source, $context["widget"], "cols", [], "any", false, false, false, 349);
                                                                echo "\">
                                                                            <div class=\"sub-cate-img\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                                                // line 351
                                                                if (twig_get_attribute($this->env, $this->source, $context["widget"], "image", [], "any", false, false, false, 351)) {
                                                                    // line 352
                                                                    echo "                                                                                <img src=\"";
                                                                    echo twig_get_attribute($this->env, $this->source, $context["widget"], "image", [], "any", false, false, false, 352);
                                                                    echo "\" alt=\"";
                                                                    echo twig_get_attribute($this->env, $this->source, $context["widget"], "title", [], "any", false, false, false, 352);
                                                                    echo "\" class=\"mega-second-image\" />
                                                                            ";
                                                                }
                                                                // line 354
                                                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
                                                                            <a class=\"a-mega-second-link\" href=\"";
                                                                // line 355
                                                                echo twig_get_attribute($this->env, $this->source, $context["widget"], "link", [], "any", false, false, false, 355);
                                                                echo "\"><h4><strong>";
                                                                echo twig_get_attribute($this->env, $this->source, $context["widget"], "title", [], "any", false, false, false, 355);
                                                                echo "</strong></h4></a>
                                                                            ";
                                                                // line 356
                                                                if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["widget"], "children", [], "any", false, false, false, 356)) > 0)) {
                                                                    // line 357
                                                                    echo "                                                                                <div class=\"sub_item3-content\">
                                                                                    ";
                                                                    // line 358
                                                                    $context['_parent'] = $context;
                                                                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["widget"], "children", [], "any", false, false, false, 358));
                                                                    foreach ($context['_seq'] as $context["_key"] => $context["c_category"]) {
                                                                        // line 359
                                                                        echo "                                                                                        <a class=\"a-mega-third-link\" href=\"";
                                                                        echo twig_get_attribute($this->env, $this->source, $context["c_category"], "link", [], "any", false, false, false, 359);
                                                                        echo "\"><h5>";
                                                                        echo twig_get_attribute($this->env, $this->source, $context["c_category"], "title", [], "any", false, false, false, 359);
                                                                        echo "</h5></a>
                                                                                    ";
                                                                    }
                                                                    $_parent = $context['_parent'];
                                                                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c_category'], $context['_parent'], $context['loop']);
                                                                    $context = array_intersect_key($context, $_parent) + $_parent;
                                                                    // line 361
                                                                    echo "                                                                                </div>
                                                                            ";
                                                                }
                                                                // line 363
                                                                echo "                                                                        </div>
                                                                    ";
                                                            }
                                                            // line 365
                                                            echo "
                                                                    ";
                                                            // line 366
                                                            if ((twig_get_attribute($this->env, $this->source, $context["widget"], "type", [], "any", false, false, false, 366) == "product")) {
                                                                // line 367
                                                                echo "                                                                        <div class=\"col-sm-";
                                                                echo twig_get_attribute($this->env, $this->source, $context["widget"], "cols", [], "any", false, false, false, 367);
                                                                echo " sub-item2-content div-product\" data-cols=\"";
                                                                echo twig_get_attribute($this->env, $this->source, $context["widget"], "cols", [], "any", false, false, false, 367);
                                                                echo "\">
                                                                            ";
                                                                // line 368
                                                                if (twig_get_attribute($this->env, $this->source, $context["widget"], "image", [], "any", false, false, false, 368)) {
                                                                    // line 369
                                                                    echo "                                                                                <img src=\"";
                                                                    echo twig_get_attribute($this->env, $this->source, $context["widget"], "image", [], "any", false, false, false, 369);
                                                                    echo "\" alt=\"";
                                                                    echo twig_get_attribute($this->env, $this->source, $context["widget"], "title", [], "any", false, false, false, 369);
                                                                    echo "\" class=\"mega-second-image\" />
                                                                            ";
                                                                }
                                                                // line 371
                                                                echo "                                                                            <a class=\"a-mega-second-link\" href=\"";
                                                                echo twig_get_attribute($this->env, $this->source, $context["widget"], "link", [], "any", false, false, false, 371);
                                                                echo "\"><h4><strong>";
                                                                echo twig_get_attribute($this->env, $this->source, $context["widget"], "title", [], "any", false, false, false, 371);
                                                                echo "</strong></h4><div class=\"price\">";
                                                                echo twig_get_attribute($this->env, $this->source, $context["widget"], "price", [], "any", false, false, false, 371);
                                                                echo "</div></a>
                                                                        </div>
                                                                        
                                                                    ";
                                                            }
                                                            // line 375
                                                            echo "
                                                                    ";
                                                            // line 376
                                                            if ((twig_get_attribute($this->env, $this->source, $context["widget"], "type", [], "any", false, false, false, 376) == "html")) {
                                                                // line 377
                                                                echo "                                                                        <div class=\"col-sm-";
                                                                echo twig_get_attribute($this->env, $this->source, $context["widget"], "cols", [], "any", false, false, false, 377);
                                                                echo " sub-item2-content\" data-cols=\"";
                                                                echo twig_get_attribute($this->env, $this->source, $context["widget"], "cols", [], "any", false, false, false, 377);
                                                                echo "\">
                                                                            <h4><strong>";
                                                                // line 378
                                                                echo twig_get_attribute($this->env, $this->source, $context["widget"], "title", [], "any", false, false, false, 378);
                                                                echo "</strong></h4>
                                                                            ";
                                                                // line 379
                                                                echo twig_get_attribute($this->env, $this->source, $context["widget"], "content", [], "any", false, false, false, 379);
                                                                echo " 
                                                                        </div>
                                                                    ";
                                                            }
                                                            // line 382
                                                            echo "
                                                                    ";
                                                            // line 383
                                                            if ((twig_get_attribute($this->env, $this->source, $context["widget"], "type", [], "any", false, false, false, 383) == "link")) {
                                                                // line 384
                                                                echo "                                                                        <div class=\"col-sm-";
                                                                echo twig_get_attribute($this->env, $this->source, $context["widget"], "cols", [], "any", false, false, false, 384);
                                                                echo " sub-item2-content\" data-cols=\"";
                                                                echo twig_get_attribute($this->env, $this->source, $context["widget"], "cols", [], "any", false, false, false, 384);
                                                                echo "\">
                                                                            <a class=\"a-mega-second-link a-widget-link\" href=\"";
                                                                // line 385
                                                                echo twig_get_attribute($this->env, $this->source, $context["widget"], "link", [], "any", false, false, false, 385);
                                                                echo "\"><h4><strong>";
                                                                echo twig_get_attribute($this->env, $this->source, $context["widget"], "title", [], "any", false, false, false, 385);
                                                                echo "</strong></h4></a>
                                                                        </div>
                                                                    ";
                                                            }
                                                            // line 388
                                                            echo "                                                                ";
                                                        }
                                                        $_parent = $context['_parent'];
                                                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['widget'], $context['_parent'], $context['loop']);
                                                        $context = array_intersect_key($context, $_parent) + $_parent;
                                                        // line 389
                                                        echo "                                                            ";
                                                    }
                                                    // line 390
                                                    echo "                                                        ";
                                                }
                                                // line 391
                                                echo "                                                    ";
                                            }
                                            $_parent = $context['_parent'];
                                            unset($context['_seq'], $context['_iterated'], $context['type'], $context['widgets'], $context['_parent'], $context['loop']);
                                            $context = array_intersect_key($context, $_parent) + $_parent;
                                            // line 392
                                            echo "                                                </div>
                                            ";
                                        }
                                        // line 394
                                        echo "                                        ";
                                    }
                                    // line 395
                                    echo "                                    ";
                                }
                                // line 396
                                echo "
                                    <!-- Flyout Menu -->
                                    ";
                                // line 398
                                if ((twig_get_attribute($this->env, $this->source, $context["top_item"], "sub_menu_type", [], "any", false, false, false, 398) == "flyout")) {
                                    // line 399
                                    echo "                                        ";
                                    if ((twig_get_attribute($this->env, $this->source, $context["top_item"], "sub_menu_content_type", [], "any", false, false, false, 399) == "children")) {
                                        // line 400
                                        echo "                                            ";
                                        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["top_item"], "sub_items", [], "any", false, false, false, 400)) > 0)) {
                                            // line 401
                                            echo "                                                <div class=\"wd-sub-menu-container sub-menu-container\">
                                                    <ul class=\"ul-second-items\">
                                                        ";
                                            // line 403
                                            $context['_parent'] = $context;
                                            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["top_item"], "sub_items", [], "any", false, false, false, 403));
                                            foreach ($context['_seq'] as $context["_key"] => $context["sub_item2"]) {
                                                // line 404
                                                echo "                                                            ";
                                                if (twig_get_attribute($this->env, $this->source, $context["sub_item2"], "status", [], "any", false, false, false, 404)) {
                                                    // line 405
                                                    echo "                                                                <li class=\"li-second-items\">
                                                                    <a href=\"";
                                                    // line 406
                                                    echo twig_get_attribute($this->env, $this->source, $context["sub_item2"], "link", [], "any", false, false, false, 406);
                                                    echo "\" class=\"a-second-link a-item\">
                                                                        <span class=\"a-second-title\">";
                                                    // line 407
                                                    echo twig_get_attribute($this->env, $this->source, $context["sub_item2"], "title", [], "any", false, false, false, 407);
                                                    echo "</span>
                                                                        ";
                                                    // line 408
                                                    if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sub_item2"], "sub_items", [], "any", false, false, false, 408)) > 0)) {
                                                        // line 409
                                                        echo "                                                                            <i class=\"material-icons chevron-right\">chevron_right</i>
                                                                        ";
                                                    }
                                                    // line 411
                                                    echo "                                                                    </a>
                                                                    ";
                                                    // line 412
                                                    if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sub_item2"], "sub_items", [], "any", false, false, false, 412)) > 0)) {
                                                        // line 413
                                                        echo "                                                                        <div class=\"flyout-third-items\">
                                                                            <ul class=\"ul-third-items\">
                                                                                ";
                                                        // line 415
                                                        $context['_parent'] = $context;
                                                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["sub_item2"], "sub_items", [], "any", false, false, false, 415));
                                                        foreach ($context['_seq'] as $context["_key"] => $context["sub_item3"]) {
                                                            // line 416
                                                            echo "                                                                                    ";
                                                            if (twig_get_attribute($this->env, $this->source, $context["sub_item3"], "status", [], "any", false, false, false, 416)) {
                                                                // line 417
                                                                echo "                                                                                        <li class=\"li-third-items\">
                                                                                            <a href=\"";
                                                                // line 418
                                                                echo twig_get_attribute($this->env, $this->source, $context["sub_item3"], "link", [], "any", false, false, false, 418);
                                                                echo "\" class=\"a-third-link\"><span class=\"a-third-title\">";
                                                                echo twig_get_attribute($this->env, $this->source, $context["sub_item3"], "title", [], "any", false, false, false, 418);
                                                                echo "</span></a>
                                                                                        </li>
                                                                                    ";
                                                            }
                                                            // line 421
                                                            echo "                                                                                ";
                                                        }
                                                        $_parent = $context['_parent'];
                                                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sub_item3'], $context['_parent'], $context['loop']);
                                                        $context = array_intersect_key($context, $_parent) + $_parent;
                                                        // line 422
                                                        echo "                                                                            </ul>
                                                                        </div>
                                                                    ";
                                                    }
                                                    // line 425
                                                    echo "                                                                </li>
                                                            ";
                                                }
                                                // line 427
                                                echo "                                                        ";
                                            }
                                            $_parent = $context['_parent'];
                                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sub_item2'], $context['_parent'], $context['loop']);
                                            $context = array_intersect_key($context, $_parent) + $_parent;
                                            // line 428
                                            echo "                                                    </ul>
                                                </div>
                                            ";
                                        }
                                        // line 431
                                        echo "                                        ";
                                    }
                                    // line 432
                                    echo "
                                        ";
                                    // line 433
                                    if ((twig_get_attribute($this->env, $this->source, $context["top_item"], "sub_menu_content_type", [], "any", false, false, false, 433) == "category")) {
                                        // line 434
                                        echo "                                            ";
                                        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["top_item"], "sub_menu_content", [], "any", false, false, false, 434)) > 0)) {
                                            // line 435
                                            echo "                                                <div class=\"wd-sub-menu-container sub-menu-container\">
                                                    <ul class=\"ul-second-items\">
                                                        ";
                                            // line 437
                                            $context['_parent'] = $context;
                                            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["top_item"], "sub_menu_content", [], "any", false, false, false, 437));
                                            foreach ($context['_seq'] as $context["type"] => $context["widgets"]) {
                                                // line 438
                                                echo "                                                            ";
                                                if (($context["type"] == "category")) {
                                                    // line 439
                                                    echo "                                                                ";
                                                    if ((twig_length_filter($this->env, $context["widgets"]) > 0)) {
                                                        // line 440
                                                        echo "                                                                    ";
                                                        $context['_parent'] = $context;
                                                        $context['_seq'] = twig_ensure_traversable($context["widgets"]);
                                                        foreach ($context['_seq'] as $context["_key"] => $context["widget"]) {
                                                            // line 441
                                                            echo "                                                                        <li class=\"li-second-items\">
                                                                            <a href=\"";
                                                            // line 442
                                                            echo twig_get_attribute($this->env, $this->source, $context["widget"], "link", [], "any", false, false, false, 442);
                                                            echo "\" class=\"a-second-link a-item\">
                                                                                <span class=\"a-second-title\">";
                                                            // line 443
                                                            echo twig_get_attribute($this->env, $this->source, $context["widget"], "title", [], "any", false, false, false, 443);
                                                            echo "</span>
                                                                                ";
                                                            // line 444
                                                            if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["widget"], "children", [], "any", false, false, false, 444)) > 0)) {
                                                                // line 445
                                                                echo "                                                                                    <i class=\"material-icons chevron-right\">chevron_right</i>
                                                                                ";
                                                            }
                                                            // line 447
                                                            echo "                                                                            </a>
                                                                            ";
                                                            // line 448
                                                            if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["widget"], "children", [], "any", false, false, false, 448)) > 0)) {
                                                                // line 449
                                                                echo "                                                                                <div class=\"flyout-third-items\">
                                                                                    <ul class=\"ul-third-items\">
                                                                                        ";
                                                                // line 451
                                                                $context['_parent'] = $context;
                                                                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["widget"], "children", [], "any", false, false, false, 451));
                                                                foreach ($context['_seq'] as $context["_key"] => $context["c_category"]) {
                                                                    // line 452
                                                                    echo "                                                                                            <li class=\"li-third-items\">
                                                                                                <a href=\"";
                                                                    // line 453
                                                                    echo twig_get_attribute($this->env, $this->source, $context["c_category"], "link", [], "any", false, false, false, 453);
                                                                    echo "\" class=\"a-third-link\"><span class=\"a-third-title\">";
                                                                    echo twig_get_attribute($this->env, $this->source, $context["c_category"], "title", [], "any", false, false, false, 453);
                                                                    echo "</span></a>
                                                                                            </li>
                                                                                        ";
                                                                }
                                                                $_parent = $context['_parent'];
                                                                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c_category'], $context['_parent'], $context['loop']);
                                                                $context = array_intersect_key($context, $_parent) + $_parent;
                                                                // line 456
                                                                echo "                                                                                    </ul>
                                                                                </div>
                                                                            ";
                                                            }
                                                            // line 459
                                                            echo "                                                                        </li>
                                                                    ";
                                                        }
                                                        $_parent = $context['_parent'];
                                                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['widget'], $context['_parent'], $context['loop']);
                                                        $context = array_intersect_key($context, $_parent) + $_parent;
                                                        // line 461
                                                        echo "                                                                ";
                                                    }
                                                    // line 462
                                                    echo "                                                            ";
                                                }
                                                // line 463
                                                echo "                                                        ";
                                            }
                                            $_parent = $context['_parent'];
                                            unset($context['_seq'], $context['_iterated'], $context['type'], $context['widgets'], $context['_parent'], $context['loop']);
                                            $context = array_intersect_key($context, $_parent) + $_parent;
                                            // line 464
                                            echo "                                                    </ul>
                                                </div>
                                            ";
                                        }
                                        // line 467
                                        echo "                                        ";
                                    }
                                    // line 468
                                    echo "                                    ";
                                }
                                // line 469
                                echo "                                ";
                            }
                            // line 470
                            echo "                            </li>
                        ";
                        }
                        // line 472
                        echo "                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['top_item'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 473
                    echo "\t\t\t\t
                    ";
                    // line 474
                    if ((($context["count"] ?? null) > ($context["item_show"] ?? null))) {
                        // line 475
                        echo "                        ";
                        // line 478
                        echo "                        ";
                        // line 481
                        echo "                    ";
                    }
                    // line 482
                    echo "\t\t\t\t\t
                </ul>
            ";
                }
                // line 485
                echo "        </div>
    </div>
    </div>
    ";
            }
            // line 489
            echo "
    
";
        }
    }

    public function getTemplateName()
    {
        return "Grocery/template/extension/module/wd_megamenu.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1528 => 489,  1522 => 485,  1517 => 482,  1514 => 481,  1512 => 478,  1510 => 475,  1508 => 474,  1505 => 473,  1499 => 472,  1495 => 470,  1492 => 469,  1489 => 468,  1486 => 467,  1481 => 464,  1475 => 463,  1472 => 462,  1469 => 461,  1462 => 459,  1457 => 456,  1446 => 453,  1443 => 452,  1439 => 451,  1435 => 449,  1433 => 448,  1430 => 447,  1426 => 445,  1424 => 444,  1420 => 443,  1416 => 442,  1413 => 441,  1408 => 440,  1405 => 439,  1402 => 438,  1398 => 437,  1394 => 435,  1391 => 434,  1389 => 433,  1386 => 432,  1383 => 431,  1378 => 428,  1372 => 427,  1368 => 425,  1363 => 422,  1357 => 421,  1349 => 418,  1346 => 417,  1343 => 416,  1339 => 415,  1335 => 413,  1333 => 412,  1330 => 411,  1326 => 409,  1324 => 408,  1320 => 407,  1316 => 406,  1313 => 405,  1310 => 404,  1306 => 403,  1302 => 401,  1299 => 400,  1296 => 399,  1294 => 398,  1290 => 396,  1287 => 395,  1284 => 394,  1280 => 392,  1274 => 391,  1271 => 390,  1268 => 389,  1262 => 388,  1254 => 385,  1247 => 384,  1245 => 383,  1242 => 382,  1236 => 379,  1232 => 378,  1225 => 377,  1223 => 376,  1220 => 375,  1208 => 371,  1200 => 369,  1198 => 368,  1191 => 367,  1189 => 366,  1186 => 365,  1182 => 363,  1178 => 361,  1167 => 359,  1163 => 358,  1160 => 357,  1158 => 356,  1152 => 355,  1149 => 354,  1141 => 352,  1139 => 351,  1131 => 349,  1128 => 348,  1123 => 347,  1120 => 346,  1118 => 345,  1115 => 344,  1112 => 343,  1109 => 342,  1102 => 340,  1098 => 338,  1087 => 336,  1083 => 335,  1080 => 334,  1078 => 333,  1072 => 332,  1069 => 331,  1061 => 329,  1059 => 328,  1051 => 326,  1046 => 325,  1043 => 324,  1040 => 323,  1036 => 322,  1029 => 321,  1026 => 320,  1022 => 318,  1019 => 317,  1013 => 316,  1009 => 314,  1005 => 312,  999 => 311,  991 => 309,  988 => 308,  984 => 307,  981 => 306,  979 => 305,  973 => 304,  963 => 303,  955 => 302,  952 => 301,  947 => 300,  945 => 299,  938 => 298,  935 => 297,  933 => 296,  930 => 295,  927 => 294,  923 => 292,  917 => 290,  914 => 289,  908 => 287,  906 => 286,  903 => 285,  898 => 282,  892 => 280,  889 => 279,  883 => 277,  881 => 276,  876 => 275,  874 => 274,  862 => 273,  860 => 272,  857 => 271,  854 => 270,  850 => 269,  847 => 268,  845 => 267,  843 => 264,  841 => 263,  836 => 262,  834 => 261,  830 => 259,  826 => 257,  822 => 256,  818 => 254,  815 => 253,  813 => 252,  810 => 251,  804 => 247,  799 => 244,  792 => 242,  788 => 240,  785 => 239,  782 => 238,  779 => 237,  774 => 234,  768 => 233,  765 => 232,  762 => 231,  755 => 229,  750 => 226,  739 => 223,  736 => 222,  732 => 221,  728 => 219,  726 => 218,  723 => 217,  719 => 215,  717 => 214,  713 => 213,  709 => 212,  706 => 211,  701 => 210,  698 => 209,  695 => 208,  691 => 207,  687 => 205,  684 => 204,  682 => 203,  679 => 202,  676 => 201,  671 => 198,  665 => 197,  661 => 195,  656 => 192,  650 => 191,  642 => 188,  639 => 187,  636 => 186,  632 => 185,  628 => 183,  626 => 182,  623 => 181,  619 => 179,  617 => 178,  613 => 177,  609 => 176,  606 => 175,  603 => 174,  599 => 173,  595 => 171,  592 => 170,  589 => 169,  587 => 168,  583 => 166,  580 => 165,  577 => 164,  573 => 162,  567 => 161,  564 => 160,  561 => 159,  555 => 158,  547 => 155,  540 => 154,  538 => 153,  535 => 152,  529 => 149,  525 => 148,  518 => 147,  516 => 146,  513 => 145,  507 => 141,  503 => 140,  495 => 138,  492 => 137,  484 => 135,  478 => 133,  476 => 132,  473 => 131,  471 => 130,  467 => 129,  462 => 128,  453 => 124,  449 => 123,  446 => 122,  444 => 121,  437 => 120,  435 => 119,  432 => 118,  428 => 116,  424 => 114,  413 => 112,  409 => 111,  406 => 110,  404 => 109,  398 => 108,  395 => 107,  387 => 105,  385 => 104,  377 => 102,  374 => 101,  369 => 100,  366 => 99,  363 => 98,  359 => 97,  352 => 96,  349 => 95,  347 => 94,  344 => 93,  341 => 92,  337 => 90,  331 => 89,  328 => 88,  325 => 87,  317 => 84,  313 => 82,  302 => 80,  298 => 79,  295 => 78,  293 => 77,  287 => 76,  284 => 75,  276 => 73,  274 => 72,  266 => 70,  261 => 69,  258 => 68,  255 => 67,  251 => 66,  244 => 65,  241 => 64,  239 => 63,  236 => 62,  232 => 60,  229 => 59,  223 => 58,  219 => 56,  215 => 54,  209 => 53,  201 => 51,  198 => 50,  194 => 49,  191 => 48,  189 => 47,  183 => 46,  173 => 45,  165 => 44,  162 => 43,  157 => 42,  155 => 41,  148 => 40,  145 => 39,  143 => 38,  140 => 37,  137 => 36,  133 => 34,  127 => 32,  124 => 31,  118 => 29,  116 => 28,  113 => 27,  109 => 25,  103 => 23,  100 => 22,  94 => 20,  92 => 19,  87 => 18,  85 => 17,  73 => 16,  70 => 15,  66 => 14,  63 => 13,  61 => 12,  57 => 11,  53 => 9,  51 => 8,  47 => 6,  43 => 4,  40 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Grocery/template/extension/module/wd_megamenu.twig", "");
    }
}
