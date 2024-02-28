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

/* extension/module/blogger/comments.twig */
class __TwigTemplate_09b2eafe5e2d195de58320477e6d0f58431452f1c1a888479cda62fc4c874649 extends \Twig\Template
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
        echo " ";
        echo ($context["column_left"] ?? null);
        echo " 
<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <div class=\"pull-right\">
        <a href=\"";
        // line 6
        echo ($context["return"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_return"] ?? null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-reply\"></i></a>
        <button type=\"button\" data-toggle=\"tooltip\" title=\"";
        // line 7
        echo ($context["button_delete"] ?? null);
        echo "\" class=\"btn btn-danger\" onclick=\"confirm('";
        echo ($context["text_confirm"] ?? null);
        echo " ') ? \$('#form-blogger').submit() : false;\"><i class=\"fa fa-trash-o\"></i></button>
      </div>
      <h1>";
        // line 9
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      <ul class=\"breadcrumb\">
        ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            echo " 
       <li><a href=\"";
            // line 12
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 12);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 12);
            echo "</a></li>
 ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "  
         
      </ul>
    </div>
  </div>

    <div class=\"container-fluid\">
     ";
        // line 20
        if (($context["error_warning"] ?? null)) {
            echo " 
    <div class=\"alert alert-danger\"><i class=\"fa fa-exclamation-circle\"></i> ";
            // line 21
            echo ($context["error_warning"] ?? null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 24
        echo " 

 ";
        // line 26
        if (($context["success"] ?? null)) {
            echo " 
    <div class=\"alert alert-success\"><i class=\"fa fa-check-circle\"></i> ";
            // line 27
            echo ($context["success"] ?? null);
            echo " 
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 30
        echo " 

   <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-list\"></i> ";
        // line 34
        echo ($context["text_list"] ?? null);
        echo "</h3>
      </div>
      <div class=\"panel-body\">
        <form action=\"";
        // line 37
        echo ($context["delete"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-blogger\">
          <div class=\"table-responsive\">
            <table class=\"table table-bordered table-hover\">
              <thead>
                <tr>
                  <td style=\"width: 1px;\" class=\"text-center\"><input type=\"checkbox\" onclick=\"\$('input[name*=\\'selected\\']').prop('checked', this.checked);\" /></td>
                  <td class=\"text-left\">";
        // line 43
        if ((($context["sort"] ?? null) == "author")) {
            echo " 
                    <a href=\"";
            // line 44
            echo ($context["sort_author"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_author"] ?? null);
            echo "</a>
                     ";
        } else {
            // line 45
            echo "   
                    <a href=\"";
            // line 46
            echo ($context["sort_author"] ?? null);
            echo "\">";
            echo ($context["column_author"] ?? null);
            echo "</a>
                    ";
        }
        // line 47
        echo " </td>
                  <td class=\"text-left\">";
        // line 48
        echo ($context["column_email"] ?? null);
        echo "</td>
                  <td class=\"text-left\">";
        // line 49
        echo ($context["column_status"] ?? null);
        echo "</td>
                  <td class=\"text-right\">";
        // line 50
        if ((($context["sort"] ?? null) == "date_added")) {
            echo " 
                    <a href=\"";
            // line 51
            echo ($context["sort_date_added"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_date_added"] ?? null);
            echo "</a>
                     ";
        } else {
            // line 52
            echo "   
                    <a href=\"";
            // line 53
            echo ($context["sort_date_added"] ?? null);
            echo "\">";
            echo ($context["column_date_added"] ?? null);
            echo "</a>
                    ";
        }
        // line 54
        echo " </td>
                  <td class=\"text-right\">";
        // line 55
        echo ($context["column_action"] ?? null);
        echo "</td>
                </tr>
              </thead>
              <tbody>
                ";
        // line 59
        if (($context["blog_comments"] ?? null)) {
            echo " 
                ";
            // line 60
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["blog_comments"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
                echo " 
                <tr>
                  <td class=\"text-center\">";
                // line 62
                if (twig_get_attribute($this->env, $this->source, $context["comment"], "selected", [], "any", false, false, false, 62)) {
                    // line 63
                    echo "                    <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["comment"], "blogger_comment_id", [], "any", false, false, false, 63);
                    echo "\" checked=\"checked\" />
                     ";
                } else {
                    // line 64
                    echo "   
                    <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    // line 65
                    echo twig_get_attribute($this->env, $this->source, $context["comment"], "blogger_comment_id", [], "any", false, false, false, 65);
                    echo "\" />
                    ";
                }
                // line 66
                echo " </td>
                  <td class=\"text-left\">";
                // line 67
                echo twig_get_attribute($this->env, $this->source, $context["comment"], "author", [], "any", false, false, false, 67);
                echo "</td>
                  <td class=\"text-left\">";
                // line 68
                echo twig_get_attribute($this->env, $this->source, $context["comment"], "email", [], "any", false, false, false, 68);
                echo "</td>
                  <td class=\"text-left\">";
                // line 69
                echo twig_get_attribute($this->env, $this->source, $context["comment"], "approved", [], "any", false, false, false, 69);
                echo "</td>
                  <td class=\"text-right\">";
                // line 70
                echo twig_get_attribute($this->env, $this->source, $context["comment"], "date_added", [], "any", false, false, false, 70);
                echo "</td>
                  <td class=\"text-right\">";
                // line 71
                if (twig_get_attribute($this->env, $this->source, $context["comment"], "is_approved", [], "any", false, false, false, 71)) {
                    echo " 
                      <a href=\"";
                    // line 72
                    echo twig_get_attribute($this->env, $this->source, $context["comment"], "disapprove", [], "any", false, false, false, 72);
                    echo "\" data-toggle=\"tooltip\" title=\"";
                    echo ($context["button_disapprove"] ?? null);
                    echo "\" class=\"btn btn-warning\"><i class=\"fa fa-refresh\"></i></a>
                       ";
                } else {
                    // line 73
                    echo "   
                      <a href=\"";
                    // line 74
                    echo twig_get_attribute($this->env, $this->source, $context["comment"], "approve", [], "any", false, false, false, 74);
                    echo "\" data-toggle=\"tooltip\" title=\"";
                    echo ($context["button_approve"] ?? null);
                    echo "\" class=\"btn btn-success\"><i class=\"fa fa-refresh\"></i></a>
                      ";
                }
                // line 75
                echo " 
                      <a href=\"";
                // line 76
                echo twig_get_attribute($this->env, $this->source, $context["comment"], "view", [], "any", false, false, false, 76);
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_view"] ?? null);
                echo "\" class=\"btn btn-info\"><i class=\"fa fa-eye\"></i></a>
                    </td>
                </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 79
            echo " 
                 ";
        } else {
            // line 80
            echo "   
                <tr>
                  <td class=\"text-center\" colspan=\"6\">";
            // line 82
            echo ($context["text_no_results"] ?? null);
            echo "</td>
                </tr>
                 ";
        }
        // line 84
        echo " 
              </tbody>
            </table>
          </div>
        </form>
        <div class=\"row\">
          <div class=\"col-sm-6 text-left\">";
        // line 90
        echo ($context["pagination"] ?? null);
        echo "</div>
          <div class=\"col-sm-6 text-right\">";
        // line 91
        echo ($context["results"] ?? null);
        echo "</div>
        </div>
      </div>
    </div>
  </div>
</div>
";
        // line 97
        echo ($context["footer"] ?? null);
        echo " ";
    }

    public function getTemplateName()
    {
        return "extension/module/blogger/comments.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  321 => 97,  312 => 91,  308 => 90,  300 => 84,  294 => 82,  290 => 80,  286 => 79,  274 => 76,  271 => 75,  264 => 74,  261 => 73,  254 => 72,  250 => 71,  246 => 70,  242 => 69,  238 => 68,  234 => 67,  231 => 66,  226 => 65,  223 => 64,  217 => 63,  215 => 62,  208 => 60,  204 => 59,  197 => 55,  194 => 54,  187 => 53,  184 => 52,  175 => 51,  171 => 50,  167 => 49,  163 => 48,  160 => 47,  153 => 46,  150 => 45,  141 => 44,  137 => 43,  128 => 37,  122 => 34,  116 => 30,  109 => 27,  105 => 26,  101 => 24,  94 => 21,  90 => 20,  81 => 13,  71 => 12,  65 => 11,  60 => 9,  53 => 7,  47 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/module/blogger/comments.twig", "");
    }
}
