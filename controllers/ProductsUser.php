<?php
class ProductsUser extends Core
{
    public function fetch()
    {
        $uri = parse_url($_SERVER['REQUEST_URI']);
        $url = explode('/',$uri['path']);
        $products = new Products();
        $product = $products->getProductView($url[2]);
        $arr = array(
            'product' => $product,
        );
        return $this->view->render('product.html', $arr);
    }
}