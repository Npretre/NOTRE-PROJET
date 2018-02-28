<?php
session_start();
include_once 'models/users.php';
include_once 'models/shop.php';
include_once 'controlers/shopController.php';
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
            <div class="containt">
                <?php
                foreach ($shopList as $article) { ?>
                <div class="shopList">
                    <div class="  red">
                        <img class="imageShop" src="assets/img/shop/<?=$article->image; ?>" />
                        <p><?= $article->name; ?></p>
                        <p><?= $article->description; ?></p>
                        <p><?= $article->price; ?> €</p>
                    </div>
                </div>
                <?php }
                ?>

               
            </div>
            <?php require_once 'footer.php'; ?> 
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
