<?php

class Products extends Database
{
    //Добавление товара
    public function addProduct($product)
    {
        if (empty($product)) {
            return false;
        } else {
            foreach ($product as $column => $val) {
                $columns[] = $column;
                $values[] = "'" . $val . "'";
            }

            $column_sql = implode(',', $columns);
            $var_sql = implode(',', $values);

            $query = "INSERT INTO products ($column_sql) VALUES ($var_sql)";
            $this->query($query);
            return $this->resId();
        }
    }

    //Получение товара по ссылке для клиентской части и по id для админ панели.
    public function getProduct($var, $type)
    {
        if ($type == 'id')
        {
            if (empty($var))
            {
                return false;
            }
            else
            {
                $query = "SELECT id,name,description,url,visible,image,price FROM products WHERE id = $var LIMIT 1 ";
                $this->query($query);
                return $this->result();
            }
        }

        if ($type == 'url')
        {
            if (empty($var))
            {
                return false;
            }
            else
            {
                $query = "SELECT id,name,description,url,image,price,visible FROM products WHERE url = '".$var."' LIMIT 1";
                $this->query($query);
                return $this->result();
            }
        }
    }

    //Получение товаров. Вывод по "Видимости" и по ID.
    public function getProducts($visible = null, $id = null)
    {
        if (empty($id))
        {
            if ($visible == 'active')
            {
                $query = "SELECT id,name, description, url, visible,image,price FROM products WHERE visible = 1";
                $this->query($query);
                return $this->results();
            }
            elseif ($visible == 'disabled')
            {
                $query = "SELECT id,name, description, url, visible,image,price FROM products WHERE visible = 0";
                $this->query($query);
                return $this->results();
            }
            elseif ($visible == 'all')
            {
                $query = "SELECT id,name, description, url, visible,image,price FROM products";
                $this->query($query);
                return $this->results();
            }
            else
            {
                return false;
            }
        }
        else
        {
            $query = "SELECT id, name, description, url, visible, image, price FROM products WHERE id IN ($id)";
            $this->query($query);
            return $this->results();
        }
    }

    //Обновление товара
    public function updateProduct($id, $product)
    {
        if (empty($id)) {
            return false;
        } else {
            foreach ($product as $column => $val) {
                $columns[] = $column . '=' . "'" . $val . "'";
            }

            $column_sql = implode(',', $columns);
            $query = "UPDATE products SET $column_sql WHERE id=$id";
            $this->query($query);
            return $id;
        }
    }

    //Удаление товара
    public function deleteProduct($id)
    {
        if (empty($id))
        {
            return false;
        }
        else
        {
            $query = "DELETE FROM products WHERE products.id = '".$id."'";
            $this->query($query);
            return $id;
        }
    }
}