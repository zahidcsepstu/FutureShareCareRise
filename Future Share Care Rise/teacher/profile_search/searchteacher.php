<?php include('server.php'); 
if(empty($_SESSION['username']))
{
    header('location: http://localhost/Loogin/Index.php');
}?>

<html>
<head>
<title> Search for a user:</title>
<link rel="stylesheet" type="text/css" href="style.css"/>
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
<h2> Search for a teacher below: </h2></br></br>
<form action ="teacherprofile.php" method="GET">
<table>
<tr><td>Username:</td><td>
    <input type="text" id="username" name="username"></td></tr>
<tr><td>
    <input type="submit" id="submit" name="submit" value="View profile!" > </td></tr>
</table>

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