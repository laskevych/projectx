<?php
class Admin extends CoreAdmin
{
    public function fetch()
    {
        $products = new Products();
        $products_catalog = $products->getProducts($visible = 'all');
        //print_r($products_catalog);

        $arr = array(
            'name' => 'Products',
            'products' => $products_catalog,
        );
        return $this->view->render('admin.html', $arr);
    }
}