<?php session_start();
include_once 'models/users.php';
    $page_title = "Page un";

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
            <div class="row">

            <div class="lector">
        <div class="column add-bottom">
            <div id="mainwrap">
                <div id="nowPlay">
                    <span class="left" id="npAction">Paused...</span>
                    <span class="right" id="npTitle"></span>
                </div>
                <div id="audiowrap">
                    <div id="audio0">
                        <audio preload id="audio1" controls="controls">Your browser does not support HTML5 Audio!</audio>
                    </div>
                    <div id="tracks">
                        <a id="btnPrev">&larr;</a>
                        <a id="btnNext">&rarr;</a>
                    </div>
                </div>

            </div>
        </div>
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
</body>
</html>
<?php
    }
?>
