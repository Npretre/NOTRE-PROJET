<?php

if (isset($_POST['validateParty'])){
        $name = htmlspecialchars($_POST['name']);
        $description = htmlspecialchars($_POST['description']);
        $type = htmlspecialchars($_POST['type']);
  if(!empty($name) && !empty($description) && !empty($type)){
      if(!preg_match(" /^[a-zA-Z0-9_]{3,16}$/ ", $name)){
         return($erreur = 'Mauvais format de pseudo.');
      }
      if(!preg_match(" /^[a-zA-Z0-9_]{3,16}$/ ", $description)){
         return($erreur = 'Mauvais format d\'email.');
      }
      if(!preg_match(" /^[a-zA-Z0-9_+-]{3,16}$/ ", $type)){
         return($erreur = 'Mauvais format de mot de passe.');
      } 
    $party = new parties();
    $party->name = $name;
    $party->description = $description;
    $party->type = $type;
    $party->addParty();
  } else{
      $erreur = 'Merci de remplir tous les champs.';
  }
}