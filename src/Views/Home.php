<?php


namespace Views;


class Home extends View
{
    public function index(){

        $model=$this->getModel('Sezon');
        $model2=$this->getModel('Kolejka');
        $this->set('sezon', $model->getAll());
        $this->set('kolejka', $model2->getAllForUser(1));
        $this->render('Home');
    }

    public function opis(){
        $this->render('Opis');
    }
}