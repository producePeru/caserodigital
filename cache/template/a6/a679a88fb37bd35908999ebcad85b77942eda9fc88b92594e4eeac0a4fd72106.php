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

/* Grocery/template/common/home.twig */
class __TwigTemplate_e6a3b71d51bb9b5b95e74186a6d6d4885098c83b3b40a63465f4c6bc71bf8fe3 extends \Twig\Template
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
";
        // line 2
        echo ($context["column_left"] ?? null);
        echo "
    ";
        // line 3
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 4
            echo "    ";
            $context["class"] = "col-sm-6";
            // line 5
            echo "    ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 6
            echo "    ";
            $context["class"] = "col-sm-9";
            // line 7
            echo "    ";
        } else {
            // line 8
            echo "    ";
            $context["class"] = "col-sm-12";
            // line 9
            echo "    ";
        }
        // line 10
        echo "
    <div id=\"content\" class=\"";
        // line 11
        echo ($context["class"] ?? null);
        echo "\">
        <div class=\"content-top\"> 
            <div class=\"content-top-inner\">
                    ";
        // line 14
        echo ($context["content_top"] ?? null);
        echo "
            </div>
        </div>

        <div class=\"content-bottom\">
             ";
        // line 19
        echo ($context["content_bottom"] ?? null);
        echo "
        </div>
    ";
        // line 21
        echo ($context["column_right"] ?? null);
        echo "
</div>
";
        // line 23
        echo ($context["footer"] ?? null);
        echo "

<script type=\"text/javascript\">
    \$(document).ready(function(){
    \$('.subbanner-inner').owlCarousel({
            items: 3,
            autoPlay: true,
            singleItem: false,
            navigation: true,
            navigationText: ['<i class=\"fa fa-chevron-left fa-5x\"></i>', '<i class=\"fa fa-chevron-right fa-5x\"></i>'],
            pagination: false,
            itemsDesktop : [1500,3],
            itemsDesktopSmall:[1199,3],
            itemsTablet :\t[767,3],
            itemsTabletSmall : [650, 2],
            itemsMobile: [479, 1]
        });
   
    \$('.offerbanner-inner').owlCarousel({
            items: 4,
            autoPlay: true,
            singleItem: false,
            navigation: true,
            navigationText: ['<i class=\"fa fa-chevron-left fa-5x\"></i>', '<i class=\"fa fa-chevron-right fa-5x\"></i>'],
            pagination: false,
            itemsDesktop : [1500,4],
            itemsDesktopSmall:[1199,3],
            itemsTablet :\t[767,3],
            itemsTabletSmall : [650, 2],
            itemsMobile: [479, 1]
        });
    });
</script>";
    }

    public function getTemplateName()
    {
        return "Grocery/template/common/home.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 23,  87 => 21,  82 => 19,  74 => 14,  68 => 11,  65 => 10,  62 => 9,  59 => 8,  56 => 7,  53 => 6,  50 => 5,  47 => 4,  45 => 3,  41 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Grocery/template/common/home.twig", "");
    }
}
