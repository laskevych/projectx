<?php

/* index.html */
class __TwigTemplate_b1b427ff80900a6a54b0405c7f97c31c extends Twig_Template
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
\t<title>";
        // line 4
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
\t<!-- Required meta tags -->
\t<meta charset=\"utf-8\">
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">

\t<!-- Bootstrap CSS -->
\t<link rel=\"stylesheet\" href=\"/theme/bootstrap/css/bootstrap.min.css\">
</head>
<nav class=\"navbar navbar-toggleable-md navbar-light bg-faded\">
\t<button class=\"navbar-toggler navbar-toggler-right\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarNav\" aria-controls=\"navbarNav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t<span class=\"navbar-toggler-icon\"></span>
\t</button>
\t<a class=\"navbar-brand\" href=\"/\">
\t\t<img src=\"http://appmirror.net/wp-content/uploads/2017/01/Project-X-Icon-Pack-1.1-200x200.png\" width=\"30\" height=\"30\" class=\"d-inline-block align-top\" alt=\"\">
\t\tProject X
\t</a>
\t<div class=\"collapse navbar-collapse\" id=\"navbarNav\">
\t\t<ul class=\"navbar-nav\">
\t\t\t<li class=\"nav-item active\">
\t\t\t\t<a class=\"nav-link\" href=\"/\">Главная<span class=\"sr-only\">(current)</span></a>
\t\t\t</li>
\t\t\t<li class=\"nav-item\">
\t\t\t\t<a class=\"nav-link\" href=\"/admin\"><strong>Админ</strong></a>
\t\t\t</li>
\t\t\t<li class=\"nav-item\">
\t\t\t\t<a class=\"nav-link\"><strong>:::</strong></a>
\t\t\t</li>
\t\t\t<li class=\"nav-item\">
\t\t\t\t<a class=\"nav-link\" href=\"/products/\">Товары</a>
\t\t\t</li>
\t\t\t<li class=\"nav-item\">
\t\t\t\t<a class=\"nav-link\" href=\"/basket/\">Корзина</a>
\t\t\t</li>
\t\t\t<li class=\"nav-item\">
\t\t\t\t<a class=\"nav-link\" href=\"/oplata/\">Оплата</a>
\t\t\t</li>
\t\t\t<li class=\"nav-item\">
\t\t\t\t<a class=\"nav-link\" href=\"/dostavka\">Доставка</a>
\t\t\t</li>
\t\t\t<li class=\"nav-item\">
\t\t\t\t<a class=\"nav-link\" href=\"/o-nas\">О нас</a>
\t\t\t</li>
\t\t</ul>
\t</div>
</nav>
<body>
<div class=\"container\">
\t";
        // line 51
        $this->displayBlock('content', $context, $blocks);
        // line 53
        echo "</div>

<!-- jQuery first, then Tether, then Bootstrap JS. -->
<script type=\"text/javascript\" src=\"/theme/js/jquery-3.2.1.min.js\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js\" integrity=\"sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb\" crossorigin=\"anonymous\"></script>
<script type=\"text/javascript\" src=\"/theme/bootstrap/js/bootstrap.min.js\"></script>
<!--<script>
\t\$(function () {
\t    alert('jelll');
    });
    console.log();
</script>-->
</body>
</html>

";
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
    }

    // line 51
    public function block_content($context, array $blocks = array())
    {
        // line 52
        echo "\t";
    }

    public function getTemplateName()
    {
        return "index.html";
    }

    public function getDebugInfo()
    {
        return array (  105 => 52,  102 => 51,  97 => 4,  78 => 53,  76 => 51,  26 => 4,  21 => 1,);
    }
}
