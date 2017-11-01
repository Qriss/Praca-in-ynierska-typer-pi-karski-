<?php
/**
 * Created by PhpStorm.
 * User: Krzysiek
 * Date: 2016-12-01
 * Time: 17:21
 */

namespace Controllers;


class Sezon extends Controller
{

    public function index(){

        $view = $this->getView('Sezon');
        $view->index();
    }

    
    public function showone($id=null){
        if($id==null)
        {
            
            $view = $this->getView('Sezon');
            $view->showone($id);
        }
        else
            $this->redirect('Sezon');
    }




    public function insert(){
      
        $model = $this->getModel('Sezon');
        $model->insert(
            $_POST['nazwa'], $_POST['dataP'], $_POST['dataZ']);
        $this->redirect('Sezon/');
    }
   
    public function insert2(){
      
        $model = $this->getModel('Sezon');
        $view = $this->getView('Sezon');
        if(!$_POST['idSezon'] || !$_POST['nazwa'] || !$_POST['dataP'] || !$_POST['dataZ'])
        {
            $view->update('FORM_DATA_MISSING', $_POST['idSezon']);
        }
        else
        {
            $model->update(
                $_POST['idSezon'], $_POST['nazwa'], $_POST['dataP'], $_POST['dataZ']);
            $this->redirect('Sezon/');
        }
    }

    public function delete($id){
        $model=$this->getModel('Sezon');
        $view=$this->getView('Sezon');
        if($id!==null)
        {
            if($model->checkSezon($id) === 0)
            {
                $model2=$this->getModel('Kolejka');
                $model->delete($id);
                $model2->delete2($id);
            }

        }

        $view->index('DELETE_ERROR');
    }

    public function add(){
        $view = $this->getView('Sezon');
        $model = $this->getModel('Sezon');
        if($model->check() === 0) {
            $view->add();
        }
        else{
            $view->index('ERROR');
        }
    }


    public function update($id=null){
        if($id!==null)
        {
            
            $view = $this->getView('Sezon');
            $view->update(NULL, $id);
        }
        else
            $this->redirect('Sezon/');
    }



}