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

    public function __construct($id = null, $gender = '') {
        $this->id = $id;
        $this->gender = $gender;
        $this->connectDB();
    }

    public function selectType() {
        $selectType = array();
        $req = $this->pdo->query('SELECT id, gender FROM type LIMIT 4');
        if (is_object($req)) {
            $selectType = $req->fetchAll(PDO::FETCH_OBJ);
        }
        return $selectType;
    }
    
        public function showType() {
        $selectType = array();
        $req = $this->pdo->query('SELECT id, gender FROM type');
        if (is_object($req)) {
            $selectType = $req->fetchAll(PDO::FETCH_OBJ);
        }
        return $selectType;
    }

}
