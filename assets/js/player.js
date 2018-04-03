// PLAYER AUDIO

// Cacher boutton pause lors de la lecture
$('#pause').hide();
// Initialisation du player
initAudio($('.playlistPlayer li:first-child'));
// Function initialisation player
function initAudio(element) {
  var song = element.attr('song');
  var title = element.attr('titleSong');
  var artist = element.attr('artist');
  // Création d'objet audio
  audio = new Audio('media/' + song);
  if (!audio.currentTime) {
    $('.duration').html('0.00');
  }
  // Déclaration du titre et de l'artiste en haut du player
  $('.audio-player .title').text(title);
  $('.audio-player .artist').text(artist);
  // Changement du li actif lors du changement de musique dans le player
  $('.playlistPlayer li').removeClass('active');
  element.addClass('active');
}

/*// Cacher la div de durée de la musique tant qu'une musique n'est pas lancée
 $('.duration').hide();*/

// Boutton Play
$('#play').click(function () {
  audio.play();
  $('#play').hide();
  $('#pause').show();
  $('.duration').fadeIn(400);
  showDuration();
});
// Boutton pause
$('#pause').click(function () {
  audio.pause();
  $('#pause').hide();
  $('#play').show();
});
// Boutton Stop
$('#stop').click(function () {
  audio.pause();
  audio.currentTime = 0;
  $('#pause').hide();
  $('#play').show();
  $('.duration').fadeOut(400);
});
// Boutton Suivant
$('#next').click(function () {
  audio.pause();
  $('#play').hide();
  $('#pause').show();
  var next = $('.playlistPlayer li.active').next();
  if (next.length === 0) {
    next = $('.playlistPlayer li:first-child');
  }
  initAudio(next);
  audio.play();
  showDuration();
});
// Boutton précédent
$('#previous').click(function () {
  audio.pause();
  $('#play').hide();
  $('#pause').show();
  var prev = $('.playlistPlayer li.active').prev();
  if (prev.length === 0) {
    prev = $('.playlistPlayer li:last-child');
  }
  initAudio(prev);
  audio.play();
  showDuration();
});
// Au click sur le li d'une musique passer sur cette musique
$('.audio-player li').click(function () {
  audio.pause();
  $('#play').hide();
  $('#pause').show();
  $('.duration').fadeIn(400);
  if (!$(this).hasClass('active')) {
// Supression de la classe active et ajout de la classe sur le li séléctioné
    $('li.active').removeClass('active');
    $(this).addClass('active');
  }
  initAudio($('.playlistPlayer li.active'));
  audio.play();
  showDuration();
});
// Contrôle du volume
$('#volumeCtrl').change(function () {
  audio.volume = parseFloat(this.value / 10);
});
$('#volumeCtrlMusicLibrary').change(function () {
  audio.volume = parseFloat(this.value / 10);
});
// Time Duration
function showDuration() {
  $(audio).bind('timeupdate', function () {
    // Variables pour les secondes et les minutes
    var secondes = parseInt(audio.currentTime % 60);
    var minutes = parseInt((audio.currentTime) / 60) % 60;
    // Ajouter 0 si c'est moins de 10 secondes afin d'avoir 0.00, 0.01 etc ...
    if (secondes < 10) {
      secondes = '0' + secondes;
    }
    $('.duration').html(minutes + '.' + secondes);
    var value = 0;
    if (audio.currentTime > 0) {
      value = Math.floor((100 / audio.duration) * audio.currentTime);
    }
    $('.progress').css('width', value + '%');
    // Changement de musique automatique à la fin d'une musique
    if (audio.currentTime >= audio.duration)
      $('#next').trigger('click');
  });
}

$(window).resize(function () {
  $('.progress').resize();
});

// Contrôle de la barre de progress au click dessus (afin de se déplacer dans la musique via la progress bar)
$('body').on('click', '.progress', function (ev) {
  var $div = $(ev.target);
  var $display = $div.find('.progress');
  var offset = $div.offset();
  var x = ev.clientX - offset.left;
  $('.progress').width(x);
  var duration = audio.duration;
  var ratio = x / $('.progress').width();
  var newCurrentTime = ratio * duration;
});

// FIN PLAYER AUDIO