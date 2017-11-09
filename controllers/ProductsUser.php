<?php
class ProductsUser extends Core
{
    public function fetch()
    {
        $products = new Products();
        $uri = parse_url($_SERVER['REQUEST_URI']);
        echo "HELLO PRODUCTS USER";
        print_r($uri);

    }
}