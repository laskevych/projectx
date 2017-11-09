<?php
class Error404 extends Core
{
    public function fetch()
    {
        $arr = array(
            'products' => 404,
        );

        return $this->view->render('404.html', $arr);
    }
}