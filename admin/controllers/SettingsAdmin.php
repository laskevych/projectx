<?php
require_once '../models/Database.php';

class SettingsAdmin extends CoreAdmin
{
    public function fetch()
    {
        $obj = new Database();
        $q = "SELECT * FROM books";
        $obj->query($q);
        $res = $obj->results();
        return $this->view->render('admin_settings.html', array('books' => $res));
    }
}