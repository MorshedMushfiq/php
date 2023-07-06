<?php
namespace App\Facade;


trait Str {

    public static function text($txt, $type='u'){
        switch($type){
            case "u": 
                $trans = 'uppercase';
            break;
            case "l": 
                $trans = 'lowercase';
            break;
            case "c": 
                $trans = 'capitalize';
            break;
            default: 
                $trans = 'uppercase';
            break;  
        }

        return "<span style=\" text-transform: $trans; \">$txt</span>";
        
    }



    
}








?>