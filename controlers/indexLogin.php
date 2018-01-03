<?php

if (isset($_POST['formconnexion'])) {
    $mdpconnect = strip_tags($_POST['pass_connexion']);
    $pseudoconnect = strip_tags($_POST['pseudo_connexion']);

    if (!empty($pseudoconnect) && !empty($mdpconnect)) {
              if(!preg_match(" /^[a-zA-Z0-9_]{3,16}$/ ", $pseudoconnect)){
         return($erreur = 'Mauvais format de pseudo.');
      }
            if(!preg_match(" /^[a-zA-Z0-9_+-]{3,16}$/ ", $mdpconnect)){
         return($erreur = 'Mauvais format de mot de passe.');
      }
        $user = new users();
        $user->pseudo = $pseudoconnect;
        $user->pass = $mdpconnect;
        $user = $user->loginIn();

        if (!$user) {
            $erreur = 'Mauvais mdp ou id';
        } else {
            
            $_SESSION['pseudo'] = $pseudoconnect;
            
            header('Location: site.php');
            exit;
        }
    }
}

