<?php

if (isset($_POST['validateParty'])){
        $name = htmlspecialchars($_POST['name']);
        $description = htmlspecialchars($_POST['description']);
  if(!empty($name) && !empty($description)){
    $party = new parties();
    $party->name = $name;
    $party->description = $description;
    $party->addParty();
  } else{
      $erreur = 'Merci de remplir tous les champs.';
  }
}