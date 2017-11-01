<?php
/**
 * Created by PhpStorm.
 * User: Krzysiek
 * Date: 2016-12-01
 * Time: 23:41
 */

namespace Views;


class Sezon extends View
{
    private static $messages = array(
        'SERVER_ERROR' => 'Bląd servera!',
        'FORM_DATA_MISSING' => 'Nie wypełniono wszystkich pól formularza',
        'DELETE_ERROR' => 'Nie można usunąć aktywnego sezonu',
        'ERROR' => 'Nie można stworzyć nowego sezonu dopóki nie zostanie zakończony obecny sezon'
    );
  
    public function index($result=null){

        $model=$this->getModel('Sezon');
        $this->set('allSezon', $model->getAll());
    
        if(isset($result)){
            $this->set('message', self::$messages[$result]);
        }
        $this->render('showSezon');
    }

 
    public function showone($id){
        
        $model = $this->getModel('Sezon');
        $item = $model->getOne($id);
     
        if($item !== null)
        {
            $this->set('oneSezon', $item);
            $this->render('oneSezon');
        }
        else
            $this->index();
    }
    
    public function add(){
        $this->render('addSezon');
    }

   
    public function update($result=null, $id)
    {
     
        $model = $this->getModel('Sezon');
        $item = $model->getOne($id);
        if(isset($result)){
            $this->set('message', self::$messages[$result]);
        }
            $this->set('Sezon', $item);
            $this->render('updateSezon');

    }
    
}