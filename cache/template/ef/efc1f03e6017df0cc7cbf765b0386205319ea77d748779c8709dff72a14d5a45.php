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

/* design/banner_form.twig */
class __TwigTemplate_7d8ae645c08f21be7353f897df3f6c7ffdd1268783f4bc1710c74e4861c4bc35 extends \Twig\Template
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
        <button type=\"submit\" form=\"form-banner\" data-toggle=\"tooltip\" title=\"";
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
            echo "        <li><a href=\"";
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
        echo "      </ul>
    </div>
  </div>
  <div class=\"container-fluid\">
    ";
        // line 17
        if (($context["error_warning"] ?? null)) {
            // line 18
            echo "    <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 22
        echo "    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 24
        echo ($context["text_form"] ?? null);
        echo "</h3>
      </div>
      <div class=\"panel-body\">
        <form action=\"";
        // line 27
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-banner\" class=\"form-horizontal\">
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-name\">";
        // line 29
        echo ($context["entry_name"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"name\" value=\"";
        // line 31
        echo ($context["name"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_name"] ?? null);
        echo "\" id=\"input-name\" class=\"form-control\" />
              ";
        // line 32
        if (($context["error_name"] ?? null)) {
            // line 33
            echo "              <div class=\"text-danger\">";
            echo ($context["error_name"] ?? null);
            echo "</div>
              ";
        }
        // line 35
        echo "            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-status\">";
        // line 38
        echo ($context["entry_status"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <select name=\"status\" id=\"input-status\" class=\"form-control\">
                ";
        // line 41
        if (($context["status"] ?? null)) {
            // line 42
            echo "                <option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                <option value=\"0\">";
            // line 43
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                ";
        } else {
            // line 45
            echo "                <option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                <option value=\"0\" selected=\"selected\">";
            // line 46
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                ";
        }
        // line 48
        echo "              </select>
            </div>
          </div>
          <br />
          <ul class=\"nav nav-tabs\" id=\"language\">
            ";
        // line 53
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 54
            echo "            <li><a href=\"#language";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 54);
            echo "\" data-toggle=\"tab\"><img src=\"language/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 54);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 54);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 54);
            echo "\" /> ";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 54);
            echo "</a></li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "          </ul>
          <div class=\"tab-content\">
            ";
        // line 58
        $context["image_row"] = 0;
        // line 59
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 60
            echo "            <div class=\"tab-pane\" id=\"language";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 60);
            echo "\">
              <table id=\"images";
            // line 61
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 61);
            echo "\" class=\"table table-striped table-bordered table-hover\">
                <thead>
                  <tr>
                    <td class=\"text-left\" style=\"width: 20%;\">";
            // line 64
            echo ($context["entry_title"] ?? null);
            echo "</td>
                    <td class=\"text-left\" style=\"width: 20%;\">";
            // line 65
            echo ($context["entry_title1"] ?? null);
            echo "</td>
                    <td class=\"text-left\" style=\"width: 25%;\">";
            // line 66
            echo ($context["entry_description"] ?? null);
            echo "</td>
                    <td class=\"text-left\" style=\"width: 10%;\">";
            // line 67
            echo ($context["entry_button"] ?? null);
            echo "</td>
                    <td class=\"text-left\">";
            // line 68
            echo ($context["entry_link"] ?? null);
            echo "</td>
                    <td class=\"text-center\">";
            // line 69
            echo ($context["entry_image"] ?? null);
            echo "</td>
                    <td class=\"text-right\">";
            // line 70
            echo ($context["entry_sort_order"] ?? null);
            echo "</td>
                    <td></td>
                  </tr>
                </thead>
                <tbody>
                  ";
            // line 75
            if ((($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["banner_images"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 75)] ?? null) : null)) {
                // line 76
                echo "                  ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["banner_images"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 76)] ?? null) : null));
                foreach ($context['_seq'] as $context["_key"] => $context["banner_image"]) {
                    // line 77
                    echo "                  <tr id=\"image-row";
                    echo ($context["image_row"] ?? null);
                    echo "\">
                    <td class=\"text-left\"><input type=\"text\" name=\"banner_image[";
                    // line 78
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 78);
                    echo "][";
                    echo ($context["image_row"] ?? null);
                    echo "][title]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["banner_image"], "title", [], "any", false, false, false, 78);
                    echo "\" placeholder=\"";
                    echo ($context["entry_title"] ?? null);
                    echo "\" class=\"form-control\" />
                      ";
                    // line 79
                    if ((($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = ($context["error_banner_image"] ?? null)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 79)] ?? null) : null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b[($context["image_row"] ?? null)] ?? null) : null)) {
                        // line 80
                        echo "                      <div class=\"text-danger\">";
                        echo (($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = (($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = ($context["error_banner_image"] ?? null)) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 80)] ?? null) : null)) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4[($context["image_row"] ?? null)] ?? null) : null);
                        echo "</div>
                      ";
                    }
                    // line 81
                    echo "</td>
                    <td class=\"text-left\"><input type=\"text\" name=\"banner_image[";
                    // line 82
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 82);
                    echo "][";
                    echo ($context["image_row"] ?? null);
                    echo "][title1]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["banner_image"], "title1", [], "any", false, false, false, 82);
                    echo "\" placeholder=\"";
                    echo ($context["entry_title1"] ?? null);
                    echo "\" class=\"form-control\" />
                      ";
                    // line 83
                    if ((($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = (($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 = ($context["error_banner_image"] ?? null)) && is_array($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52) || $__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 instanceof ArrayAccess ? ($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 83)] ?? null) : null)) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e[($context["image_row"] ?? null)] ?? null) : null)) {
                        // line 84
                        echo "                      <div class=\"text-danger\">";
                        echo (($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 = (($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 = ($context["error_banner_image"] ?? null)) && is_array($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386) || $__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 instanceof ArrayAccess ? ($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 84)] ?? null) : null)) && is_array($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136) || $__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 instanceof ArrayAccess ? ($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136[($context["image_row"] ?? null)] ?? null) : null);
                        echo "</div>
                      ";
                    }
                    // line 85
                    echo "</td>
                    <td class=\"text-center\"><textarea name=\"banner_image[";
                    // line 86
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 86);
                    echo "][";
                    echo ($context["image_row"] ?? null);
                    echo "][description]\" data-toggle=\"summernote\" placeholder=\"";
                    echo ($context["entry_description"] ?? null);
                    echo "\" class=\"form-control\" />";
                    echo twig_get_attribute($this->env, $this->source, $context["banner_image"], "description", [], "any", false, false, false, 86);
                    echo "</textarea></td>
                    <td class=\"text-center\"><textarea name=\"banner_image[";
                    // line 87
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 87);
                    echo "][";
                    echo ($context["image_row"] ?? null);
                    echo "][button]\" data-toggle=\"summernote\" placeholder=\"";
                    echo ($context["entry_button"] ?? null);
                    echo "\" class=\"form-control\" />";
                    echo twig_get_attribute($this->env, $this->source, $context["banner_image"], "button", [], "any", false, false, false, 87);
                    echo "</textarea></td>
                    <td class=\"text-left\" style=\"width: 20%;\"><input type=\"text\" name=\"banner_image[";
                    // line 88
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 88);
                    echo "][";
                    echo ($context["image_row"] ?? null);
                    echo "][link]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["banner_image"], "link", [], "any", false, false, false, 88);
                    echo "\" placeholder=\"";
                    echo ($context["entry_link"] ?? null);
                    echo "\" class=\"form-control\" /></td>
                    <td class=\"text-center\"><a href=\"\" id=\"thumb-image";
                    // line 89
                    echo ($context["image_row"] ?? null);
                    echo "\" data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["banner_image"], "thumb", [], "any", false, false, false, 89);
                    echo "\" alt=\"\" title=\"\" data-placeholder=\"";
                    echo ($context["placeholder"] ?? null);
                    echo "\" /></a>
                      <input type=\"hidden\" name=\"banner_image[";
                    // line 90
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 90);
                    echo "][";
                    echo ($context["image_row"] ?? null);
                    echo "][image]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["banner_image"], "image", [], "any", false, false, false, 90);
                    echo "\" id=\"input-image";
                    echo ($context["image_row"] ?? null);
                    echo "\" /></td>
                    <td class=\"text-right\" style=\"width: 20%;\"><input type=\"text\" name=\"banner_image[";
                    // line 91
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 91);
                    echo "][";
                    echo ($context["image_row"] ?? null);
                    echo "][sort_order]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["banner_image"], "sort_order", [], "any", false, false, false, 91);
                    echo "\" placeholder=\"";
                    echo ($context["entry_sort_order"] ?? null);
                    echo "\" class=\"form-control\" /></td>
                    <td class=\"text-left\"><button type=\"button\" onclick=\"\$('#image-row";
                    // line 92
                    echo ($context["image_row"] ?? null);
                    echo ", .tooltip').remove();\" data-toggle=\"tooltip\" title=\"";
                    echo ($context["button_remove"] ?? null);
                    echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>
                  </tr>
                  ";
                    // line 94
                    $context["image_row"] = (($context["image_row"] ?? null) + 1);
                    // line 95
                    echo "                  ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['banner_image'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 96
                echo "                  ";
            }
            // line 97
            echo "                </tbody>
                <tfoot>
                  <tr>
                    <td colspan=\"4\"></td>
                    <td class=\"text-left\"><button type=\"button\" onclick=\"addImage('";
            // line 101
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 101);
            echo "');\" data-toggle=\"tooltip\" title=\"";
            echo ($context["button_banner_add"] ?? null);
            echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus-circle\"></i></button></td>
                  </tr>
                </tfoot>
              </table>
            </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 107
        echo "          </div>
        </form>
      </div>
    </div>
  </div>
  <script type=\"text/javascript\"><!--
var image_row = ";
        // line 113
        echo ($context["image_row"] ?? null);
        echo ";

function addImage(language_id) {
\thtml  = '<tr id=\"image-row' + image_row + '\">';
  html += '  <td class=\"text-left\" style=\"width: 20%;><input type=\"text\" name=\"banner_image[' + language_id + '][' + image_row + '][title]\" value=\"\" placeholder=\"";
        // line 117
        echo ($context["entry_title"] ?? null);
        echo "\" class=\"form-control\" /></td>';\t
\thtml += '  <td class=\"text-left\" style=\"width: 15%;\"><textarea type=\"text\" name=\"banner_image[' + language_id + '][' + image_row + '][description]\" data-toggle=\"summernote\" placeholder=\"";
        // line 118
        echo ($context["entry_description"] ?? null);
        echo "\" class=\"form-control\" /></textarea></td>';
  html += '  <td class=\"text-left\" style=\"width: 10%;\"><textarea type=\"text\" name=\"banner_image[' + language_id + '][' + image_row + '][button]\" data-toggle=\"summernote\" placeholder=\"";
        // line 119
        echo ($context["entry_button"] ?? null);
        echo "\" class=\"form-control\" /></textarea></td>';
  html += '  <td class=\"text-left\" style=\"width: 20%;\"><input type=\"text\" name=\"banner_image[' + language_id + '][' + image_row + '][link]\" value=\"\" placeholder=\"";
        // line 120
        echo ($context["entry_link"] ?? null);
        echo "\" class=\"form-control\" /></td>';\t
\thtml += '  <td class=\"text-center\"><a href=\"\" id=\"thumb-image' + image_row + '\" data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"";
        // line 121
        echo ($context["placeholder"] ?? null);
        echo "\" alt=\"\" title=\"\" data-placeholder=\"";
        echo ($context["placeholder"] ?? null);
        echo "\" /></a><input type=\"hidden\" name=\"banner_image[' + language_id + '][' + image_row + '][image]\" value=\"\" id=\"input-image' + image_row + '\" /></td>';
\thtml += '  <td class=\"text-right\" style=\"width: 10%;\"><input type=\"text\" name=\"banner_image[' + language_id + '][' + image_row + '][sort_order]\" value=\"\" placeholder=\"";
        // line 122
        echo ($context["entry_sort_order"] ?? null);
        echo "\" class=\"form-control\" /></td>';
\thtml += '  <td class=\"text-left\"><button type=\"button\" onclick=\"\$(\\'#image-row' + image_row  + ', .tooltip\\').remove();\" data-toggle=\"tooltip\" title=\"";
        // line 123
        echo ($context["button_remove"] ?? null);
        echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>';
\thtml += '</tr>';
\t
\t\$('#images' + language_id + ' tbody').append(html);
\t
\timage_row++;
}
//--></script> 
  <script type=\"text/javascript\"><!--
\$('#language a:first').tab('show');
//--></script> 
</div>
";
        // line 135
        echo ($context["footer"] ?? null);
        echo " ";
    }

    public function getTemplateName()
    {
        return "design/banner_form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  447 => 135,  432 => 123,  428 => 122,  422 => 121,  418 => 120,  414 => 119,  410 => 118,  406 => 117,  399 => 113,  391 => 107,  377 => 101,  371 => 97,  368 => 96,  362 => 95,  360 => 94,  353 => 92,  343 => 91,  333 => 90,  325 => 89,  315 => 88,  305 => 87,  295 => 86,  292 => 85,  286 => 84,  284 => 83,  274 => 82,  271 => 81,  265 => 80,  263 => 79,  253 => 78,  248 => 77,  243 => 76,  241 => 75,  233 => 70,  229 => 69,  225 => 68,  221 => 67,  217 => 66,  213 => 65,  209 => 64,  203 => 61,  198 => 60,  193 => 59,  191 => 58,  187 => 56,  170 => 54,  166 => 53,  159 => 48,  154 => 46,  149 => 45,  144 => 43,  139 => 42,  137 => 41,  131 => 38,  126 => 35,  120 => 33,  118 => 32,  112 => 31,  107 => 29,  102 => 27,  96 => 24,  92 => 22,  84 => 18,  82 => 17,  76 => 13,  65 => 11,  61 => 10,  56 => 8,  50 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "design/banner_form.twig", "");
    }
}
