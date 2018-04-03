<?php
session_start();
include_once 'models/party.php';
include_once 'controlers/newParty.php';
include_once 'models/playlist.php';
include_once 'controlers/navController.php';
$pdo = new PDO('mysql:host=localhost;dbname=parky;charset=utf8', 'root', 'Ch@456129@');
$success = array();
//delete row on button click
if (isset($_GET["del"])) {
    $id = $_GET["del"];
    if ($pdo->query("DELETE FROM parties WHERE idparties=$id")) {
        $success = 'La soirée a bien été supprimé.';
    }
}
if (isset($_SESSION['id']) && $_SESSION['id'] > 0) {
    $getid = intval($_SESSION['id']);
    $requser = $pdo->prepare('SELECT * FROM `parties` WHERE `id_users` = :id');
    $requser->bindValue(':id', $_SESSION['id'], PDO::PARAM_INT);
    $requser->execute();
    $partyusers = $requser->fetchAll();
}
$page_title = 'Parties';
$as_json = false;
if (isset($_GET["view_as"]) && $_GET["view_as"] == "json") {
    $as_json = true;
    ob_start();
} else {
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
            <?php } ?>
            <!-- Page Content -->
            <div class="container">
                <?php
                if (!empty($success)) {
                    ?>
                    <div class="alert alert-dismissible alert-success col-lg-3 success">
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                        <?= $success ?>
                    </div>
                    <?php
                } else {
                    ?> <div><?= '' ?></div> <?php
                }
                ?>
                <div class="row">
                    <a href="#" data-toggle="modal" data-target="#newParty"><div class="col-lg-offset-2 col-lg-2 addPartyButton"><i class="fa fa-plus-circle" aria-hidden="true"></i> Nouvelle soirée</div></a>
                </div>
                <?php
                if (!empty($partyusers)) {
                    foreach ($partyusers as $partyuser) {
                        ?>
                        <div class="card">
                            <div class="card-stuff">
                                <a href='parties.php?del=<?= $partyuser['idparties']; ?>'><button type="button" class="close"><span aria-hidden="true">&times;</span></button></a>
                                <a href="party.php?id=<?= $partyuser['idparties']; ?>"><h2><?php echo $partyuser['name']; ?></h2></a>
                                <p><?php echo $partyuser['description']; ?></p>
                                <p><?php echo $partyuser['horraire']; ?></p>
                            </div>
                        </div>
                        <?php
                    }
                } else {
                    ?>
                    <div> <img class="pageError" src="assets/img/page error.png"/> </div>
                    <?php
                }
                // Boucle sur les enregistrements
                ?>

            </div>
        </div>
        <!-- /#page-content-wrapper -->
        <!-- Modal -->

        <div class="row">
            <div class="modal fade" id="newParty" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                    <div class="form newParty">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <div class="tab-content">
                            <h1>Créer ta soirée</h1>
                            <form action="parties.php" method="post" enctype="multipart/form-data">
                                <div class="field-wrap">
                                    <label>
                                        Nom de la soirée : <span class="req">*</span><span class="countChara resultName">0/20</span>
                                    </label>
                                    <input id="nameField" type="text" name="name" required autocomplete="off" />
                                </div>
                                <div class="field-wrap col-lg-6">
                                    <label>Description <span class="countCharaDesc resultDesc">0/120</span></label>
                                    <textarea id="descField" type="text" autocomplete="off" name="description"></textarea>
                                </div>
                                <div class="field-wrap col-lg-6">
                                    <label>Horraire</label>
                                    <input type="time" autocomplete="off" name="horraire" />
                                </div>
                                <input type="submit" class="button button-block" name="validateParty" value="Go go go !"/>
                            </form>
                        </div><!-- tab-content -->
                    </div> <!-- /form -->
                </div>
            </div>
        </div>
    </div>
    <!-- /#wrapper -->
    <?php
    if ($as_json) {
        echo json_encode(array("page" => $page_title, "content" => ob_get_clean()));
    } else {
        ?>
    </div>
    <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script src="assets/js/master.js"></script>
    <?php
    echo "</body>\n</html>";
}
?>
