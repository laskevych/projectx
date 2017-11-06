<?php

class RouteAdmin
{
	public static function run()
    {

        $controlers_dir = 'controllers/';

        $uri = parse_url($_SERVER['REQUEST_URI']);

        $uri_array = array(
            '/admin/' => 'Admin',
            '/admin/products/' => 'ProductsAdmin',
            '/admin/product/' => 'ProductAdmin',
            '/admin/categories/' => 'CategoriesAdmin',
            '/admin/category/' => 'CategoryAdmin',
            '/admin/orders/' => 'OrdersAdmin',
            '/admin/pages/' => 'PagesAdmin',
            '/admin/settings/' => 'SettingsAdmin',
        );
        /*echo "URL: ".$uri['path'];
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
		//todo: загрузка и предосмотр картинок
		/*if ($uri['path'] !== '/admin/product/')
        {
            session_destroy($_SESSION['upload']['images']);
        }*/
	}
	public static function error404()
	{
	    echo "<br>";
	    echo 'Ошибка';
	}
}