<?php

class OrdersAdmin extends CoreAdmin
{
    public function fetch()
    {
        $orders = new Orders();
        $request = new Request();

        $uri = parse_url($_SERVER['REQUEST_URI']);

        if ($uri['query'])
        {
            $status = explode('=',$uri['query']);
            $orders_catalog = $orders->getOrders($status[1]);
        }
        else
        {
            $orders_catalog = $orders->getOrders();
        }
        $arr = array(
            'orders' => $orders_catalog,
        );
        print_r($arr);
        return $this->view->render('admin_orders.html', $arr);
    }
}