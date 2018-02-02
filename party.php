<?php
session_start();
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
                <div class="row">
                    
                </div>
                <div class="row">
                    <h1><?php echo $partyusers->name; ?></h1>
                    <h2><?php echo $partyusers->description; ?></h2>
                </div>

                <div class="row">
                    <h2><?php echo $partyfood->name; ?></h2>
                </div>

            </div>
        </div>
        <!-- /#page-content-wrapper -->
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
