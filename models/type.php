<?php

class type {

    public $id;
    public $genre;
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
    public function __construct($id = null, $gender = '') {
        $this->id = $id;
        $this->gender = $gender;
        $this->connectDB();
    }

    /**
     * Fonction qui permet de se connecter
     * @return Objet
     */
    public function selectType() {
        $selectType = array();
        $req = $this->pdo->query('SELECT id, gender FROM type LIMIT 4');
        if (is_object($req)) {
            $selectType = $req->fetchAll(PDO::FETCH_OBJ);
        }
        return $selectType;
    }

}
