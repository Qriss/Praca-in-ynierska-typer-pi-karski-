<?php


namespace Controllers;


class Kolejka extends Controller
{



    public function index(){

        $view = $this->getView('Kolejka');
        $view->index();
    }
    
    
    public function insert(){
        
        $model = $this->getModel('Kolejka');
        $result=$model->insert();
        if($result === 0)
        {
            $this->redirect('Kolejka/');
        }
        else{
            $view = $this->getView('Kolejka');
            $view->index($result);
        }

    }
    

    public function delete($id=null){
        $model = $this->getModel('Kolejka');
        $view = $this->getView('Kolejka');
        if($id!==null)
        {
           if($model->checkStatus($id) < 1) {
               $model->delete($id);
               $this->redirect('Kolejka/');
           }
            else{
                $view->index('ERROR_STATUS');
            }
        }
        else{
            $this->redirect('Kolejka/');
        }


    }


    public function run($id){


        if($id!==null)
        {
            $model=$this->getModel('Kolejka');
            if($model->checkStatus($id) == 0 && $model->getAllMecz($id) >= 10) {
                $model->changeStatus($id, 1);
            }
        }

        $this->redirect('Kolejka/');
    }



    public function end($id){
        $modelMecz = $this->getModel('Mecz');
        $modelKlasyfikacj = $this->getModel('Klasyfikacja');
        $allMecz = $modelMecz->getAll($id);
        $model=$this->getModel('Kolejka');
        if($id!==null)
        {
            if($model->checkStatus($id) == 1) {
                $model->changeStatus($id, 2);

                foreach ($allMecz as $key)
                {
                    $modelMecz->insertPoints($key['idMecz'], $key['golGospodarz'], $key['golGosc']);
                }
                if($id!==null)
                {

                    $modelMecz->updateKlasyfikacja($allMecz);
                    $modelKlasyfikacj->sortPozycja();

                }
            }
        }

        $this->redirect('Kolejka/');
    }

}

