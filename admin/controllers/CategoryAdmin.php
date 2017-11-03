<?php

class CategoryAdmin extends CoreAdmin
{
    public function fetch()
    {
        $categories = new Categories();
        $request = new Request();
        $category = new stdClass();

        if ($request->method() == 'POST')
        {
            $category->name = $request->post('name');
            $category->description = $request->post('description');
            $category->visible = $request->post('visible', 'integer');
            self::checkImage();
            $category->image = $_SESSION['image_name'];
            $category->parent_id = $request->post('parent_id','integer');
            if (empty($request->post('url')))
            {
                $category->url = CoreAdmin::translit($request->post('name'));
            }
            else
            {
                $request->post('url');
            }
            $categories->addCategory($category);
            //todo: еще одна проверка (if) на обновление категории

        }
        $categories = new Categories();
        $category = self::makeTree($categories->getCategories());
        $arr = array(
            'categories' => $category,
        );

        return $this->view->render('admin_category.html', $arr);
    }
}