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
        echo "<div class=\"col-12\">
\t<p class=\"display-4\">Товары</p>
</div>
<div class=\"row col-12\">
\t";
        // line 8
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 9
            echo "\t<div class=\"card col-3\">
\t\t";
            // line 10
            if (($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "image") == null)) {
                // line 11
                echo "\t\t";
                // line 12
                echo "\t\t<a href=\"http://projectx/";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "url"), "html", null, true);
                echo "\">
\t\t\t<img src=\"../../upload/image_stock.jpg\" alt=\"Изображение отсутствует\" title=\"";
                // line 13
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "name"), "html", null, true);
                echo "\" class=\"card-img-top\" style=\"width: 100%\">
\t\t</a>
\t\t";
            } else {
                // line 16
                echo "\t\t<a href=\"http://projectx/";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "url"), "html", null, true);
                echo "\">
\t\t\t<img src=\"../../upload/";
                // line 17
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "image"), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "name"), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "name"), "html", null, true);
                echo "\" class=\"card-img-top\" style=\"width: 100%\">
\t\t</a>
\t\t";
            }
            // line 20
            echo "\t\t<div class=\"card-block\">
\t\t\t<h4 class=\"card-title\">";
            // line 21
            echo twig_escape_filter($this->env, twig_slice($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "name"), 0, 25), "html", null, true);
            echo "</h4>
\t\t\t<p class=\"card-text\">";
            // line 22
            echo twig_escape_filter($this->env, (twig_slice($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "description"), 0, 150) . "..."), "html", null, true);
            echo "</p>
\t\t</div>
\t\t<ul class=\"list-group list-group-flush\">
\t\t\t<li class=\"list-group-item\">";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "price"), "html", null, true);
            echo " грн.</li>
\t\t</ul>
\t\t<div class=\"card-block\">
\t\t\t<a href=\"#\" class=\"btn btn-primary\">Купить</a>
\t\t</div>
\t</div>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 32
        echo "</div>
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
        return array (  107 => 32,  94 => 25,  88 => 22,  84 => 21,  81 => 20,  71 => 17,  66 => 16,  60 => 13,  55 => 12,  53 => 11,  51 => 10,  48 => 9,  44 => 8,  38 => 4,  35 => 3,  29 => 2,);
    }
}
