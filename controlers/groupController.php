<?php
$page_title = "Groupes - Parky";
if(isset($_POST['search'])){
    include '../models/artists.php';
    $artists = new artists();
    $searchResults = $artists->searchArtists($_POST['search']);
    echo json_encode($searchResults);
}
?>
