<?php

class Route //extends Database todo: подумать
{
	public static function run()
    {

        $models_dir = 'models/';
        $controlers_dir = 'controllers/';

        $uri = parse_url($_SERVER['REQUEST_URI']);
        $uri_array = array(
            '/' => 'Main',
            '/basket' => 'Basket',
            '/pitstsa' => 'Product',
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
					Route::error404();
				}
			}
			else
            {
                Route::error404();
			}
		}
	}
	public static function error404()
	{
	    echo "<br>";
	    echo 'Ошиб1ка';
	}
}