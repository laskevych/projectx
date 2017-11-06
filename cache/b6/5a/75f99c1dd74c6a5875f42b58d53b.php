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
<!--<div class=\"card-group\">
\t<div class=\"card\">
\t\t<img class=\"card-img-top\" src=\"https://cdn0.iconfinder.com/data/icons/business-mix/512/cargo-512.png\" width=\"256\" height=\"256\" alt=\"Card image cap\">
\t\t<div class=\"card-block\">
\t\t\t<h4 class=\"card-title\">Товар 1</h4>
\t\t\t<p class=\"card-text\">Товар с товарными свойствами. Лучший товар на рынке товаров. Описание товара товарное.</p>
\t\t\t<p class=\"card-text\"><small class=\"text-muted\">&lt;!&ndash;Last updated 3 mins ago&ndash;&gt;</small></p>
\t\t</div>
\t</div>
\t<div class=\"card\">
\t\t<img class=\"card-img-top\" src=\"https://cdn0.iconfinder.com/data/icons/business-mix/512/cargo-512.png\" width=\"256\" height=\"256\" alt=\"Card image cap\">
\t\t<div class=\"card-block\">
\t\t\t<h4 class=\"card-title\">Товар 2</h4>
\t\t\t<p class=\"card-text\">Товар с товарными свойствами. Лучший товар на рынке товаров.</p>
\t\t\t<p class=\"card-text\"><small class=\"text-muted\">&lt;!&ndash;Last updated 3 mins ago&ndash;&gt;</small></p>
\t\t</div>
\t</div>
\t<div class=\"card\">
\t\t<img class=\"card-img-top\" src=\"https://cdn0.iconfinder.com/data/icons/business-mix/512/cargo-512.png\" width=\"256\" height=\"256\" alt=\"Card image cap\">
\t\t<div class=\"card-block\">
\t\t\t<h4 class=\"card-title\">Товар 3</h4>
\t\t\t<p class=\"card-text\">Товар с товарными свойствами. Лучший товар на рынке товаров. Описание товара товарное.</p>
\t\t\t<p class=\"card-text\"><small class=\"text-muted\">&lt;!&ndash;Last updated 3 mins ago&ndash;&gt;</small></p>
\t\t</div>
\t</div>
\t<div class=\"card\">
\t\t<img class=\"card-img-top\" src=\"https://cdn0.iconfinder.com/data/icons/business-mix/512/cargo-512.png\" width=\"256\" height=\"256\" alt=\"Card image cap\">
\t\t<div class=\"card-block\">
\t\t\t<h4 class=\"card-title\">Товар 4</h4>
\t\t\t<p class=\"card-text\">Товар с товарными свойствами. Лучший товар на рынке товаров.</p>
\t\t\t<p class=\"card-text\"><small class=\"text-muted\">&lt;!&ndash;Last updated 3 mins ago&ndash;&gt;</small></p>
\t\t</div>
\t</div>
</div>-->
<div class=\"row\">
\t";
        // line 42
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 43
            echo "\t<div class=\"card col-3\">
\t\t";
            // line 44
            if (($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "image") == null)) {
                // line 45
                echo "\t\t";
                // line 46
                echo "\t\t<img src=\"../../upload/image_stock.jpg\" alt=\"не судьба\" class=\"card-img-top\" style=\"width: 100%\">
\t\t";
            } else {
                // line 48
                echo "\t\t<img src=\"../../upload/";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "image"), "html", null, true);
                echo "\" alt=\"Image not found\" class=\"card-img-top\" style=\"width: 100%\">
\t\t";
            }
            // line 50
            echo "\t\t<div class=\"card-block\">
\t\t\t<h4 class=\"card-title\">";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "name"), "html", null, true);
            echo "</h4>
\t\t\t<p class=\"card-text\">";
            // line 52
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "description"), "html", null, true);
            echo "</p>
\t\t</div>
\t\t<ul class=\"list-group list-group-flush\">
\t\t\t<li class=\"list-group-item\">";
            // line 55
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "price"), "html", null, true);
            echo " грн.</li>
\t\t\t";
            // line 56
            if (($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "visible") == 1)) {
                // line 57
                echo "\t\t\t<li class=\"list-group-item\">Видимость: <span class=\"badge badge-default\"> On</span></li>
\t\t\t";
            } else {
                // line 59
                echo "\t\t\t<li class=\"list-group-item\">Видимость: <span class=\"badge badge-default\"> Off</span></li>
\t\t\t";
            }
            // line 61
            echo "\t\t\t<li class=\"list-group-item\">ID: ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "id"), "html", null, true);
            echo "</li>
\t\t\t<li class=\"list-group-item\">URL: ";
            // line 62
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "url"), "html", null, true);
            echo "</li>
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
        // line 69
        echo "</div>
<!--<div class=\"card-block text-left\">
\t&lt;!&ndash;<h4 class=\"card-title display-7\">Список товаров</h4>&ndash;&gt;
\t<table class=\"table table-hover\">
\t\t<thead>
\t\t<tr>
\t\t\t<th>ID</th>
\t\t\t<th>Фото</th>
\t\t\t<th>Название</th>
\t\t\t<th>Цена</th>
\t\t\t<th>Кол-во</th>
\t\t\t<th>Видимость</th>
\t\t\t<th>Действия</th>
\t\t\t&lt;!&ndash;<th>Username</th>&ndash;&gt;
\t\t</tr>
\t\t</thead>
\t\t";
        // line 85
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 86
            echo "\t\t<tbody>
\t\t<tr>
\t\t\t<th>";
            // line 88
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "id"), "html", null, true);
            echo "</th>
\t\t\t<td>";
            // line 89
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "image"), "html", null, true);
            echo "</td>
\t\t\t<td>";
            // line 90
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "name"), "html", null, true);
            echo "</td>
\t\t\t<td>";
            // line 91
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "price"), "html", null, true);
            echo " грн.</td>
\t\t\t<td> 0 шт</td>
\t\t\t<td>";
            // line 93
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "visible"), "html", null, true);
            echo "</td>
\t\t\t<td>None</td>
\t\t</tr>
\t\t</tbody>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 98
        echo "\t</table>
</div>-->
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
        return array (  198 => 98,  187 => 93,  182 => 91,  178 => 90,  174 => 89,  170 => 88,  166 => 86,  162 => 85,  144 => 69,  131 => 62,  126 => 61,  122 => 59,  118 => 57,  116 => 56,  112 => 55,  106 => 52,  102 => 51,  99 => 50,  93 => 48,  89 => 46,  87 => 45,  85 => 44,  82 => 43,  78 => 42,  38 => 4,  35 => 3,  29 => 2,);
    }
}
