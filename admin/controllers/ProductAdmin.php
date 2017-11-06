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
                $id = $products->updateProduct($request->post('id', 'integer'), $product);
            }
            else
            {
                //Добавление товара
                $id = $products->addProduct($product);
            }
            $product = $products->getProduct($id);
            //print_r($product);
        }
        //todo: вывод категорий
        /*$categories = new Categories();
        $category = self::makeTree($categories->getCategories());
        $arr = array(
            'categories' => $category,
        );*/

        $arr = array(
            'product' => $product,
        );
        print_r($arr);
        return $this->view->render('admin_product.html', $arr);
    }
}