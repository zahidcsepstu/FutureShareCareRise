<?php include('server.php'); 

if(empty($_SESSION['username']))
{
    header('location: http://localhost/Loogin/Index.php');
}
?>



<!DOCTYPE html>
<html>
<head>
<title>Update Profile</title>
<link rel="stylesheet" type="text/css" href="style/style.css"/>
</head>
<body>
<div class="logoname clear">
<img src="future.png" alt="Logo"/>
<h1> <a href="http://localhost/Loogin/">Future</a></h1>
<h6>Share Care Rise</h6>

</div>
<?php

if(empty($_SESSION['username']))
{
$uid="http://localhost/Loogin/";
}
else
{
$uid="http://localhost/Loogin/teacher/index.php";
}
?>
</div>
  <div class="nav clear">
  <ul>
  <li><a href="<?php echo $uid; ?>" >Home</a></li>
  <li><a href="http://localhost/Loogin/about.html">About</a></li>
  <li><a href="http://localhost/Loogin/connnnnn/index.php">Contact</a></li>
</ul>
  </div>
<br>
<br>
<br>


<?php if(isset($_SESSION['username'])): 
    $username=$_SESSION['username']; ?>
  
  <div class="profileUsername2">
  <p><strong> <?php echo $username; ?></strong></p>
  <br> 
  <p>Please update your information</p>
  </div>

<?php
$con=mysql_connect('localhost','root','');
if(! $con){
  die('Could not connect:'.mysql_error());
}






$sql="Select * from teachers where username='$username'";
mysql_select_db('registration');

$_SESSION['username']=$username;



mysql_close($con);
?>
<?php endif ?>





<!DOCTYPE html>
<html>
<head>
<title>Update Profile</title>
<link rel="stylesheet" type="text/css" href="style/styleUpPro.css"/>
</head>
<body>


<form method="post" action="UpdateProfile.php">
<!-- display validation form here -->
<?php include('errors.php'); ?>


    <div class="input-group">
        <label>Department</label>
        <input type="text" name="Department">
</div>
<div class="input-group">
        <label>Contact Number</label>
        <input type="text" name="ContactNumber">
</div>
<div class="input-group">
        <label>Interested In</label>
        <input type="text" name="InterestedIn">
</div>
<div class="input-group">
        <label>Expert In</label>
        <input type="text" name="ExpertIn">
</div>

<div class="input_group">
    <button type="submit" name="UpdateProfile" class="btn">UpdateProfile</button>
</div>
<div class="input_group">
    <button type="reset" name="reset" class="btn">Reset</button>
</div>

</form>


<div class="Footer">
<ul>
<li><a href="<?php echo $uid; ?>" >Home</a></li>
<li><a href="http://localhost/Loogin/about.html">About</a></li>
<li><a href="http://localhost/Loogin/connnnnn/index.php">Contact</a></li>
</ul>
    <p>&copy;Copyright Subrata Saha & Zahid Hassan</p>
    </div>
    </body>
</html>