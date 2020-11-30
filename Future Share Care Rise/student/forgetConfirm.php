<?php include('server.php');
if(!empty($_SESSION['usernames']))
{
    header('location: index.php');
}
  else  if(!empty($_SESSION['username']))
    {
        header('location: ../teacher/index.php');
} ?>
<!DOCTYPE html>
<html>
    <head>
        <title>
            
        </title>
           
        <link rel="stylesheet" type="text/css" href="style/style.css"/>           
        
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
<div class="confirm">
<h3>Password has been changed successfully</h3>
<p><a href="http://localhost/loogin/student/login.php">Go back to login page</P>
</div>
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
