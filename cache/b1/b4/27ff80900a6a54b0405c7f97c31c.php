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
\t<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css\" integrity=\"sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ\" crossorigin=\"anonymous\">
</head>
<body>
<nav class=\"navbar navbar-toggleable-md navbar-light bg-faded\">
\t<button class=\"navbar-toggler navbar-toggler-right\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarNav\" aria-controls=\"navbarNav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t<span class=\"navbar-toggler-icon\"></span>
\t</button>
\t<a class=\"navbar-brand\" href=\"http://projectx\">
\t\t<img src=\"http://appmirror.net/wp-content/uploads/2017/01/Project-X-Icon-Pack-1.1-200x200.png\" width=\"30\" height=\"30\" class=\"d-inline-block align-top\" alt=\"\">
\t\tProject X
\t</a>
\t<div class=\"collapse navbar-collapse\" id=\"navbarNav\">
\t\t<ul class=\"navbar-nav\">
\t\t\t<li class=\"nav-item active\">
\t\t\t\t<a class=\"nav-link\" href=\"http://projectx/\">Главная<span class=\"sr-only\">(current)</span></a>
\t\t\t</li>
\t\t\t<li class=\"nav-item\">
\t\t\t\t<a class=\"nav-link\" href=\"http://projectx/admin\">Админ панель</a>
\t\t\t</li>
\t\t\t<li class=\"nav-item\">
\t\t\t\t<a class=\"nav-link disabled\" href=\"#\">Каталог</a>
\t\t\t</li>
\t\t\t<li class=\"nav-item\">
\t\t\t\t<a class=\"nav-link disabled\" href=\"#\">Контакты</a>
\t\t\t</li>
\t\t\t<li class=\"nav-item\">
\t\t\t\t<a class=\"nav-link disabled\" href=\"#\">О нас</a>
\t\t\t</li>
\t\t</ul>
\t</div>
</nav>
<div class=\"container\">
\t<!--Карусель Bootstrap 4-->
\t\t<!--<div id=\"carouselExampleIndicators\" class=\"carousel slide col\" data-ride=\"carousel\">
\t\t\t<ol class=\"carousel-indicators\">
\t\t\t\t<li data-target=\"#carouselExampleIndicators\" data-slide-to=\"0\" class=\"active\"></li>
\t\t\t\t<li data-target=\"#carouselExampleIndicators\" data-slide-to=\"1\"></li>
\t\t\t\t<li data-target=\"#carouselExampleIndicators\" data-slide-to=\"2\"></li>
\t\t\t</ol>
\t\t\t<div class=\"carousel-inner\" role=\"listbox\">
\t\t\t\t<div class=\"carousel-item active\">
\t\t\t\t\t<img class=\"d-block img-fluid\" src=\"http://otdo134.ru/wp-content/uploads/2014/05/placeholder-blue.png\" alt=\"First slide\">
\t\t\t\t</div>
\t\t\t\t<div class=\"carousel-item\">
\t\t\t\t\t<img class=\"d-block img-fluid\" src=\"http://otdo134.ru/wp-content/uploads/2014/05/placeholder-blue.png\" alt=\"Second slide\">
\t\t\t\t</div>
\t\t\t\t<div class=\"carousel-item\">
\t\t\t\t\t<img class=\"d-block img-fluid\" src=\"http://otdo134.ru/wp-content/uploads/2014/05/placeholder-blue.png\" alt=\"Third slide\">
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<a class=\"carousel-control-prev\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"prev\">
\t\t\t\t<span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
\t\t\t\t<span class=\"sr-only\">Previous</span>
\t\t\t</a>
\t\t\t<a class=\"carousel-control-next\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"next\">
\t\t\t\t<span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
\t\t\t\t<span class=\"sr-only\">Next</span>
\t\t\t</a>
\t\t</div>-->
\t<div class=\"row\">
\t\t<!--<div class=\"col-12\">
\t\t\t<p class=\"display-3\">Главная</p>
\t\t</div>-->
\t</div>
\t<div id=\"content\">
\t\t";
        // line 75
        $this->displayBlock('content', $context, $blocks);
        // line 78
        echo "\t</div>
</div>

<!-- jQuery first, then Tether, then Bootstrap JS. -->
<script src=\"https://code.jquery.com/jquery-3.1.1.slim.min.js\" integrity=\"sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n\" crossorigin=\"anonymous\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js\" integrity=\"sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb\" crossorigin=\"anonymous\"></script>
<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js\" integrity=\"sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn\" crossorigin=\"anonymous\"></script>
</body>
</html>

";
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
    }

    // line 75
    public function block_content($context, array $blocks = array())
    {
        // line 76
        echo "
\t\t";
    }

    public function getTemplateName()
    {
        return "index.html";
    }

    public function getDebugInfo()
    {
        return array (  124 => 76,  121 => 75,  116 => 4,  102 => 78,  100 => 75,  26 => 4,  21 => 1,);
    }
}
