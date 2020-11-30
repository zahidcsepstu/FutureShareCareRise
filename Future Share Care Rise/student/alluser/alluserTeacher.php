<?php include('server.php'); 
if(empty($_SESSION['usernames']))
{
    header('location: http://localhost/Loogin/Index.php');
}
?>


<!DOCTYPE html>
<html>
<head>
<title>All Users Profile</title>
<link rel="stylesheet" type="text/css" href="stylealluser.css"/>
</head>
<body>
<div class="logoname clear">
<img src="future.png" alt="Logo"/>
<h1> <a href="http://localhost/Loogin/">Future</a></h1>
<h6>Share Care Rise</h6>

</div>

</div>
  <div class="nav clear">
  <ul>
  <li><a href="http://localhost/Loogin/">Home</a></li>
  <li><a href="http://localhost/Loogin/about.html">About</a></li>
  <li><a href="http://localhost/Loogin/connnnnn/index.php">Contact</a></li>
</ul>
  </div>
<br>
<br>
<br>





<?php if(isset($_SESSION['usernames'])): 
  $username=$_SESSION['usernames']; ?>

<div class="profileUsername">
<p><strong>Teacher's List</strong></p>
</div>

<div class="profileUsername1">
<?php
$con=mysql_connect('localhost','root','');
if(! $con){
  die('Could not connect:'.mysql_error());
}







$sql="Select * from teachers";
mysql_select_db('registration');

$retval=mysql_query($sql,$con);
$_SESSION['usernames']=$username;
if(! $retval)
{
  
  die('Could get data : ' .mysql_error());
}
while($row=mysql_fetch_array($retval, MYSQL_ASSOC))
{
  
  echo "<b>User name</b>: <p>{$row['username']}</p> <br> ";
  echo "User email: {$row['email']} <br>";
  echo "Department: {$row['Department']} <br> <br><br>";

}



mysql_close($con);
?>
<?php endif ?>

<div class="Footer">
<ul>
<li><a href="http://localhost/Loogin/">Home</a></li>
<li><a href="http://localhost/Loogin/about.html">About</a></li>
<li><a href="http://localhost/Loogin/connnnnn/index.php">Contact</a></li>
</ul>
    <p>&copy;Copyright Subrata Saha & Zahid Hassan</p>
    </div>

    
