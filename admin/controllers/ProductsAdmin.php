<?php

class ProductsAdmin extends CoreAdmin
{
    public function fetch()
    {
        $products = new Products();
        $products_catalog = $products->getProducts('all');
        $request = new Request();

        //todo:: сделать по-человески
        if ($request->method() == 'POST')
        {
            $id = $request->post('id');
            $products->deleteProduct($id);
        }

        $arr = array(
            'products' => $products_catalog,
        );
        return $this->view->render('admin_products.html', $arr);
    }
}