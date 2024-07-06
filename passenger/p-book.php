<?php include("conn.php"); ?>
<!DOCTYPE html>
<html lang="en">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Book a Dispatch</title>
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

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $passenger_id = $_SESSION["p_id"]; // Assuming passenger_id is 1 for demo purposes
    $rider_id = $_POST['rider'];
    $origin = $_POST['pickup'];

    $destination = $_POST['destination'];


    $sqlpi = "SELECT * FROM dispatch_locations  where dispatch_location_id = {$_POST['pickup']} ";
    $resultpi = $conn->query($sqlpi);

    $row_pi = $resultpi->fetch_assoc();
    $sqldi = "SELECT * FROM dispatch_locations  where dispatch_location_id = {$_POST['destination']} ";
    $resultdi = $conn->query($sqldi);
    $row_di = $resultdi->fetch_assoc();


    $latitudeFrom = $row_pi['latitude'];
    $longitudeFrom = $row_pi['longtitude'];
    $latitudeTo = $row_di['latitude'];
    $longitudeTo = $row_di['longtitude'];

    $fare = (haversineGreatCircleDistance($latitudeFrom, $longitudeFrom, $latitudeTo, $longitudeTo)) * 40; // Assuming fare is 100 for demo purposes
    $status = 'pending';
    $d_time = $_POST['time'];
    $d_date = $_POST['date'];
    $payment_method = $_POST['payment'];
    $payment_status = 'unpaid'; // Assuming payment status is 'unpaid' for demo purposes

    $sql = "INSERT INTO dispatches (passenger_id, rider_id, origin, destination, fare, status, d_time, d_date, payment_method, payment_status) 
            VALUES ('$passenger_id', '$rider_id', '$origin', '$destination', '$fare', '$status', '$d_time', '$d_date', '$payment_method', '$payment_status')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Booking successful!'); window.location.href='index.php';</script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
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
                                <h5 class="wow fadeInUp main-h" data-wow-delay="0.2s">Book as Dispatch</h5>
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
                            <h4>Select Your Booking Details</h4>
                        </div>
                        <div class="contact-form-box margin-30px-top">
                            <div class="no-margin-lr" id="success-contact-form" style="display: none;"></div>
                            <form id="contactForm" method="post" class="contact-form" >
                                <div class="row">
                                    <div class="col-sm-6 col-md-6">
                                        <label for="rider">Rider</label>
                                        <select class="medium-textarea" rows="12" maxlength="1000" required="required" id="rider" name="rider">
                                            <option value="">Select Rider</option>
                                            <?php
                                            $sqlr = "SELECT * FROM riders ";
                                            $resultrider = $conn->query($sqlr);
                                            while ($riders = $resultrider->fetch_assoc()) {
                                            ?>
                                                <option value="<?= $riders['rider_id']; ?>"><?= $riders['name']; ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                    <div class=" col-sm-6 col-md-6">
                                        <label for="date">Date of Booking</label>
                                        <input type="date" class="medium-input" maxlength="70" placeholder="Date" required="required" id="date" name="date">
                                    </div>
                                    <div class="  col-sm-6 col-md-6">
                                        <label for="time">Time of Booking</label>
                                        <input type="time" class="medium-input" maxlength="70" placeholder="Time" required="required" id="time" name="time">
                                    </div>
                                    <div class="  col-sm-6 col-md-6">
                                        <label for="pickup">Pickup Location</label>
                                        <select class="medium-textarea" rows="12" maxlength="1000" required="required" id="pickup" name="pickup">
                                            <option value="">Select Pickup Place</option>
                                            <?php
                                            $sqld = "SELECT * FROM dispatch_locations ";
                                            $resultplace = $conn->query($sqld);
                                            while ($places = $resultplace->fetch_assoc()) {
                                            ?>
                                                <option value="<?= $places['dispatch_location_id']; ?>"><?= $places['location_name']; ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                    <div class="  col-sm-6 col-md-6">
                                        <label for="destination">Destination Location</label>
                                        <select class="medium-textarea" rows="12" maxlength="1000" required="required" id="destination" name="destination">
                                            <option value="">Select Destination Place</option>
                                            <?php
                                            $sqld = "SELECT * FROM dispatch_locations ";
                                            $resultplace = $conn->query($sqld);
                                            while ($places = $resultplace->fetch_assoc()) {
                                            ?>
                                                <option value="<?= $places['dispatch_location_id']; ?>"><?= $places['location_name']; ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                    <div class="  col-sm-6 col-md-6">
                                        <label for="payment">Payment Method</label>
                                        <select class="medium-textarea" rows="12" maxlength="1000" required="required" id="payment" name="payment">
                                            <option value="">Select Payment Method</option>
                                            <option value="Cash">Cash</option>
                                            <option value="Maya">Maya</option>
                                            <option value="Gcash">Gcash</option>
                                        </select>
                                    </div>
                                    <div class="col-md-12 sm-margin-30px-bottom">
                                        <div class="top-contact wow fadeInRight text-left" style="visibility: visible; animation-name: fadeInRight;">
                                            <button type="submit" id="#services" href="#services" class="btn btn-primary wow fadeInUp js-scroll-trigger" data-wow-delay="1s" style="visibility: visible; animation-delay: 1s; animation-name: fadeInUp;">Confirm Booking</button>
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
