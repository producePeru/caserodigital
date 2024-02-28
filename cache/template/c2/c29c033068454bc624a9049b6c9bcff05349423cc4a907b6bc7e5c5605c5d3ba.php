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

/* extension/module/wd_megamenu.twig */
class __TwigTemplate_6d3cc38084f5badc96fd20a7bcfc12f0ce5c6b3e7076450a838172bda27a951c extends \Twig\Template
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
        echo ($context["column_left"] ?? null);
        echo "
<div id=\"content\">
    <div class=\"page-header\">
        <div class=\"container-fluid\">
            <div class=\"pull-right\">
                <button type=\"submit\" form=\"form-module\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo ($context["button_save"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i></button>
                <a href=\"";
        // line 7
        echo ($context["cancel"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_cancel"] ?? null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-reply\"></i></a></div>
            <h1>";
        // line 8
        echo ($context["heading_title"] ?? null);
        echo "</h1>
            <ul class=\"breadcrumb\">
                ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 11
            echo "                    <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 11);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 11);
            echo "</a></li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "            </ul>
        </div>
    </div>
    <div class=\"container-fluid\">
        ";
        // line 17
        if (($context["error_warning"] ?? null)) {
            // line 18
            echo "            <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
            </div>
        ";
        }
        // line 22
        echo "        <div class=\"panel panel-default\">
            <div class=\"panel-heading\">
                <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 24
        echo ($context["text_edit"] ?? null);
        echo "</h3>
                <div class=\"btn-title\">
                    <a href=\"";
        // line 26
        echo ($context["menu_editor_link"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["text_menu_editor"] ?? null);
        echo "\" class=\"btn btn-widget\"><i class=\"fa fa-bars\" aria-hidden=\"true\"></i> Menu Editor</a>
                </div>
            </div>
            <div class=\"panel-body\">
                <form action=\"";
        // line 30
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-module\" class=\"form-horizontal\">
                    <div class=\"frm-settings\">
                        <div class=\"form-group\">
                            <h4 style=\"padding:0 15px;\">";
        // line 33
        echo ($context["text_general_setting"] ?? null);
        echo "</h4>
                        </div>
                        <div class=\"form-group\">
                            <label class=\"col-sm-2 control-label\" for=\"input-name\">";
        // line 36
        echo ($context["entry_name"] ?? null);
        echo "</label>
                            <div class=\"col-sm-10\">
                                <input type=\"text\" name=\"name\" value=\"";
        // line 38
        echo ($context["name"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_name"] ?? null);
        echo "\" id=\"input-name\" class=\"form-control\" />
                                ";
        // line 39
        if (($context["error_name"] ?? null)) {
            // line 40
            echo "                                    <div class=\"text-danger\">";
            echo ($context["error_name"] ?? null);
            echo "</div>
                                ";
        }
        // line 42
        echo "                            </div>
                        </div>
                        <div class=\"form-group\">
                            <label class=\"col-sm-2 control-label\" for=\"input-status\">";
        // line 45
        echo ($context["entry_status"] ?? null);
        echo "</label>
                            <div class=\"col-sm-4\">
                                <select name=\"status\" id=\"input-status\" class=\"form-control\">
                                    ";
        // line 48
        if (($context["status"] ?? null)) {
            // line 49
            echo "                                        <option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                                        <option value=\"0\">";
            // line 50
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                                    ";
        } else {
            // line 52
            echo "                                        <option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                                        <option value=\"0\" selected=\"selected\">";
            // line 53
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                                    ";
        }
        // line 55
        echo "                                </select>
                            </div>
                        </div>
                        <div class=\"form-group\">
                            <label class=\"col-sm-2 control-label\" for=\"input-menu\">";
        // line 59
        echo ($context["entry_choose_menu"] ?? null);
        echo "</label>
                            <div class=\"col-sm-4\">
                                <select name=\"menu\" id=\"input-menu\" class=\"form-control\">
                                    ";
        // line 62
        if (($context["menus"] ?? null)) {
            // line 63
            echo "                                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["menus"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
                // line 64
                echo "                                            <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["m"], "id", [], "any", false, false, false, 64);
                echo "\" ";
                if ((($context["menu"] ?? null) == twig_get_attribute($this->env, $this->source, $context["m"], "id", [], "any", false, false, false, 64))) {
                    echo " selected=\"selected\" ";
                }
                echo ">";
                echo twig_get_attribute($this->env, $this->source, $context["m"], "name", [], "any", false, false, false, 64);
                echo "</option>
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['m'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 66
            echo "                                    ";
        } else {
            // line 67
            echo "                                        <option>";
            echo ($context["text_no_menus"] ?? null);
            echo "</option>
                                    ";
        }
        // line 69
        echo "                                </select>
                            </div>
                        </div>
                        
                    </div>

                    
                </form>
            </div>
        </div>
    </div>
</div>
";
        // line 81
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "extension/module/wd_megamenu.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  231 => 81,  217 => 69,  211 => 67,  208 => 66,  193 => 64,  188 => 63,  186 => 62,  180 => 59,  174 => 55,  169 => 53,  164 => 52,  159 => 50,  154 => 49,  152 => 48,  146 => 45,  141 => 42,  135 => 40,  133 => 39,  127 => 38,  122 => 36,  116 => 33,  110 => 30,  101 => 26,  96 => 24,  92 => 22,  84 => 18,  82 => 17,  76 => 13,  65 => 11,  61 => 10,  56 => 8,  50 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/module/wd_megamenu.twig", "");
    }
}
