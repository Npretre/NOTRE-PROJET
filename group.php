<?php session_start();

include_once 'models/users.php';

?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Parky all night</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
<link rel="stylesheet" href="assets/libs/bootstrap/css/bootstrap.css">
<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
<link rel="stylesheet" href="assets/css/master.css">
</head>

<body>
<?php include_once 'nav.php'; ?>


<!-- Page Content -->
<div id="page-content-wrapper">
<button type="button" class="hamburger is-closed animated fadeInLeft" data-toggle="offcanvas"> <span class="hamb-top"></span> <span class="hamb-middle"></span> <span class="hamb-bottom"></span> </button>
<div class="container">
    <a href="#" class="scrollToTop"></a>
  <div class="row">
    <div class="col-lg-8 col-lg-offset-2">
      <h1 class="page-header">Bienvenue sur Parky, <?php echo $_SESSION['pseudo']; ?></h1>
    </div></div>


    <div class="jumbotron">
        <h1>Jumbotron</h1>
        <p>This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
        <p><a class="btn btn-primary btn-lg">Learn more</a></p>
    </div>
      <div class="container">
   <div class="form-group">
    <div class="input-group">
     <span class="input-group-addon">Rechercher</span>
     <input type="text" name="search_text" id="search_text" placeholder="Recherches ton groupe..." class="form-control" />
    </div>
   </div>
   <br />
   <div id="result"></div>
  </div>
    

    </div>
    <?php include 'footer.php'; ?>
  </div>
</div>

<!-- /#page-content-wrapper -->


<!-- /#wrapper -->
<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script src="assets/js/audio.js"></script>
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
</body>
</html>
