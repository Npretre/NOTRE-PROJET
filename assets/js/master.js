
function hide() {
    document.getElementById('alert').style.display = "none";
}
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


$(document).ready(function () {

    //Check to see if the window is top if not then display button
    $(window).scroll(function () {
        if ($(this).scrollTop() > 100) {
            $('.scrollToTop').fadeIn();
        } else {
            $('.scrollToTop').fadeOut();
        }
    });

    //Click event to scroll to top
    $('.scrollToTop').click(function () {
        $('html, body').animate({scrollTop: 0}, 800);
        return false;
    });

});



$(window).on("load resize ", function () {
    var scrollWidth = $('.tbl-content').width() - $('.tbl-content table').width();
    $('.tbl-header').css({'padding-right': scrollWidth});
}).resize();

$('.com-expand-holder').click(function (e) {
    e.preventDefault();
    $(this).parent().toggleClass('active');
    $('.card-stuff').toggleClass('active');
});
$('.form').find('input').on('keyup blur focus', function (e) {

    var $this = $(this),
            label = $this.prev('label');

    if (e.type === 'keyup') {
        if ($this.val() === '') {
            label.removeClass('active highlight');
        } else {
            label.addClass('active highlight');
        }
    } else if (e.type === 'blur') {
        if ($this.val() === '') {
            label.removeClass('active highlight');
        } else {
            label.removeClass('highlight');
        }
    } else if (e.type === 'focus') {

        if ($this.val() === '') {
            label.removeClass('highlight');
        } else if ($this.val() !== '') {
            label.addClass('highlight');
        }
    }

});

$('.form').find('textarea').on('keyup blur focus', function (e) {

    var $this = $(this),
            label = $this.prev('label');

    if (e.type === 'keyup') {
        if ($this.val() === '') {
            label.removeClass('activetext highlight');
        } else {
            label.addClass('activetext highlight');
        }
    } else if (e.type === 'blur') {
        if ($this.val() === '') {
            label.removeClass('activetext highlight');
        } else {
            label.removeClass('highlight');
        }
    } else if (e.type === 'focus') {

        if ($this.val() === '') {
            label.removeClass('highlight');
        } else if ($this.val() !== '') {
            label.addClass('highlight');
        }
    }

});

$('.tab a').on('click', function (e) {

    e.preventDefault();

    $(this).parent().addClass('active');
    $(this).parent().siblings().removeClass('active');

    target = $(this).attr('href');

    $('.tab-content > div').not(target).hide();

    $(target).fadeIn(600);

});


$(document).ready(function () {
    $('input#nameField').on('keyup', function () {
        var charCount = $(this).val().replace(/\s/g, '').length;
        $(".resultName").text(charCount + " /20");
    });
});

$(document).ready(function () {
    $('textarea#descField').on('keyup', function () {
        var charCount = $(this).val().replace(/\s/g, '').length;
        $(".resultDesc").text(charCount + " /120");
    });
});


$(document).ready(function () {
    $('#search_text').keyup(function () {
        $.post('../../controlers/groupController.php', {
            search: $('#search_text').val()
        }, function (searchResults) {
            $.each(searchResults, function (idArtists, searchArtists) {
                $("#result").append('<tr><td>' + searchArtists.name + '</td> <td>' + searchArtists.gender1 + ' / ' + searchArtists.gender2 + '</td><td>' + searchArtists.explicit + '</td>' + '</tr>');
            });
        }, 'json');
        $("#result").empty();
    });
});;