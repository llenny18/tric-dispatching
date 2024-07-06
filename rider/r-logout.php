<?php include("conn.php");
session_destroy();

echo '<script>alert("Logout successful! Redirecting to login page."); window.location.href = "r-login.php";</script>';
?>