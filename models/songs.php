<?php

class songs {

    public $id_songs;
    public $name;
    public $artist;
    public $album;
    public $folder;
    public $genre;
    public $explicit;
    public $source;
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
    public function __construct($id_songs = null, $name = '', $artist = '', $album = '', $folder = '', $genre = '', $explicit = '', $source = '') {
        $this->id_songs = $id_songs;
        $this->name = $name;
        $this->artist = $artist;
        $this->album = $album;
        $this->folder = $folder;
        $this->genre = $genre;
        $this->explicit = $explicit;
        $this->source = $source;
        $this->connectDB();
    }

    /**
     * Fonction qui permet de se connecter
     * @return Objet
     */
        public function showSongs() {
        $selectSong = array();
        $req = $this->pdo->query('SELECT * FROM songs');
        if (is_object($req)) {
            $selectSong = $req->fetchAll(PDO::FETCH_OBJ);
        }
        return $selectSong;
    }

}
