<?php
class OrderAdmin extends CoreAdmin
{
    public function fetch()
    {
        $orders = new Orders();
        $request = new Request();
        $order = new stdClass();

        $uri = parse_url($_SERVER['REQUEST_URI']);

        if ($uri['query'])
        {
            $id = explode('=',$uri['query']);
            $order = $orders->getOrder($id[1],'id');
            $order_products = $orders->getOrderProducts($id[1]);
        }

        if ($request->method() == 'POST')
        {
            $order_id = $request->post('order_id');
            $status = $request->post('order_status');
            $id = $orders->updateStatus($order_id,$status);
            $order = $orders->getOrder($id,'id');
            $order_products = $orders->getOrderProducts($id);
        }
        $arr = array(
            'order' => $order,
            'order_products' => $order_products,
        );

        return $this->view->render('admin_order.html', $arr);
    }
}