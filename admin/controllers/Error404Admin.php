<?php
class Error404Admin extends CoreAdmin
{
    public function fetch()
    {

        $arr = array(
            'products' => 404,
        );

        return $this->view->render('404.html', $arr);
    }
}