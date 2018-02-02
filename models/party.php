<?php

class parties {

    public $idparties;
    public $name;
    public $description;
    public $type;
    public $idusers;
    private $pdo;

    private function connectDB() {
        try {
            $this->pdo = new PDO('mysql:host=localhost;dbname=parky;charset=utf8', 'root', 'Ch@456129@');
        } catch (PDOException $ex) {
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
    public function __construct($idparties = null, $name = '', $description = '', $type = '', $idusers = null) {
        $this->id = $idparties;
        $this->name = $name;
        $this->description = $description;
        $this->type = $type;
        $this->idusers = $idusers;
        $this->connectDB();
    }

    /**
     * Fonction qui perrmet de s'inscrire
     * @return boolean
     */
    public function addParty() {
        $req = $this->pdo->prepare('INSERT INTO `parties`(name, description, type, id_users) VALUES(:name, :description, :type, :id_users)');
        $req->bindValue(':name', $this->name, PDO::PARAM_STR);
        $req->bindValue(':description', $this->description, PDO::PARAM_STR);
        $req->bindValue(':type', $this->type, PDO::PARAM_STR);
        $req->bindValue(':id_users', $_SESSION['id'], PDO::PARAM_INT);
        $req->execute();
    }
    
        public function deleteParty() {
        $req = $this->pdo->prepare('DELETE FROM persons WHERE id = :id ');
        $req->execute();
    }

    public function showPartyById() {
        $requser = $pdo->prepare('SELECT * FROM `parties` WHERE `id_users` = :id');
        $requser->bindValue(':id', $_SESSION['id'], PDO::PARAM_INT);
        $requser->execute();
        $partyusers = $requser->fetchAll();
    }

}
