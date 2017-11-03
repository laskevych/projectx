<?php
class ProductAdmin extends CoreAdmin
{
    public function fetch()
    {
        $products = new Products();
        $request = new Request();
        $product = new stdClass();

        if ($request->method() == 'POST')
        {
            $product->name = $request->post('name');
            $product->description = $request->post('description');
            $product->price = $request->post('price','integer');
            self::checkImage();
            $product->image = $_SESSION['image_name'];
            $product->visible = $request->post('visible', 'integer');
            if (empty($request->post('url')))
            {
                $product->url = CoreAdmin::translit($request->post('name'));
            }
            else
            {
                $request->post('url');
            }
            if ($request->post('id', 'integer'))
            {
                //Обновление товара
                $id = $products->updateProdutc($request->post('id', 'integer'));
            }
            else
            {
                //Добавление товара
                $id = $products->addProduct($product);
                //print_r($product->id);
            }
        }

        $arr = array(
            'product' => $product,
        );
        return $this->view->render('admin_product.html', $arr);
    }
}