<?php
class ProductsUser extends Core
{
    public function fetch()
    {
        $uri = parse_url($_SERVER['REQUEST_URI']);
        $url = explode('/',$uri['path']);
        $products = new Products();
        if ($url[2])
        {
            $product = $products->getProductView($url[2]);
            if (empty($product))
            {
                Route::Error404();
            }
            else
            {
                $arr = array(
                    'product' => $product,
                );
                return $this->view->render('products.html', $arr);
            }
        }
        else
        {
            $products_catalog = $products->getProducts('active');
            $arr = array(
                'products' => $products_catalog,
            );

            return $this->view->render('products.html', $arr);
        }
    }
}