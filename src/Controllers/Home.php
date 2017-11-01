<?php


namespace Controllers;


class Home extends Controller
{

    public function index(){

        $view = $this->getView('Home');
        $view->index();
    }

    public function opis(){
       
        $view = $this->getView('Home');
        $view->opis();
    }
    
}