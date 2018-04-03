<?php
$pdo = new PDO('mysql:host=localhost;dbname=parky;charset=utf8', 'root', 'Ch@456129@');

    $getid = intval($_SESSION['id']);
    $requser = $pdo->prepare('SELECT * FROM `playlists` WHERE `id_users` = :id');
    $requser->bindValue(':id', $_SESSION['id'], PDO::PARAM_INT);
    $requser->execute();
    $playsuser = $requser->fetchAll();

if (isset($_POST['createPlaylist'])){
        $name = htmlspecialchars($_POST['name']);
        $description = htmlspecialchars($_POST['description']);
  if(!empty($name) && !empty($description)){
    $playlist = new playlist();
    $playlist->name = $name;
    $playlist->description = $description;
    $playlist->id_users = $_SESSION['id'];
    $playlist->addPlaylist();
  } else{
      $erreur = 'Merci de remplir tous les champs.';
  }
}
