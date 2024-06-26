<?php include("conn.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>Rider Login</title>
   <!-- Favicon -->
   <link rel="icon" href="assets/images/favicon.png" type="image/x-icon" />
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
   <div class="bg-all">
      <div class="bg-banner-img clip-ellipse">
         <div class="ovrllay">

            <!-- Header_Area -->
            <?php include("./nav.php"); ?>
            <!-- End Header_Area -->
            <!-- #banner start -->
            <section id="banner" class="pt-0">
               <div class="container ">
                  <div class="row wow fadeInUp">
                     <!-- #banner-text start -->
                     <div id="banner-text" class="col-md-12 text-c text-center ">
                        <h5 class="wow fadeInUp main-h" data-wow-delay="0.2s">Login as Rider</h5>

                     </div>
                     <!-- /#banner-text End -->
                  </div>
               </div>
            </section>
         </div>
      </div>
      <!-- /#banner end -->
      <!-- #contact  Area start -->
      <section>
         <div class="container">
            <div class="row">
               <div class="col-lg-12">
                  <div class="section-heading left">
                     <h4>Input Credentials</h4>
                  </div>
                  <div class="contact-form-box margin-30px-top">
                     <div class="no-margin-lr" id="success-contact-form" style="display: none;"></div>
                     <form id="contactForm" method="post" class="contact-form" action="sendemail.php">
                        <div class="row">
                           <div class="col-xs-12 col-sm-6 col-md-6">
                              <input type="email" class="medium-input" maxlength="70" placeholder="Username" required="required" id="email" name="email">
                           </div>
                           <div class="col-xs-12 col-sm-6 col-md-6">
                              <input type="text" class="medium-input" maxlength="70" placeholder="Password" required="required" id="subject" name="subject">
                           </div>
                          
                           <div class="col-md-12 sm-margin-30px-bottom">
                              <div class="top-contact wow fadeInRight text-left" style="visibility: visible; animation-name: fadeInRight;">
                                 <a type="submit" id="#services" href="#services" class="btn btn-primary wow fadeInUp  js-scroll-trigger m-5" data-wow-delay="1s" style="visibility: visible; animation-delay: 1s; animation-name: fadeInUp;">Login</a>
                              
                                 <a type="submit" id="#services" href="r-register.php" class="btn btn-primary wow fadeInUp  js-scroll-trigger" data-wow-delay="1s" style="visibility: visible; animation-delay: 1s; animation-name: fadeInUp;">No Account? Register Now!</a>
                              </div>
                           </div>
                        </div>
                     </form>
                  </div>
               </div>

            </div>
         </div>
      </section>

      <!--#End Our testimonial Area -->
      <!--#start Our footer Area -->
       <?php include("./footer.php") ?>
      <!--#End Our footer Area -->
      <!-- jQuery JS -->
      <script src="assets/js/jquery-1.12.0.min.js"></script>
      <script src="assets/vendors/popup/lightbox.min.js"></script>
      <!-- Bootstrap JS -->
      <script src="assets/js/bootstrap.min.js"></script>
      <!-- Animate JS -->
      <script src="assets/vendors/animate/wow.min.js"></script>

      <script src="assets/vendors/owl_carousel/owl.carousel.min.js"></script>

      <!-- Theme JS -->
      <script src="assets/js/theme.min.js"></script>
</body>

</html>