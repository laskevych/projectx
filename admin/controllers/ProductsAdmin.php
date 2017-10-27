<?php
require_once '../models/Database.php';

class ProductsAdmin extends CoreAdmin
{
    public function fetch()
    {
        $obj = new Database();
        $q = "SELECT * FROM books";
        $obj->query($q);
        $res = $obj->results();
        return $this->view->render('404.html', array('books' => $res));
    }
}