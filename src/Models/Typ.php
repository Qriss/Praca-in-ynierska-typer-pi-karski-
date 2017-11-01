<?php
/**
 * Created by PhpStorm.
 * User: Krzysiek
 * Date: 2016-12-01
 * Time: 22:23
 */

namespace Models;
use \PDO;

class Typ extends Model
{



    public function getAll($id)
    {
        $data = array();
        try {

            $stmt = $this->pdo->prepare('SELECT * FROM mecz WHERE idKolejka=:idKolejka ORDER BY dataMeczu ASC, godzinaRozpoczecia ASC');
            $stmt->bindValue(':idKolejka', $id, PDO::PARAM_INT);
            $stmt->execute();

            while ($row = $stmt->fetch()) {

                $stmt1 = $this->pdo->prepare('SELECT * FROM typNaMecz WHERE idUser=:idUser AND idMecz=:idMecz');
                $stmt1->bindValue(':idUser', \Tools\Session::get('user'), PDO::PARAM_INT);
                $stmt1->bindValue(':idMecz', $row['idMecz'], PDO::PARAM_INT);
                $stmt1->execute();
                $result = $stmt1->fetch();
                $stmt1->closeCursor();
                $tmp = explode(":", $row['godzinaRozpoczecia']);
                $timestamp = mktime($tmp[0], $tmp[1], $tmp[2]);


                if (!empty($result)) {

                    $typGospodarz = $result['typGospodarz'];
                    $typGosc = $result['typGosc'];
                    $punkty = $result['Punkty'];


                } else {

                    $typGospodarz = "";
                    $typGosc = "";
                    $punkty = "";

                }


                $data[$row['idMecz']] = array(
                    'idMecz' => $row['idMecz'],
                    'dataMeczu' => $row['dataMeczu'],
                    'godzinaRozpoczecia' => date("G:i", $timestamp),
                    'gospodarzNazwa' => $row['gospodarzNazwa'],
                    'goscNazwa' => $row['goscNazwa'],
                    'league' => $row['league'],
                    'golGospodarz' => $row['golGospodarz'],
                    'golGosc' => $row['golGosc'],
                    'idKolejka' => $row['idKolejka'],
                    'typGospodarz' => $typGospodarz,
                    'typGosc' => $typGosc,
                    'punkty' => $punkty
                );

            }

            $stmt->closeCursor();
        }
        catch(\PDOException $e){
            $error =$this->pdo->errorInfo();
            echo "błąd: ".$error[2].\Tools\Session::get('user');
            echo 'Database connection error!'.$e->getMEssage();
            exit(1);
        }

        return $data;
    }

    
    public function getOne($id)
    {
        try {
            $stmt = $this->pdo->prepare('SELECT * FROM typnamecz T1
                                            INNER JOIN uzytkownik T2 ON T1.idUzytkownik = T2.idUzytwkownik
                                            INNER JOIN mecz T3 ON T1.idMecz = T3.idMecz
                                            WHERE T1.idTyp = :typek
                                            ');
            $stmt->bindValue(':typek', $id, PDO::PARAM_INT);
            $stmt->execute();
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
            $stmt->closeCursor();
            if ($result !== false && !empty($result)) {
                return $result;
            }
            else return null;
        }
        catch(\PDOException $e){
            echo 'Database connection error!'.$e->getMEssage();
            exit(1);
        }
    }


    public function delete($id){
        try
        {
            $query = $this->pdo->prepare('DELETE FROM `typnamecz` WHERE `idTyp`=:id');
            $query->bindValue(':idTyp', $id, PDO::PARAM_INT);
            $query->execute();
            $query->closeCursor();
        }
        catch(\PDOException $e)
        {
            echo 'Polaczenie z baza nie powidolo sie: ' . $e->getMessage();
        }
    }

    public function insert($idMecz, $typGospodarz, $typGosc)
    {


        try{
            $stmt= $this-> pdo -> prepare('INSERT INTO `typNaMecz` (`typGospodarz`, `typGosc`, `Punkty`, `idUser`, `idMecz`)
                               VALUES(:typGospodarz, :typGosc, :punkty, :idUser, :idMecz)');
            $stmt -> bindValue(':typGospodarz', $typGospodarz, PDO::PARAM_INT);
            $stmt -> bindValue(':typGosc', $typGosc, PDO::PARAM_INT);
            $stmt -> bindValue(':punkty', 0, PDO::PARAM_INT);
            $stmt -> bindValue(':idUser', \Tools\Session::get('user'), PDO::PARAM_INT);
            $stmt -> bindValue(':idMecz', $idMecz, PDO::PARAM_INT);
            $stmt->execute();
            $stmt->closeCursor();
        }
        catch(\PDOException $e){
            echo 'Database connection error!'.$e->getMessage();
            exit(1);
        }
    }

    public function insertResult($idMecz, $typGospodarz, $typGosc)
    {

        try{
      
        $stmt = $this->pdo->prepare('SELECT * FROM typNaMecz WHERE idMecz=:idMecz AND idUser=:idUser');
        $stmt -> bindValue(':idMecz', $idMecz, PDO::PARAM_INT);
        $stmt -> bindValue(':idUser', \Tools\Session::get('user'), PDO::PARAM_INT);
        $stmt->execute();
        $result =  $stmt->fetch();
        $stmt->closeCursor();

        if (!empty($result))
        {
            $this->update($idMecz, $typGospodarz, $typGosc);
        }
        else
        {
            $this->insert($idMecz, $typGospodarz, $typGosc);
        }
        }
        catch(\PDOException $e){
            echo 'Database connection error!'.$e->getMessage();
            exit(1);
        }

    }

    public function update($idMecz, $typGospodarz, $typGosc)
    {
        try{
            $stmt = $this->pdo->prepare('UPDATE typNaMecz SET typGospodarz=:typGospodarz, typGosc=:typGosc WHERE idMecz=:idMecz AND idUser=:idUser');
            $stmt -> bindValue(':typGospodarz', $typGospodarz, PDO::PARAM_INT);
            $stmt -> bindValue(':typGosc', $typGosc, PDO::PARAM_INT);
            $stmt -> bindValue(':idMecz', $idMecz, PDO::PARAM_INT);
            $stmt -> bindValue(':idUser', \Tools\Session::get('user'), PDO::PARAM_INT);
            $stmt->execute();
        }
        catch(\PDOException $e){
            echo 'Database connection error!'.$e->getMessage();
            exit(1);
        }
    }


}