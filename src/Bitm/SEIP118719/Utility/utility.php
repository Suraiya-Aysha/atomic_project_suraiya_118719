<?php

namespace App\Bitm\SEIP118719\Utility;

class Utility{
    
    
    static public function d($param=false){
        echo "<pre>";
        var_dump($param);
        echo "</pre>";
    }
    
    static public function dd($param=false){
        self::d($param);
        die();
    }
    
    static public function redirect($url="/atomic_project_suraiya_118719/views/SEIP118719/Book_Title/index.php"){
        header("Location:".$url);
    }
}