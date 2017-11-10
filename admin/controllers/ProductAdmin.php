<?php
class ProductAdmin extends CoreAdmin
{
    public function fetch()
    {
        $products = new Products();
        $request = new Request();
        $product = new stdClass();

        $uri = parse_url($_SERVER['REQUEST_URI']);

        if ($uri['query'])
        {
            $id = explode('=',$uri['query']);
            $product = $products->getProduct($id[1]);
        }
        if ($request->method() == 'POST' && $_POST['name'] != null)
        {
            $product = new stdClass();
            $product->name = $request->post('name');
            $product->description = $request->post('description');
            $product->price = $request->post('price','integer');
            $image = $request->post('image');
            Filemanager::checkImage($image);
            $product->image = $image;//$request->post('image');
            echo "IMAGE: ".$product->image;
            echo "<br>";
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
        /*echo "<pre>";
        print_r($arr);
        echo "</pre>";*/
        return $this->view->render('admin_product.html', $arr);
    }
}