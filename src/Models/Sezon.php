<?php


namespace Models;
use \PDO;

class Sezon extends Model
{



    public function getAll()
    {
        $data = array();
        try {
            $stmt = $this->pdo->query('SELECT * FROM `sezon`');


            while ($row = $stmt->fetch()) {
                $stmt1 = $this->pdo->prepare('SELECT count(*) as ile FROM `kolejka` WHERE `idSezon`=:idSezon');
                $stmt1->bindValue(':idSezon', $row['idSezon'], PDO::PARAM_INT);
                $stmt1->execute();
                $result = $stmt1->fetch();
                $stmt1->closeCursor();

                $data[$row['idSezon']]=array(
                    'idSezon' => $row['idSezon'],
                    'dataRozpoczecia' => $row['dataRozpoczecia'],
                    'dataZakonczenia' => $row['dataZakoncznia'],
                    'nazwaSezonu' => $row['nazwaSezonu'],
                    'status' => $row['status'],
                    'ile' => $result['ile']
                );




            }
            //$stmt->columnCount();
            $stmt->closeCursor();
            return $data;
        }
        catch(\PDOException $e){
            echo 'Database connection error 1111';
            exit(1);
        }

    }

   
    public function getOne($id)
    {
        try{
            $stmt = $this->pdo->prepare('SELECT * FROM `sezon` WHERE `idSezon`=:idSezon');
            $stmt->bindValue(':idSezon', $id, PDO::PARAM_INT);
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
            $query = $this->pdo->prepare('DELETE FROM `sezon` WHERE `idSezon`=:id');
            $query->bindValue(':id', $id, PDO::PARAM_INT);
            $query->execute();
            $query->closeCursor();
        }
        catch(\PDOException $e)
        {
            echo 'Polaczenie z baza nie powidolo sie: ' . $e->getMessage();
        }
    }

    
    public function insert($nazwa, $dataRozpoczecia, $dataZakonczenia)
    {

        try{
            $stmt= $this-> pdo -> prepare('INSERT INTO `sezon` (`dataRozpoczecia`, `dataZakoncznia`, `nazwaSezonu`, `status`)
                               VALUES(:dataRozpoczecia, :dataZakonczenia, :nazwaSezonu, :status)');
            $stmt -> bindValue(':dataRozpoczecia', $dataRozpoczecia, PDO::PARAM_STR);
            $stmt -> bindValue(':dataZakonczenia', $dataZakonczenia, PDO::PARAM_STR);
            $stmt -> bindValue(':nazwaSezonu', $nazwa, PDO::PARAM_STR);
            $stmt -> bindValue(':status', 1, PDO::PARAM_INT);
            $stmt->execute();
            $stmt->closeCursor();
            $this->createKlasyfikacja();

        }
        catch(\PDOException $e){
            echo 'Database connection error!'.$e->getMessage();
            exit(1);
        }
    }

    public function createKlasyfikacja()
    {
        try{
        
        $stmt = $this->pdo->prepare('SELECT idSezon FROM sezon WHERE status=:status');
        $stmt -> bindValue(':status', 1, PDO::PARAM_INT);
        $stmt->execute();
        $idSezon =  $stmt->fetch();
        $stmt->closeCursor();

            $stmt= $this-> pdo -> prepare('INSERT INTO `klasyfikacja` (`idSezon`)
                               VALUES(:idSezon)');
            $stmt -> bindValue(':idSezon', $idSezon[0], PDO::PARAM_INT);
            $stmt->execute();
            $stmt->closeCursor();

            $stmt = $this->pdo->prepare('SELECT idKlasyfikacja FROM klasyfikacja WHERE idSezon=:idSezon');
            $stmt -> bindValue(':idSezon', $idSezon[0], PDO::PARAM_INT);
            $stmt->execute();
            $idKlasyfikacja =  $stmt->fetch();
            $stmt->closeCursor();

        
            $stmt = $this->pdo->query('SELECT * FROM uzytkownik');
            $allUser = $stmt->fetchAll();
            $stmt->closeCursor();

          
            $tmp = 1;
            foreach ($allUser as $key)
            {
                $stmt= $this-> pdo -> prepare('INSERT INTO `pozycja` (`Punkty`, `Miejsce`, `idUser`, `idKlasyfikacja`)
                               VALUES(:Punkty, :Miejsce, :idUser, :idKlasyfikacja)');
                $stmt -> bindValue(':Punkty', 0, PDO::PARAM_INT);
                $stmt -> bindValue(':Miejsce', $tmp, PDO::PARAM_INT);
                $stmt -> bindValue(':idUser', $key['idUser'], PDO::PARAM_INT);
                $stmt -> bindValue(':idKlasyfikacja', $idKlasyfikacja[0], PDO::PARAM_INT);
                $stmt->execute();
                $stmt->closeCursor();
                $tmp++;

            }
        }
        catch(\PDOException $e){
            echo 'Database connection error!'.$e->getMessage();
            exit(1);
        }
        
        

    }


    public function update($idSezon, $nazwa, $dataRozpoczecia, $dataZakonczenia)
    {
        try{
            $stmt = $this->pdo->prepare('UPDATE sezon SET dataRozpoczecia=:dataR, dataZakoncznia=:dataZ, nazwaSezonu=:nazwa WHERE idSezon=:id');
            $stmt -> bindValue(':dataR', $dataRozpoczecia, PDO::PARAM_STR);
            $stmt -> bindValue(':dataZ', $dataZakonczenia, PDO::PARAM_STR);
            $stmt -> bindValue(':nazwa', $nazwa, PDO::PARAM_STR);
            $stmt -> bindValue(':id', $idSezon, PDO::PARAM_INT);
            $stmt->execute();
        }
        catch(\PDOException $e){
            echo 'Database connection error!'.$e->getMessage();
            exit(1);
        }

    }

 
    public function check()
    {
        $stmt = $this->pdo->prepare('SELECT idSezon FROM sezon WHERE status=:status');
        $stmt -> bindValue(':status', 1, PDO::PARAM_INT);
        $stmt->execute();
        $result = $stmt->fetch();
        $stmt->closeCursor();
        if($result===false){
            return 0;
        }
        else return 1;
    }
 
    public function checkSezon($id)
    {
        $stmt = $this->pdo->prepare('SELECT status FROM sezon WHERE idSezon=:id');
        $stmt -> bindValue(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
        $result = $stmt->fetch();
        $stmt->closeCursor();
        if($result['status'] == 0){
            return 0;
        }
        else return 1;
    }
    
}