<?php session_start();
include_once 'models/users.php';
include_once 'controlers/indexSignUp.php';
var_dump($_POST);
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Parky all night</title>
<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
<link rel="stylesheet" href="assets/libs/bootstrap/css/bootstrap.css">
<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
<link rel="stylesheet" href="assets/css/master.css">
</head>
<body>
    <div class="contenair">
        <div class="row">
            <div class="col-lg-offset-3 col-lg-6"><p>Ton compte a bien été créer. Un mail de confirmation va être envoyé à l'adresse : </p></div>
        </div>
        <div class="row">
            <div class="col-lg-offset-4 col-lg-5 mailconfi"><p> <?php echo $_POST['email']; ?> </p></div>
        </div>
        <div class="row">
            <a href="index.php"><div class="col-lg-offset-5 col-lg-2 backassward">Revenir à la connexion</div></a>
        </div>
    </div>
    
<?php include_once 'footer.php'; ?>
<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script src="assets/js/audio.js"></script>
</body>
</html>
