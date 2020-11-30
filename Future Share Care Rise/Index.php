<?php  require('teacher/server.php'); 

//if user is not logged in,they cannot access this page
if(!empty($_SESSION['username']))
{
    header('location: teacher/index.php');
}
else if(!empty($_SESSION['usernames']))
{
    header('location: student/index.php');
}

?>

<html lang="en-ud">

<head>
  <title>
    Future
  </title>

  <link rel="stylesheet" href="style/style.css">
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
    <h2>LOGiN</h2>
    <p class="putu">as</p>
  </div>
<div class="barsystem">
  <div class="one"><h4>Promising Courses</h4>
  <p>Here,you will find the best suitable and promising course's article that you can practise<p>
      <div class ="readmore clear"><a href="http://localhost/Loogin/readMORE/PromisingRM.html">Read More</a></div>
  </div>
  <div class="one"><h4>Academic Courses</h4>
    <p>You are bound to finish your every semester courses,so you want to practise any job related article based on your current semester course
      <p>
            <div class ="readmore"><a href="http://localhost/Loogin/readMORE/academic2RM.html">Read More</a></div>
    </div>
    <div class="one"><h4>Advanced Topics</h4>
      <p>For a better future,you must learn various advanced topics after completing your academic courses.<p>
            <div class ="readmore clear"><a href="http://localhost/Loogin/readMORE/advancedRM.html">Read More</a></div>
      </div>
</div>

<div class="barsystem1">
    <div class="two"><h3>Our Goal</h3>
    <p>During our academic life in BSc in Engg(CSE),
      we have to study various courses,but many times we don't know why have to learn programming courses,algorithms,database etc.For that reason we put a less
      care on some courses and one day that results in a failure job carrier.Here we can
      analysis professional articles,project materials based on our particular academic courses.Our honourable
      course teachers will give us professional articles,projects so that we can be aware of our job carrier in our academic life.
      <p>
    
  </div>

  <div class="teacher">
    <a href="http://localhost/loogin/teacher/login.php">Teacher</a>
    <p>or</p>
    <a href="http://localhost/loogin/student/login.php">Student</a>
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