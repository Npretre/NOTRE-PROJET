<?php session_start();
include_once 'models/users.php';
    $page_title = "Accueil - Parky";

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
<?php include_once 'accueil.php'?>
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
<script src="assets/js/master.js"></script>
</body>
</html>
<?php
    }
?>
