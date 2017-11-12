<?php

class RouteAdmin
{
	public static function run()
    {
        $controlers_dir = 'controllers/';

        $uri = parse_url($_SERVER['REQUEST_URI']);

        $uri_array = array(
            '/admin/' => 'ProductsAdmin',
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
            if (!preg_match('/(^\/admin\/){1}([a-zA-Z]){0,}\/[a-zA-Z0-9]{1,}/',$uri['path']))
            {
                if (file_exists($controlers_dir.$uri_array[$uri['path']].'.php'))
                {
                    require $controlers_dir.$uri_array[$uri['path']].'.php';
                    $controler = new $uri_array[$uri['path']]();

                    if (method_exists($controler, 'fetch'))
                    {
                        print $controler->fetch();
                    }
                    else
                    {
                        self::Error404Admin();
                    }
                }
                else
                {
                    self::Error404Admin();
                }
            }
            else
            {
                $long_url = explode('/',$uri['path']);
                if (file_exists($controlers_dir.$uri_array["/".$long_url[2]."/"].'.php'))
                {
                    require $controlers_dir.$uri_array["/admin/".$long_url[2]."/"].'.php';
                    $controler = new $uri_array["/admin/".$long_url[2]."/"]();

                    if (method_exists($controler, 'fetch'))
                    {
                        print $controler->fetch();
                    }
                    else
                    {
                        self::Error404Admin();
                    }
                }
                else
                {
                    self::Error404Admin();
                }
            }
        }
	}
    public static function Error404Admin()
    {
        require 'controllers/Error404Admin.php';
        $controler = new Error404Admin();
        if (method_exists($controler, 'fetch'))
        {
            print $controler->fetch();
        }
    }
}