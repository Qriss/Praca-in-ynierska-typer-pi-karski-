<?php
/**
 * Created by PhpStorm.
 * User: Krzysiek
 * Date: 2016-12-01
 * Time: 21:13
 */

namespace Models;
use \PDO;

class Uzytkownik extends Model
{
    
    public function getAll()
    {

        try{
            $stmt = $this->pdo->query('SELECT * FROM uzytkownik');
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
            $stmt = $this->pdo->prepare('SELECT * FROM uzytkownik WHERE idUser=:idUzytkownik');
            $stmt->bindValue(':idUzytkownik', $id, PDO::PARAM_INT);
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
            $query = $this->pdo->prepare('DELETE FROM `uzytkownik` WHERE `idUzytkownik`=:id');
            $query->bindValue(':idUzytkownik', $id, PDO::PARAM_INT);
            $query->execute();
            $query->closeCursor();
        }
        catch(\PDOException $e)
        {
            echo 'Polaczenie z baza nie powidolo sie: ' . $e->getMessage();
        }
    }

   
    public function insert($login, $haslo, $haslo2, $email)
    {
        if(\Tools\Session::get('user') !== false && !empty(\Tools\Session::get('user')))
        {
           return $this->update($login, $haslo, $haslo2, $email);
        }
        try{
            $stmt = $this->pdo->prepare('SELECT * FROM uzytkownik
                                         WHERE login=:login');
            $stmt->bindValue(':login', $login, PDO::PARAM_STR);
            $stmt->execute();
            $result = $stmt->fetchAll();
            $stmt->closeCursor();


            $stmt = $this->pdo->prepare('SELECT * FROM uzytkownik
                                         WHERE email=:email;');
            $stmt->bindValue(':email', $email, PDO::PARAM_STR);
            $stmt->execute();
            $result2 = $stmt->fetchAll();
            $stmt->closeCursor();
            
        }
        catch(\PDOException $e) {
            
            return 'SERVER_ERROR';
        }



        if(!empty($result))
        {
            return 'USER_NAME_ALREADY_EXIST';
        }
        else if(!empty($result2))
        {
            return 'EMAIL_NAME_ALREADY_EXIST';
        }
        else if($haslo != $haslo2) {
            return 'INVALID_PASS';
        }
        else {
            $haslo = crypt($haslo);
            try {
                
                $stmt = $this->pdo->prepare('INSERT INTO `uzytkownik` (`login`, `haslo`, `email`)
                               VALUES(:login, :haslo, :email)');
                $stmt->bindValue(':login', $login, PDO::PARAM_STR);
                $stmt->bindValue(':haslo', $haslo, PDO::PARAM_STR);
                $stmt->bindValue(':email', $email, PDO::PARAM_STR);
                $stmt->execute();
                $stmt->closeCursor();
             
                $stmt = $this->pdo->prepare('SELECT * FROM uzytkownik
                                         WHERE login=:login');
                $stmt->bindValue(':login', $login, PDO::PARAM_STR);
                $stmt->execute();
                $result2 = $stmt->fetch();
                $stmt->closeCursor();
                
                $stmt = $this->pdo->prepare('INSERT INTO `accessUser` (`idUser`, `idAccess`)
                               VALUES(:idUser, :idAccess)');
                $stmt->bindValue(':idUser', $result2[0], PDO::PARAM_INT);
                $stmt->bindValue(':idAccess', 1, PDO::PARAM_INT);
                $stmt->execute();
                $stmt->closeCursor();
             
                $stmt = $this->pdo->prepare('SELECT idSezon FROM sezon WHERE status=:status');
                $stmt -> bindValue(':status', 1, PDO::PARAM_INT);
                $stmt->execute();
                $idSezon =  $stmt->fetch();
                $stmt->closeCursor();
               
                $stmt = $this->pdo->prepare('SELECT idKlasyfikacja FROM klasyfikacja WHERE idSezon=:idSezon');
                $stmt -> bindValue(':idSezon', $idSezon[0], PDO::PARAM_INT);
                $stmt->execute();
                $idKlasyfikacja =  $stmt->fetch();
                $stmt->closeCursor();
             
                $stmt = $this->pdo->prepare('SELECT COUNT(idPozycja) FROM pozycja');
                $stmt->execute();
                $numerPozycji = $stmt->fetchColumn();
                $stmt->closeCursor();
                $numerPozycji++;
                
                $stmt= $this-> pdo -> prepare('INSERT INTO `pozycja` (`Punkty`, `Miejsce`, `idUser`, `idKlasyfikacja`)
                               VALUES(:Punkty, :Miejsce, :idUser, :idKlasyfikacja)');
                $stmt -> bindValue(':Punkty', 0, PDO::PARAM_INT);
                $stmt -> bindValue(':Miejsce', $numerPozycji, PDO::PARAM_INT);
                $stmt -> bindValue(':idUser', $result2[0], PDO::PARAM_INT);
                $stmt -> bindValue(':idKlasyfikacja', $idKlasyfikacja[0], PDO::PARAM_INT);
                $stmt->execute();
                $stmt->closeCursor();
                return 0;
            } catch (\PDOException $e) {
                echo 'Database connection error!' . $e->getMessage();
                exit(1);
            }
        }
    }

    private function  update($login, $haslo, $haslo2, $email)
    {

      $oldLogin = $this->getOne(\Tools\Session::get('user'));
        if($login != $oldLogin[1])
        {
            try{
                $stmt = $this->pdo->prepare('SELECT * FROM uzytkownik
                                         WHERE login=:login');
                $stmt->bindValue(':login', $login, PDO::PARAM_STR);
                $stmt->execute();
                $result = $stmt->rowCount();
                $stmt->closeCursor();
            }
            catch(\PDOException $e) {
             
                return 'SERVER_ERROR';
            }
            if($result > 0)
            {
                return 'USER_NAME_ALREADY_EXIST';
            }

        }

        if($haslo != $haslo2) {
            return 'INVALID_PASS';
        }
        else
        {
            $haslo = crypt($haslo);
            $this->pdo->query("UPDATE `uzytkownik` SET `login`='$login', `haslo`='$haslo', `email`='$email' WHERE idUser='$oldLogin[0]' ");
             return 0;
        }


    }

    public function test($email)
    {
        try{
        $stmt = $this->pdo->prepare('SELECT * FROM uzytkownik
                                         WHERE email=:email');
        $stmt->bindValue(':email', $email, PDO::PARAM_STR);
        $stmt->execute();
        $result = $stmt->rowCount();
        $stmt->closeCursor();

            return $result;
        }
        catch(\PDOException $e) {
          
            return 'SERVER_ERROR';
        }
    }

    public function test2()
    {   $result = array();
        $result[0]=sha1("haslo");
        $result[1]=sha1("dfdf");
        return $result;
    }

}