<?php
namespace Controllers;
abstract class Controller {

   
    public function redirect($url) {
        header('location: '.'http://'.$_SERVER["SERVER_NAME"].':8080'.'/'.
            \Config\Website\Config::$subdir.$url);
    }

    
    public function getModel($name){
        $name = 'Models\\'.$name;
        return new $name();
    }

    public function getView($name){
        $name = 'Views\\'.$name;
        return new $name();
    }
}