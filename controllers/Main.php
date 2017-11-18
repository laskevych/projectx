<?php
class Main extends Core
{
	public function fetch()
	{
        $products = new Products();
        $products_catalog = $products->getProducts('active');

        $pages = new Pages();
        $pages_catalog = $pages->getPages('all');

        $categories = new Categories();
        $categories_catalog = $this->makeTree( $categories->getCategories());

        $arr = array(
            'products' => $products_catalog,
            'pages' => $pages_catalog,
            'categories' => $categories_catalog,
        );

        //print_r($arr);
		return $this->view->render('main.html', $arr);
	}
}
