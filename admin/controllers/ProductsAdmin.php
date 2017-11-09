<?php

class ProductsAdmin extends CoreAdmin
{
    public function fetch()
    {
        $products = new Products();
        $products_catalog = $products->getProducts($visible = 'all');
        $request = new Request();
        if ($request->method() == 'POST' && $_POST['delete'])
        {
            $id = $request->post('id');
            $products->deleteProduct($id);
        }
        elseif ($request->method() == 'GET')
        {
            $id = $request->get('id', 'integer');
            echo $id;
        }
        $arr = array(
            'products' => $products_catalog,
        );
        return $this->view->render('admin_products.html', $arr);
    }
}