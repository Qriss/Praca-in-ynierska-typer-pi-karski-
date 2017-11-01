<?php
/**
 * Created by PhpStorm.
 * User: Krzysiu
 * Date: 2015-12-28
 * Time: 12:01
 */

//sciezka do autoloadera stworzonego przez composera:
require 'vendor/autoload.php';



//Konfiguracja podkatalogu projektu
\Config\Website\Config::$subdir = 'typer/';
//Konfgiruacja dostepu do bazy danych
\Config\Database\DBConfig::setDBConfig();

//Inicjalizacja sesji anonimowej
\Tools\Session::initialize();
//Sprawdzamy czy jestesmy zalogowani
//if(\Tools\Access::islogin() !== true) {
    //$mycontroller = new \Controllers\Home();
   // $mycontroller->index();

//}
//else {
    //Kontroler/akcja/parametr_id
    if(isset($_GET['controller']))
        $controller = $_GET['controller'];
    else
        $controller = 'Home';
    if(isset($_GET['action']))
        $action = $_GET['action'];
    else
        $action = 'index';
    if(isset($_GET['id']))
        $id = $_GET['id'];
    else
        $id = null;

    $controller = 'Controllers\\'.$controller;

    //tworzymy kontroler
    $mycontroller = new $controller();
    //wykonujemy akcje dla kontrolera
    $mycontroller->$action($id);
//}


?>
