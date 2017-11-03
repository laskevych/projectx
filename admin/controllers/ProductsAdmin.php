<?php

class ProductsAdmin extends CoreAdmin
{
    public function fetch()
    {
        $products = new Products();
        $products_catalog = $products->getProducts();
        //print_r($products_catalog);

        $arr = array(
            'name' => 'Products',
            'products' => $products_catalog,
        );
        return $this->view->render('admin_products.html', $arr);
    }
}