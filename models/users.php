<?php
 class users {
   public $id_users;
   public $pseudo;
   public $email;
   public $pass;
   public $date_inscription;
   private $pdo;

   private function connectDB(){
     try{
       $this->pdo = new PDO('mysql:host=localhost;dbname=parky;charset=utf8', 'root', 'Ch@456129@');
     } catch (PDOException $ex){
       die($ex->getMessage());
     }
   }
/**
 *
 * @param int $id_users
 * @param string $pseudo
 * @param string $email
 * @param type $pass
 * @param type $date_inscription
 */
   public function __construct($id_users = null, $pseudo = '', $email = '', $pass = '', $date_inscription = '1900-01-01'){
     $this->id = $id_users;
     $this->pseudo = $pseudo;
     $this->email = $email;
     $this->pass = $pass;
     $this->date_inscription = $date_inscription;
     $this->connectDB();
   }
/**
 * Fonction qui perrmet de s'inscrire
 * @return boolean
 */
   public function signUp(){
     $req = $this->pdo->prepare('INSERT INTO users(pseudo, pass, email, date_inscription) VALUES(:pseudo, :pass, :email, CURDATE())');
     $req->bindValue(':pseudo', $this->pseudo, PDO::PARAM_STR);
     $req->bindValue(':email', $this->email, PDO::PARAM_STR);
     $req->bindValue(':pass', $this->pass, PDO::PARAM_STR);
     $req->execute();
     return $info = $req->fetch(PDO::FETCH_OBJ);
   }
   /**
    * Fonction qui permet de se connecter
    * @return Objet
    */
   public function loginIn(){
      $req = $this->pdo->prepare('SELECT id_users, email FROM users WHERE pseudo = :pseudo AND pass = :pass');
      $req->bindValue(':pseudo', $this->pseudo, PDO::PARAM_STR);
      $req->bindValue(':pass', $this->pass, PDO::PARAM_STR);
      $req->execute();
      return $userinfo = $req->fetch(PDO::FETCH_OBJ);
   }

   public function countUserByPseudo(){
       $select = 'SELECT COUNT(pseudo) AS exists FROM users WHERE pseudo = :pseudo';
       $queryPrepare = $this->pdo->prepare($select);
       $queryPrepare->bindValue(':pseudo', $this->pseudo, PDO::PARAM_STR);
       $queryPrepare->execute();
       $result = $req->fetch(PDO::FETCH_OBJ);
       return result;
   }

   public function countUserByMail(){
       $select = 'SELECT COUNT(email) AS exists FROM users WHERE email = :email';
       $queryPrepare = $this->pdo->prepare($select);
       $queryPrepare->bindValue(':email', $this->email, PDO::PARAM_STR);
       $queryPrepare->execute();
       $result = $req->fetch(PDO::FETCH_OBJ);
       return result;
   }
       public function updateUser() {
        $query = 'UPDATE `users` SET `pseudo` = :pseudo, `email` = :email, `pass` = :pass WHERE `id` = :id';
        $updateUser = $this->pdo->prepare($query);
        $updateUser->bindValue(':pseudo', $this->pseudo, PDO::PARAM_STR);
        $updateUser->bindValue(':email', $this->email, PDO::PARAM_STR);
        $updateUser->bindValue(':pass', $this->pass, PDO::PARAM_STR);
        $updateUser->bindValue(':id', $this->id, PDO::PARAM_INT);
        return $updateUser->execute();
    }
 }
