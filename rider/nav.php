<nav class="navbar navbar-default header_aera affix-top">
                  <div class="container m-s">
                     <!-- Brand and toggle get grouped for better mobile display -->
                     <div class="col-md-4 p0">
                        <div class="navbar-header">
                           <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#min_navbar">
                           <span class="sr-only">Toggle navigation</span>
                           <span class="icon-bar"></span>
                           <span class="icon-bar"></span>
                           <span class="icon-bar"></span>
                           </button>
                           <a class="navbar-brand logo-biss" href="index.php"> <img style="width: 200px;" src="assets/images/logo_img.png"></a>
                        </div>
                     </div>
                     <!-- Collect the nav links, forms, and other content for toggling -->
                     <div class="col-md-8 p0">
                        <div class="collapse navbar-collapse" id="min_navbar">
                          <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown submenu">
                           <a href="index.php" class="">Home</a>
                        </li>
                         <li class="dropdown submenu">
                           <a href="r-list.php" class="">Bookings</a>
                        </li>
                        <?php if(isset($_SESSION["r_id"])){ ?>
                        <li class="dropdown submenu">
                           <a href="r-profile.php" class=""> Profile</a>
                        </li>
                        <li class="dropdown submenu">
                           <a href="r-logout.php" class=""> Logout</a>
                        </li>
                        <?php } ?>
                       
                      
                     </ul>
                        </div>
                        <!-- /.navbar-collapse -->
                     </div>
                  </div>
                  <!-- /.container -->
               </nav>



               <?php

if(!isset($_SESSION["r_id"]) ){
   if($_SERVER['REQUEST_URI'] != "/tric-dispatching/rider/r-login.php"){
   echo '<script>alert("Login First! Redirecting to Login page ."); window.location.href = "r-login.php";</script>';}
}
else{
   $sql = "SELECT * FROM riders where rider_id = {$_SESSION["r_id"]}";
$result = $conn->query($sql);
$row_r = $result->fetch_assoc();
}

?>