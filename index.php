<?php
session_start();
include_once 'models/users.php';
include_once 'controlers/indexLogin.php';
include_once 'controlers/indexSignUp.php';
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Parky all night</title>
<script type="text/javascript" src="js/ajax_nav.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
<link rel="stylesheet" href="assets/libs/bootstrap/css/bootstrap.css">
<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
<link rel="stylesheet" href="../assets/css/master.css">
<link href="assets/css/login.css" rel="stylesheet" type="text/css"/>
<script src="../assets/js/audio.js" type="text/javascript"></script>
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
                            <input type="submit" class="button button-block" name="formSignUp" value="Et c'est parti !"/>
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
                            <input type="submit" class="button button-block" name="formconnexion" value="Connexion"/>
                        </form>
                    </div>
                </div><!-- tab-content -->
            </div> <!-- /form -->
        </div>
    <?php include_once 'footer.php'; ?>
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="assets/libs/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/master.js"></script>
    </body>
    </html>
