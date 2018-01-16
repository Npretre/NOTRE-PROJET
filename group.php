<?php session_start();
include_once 'models/users.php';
try {
        $BDD = new PDO('mysql:host=localhost;dbname=parky;charset=utf8', 'root', 'Ch@456129@');
    }
    catch(Exception $e) { die('Erreur : '.$e->getMessage()); 
  }
    // Récupération des données
    $requete = $BDD->query('SELECT * FROM artists;');
    $lignes = $requete->fetchAll();
    
    $page_title = "Groupes - Parky";
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
    <section class="group-table">
  <!--for demo wrap-->
  <h1>Choisis ton groupe</h1>
  <div class="tbl-header">
    <table cellpadding="0" cellspacing="0" border="0">
      <thead>
        <tr>
          <th>Nom</th>
          <th>Genre</th>
          <th>Nb abonné</th>
          <th>Explicite</th>
          <th>Abonnement</th>
        </tr>
      </thead>
    </table>
  </div>
  <div class="tbl-content">
    <table>
            <thead>
                <tr>

                </tr>
            </thead>
            <tbody>
<?php
    // Boucle sur les enregistrements
    foreach($lignes as $ligne) {
?>
                <tr>
                    <td><a class="ajax-nav" href="site.php"><?php echo $ligne['name']; ?></a></td>
                    <td><?php echo $ligne['gender1'] . ' / ' . $ligne['gender2']; ?></td>
                    <td><?php echo $ligne['name']; ?></td>
                    <td><span  class="explicit"><?php echo $ligne['explicit']; ?></span></td>
                    <td><?php echo $ligne['name']; ?></td>
                </tr>
<?php
    }
?>
            </tbody>
        </table>
  </div>
</section>
    
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
<script src="assets/js/master.js"></script>
<?php
        echo "</body>\n</html>";
    }
?>
