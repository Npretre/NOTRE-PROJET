<?php
session_start();
include_once 'models/users.php';
include_once 'models/type.php';
include_once 'controlers/siteController.php';
    ?>
    <!doctype html>
    <html>
        <head>
            <?php
            include "include/header.php";
            echo "<title>" . $pageTitle . "</title>";
            ?>
        </head>
        <body>
            <?php include_once 'nav.php'; ?>
            <div id="ajax-content">

            <!-- Page Content -->
            <div class="container">
                <div class="alert alert-dismissible alert-success">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <strong>Bonjour !</strong> <?= $_SESSION['pseudo']; ?>.
                </div>

                <div class="row">
                    <div class="row">
                        <h2><a href="#" class="hvr-icon-wobble-horizontal">Parcourir les styles </a></h2>
                        <p>Fais toi plaisir et découvre ce merveilleux monde musical..</p>
                    </div>
                    <div class="row">
                        <?php
                                foreach ($selectedType as $type){
                                    ?> <p class="gender<?=$type->id ?> col-lg-3"><?= $type->gender ?></p> <?php
                                }
                        ?>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-4 col-lg-offset-1 subscribe">
                        <h2>Free Parky</h2>
                        <p><span class="price">0,00€</span> / mois</p>
                        <ul>
                            <li>Écoute à la demande</li>
                            <li>Sans interruptions</li>
                            <s><li class="disactived">Changer les titres à volonté</li></s>
                            <del><li class="disactived">Écoute hors connexion</li></del>
                            <del><li class="disactived">Qualité de son supérieur</li></del>
                            <del><li class="disactived">Envoi d'un bundle de soirée par mois</li></del>
                        </ul>
                    </div>
                    <div class="col-lg-4 col-lg-offset-2 subscribe">
                        <h2>Ultimate Parky</h2>
                        <p><span class="price">8,00€</span> / mois</p>
                        <ul>
                            <li>Écoute à la demande</li>
                            <li>Sans interruptions</li>
                            <li>Changer les titres à volonté</li>
                            <li>Écoute hors connexion</li>
                            <li>Qualité de son supérieur</li>
                            <li>Envoi d'un bundle de soirée par mois</li>
                        </ul>
                        <div class="row">
                            <a href="">
                                <div class="col-lg-offset-2 col-lg-8 subs">
                                    <p>Je m'abonne</p>
                                </div></a>
                        </div>
                    </div>
                </div>


            </div>
            <?php require_once 'footer.php'; ?> 
        </div>

    </div>

    <!-- /#page-content-wrapper -->


    <!-- /#wrapper -->
    </div>


    <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script src="assets/js/master.js"></script>
    <?php
    echo "</body>\n</html>";
?>
