<!DOCTYPE html>

<html>
    

<head>
        <meta charset="utf-8">
        <title>Fine Signature - Catering & Events</title>
        <meta name="description" content="Fine Signature is a HTML template created for restaurants and catering companies.">
        <meta name="author" content="pixel-industry">
        <meta name="keywords" content="CSS, HTML5, clean, restaurant, jQuery, retina, bootstrap">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Stylesheets -->
        <link rel="stylesheet" href="css/bootstrap.min.css"/><!-- bootstrap grid -->
        <link rel="stylesheet" href="css/bootstrap-theme.min.css"/><!-- bootstrap theme -->
        <link rel="stylesheet" href="css/style.css"/><!-- template styles -->
        <link rel="stylesheet" href="css/color-default.css"/><!-- default template color styles -->
        <link rel="stylesheet" href="css/retina.css"/><!-- retina ready styles -->
        <link rel="stylesheet" href="css/responsive.css"/><!-- responsive styles -->
        <link rel="stylesheet" href="css/animate.css"/><!-- animation for content -->

        <!-- Magnific Popup - image lightbox -->
        <link rel="stylesheet" href="css/magnific-popup.css" />

        <!-- Google Web fonts -->
        <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Suranna' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Montez' rel='stylesheet' type='text/css'>

        <!-- Font icons -->
        <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css"/><!-- Font awesome icons -->
    </head>

    <body>

    <?php
      $title='gallery';
      include "assets/phphacks/header.php";
      
      ?>

        <!-- .page-content start -->
        <div class="page-content custom-img- background dark page-title page-title-4 mb-100">
            <div class="container">
                <!-- .row start -->
                <div class="row">
                    <!-- .col-md-12 start -->
                    <div class="col-md-12 centered">
                        <div class="custom-heading style-1 triggerAnimation animated" data-animate='fadeInUp'>
                            <h1><span>Gallery</span></h1>
                            <h1>Take a look inside</h1>
                        </div><!-- .custom-heading.style-1 end -->
                    </div><!-- .col-md-12 end -->
                </div><!-- .row end -->
            </div><!-- .container end -->
        </div><!-- .page-content end -->

        <!-- .page-content start -->
        <div class="page-content">
            <!-- .container start -->
            <div class="container">
                <!-- .row start -->
                <div class="row gallery-filters">
                    <div class="col-md-12 mb-20 centered triggerAnimation animated" data-animate='fadeIn'>
                        <div class="custom-heading style-1">
                            <h3><span>Exquisite ambient</span></h3>
                            <h3>Restaurant gallery</h3>

                            <!-- .divider.style-1 start -->
                            <div class="divider style-1 center">
                                <span class="hr-simple left"></span>
                                <i class="fa fa-circle hr-icon"></i>
                                <span class="hr-simple right"></span>
                            </div>
                        </div><!-- .custom-heading.style-1 end -->
                        <ul id="filters">
                            <li class="active"><a href="#" data-filter="*">All</a></li>
                            <li><a href="#" data-filter=".indoor">Indoor</a></li>
                            <li><a href="#" data-filter=".outdoor">Outdoor</a></li>
                        </ul>
                    </div><!-- .col-md-12 end -->                    
                </div><!-- .row.gallery-filters end -->
            </div><!-- .container end -->
        </div><!-- .page-content end -->

        <div class="page-content">
            <div class="container-fluid">
                <div class="row">
                    <ul id="galleryitems" class="isotope isotopeitems-full">
                        <li class="col-xs-6 col-md-3 isotope-item outdoor">
                            <figure class="gallery-item-container">
                                <div class="gallery-img">
                                    <img src="img/pics/pics-new/img- (18).png" alt="Fine Signature"/>

                                    <div class="hover-mask-container">
                                        <div class="hover-zoom">
                                            <a href="img/pics/pics-new/img- (18).png" class="triggerZoom fa fa-search"></a>
                                        </div><!-- .hover-zoom end -->
                                    </div><!-- .hover-mask-container end -->
                                </div><!-- .gallery-img end -->
                            </figure><!-- .gallery-item-container end -->
                        </li><!-- .isotope-item end -->

                        <li class="col-xs-6 col-md-3 isotope-item outdoor">
                            <figure class="gallery-item-container">
                                <div class="gallery-img">
                                    <img src="img/pics/pics-new/img- (19).png" alt="Fine Signature"/>

                                    <div class="hover-mask-container">
                                        <div class="hover-zoom">
                                            <a href="img/pics/pics-new/img- (19).png" class="triggerZoom fa fa-search"></a>
                                        </div><!-- .hover-zoom end -->
                                    </div><!-- .hover-mask-container end -->
                                </div><!-- .gallery-img end -->
                            </figure><!-- .gallery-item-container end -->
                        </li><!-- .isotope-item end -->

                        <li class="col-xs-6 col-md-3 isotope-item indoor">
                            <figure class="gallery-item-container">
                                <div class="gallery-img">
                                    <img src="img/pics/pics-new/img- (20).png" alt="Fine Signature"/>

                                    <div class="hover-mask-container">
                                        <div class="hover-zoom">
                                            <a href="img/pics/pics-new/img- (20).png" class="triggerZoom fa fa-search"></a>
                                        </div><!-- .hover-zoom end -->
                                    </div><!-- .hover-mask-container end -->
                                </div><!-- .gallery-img end -->
                            </figure><!-- .gallery-item-container end -->
                        </li><!-- .isotope-item end -->

                        <li class="col-xs-6 col-md-3 isotope-item indoor">
                            <figure class="gallery-item-container">
                                <div class="gallery-img">
                                    <img src="img/pics/pics-new/img- (21).png" alt="Fine Signature"/>

                                    <div class="hover-mask-container">
                                        <div class="hover-zoom">
                                            <a href="img/pics/pics-new/img- (21).png" class="triggerZoom fa fa-search"></a>
                                        </div><!-- .hover-zoom end -->
                                    </div><!-- .hover-mask-container end -->
                                </div><!-- .gallery-img end -->
                            </figure><!-- .gallery-item-container end -->
                        </li><!-- .isotope-item end -->

                        <li class="col-xs-6 col-md-3 isotope-item indoor">
                            <figure class="gallery-item-container">
                                <div class="gallery-img">
                                    <img src="img/pics/pics-new/img- (22).png" alt="Fine Signature"/>

                                    <div class="hover-mask-container">
                                        <div class="hover-zoom">
                                            <a href="img/pics/pics-new/img- (22).png" class="triggerZoom fa fa-search"></a>
                                        </div><!-- .hover-zoom end -->
                                    </div><!-- .hover-mask-container end -->
                                </div><!-- .gallery-img end -->
                            </figure><!-- .gallery-item-container end -->
                        </li><!-- .isotope-item end -->

                        <li class="col-xs-6 col-md-3 isotope-item indoor">
                            <figure class="gallery-item-container">
                                <div class="gallery-img">
                                    <img src="img/pics/pics-new/img- (23).png" alt="Fine Signature"/>

                                    <div class="hover-mask-container">
                                        <div class="hover-zoom">
                                            <a href="img/pics/pics-new/img- (23).png" class="triggerZoom fa fa-search"></a>
                                        </div><!-- .hover-zoom end -->
                                    </div><!-- .hover-mask-container end -->
                                </div><!-- .gallery-img end -->
                            </figure><!-- .gallery-item-container end -->
                        </li><!-- .isotope-item end -->
                        <li class="col-xs-6 col-md-3 isotope-item outdoor">
                            <figure class="gallery-item-container">
                                <div class="gallery-img">
                                    <img src="img/pics/pics-new/img- (24).png" alt="Fine Signature"/>

                                    <div class="hover-mask-container">
                                        <div class="hover-zoom">
                                            <a href="img/pics/pics-new/img- (24).png" class="triggerZoom fa fa-search"></a>
                                        </div><!-- .hover-zoom end -->
                                    </div><!-- .hover-mask-container end -->
                                </div><!-- .gallery-img end -->
                            </figure><!-- .gallery-item-container end -->
                        </li><!-- .isotope-item end -->
                        <li class="col-xs-6 col-md-3 isotope-item outdoor">
                            <figure class="gallery-item-container">
                                <div class="gallery-img">
                                    <img src="img/pics/pics-new/img- (25).png" alt="Fine Signature"/>

                                    <div class="hover-mask-container">
                                        <div class="hover-zoom">
                                            <a href="img/pics/pics-new/img- (25).png" class="triggerZoom fa fa-search"></a>
                                        </div><!-- .hover-zoom end -->
                                    </div><!-- .hover-mask-container end -->
                                </div><!-- .gallery-img end -->
                            </figure><!-- .gallery-item-container end -->
                        </li><!-- .isotope-item end -->
                        <li class="col-xs-6 col-md-3 isotope-item indoor">
                            <figure class="gallery-item-container">
                                <div class="gallery-img">
                                    <img src="img/pics/pics-new/img- (26).png" alt="Fine Signature"/>

                                    <div class="hover-mask-container">
                                        <div class="hover-zoom">
                                            <a href="img/pics/pics-new/img- (26).png" class="triggerZoom fa fa-search"></a>
                                        </div><!-- .hover-zoom end -->
                                    </div><!-- .hover-mask-container end -->
                                </div><!-- .gallery-img end -->
                            </figure><!-- .gallery-item-container end -->
                        </li><!-- .isotope-item end -->
                        <li class="col-xs-6 col-md-3 isotope-item indoor">
                            <figure class="gallery-item-container">
                                <div class="gallery-img">
                                    <img src="img/pics/pics-new/img- (27).png" alt="Fine Signature"/>

                                    <div class="hover-mask-container">
                                        <div class="hover-zoom">
                                            <a href="img/pics/pics-new/img- (27).png" class="triggerZoom fa fa-search"></a>
                                        </div><!-- .hover-zoom end -->
                                    </div><!-- .hover-mask-container end -->
                                </div><!-- .gallery-img end -->
                            </figure><!-- .gallery-item-container end -->
                        </li><!-- .isotope-item end -->
                        <li class="col-xs-6 col-md-3 isotope-item indoor">
                            <figure class="gallery-item-container">
                                <div class="gallery-img">
                                    <img src="img/pics/pics-new/img- (28).png" alt="Fine Signature"/>

                                    <div class="hover-mask-container">
                                        <div class="hover-zoom">
                                            <a href="img/pics/pics-new/img- (28).png" class="triggerZoom fa fa-search"></a>
                                        </div><!-- .hover-zoom end -->
                                    </div><!-- .hover-mask-container end -->
                                </div><!-- .gallery-img end -->
                            </figure><!-- .gallery-item-container end -->
                        </li><!-- .isotope-item end -->
                        <li class="col-xs-6 col-md-3 isotope-item outdoor">
                            <figure class="gallery-item-container">
                                <div class="gallery-img">
                                    <img src="img/pics/pics-new/img- (29).png" alt="Fine Signature"/>

                                    <div class="hover-mask-container">
                                        <div class="hover-zoom">
                                            <a href="img/pics/pics-new/img- (29).png" class="triggerZoom fa fa-search"></a>
                                        </div><!-- .hover-zoom end -->
                                    </div><!-- .hover-mask-container end -->
                                </div><!-- .gallery-img end -->
                            </figure><!-- .gallery-item-container end -->
                        </li><!-- .isotope-item end -->
                    </ul><!-- #galleryitems.isotope end -->
                </div><!-- .row end -->
            </div><!-- .container-fluid end -->
        </div><!-- .page-content end -->
        <?php
      
      include "assets/phphacks/footer.php";
      
      ?>

        <script src="js/jquery-2.1.4.min.js"></script><!-- jQuery library -->
        <script src="js/bootstrap.min.js"></script><!-- .bootstrap script -->
        <script src="js/jquery.scripts.min.js"></script><!-- modernizr, retina, stellar for parallax -->  
        <script src="js/gallery.js"></script><!-- for gallery -->
        <script src="js/jquery.dlmenu.min.js"></script><!-- for responsive menu -->
        <script src="js/include.js"></script><!-- custom js functions -->
        <script src="js/jquery.isotope.min.js"></script><!-- jQuery isotope plugin -->
        <script src="js/jquery.magnific-popup.min.js"></script><!-- used for image lightbox -->
        <script src="js/TweenMax.min.js"></script> <!-- Plugin for smooth scrolling-->
        <script src="js/ScrollToPlugin.min.js"></script> <!-- Plugin for smooth scrolling-->

        <script>
            /* <![CDATA[ */
            jQuery(document).ready(function ($) {
                'use strict';

                // BOOKING FORM AJAX SUBMIT START
                $('.otw-widget-form .otw-submit').on('click', function (event) {
                    event.preventDefault();
                    var $form = $(this).closest('form');

                    var name = $form.find('.otw-reservation-name').val();
                    var email = $form.find('.otw-reservation-email').val();
                    var date = $form.find('.otw-reservation-date').val();
                    var time = $form.find('.otw-reservation-time').val();
                    var guests = $form.find('.otw-party-size-select').val();
                    var form_data = new Array({'Name': name, 'Email': email, 'Date': date, 'Time': time, 'Guests': guests});
                    $.ajax({
                        type: 'POST',
                        url: "contact.php",
                        data: ({'action': 'book_table', 'form_data': form_data})
                    }).done(function (data) {
                        alert(data);
                    });
                }); // BOOKING FORM AJAX SUBMIT END


            });
            /* ]]> */
        </script>

    </body>


</html>
