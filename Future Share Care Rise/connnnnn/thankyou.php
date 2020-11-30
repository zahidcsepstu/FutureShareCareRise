


<?php

require 'connection.php';
$conn = Connect();
$name = $conn->real_escape_string($_POST['u_name']);
$email = $conn->real_escape_string($_POST['u_email']);
$subj = $conn->real_escape_string($_POST['subj']);
$message = $conn->real_escape_string($_POST['message']);

$query="Insert into tb_cform(u_name,u_email,subj,message)
VALUES('".$name."','".$email."','".$subj."','".$message."')";
$success=$conn->query($query);


if(!$success)
{
    die("Couldnot enter data: ".$conn->error);
}


$conn->close();

?>


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
<h3>Thank you for contacting us</h3>
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
