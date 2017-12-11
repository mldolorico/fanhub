<?php 

require_once 'database.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Homepage</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/custom.css">
</head>

<body>
<div class="container">

<!-- Alert Message -->
  <?php if (isset($_SESSION['message'])) { ?>
    <div class="alert alert-success">
      <?php 
      echo $_SESSION['message'];
      unset ($_SESSION['message']);
      ?>
   </div>
  <?php } ?>

<!-- Alert Message -->
  <?php if (isset($_SESSION['success'])) { ?>
    <div class="alert alert-success">
      <?php 
      echo $_SESSION['success'];
      unset ($_SESSION['success']);
      ?>
   </div>
  <?php } ?>

<!-- Alert Message -->
<div class="well">
  <?php if (isset($_SESSION['username'])) { ?>
    <p>Welcome, <strong><?php echo $_SESSION['username']; ?></strong></p>
    <p><a href="server.php?logout=1" class="btn btn-warning">Logout</a></p>
  <?php } ?>
</div>
 
<div class="container">
  <div class="jumbotron">
    <img src="https://pbs.twimg.com/profile_images/911078568284717056/IFy3XaRq_400x400.jpg" class="img-fluid" width="400px" height="400px">
    <h1>Martin John L. Dolorico</h1>
    <p>Professional Fanboy. Ambivert. Cancer. INTP. Phlegmatic. Audiophile. Geek.</p>
    <a class="btn btn-primary" href="https://twitter.com/mjdolorico?lang=en" role="button">Twitter</a>
    <a class="btn btn-primary" href="https://www.facebook.com/mj.dolorico" role="button">Facebook</a>
    <a class="btn btn-primary" href="https://www.instagram.com/mjdolorico/" role="button">Instagram</a>
    <a class="btn btn-primary" href="fanpage.php" role="button">Associated Acts</a>
    <a class="btn btn-primary" href="associatedacts.php" role="button">Be an Associated Act!</a>
    <?php  if (!isset($_SESSION['username'])) {
      echo '<a class="btn btn-primary" href="register.php" role="button">Register</a>';
    } ?>
  </div>
  
  <h2>Work Experience</h2>
  <br>
    <div class="row">
      <div class="col-md-6">
        <h4>UP SLIS</h4>
        <p>Student</p>
      </div>
      <div class="col-md-6">
        <h4>ACACIA WALDORF SCHOOL</h4>
        <p>In-house tutor</p>
      </div>
    </div>
    
  <h2>Educational Attainment</h2>
  <br>
  <div class="row">
      <div class="col-md-6">
        <h4>HIGH SCHOOL</h4>
        <p>Philippine Science High School (2005-2009)</>
      </div>
      <div class="col-md-6">
        <h4>COLLEGE</h4>
        <p>University of the Philippines School of Library and Information Studies (2015-)</p>
      </div>
    </div>

  <h2>Skills</h2>
  <br>
  <div class="row">
      <div class="col-md-6">
        <h4>PROFESSIONAL GROUPIE</h4>
        <p>skilled in supporting and forming meaningful relationships with independent music artists</p>
        <p>To learn more about music acts associated with me, click <a href="fanpage.php">here</a>!</p>
      </div>
      <div class="col-md-6">
        <h4>TRIVIA SPECIALIST</h4>
        <p>has a proclivity to retain masses of trivial information, sometimes unconsciously</>
      </div>
    </div>
  <div class="row">
      <div class="col-md-6">
        <h4>SKILLED RESEARCHER</h4>
        <p>resourceful and able to locate necessary  and reliable information from various types of sources.</p>
      </div>
    </div>
  
</div>


</body>
</html>