<?php
session_start();
include_once 'models/users.php';
include_once 'models/artists.php';
include 'controlers/groupController.php';
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

                <h2 align="center">CHOISIS TON GROUPE</h2>
                <form action="#" method="POST">
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon">Rechercher</span>
                            <input type="text" name="search_text" id="search_text" placeholder="Sélectionnes le groupe que tu veux.." class="form-control" />
                        </div>
                    </div>
                <table class="table">
                    <thead>
                    <th>Nom</th>
                    <th>Genre</th>
                    <th>Explicit</th>
                    </thead>
                    <tbody id="result"> 
                    </tbody>
                </table>

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
</body>
</html>

