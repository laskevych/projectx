<?php
class Basket extends Core
{
    public function fetch()
    {
        $products = new Products();
        $products_catalog = $products->getProducts($visible = 'disabled');

        $arr = array(
            'products' => $products_catalog,
        );

        return $this->view->render('basket.html', $arr);
    }
}