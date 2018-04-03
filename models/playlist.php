<?php

class playlist {

    public $id_playlist;
    public $name;
    public $description;
    public $id_users;
    public $id_party;
    private $pdo;

    private function connectDB() {
        try {
            $this->pdo = new PDO('mysql:host=localhost;dbname=parky;charset=utf8', 'root', 'Ch@456129@');
        } catch (PDOException $ex) {
            die($ex->getMessage());
        }
    }

    public function __construct($id_playlist = null, $name = '', $description = '', $id_users = '', $id_party = '') {
        $this->id_playlist = $id_playlist;
        $this->name = $name;
        $this->description = $description;
        $this->id_users = $id_users;
        $this->id_party = $id_party;
        $this->connectDB();
    }

    public function addPlaylist() {
        $req = $this->pdo->prepare('INSERT INTO `playlists`(name, description, id_users) VALUES(:name, :description, :id_users)');
        $req->bindValue(':name', $this->name, PDO::PARAM_STR);
        $req->bindValue(':description', $this->description, PDO::PARAM_STR);
        $req->bindValue(':id_users', $this->id_users, PDO::PARAM_INT);
        $req->execute();
    }

    public function showPlaylists() {
    $requser = $this->pdo->prepare('SELECT * FROM `playlists` WHERE `id_users` = :id');
    $requser->bindValue(':id', $_SESSION['id'], PDO::PARAM_INT);
    $requser->execute();
    $playsuser = $requser->fetchAll();
    }

}
