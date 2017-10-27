<?php

class RouteAdmin
{
	public static function run()
    {

        //$models_dir = '';
        $controlers_dir = '../admin/controllers/';

        $uri = parse_url($_SERVER['REQUEST_URI']);

        $uri_array = array(
            //'/' => 'Main',
            //'/catalog' => 'Catalog',
            '/admin/' => 'Admin',
            '/admin/products/' => 'ProductsAdmin',
        );
        /*echo "URI: ".$uri['path'];
        echo "<br>";
        echo "Controller: ".$controlers_dir.$uri_array[$uri['path']].'.php';*/
		if ($uri['path'])
		{
			
			if (file_exists($controlers_dir.$uri_array[$uri['path']].'.php'))
			{
				require $controlers_dir.$uri_array[$uri['path']].'.php';
                $controler = new $uri_array[$uri['path']](); //new Main();

				if (method_exists($controler, 'fetch'))
				{
					print $controler->fetch();
				}
				else
                {
					RouteAdmin::error404();
                    /*echo "<br>";
                    echo "errror_1";*/
				}
			}
			else
            {
                /*echo "<br>";
                echo "errror_2";*/
                RouteAdmin::error404();
			}
		}
	}
	public static function error404()
	{
	    echo "<br>";
	    echo 'Ошибка';
	}
}