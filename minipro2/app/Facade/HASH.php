<?php 
namespace App\Facade;

trait HASH {
    //password hashing method.
    public static function make($pass){
        return password_hash($pass , PASSWORD_DEFAULT);
    }


}








?>