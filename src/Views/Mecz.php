<?php
/**
 * Created by PhpStorm.
 * User: Krzysiek
 * Date: 2016-12-01
 * Time: 23:42
 */

namespace Views;


class Mecz extends View
{
    private static $messages = array(
        'FORM_DATA_MISSING' => 'Nie wypełniono wszystkich pól formularza',
        'INVALID_DATA' => 'Błędna data'
    );

   
    public function index($id){
        $model = $this->getModel('Mecz');
        $item = $model->getAll3($id);
           // $tmp = $model->getTime();
        //$tmp2 = explode('-', $tmp[1]);
       // $tmp3 = explode(':', $tmp[2]);
       // $timestamp = mktime($tmp3[0], $tmp3[1], $tmp3[2], $tmp2[1], $tmp2[2], $tmp2[0]);


           // $zmienna = getdate($timestamp);
       // $this->set('data', $tmp[1]);
        //$this->set('time', $tmp[2]);
          //  $this->set('dzien', $zmienna["mday"]);
          //  $this->set('miesiac', $zmienna["mon"]);
         //   $this->set('rok',  $zmienna["year"]);
         //   $this->set('godz',  $zmienna["hours"]);
       // $this->set('min',  $zmienna["minutes"]);
        $this->set('customScript', 'przyklad');
            $this->set('idKolejka', $id);
            $this->set('allMecz', $item);
            $this->render('showMecz');

        
    }


    public function showone($id){
        //pobranie wybranej kategorii
        $model = $this->getModel('Mecz');
        $item = $model->getOne($id);
        //jesli istnieje to wyswietlenie jej
        if($item !== null)
        {
            $this->set('allMecz', $item);
            $this->render('allMecz');
        }
        else
            $this->index();
    }

    public function showone2($id){
        
        $model = $this->getModel('Mecz');
        $item = $model->getOne($id);
        
        if($item !== null)
        {
            $this->set('allMecz', $item);
            $this->render('allMecz2');
        }
        else
            $this->index();
    }
   
    public function add($result=null, $id){
        $model = $this->getModel('Mecz');
        $team = $model->getAllTeam();
        $league = $model->getAllLeague();
        $this->set('idKolejka', $id);
        $this->set('allTeam', $team);
        $this->set('allLeague', $league);
        if(isset($result)){
            $this->set('message', self::$messages[$result]);
        }
        $this->render('addMecz');
    }
    
    public function update($result=null, $id)
    {
     
        $model = $this->getModel('Mecz');
        $team = $model->getAllTeam();
        $league = $model->getAllLeague();
        $item = $model->getOne($id);
        $this->set('allTeam', $team);
        $this->set('allLeague', $league);
        $this->set('Mecz', $item);
        if(isset($result)){
            $this->set('message', self::$messages[$result]);
        }
            $this->render('updateMecz');


        
    }

}
