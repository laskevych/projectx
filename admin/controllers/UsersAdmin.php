<?php
require_once '../models/Database.php';

class UsersAdmin extends CoreAdmin
{
    public function fetch()
    {
        $obj = new Database();
        $q = "SELECT * FROM books";
        $obj->query($q);
        $res = $obj->results();
        return $this->view->render('admin_users.html', array('books' => $res));
    }
}