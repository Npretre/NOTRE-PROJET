<?php
session_start();

$pdo = new PDO('mysql:host=localhost;dbname=parky;charset=utf8', 'root', 'Ch@456129@');
$requser = $pdo->prepare('SELECT * FROM `users` WHERE `id_users` = :id');
$requser->bindValue(':id', $_GET['id'], PDO::PARAM_INT);
$requser->execute();
$userinfo = $requser->fetch(PDO::FETCH_OBJ);

$page_title = 'Modifier mon profil';
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
            <div class="form">
                <ul class="tab-group">
                    <li class="tab active"><a href="#signup">Modification</a></li>
                    <li class="tab"><a href="#login">Mise à jour</a></li>
                </ul>
                <div class="tab-content">
                    <div id="signup">
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
                    <div id="login">
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
