<?php

class ProductsAdmin extends CoreAdmin
{
    public function fetch()
    {
        $products = new Products();
        $products_catalog = $products->getProducts($visible = 'all');
        $request = new Request();
        if ($request->method() == 'POST' ==)
        {
            $id = $request->post('id');
            //echo "ID: ".$id;
            $products->deleteProduct($id);
        }
        $arr = array(
            'name' => 'Products',
            'products' => $products_catalog,
        );
        return $this->view->render('admin_products.html', $arr);
    }
}