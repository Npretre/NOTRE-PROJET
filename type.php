<?php
session_start();
include_once 'models/users.php';
include_once 'models/type.php';
include_once 'models/playlist.php';
include_once 'controlers/navController.php';
include_once 'controlers/typeController.php';
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
                <div class="row">
                    <div class="row">
                        <h2><a href="#" class="hvr-icon-wobble-horizontal">Parcourir les styles </a></h2>
                        <p>Fais toi plaisir et découvre ce merveilleux monde musical..</p>
                    </div>
                    <div class="row">
                        <?php
                        foreach ($selectedType as $type) {
                            }
                            ?>
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
