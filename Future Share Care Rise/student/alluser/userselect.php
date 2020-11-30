<?php include('server.php'); 
if(empty($_SESSION['usernames']))
{
    header('location: http://localhost/Loogin/Index.php');
}
?>
<html lang="en-ud">

<head>
  <title>
    Future
  </title>

  <link rel="stylesheet" href="style.css">
  <style>

  </style>
  <style>

  </style>
</head>

<body>
  <div class="logoname clear">
      <img src="future.png" alt="Logo"/>
    <h1> <a href="http://localhost/Loogin/">Future</a></h1>
    <h6>Share Care Rise</h6>
    

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
  <br>


  <div class="mainsection">
  <div class="login">
    <h2>Show all users</h2>
    <p class="putu">of</p>
  </div>
  <div class="stu">
    <a href="alluserTeacher.php">Teacher</a>
    <p>or</p>
    <a href="alluserStudent.php">Student</a>
  </div>

  <div class="Footer">
      <ul>
          <li><a href="http://localhost/Loogin/">Home</a></li>
          <li><a href="http://localhost/Loogin/about.html">About</a></li>
          <li><a href="http://localhost/Loogin/connnnnn/index.php">Contact</a></li>
          </ul>
    <p>&copy;Copyright Subrata Saha & Zahid Hassan</p>
    </div>

  </div>

  
 


</body>

</html>