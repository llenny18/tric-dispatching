<?php include("conn.php"); ?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Rider Register</title>
      <!-- Favicon -->
      <link rel="icon" href="assets/images/logo.png" type="image/x-icon" />
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

   <?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
   
    // Prepare SQL statement
    $sql = "INSERT INTO riders (name, address, rusername, rpassword, contact, email, vehicle_number, license_number, license_issued_date, license_expiry_date)
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

    // Prepare and bind parameters
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssssssssss", $name, $address, $rusername, $rpassword, $contact, $email, $vehicle_number, $license_number, $license_issued_date, $license_expiry_date);

    // Set parameters from POST data
    $name = $_POST['name'];
    $address = $_POST['home'];
    $rusername = $_POST['uname'];
    $rpassword = $_POST['pass'];
    $contact = $_POST['cnum'];
    $email = $_POST['email'];
    $vehicle_number = $_POST['plate'];
    $license_number = $_POST['lc'];
    $license_issued_date = $_POST['lv'];
    $license_expiry_date = $_POST['lv2'];

    // Execute the prepared statement
    if ($stmt->execute()) {
        echo '<script>alert("Register successful! Redirecting to login page."); window.location.href = "r-login.php";</script>';
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close statement and connection
    $stmt->close();
}
?>


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
                    <h4>Register Now</h4></div>
                <div class="contact-form-box margin-30px-top">
                    <div class="no-margin-lr" id="success-contact-form" style="display: none;"></div>
                    <form id="contactForm" method="post" class="contact-form">
                        <div class="row">
                            <div class="  col-sm-6 col-md-6">
                                <label for="name">Name</label>
                                <input type="text" class="medium-input" maxlength="70" placeholder="Name" required="required" id="name" name="name" >
                            </div>
                            <div class="  col-sm-6 col-md-6">
                                <label for="home">Home Address</label>
                                <input type="text" class="medium-input" maxlength="70" placeholder="Home Address" required="required" id="home" name="home" >
                            </div>
                            
                            <div class="  col-sm-6 col-md-6">
                                <label for="uname">Username</label>
                                <input type="text" class="medium-input" maxlength="70" placeholder="Username" required="required" id="uname" name="uname" >
                            </div>
                            <div class="  col-sm-6 col-md-6">
                                <label for="pass">Password</label>
                                <input type="text" class="medium-input" maxlength="70" placeholder="Password" required="required" id="pass" name="pass" >
                            </div>
                            <div class="  col-sm-6 col-md-6">
                                <label for="cnum">Contact Number</label>
                                <input type="text" class="medium-input" maxlength="70" placeholder="Contact Mumber" required="required" id="cnum" name="cnum" >
                            </div>
                            <div class="  col-sm-6 col-md-6">
                                <label for="email">Email</label>
                                <input type="email" class="medium-input" maxlength="70" placeholder="Email" required="required" id="email" name="email" >
                            </div>
                            <div class="  col-sm-6 col-md-6">
                                <label for="plate">Plate Number</label>
                                <input type="text" class="medium-input" maxlength="70" placeholder="Plate Number" required="required" id="plate" name="plate" >
                            </div>
                            <div class="  col-sm-6 col-md-6">
                                <label for="lc">License Number</label>
                                <input type="text" class="medium-input" maxlength="70" placeholder="License Number" required="required" id="lc" name="lc" >
                            </div>
                            <div class="  col-sm-6 col-md-6">
                                <label for="lv">License Issue Date</label>
                                <input type="date" class="medium-input" maxlength="70" placeholder="License Issue Date" required="required" id="lv" name="lv" >
                            </div>
                            <div class="  col-sm-6 col-md-6">
                                <label for="lv2">License Issue Expiry</label>
                                <input type="date" class="medium-input" maxlength="70" placeholder="License Issue Expiry" required="required" id="lv2" name="lv2" >
                            </div>
                            
                            <div class="col-md-12 sm-margin-30px-bottom">
                                <div class="top-contact wow fadeInRight text-left" style="visibility: visible; animation-name: fadeInRight;">
                           <button type="submit" id="#services" href="#services" class="btn btn-primary wow fadeInUp  js-scroll-trigger" data-wow-delay="1s" style="visibility: visible; animation-delay: 1s; animation-name: fadeInUp;">Save</button>
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