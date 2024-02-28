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

/* Grocery/template/common/search.twig */
class __TwigTemplate_aa170b40f6c356b95d55833f0b472f808b19f652e389c3a13bbb9817ffa6f6e9 extends \Twig\Template
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
        echo "<div id=\"search\">
<div id=\"searchbox\" class=\"input-group searchtoggle\">
\t
  <input type=\"text\" name=\"search\" value=\"";
        // line 4
        echo ($context["search"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["text_search"] ?? null);
        echo "\" class=\"form-control input-lg\" />
  <span class=\"input-group-btn\">
    <button type=\"button\" class=\"btn btn-default btn-lg\"><div class=\"search-icon\"></div>";
        // line 6
        echo ($context["button_search"] ?? null);
        echo "</button>
  </span>
  </div>
  </div>
";
    }

    public function getTemplateName()
    {
        return "Grocery/template/common/search.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 6,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Grocery/template/common/search.twig", "");
    }
}
