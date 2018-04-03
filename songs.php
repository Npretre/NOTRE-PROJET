<?php
session_start();
include_once 'models/users.php';
include_once 'models/songs.php';
include_once 'models/playlist.php';
include_once 'controlers/navController.php';
include_once 'controlers/songsController.php';
if (isset($_GET["idPlaylist"])) {
    $id = $_GET["idPlaylist"];
    if ($pdo->query("DELETE FROM parties WHERE idparties=$id")) {
        $success = 'La soirée a bien été supprimé.';
    }
}
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
                <section class="group-table">
                    <!--for demo wrap-->
                    <table class="table">
                        <thead>
                        <th>Chanson</th>
                        <th>Artiste</th>
                        <th></th>
                        </thead>
                        <tbody>
                            <?php
                            // Boucle sur les enregistrements
                            foreach ($selectedSong as $ligne) {
                                ?>
                                <tr>
                                    <td><?php echo $ligne->name; ?></td>
                                    <td><?php echo $ligne->artist ?></td>
                                    <td>
                                        <select onChange="location = this.options[this.selectedIndex].value;"> <a><option value="default" disabled="disabled" selected="selected">Selectionnes ta playlist</option></a>
                                            <?php
                                            // Boucle pour afficher les playlists
                                            foreach ($playsuser as $playuser) {
                                                ?>
                                                <option value="songs.php?idPlaylist=<?= $playuser['id_playlists']; ?>&idSongs=<?= $ligne->id_songs ?>"><?= $playuser['name']; ?></option>
                                                <?php
                                            }
                                            ?>
                                        </select>
                                    </td>
                                </tr>
                                <?php
                            }
                            ?>
                        </tbody>
                    </table>
                </section>
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
<script src="assets/js/jquery.js" type="text/javascript"></script>
<?php
echo "</body>\n</html>";
?>
