<?php
class Main extends Core
{
	public function fetch()
	{
        $products = new Products();
        $products_catalog = $products->getProducts($visible = 'active');
        //print_r($products_catalog);

        $arr = array(
            'products' => $products_catalog,
        );

		return $this->view->render('main.html', $arr);
	}
}
