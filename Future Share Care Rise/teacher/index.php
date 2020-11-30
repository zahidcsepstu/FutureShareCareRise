<?php include('server.php'); 

//if user is not logged in,they cannot access this page
if(empty($_SESSION['username']))
{
    header('location: http://localhost/Loogin/Index.php');
}

?>

<!DOCTYPE html>
<html>
<head>
<title>user registration system using PHP and MySQL</title>
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



<div class="content1">
<?php if (isset($_SESSION['success'])): ?>
<div class="error success">
<h2>
<?php 
   echo $_SESSION['success'];
   unset($_SESSION['success']);
   ?>
   </h2>
   </div>
<?php endif ?>

<?php if(isset($_SESSION["username"])): ?>
<p>Welcome <strong> <?php echo $_SESSION['username']; ?></strong></p>
<ul>
  <li><a href="http://localhost/Loogin/chat_index.php" style="color: green;">Private Chat</a></li>
<li><a href="http://localhost/Loogin/chat_index_pub.php" style="color: green;">Public Chat</a></li>
<li><a href="http://localhost/Loogin/teacher/profile.php" style="color: green;">Profile</a></li>
<li><a href="http://localhost/Loogin/teacher/alluser/userselect.php" style="color: green;">All users</a></li>
<li><a href="http://localhost/Loogin/teacher/profile_search/searchuser.php" style="color: green;">Search anyone</a></li>
<li><a href="http://localhost/Loogin/teacher/UpdateProfile.php" style="color: green;">Update Profile</a></li>
<li><a href="http://localhost/Loogin/teacher/assignment/index.php" style="color: green;">Give an assignment</a></li>
<li><a href="http://localhost/Loogin/teacher/assignment/batchselect.php" style="color: green;">Submitted assignment</a></li>
<li><a href="index.php?logout='1'" style="color: red;">Logout</a></li>
</ul> 
<?php endif ?>
</div>


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