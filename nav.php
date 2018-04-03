<div id="wrapper">
    <div class="overlay"></div>
    <!-- Sidebar -->
    <nav class="navbar navbar-inverse navbar-fixed-top" id="sidebar-wrapper" role="navigation">
        <div class="menunav">
            <ul class="nav sidebar-nav">
                <li class="sidebar-brand"> <a href="#"> Parky </a> </li>
                <li> <a href="site.php"><i class="fa fa-fw fa-home"></i> Accueil</a> </li>
                <li> <a href="profil.php?id=<?= $_SESSION['id']; ?>"><i class="fa fa-fw fa-folder"></i> Profil</a> </li>
                <li> <a href="group.php"><i class="fa fa-fw fa-file-o"></i> Mes DJ</a> </li>
                <li> <a href="songs.php"><i class="fa fa-fw fa-cog"></i> Radio</a> </li>
                <li><a href="parties.php"><i class="fa fa-fw fa-file-o"></i> Mes soirées</a> </li>
                <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-fw fa-plus"></i> Playlists <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li class="dropdown-header">Mes playlists</li>
                        <ul>
                            <?php
                            // Boucle sur les enregistrements
                            foreach ($playsuser as $playuser) {
                                ?>
                                <li><a href="#"><?php echo $playuser['name']; ?></a></li>
                                <?php
                            }
                            ?>
                        </ul>
                        <li><a href="#" data-toggle="modal" data-target="#newPlaylist">Nouvelle playlist</a></li>
                    </ul>
                </li>
                <li> <a href="#"><i class="fa fa-fw fa-twitter"></i> Contact</a> </li>
                <li> <a href="disconnect.php"><i class="fa fa-fw fa-power-off"></i>  Déconnexion</a> </li>
            </ul>
        </div>
        <div class="music-player">
            <h3>Sabaton</h3> 
            <figure class="chart">
                <img src="assets/img/sparta.jpg" width="300">
            </figure>

            <h4>`Sparta`</h4>   
            <!-- Put in Font Awesome Icons -->
            <audio controls class="player">
                <source src="assets/songs/Sabaton-Sparta.mp3" type="audio/mpeg">
            </audio>
        </div>
    </nav>
    <!-- /#sidebar-wrapper -->
    <!-- Modal -->
    <div class="row">
        <div class="modal fade" id="newPlaylist" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Nouvelle playlist</h4>
                    </div>
                    <div class="modal-body">
                        <form action="#" method="post">
                            <div class="form-group">
                                <input type="text" name="name">
                            </div>
                            <div class="form-group">
                                <textarea name="description" rows="8" cols="80"></textarea>
                            </div>
                        
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Annuler</button>
                        <button type="submit" name="createPlaylist" class="btn btn-primary">Enregistrer</button>
                    </div></form>
                </div>
            </div>
        </div>
    </div>
    <div id="page-content-wrapper">
        <button type="button" class="hamburger is-closed animated fadeInLeft" data-toggle="offcanvas"> <span class="hamb-top"></span> <span class="hamb-middle"></span> <span class="hamb-bottom"></span> </button>

