<?php
    $page_title = "Page trois";
    $page_content = "<p>Ceci est le contenu de la <strong>page_trois.php</strong>. Ce contenu est stocké dans une variable PHP.</p>";

    if (isset($_GET["view_as"]) && $_GET["view_as"] == "json") {
        echo json_encode(array("page" => $page_title, "content" => $page_content));
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

<?php include "include/before_content.php"; ?>

<p>This paragraph is shown only when the navigation starts from <strong>third_page.php</strong>.</p>

<div id="ajax-content">
<?php echo $page_content; ?>
</div>

<p>This paragraph is shown only when the navigation starts from <strong>third_page.php</strong>.</p>

<?php
        include "footer.php";
        echo "</body>\n</html>";
    }
?>
