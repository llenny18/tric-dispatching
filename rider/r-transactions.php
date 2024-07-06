<?php include("conn.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>Rider Transactions List</title>
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
   <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.18/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.jqueryui.min.css">
   
</head>

<?php
if(isset($_GET['pay_id']) || isset($_GET['acp_id']) || isset($_GET['rej_id']) || isset($_GET['fin_id']) ){

   if(isset($_GET['pay_id']) ){
      $dispatch_id = $_GET['pay_id']; // Replace with the actual dispatch_id

      // Prepare the SQL statement
      $sql = "UPDATE dispatches SET payment_status='paid' WHERE dispatch_id=?";
      
      // Prepare statement
      $stmt = $conn->prepare($sql);
      
      // Bind the parameters
      $stmt->bind_param("i", $dispatch_id);
      
      // Execute the statement
      if ($stmt->execute()) {
         echo '<script>alert("Payment Accepted! Redirecting to bookings page."); window.location.href = "r-list.php";</script>';
      } else {
         echo '<script>alert("Error in update.");</script>';
      }
   }
   else if(isset($_GET['acp_id']) ){
      $dispatch_id = $_GET['acp_id']; // Replace with the actual dispatch_id

      // Prepare the SQL statement
      $sql = "UPDATE dispatches SET `status`='accepted' WHERE dispatch_id=?";
      
      // Prepare statement
      $stmt = $conn->prepare($sql);
      
      // Bind the parameters
      $stmt->bind_param("i", $dispatch_id);
      
      // Execute the statement
      if ($stmt->execute()) {
         echo '<script>alert("Dispatch Accepted! Redirecting to bookings page."); window.location.href = "r-list.php";</script>';
      } else {
         echo '<script>alert("Error in update.");</script>';
      }
   }
   else if(isset($_GET['rej_id']) ){
      $dispatch_id = $_GET['rej_id']; // Replace with the actual dispatch_id

      // Prepare the SQL statement
      $sql = "UPDATE dispatches SET `status`='cancelled' WHERE dispatch_id=?";
      
      // Prepare statement
      $stmt = $conn->prepare($sql);
      
      // Bind the parameters
      $stmt->bind_param("i", $dispatch_id);
      
      // Execute the statement
      if ($stmt->execute()) {
         echo '<script>alert("Dispatch Rejected! Redirecting to bookings page."); window.location.href = "r-list.php";</script>';
      } else {
         echo '<script>alert("Error in update.");</script>';
      }
   }
   else if(isset($_GET['fin_id']) ){
      $dispatch_id = $_GET['fin_id']; // Replace with the actual dispatch_id

      // Prepare the SQL statement
      $sql = "UPDATE dispatches SET `status`='completed' WHERE dispatch_id=?";
      
      // Prepare statement
      $stmt = $conn->prepare($sql);
      
      // Bind the parameters
      $stmt->bind_param("i", $dispatch_id);
      
      // Execute the statement
      if ($stmt->execute()) {
         echo '<script>alert("Dispatch Finished Successfully! Redirecting to bookings page."); window.location.href = "r-list.php";</script>';
      } else {
         echo '<script>alert("Error in update.");</script>';
      }
   }


}

else{




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
                        <h5 class="wow fadeInUp main-h" data-wow-delay="0.2s">List of All Your Transactions</h5>

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
                     <h4>Bookings List</h4>
                  </div>
                  <div class="contact-form-box margin-30px-top">
                     <div class="no-margin-lr" id="success-contact-form" style="display: none;"></div>
                     
                     <table id="dataTable3" class="display" >
            <thead>
                <tr>
                    <th>Passenger</th>
                    <th>Contact Details</th>
                    <th>Date and Time</th>
                    <th>Pickup and Destination</th>
                    <th>Fare</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
           <?php 
             $sqlb = "SELECT * FROM desinations_view where rider_id = {$_SESSION['r_id']} ";
             $resultb = $conn->query($sqlb);
           while ($books = $resultb->fetch_assoc()) {
                                            ?>
 <tr>
                    <td><?= $books['passenger_name'] ?></td>
                    <td><?= $books['p_contact']." - ".$books['p_email'];  ?></td>
                    <td><?php $dateString = $books['d_date'] . ' ' . $books['d_time'];
$date = new DateTime($dateString);
$formattedDate = $date->format('F j, Y \a\t g:i a');

echo $formattedDate;
?></td>
                    <td><?php
                     $sql = "SELECT * FROM dispatch_locations  where dispatch_location_id = {$books['origin']} ";
                     $result = $conn->query($sql);
                     $row_p1 = $result->fetch_assoc();

                     $sql = "SELECT * FROM dispatch_locations  where dispatch_location_id = {$books['destination']} ";
$result = $conn->query($sql);
$row_p2 = $result->fetch_assoc();

echo $row_p1['location_name']." => ". $row_p2['location_name'];
                    
                    ?></td>
                    <td><?= $books['fare'] ?></td>
                    <td>
                     <?php if($books['status']=="pending" && $books['payment_status']!="paid"){ ?>
                     <a href="r-list.php?pay_id=<?= $books['dis_id']; ?>" class="btn btn-primary">Payment Received</a>
                     <?php } ?>
                     <?php if($books['payment_status']=="paid" && $books['status']=="pending"){ ?>
                     <a href="r-list.php?acp_id=<?= $books['dis_id']; ?>" class="btn btn-success">Accept Dispatch</a>
                     <?php } ?>
                     <?php if($books['status']=="pending"){ ?>
                     <a href="r-list.php?rej_id=<?= $books['dis_id']; ?>" class="btn btn-danger">Reject Dispatch</a>
                     <?php } ?>
                     <?php if($books['status']=="accepted"){ ?>
                     <a href="r-list.php?fin_id=<?= $books['dis_id']; ?>" class="btn btn-success">Passenger Dispatched</a>
                     <?php } else if($books['status']=="cancelled"){ ?>
                      <h4 class="text-danger">The Dispatch is Cancelled</h4>
                    <?php } else if($books['status']=="rejected"){ ?>
                      <h4 class="text-danger">The Dispatch is Rejected</h4>
                    <?php } else if($books['status']=="completed"){ ?>
                      <h4 class="text-success">The Dispatch is Completed</h4>
                    <?php } ?>
                     </td>
                    </tr>
                                            <?php } ?>
               
                
                <!-- Add more rows as needed -->
            </tbody>
        </table>
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

    
    <!-- jQuery -->
    <script type="text/javascript" charset="utf8" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- DataTables JS -->
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
    <script src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.3/js/responsive.bootstrap.min.js"></script>
    <script>
      if ($('#dataTable3').length) {
        $('#dataTable3').DataTable({
            responsive: true
        });
    }
    </script>
   
</body>

<?php

   }

   ?>
</html>