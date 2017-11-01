<?php
/**
 * Created by PhpStorm.
 * User: Krzysiek
 * Date: 2016-12-01
 * Time: 16:51
 */

namespace Controllers;


class Typ extends Controller
{
 
    public function index(){
        
        $view = $this->getView('Typ');
        $view->index();
    }

    public function historia()
    {
        $view = $this->getView('Typ');
        $view->endQueue();
    }

   
    public function showMecz($id){
      
        $view = $this->getView('Typ');
        $view->showMecz($id);
    }

    public function showHistoria($id)
    {
        $view = $this->getView('Typ');
        $view->resultsTyp($id);
    }

  
    public function showone($id=null){
        if($id==null)
        {
          
            $view = $this->getView('Typ');
            $view->showone($id);
        }
        else
            $this->redirect('Typ');
    }

 
    public function add(){
        $view = $this->getView('Typ');
        $view->add();
    }

    public function insert(){

        $model = $this->getModel('Typ');
        $model->insert(
            $_POST['kolorname']);
        $this->redirect('Typ/');
    }

 
    public function insertResult($idKolejka){
        //modelMecz = $this->getModel('Mecz');
        $modelTyp = $this->getModel('Typ');
        $allMecz = $modelTyp->getAll($idKolejka);

        foreach($allMecz as $key)
        {

            $tmp=$key['idMecz']."typGospodarz";
            $tmp2=$key['idMecz']."typGosc";
            $time = explode(':', $key['godzinaRozpoczecia']);
            $date = explode('-', $key['dataMeczu']);
            $timestamp = mktime($time[0], $time[1], $time[2], $date[1], $date[2], $date[0]);
            $timestampToday = time();
            if($timestampToday < $timestamp) {
                if(($_POST[$tmp] !== "" && $_POST[$tmp2] !== "")) {
                    $modelTyp->insertResult($key['idMecz'], $_POST[$tmp], $_POST[$tmp2]);
                }
            }
            
        }
        $this->redirect('Typ/');
    }

  
    public function delete($id){
      
        if($id!==null)
        {
            $model=$this->getModel('Typ');
            $model->delete($id);
        }
        
        $this->redirect('Typ');
    }

}