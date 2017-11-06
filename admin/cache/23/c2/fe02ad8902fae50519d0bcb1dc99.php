<?php

/* admin.html */
class __TwigTemplate_23c2fe02ad8902fae50519d0bcb1dc99 extends Twig_Template
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
        echo "Админ панель";
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "<div class=\"col-12\">
    <div class=\"card text-center\">
        <div class=\"card-header\">
            <ul class=\"nav nav-tabs card-header-tabs\">
                <li class=\"nav-item\">
                    <a class=\"nav-link active\" href=\"#\">Admin</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"#\">Admin</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"#\">Admin</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"#\">Admin</a>
                </li>
                <li class=\"nav-item\">
                    <a href=\"#\" class=\"btn btn-primary disabled\">Admin</a>
                </li>
            </ul>
        </div>
        <div class=\"card-block\">
            <h4 class=\"card-title\">Admin</h4>
            <p class=\"card-text\">Admin Admin Admin Admin Admin Admin</p>
            <a href=\"#\" class=\"btn btn-primary disabled\">Admin</a>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "admin.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 4,  35 => 3,  29 => 2,);
    }
}
