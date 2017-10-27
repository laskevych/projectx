<?php
require_once '../models/Database.php';

class StatsAdmin extends CoreAdmin
{
    public function fetch()
    {
        $obj = new Database();
        $q = "SELECT * FROM books";
        $obj->query($q);
        $res = $obj->results();
        return $this->view->render('admin_stats.html', array('books' => $res));
    }
}