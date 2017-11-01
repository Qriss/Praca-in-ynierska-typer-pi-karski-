<?php
/**
 * Created by PhpStorm.
 * User: Krzysiek
 * Date: 2016-12-01
 * Time: 23:41
 */

namespace Views;


class Typ extends View
{

    
    public function index(){
      
        $model=$this->getModel('Kolejka');
        $this->set('allKolejka', $model->getAllForUser(1));
       
        $this->render('kolejkaTyp');
    }

    public function endQueue()
    {
    
        $model=$this->getModel('Kolejka');
        $this->set('allKolejka', $model->getAllForUser(2));
        $this->render('historiaKolejka');
    }

  
    public function showone($id){
        
        $model = $this->getModel('Skrzynia');
        $item = $model->getOne($id);
        
        if($item !== null)
        {
            $this->set('oneSkrzynia', $item);
            $this->render('oneSkrzynia');
        }
        else
            $this->index();
    }
   
    public function add(){
        $this->render('addSkrzynia');
    }

    public function showMecz($id){
        $model = $this->getModel('Typ');
        $item = $model->getAll($id);
     

        $this->set('idKolejka', $id);
        $this->set('allMecz', $item);
        $this->render('showTyp');


    }

    public function resultsTyp($id){
        $model = $this->getModel('Typ');
        $item = $model->getAll($id);


        $this->set('idKolejka', $id);
        $this->set('allMecz', $item);
        $this->render('resultsTyp');


    }
    
}