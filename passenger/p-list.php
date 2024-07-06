<?php include("conn.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>Passenger Bookings List</title>
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
   <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.18/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.jqueryui.min.css">
   
</head>

<?php
if(isset($_POST['pay_now'])){
   $dispatch_id = $_POST['dis_id']; // Replace with the actual dispatch_id




   $target_dir = "uploads/";
   $target_file = $target_dir . basename($_FILES["pay_proof"]["name"]);
   $uploadOk = 1;
   $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

   // Check if image file is an actual image or fake image
   $check = getimagesize($_FILES["pay_proof"]["tmp_name"]);
   if ($check !== false) {
       $uploadOk = 1;
   } else {
       echo "<script>alert('File is not an image.'); window.location.href='p-list.php';</script>";
       $uploadOk = 0;
   }

   // Check if file already exists
   if (file_exists($target_file)) {
       echo "<script>alert('Sorry, file already exists.'); window.location.href='p-list.php';</script>";
       $uploadOk = 0;
   }

   // Check file size
   if ($_FILES["pay_proof"]["size"] > 5000000) { // 5MB limit
       echo "<script>alert('Sorry, your file is too large.'); window.location.href='p-list.php';</script>";
       $uploadOk = 0;
   }

   // Allow certain file formats
   if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
   && $imageFileType != "gif" ) {
       echo "<script>alert('Sorry, only JPG, JPEG, PNG & GIF files are allowed.'); window.location.href='p-list.php';</script>";
       $uploadOk = 0;
   }

   // Check if $uploadOk is set to 0 by an error
   if ($uploadOk == 0) {
       echo "<script>alert('Sorry, your file was not uploaded.'); window.location.href='p-list.php';</script>";
   // if everything is ok, try to upload file
   } else {
       if (move_uploaded_file($_FILES["pay_proof"]["tmp_name"], $target_file)) {
         

           // Prepare the SQL statement
   $sql = "UPDATE dispatches SET payment_proof='".basename( $_FILES["pay_proof"]["name"])."' WHERE dispatch_id=?";
   
   // Prepare statement
   $stmt = $conn->prepare($sql);
   
   // Bind the parameters
   $stmt->bind_param("i", $dispatch_id);
   
   // Execute the statement
   if ($stmt->execute()) {
      echo '<script>alert("Payment Proof Uploaded! Redirecting to bookings page."); window.location.href = "p-list.php";</script>';
   } else {
      echo '<script>alert("Error in update.");</script>';
   }
       } else {
           echo "<script>alert('Sorry, there was an error uploading your file.'); window.location.href='p-list.php';</script>";
       }
   }

   
}




?>



<?php
if(isset($_GET['can_id']) ){

      $dispatch_id = $_GET['can_id']; // Replace with the actual dispatch_id

      // Prepare the SQL statement
      $sql = "UPDATE dispatches SET `status`='cancelled' WHERE dispatch_id=?";
      
      // Prepare statement
      $stmt = $conn->prepare($sql);
      
      // Bind the parameters
      $stmt->bind_param("i", $dispatch_id);
      
      // Execute the statement
      if ($stmt->execute()) {
         echo '<script>alert("Dispatch Successfully Cancelled! Redirecting to bookings page."); window.location.href = "p-list.php";</script>';
      } else {
         echo '<script>alert("Error in update.");</script>';
      }

    }
    else{
   ?>
<body>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
 
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
                        <h5 class="wow fadeInUp main-h" data-wow-delay="0.2s">Your Bookings</h5>

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
                    <th>Rider</th>
                    <th>Plate Number</th>
                    <th>Date and Time</th>
                    <th>Pickup and Destination</th>
                    <th>Fare</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
           <?php 
             $sqlb = "SELECT * FROM desinations_view where passenger_id = {$_SESSION['p_id']} ";
             $resultb = $conn->query($sqlb);
           while ($books = $resultb->fetch_assoc()) {

                                            ?>



<div class="modal fade" id="imageModal<?= $books['dis_id'] ?>" tabindex="-1" aria-labelledby="imageModalLabel" aria-hidden="true">
    <div class="modal-dialog">
<form action="" method="post" enctype="multipart/form-data">
<div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="imageModalLabel">Pay Now!</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="form-group">
              <label for="imageInput">Dispatch ID:</label>
              <input type="text" name="dis_id" class="form-control-file" readonly id="imageInput" value="<?= $books['dis_id'] ?>">
            </div>
            <div class="form-group">
              <label for="imageInput">Select image:</label>
              <input type="file" name="pay_proof" class="form-control-file" id="imageInput" accept="image/*">
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" name="pay_now" class="btn btn-primary">Upload</button>
        </div>
      </div>
</form>
</div>
  </div>
</div>



 <tr>
                    <td><?= $books['rider_name'].": ".$books['r_contact'] ?></td>
                    <td><?= $books['vehicle_number'] ?></td>
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
                    <td><?= $books['status'] ?></td>
                    <td>

                    <?php if($books['status']=="pending"){ ?>
                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#imageModal<?= $books['dis_id'] ?>">
Pay</button>
                    
                    <a href="p-list.php?can_id=<?= $books['dis_id'] ?>" class="btn btn-danger">Cancel</a>
                  
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

<?php   } ?>
</html>