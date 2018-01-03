<?php session_start();
include_once 'models/users.php';
    $page_title = "PagEREFe un";

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
    <?php require_once 'footer.php'; ?>
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
<script src="assets/js/audio.js"></script>
<script src="assets/js/master.js"></script>
<?php
        echo "</body>\n</html>";
    }
?>