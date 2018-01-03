<?php
    $page_title = "Page un";

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

<?php include "nav.php"; ?>
<?php include "include/before_content.php"; ?>
<p>This paragraph is shown only when the navigation starts from <strong>first_page.php</strong>.</p>

<div id="ajax-content">
<?php } ?>

    <p>J'aime les pommes.</p>

<?php
    if ($as_json) {
        echo json_encode(array("page" => $page_title, "content" => ob_get_clean()));
    } else {
?>
</div>

<p>This paragraph is shown only when the navigation starts from <strong>first_page.php</strong>.</p>

<?php
        include "footer.php"; ?>
        <div class="row">
        
        <div class="lector">
    <div class="column add-bottom">
        <div id="mainwrap">
            <div id="nowPlay">
                <span class="left" id="npAction">Paused...</span>
                <span class="right" id="npTitle"></span>
            </div>
            <div id="audiowrap">
                <div id="audio0">
                    <audio preload id="audio1" controls="controls">Your browser does not support HTML5 Audio!</audio>
                </div>
                <div id="tracks">
                    <a id="btnPrev">&larr;</a>
                    <a id="btnNext">&rarr;</a>
                </div>
            </div>

        </div>
    </div>
</div>
        
    </div>
<script>
$(document).ready(function () {
var trigger = $('.hamburger'),
  overlay = $('.overlay'),
 isClosed = false;

trigger.click(function () {
  hamburger_cross();
});

function hamburger_cross() {

  if (isClosed == true) {
    overlay.hide();
    trigger.removeClass('is-open');
    trigger.addClass('is-closed');
    isClosed = false;
  } else {
    overlay.show();
    trigger.removeClass('is-closed');
    trigger.addClass('is-open');
    isClosed = true;
  }
}

$('[data-toggle="offcanvas"]').click(function () {
    $('#wrapper').toggleClass('toggled');
});
});
</script>
<script>
    $(document).ready(function(){

        //Check to see if the window is top if not then display button
        $(window).scroll(function(){
            if ($(this).scrollTop() > 100) {
                $('.scrollToTop').fadeIn();
            } else {
                $('.scrollToTop').fadeOut();
            }
        });

        //Click event to scroll to top
        $('.scrollToTop').click(function(){
            $('html, body').animate({scrollTop : 0},800);
            return false;
        });

    });
</script>
<script>
$(document).ready(function(){

 load_data();

 function load_data(query)
 {
  $.ajax({
   url:"models/fetch.php",
   method:"POST",
   data:{query:query},
   success:function(data)
   {
    $('#result').html(data);
   }
  });
 }
 $('#search_text').keyup(function(){
  var search = $(this).val();
  if(search != '')
  {
   load_data(search);
  }
  else
  {
   load_data();
  }
 });
});
</script>
<?php
        echo "</body>\n</html>";
    }
?>