
<?php include('server.php'); 
if(empty($_SESSION['usernames']))
{
    header('location: http://localhost/Loogin/Index.php');
}
?>
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



<h2> Search for a student below: </h2></br></br>

<form action ="studentprofile.php" method="GET">
<table>
<tr><td>Username:</td><td>
    <input type="text" id="username" name="username"></td></tr>
<tr><td>
    <input type="submit" id="submit" name="submit" value="View profile!" > </td></tr>
</table>
</form>
<div class="Footer">
<ul>
<li><a href="http://localhost/Loogin/">Home</a></li>
<li><a href="http://localhost/Loogin/about.html">About</a></li>
<li><a href="http://localhost/Loogin/connnnnn/index.php">Contact</a></li>
</ul>
    <p>&copy;Copyright Subrata Saha & Zahid Hassan</p>
    </div>
</body>
</html>