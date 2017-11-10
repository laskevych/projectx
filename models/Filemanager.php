<?php

class Filemanager extends Database
{
    static public function checkImage($image_name)
    {

        $ext = array('png','jpg');
        $image_name = $_FILES['image'];
        $file = $_FILES['image'];
        /*print_r($image_name);
        echo "<br>";
        echo $file;
        echo "<br>";*/

        $file_ext = pathinfo($image_name,PATHINFO_EXTENSION);
        $base = pathinfo($image_name, PATHINFO_FILENAME);
        if(in_array($file_ext,$ext))
        {
            while (file_exists('../upload/'.$image_name))
            {
                $image_name = $base . rand(1, 99). rand(1, 99) . '.' . $file_ext;
            }
            $res = move_uploaded_file($file,'../upload/'.$image_name);
            //print_r($res);
            if ($res)
            {
                echo 'img upload';
                echo "<br>";
                return $image_name;
            }
            else
            {
                echo 'img DONT UPLOAD';
                echo "<br>";
                return $image_name;
            }
        }
        else
        {
            echo 'img wrong format';
            echo "<br>";
            return $image_name;
        }
    }
}