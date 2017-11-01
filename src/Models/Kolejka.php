<?php
/**
 * Created by PhpStorm.
 * User: Krzysiek
 * Date: 2016-12-01
 * Time: 23:20
 */

namespace Models;
use \PDO;

class Kolejka extends  Model
{

  
    public function getAll()
    {
        $data = array();
        try {
            $stmt = $this->pdo->query('SELECT * FROM `kolejka`');


            while ($row = $stmt->fetch()) {
                $stmt1 = $this->pdo->prepare('SELECT count(*) as ile FROM `mecz` WHERE `idKolejka`=:idKolejka');
                $stmt1->bindValue(':idKolejka', $row['idKolejka'], PDO::PARAM_INT);
                $stmt1->execute();
                $result = $stmt1->fetch();
                $stmt1->closeCursor();

                $data[$row['idKolejka']]=array(
                    'idKolejka' => $row['idKolejka'],
                    'numerKolejki' => $row['numerKolejki'],
                    'status' => $row['status'],
                    'ile' => $result['ile']
                );




            }
            $stmt->closeCursor();
            return $data;
        }
        catch(\PDOException $e){
            $error =$this->pdo->errorInfo();
            echo "błąd: ".$error[2];
            echo 'Database connection error';
            exit(1);
        }

    }

    
    public function getAllForUser($status)
    {
        $data = array();
        try {
            $stmt = $this->pdo->prepare('SELECT * FROM kolejka WHERE status=:status');
            $stmt->bindValue(':status', $status, PDO::PARAM_INT);
            $stmt->execute();

            while ($row = $stmt->fetch()) {
                $stmt1 = $this->pdo->prepare('SELECT count(*) as ile FROM `mecz` WHERE `idKolejka`=:idKolejka');
                $stmt1->bindValue(':idKolejka', $row['idKolejka'], PDO::PARAM_INT);
                $stmt1->execute();
                $result = $stmt1->fetch();
                $stmt1->closeCursor();

                $data[$row['idKolejka']]=array(
                    'idKolejka' => $row['idKolejka'],
                    'numerKolejki' => $row['numerKolejki'],
                    'status' => $row['status'],
                    'ile' => $result['ile']
                );




            }
            $stmt->closeCursor();
            return $data;
        }
        catch(\PDOException $e){
            $error =$this->pdo->errorInfo();
            echo "błąd: ".$error[2];
            echo 'Database connection error';
            exit(1);
        }

    }

    public function getAllMecz($id)
    {
        try{
            $stmt1 = $this->pdo->prepare('SELECT count(*) as ile FROM `mecz` WHERE `idKolejka`=:idKolejka');
            $stmt1->bindValue(':idKolejka', $id, PDO::PARAM_INT);
            $stmt1->execute();
            $result = $stmt1->fetch();
            $stmt1->closeCursor();
            return $result['ile'];
        }
        catch(\PDOException $e) {
            echo 'Database connection error!';
            exit(1);
        }
    }
   
    public function getOne($id)
    {
        try{
            $stmt = $this->pdo->prepare('SELECT * FROM `kolejka` WHERE `idKolejka`=:idKolejka');
            $stmt->bindValue(':idKolejka', $id, PDO::PARAM_INT);
            $stmt->execute();
            $result = $stmt->fetchAll();
            $stmt->closeCursor();
            if($result!==false && !empty($result)){
                return $result[0];
            }
            else return null;
        }
        catch(\PDOException $e) {
            echo 'Database connection error!';
            exit(1);
        }
    }


    public function delete($id){
        try
        {

            $query = $this->pdo->prepare('DELETE FROM `mecz` WHERE `idKolejka`=:id');
            $query->bindValue(':id', $id, PDO::PARAM_INT);
            $query->execute();
            $query->closeCursor();

            $query = $this->pdo->prepare('DELETE FROM `kolejka` WHERE `idKolejka`=:id');
            $query->bindValue(':id', $id, PDO::PARAM_INT);
            $query->execute();
            $query->closeCursor();
        }
        catch(\PDOException $e)
        {
            echo 'Polaczenie z baza nie powidolo sie: ' . $e->getMessage();
        }
    }

    public function delete2($id){
        try
        {
            $query = $this->pdo->prepare('DELETE FROM `kolejka` WHERE `idSezon`=:id');
            $query->bindValue(':id', $id, PDO::PARAM_INT);
            $query->execute();
            $query->closeCursor();


        }
        catch(\PDOException $e)
        {
            echo 'Polaczenie z baza nie powidolo sie: ' . $e->getMessage();
        }
    }

    
    public function insert()
    {



            try{
                
                $stmt = $this->pdo->prepare('SELECT COUNT(idSezon) FROM sezon');
                $stmt->execute();
                $result = $stmt->fetchColumn();
                $stmt->closeCursor();

               
                if($result == 0)
                {
                    return 'ERROR';
                }
                else{
                  
                    $stmt = $this->pdo->prepare('SELECT COUNT(idKolejka) FROM kolejka');
                    $stmt->execute();
                    $numerKolejki = $stmt->fetchColumn();
                    $stmt->closeCursor();


                    if($numerKolejki == 0)
                    {
                        $numerKolejki = 1;
                    }
                    else{
                        $numerKolejki++;
                    }

                   
                    $stmt = $this->pdo->prepare('SELECT idSezon FROM sezon WHERE status=:status');
                    $stmt -> bindValue(':status', 1, PDO::PARAM_INT);
                    $stmt->execute();
                    $idSezon =  $stmt->fetch();
                    $stmt->closeCursor();

                 
                    $stmt= $this-> pdo -> prepare('INSERT INTO `kolejka` (`numerKolejki`, `status`, `idSezon`)
                               VALUES(:numerKolejki, :status, :idSezon)');
                    $stmt -> bindValue(':numerKolejki', $numerKolejki, PDO::PARAM_INT);
                    $stmt -> bindValue(':status', 0, PDO::PARAM_INT);
                    $stmt -> bindValue(':idSezon', $idSezon[0], PDO::PARAM_INT);
                    $stmt->execute();
                    $stmt->closeCursor();

                    return 0;

                }

            }
            catch(\PDOException $e) {
                $error =$this->pdo->errorInfo();
                echo "błąd: ".$error[2];
                echo 'Database connection error ze tu ten blad!';

            }

      // sprawdzamy ktory sezon 0if(\Tools\Session::get('user') !== false && !empty(\Tools\Session::get('user')))jest aktywny i dodajemy do niego nowa tworzona kolejke
/*
        try{
            $stmt = $this->pdo->query('SELECT idSezon FROM `sezon` WHERE `status`=1');
            $result =  $stmt->fetch();
            $stmt->closeCursor();


                $stmt2= $this-> pdo -> prepare('INSERT INTO `kolejka` (`idSezon`, `statusKolejki`)
                               VALUES(:idSezon, :statusKolejki)');
                $stmt2 -> bindValue(':idSezon', $result[0], PDO::PARAM_STR);
                $stmt2 -> bindValue(':statusKolejki', 0, PDO::PARAM_STR);
                $result2 = $stmt2->execute();
                $stmt->closeCursor();
                return $result2;


        }
        catch(\PDOException $e) {
            echo 'Database connection error!';

        }
        */

/*
        try{
            $stmt= $this-> pdo -> prepare('INSERT INTO `kolejka` (`idSezon`, `statusKolejki`)
                               VALUES(:idSezon, :statusKolejki)');
            $stmt -> bindValue(':idSezon', 1, PDO::PARAM_STR);
            $stmt -> bindValue(':statusKolejki', 1, PDO::PARAM_STR);
            $result = $stmt->execute();
            $stmt->closeCursor();
            return $result;
        }
        catch(\PDOException $e){
            echo 'Database connection error!'.$e->getMessage();
            exit(1);
        } 
*/
    }
    // na arzie nie uzywane
    public function changeStatus($id ,$status)
    {

        $stmt = $this->pdo->prepare('UPDATE kolejka SET status=:status  WHERE idKolejka=:id');
        $stmt->bindValue(':status', $status, PDO::PARAM_INT);
        $stmt->bindValue(':id', $id, PDO::PARAM_INT);
        $stmt->execute();


    }
    public function checkStatus($id)
    {
        try
        {
            $stmt = $this->pdo->prepare('SELECT * FROM kolejka WHERE idKolejka=:id');
            $stmt->bindValue(':id', $id, PDO::PARAM_INT);
            $stmt->execute();
            $result = $stmt->fetch();
            $stmt->closeCursor();
            return $result['status'];

        }
        catch(\PDOException $e)
        {
            echo 'Polaczenie z baza nie powidolo sie: ' . $e->getMessage();
        }

    }

}
/*
    public function getAll()
    {
        $data = array();
        try{
            $stmt = $this->pdo->query('SELECT * FROM `kolejka`');
            $data = $stmt->fetchAll();
            $stmt->closeCursor();
        }
        catch(\PDOException $e){
            echo 'Database connection error';
            exit(1);
        }
        return $data;
    }

    public function getAll3()
    {
        $data = array();
        try
        {
            $stmt = $this->pdo->query('SELECT * FROM `kolejka`');

            foreach ($stmt as $row) {
                $data[$row['idKolejka']]=$row['idSezon']." ".$row['statusKolejki'];
            }
            $stmt->closeCursor();

        }
        catch(\PDOException $e)
        {
            echo 'Database connection error!';
            exit(1);
        }
        return $data;
    }

*/