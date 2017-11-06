<?php
class Products extends Database
{
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
            //echo $query;
            //echo "<br>";
            $this->query($query);
            return $this->resId();
        }
    }

    public function getProduct($id)
    {
        if (empty($id)) {
            return false;
        } else {
            $query = "SELECT id,name,description,url,visible,image,price FROM products WHERE id = $id LIMIT 1 ";
            $this->query($query);
            return $this->result();
        }
    }

    //Отображение товаров. Три режима отображения.
    public function getProducts($visible)
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
        else
        {
            $query = "SELECT id,name, description, url, visible,image,price FROM products";
            $this->query($query);
            return $this->results();
        }
    }

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
            echo $query;
        }
    }

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
        }
    }
}