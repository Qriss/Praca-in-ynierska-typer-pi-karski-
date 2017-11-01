<?php
/**
 * Created by PhpStorm.
 * User: Krzysiek
 * Date: 2016-12-01
 * Time: 17:02
 */

namespace Controllers;


class Mecz extends Controller
{


    public function index($id){
        
        $view = $this->getView('Mecz');
        $view->index($id);
    }

  

    public function showone($id=null){
        if($id!==null)
        {
            
            $view = $this->getView('Mecz');
            $view->showone($id);
        }
        else
            $this->redirect('Mecz/');
    }

    public function showone2($id=null){
        if($id!==null)
        {
            
            $view = $this->getView('Mecz');
            $view->showone2($id);
        }
        else
            $this->redirect('Mecz/');
    }
  
    public function add($id){

        if($id!==null) {
            $model = $this ->getModel('Kolejka');
            $status = $model->checkStatus($id);
            if($status == 0) {
                $view = $this->getView('Mecz');
                $view->add(NULL, $id);
            }
        }
        $this->redirect('');
    }

  
    public function insert(){

        $model = $this->getModel('Mecz');
        $view=$this->getView('Mecz');
        if (!$_POST['data'] || !$_POST['time'] || !$_POST['gospodarz'] || !$_POST['gosc'] || !$_POST['league'] || !$_POST['idKolejka']) {
            $view->add('FORM_DATA_MISSING', $_POST['idKolejka']);
        }
        else {
            $time = explode(':', $_POST['time']);
            $date = explode('-', $_POST['data']);

            $timestamp = mktime($time[0], $time[1], 0, $date[1], $date[2], $date[0]);
            $tmpDate = getdate($timestamp);
            $timestamptoday = time();
            $todayDate = getdate();
            if ($todayDate["year"] > $tmpDate["year"]) {
                $view->add('INVALID_DATA', $_POST['idKolejka']);
            } elseif ($todayDate["mon"] > $tmpDate["mon"]) {
                $view->add('INVALID_DATA', $_POST['idKolejka']);
            } elseif ($todayDate["mday"] > $tmpDate["mday"]) {
                $view->add('INVALID_DATA', $_POST['idKolejka']);
            } elseif (($timestamp - $timestamptoday) < 86400)
            {
                $view->add('INVALID_DATA', $_POST['idKolejka']);
            } else {
                $model->insert(
                    $_POST['data'], $_POST['time'], $_POST['gospodarz'], $_POST['gosc'], $_POST['league'], $_POST['idKolejka']); // tu zmienickoniecznie na pole w ktorym pobieramy dane z formularza i je przekazac
                $this->redirect('Kolejka/');
            }
        }
    }

    
    public function insertResult($idKolejka){
        $model = $this->getModel('Mecz');
        $allMecz = $model->getAll($idKolejka);
        foreach($allMecz as $key)
        {

            $tmp=$key['idMecz']."Gospodarz";
            $tmp2=$key['idMecz']."Gosc";
            if($_POST[$tmp] !== "" && $_POST[$tmp2] !== "") {
                $model->insertResult($key['idMecz'], $_POST[$tmp], $_POST[$tmp2]);
            }
        }
        $this->redirect('Kolejka/');
    }

    
    public function insert2(){

        $model = $this->getModel('Mecz');
        $view=$this->getView('Mecz');
        if (!$_POST['data'] || !$_POST['time'] || !$_POST['gospodarz'] || !$_POST['gosc'] || !$_POST['league'] || !$_POST['idMecz']) {
            $view->update('FORM_DATA_MISSING', $_POST['idMecz']);
        }
        else
        {
            $model->update(
                $_POST['data'], $_POST['time'], $_POST['gospodarz'], $_POST['gosc'], $_POST['league'], $_POST['idMecz']); // tu zmienickoniecznie na pole w ktorym pobieramy dane z formularza i je przekazac
            $this->redirect('Kolejka/');
        }
    }


    public function update($id){
        if($id!==null)
        {

            $view = $this->getView('Mecz');
            $view->update(NULL, $id);
        }
        else
            $this->redirect('Home/');
    }
    


    public function delete($id){

        if($id!==null)
        {
            $model=$this->getModel('Mecz');
            $model->deleteMecz($id);
        }

        $this->redirect('Kolejka/');
    }

    public function delete2($id){
    
        if($id!==null)
        {
            $model=$this->getModel('Mecz');
            $model->delete($id);
        }
      
        $this->redirect('Mecz/');
    }



    

}