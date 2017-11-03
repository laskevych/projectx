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
            echo "<br>";
            $this->query($query);
            return $this->resId();
        }
    }

    public function getProduct()
    {
        if (empty($id)) {
            return false;
        } else {
            $query = "SELECT id,name,description,url,visible,image FROM products WHERE id = $id LIMIT 1 ";
            $this->query($query);
            return $this->result();
        }
    }

    public function getProducts()
    {
        $query = "SELECT id,name, description, url, visible,image,price FROM products";
        $this->query($query);
        return $this->results();
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

    public function deleteProduct()
    {
    }
}