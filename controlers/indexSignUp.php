<?php

if (isset($_POST['formSignUp'])){
        $mdp = htmlspecialchars($_POST['pass']);
        $pseudo = htmlspecialchars($_POST['pseudo']);
        $mail = htmlspecialchars($_POST['email']);
  if(!empty($pseudo) && !empty($mdp) && !empty($mail)){
      if(!preg_match(" /^[a-zA-Z0-9_]{3,16}$/ ", $pseudo)){
         return($erreur = 'Mauvais format de pseudo.');
      }
      if(!preg_match('/^[^\W][a-zA-Z0-9_]+(\.[a-zA-Z0-9_]+)*\@[a-zA-Z0-9_]+(\.[a-zA-Z0-9_]+)*\.[a-zA-Z]{2,4}$/', $mail)){
         return($erreur = 'Mauvais format d\'email.');
      }
      if(!preg_match(" /^[a-zA-Z0-9_+-]{3,16}$/ ", $mdp)){
         return($erreur = 'Mauvais format de mot de passe.');
      } 
    $users = new users();
    $users->pseudo = $pseudo;
    $users->email = $mail;
    $users->pass = $mdp;
    $users->signUp();
    //header('Location: confirmation.php');
  } else{
      $erreur = 'Merci de remplir tous les champs.';
  }
}
