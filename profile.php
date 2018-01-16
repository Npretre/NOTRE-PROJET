<?php
session_start();
?>
<!doctype html>
<html>
    <head>
<?php
        include "include/header.php";
?>
    </head>
    <body>
        <?php include_once 'nav.php'; ?>

        <!-- Page Content -->

        <div class="container-fluid">
            <a href="#" class="scrollToTop"></a>
        </div>
        <main>
            <div class="jumbo"> <img src="assets/img/ffdp-fb.jpg"></div>
            <div class="container icons">
                <div class="big-icon"></div>
                <div class="rate">
    <div id="container-floating-rate">



  <div id="floating-button-rate" data-toggle="tooltip" data-placement="left" data-original-title="Create" onclick="newmail()">
    <p class="plus">+</p>
  </div>

</div>
                </div>
    <div id="container-floating">



  <div id="floating-button" data-toggle="tooltip" data-placement="left" data-original-title="Create" onclick="newmail()">
    <p class="plus">+</p>
  </div>

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
<script>
    $(document).ready(function () {

        load_data();

        function load_data(query)
        {
            $.ajax({
                url: "models/fetch.php",
                method: "POST",
                data: {query: query},
                success: function (data)
                {
                    $('#result').html(data);
                }
            });
        }
        $('#search_text').keyup(function () {
            var search = $(this).val();
            if (search != '')
            {
                load_data(search);
            } else
            {
                load_data();
            }
        });
    });
</script>
</body>
</html>
