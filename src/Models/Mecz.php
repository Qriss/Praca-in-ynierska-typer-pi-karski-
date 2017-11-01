<?php


namespace Models;
use \PDO;

class Mecz extends  Model
{
    public function getAll3($id)
    {
        $result = array();

        try{
            $stmt = $this->pdo->prepare('SELECT * FROM mecz WHERE idKolejka=:idKolejka ORDER BY dataMeczu ASC, godzinaRozpoczecia ASC');
            $stmt->bindValue(':idKolejka', $id, PDO::PARAM_INT);
            $stmt->execute();
            while($row = $stmt->fetch())
            {
                $tmp = explode(":", $row['godzinaRozpoczecia']);
                $timestamp = mktime($tmp[0], $tmp[1], $tmp[2]);

                $result[$row['idMecz']] = array(
                'idMecz' => $row['idMecz'],
                'dataMeczu' => $row['dataMeczu'],
                'godzinaRozpoczecia' => date("G:i", $timestamp),
                'gospodarzNazwa' => $row['gospodarzNazwa'],
                'goscNazwa' => $row['goscNazwa'],
                'league' => $row['league'],
                'golGospodarz' => $row['golGospodarz'],
                'golGosc' => $row['golGosc'],
                'idKolejka' => $row['idKolejka']
                );
            }
            $stmt->closeCursor();



        }
        catch(\PDOException $e) {
            $error =$this->pdo->errorInfo();
            echo "błąd: ".$error[2];
            echo 'Database connection error! sratata';
            exit(1);
        }


        return $result;

    }



    public function getAll($id)
    {

    try{
        $stmt = $this->pdo->prepare('SELECT * FROM mecz WHERE idKolejka=:idKolejka ORDER BY dataMeczu ASC, godzinaRozpoczecia ASC');
        $stmt->bindValue(':idKolejka', $id, PDO::PARAM_INT);
        $stmt->execute();
        $result = $stmt->fetchAll();
        $stmt->closeCursor();



    }
    catch(\PDOException $e) {
        $error =$this->pdo->errorInfo();
        echo "błąd: ".$error[2];
        echo 'Database connection error! sratata';
        exit(1);
    }


    return $result;

    }


    /*
    public function getAll()
    {
        try{
            $data = array();
            $stmt = $this->pdo->query('SELECT * FROM mecz T1
                                            INNER JOIN kolejka T2 ON T1.idKolejka = T2.idKolejka');
// tu poprawic jesli jakies dane beda potrzebne
            while($row = $stmt ->fetch())
            {
                $data[$row[0]][$row['idMecz']]=array(
                    'gospodarz' => $row['gospodarz'],
                    'gosc' => $row['gosc'],
                    'golGospodarz' => $row['golGospodarz'],
                    'golGosc' => $row['golGosc'],
                    'dataMeczu' => $row['dataMeczu'],
                    'godzinaRozpoczecia' => $row['godzinaRozpoczecia']
                    //  'idUzytkownik' => $row['nazwisko'],
                    // 'IdMecz' => $row['rasanazwa']
                );
            }
            $stmt->columnCount();
            return $data;
        }
        catch(\PDOException $e){
            echo 'Database connection error!'.$e->getMEssage();
            exit(1);
        }
    }*/


    public function getAll2()
    {


        try{
            $stmt = $this->pdo->query('SELECT * FROM druzyna');
            $data = $stmt->fetchAll();
            $stmt->closeCursor();
        }
        catch(\PDOException $e){
            echo 'Database connection error';
            exit(1);
        }
        return $data;
    }

   
    public function getOne($id)
    {

        try{
            $stmt = $this->pdo->prepare('SELECT * FROM mecz WHERE idMecz=:idMecz');
            $stmt->bindValue(':idMecz', $id, PDO::PARAM_INT);
            $stmt->execute();
            $result = $stmt->fetch();
            $stmt->closeCursor();
           
        }
        catch(\PDOException $e) {
            echo 'Database connection error! sratata';
            exit(1);
        }
        return $result;
    }

    public function getOne2($id)
    {

        try{
            $stmt = $this->pdo->prepare('SELECT * FROM `mecz` WHERE `idMecz`=:idMecz');
            $stmt->bindValue(':idMecz', $id, PDO::PARAM_INT);
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
            $query = $this->pdo->prepare('DELETE FROM `mecz` WHERE `idKolejki`=:id');
            $query->bindValue(':id', $id, PDO::PARAM_INT);
            $query->execute();
            $query->closeCursor();
        }
        catch(\PDOException $e)
        {
            echo 'Polaczenie z baza nie powidolo sie: ' . $e->getMessage();
        }
    }

    public function deleteMecz($id){
        try
        {
            $query = $this->pdo->prepare('DELETE FROM `mecz` WHERE `idMecz`=:id');
            $query->bindValue(':id', $id, PDO::PARAM_INT);
            $query->execute();
            $query->closeCursor();
        }
        catch(\PDOException $e)
        {
            echo 'Polaczenie z baza nie powidolo sie: ' . $e->getMessage();
        }
    }


    public function insert($data, $time, $gospodarz, $gosc, $league, $idKolejka)
    {

        try{
            $stmt= $this-> pdo -> prepare('INSERT INTO `mecz` (`dataMeczu`, `godzinaRozpoczecia`, `gospodarzNazwa`, `goscNazwa`, `league`, `idKolejka`)
                               VALUES(:dataM, :timeM, :gospodarz, :gosc, :league, :idKolejka)');
            $stmt -> bindValue(':dataM', $data, PDO::PARAM_STR);
            $stmt -> bindValue(':timeM', $time, PDO::PARAM_STR);
            $stmt -> bindValue(':gospodarz', $gospodarz, PDO::PARAM_STR);
            $stmt -> bindValue(':gosc', $gosc, PDO::PARAM_STR);
            $stmt -> bindValue(':league', $league, PDO::PARAM_STR);
            $stmt -> bindValue(':idKolejka', $idKolejka, PDO::PARAM_INT);
            $result = $stmt->execute();
            $stmt->closeCursor();
            return $result;
        }
        catch(\PDOException $e){
            echo 'Database connection error!'.$e->getMessage();
            exit(1);
        }
    }


    public function insertResult($idMecz, $golGospodarz, $golGosc)
    {
        
        try{
            $stmt= $this-> pdo -> prepare('UPDATE mecz SET golGospodarz=:golGospodarz, golGosc=:golGosc  WHERE idMecz=:id');
            $stmt -> bindValue(':golGospodarz', $golGospodarz, PDO::PARAM_INT);
            $stmt -> bindValue(':golGosc', $golGosc, PDO::PARAM_INT);
            $stmt -> bindValue(':id', $idMecz, PDO::PARAM_INT);
            $result = $stmt->execute();
            $stmt->closeCursor();
            return $result;
        }
        catch(\PDOException $e){
            echo 'Database connection error!'.$e->getMessage();
            exit(1);
        }
    }

    public function insertPoints($idMecz, $golGospodarz, $golGosc)
    {

        try{
        $stmt = $this->pdo->prepare('SELECT * FROM typNaMecz WHERE idMecz=:idMecz ');
        $stmt->bindValue(':idMecz', $idMecz, PDO::PARAM_INT);
        $stmt->execute();
        $result = $stmt->fetchAll();
        $stmt->closeCursor();

        foreach ($result as $key)
        {
            $punkt = 0;
            if($key['typGospodarz'] == $golGospodarz && $key['typGosc'] == $golGosc)
            {
                $punkt = 20;
            }
            elseif ($key['typGospodarz'] > $key['typGosc'] && $golGospodarz > $golGosc)
            {
                $punkt = 10;
            }
            elseif ($key['typGospodarz'] < $key['typGosc'] && $golGospodarz < $golGosc)
            {
                $punkt = 5;
            }
            elseif ($key['typGospodarz'] == $key['typGosc'] && $golGospodarz == $golGosc)
            {
                $punkt = 5;
            }
            else
            {
                $punkt = -1;
            }

            $stmt = $this->pdo->prepare('UPDATE typNaMecz SET Punkty=:punkty WHERE idTyp=:idTyp');
            $stmt -> bindValue(':punkty', $punkt, PDO::PARAM_INT);
            $stmt -> bindValue(':idTyp', $key['idTyp'], PDO::PARAM_INT);
            $stmt->execute();

        }


        }
        catch(\PDOException $e){
            echo 'Database connection error!'.$e->getMessage();
            exit(1);
        }
    }

    public function updateKlasyfikacja($allMecz)
    {

        try{
        
        $stmt = $this->pdo->query('SELECT * FROM uzytkownik');
        $allUser = $stmt->fetchAll();
        $stmt->closeCursor();



        
        foreach ($allUser as $keyUser) {
                $punkty = 0;
            foreach ($allMecz as $keyMecz) {
                
                $stmt = $this->pdo->prepare('SELECT Punkty FROM typNaMecz WHERE idUser=:idUser AND idMecz=:idMecz');
                $stmt -> bindValue(':idUser', $keyUser['idUser'], PDO::PARAM_INT);
                $stmt -> bindValue(':idMecz', $keyMecz['idMecz'], PDO::PARAM_INT);
                $stmt->execute();
                $tmp = $stmt->fetch();
                $stmt->closeCursor();
                if(!empty($tmp)) {
                    $punkty = $punkty + $tmp['Punkty'];
                }

            }
          
            $stmt = $this->pdo->prepare('SELECT Punkty FROM pozycja WHERE idKlasyfikacja=:idKlasyfikacja AND idUser=:idUser');
            $stmt -> bindValue(':idKlasyfikacja', 3, PDO::PARAM_INT);
            $stmt -> bindValue(':idUser', $keyUser['idUser'], PDO::PARAM_INT);
            $stmt->execute();
            $oldPunkty = $stmt->fetch();
            $stmt->closeCursor();

            $punkty = $punkty + $oldPunkty['Punkty'];
          
            $stmt = $this->pdo->prepare('UPDATE pozycja SET Punkty=:punkty WHERE idUser=:idUser AND idKlasyfikacja=:idKlasyfikacja ');
            $stmt -> bindValue(':punkty', $punkty, PDO::PARAM_INT);
            $stmt -> bindValue(':idUser', $keyUser['idUser'], PDO::PARAM_INT);
            $stmt -> bindValue(':idKlasyfikacja', 3, PDO::PARAM_INT);
            $stmt->execute();
            $stmt->closeCursor();
        }
        }
        catch(\PDOException $e){
            echo 'Database connection error!'.$e->getMessage();
            exit(1);
        }

    }

    public function update($data, $time, $gospodarz, $gosc, $league, $idMecz)
    {
        try{
        $stmt = $this->pdo->prepare('UPDATE mecz SET dataMeczu=:dataM, godzinaRozpoczecia=:timeM, gospodarzNazwa=:gospodarz, goscNazwa=:gosc, league=:league  WHERE idMecz=:id');
        $stmt -> bindValue(':dataM', $data, PDO::PARAM_STR);
        $stmt -> bindValue(':timeM', $time, PDO::PARAM_STR);
        $stmt -> bindValue(':gospodarz', $gospodarz, PDO::PARAM_STR);
        $stmt -> bindValue(':gosc', $gosc, PDO::PARAM_STR);
        $stmt -> bindValue(':league', $league, PDO::PARAM_STR);
        $stmt -> bindValue(':id', $idMecz, PDO::PARAM_INT);
        $stmt->execute();
        }
        catch(\PDOException $e){
            echo 'Database connection error!'.$e->getMessage();
            exit(1);
        }

    }

    public function getAllTeam()
    {
        try{
            $stmt = $this->pdo->query('SELECT * FROM team');
            $data = $stmt->fetchAll();
            $stmt->closeCursor();
        }
        catch(\PDOException $e){
            echo 'Database connection error';
            exit(1);
        }
        return $data;
    }

    public function getAllLeague()
    {
        try{
            $stmt = $this->pdo->query('SELECT * FROM league');
            $data = $stmt->fetchAll();
            $stmt->closeCursor();
        }
        catch(\PDOException $e){
            echo 'Database connection error';
            exit(1);
        }
        return $data;
    }



    public function getTime()
    {
        try{
            $stmt = $this->pdo->prepare('SELECT * FROM `test` WHERE `idKey`=:id');
            $stmt->bindValue(':id', 1, PDO::PARAM_INT);
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


}