<?php
class Pages extends Database
{
    //Добавление страницы
    public function addPage($page)
    {
        if(empty($page))
        {
            return false;
        }
        else
        {
            foreach ($page as $column => $val)
            {
                $columns[] = $column;
                $values[] = "'" . $val . "'";
            }

            $column_sql = implode(',', $columns);
            $var_sql = implode(',', $values);

            $query = "INSERT INTO pages ($column_sql) VALUE ($var_sql)";
            $this->query($query);
            return $this->resId();
        }
    }

    //Получение товара по ссылке для клиентской части и по id для админ панели.
    public function getPage($var,$type)
    {
        if ($type == 'id')
        {
            if (empty($var))
            {
                return false;
            }
            else
            {
                $query = "SELECT id,title, description, url, visible FROM pages WHERE id = $var LIMIT 1";
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
                $query = "SELECT id,title, description, url, visible FROM pages WHERE url ='".$var."' LIMIT 1";
                $this->query($query);
                return $this->result();
            }
        }
    }

    //Получение страниц. Три режима отображения.
    public function getPages($visible)
    {
        if ($visible == 'active')
        {
            $query = "SELECT id,title,description,url,visible FROM pages WHERE visible = 1";
            $this->query($query);
            return $this->results();
        }
        elseif ($visible == 'disabled')
        {
            $query = "SELECT id,title,description,url,visible FROM pages WHERE visible = 0";
            $this->query($query);
            return $this->results();
        }
        else
        {
            $query = "SELECT id,title,description,url,visible FROM pages";
            $this->query($query);
            return $this->results();
        }
    }

    //Обновление страницы
    public function updatePage($id, $page)
    {
        if (empty($id)) {
            return false;
        } else {
            foreach ($page as $column => $val) {
                $columns[] = $column . '=' . "'" . $val . "'";
            }

            $column_sql = implode(',', $columns);
            $query = "UPDATE pages SET $column_sql WHERE id=$id";
            $this->query($query);
            return $id;
        }
    }

    //Удаление страницы
    public function deletePage($id)
    {
        if (empty($id))
        {
            return false;
        }
        else
        {
            $query = "DELETE FROM pages WHERE id = '".$id."'";
            $this->query($query);
        }
    }
}