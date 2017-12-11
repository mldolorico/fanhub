<?php 

require_once 'database.php';

?>

<!DOCTYPE html>
<html>
<head>
	<title>Be an Associated Act!</title>
	<meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/custom.css">
</head>
<style>
	* {box-sizing:border-box}
	body {font-family: Verdana,sans-serif;}
	.mySlides {display:none}
	/* Slideshow container */
	.slideshow-container {
 	max-width: 500px;
  	position: relative;
  	margin: auto;
	}
	/* Caption text */
	.text {
  	color: red;
  	font-size: 18px
  	text-align: center;
	}
	/* Number text (1/3 etc) */
	.numbertext {
  	color: #f2f2f2;
  	font-size: 12px;
  	padding: 8px 12px;
  	position: absolute;
  	top: 0;
	}
	/* The dots/bullets/indicators */
	.dot {
  	height: 13px;
  	width: 13px;
  	margin: 0 2px;
  	background-color: #bbb;
  	border-radius: 50%;
  	display: inline-block;
  	transition: background-color 0.6s ease;
	}
	.active {
  	background-color: #717171;
	}
	/* Fading animation */
	.fade {
  	-webkit-animation-name: fade;
  	-webkit-animation-duration: 1.5s;
  	animation-name: fade;
  	animation-duration: 2s;
	}
	@-webkit-keyframes fade {
  	from {opacity: .4} 
  	to {opacity: 1}
	}
	@keyframes fade {
  	from {opacity: .4} 
  	to {opacity: 1}
	}
	/* On smaller screens, decrease text size */
	@media only screen and (max-width: 300px) {
  	.text {font-size: 11px}
	}
</style>	
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
		<a class="btn btn-primary" href="index.php" role="button">Home</a>
		<a class="btn btn-primary" href="https://twitter.com/mjdolorico?lang=en" role="button">Twitter</a>
		<a class="btn btn-primary" href="https://www.facebook.com/mj.dolorico" role="button">Facebook</a>
		<a class="btn btn-primary" href="https://www.instagram.com/mjdolorico/" role="button">Instagram</a>
		<a class="btn btn-primary" href="fanpage.php" role="button">Associated Acts</a>
    <a class="btn btn-primary" href="associatedacts.php" role="button">Be an Associated Act!</a>
    <?php  if (!isset($_SESSION['username'])) {
      echo '<a class="btn btn-primary" href="register.php" role="button">Register</a>';
    } ?>
		
	</div>

	
<h3 align="center" style="font-family:Century Gothic">Acts Associated With Me</h3>

<!-- Search Bar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    
    <form class="form-inline my-2 my-lg-0" action="fanpage.php" method="post">
      <input class="form-control mr-sm-2" type="text" required name="keyword" placeholder="Search for artists..." aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit" name="search">Search</button>
    </form>
  </div>
</nav>

<?php if (!isset($_POST['search'])) { ?>


<div class="slideshow-container">
  <div class="mySlides fade">
    <div class="numbertext">1 / 6</div>
    <img src="http://pearshapedexeter.com/wp-content/uploads/2016/03/Boyce-Avenue.jpg" class="img-fluid" alt="Responsive image" width="400px" height="400px">
	  <div class="text"><a href="http://www.boyceavenue.com/">Boyce Avenue</a></div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">2 / 6</div>
    <img src="https://pbs.twimg.com/profile_images/796481522555621376/_IFgp3Fl.jpg" class="img-fluid" alt="Responsive image" width="400px" height="400px">
    <div class="text"><a href="https://www.barrettbaber.com/">Barrett Baber</a></div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">3 / 6</div>
    <img src="http://first-avenue.com/sites/default/files/images/events/lukewade1_0.jpg" class="img-fluid" alt="Responsive image" width="400px" height="400px">
    <div class="text"><a href="www.lukewademusic.com">Luke Wade</a></div>
  </div>
  
  <div class="mySlides fade">
    <div class="numbertext">4 / 6</div>
    <img src="https://pbs.twimg.com/profile_images/893880949124939776/GQJo5_wY_400x400.jpg" class="img-fluid" alt="Responsive image" width="400px" height="400px">
    <div class="text"><a href="www.ryanquinnmusic.com/">Ryan Quinn</a></div>
  </div>
  
  <div class="mySlides fade">
    <div class="numbertext">5 / 6</div>
    <img src="https://pbs.twimg.com/profile_images/896488895696613377/o0g5ZMcb.jpg" class="img-fluid" alt="Responsive image" width="400px" height="400px">
    <div class="text"><a href="https://michaelsanchezmusic.com/">Michael Sanchez</a></div>
  </div>
  
  <div class="mySlides fade">
    <div class="numbertext">6 / 6</div>
    <img src="http://www.ultimatechart.com/system/artists/Hunter_Plake.jpg" class="img-fluid" alt="Responsive image" width="400px" height="400px">
	  <div class="text"><a href="https://www.instagram.com/hunterplake">Hunter Plake</a></div>
  </div>

  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span>
  <span class="dot" onclick="currentSlide(4)"></span> 
  <span class="dot" onclick="currentSlide(5)"></span> 
  <span class="dot" onclick="currentSlide(6)"></span> 
</div>
	
<script>
var slideIndex = 0;
showSlides();
function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
       slides[i].style.display = "none";  
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1}    
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " active";
    setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>

<?php } else { ?>

<!-- Display of Search Results in a Table Format -->
  <div class="well">
    <p><h2>Search Results</h2></p>
    <table class="table table-striped table-bordered">
      <thead class="thead-dark">
        <tr>
          <th scope="col">#</th>
          <th scope="col">Artist</th>
          <th scope="col">Genre</th>
          <th scope="col">Email</th>
          <th scope="col">Website</th>
          <th scope="col">Status</th>
        </tr>
      </thead>
      <tbody>
        <?php $i = 0;
         while ($row = mysqli_fetch_array($results)) { ?>
        <tr>
          <?php if($row['status'] == "Associated Act") { ?>
          <td><?php echo ++$i; ?></td>
          <td><?php echo $row['artist']; ?></td>
          <td><?php echo $row['genre']; ?></td>
          <td><?php echo $row['email']; ?></td>
          <td><?php echo $row['website']; ?></td>
          <td><?php echo $row['status']; ?></td>
          <?php } ?>
        </tr>
        <?php } ?>
    
      </tbody>
    </table>
  </div>
    <!-- End of Display of Data in a Table Format -->
  <?php } ?>




</body>
</html>