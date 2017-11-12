<?php

class Core
{
	public $view = '';
	public function __construct()
	{
        $path_twig = 'lib/Twig/Autoloader.php';
        $path_twig_loader = 'theme/html';
		require_once $path_twig;
		Twig_Autoloader::register();
		$loader = new Twig_Loader_Filesystem($path_twig_loader);
		$twig = new Twig_Environment($loader, array(
    	'cache'       => 'cache',
    	'auto_reload' => true
		));

        $twig->addFunction('viewTree', new Twig_Function_Function('viewTree'));
        function viewTree($categories)
        {
            if ($categories)
            {
                echo "<ol>";
                foreach ($categories as $category)
                {
                    echo "<li>".$category['name']."</li>";
                    if (isset($category['subcategories']))
                    {
                        viewTree($category['subcategories']);
                    }
                }
                echo "</ol>";
            }
        }

        $this->view = $twig;
    }
    public function makeTree($categories, $parent_id = 0)
    {
        $results = array();
        foreach ($categories as $key => $category)
        {
            if ($category['parent_id'] == $parent_id)
            {
                if ($category['id'] != $parent_id)
                {
                    $subcategories = self::makeTree($categories, $category['id']);
                    if (!empty($subcategories))
                    {
                        $category['subcategories'] = $subcategories;
                    }
                    $results[]=$category;
                    unset($category);
                }
            }
        }
        return $results;
    }
}
