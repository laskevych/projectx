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
        echo "<div class=\"div col-12\">
\t<p class=\"display-4\">Товары</p>
</div>
<div class=\"card-group\">
\t<div class=\"card\">
\t\t<img class=\"card-img-top\" src=\"https://cdn0.iconfinder.com/data/icons/business-mix/512/cargo-512.png\" width=\"256\" height=\"256\" alt=\"Card image cap\">
\t\t<div class=\"card-block\">
\t\t\t<h4 class=\"card-title\">Товар 1</h4>
\t\t\t<p class=\"card-text\">Товар с товарными свойствами. Лучший товар на рынке товаров. Описание товара товарное.</p>
\t\t\t<p class=\"card-text\"><small class=\"text-muted\"><!--Last updated 3 mins ago--></small></p>
\t\t</div>
\t</div>
\t<div class=\"card\">
\t\t<img class=\"card-img-top\" src=\"https://cdn0.iconfinder.com/data/icons/business-mix/512/cargo-512.png\" width=\"256\" height=\"256\" alt=\"Card image cap\">
\t\t<div class=\"card-block\">
\t\t\t<h4 class=\"card-title\">Товар 2</h4>
\t\t\t<p class=\"card-text\">Товар с товарными свойствами. Лучший товар на рынке товаров.</p>
\t\t\t<p class=\"card-text\"><small class=\"text-muted\"><!--Last updated 3 mins ago--></small></p>
\t\t</div>
\t</div>
\t<div class=\"card\">
\t\t<img class=\"card-img-top\" src=\"https://cdn0.iconfinder.com/data/icons/business-mix/512/cargo-512.png\" width=\"256\" height=\"256\" alt=\"Card image cap\">
\t\t<div class=\"card-block\">
\t\t\t<h4 class=\"card-title\">Товар 3</h4>
\t\t\t<p class=\"card-text\">Товар с товарными свойствами. Лучший товар на рынке товаров. Описание товара товарное.</p>
\t\t\t<p class=\"card-text\"><small class=\"text-muted\"><!--Last updated 3 mins ago--></small></p>
\t\t</div>
\t</div>
\t<div class=\"card\">
\t\t<img class=\"card-img-top\" src=\"https://cdn0.iconfinder.com/data/icons/business-mix/512/cargo-512.png\" width=\"256\" height=\"256\" alt=\"Card image cap\">
\t\t<div class=\"card-block\">
\t\t\t<h4 class=\"card-title\">Товар 4</h4>
\t\t\t<p class=\"card-text\">Товар с товарными свойствами. Лучший товар на рынке товаров.</p>
\t\t\t<p class=\"card-text\"><small class=\"text-muted\"><!--Last updated 3 mins ago--></small></p>
\t\t</div>
\t</div>
</div>
\t\t<!--<div class=\"col-12\" id=\"books\">
\t\t\t<table class=\"table\">
\t\t\t\t<thead class=\"thead-inverse\">
\t\t\t\t<th>#</th>
\t\t\t\t<th>Title</th>
\t\t\t\t<th>Date</th>
\t\t\t\t</thead>
\t\t\t\t";
        // line 48
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["books"]) ? $context["books"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["book"]) {
            // line 49
            echo "\t\t\t\t<tbody>
\t\t\t\t<td>";
            // line 50
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["book"]) ? $context["book"] : null), "number"), "html", null, true);
            echo "</td>
\t\t\t\t<td>";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["book"]) ? $context["book"] : null), "title"), "html", null, true);
            echo "</td>
\t\t\t\t<td>";
            // line 52
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["book"]) ? $context["book"] : null), "date"), "html", null, true);
            echo "</td>
\t\t\t\t</tbody>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['book'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 55
        echo "\t\t\t</table>
\t\t</div>-->
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
        return array (  108 => 55,  99 => 52,  95 => 51,  91 => 50,  88 => 49,  84 => 48,  38 => 4,  35 => 3,  29 => 2,);
    }
}
