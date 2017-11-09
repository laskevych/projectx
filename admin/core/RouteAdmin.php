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
            '/admin/page/' => 'PageAdmin',
            '/admin/settings/' => 'SettingsAdmin',
            '/admin/404/' => '404Admin',
        );

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
                    require 'controllers/Error404Admin.php';
                    $controler = new Error404Admin();
                    if (method_exists($controler, 'fetch'))
                    {
                        print $controler->fetch();
                    }
                    echo 'hello_admin_1';
				}
			}
			else
            {
                require 'controllers/Error404Admin.php';
                $controler = new Error404Admin;
                if (method_exists($controler, 'fetch'))
                {
                    print $controler->fetch();
                }
                echo 'hello_admin_2';
			}
		}
	}
}