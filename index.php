<?php
session_start();
include_once 'models/users.php';
include_once 'controlers/indexLogin.php';
include_once 'controlers/indexSignUp.php';

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Parky all night</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/libs/bootstrap/css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/master.css">
    <link rel="stylesheet" href="assets/css/login.css">
    <!-- Custom styles for this template -->
    <link href="navbar.css" rel="stylesheet">
</head>
<body>
      <!-- Message d'alerte si erreur dans la connexion -->
  <?php if (isset($erreur)) { ?>
    <div id="alert" class="alert alert-dismissible alert-danger">
      <button type="button" class="close warned" data-dismiss="alert">&times;</button>
      <?php echo $erreur; ?>
    </div>
  <?php }  ?>
    <!-- Fond video de la page -->
    <video autoplay loop id="bgvid">
        <source src="assets/video/bg-01.mp4" type="video/mp4">
            <source src="assets/video/fond.webm" type="video/webm"/>
        </video>
        <div class="container-fluid">
            <div class="form">

                <ul class="tab-group">
                    <li class="tab active"><a href="#signup">Inscription</a></li>
                    <li class="tab"><a href="#login">Connexion</a></li>
                </ul>

                <div class="tab-content">
                    <div id="signup">
                        <h1>Inscris toi !</h1>

                        <form action="index.php" method="post">

                                <div class="field-wrap">
                                    <label>
                                        Pseudo<span class="req">*</span>
                                    </label>
                                    <input type="text" required autocomplete="off" name="pseudo"/>
                                </div>

                            <div class="field-wrap">
                                <label>
                                    Adresse Mail<span class="req">*</span>
                                </label>
                                <input type="email"required autocomplete="off" name="email"/>
                            </div>

                            <div class="field-wrap">
                                <label>
                                    Notes un mot de passe<span class="req">*</span>
                                </label>
                                <input type="password"required autocomplete="off" name="pass"/>
                            </div>

                            <button type="submit" class="button button-block" name="formSignUp"/>Et c'est parti !</button>

                        </form>

                    </div>

                    <div id="login">
                        <h1>De retour ?</h1>

                        <form action="index.php" method="post">

                            <div class="field-wrap">
                                <label>
                                    Pseudo<span class="req">*</span>
                                </label>
                                <input type="text"required autocomplete="off" name="pseudo_connexion"/>
                            </div>

                            <div class="field-wrap">
                                <label>
                                    Mot de passe<span class="req">*</span>
                                </label>
                                <input type="password"required autocomplete="off" name="pass_connexion"/>
                            </div>

                            <p class="forgot" ><a href="#">Mot de passe oublié ?</a></p>

                            <button class="button button-block" name="formconnexion"/>Connexion</button>

                        </form>

                    </div>

                </div><!-- tab-content -->

            </div> <!-- /form -->
        </div>
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="assets/libs/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/master.js"></script>
    </body>
    </html>
