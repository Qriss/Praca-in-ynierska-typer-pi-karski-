<?php
/**
 * Created by PhpStorm.
 * User: Krzysiek
 * Date: 2016-12-01
 * Time: 16:03
 */

namespace Controllers;


class Uzytkownik extends Controller
{
 
    public function index(){
        $view = $this->getView('Uzytkownik');
        $view->index();
    }

 
    public function showone($id=null){
        if($id!==null)
        {
            $view = $this->getView('Uzytkownik');
            $view->showone($id);
        }
        else
            $this->redirect('Home/'); 
    }

    public function add(){
        $view = $this->getView('Uzytkownik');
        $view->add();
    }


    public function insert()
    {
        $model = $this->getModel('Uzytkownik');
        $view = $this->getView('Uzytkownik');
        if (!$_POST['login'] || !$_POST['haslo'] || !$_POST['haslo2'] || !$_POST['email']) {
            $view->add('FORM_DATA_MISSING');
        } else  {
            $result = $model->insert($_POST['login'], $_POST['haslo'], $_POST['haslo2'], $_POST['email']);
            if ($result === 0)
                $this->redirect('');
            else
                $view->add($result);
        }
    }
    /*
     else if(\Tools\Session::get('user') !== null)
    {
    
    }
    
     */
    
    public function update($id=null){
        if($id!==null)
        {
         
            $view = $this->getView('Uzytkownik');
            $view->update($id);
        }
        else
            $this->redirect('Home/');
    }

   
    public function delete($id){
        if($id!==null)
        {
            $model=$this->getModel('Uzytkownik');
            $model->delete($id);
        }
        $this->redirect('Uzytkownik');
    }


}