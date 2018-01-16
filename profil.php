<?php
session_start();

$pdo = new PDO('mysql:host=localhost;dbname=parky;charset=utf8', 'root', 'Ch@456129@');
if (isset($_GET['id']) && $_GET['id'] > 0) {
    $getid = intval($_GET['id']);
    $requser = $pdo->prepare('SELECT * FROM users WHERE id_users = :id');
    $requser->bindValue(':id', $_GET['id'], PDO::PARAM_INT);
    $requser->execute();
    $userinfo = $requser->fetch(PDO::FETCH_OBJ);
} else
    die("Aucun utilisateur choisi");

$page_title = 'Profil de ' . $userinfo->pseudo . ' - Parky';
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
            <div class="container-fluid">
                <a href="#" class="scrollToTop"></a>
            </div>
            <main>
                <div class="jumbo"> <img src="assets/img/<?=$userinfo->background ?>"></div>
                <div class="container icons">
                    <div class="big-icon"><img src="assets/img/avatar/<?=$userinfo->avatar ?>" /></div>
                    <div class="rate">
                        <div id="container-floating-rate">



                            <div id="floating-button-rate" data-toggle="tooltip" data-placement="left" data-original-title="Create" onclick="newmail()">
                                <p class="plus">+</p>
                            </div>

                        </div>
                    </div>
                    <div id="container-floating">



                        <div id="floating-button" data-toggle="tooltip" data-placement="left" data-original-title="Create" onclick="newmail()">
                            <p class="plus">+</p>
                        </div>

                    </div>
                </div>
                C'est le profil de "<?php echo strip_tags($userinfo->pseudo); ?>" :
                <?php
                if ($_SESSION['id'] == $getid) {
                    ?> <p>Modifier le profil</p><?php
                }
                ?>
                <!-- Nav tabs -->
                <div class="container likes">
                    <ul class="nav nav-tabs">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#panel1" role="tab">Tout</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#panel1" role="tab">Playlists</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#panel1" role="tab">Soirées</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#panel2" role="tab">Albums</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#panelclip" role="tab">Coups de coeurs</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#panel7" role="tab">Plus</a>
                        </li>
                    </ul>
                    <!-- Tab panels -->
                    <div class="tab-content card">
                        <!--Panel 1-->
                        <div class="tab-pane fade in active" id="panel1" role="tabpanel">
                            <div class="container bio">
                                <div class="title">
                                    <h2>Biographie</h2>
                                </div>
                                <div class="content">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro officiis fugit hic vel voluptates perferendis aut quibusdam sit omnis unde aspernatur quae repellat blanditiis autem, a libero asperiores neque illum aliquid est tempore. Eveniet velit voluptate amet facere, repellendus aperiam, cumque est ipsam. Asperiores expedita iusto, inventore sit suscipit nihil repudiandae? Laboriosam cum maxime dolorem neque, in veniam expedita ad. Hic fugit necessitatibus blanditiis, optio dignissimos molestiae nam, numquam odio.</p>
                                </div>
                            </div>
                        </div>
                        <!--/.Panel 1-->
                        <!--Panel 2-->
                        <div class="tab-pane fade" id="panel2" role="tabpanel">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil odit magnam minima, soluta doloribus
                                reiciendis molestiae placeat unde eos molestias. Quisquam aperiam, pariatur. Tempora, placeat ratione
                                porro voluptate odit minima.
                            </p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil odit magnam minima, soluta doloribus
                                reiciendis molestiae placeat unde eos molestias. Quisquam aperiam, pariatur. Tempora, placeat ratione
                                porro voluptate odit minima.</p>
                        </div>
                        <!--/.Panel 2-->
                        <!--Panel 3-->
                        <div class="tab-pane fade" id="panel3" role="tabpanel">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil odit magnam minima, soluta doloribus
                                reiciendis molestiae placeat unde eos molestias. Quisquam aperiam, pariatur. Tempora, placeat ratione
                                porro voluptate odit minima.</p>
                        </div>
                        <!--/.Panel 3-->
                        <!--Panel Clips-->
                        <div class="tab-pane fade" id="panelclip" role="tabpanel">
                            <div class="row row-1">
                                <div class="col-lg-6 clip">
                                    <a href="https://www.youtube.com/watch?v=l9VFg44H2z8" data-toggle="lightbox" data-width="980">
                                        <div class="card">
                                            <div class="card-image" id="first-img">
                                                <div class="row card-title"><span class="lastsong">Wash it all away</span></div>
                                            </div>
                                        </div></a>
                                </div>
                                <div class="col-lg-6 clip">
                                    <a href="https://www.youtube.com/watch?v=zuQGx1H1Qh8" data-toggle="lightbox" data-width="980">
                                        <div class="card">
                                            <div class="card-image" id="second-img">
                                                <div class="row card-title"><span class="lastsong">The Pride</span></div>
                                            </div>
                                        </div></a>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 clip">
                                    <a href="https://www.youtube.com/watch?v=ptzzU7jFQwo&list=RDMMvxelzWswb1g&index=5" data-toggle="lightbox" data-width="980">
                                        <div class="card">
                                            <div class="card-image" id="third-img">
                                                <div class="row card-title"><span class="lastsong">Coming Down</span></div>
                                            </div>
                                        </div></a>
                                </div>
                                <div class="col-lg-6 clip">
                                    <a href="https://www.youtube.com/watch?v=mjl1wInqo1Y" data-toggle="lightbox" data-width="980">
                                        <div class="card">
                                            <div class="card-image" id="forth-img">
                                                <div class="row card-title"><span class="lastsong">Boots and Blood</span></div>
                                            </div>
                                        </div></a>
                                </div>
                            </div>
                        </div>
                        <!--/.Panel Clips-->
                    </div>


            </main><?php include 'footer.php'; ?>
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
