<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Contact Page  </title>
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
                     <h5 class="wow fadeInUp main-h" data-wow-delay="0.2s" >Register as Rider</h5>
                
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
                    <h4>Input Your Personal Information</h4></div>
                <div class="contact-form-box margin-30px-top">
                    <div class="no-margin-lr" id="success-contact-form" style="display: none;"></div>
                    <form id="contactForm" method="post" class="contact-form" action="sendemail.php">
                        <div class="row">
                            <div class="col-xs-12 col-sm-6 col-md-6">
                                <input type="email" class="medium-input" maxlength="70" placeholder="Username" required="required" id="email" name="email">
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-6">
                                <input type="text" class="medium-input" maxlength="70" placeholder="Email" required="required" id="subject" name="subject">
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-6">
                                <input type="email" class="medium-input" maxlength="70" placeholder="Password" required="required" id="email" name="email">
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-6">
                                <input type="text" class="medium-input" maxlength="70" placeholder="Confirm Password" required="required" id="subject" name="subject">
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-6">
                                <input type="email" class="medium-input" maxlength="70" placeholder="Name" required="required" id="email" name="email">
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-6">
                                <input type="text" class="medium-input" maxlength="70" placeholder="Address" required="required" id="subject" name="subject">
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-6">
                                <input type="email" class="medium-input" maxlength="70" placeholder="Contact Number" required="required" id="email" name="email">
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-6">
                            <select class="medium-textarea" rows="12" maxlength="1000" required="required" id="message" name="message">

<option value="">Select Gender</option>
<option value="Male">Male</option>
<option value="Female">Female</option>
<option value="Prefer Not Say">Prefer Not Say</option>
</select>
                            </div>
                            <div class="col-md-12">
                               
                            </div>
                            <div class="col-md-12 sm-margin-30px-bottom">
                                <div class="top-contact wow fadeInRight text-left" style="visibility: visible; animation-name: fadeInRight;">
                           <a type="submit" id="#services" href="#services" class="btn btn-primary wow fadeInUp  js-scroll-trigger" data-wow-delay="1s" style="visibility: visible; animation-delay: 1s; animation-name: fadeInUp;">Register</a>
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
      <div class="our_footer_area">
         <div class="book_now_aera ">
            <div class="container">
               <div class="row book_now">
                  <div class="col-md-4">
                     <div class="">
                        <a class=" logo-biss" href="index.php"> <img src="assets/images/logo_img.png"></a>
                     </div>
                     <p class="footer-h">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                     <div class="bigpixi-footer-social">
                        <a href="" target="_blank"><i id="social-fb" class="fa fa-facebook-square fa-3x social"></i></a>
                        <a href="" target="_blank"><i id="social-tw" class="fa fa-twitter-square fa-3x social"></i></a>
                        <a href="" target="_blank"><i id="social-em" class="fa fa-instagram fa-3x social"></i></a>
                     </div>
                  </div>
                  <div class="col-md-1 ">
                  </div>
                  <div class="col-md-3">
                     <h2 class="footer-top">SOLUTIONS </h2>
                     <ul class="footer-menu">
                        <li><a href=""> SaaS    </a></li>
                        <li><a href=""> Mobile  </a> </li>
                        <li><a href="">Commerce    </a> </li>
                        <li><a href="">    Gaming    </a> </li>
                        <li><a href="">   Finance   </a> </li>
                        <li><a href="">         Media   </a></li>
                     </ul>
                  </div>
                  <div class="col-md-4">
                     <ul class="location">
                        <li class="footer-left-h"><i class="fa fa-map-marker"></i>505 Thornall St #301, Edison, <br>NJ 08837, USA</li>
                        <li class="footer-left-h"><i class="fa fa-phone"></i>Call Us <br>+1- 982-8-587 452
                           <br>+1- 982-8-587 452
                        </li>
                        <li class="footer-left-h"><i class="fa fa-envelope-o"></i>Email<br>
                           <a href=""> enquiry@demo.com </a></br><a href=""> enquiry@demo.com </a>
                        </li>
                        <p class="color-gray">  
                           <a href="https://themewagon.com/theme_tag/free/">Free HTML5 Templates</a> distributed by <a href="https://themewagon.com/">ThemeWagon</a> 
                        </p>
                     </ul>
                  </div>
                   <div class="col-md-12">
                    <p class="color-gray">  <a href="https://www.navthemes.com/free-html-templates/">Free HTML Template</a> by <a href="https://www.navthemes.com">NavThemes </a> </p>
                  </div>
               </div>
            </div>
         </div>
      </div>
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