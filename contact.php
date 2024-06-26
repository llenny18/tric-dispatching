<?php include("conn.php"); ?>
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
                     <h5 class="wow fadeInUp main-h" data-wow-delay="0.2s" >Contact</h5>
                     <p class="banner-text wow fadeInUp main-h3" data-wow-delay="0.8s">No hours sank into aggregating and cleaning data. No complex SQL queries required. Just the answers <br> teams need to make smarter decisions, fast. Now, that's data-driven.</p>
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
            <div class="col-lg-6">
                <div class="section-heading left">
                    <h4>Let's Talk about Your Business</h4></div>
                <div class="contact-form-box margin-30px-top">
                    <div class="no-margin-lr" id="success-contact-form" style="display: none;"></div>
                    <form id="contactForm" method="post" class="contact-form" action="sendemail.php">
                        <div class="row">
                            <div class="col-md-12">
                                <input type="text" class="medium-input" maxlength="50" placeholder="Name *" required="required" id="name" name="name">
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-6">
                                <input type="email" class="medium-input" maxlength="70" placeholder="E-mail *" required="required" id="email" name="email">
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-6">
                                <input type="text" class="medium-input" maxlength="70" placeholder="Subject *" required="required" id="subject" name="subject">
                            </div>
                            <div class="col-md-12">
                                <textarea class="medium-textarea" rows="12" maxlength="1000" placeholder="Message *" required="required" id="message" name="message"></textarea>
                            </div>
                            <div class="col-md-12 sm-margin-30px-bottom">
                                <div class="top-contact wow fadeInRight text-left" style="visibility: visible; animation-name: fadeInRight;">
                           <a type="submit" id="#services" href="#services" class="btn btn-primary wow fadeInUp  js-scroll-trigger" data-wow-delay="1s" style="visibility: visible; animation-delay: 1s; animation-name: fadeInUp;">Send Message</a>
                        </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="contact-info-box padding-30px-left sm-no-padding">
                    <div class="row">
                        <div class="col-12">
                            <div class="contact-info-section no-padding-top margin-10px-top">
                                <h4>Get in Touch</h4>
                                <p> Tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse consequat.</p>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="contact-info-section">
                                <h4>The Office</h4>
                                <ul class="list-style-1 no-margin-bottom">
                                    <li>
                                        <p><i class="fa fa-phone text-center"></i> <strong>Address:</strong> Regina ST, London, SK 8GH.</p>
                                    </li>
                                    <li>
                                        <p><i class="fa fa-globe text-center"></i> <strong>Phone:</strong> (+44) 123 456 789</p>
                                    </li>
                                    <li>
                                        <p><i class="fa fa-envelope text-center"></i> <strong>Email:</strong> <a href="javascript:void(0)" class="email_color_site">email@youradress.com</a></p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="contact-info-section border-none no-padding-bottom no-margin-bottom">
                                <h4>Business Hours</h4>
                                <ul class="list-style-2">
                                    <li>Monday - Friday - 9am to 5pm</li>
                                    <li>Saturday - 9am to 2pm</li>
                                    <li>Sunday - Closed</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
   <!-- #contact  Area End -->



 <!--#Our maps  start -->
<section class="py_map_40">
   <div class="container-fluid p0">
      <div id="contatti" class=" maps">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d11880.492291371422!2d12.4922309!3d41.8902102!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x28f1c82e908503c4!2sColosseo!5e0!3m2!1sit!2sit!4v1524815927977" frameborder="0" style="border:0" allowfullscreen=""></iframe>
                     </div>
   </div>
</section>

  <!--#End maps   -->


   <!--#Our Partners start -->
<div class="our_partners_area py-45">
            <div class="container">
              
               <!--#Our Partners assets/images start -->
               <div class="partners  pt-0 p0wow fadeInUp">
                  <div class="item"><img src="assets/images/client_logo/client_logo-1.png" alt=""></div>
                  <div class="item"><img src="assets/images/client_logo/client_logo-2.png" alt=""></div>
                  <div class="item"><img src="assets/images/client_logo/client_logo-3.png" alt=""></div>
                  <div class="item"><img src="assets/images/client_logo/client_logo-4.png" alt=""></div>
                  <div class="item"><img src="assets/images/client_logo/client_logo-5.png" alt=""></div>
               </div>
               <!--#End Our Partners assets/images -->
              
            </div>
         </div>
      <!--#End Our Partners Area -->


      <!--#End contact-text  --> 
       <!--#start Our testimonial Area -->
    <div class="our_partners_area bg-grediunt">
         <div class="book_now_aera ">
            <div class="container">
               <div class="row book_now">
                  <div class="col-md-5 booking_text">
                     <h4>Full insight into the customer journey.<br>
                        No SQL required.
                     </h4>
                     <p>Get started for free to see who your customers are, what they do and what keeps them coming back.</p>
                  </div>
                  <div class="col-md-7 p0 book_bottun">
                     <div class="col-md-7">
                        
                     </div>
                     <div class="col-md-5">
                        <div class="top-banner wow fadeInRight text-left" style="visibility: visible; animation-name: fadeInRight;">
                           <a id="#services" href="contact.php" class="btn btn-primary wow fadeInUp  js-scroll-trigger" data-wow-delay="1s" style="visibility: visible; animation-delay: 1s; animation-name: fadeInUp;">CONTACT SALES</a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
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