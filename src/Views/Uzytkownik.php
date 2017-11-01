<?php
/**
 * Created by PhpStorm.
 * User: Krzysiek
 * Date: 2016-12-01
 * Time: 23:41
 */

namespace Views;


class Uzytkownik extends View
{
    private static $messages = array(
        'FORM_DATA_MISSING' => 'Nie wypełniono wszystkich pól formularza',
        'USER_NAME_ALREADY_EXIST' => 'Użytkownik o podanym loginie już istnieje',
        'EMAIL_NAME_ALREADY_EXIST' => 'Podany adres email jest już zajęty',
        'INVALID_PASS' => 'Podane hasla nie są takie same ',
        'SERVER_ERROR' => 'Bląd servera!',
        'ERROR' => 'Nieokreslony blad'
    );
    
    public function index(){
     $this->$this->render('Home');
    }

    
    public function showone($id){
      
        $model = $this->getModel('Uzytkownik');
        $item = $model->getOne($id);
        
        
        if($item !== null)
        {
           
            $this->set('Uzytkownik', $item);
            $this->render('Profile');

        }
        else
            $this->index();
    }

    public function update($id)
    {
       
        $model = $this->getModel('Uzytkownik');

        $item = $model->getOne($id);

        if($item !== null)
        {

            $this->set('User', $item);
            $this->render('updateProfile');
        }
        else
            $this->index();
    }


    
    public function add($result = null){
        if(isset($result)){
            if(array_key_exists($result, self::$messages))
                $this->set('message', self::$messages[$result]);
            else
                $this->set('message', self::$messages['ERROR']);
        }
        if(\Tools\Session::get('user') !== false && !empty(\Tools\Session::get('user')))
            $this->update(\Tools\Session::get('user'));
        else
        $this->render('Rejestracja');
    }

}