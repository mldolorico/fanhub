<?php 
 

require_once 'database.php';
require_once 'session.php';

  //Check if edit btn is clicked
  if (isset($_GET['edit'])) {
    include 'session.php';
    $id = $_GET['edit']; //assign edit value to $id

    //Prepare query
    $query = "SELECT * FROM associatedacts WHERE id=$id";
    //Perform query
    $edit_record = mysqli_query($con,$query);
    //Convert record to array
    $edit_array = mysqli_fetch_array($edit_record);

    //Assign values
    $artist = $edit_array['artist'];
    $genre = $edit_array['genre'];
    $email = $edit_array['email'];
    $website = $edit_array['website'];
    $status = $edit_array['status'];

    //Set edit state to true
    $edit_state = true;
 
  }

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Associated Acts</title>
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
  


  <!-- Form -->
  <div class="well">
    <h2 class="text-center h_title"><p class="p_title">Not Yet a Client? Send a request now!<p></h2>
      <form method="POST" action="database.php">
        <div class="form-row">
          <div class="form-group">
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <label for="artist">Artist Name</label>
            <input type="text" class="form-control" name="artist" placeholder="John Doe" value="<?php echo $artist; ?>" required>
          </div>
          <div class="form-group">
            <label for="genre">Genre</label>
            <input type="text" class="form-control" name="genre" placeholder="Pop" value="<?php echo $genre; ?>" required>
          </div>
        </div>
        <div class="form-row">
          <div class="form-group">
            <label for="email">E-mail</label>
            <input type="text" class="form-control" name="email" placeholder="jdoe@up.edu.ph" value="<?php echo $email; ?>" required>
          </div>
          <div class="form-row">
          <div class="form-group">
            <label for="website">Website</label>
            <input type="text" class="form-control" name="website" placeholder="www.jdoe.com" value="<?php echo $website; ?>" required>
          </div>
        </div>
        <?php if($edit_state) { ?>
          <button type="submit" class="btn btn-primary" name="update">Update</button><a class="btn btn-warning" href="associatedacts.php">Cancel</a>
        <?php } else { ?>
          <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        <?php } ?>
        
      </form>
  </div>
  <!-- End of Form -->

  <!-- Display of Database in a Table Format -->
  <div class="well">
    <p><h2>Current Artist Roster</h2></p>
    <table class="table table-striped table-bordered">
      <thead class="thead-dark">
        <tr>
          <th scope="col">#</th>
          <th scope="col">Artist</th>
          <th scope="col">Genre</th>
          <th scope="col">Email</th>
          <th scope="col">Website</th>
          <th scope="col">Status</th>
          <th scope="col">Actions</th>
        </tr>
      </thead>
      <tbody>
        <?php $i = 0;
         while ($row = mysqli_fetch_array($associatedacts_records)) { ?>
        <tr>
          <td><?php echo ++$i; ?></td>
          <td><?php echo $row['artist']; ?></td>
          <td><?php echo $row['genre']; ?></td>
          <td><?php echo $row['email']; ?></td>
          <td><?php echo $row['website']; ?></td>
          <td><?php echo $row['status']; ?></td>
          <?php if($row['status'] == "Pending application") { ?>
          <td><a class="btn btn-warning" href="associatedacts.php?edit=<?php echo $row['id']; ?>">Edit</a>
              <a class="btn btn-danger" href="associatedacts.php?del=<?php echo $row['id']; ?>">Delete</a></td>
          <?php } ?>
        </tr>
        <?php } ?>
    
      </tbody>
    </table>
  </div>
    <!-- End of Display of Data in a Table Format -->
</div>
</body>
</html>