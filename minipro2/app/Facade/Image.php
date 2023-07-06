<?php
namespace App\Facade;

trait Image {

    public function move($file_info, $path){

        $file_name = $file_info['name'];
        $file_tmp_name = $file_info['tmp_name'];
        $unique_name = $this -> uniqueName($file_name);

        mkdir($path);
        move_uploaded_file($file_tmp_name, $path . $unique_name);
        return [
            "file_name" => $unique_name
        ];



    }

    public function uniqueName($file_name){
        $file_arr = explode('.', $file_name);
        $file_ext = end($file_arr);
        return md5(time(). rand()) . '.' . $file_ext;
    }

}







?>