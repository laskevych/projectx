<?php
class Main extends Core
{
	public function fetch()
	{
        $products = new Products();
        $products_catalog = $products->getProducts('active');

        $pages = new Pages();
        $pages_catalog = $pages->getPages('all');

        $arr = array(
            'products' => $products_catalog,
            'pages' => $pages_catalog,
        );

		return $this->view->render('main.html', $arr);
	}
}
