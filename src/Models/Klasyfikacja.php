<?php
namespace Models;
use \PDO;

class Klasyfikacja extends  Model
{
    public function getAll()
    {

        try {
                
                $stmt = $this->pdo->prepare('SELECT klasyfikacja.idKlasyfikacja, sezon.nazwaSezonu 
                                         FROM klasyfikacja
                                         INNER JOIN sezon ON sezon.idSezon = klasyfikacja.idSezon
                                         WHERE sezon.status=:status');
                $stmt->bindValue(':status', 1, PDO::PARAM_INT);
                $stmt->execute();
                $klasyfikacja = $stmt->fetch();
                $stmt->closeCursor();

                //pobranie pozycji klasyfikacji
                $stmt = $this->pdo->prepare('SELECT pozycja.Punkty, pozycja.Miejsce, uzytkownik.login 
                                            FROM pozycja 
                                            INNER  JOIN uzytkownik ON uzytkownik.idUser = pozycja.idUser
                                            WHERE idKlasyfikacja=:id ORDER BY pozycja.Miejsce ASC');
                $stmt->bindValue(':id', $klasyfikacja['idKlasyfikacja'], PDO::PARAM_INT);
                $stmt->execute();
                $pozycje = $stmt->fetchAll();
                $stmt->closeCursor();

            return $pozycje;



        }
        catch(\PDOException $e){
            $error =$this->pdo->errorInfo();
            echo "błąd: ".$error[2];
            echo 'Database connection error';
            exit(1);
        }

    }

    public function sortPozycja()
    {
        try {
            /*
            $stmt = $this->pdo->prepare('SELECT COUNT(*) FROM pozycja');
            $stmt->execute();
            $tmp = $stmt->fetchColumn();
            $stmt->closeCursor();
*/
            $stmt = $this->pdo->prepare('SELECT * FROM pozycja ORDER BY Punkty DESC ');
            $stmt->execute();
            $pozycja = $stmt->fetchAll();
            $stmt->closeCursor();

            $tmp = 1;
            foreach ($pozycja as $key)
            {
                $stmt = $this->pdo->prepare('UPDATE pozycja SET Miejsce=:miejsce WHERE idPozycja=:id');
                $stmt -> bindValue(':miejsce', $tmp, PDO::PARAM_INT);
                $stmt -> bindValue(':id', $key['idPozycja'], PDO::PARAM_INT);
                $stmt->execute();
                $stmt->closeCursor();
                $tmp++;
            }
        }
        catch(\PDOException $e){
            $error =$this->pdo->errorInfo();
            echo "błąd: ".$error[2];
            echo 'Database connection error';
            exit(1);
        }
        

    }

}