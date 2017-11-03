<?php

class CategoriesAdmin extends CoreAdmin
{
    public function fetch()
    {
        $categories = new Categories();
        $category = self::makeTree($categories->getCategories());
        $arr = array(
          'categories' => $category,
        );
        //print_r($arr);
        return $this->view->render('admin_categories.html', $arr);
    }
}