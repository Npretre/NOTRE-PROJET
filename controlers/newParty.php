<?php

if (isset($_POST['validateParty'])){
        $name = htmlspecialchars($_POST['name']);
        $description = htmlspecialchars($_POST['description']);
        $horraire = htmlspecialchars($_POST['horraire']);
  if(!empty($name) && !empty($description) && !empty($horraire)){
    $party = new parties();
    $party->name = $name;
    $party->description = $description;
    $party->horraire = $horraire;
    $party->addParty();
  } else{
      $erreur = 'Merci de remplir tous les champs.';
  }
}