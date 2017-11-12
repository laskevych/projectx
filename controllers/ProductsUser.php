<?php
class ProductsUser extends Core
{
    public function fetch()
    {
        $products = new Products();
        $request = new Request();

        if ($request->method() == 'POST')
        {
            $id = $request->post('id', 'integer');
            $amount = $request->post('click', 'integer');
            $name = $request->post('name');
            $price = $request->post('price');
            $image = $request->post('image');
            $_SESSION['order'][$id]['id'] = $id;
            $_SESSION['order'][$id]['name'] = $name;
            $_SESSION['order'][$id]['amount'] += $amount;
            $_SESSION['order'][$id]['price'] = $price;
            $_SESSION['order'][$id]['image'] = $image;

            //TODO: КОЛИЧЕСТВО ТОВАРОВ В КОРЗИНЕ. РЕАЛИЗОВАТЬ ТАК
            //echo count($_SESSION['order']);

        }

        $uri = parse_url($_SERVER['REQUEST_URI']);
        $url = explode('/',$uri['path']);

        if ($url[2])
        {
            $product = $products->getProduct($url[2],'url');
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