<?php include('server.php'); 

ini_set('session.cache_limiter','public');
session_cache_limiter(false);

if(empty($_SESSION['username']))
{
    header('location: http://localhost/Loogin/Index.php');
}

?>


<!DOCTYPE html>
<html>
<head>
<title>Pending</title>
<link rel="stylesheet" type="text/css" href="stylealluser.css"/>
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

<div class="profileUsername">
<p><strong>Pending Student's List</strong></p>
</div>

<div class="profileUsername1">
<?php
$con=mysql_connect('localhost','root','');
if(! $con){
  die('Could not connect:'.mysql_error());
}



$assignment_id=$_POST['assignment_id'];
$batch=$_POST['batch'];



$sql="select * from users
where batch='$batch'
and id not in(select student_id from submission
               where assignment_id='$assignment_id');";
mysql_select_db('registration');

$retval=mysql_query($sql,$con);
$_SESSION['username']=$username;
if(! $retval)
{
  
  die('Could get data : ' .mysql_error());
}
while($row=mysql_fetch_array($retval, MYSQL_ASSOC))
{
  
  echo "<b>Name</b>: <p>{$row['username']}</p> <br> ";
  echo "<b>Id</b>: {$row['id']} <br> <br><br>";

}



mysql_close($con);
?>
<?php endif ?>

<div class="Footer">
<ul>
<li><a href="<?php echo $uid; ?>" >Home</a></li>
<li><a href="http://localhost/Loogin/about.html">About</a></li>
<li><a href="http://localhost/Loogin/connnnnn/index.php">Contact</a></li>
</ul>
    <p>&copy;Copyright Subrata Saha & Zahid Hassan</p>
    </div>

    
