<?php
/**
 * Created by PhpStorm.
 * User: Krzysiek
 * Date: 2017-05-18
 * Time: 12:20
 */

namespace Controllers;


class Klasyfikacja extends Controller
{
    public function index(){

        $view = $this->getView('Klasyfikacja');
        $view->index();
    }
}