<?php

class shop {
    public $id;
    public $name;
    public $description;
    public $price;
    public $referance;
    public $image;
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
    public function __construct($id = null, $name = '', $description = '', $price = '', $referance = '', $image = '') {
        $this->idartists = $id;
        $this->name = $name;
        $this->description = $description;
        $this->price = $price;
        $this->referance = $referance;
        $this->image = $image;
        $this->connectDB();
    }

    public function shopList() {
        $patientList = array();
        $query = 'SELECT * FROM `shopList`';
        $patientsResult = $this->pdo->query($query);
        if (is_object($patientsResult)) {
            $patientsList = $patientsResult->fetchAll(PDO::FETCH_OBJ);
        }
        return $patientsList;
    }

}

?>