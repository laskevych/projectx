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
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css\" integrity=\"sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ\" crossorigin=\"anonymous\">
</head>
<body>
<nav class=\"navbar navbar-toggleable-md navbar-inverse bg-inverse\">
    <button class=\"navbar-toggler navbar-toggler-right\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarNav\" aria-controls=\"navbarNav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        <span class=\"navbar-toggler-icon\"></span>
    </button>
    <a class=\"navbar-brand\" href=\"http://projectx\">
        <img src=\"http://appmirror.net/wp-content/uploads/2017/01/Project-X-Icon-Pack-1.1-200x200.png\" width=\"30\" height=\"30\" class=\"d-inline-block align-top\" alt=\"\">
        Project X
    </a>
    <div class=\"collapse navbar-collapse\" id=\"navbarNav\">
        <ul class=\"navbar-nav\">
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"http://projectx/\">Главная</a>
            </li>
            <li class=\"nav-item active\">
                <a class=\"nav-link\" href=\"http://projectx/admin\">Админ</a>
            </li>
        </ul>
    </div>
</nav>

<div class=\"container\">
    <div class=\"w-100\">
        <h1 class=\"w-100\"></h1>
    </div>
    <div class=\"row align-items-center\" style=\"height: 130px \">
        <!--Товары-->
            <div class=\"col\">
                <a href=\"http://projectx/admin/products/\">
                    <img class=\"mx-auto d-block\" src=\"https://png.icons8.com/trolley/dusk/64\" title=\"Stock\" width=\"64\" height=\"64\">
                </a>
                <p class=\"text-center\">Товары</p>
            </div>
        <!--Заказы-->
            <div class=\"col\">
                <a href=\"http://projectx/admin/orders/\">
                    <img class=\"mx-auto d-block\" src=\"https://png.icons8.com/deposit/dusk/64\" title=\"Deposit\" width=\"64\" height=\"64\">
                </a>
                <p class=\"text-center\">Заказы<span class=\"badge badge-success\">+3</span></p>
            </div>
        <!--Страницы-->
            <div class=\"col\">
                <a href=\"http://projectx/admin/pages/\">
                    <img class=\"mx-auto d-block\" src=\"https://png.icons8.com/google-docs/dusk/64\" title=\"Google Docs\" width=\"64\" height=\"64\">
                </a>
                <p class=\"text-center\">Страницы</p>
            </div>
        <!--Настройки-->
            <div class=\"col\">
                <a href=\"http://projectx/admin/settings/\">
                    <img class=\"mx-auto d-block\" src=\"https://png.icons8.com/settings/dusk/64\" title=\"Settings\" width=\"64\" height=\"64\">
                </a>
                <p class=\"text-center\">Настройки</p>
            </div>
    </div>
    ";
        // line 67
        $this->displayBlock('content', $context, $blocks);
        // line 70
        echo "</div>

<!-- jQuery first, then Tether, then Bootstrap JS. -->
<script src=\"https://code.jquery.com/jquery-3.1.1.slim.min.js\" integrity=\"sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n\" crossorigin=\"anonymous\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js\" integrity=\"sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb\" crossorigin=\"anonymous\"></script>
<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js\" integrity=\"sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn\" crossorigin=\"anonymous\"></script>
</body>
</html>";
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
    }

    // line 67
    public function block_content($context, array $blocks = array())
    {
        // line 68
        echo "        ";
        // line 69
        echo "    ";
    }

    public function getTemplateName()
    {
        return "index.html";
    }

    public function getDebugInfo()
    {
        return array (  115 => 69,  113 => 68,  110 => 67,  105 => 4,  94 => 70,  92 => 67,  26 => 4,  21 => 1,);
    }
}
