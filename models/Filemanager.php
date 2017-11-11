<?php

class Filemanager extends Database
{
    static public function checkImage($image_name)
    {
        if (preg_match('/([^\s]+(?=\.(jpg|png))\.\2)$/', $image_name))
        {
            $file = $_FILES['image']['tmp_name'];
            $separator = explode('.',$image_name);
            $image_name_ext = end($separator);
            $image_name = date("Y_m_d_H_i_s")."_"."projectx_image_".mt_rand(1,10000).mt_rand(1,10000).".".$image_name_ext;
            move_uploaded_file($file,'../upload/'.$image_name);
            return $image_name;
        }
    }
}