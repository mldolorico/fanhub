<?php  

  if (!isset($_SESSION['username'])) {
    $_SESSION['warning'] = "You need to log in to access this page.";
    //redirect user
    header("location: login.php");
  }


?>