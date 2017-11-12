<?php
class Categories extends Database
{
    public function addCategory($category)
    {
        if (empty($category))
        {
            return false;
        }
        else
        {
            foreach ($category as $column => $val)
            {
                $columns[] = $column;
                $values[] = "'" . $val . "'";
            }

            $column_sql = implode(',', $columns);
            $var_sql = implode(',', $values);

            $q = "INSERT INTO categories ($column_sql) VALUE ($var_sql)";
            echo $q;
            echo "<br>";
            $this->query($q);
            //todo: resID
        }
    }
    public function getCategory()
    {
        if (empty($id))
        {
            return false;
        }
        else
        {
            $q = "SELECT id, parent_id, name, url, visible FROM categories WHERE id = $id LIMIT 1";
            $this->query($q);
            return $this->result();
        }
    }
    public function getCategories()
    {
        $q = "SELECT id, parent_id, name, url, visible FROM categories";
        $this->query($q);
        return $this->results();
    }
}