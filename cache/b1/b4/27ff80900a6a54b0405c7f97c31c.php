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
\t<div class=\"row\">
\t\t<!--<div class=\"col-12\">
\t\t\t<p class=\"display-3\">Главная</p>
\t\t</div>-->
\t</div>
\t<div id=\"content\">
\t\t";
        // line 48
        $this->displayBlock('content', $context, $blocks);
        // line 51
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

    // line 48
    public function block_content($context, array $blocks = array())
    {
        // line 49
        echo "
\t\t";
    }

    public function getTemplateName()
    {
        return "index.html";
    }

    public function getDebugInfo()
    {
        return array (  97 => 49,  94 => 48,  89 => 4,  75 => 51,  73 => 48,  26 => 4,  21 => 1,);
    }
}
