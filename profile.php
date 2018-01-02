<?php
session_start();
?>
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Parky all night</title>
        <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.csss">
        <link rel="stylesheet" href="assets/libs/bootstrap/css/bootstrap.css">
        <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/master.css">
        <link rel="stylesheet" href="assets/css/profile.css">
    </head>
    <body>
       <?php include_once 'nav.php'; ?>

            <!-- Page Content -->
            <div id="page-content-wrapper">
                <button type="button" class="hamburger is-closed animated fadeInLeft" data-toggle="offcanvas"> <span class="hamb-top"></span> <span class="hamb-middle"></span> <span class="hamb-bottom"></span> </button>
                <div class="container-fluid">
                    <a href="#" class="scrollToTop"></a>
                </div>
                <main>
                    <div class="jumbo"></div>
	<div class="container icons">
		<div class="big-icon"></div>
		<div class="rate">
                    <a href="" class="star-btn add-btn btn-floating btn-large waves-effect waves-light blue darken-1"><i class="fa fa-info-circle fa-3x" aria-hidden="true"></i></a>
			<a class="like-btn add-btn btn-floating btn-large waves-effect waves-light blue darken-1"><i class="fa fa-thumbs-o-up fa-3x" aria-hidden="true"></i></a>
		</div>
		<div class="add">
			<a class="add-btn btn-floating btn-large waves-effect waves-light red"><i class="material-icons">add</i></a>
		</div>
	</div>
                    <div class="details">
                        <h1>Five Finger Death Punch</h1>
                        <p>Heavy Metal / Hard Rock</p>
                    </div>
                    <!-- Nav tabs -->
                    <div class="container likes">
                        <ul class="nav nav-tabs">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#panel1" role="tab">Tout</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#panel2" role="tab">Albums</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#panelclip" role="tab">Derniers clips</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#panel7" role="tab">Plus</a>
                            </li>
                        </ul>
                        <!-- Tab panels -->
                        <div class="tab-content card">
                            <!--Panel 1-->
                            <div class="tab-pane fade in active" id="panel1" role="tabpanel">
                                                    <div class="container bio">
                        <div class="title">
                            <h2>Biographie</h2>
                        </div>
                        <div class="content">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro officiis fugit hic vel voluptates perferendis aut quibusdam sit omnis unde aspernatur quae repellat blanditiis autem, a libero asperiores neque illum aliquid est tempore. Eveniet velit voluptate amet facere, repellendus aperiam, cumque est ipsam. Asperiores expedita iusto, inventore sit suscipit nihil repudiandae? Laboriosam cum maxime dolorem neque, in veniam expedita ad. Hic fugit necessitatibus blanditiis, optio dignissimos molestiae nam, numquam odio.</p>
                        </div>
                    </div>
                            </div>
                            <!--/.Panel 1-->
                            <!--Panel 2-->
                            <div class="tab-pane fade" id="panel2" role="tabpanel">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil odit magnam minima, soluta doloribus
                                    reiciendis molestiae placeat unde eos molestias. Quisquam aperiam, pariatur. Tempora, placeat ratione
                                    porro voluptate odit minima.
                                </p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil odit magnam minima, soluta doloribus
                                    reiciendis molestiae placeat unde eos molestias. Quisquam aperiam, pariatur. Tempora, placeat ratione
                                    porro voluptate odit minima.</p>
                            </div>
                            <!--/.Panel 2-->
                            <!--Panel 3-->
                            <div class="tab-pane fade" id="panel3" role="tabpanel">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil odit magnam minima, soluta doloribus
                                    reiciendis molestiae placeat unde eos molestias. Quisquam aperiam, pariatur. Tempora, placeat ratione
                                    porro voluptate odit minima.</p>
                            </div>
                            <!--/.Panel 3-->
                            <!--Panel Clips-->
                            <div class="tab-pane fade" id="panelclip" role="tabpanel">
                                <div class="row row-1">
                                    <div class="col-lg-6 clip">
                                        <a href="https://www.youtube.com/watch?v=l9VFg44H2z8" data-toggle="lightbox" data-width="980">
                                            <div class="card">
                                                <div class="card-image" id="first-img">
                                                    <div class="row card-title"><span class="lastsong">Wash it all away</span></div>
                                                </div>
                                            </div></a>
                                    </div>
                                    <div class="col-lg-6 clip">
                                        <a href="https://www.youtube.com/watch?v=zuQGx1H1Qh8" data-toggle="lightbox" data-width="980">
                                            <div class="card">
                                                <div class="card-image" id="second-img">
                                                    <div class="row card-title"><span class="lastsong">The Pride</span></div>
                                                </div>
                                            </div></a>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6 clip">
                                        <a href="https://www.youtube.com/watch?v=ptzzU7jFQwo&list=RDMMvxelzWswb1g&index=5" data-toggle="lightbox" data-width="980">
                                        <div class="card">
                                            <div class="card-image" id="third-img">
                                                <div class="row card-title"><span class="lastsong">Coming Down</span></div>
                                            </div>
                                        </div></a>
                                    </div>
                                    <div class="col-lg-6 clip">
                                        <a href="https://www.youtube.com/watch?v=mjl1wInqo1Y" data-toggle="lightbox" data-width="980">
                                        <div class="card">
                                            <div class="card-image" id="forth-img">
                                                <div class="row card-title"><span class="lastsong">Boots and Blood</span></div>
                                            </div>
                                        </div></a>
                                    </div>
                                </div>
                            </div>
                            <!--/.Panel Clips-->
                        </div>

                        <div class="container">




                        </div>

                </main><?php include 'footer.php'; ?>
            </div>
            
        </div>
    </div>

    <!-- /#page-content-wrapper -->


    <!-- /#wrapper -->
    <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.js"></script>
    <script src="assets/js/audio.js"></script>
    <script>
        $(document).on('click', '[data-toggle="lightbox"]', function (event) {
            event.preventDefault();
            $(this).ekkoLightbox();
        });
    </script>
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
    </script>
</body>
</html>
