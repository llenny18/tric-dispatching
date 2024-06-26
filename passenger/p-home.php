<?php include("conn.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>Tric Dispatching Web App</title>
   <!-- Favicon -->

   <!-- Bootstrap CSS -->
   <link href="assets/css/bootstrap.min.css" rel="stylesheet">
   <!-- Animate CSS -->
   <link href="assets/vendors/animate/animate.css" rel="stylesheet">
   <!-- Icon CSS-->
   <link rel="stylesheet" href="assets/vendors/font-awesome/css/font-awesome.min.css">
   <!-- Owlcarousel CSS-->
   <link rel="stylesheet" type="text/css" href="assets/vendors/owl_carousel/owl.carousel.css" media="all">
   <!--Template Styles CSS-->
   <link rel="stylesheet" type="text/css" href="assets/css/style.css" media="all" />
   <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">
</head>

<body>
   <div class="bg-grediunt">
      <div class="bg-banner-img clip-ellipse">
         <div class="ovrllay">

            <!-- Header_Area -->
            <?php include("./nav.php"); ?>
            <!-- End Header_Area -->
            <!-- #banner start -->
            <section id="banner" class=" mb-90">
               <div class="container ">
                  <div class="row">
                     <!-- #banner-text start -->
                     <div id="banner-text" class="col-md-12 text-c text-center ">
                        <h5 class="wow fadeInUp main-h" data-wow-delay="0.2s">Hello User: </h5>
                        <p class="banner-text wow fadeInUp main-h3" data-wow-delay="0.8s">Feel free to book reservations now</p>
                        <div class="top-banner wow fadeInRight">
                           <a id="#services" href="p-profile.php" class="btn btn-default  wow fadeInUp  js-scroll-trigger" data-wow-delay="1s" href="#">User Profile</a>
                           <a id="#services" href="p-book.php" class="btn btn-success  wow fadeInUp  js-scroll-trigger" data-wow-delay="1s" href="#">Book Now!</a>
                        </div>
                     </div>
                     <!-- /#banner-text End -->
                  </div>
               </div>
            </section>
         </div>
      </div>


   </div>
   <!--#End Our Partners Area -->
   <!-- #About Us Area start -->
   <div id="about" class="back-right-text-c">
   <div class="container">
      
      <div class="row about_row py-40">
         <!--#about-text start -->
         <div class="who_we_area col-md-4 col-sm-6 col-4pad wow fadeInUp">
            <div class="service-1">
               <div class="servise-top wow fadeInUp">
                  <img src="assets/images/icone-1.png">
               </div>
               <h2 class="unify">Deactivate Account</h2>
               <p class="bottom-s">Deactivate your account and void all bookings.</p>
               
            </div>
         </div>
         <div class="who_we_area col-md-4 col-sm-6 col-4pad wow fadeInUp">
            <div class="service-1">
               <div class="servise-top wow fadeInUp">
                  <img src="assets/images/icone-2.png">
               </div>
               <h2 class="unify"> Change Password </h2>
               <p class="bottom-s">Change your password now.</p>
               
            </div>
         </div>
         <div class="who_we_area col-md-4 col-sm-6 col-4pad wow fadeInUp">
            <div class="service-1">
               <div class="servise-top wow fadeInUp">
                  <img src="assets/images/icone-3.png">
               </div>
               <h2 class="unify"> My Bookings </h2>
               <p class="bottom-s">View your bookings from current to past transactions.</p>
               
            </div>
         </div>
         <!--#End about-text  -->
      </div>
   </div>
  
</div>


   <!-- End About Us Area -->

   <!--#start Our footer Area -->
 <?php include("./footer.php") ?>
   <!--#End Our footer Area -->
   <!-- The following is only needed when the video is in the html
         otherwise the who .hero__overlay html can be removed -->

   <!-- /.hero__overlay -->
   <!-- jQuery JS -->
   <script src="assets/js/jquery-1.12.0.min.js"></script>
   <!-- Bootstrap JS -->
   <script src="assets/js/bootstrap.min.js"></script>
   <script src="assets/vendors/popup/lightbox.min.js"></script>
   <!-- Animate JS -->
   <script src="assets/vendors/animate/wow.min.js"></script>
   <!-- Owlcarousel JS -->
   <script src="assets/vendors/owl_carousel/owl.carousel.min.js"></script>
   <!-- Stellar JS -->

   <!-- Theme JS -->
   <script src="assets/js/theme.min.js"></script>
</body>

</html>