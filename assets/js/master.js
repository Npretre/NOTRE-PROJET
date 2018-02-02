
  function hide(){
    document.getElementById('alert').style.display = "none";
  };
  setTimeout(hide, 3000);



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

$(window).on("load resize ", function() {
  var scrollWidth = $('.tbl-content').width() - $('.tbl-content table').width();
  $('.tbl-header').css({'padding-right':scrollWidth});
}).resize();

$('.com-expand-holder').click(function(e){
  e.preventDefault();
  $(this).parent().toggleClass('active');
  $('.card-stuff').toggleClass('active');
});