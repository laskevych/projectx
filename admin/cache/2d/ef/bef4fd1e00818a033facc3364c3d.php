<?php

/* index.html */
class __TwigTemplate_2defbef4fd1e00818a033facc3364c3d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"ru\">
<head>
    <title>";
        // line 4
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <!-- Required meta tags -->
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">

    <!-- Bootstrap CSS -->
    <link rel=\"stylesheet\" href=\"/theme/bootstrap/css/bootstrap.min.css\">
</head>
<body>
<nav class=\"navbar navbar-toggleable-md navbar-inverse bg-inverse\">
    <button class=\"navbar-toggler navbar-toggler-right\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarNav\" aria-controls=\"navbarNav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        <span class=\"navbar-toggler-icon\"></span>
    </button>
    <a class=\"navbar-brand\" href=\"/\">
        <img src=\"http://appmirror.net/wp-content/uploads/2017/01/Project-X-Icon-Pack-1.1-200x200.png\" width=\"30\" height=\"30\" class=\"d-inline-block align-top\" alt=\"\">
        Project X
    </a>
    <div class=\"collapse navbar-collapse\" id=\"navbarNav\">
        <ul class=\"navbar-nav\">
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"/\">Главная</a>
            </li>
            <li class=\"nav-item active\">
                <a class=\"nav-link\" href=\"/admin\">Админ</a>
            </li>
        </ul>
    </div>
</nav>

<div class=\"container\">
    <div class=\"row align-items-center\" style=\"height: 130px\">
        <!--Товары-->
            <div class=\"col\">
                <a href=\"/admin/products/\">
                    <img class=\"mx-auto d-block\" src=\"/admin/theme/img/products.png\" title=\"Товары\" width=\"64\" height=\"64\">
                </a>
                <p class=\"text-center\">Товары</p>
            </div>
        <!--Заказы-->
            <div class=\"col\">
                <a href=\"/admin/orders/\">
                    <img class=\"mx-auto d-block\" src=\"/admin/theme/img/orders.png\" title=\"Заказы\" width=\"64\" height=\"64\">
                </a>
                <p class=\"text-center\">Заказы<span class=\"badge badge-success\">+3</span></p>
            </div>
        <!--Страницы-->
            <div class=\"col\">
                <a href=\"/admin/pages/\">
                    <img class=\"mx-auto d-block\" src=\"/admin/theme/img/pages.png\" title=\"Страницы\" width=\"64\" height=\"64\">
                </a>
                <p class=\"text-center\">Страницы</p>
            </div>
        <!--Настройки-->
            <div class=\"col\">
                <a href=\"/admin/settings/\">
                    <img class=\"mx-auto d-block\" src=\"/admin/theme/img/setting.png\" title=\"Настройки\" width=\"64\" height=\"64\">
                </a>
                <p class=\"text-center\">Настройки</p>
            </div>
    </div>
    ";
        // line 64
        $this->displayBlock('content', $context, $blocks);
        // line 67
        echo "</div>

<!-- jQuery first, then Tether, then Bootstrap JS. -->
<script src=\"/theme/js/jquery-3.2.1.min.js\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js\" integrity=\"sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb\" crossorigin=\"anonymous\"></script>
<script src=\"/theme/bootstrap/js/bootstrap.min.js\" integrity=\"sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn\" crossorigin=\"anonymous\"></script>
</body>
</html>";
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
    }

    // line 64
    public function block_content($context, array $blocks = array())
    {
        // line 65
        echo "        ";
        // line 66
        echo "    ";
    }

    public function getTemplateName()
    {
        return "index.html";
    }

    public function getDebugInfo()
    {
        return array (  112 => 66,  110 => 65,  107 => 64,  102 => 4,  91 => 67,  89 => 64,  26 => 4,  21 => 1,);
    }
}
