<?php
namespace App\Controllers;
use App\Support\Database;
use App\Facade\Image;


class Student extends Database {

    use Image;
    public function createNew($name, $email, $cell, $std_pass, $photo){

        $this -> create("students", [
            "name" => $name,
            "email" => $email,
            "cell" => $cell,
            "password" => $std_pass,
            "photo" => ''
        ]);
    }
    


    public function validate($msg, $type='danger'){
        return "<span class='alert alert-$type'>$msg</span>";
    }




}





?>