<!DOCTYPE html>

<html>


<head>
    <meta charset="utf-8">
    <title>Fine Signature - Catering & Event Management</title>
    <meta name="description" content="Fine Signature is a HTML template created for restaurants and catering companies.">
    <meta name="author" content="pixel-industry">
    <meta name="keywords" content="CSS, HTML5, clean, restaurant, jQuery, retina, bootstrap">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->

    <!-- responsive meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Stylesheets -->
    <link rel="stylesheet" href="css/bootstrap.min.css" /><!-- bootstrap grid -->
    <link rel="stylesheet" href="css/bootstrap-theme.min.css" /><!-- bootstrap theme -->
    <link rel="stylesheet" href="css/style.css" /><!-- template styles -->
    <link rel="stylesheet" href="css/color-default.css" /><!-- default template color styles -->
    <link rel="stylesheet" href="css/retina.css" /><!-- retina ready styles -->
    <link rel="stylesheet" href="css/responsive.css" /><!-- responsive styles -->
    <link rel="stylesheet" href="css/animate.css" /><!-- animation for content -->
    <link rel='stylesheet' href='owl-carousel/owl.carousel.css' /><!-- Carousels css -->
    <link rel='stylesheet' href='owl-carousel/owl.theme.css' /><!-- Carousels -->

    <!-- Google Web fonts -->
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Suranna' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Montez' rel='stylesheet' type='text/css'>

    <!-- Font icons -->
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css" /><!-- Font awesome icons -->
</head>

<body>
    <!-- current-menu-item -->
    <?php
    $title = 'about';
    include "assets/phphacks/header.php";

    ?>

    <!-- .page-content start -->
    <div class="page-content custom-img-background dark page-title page-title-1 mb-100">
        <div class="container">
            <!-- .row start -->
            <div class="row">
                <!-- .col-md-12 start -->
                <div class="col-md-12 centered">
                    <div class="custom-heading style-1 triggerAnimation animated" data-animate='fadeInUp'>
                        <h1><span>Our story</span></h1>
                        <h1>About Fine Signature</h1>
                    </div><!-- .custom-heading.style-1 end -->
                </div><!-- .col-md-12 end -->
            </div><!-- .row end -->
        </div><!-- .container end -->
    </div><!-- .page-content end -->

    <!-- .page-content start -->
    <div class="page-content">
        <div class="container">
            <!-- .row start -->
            <div class="row">
                <!-- .col-md-6 start -->
                <div class="col-md-6 col-sm-6">
                    <img src="img/about-custom/2.jpg" alt="Fine Signature - Restaurant & Catering HTML Template" />
                </div><!-- .col-md-6 end -->
                <!-- .col-md-6 start -->
                <div class="col-md-6 col-sm-6 centered">
                    <div class="custom-heading style-1">
                        <h3><span>Our story</span></h3>
                        <h3>Since 1975</h3>

                        <!-- .divider.style-1 start -->
                        <div class="divider style-1 center">
                            <span class="hr-simple left"></span>
                            <i class="fa fa-circle hr-icon"></i>
                            <span class="hr-simple right"></span>
                        </div>
                    </div><!-- .custom-heading.style-1 end -->

                    <div class="blockquote style-1 triggerAnimation animated" data-animate='fadeIn'>
                        <p>"There is no sincerer love than the love of food"</p>
                        <span class="author">- George Bernard Shaw</span>
                    </div>

                    <p>Throughout the year, fine signature has made a standing of greatness in the catering services. It has developed to turn into the best caterer and specialist for the catering business in the country. It became one of the fastest developing food and expert organizations by offering an expansive scope of excellent management. </p>

                </div><!-- .col-md-6 end -->
            </div><!-- .row end -->
        </div><!-- .container end -->
    </div><!-- .page-content end -->

    <!-- .page-content start -->
    <div class="page-content">
        <div class="container">
            <!-- .row start -->
            <div class="row">
                <!-- .col-md-6 start -->
                <div class="col-md-6 col-sm-6  centered">
                    <div class="custom-heading style-1">
                        <h3><span>Our approach</span></h3>
                        <h3>ALWAYS FRESH INGREDIENTS</h3>

                        <!-- .divider.style-1 start -->
                        <div class="divider style-1 center">
                            <span class="hr-simple left"></span>
                            <i class="fa fa-circle hr-icon"></i>
                            <span class="hr-simple right"></span>
                        </div>
                    </div><!-- .custom-heading.style-1 end -->

                    <p>The gathering has set up a strong relationship with various driving worldwide organizations. Hence, allowing it to offer a broad scope of management per its customer's beliefs. An organization's basic structure makes it easy for it to fulfill achievements, because of which fine signature has completely put resources into its representatives, structure, and business processes. This allows them to reliably keep up with their management, cleanliness, wellbeing and further allows them to appreciate high economies of scale. With strategical situating of its offices however out the country, it can convey its management any place required.</p>
                </div><!-- .col-md-6 end -->
                <!-- .col-md-6 start -->
                <div class="col-md-6 col-sm-6">
                    <img src="img/pics/img-05.jpg" alt="Fine Signature - Restaurant & Catering HTML Template" />
                </div><!-- .col-md-6 end -->
            </div><!-- .row end -->
        </div><!-- .container end -->
    </div><!-- .page-content end -->

    <!-- .page-content start -->

    <?php

    include "assets/phphacks/footer.php";

    ?>




    <script src="js/jquery-2.1.4.min.js"></script><!-- jQuery library -->
    <script src="js/bootstrap.min.js"></script><!-- .bootstrap script -->
    <script src="js/jquery.scripts.min.js"></script><!-- modernizr, retina, stellar for parallax -->
    <script src="js/jquery.dlmenu.min.js"></script><!-- for responsive menu -->
    <script src="js/include.js"></script><!-- custom js functions -->
    <script src="owl-carousel/owl.carousel.min.js"></script><!-- Carousels script -->
    <script src="js/TweenMax.min.js"></script> <!-- Plugin for smooth scrolling-->
    <script src="js/ScrollToPlugin.min.js"></script> <!-- Plugin for smooth scrolling-->

    <script>
        /* <![CDATA[ */
        jQuery(document).ready(function($) {
            'use strict';

            // FANCY TESTIMONIAL CAROUSEL START 
            $('#fancy-testimonial-carousel').owlCarousel({
                singleItem: true,
                autoPlay: true,
                pagination: false,
                navigation: false
            });

            // BOOKING FORM AJAX SUBMIT START
            $('.otw-widget-form .otw-submit').on('click', function(event) {
                event.preventDefault();
                var $form = $(this).closest('form');

                var name = $form.find('.otw-reservation-name').val();
                var email = $form.find('.otw-reservation-email').val();
                var date = $form.find('.otw-reservation-date').val();
                var time = $form.find('.otw-reservation-time').val();
                var guests = $form.find('.otw-party-size-select').val();
                var form_data = new Array({
                    'Name': name,
                    'Email': email,
                    'Date': date,
                    'Time': time,
                    'Guests': guests
                });
                $.ajax({
                    type: 'POST',
                    url: "contact.php",
                    data: ({
                        'action': 'book_table',
                        'form_data': form_data
                    })
                }).done(function(data) {
                    alert(data);
                });
            }); // BOOKING FORM AJAX SUBMIT END

        });
        /* ]]> */
    </script>

</body>


</html>