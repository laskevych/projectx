<?php

/* main.html */
class __TwigTemplate_b65a75f99c1dd74c6a5875f42b58d53b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("index.html");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "index.html";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo "Project X CMS(demo)";
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "<div class=\"col-12 text-center\">
\t<p class=\"display-4\">Главная</p>
</div>
";
        // line 8
        echo "

<!--<div id=\"carouselExampleControls\" class=\"carousel slide col-5\" data-ride=\"carousel\">
\t<div class=\"carousel-inner\" role=\"listbox\">
\t\t<div class=\"carousel-item active\">
\t\t\t<img class=\"d-block img-fluid\" src=\"/theme/img/carousel_1.jpg\" alt=\"First slide\" style=\"height: 300px\">
\t\t\t<div class=\"carousel-caption d-none d-md-block\">
\t\t\t\t<h3>";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["product"]) ? $context["product"] : null), 0), "name"), "html", null, true);
        echo "</h3>
\t\t\t\t<p>";
        // line 16
        echo twig_escape_filter($this->env, twig_slice($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "description"), 0, 25), "html", null, true);
        echo "</p>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"carousel-item\">
\t\t\t<img class=\"d-block img-fluid\" src=\"/theme/img/carousel_2.jpg\" alt=\"Second slide\" style=\"height: 300px\">
\t\t</div>
\t\t<div class=\"carousel-item\">
\t\t\t<img class=\"d-block img-fluid\" src=\"/theme/img/carousel_3.jpg\" alt=\"Third slide\" style=\"height: 300px\">
\t\t</div>
\t</div>
\t<a class=\"carousel-control-prev\" href=\"#carouselExampleControls\" role=\"button\" data-slide=\"prev\">
\t\t<span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
\t\t<span class=\"sr-only\">Previous</span>
\t</a>
\t<a class=\"carousel-control-next\" href=\"#carouselExampleControls\" role=\"button\" data-slide=\"next\">
\t\t<span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
\t\t<span class=\"sr-only\">Next</span>
\t</a>
</div>-->
<!--Убрал на время-->
<!--<div class=\"card-desk row\">
\t";
        // line 37
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 38
            echo "\t<div class=\"col-3\">
\t\t<div class=\"card\">
\t\t\t<a href=\"/products/";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "url"), "html", null, true);
            echo "\">
\t\t\t\t<img src=\"../../upload/";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "image"), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "name"), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "name"), "html", null, true);
            echo "\" class=\"card-img-top\" style=\"width: 100%\">
\t\t\t</a>
\t\t\t<div class=\"card-block\">
\t\t\t\t<h4 class=\"card-title\">";
            // line 44
            echo twig_escape_filter($this->env, twig_slice($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "name"), 0, 25), "html", null, true);
            echo "</h4>
\t\t\t</div>
\t\t\t<ul class=\"list-group list-group-flush\">
\t\t\t\t<li class=\"list-group-item\">Цена: ";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "price"), "html", null, true);
            echo " грн.</li>
\t\t\t</ul>
\t\t\t<div class=\"card-footer\">
\t\t\t\t<a href=\"#\" class=\"btn btn-primary\">Купить</a>
\t\t\t</div>
\t\t</div>
\t</div>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 55
        echo "</div>-->
";
    }

    public function getTemplateName()
    {
        return "main.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 55,  108 => 47,  102 => 44,  92 => 41,  88 => 40,  84 => 38,  80 => 37,  56 => 16,  52 => 15,  43 => 8,  38 => 4,  35 => 3,  29 => 2,);
    }
}
