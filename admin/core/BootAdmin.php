<?php

function loadAdmin($class)
{
	if (!empty($class) && is_string($class)) {
		$models_dir = '../models/';
        /*echo "PATH: ".$models_dir.$class.'.php';
        echo "<br>";*/
		if (file_exists($models_dir.$class.'.php')) {
			include $models_dir.$class.'.php';
		}
	}
}
spl_autoload_register('loadAdmin');