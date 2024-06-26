<?php include("conn.php"); ?>
<!DOCTYPE html>
<html lang="en">

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Passenger Register</title>
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
<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect data from the form
    $pusername = $_POST['uname'];
    $ppassword = $_POST['pass'];
    $name = $_POST['name'];
    $home_address = $_POST['home'];
    $work_address = $_POST['work'];
    $contact = $_POST['cnum'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];

    // Prepare and bind
    $stmt = $conn->prepare("UPDATE passengers SET name=?, home_address=?, work_address=?, ppassword=?, contact=?, email=?, gender=?, pusername=? WHERE pusername=?");
    $stmt->bind_param("sssssssss", $name, $home_address, $work_address, $ppassword, $contact, $email, $gender, $pusername, $pusername);

    // Execute the query
    if ($stmt->execute()) {
        echo '<script>alert("Update successful!"); window.location.href = "p-home.php";</script>';
    } else {
        echo "Error updating record: " . $stmt->error;
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
                                <h5 class="wow fadeInUp main-h" data-wow-delay="0.2s">Register as Passenger</h5>

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
                            <h4> Your Personal Information</h4>
                        </div>
                        <div class="contact-form-box margin-30px-top">
                            <div class="no-margin-lr" id="success-contact-form" style="display: none;"></div>
                            <form id="contactForm" method="post" class="contact-form" >
                                <div class="row">
                                    <div class="col-xs-12 col-sm-6 col-md-6">
                                        <label for="uname">Username</label>
                                        <input type="text" class="medium-input" placeholder="Username" value="<?= $row_p['pusername'] ?>" required id="uname" name="uname">
                                    </div>
                                    <div class="col-xs-12 col-sm-6 col-md-6">
                                        <label for="pass">Password</label>
                                        <input type="text" class="medium-input" placeholder="Password" value="<?= $row_p['ppassword'] ?>" required id="pass" name="pass">
                                    </div>
                                    <div class="col-xs-12 col-sm-6 col-md-6">
                                        <label for="name">Name</label>
                                        <input type="text" class="medium-input" placeholder="Name" value="<?= $row_p['name'] ?>" required id="name" name="name">
                                    </div>
                                    <div class="col-xs-12 col-sm-6 col-md-6">
                                        <label for="home">Home Address</label>
                                        <input type="text" class="medium-input" placeholder="Home Address" value="<?= $row_p['home_address'] ?>" required id="home" name="home">
                                    </div>
                                    <div class="col-xs-12 col-sm-6 col-md-6">
                                        <label for="work">Work Address</label>
                                        <input type="text" class="medium-input" placeholder="Work Address<" value="<?= $row_p['work_address'] ?>" required id="work" name="work">
                                    </div>
                                    <div class="col-xs-12 col-sm-6 col-md-6">
                                        <label for="cnum">Contact Number</label>
                                        <input type="text" class="medium-input" placeholder="Contact" value="<?= $row_p['contact'] ?>" required id="cnum" name="cnum">
                                    </div>
                                    <div class="col-xs-12 col-sm-6 col-md-6">
                                        <label for="email">Email</label>
                                        <input type="email" class="medium-input" placeholder="Email" value="<?= $row_p['email'] ?>" required id="email" name="email">
                                    </div>

                                    <div class="col-xs-12 col-sm-6 col-md-6">
                                        <label for="gender">Gender</label>
                                        <select class="medium-textarea" rows="12" maxlength="1000" required id="gender" name="gender">

                                            <option value="">Select Gender</option>
                                            <option value="Male" <?php if ($row_p['gender'] == "Male") {
                                                                        echo " selected ";
                                                                    } ?>>Male</option>
                                            <option value="Female" <?php if ($row_p['gender'] == "Female") {
                                                                        echo " selected ";
                                                                    } ?>>Female</option>
                                            <option value="etc" <?php if ($row_p['gender'] == "etc") {
                                                                    echo " selected ";
                                                                } ?>>Prefer Not Say</option>
                                        </select>
                                    </div>
                                    <div class="col-md-12">

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