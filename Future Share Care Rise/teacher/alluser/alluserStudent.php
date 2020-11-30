<?php include('server.php');

if (empty($_SESSION['username'])) {
  header('location: http://localhost/Loogin/Index.php');
}

?>


<!DOCTYPE html>
<html>

<head>
  <title>All Users Profile</title>
  <link rel="stylesheet" type="text/css" href="stylealluser.css" />
</head>

<body>
  <div class="logoname clear">
    <img src="future.png" alt="Logo" />
    <h1> <a href="http://localhost/Loogin/">Future</a></h1>
    <h6>Share Care Rise</h6>

  </div>
  <?php

  if (empty($_SESSION['username'])) {
    $uid = "http://localhost/Loogin/";
  } else {
    $uid = "http://localhost/Loogin/teacher/index.php";
  }
  ?>
  </div>
  <div class="nav clear">
    <ul>
      <li><a href="<?php echo $uid; ?>">Home</a></li>
      <li><a href="http://localhost/Loogin/about.html">About</a></li>
      <li><a href="http://localhost/Loogin/connnnnn/index.php">Contact</a></li>
    </ul>
  </div>
  <br>
  <br>
  <br>





  <?php if (isset($_SESSION['username'])) :
    $username = $_SESSION['username']; ?>

    <div class="profileUsername">
      <p><strong>Student's List</strong></p>
    </div>

    <div class="profileUsername1">
      <?php
      $con = mysql_connect('localhost', 'root', '');
      if (!$con) {
        die('Could not connect:' . mysql_error());
      }







      $sql = "Select * from users";
      mysql_select_db('registration');

      $retval = mysql_query($sql, $con);
      $_SESSION['username'] = $username;
      if (!$retval) {

        die('Could get data : ' . mysql_error());
      }
      while ($row = mysql_fetch_array($retval, MYSQL_ASSOC)) {

        echo "<b>User name</b>: <p>{$row['username']}</p> <br> ";
        echo "User email: {$row['email']} <br> <br><br>";
      }



      mysql_close($con);
      ?>
    <?php endif ?>

    <div class="Footer">
      <ul>
        <li><a href="<?php echo $uid; ?>">Home</a></li>
        <li><a href="http://localhost/Loogin/about.html">About</a></li>
        <li><a href="http://localhost/Loogin/connnnnn/index.php">Contact</a></li>
      </ul>
      <p>&copy;Copyright Subrata Saha & Zahid Hassan</p>
    </div>