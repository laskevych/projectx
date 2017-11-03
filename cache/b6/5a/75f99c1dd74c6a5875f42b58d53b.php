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
\t\t<img src=\"../../upload/";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "image"), "html", null, true);
            echo "\" alt=\"не судьба\" class=\"card-img-top\" style=\"width: 100%\">
\t\t<div class=\"card-block\">
\t\t\t<h4 class=\"card-title\">";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "name"), "html", null, true);
            echo "</h4>
\t\t\t<p class=\"card-text\">";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "description"), "html", null, true);
            echo "</p>
\t\t</div>
\t\t<ul class=\"list-group list-group-flush\">
\t\t\t<li class=\"list-group-item\">";
            // line 50
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "price"), "html", null, true);
            echo " грн.</li>
\t\t\t";
            // line 51
            if (($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "visible") == 1)) {
                // line 52
                echo "\t\t\t<li class=\"list-group-item\">Видимость: <span class=\"badge badge-default\"> On</span></li>
\t\t\t";
            } else {
                // line 54
                echo "\t\t\t<li class=\"list-group-item\">Видимость: <span class=\"badge badge-default\"> Off</span></li>
\t\t\t";
            }
            // line 56
            echo "\t\t\t<li class=\"list-group-item\">ID: ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "id"), "html", null, true);
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
        // line 63
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
        // line 79
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 80
            echo "\t\t<tbody>
\t\t<tr>
\t\t\t<th>";
            // line 82
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "id"), "html", null, true);
            echo "</th>
\t\t\t<td>";
            // line 83
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "image"), "html", null, true);
            echo "</td>
\t\t\t<td>";
            // line 84
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "name"), "html", null, true);
            echo "</td>
\t\t\t<td>";
            // line 85
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "price"), "html", null, true);
            echo " грн.</td>
\t\t\t<td> 0 шт</td>
\t\t\t<td>";
            // line 87
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
        // line 92
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
        return array (  182 => 92,  171 => 87,  166 => 85,  162 => 84,  158 => 83,  154 => 82,  150 => 80,  146 => 79,  128 => 63,  114 => 56,  110 => 54,  106 => 52,  104 => 51,  100 => 50,  94 => 47,  90 => 46,  85 => 44,  82 => 43,  78 => 42,  38 => 4,  35 => 3,  29 => 2,);
    }
}
