<?php

class artists {

    public $idartists;
    public $name;
    public $gender1;
    public $gender2;
    public $bio;
    public $clip1;
    public $clip2;
    public $clip3;
    public $clip4;
    public $explicit;
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
    public function __construct($idartists = null, $name = '', $gender1 = '', $gender2 = '', $clip1 = '', $clip2 = '', $clip3 = '', $clip4 = '', $explicit = '') {
        $this->idartists = $idartists;
        $this->name = $name;
        $this->gender1 = $gender1;
        $this->gender2 = $gender2;
        $this->clip1 = $clip1;
        $this->clip2 = $clip2;
        $this->clip3 = $clip3;
        $this->clip4 = $clip4;
        $this->explicit = $explicit;
        $this->connectDB();
    }

    public function searchArtists($search) {
        $searchArtistResult = array();
        $query = 'SELECT `idartists`, `name`, `gender1`, `gender2`, `explicit` FROM `artists` WHERE `name` LIKE :search';
        $searchArtists = $this->pdo->prepare($query);
        $searchArtists->bindValue(':search', '%' . $search . '%', PDO::PARAM_STR);
        if ($searchArtists->execute()) {
            $searchArtistResult = $searchArtists->fetchAll(PDO::FETCH_OBJ);
        }
        return $searchArtistResult;
    }

}

?>