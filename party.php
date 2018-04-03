<?php
session_start();
include_once 'models/playlist.php';
include_once 'controlers/navController.php';
$pdo = new PDO('mysql:host=localhost;dbname=parky;charset=utf8', 'root', 'Ch@456129@');
if (isset($_GET['id']) && $_GET['id'] > 0) {
    $getid = intval($_GET['id']);
    $requser = $pdo->prepare('SELECT * FROM `parties` WHERE `idparties` = :id');
    $requser->bindValue(':id', $_GET['id'], PDO::PARAM_INT);
    $requser->execute();
    $partyusers = $requser->fetch(PDO::FETCH_OBJ);

    $reqfood = $pdo->prepare('SELECT * FROM `food` WHERE `idparties` = :id');
    $reqfood->bindValue(':id', $_GET['id'], PDO::PARAM_INT);
    $reqfood->execute();
    $partyfood = $reqfood->fetch(PDO::FETCH_OBJ);
}
$page_title = 'Parties';
?>
<!doctype html>
<html>
    <head>
        <?php
        include "include/header.php";
        echo "<title>" . $page_title . "</title>";
        ?>
    </head>
    <body>
        <?php include_once 'nav.php'; ?>
        <div id="ajax-content">

            <!-- Page Content -->
            <div class="container">
                <h1><?php echo $partyusers->name; ?></h1>
                <h2><?php echo $partyusers->description; ?></h2>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="audio-player col-lg-12">
                            <div class="audio-info">
                                <span class="artist"></span> - <span class="title"></span>
                            </div>
                            <div class="row">
                                <div class="volumeCtrl col-lg-5 col-lg-offset-5">
                                    <input id="volumeCtrl" type="range" name="volumeCtrl" min="0" max="10" value="10"><br/>
                                    <div class="duration col-lg-1 text-center">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="audioCtrl">
                                    <button id="previous" class="btn btn-primary btn-player" type="button" name="previous"><span class="glyphicon glyphicon-step-backward gi-2x"></span></button>
                                    <button id="play" class="btn btn-primary btn-player" type="button" name="play"><span class="glyphicon glyphicon-play gi-2x"></span></button>
                                    <button id="pause" class="btn btn-primary btn-player" type="button" name="pause"><span class="glyphicon glyphicon-pause gi-2x"></span></button>
                                    <button id="stop" class="btn btn-primary btn-player" type="button" name="stop"><span class="glyphicon glyphicon-stop gi-2x"></span></button>
                                    <button id="next" class="btn btn-primary btn-player" type="button" name="next"><span class="glyphicon glyphicon-step-forward gi-2x"></span></button>
                                </div>
                            </div>
                            <div class="row">
                                <div class="container-fluid">
                                    <div class="tracker">
                                        <div class="progress w3-light-grey w3-round-xlarge">
                                            <div class="progress-bar progress-bar-striped active progressBarPlayer w3-container w3-round-xlarge col-lg-12" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                                                <span class="currentProgress"></span>
                                            </div>
                                        </div>
                                        <ul class="playlistPlayer col-lg-12">

                                            <?php foreach ($playlist as $song) { ?>
                                                <li song="Sabaton-Sparta.mp3" artist="MisterMV" titleSong="F-zero" data-toggle="tooltip" data-placement="top" title="Cliquez pour lire">F-zero</li>
                                            <?php }
                                            ?>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">

                </div>
                <div class="row">
                    <h2><?php echo $partyfood->name; ?></h2>
                </div>
                <div class="row">
                    <a href="parties.php"> Retour aux soirées</a>
                </div>


            </div>
        </div>
    </div>
    <!-- /#page-content-wrapper -->
    <!-- /#wrapper -->

</div>
<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script src="assets/js/master.js"></script>
<script src="assets/js/player.js" type="text/javascript"></script>
<?php
echo "</body>\n</html>";
?>
