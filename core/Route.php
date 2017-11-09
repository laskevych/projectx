<?php

class Route
{
	public static function run()
    {
        $controlers_dir = 'controllers/';

        $uri = parse_url($_SERVER['REQUEST_URI']);
        $uri_array = array(
            '/' => 'Main',
            '/basket/' => 'Basket',
            '/products/' => 'ProductsUser',
        );
		if ($uri['path'])
		{
		    if (!preg_match('/(^\/([a-zA-Z]){0,}\/){1}[a-zA-Z0-9]{1,}/',$uri['path'],$matches))
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
                        self::Error404();
                    }
                }
                else
                {
                    self::Error404();
                }
            }
            else
            {
                $long_url = explode('/',$uri['path']);
                echo $controlers_dir.$uri_array["/".$long_url[1]."/"].'.php';
                if (file_exists($controlers_dir.$uri_array["/".$long_url[1]."/"].'.php'))
                {
                    require $controlers_dir.$uri_array["/".$long_url[1]."/"].'.php';
                    $controler = new $uri_array["/".$long_url[1]."/"]();

                    if (method_exists($controler, 'fetch'))
                    {
                        print $controler->fetch();
                    }
                    else
                    {
                        self::Error404();
                    }
                }
                else
                {
                    self::Error404();
                }
            }
		}
	}
	public static function Error404()
    {
        require 'controllers/Error404.php';
        $controler = new Error404();
        if (method_exists($controler, 'fetch'))
        {
            print $controler->fetch();
        }
    }
}