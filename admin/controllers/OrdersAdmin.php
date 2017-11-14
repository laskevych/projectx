<?php

class OrdersAdmin extends CoreAdmin
{
    public function fetch()
    {
        $orders = new Orders();

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
            'status' => $status[1],
        );
        return $this->view->render('admin_orders.html', $arr);
    }
}