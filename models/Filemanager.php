<?php

class Filemanager extends Database
{
    static public function checkImage($image_name)
    {
        $ext = array('png','jpg');
        $file_ext = pathinfo($image_name,PATHINFO_EXTENSION);
        $base = pathinfo($image_name, PATHINFO_FILENAME);
        if(in_array($file_ext,$ext))
        {
            while (file_exists('../upload/'.$image_name))
            {
                $image_name = $base . rand(1, 99). rand(1, 99) . '.' . $file_ext;
                //todo: запрос бд
                /*$obj = new Database();
                $query = "INSERT INTO image (name) VALUES ('".$name."')";
                $obj->query($query);*/
            }
            //$res = move_uploaded_file($file,'../upload/'.$name); todo: before
            $res = move_uploaded_file($image_name,'../upload/'.$image_name);
            if ($res)
            {
                echo 'img upload';
            }
            else
            {
                //echo 'img DONT UPLOAD';
            }
        }
        else
        {
            echo 'img wrong format';
        }
    }
    static public function viewImage()
    {

    }
}