<?php

class Orders extends Database
{
    //Добавление заказа
    public function addOrder($order)
    {
        if (empty($order)) {
            return false;
        } else {
            foreach ($order as $column => $val) {
                $columns[] = $column;
                $values[] = "'" . $val . "'";
            }

            $column_sql = implode(',', $columns);
            $var_sql = implode(',', $values);

            $query = "INSERT INTO orders ($column_sql) VALUES ($var_sql)";
            $this->query($query);
            return $this->resId();
        }
    }
    //Добавление товаров который были в корзине на момент оформление заказа.
    // Нужно сохранять старое имя, цену, кол-во и ID. Товар могут редактировать и удалить.
    public function addOrderProducts($order_id,$basket_products)
    {
        foreach ($basket_products as $product)
        {
            $product_id = $product['id'];
            $product_name = $product['name'];
            $product_amount = $product['amount'];
            $product_price = $product['price'];
            $query = "INSERT INTO orders_product (order_id, product_id, product_name, product_amount, product_price) VALUE ($order_id, $product_id, '".$product_name."', $product_amount, $product_price)";
            $this->query($query);
        }
    }

    //Получение заказа по ID
    public function getOrder($id)
    {
        if (empty($id))
        {
            return false;
        }
        else
        {
            $query = "SELECT id, user_name, user_email, user_phone, user_address, user_comment, order_status, total_price, created FROM orders WHERE id = $id LIMIT 1 ";
            $this->query($query);
            return $this->result();
        }
    }
    //Получение товаров по ID заказа.
    public function getOrderProducts($order_id)
    {
        if (empty($order_id))
        {
            return false;
        }
        else
        {
            $query = "SELECT order_id, product_id, product_name, product_amount, product_price FROM orders_product WHERE order_id = $order_id";
            $this->query($query);
            return $this->results();
        }

    }

    //Получение заказов. Режим отображеня зависит от параметра order_status в БД.
    public function getOrders($order_status = null)
    {
        switch ($order_status)
        {
            case 0:
                $query = "SELECT id, user_name, user_email, user_phone, user_address, user_comment, total_price,order_status,created FROM orders WHERE order_status = 0";
                $this->query($query);
                return $this->results();
                break;
            case 1:
                $query = "SELECT id, user_name, user_email, user_phone, user_address, user_comment, total_price,order_status,created FROM orders WHERE order_status = 1";
                $this->query($query);
                return $this->results();
                break;
            case 2:
                $query = "SELECT id, user_name, user_email, user_phone, user_address, user_comment, total_price,order_status,created FROM orders WHERE order_status = 2";
                $this->query($query);
                return $this->results();
                break;
            case 3:
                $query = "SELECT id, user_name, user_email, user_phone, user_address, user_comment, total_price,order_status,created FROM orders WHERE order_status = 3";
                $this->query($query);
                return $this->results();
                break;
            default:
                $query = "SELECT id, user_name, user_email, user_phone, user_address, user_comment, total_price,order_status,created FROM orders";
                $this->query($query);
                return $this->results();
                break;
        }
    }

    public function updateStatus($order_id,$order_status)
    {
        if (empty($order_id))
        {
            return false;
        }
        else
        {
            $query = "UPDATE orders SET order_status = $order_status WHERE id=$order_id";
            $this->query($query);
            return $order_id;
        }
    }
}