<?php
class Basket extends Core
{
    public function fetch()
    {
        $orders = new Orders();
        $request = new Request();

        //TODO: Обратить внимание (!!!). Не знаю как избавится от ошибки связанной с foreach

        if ($_SESSION['order'])
        {
            //Сумма всех товаров в корзине
            foreach ($_SESSION['order'] as $item)
            {
                $amount = $item['amount'];
                $price = $item['price'];
                $sum[] = $amount * $price;
            }
            $total_price = array_sum($sum);
        }
        if ($request->method() == 'POST' && $_POST['clear-basket'])
        {
            $id = $request->post('id', 'integer');
            unset($_SESSION['order'][$id]);
        }
        if ($request->method() == 'POST' && $_POST['all-clear-basket'])
        {
            unset($_SESSION['order']);
        }
        if ($request->method() == 'POST' && $_POST['add-order'])
        {
            $order = new stdClass();
            $order->user_name = $request->post('user_name');
            $order->user_phone = $request->post('user_phone');
            $order->user_email = $request->post('user_email');
            $order->user_address = $request->post('user_address');
            $order->user_comment = $request->post('user_comment');
            $order->total_price = $total_price;
            $order->created = date("d.m.y G:i:s");
            $order_id = $orders->addOrder($order);
            $orders->addOrderProducts($order_id,$_SESSION['order']);
            unset($_SESSION['order']);
        }
        $arr = array(
            'products' => $_SESSION['order'],
            'total_price' => $total_price,
            'order_id' => $order_id,
        );

        return $this->view->render('basket.html', $arr);
    }
}