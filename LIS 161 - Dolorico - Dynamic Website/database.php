<?php 

	session_start();

	//Initialize variables
	$artist = "";
	$genre = "";
	$email = "";
	$website = "";
	$status = "";
	$id = 0;
	$edit_state = false;

	//Connect to database
	$con = mysqli_connect("localhost", "root", "", "lis161_crud");

	//Search Module
	if (isset($_POST['search'])) {
		$query = "SELECT * FROM associatedacts WHERE artist LIKE '%{$_POST['keyword']}%'";

		$results = mysqli_query($con,$query);

	}

	//Enter new record
	if (isset($_POST['submit'])) {
		include 'session.php';
		$artist = $_POST['artist'];
		$genre = $_POST['genre'];
		$email = $_POST['email'];
		$website = $_POST['website'];
		$status = "Pending application";


		$query = "INSERT INTO associatedacts (artist,genre,email,website,status) VALUES ('$artist','$genre','$email','$website','$status')";

		mysqli_query($con,$query);
		header("location: associatedacts.php");
		//update records
	} 

	if (isset($_POST['update'])) {
		
		include 'session.php';
		$artist = $_POST['artist'];
		$genre = $_POST['genre'];
		$email = $_POST['email'];
		$website = $_POST['website'];
		$status = "Pending application";
		$id = $_POST['id'];
		
		echo $id;

		$query = "UPDATE associatedacts SET artist = '$artist' ,genre = '$genre' ,email = '$email' ,website = '$website' WHERE id='$id'";


		//Perform query
		mysqli_query($con,$query);

		//Set status message
		$_SESSION['message'] = "Associated Act record updated";

		//Redirect to homepage
		header("location: associatedacts.php");
	} 

	if (isset($_GET['del'])) {
		 
		$id = $_GET['del'];

		//Prepare query
		$query = "DELETE FROM associatedacts WHERE id=$id";

		//Perform query
		mysqli_query($con,$query);

		//Set status message
		$_SESSION['message'] = "Associated Act record deleted";

		//Redirect to homepage
		header("location: associatedacts.php");

	} else 	{//Read records
	$associatedacts_records = mysqli_query($con,"SELECT * FROM associatedacts");
	}
	
 ?>