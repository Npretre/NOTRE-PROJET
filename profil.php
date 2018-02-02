<?php
session_start();

$pdo = new PDO('mysql:host=localhost;dbname=parky;charset=utf8', 'root', 'Ch@456129@');
if (isset($_GET['id']) && $_GET['id'] > 0) {
    $getid = intval($_GET['id']);
    $requser = $pdo->prepare('SELECT * FROM `users` WHERE `id_users` = :id');
    $requser->bindValue(':id', $_GET['id'], PDO::PARAM_INT);
    $requser->execute();
    $userinfo = $requser->fetch(PDO::FETCH_OBJ);
} else {
    die("Aucun utilisateur choisi");}

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
                <div class="jumbo"> <img src="assets/img/<?= $userinfo->background ?>"></div>
                <div class="container icons">
                    <div class="big-icon"><img src="assets/img/avatar/<?= $userinfo->avatar ?>" /></div>
                    <div class="rate">
                        <div id="container-floating-rate">
                            <div id="floating-button-rate" data-toggle="tooltip" data-placement="left" data-original-title="Create" onclick="newmail()">
                                <p class="plus"><?php echo strip_tags($userinfo->pseudo); ?></p>
                            </div>
                        </div>
                    </div>
                    <div id="container-floating">
                        <div id="floating-button" data-toggle="tooltip" data-placement="left" data-original-title="Create" onclick="newmail()">
                            <p class="plus">+</p>
                        </div>
                    </div>
                </div>
                <?php
                if ($_SESSION['id'] == $getid) {
                    ?> <a href="#" data-toggle="modal" data-target="#EditProfile"><p>Modifier le profil</p></a><?php
                }
                ?>
                                            <div class="container bio">
                                <div class="title">
                                    <h2>Biographie</h2>
                                    
                                </div>
                                <div class="content">
                                    <p><?php echo strip_tags($userinfo->bio); ?></p>
                                </div>
                            </div>
                
                <div class="modal fade" id="EditProfile" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">
          
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <div class="form">
                <ul class="tab-group">
                    <li class="tab active"><a href="#edit">Modification</a></li>
                    <li class="tab"><a href="#maj">Mise à jour</a></li>
                </ul>
                <div class="tab-content">
                    <div id="edit">
                        <h1>Envie de changement ?</h1>
                        <form action="profil.php?id=<?= $_SESSION['id']; ?>" method="post">
                            <div class="field-wrap">
                                <label>
                                    Pseudo : <?php echo strip_tags($userinfo->pseudo); ?><span class="req">*</span>
                                </label>
                                <input type="text" required autocomplete="off" name="pseudo"/>
                            </div>
                            <div class="field-wrap">
                                <label>
                                    Adresse Mail : <?php echo strip_tags($userinfo->email); ?><span class="req">*</span>
                                </label>
                                <input type="email"required autocomplete="off" name="email"/>
                            </div>
                            <div class="field-wrap">
                                <label>
                                    Notes un nouveau mot de passe : <span class="req">*</span>
                                </label>
                                <input type="password"required autocomplete="off" name="pass"/>
                            </div>
                            <div class="field-wrap">
                                <label>
                                    Confirmes le nouveau mot de passe : <span class="req">*</span>
                                </label>
                                <input type="password"required autocomplete="off" name="pass"/>
                            </div>
                            <div class="field-wrap">
                                <label>
                                    Entres ton mot de passe actuel : <span class="req">*</span>
                                </label>
                                <input type="password"required autocomplete="off" name="pass"/>
                            </div>
                            <input type="submit" class="button button-block" name="formProfileEdit" value="Et c'est parti !"/>
                        </form>
                    </div>
                    <div id="maj">
                        <h1>Mise à jour</h1>
                        <form action="profil.php?id=<?= $_SESSION['id']; ?>" method="post">
                            <div class="field-wrap">
                                <label>
                                    Pseudo<span class="req">*</span>
                                </label>
                                <input type="text"required autocomplete="off" name="pseudo_connexion"/>
                            </div>
                            <div class="field-wrap">
                                <label>
                                    Mot de passe<span class="req">*</span>
                                </label>
                                <input type="password"required autocomplete="off" name="pass_connexion"/>
                            </div>
                            <p class="forgot" ><a href="#">Mot de passe oublié ?</a></p>
                            <input type="submit" class="button button-block" name="formconnexion" value="Mettre à jour"/>
                        </form>
                    </div>
                </div><!-- tab-content -->
            </div> <!-- /form -->
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
                
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
                        <li class="dropdown nav-item">
                            <a href="#" class="nav-link" data-toggle="dropdown">Plus <span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="#tab4default" data-toggle="tab">Default 4</a></li>
                                <li><a href="#tab5default" data-toggle="tab">Default 5</a></li>
                            </ul>
                        </li>
                    </ul>
                    <!-- Tab panels -->
                    <div class="tab-content card">
                        <!--Panel 1-->
                        <div class="tab-pane fade in active" id="panel1" role="tabpanel">
                            <h3>Albums</h3>
                            
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
