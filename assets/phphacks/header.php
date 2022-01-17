 <?php if ($title == "index") {
        echo "current-menu-item";
    } ?>

 <!-- .header-wrapper start -->
 <div id="header-wrapper">
     <!-- #header start -->
     <header id="header">

         <!-- Main navigation and logo container -->
         <div class="header-inner">
             <!-- .container start -->
             <div class="container">
                 <!-- .main-nav start -->
                 <div class="main-nav">
                     <!-- .row start -->
                     <div class="row">
                         <div class="col-md-12">
                             <!-- .navbar start -->
                             <nav class="navbar  nav-left">

                                 <!-- .navbar-header start -->
                                 <div class="navbar-header">
                                     <!-- .logo start -->
                                     <div class="logo">
                                         <a href="index.php">
                                             <img src="img/logo-large.png" width="150px" alt="Fine Signature">
                                         </a>
                                     </div><!-- logo end -->
                                 </div><!-- .navbar-header end -->

                                 <!-- Collect the nav links, forms, and other content for toggling -->
                                 <div class="collapse navbar-collapse">
                                     <ul class="nav navbar-nav pi-nav">
                                         <li class=" <?php if ($title == 'home') {
                                                            echo 'current-menu-item';
                                                        } ?> ">
                                             <a href="index.php">Home</a>
                                             <!-- <ul class="dropdown-menu">
                                                        <li class="current-menu-item"><a href="index.php">Home page</a></li>
                                                        <li><a href="elements.php">Template elements</a></li>
                                                        <li><a href="locations.php">Intro page</a></li>
                                                    </ul> -->
                                         </li>

                                         <li class=" <?php if ($title == 'about') {
                                                            echo 'current-menu-item';
                                                        } ?> ">
                                             <a href="about.php">About</a>

                                         </li>
                                         <li class="dropdown  <?php if ($title == 'services') {
                                                                    echo 'current-menu-item';
                                                                } ?> ">
                                             <a href="#">Services</a>
                                             <ul class="dropdown-menu">
                                                 <li><a href="reservations.php">Reservations</a></li>
                                                 <li><a href="catering.php">Catering</a></li>

                                             </ul><!-- .dropdown-menu end -->
                                         </li>


                                         <!-- <li>
                                                    <a href="reservations.php">Reservations</a>                                          
                                                </li>
                                                <li class="dropdown">
                                                    <a href="catering.php">Catering</a> 
                                                    <ul class="dropdown-menu">
                                                        <li><a href="catering.php">Catering page</a></li>
                                                        <li><a href="catering-single-page.php">Catering single page</a></li>
                                                    </ul>
                                                </li> -->
                                         <li class=" <?php if ($title == 'Gallery') {
                                                            echo 'current-menu-item';
                                                        } ?> ">
                                             <a href="gallery.php">Gallery</a>
                                         </li>
                                       
                                         <!-- <li>
                                                    <a href="blog.php">Blog</a>                                          
                                                </li> -->
                                         <li class=" <?php if ($title == 'contact') {
                                                            echo 'current-menu-item';
                                                        } ?> ">
                                             <a href="contact.php">Contact</a>
                                         </li>
                                     </ul><!-- .nav.navbar-nav.pi-nav end -->

                                     <!-- Responsive menu start -->
                                     <div id="dl-menu" class="dl-menuwrapper">
                                         <button class="dl-trigger">Open Menu</button>

                                         <ul class="dl-menu">
                                             <li>
                                                 <a href="index.php">Home</a>
                                                 <!-- <ul class="dl-submenu">
                                                            <li><a href="index.php">Home page</a></li>
                                                            <li><a href="elements.php">Template elements</a></li>
                                                            <li><a href="locations.php">Intro page</a></li>
                                                        </ul> -->
                                             </li><!-- Home li end -->

                                             <li>
                                                 <a href="about.php">About</a>

                                             </li><!-- About li end -->

                                             <li>
                                                 <a href="">Services</a>
                                                 <ul class="dl-submenu">
                                                     <li><a href="reservation.php">Reservations</a></li>
                                                     <li><a href="catering.php">Catering</a></li>
                                                 </ul><!-- .dl-submenu end -->
                                             </li><!-- Menu li end -->



                                             <li>
                                                 <a href="gallery.php">Gallery</a>
                                             </li><!-- Gallery li end -->

                                           

                                             <li>
                                                 <a href="contact.php">Contact</a>
                                             </li><!-- Contact li end -->

                                         </ul><!-- .dl-menu end -->
                                     </div><!-- (Responsive menu) #dl-menu end -->
                                 </div><!-- .navbar.navbar-collapse end -->
                             </nav><!-- .navbar end -->
                         </div><!-- .col-md-12 end -->
                     </div><!-- .row end -->
                 </div><!-- .main-nav end -->
             </div><!-- .container end -->
         </div><!-- .header-inner end -->
     </header><!-- #header end -->
 </div><!-- #header-wrapper end -->