<?php
class Orders extends Database
{
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

    public function getOrder($id)
    {
        if (empty($id)) {
            return false;
        } else {
            $query = "SELECT id, user_name, user_email, user_phone, user_address, user_comment, status FROM orders WHERE id = $id LIMIT 1 ";
            $this->query($query);
            return $this->result();
        }
    }

    //Отображение заказов. Четыре режима отображения.
    public function getOrders($status = null)
    {
        switch ($status)
        {
            case 0:
                $query = "SELECT id, user_name, user_email, user_phone, user_address, user_comment, total_price,status FROM orders WHERE status = 0";
                $this->query($query);
                return $this->results();
                break;
            case 1:
                $query = "SELECT id, user_name, user_email, user_phone, user_address, user_comment, total_price,status FROM orders WHERE status = 1";
                $this->query($query);
                return $this->results();
                break;
            case 2:
                $query = "SELECT id, user_name, user_email, user_phone, user_address, user_comment, total_price,status FROM orders WHERE status = 2";
                $this->query($query);
                return $this->results();
                break;
            case 3:
                $query = "SELECT id, user_name, user_email, user_phone, user_address, user_comment, total_price,status FROM orders WHERE status = 3";
                $this->query($query);
                return $this->results();
                break;
            default:
                $query = "SELECT id, user_name, user_email, user_phone, user_address, user_comment, total_price,status FROM orders";
                $this->query($query);
                return $this->results();
                break;
        }
    }

    public function deleteOrder($id)
    {
        if (empty($id))
        {
            return false;
        }
        else
        {
            $query = "DELETE FROM orders WHERE orders.id = '".$id."'";
            $this->query($query);
            return $id;
        }
    }
}