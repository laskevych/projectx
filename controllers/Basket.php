<?php
class Basket extends Core
{
    public function fetch()
    {
        $request = new Request();
        if ($request->method() == 'POST')
        {
            $id = $request->post('id', 'integer');
            unset($_SESSION['order'][$id]);
        }
        if ($request->method() == 'POST' && $_POST['clear-basket'])
        {
            unset($_SESSION['order']);
        }


        $arr = array(
            'products' => $_SESSION['order'],
        );

        return $this->view->render('basket.html', $arr);
    }
}