<?php


namespace Views;


class Klasyfikacja extends View
{
    public function index(){

        $model=$this->getModel('Klasyfikacja');
        $this->set('allPozycja', $model->getAll());

        $this->render('klasyfikacja');
    }
}