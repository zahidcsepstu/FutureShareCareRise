<?php
    require('includes/core.inc.php');
    require('teacher/server.php');
    if(empty($_SESSION['username']))
    {
        header('location: http://localhost/Loogin/Index.php');
    }
    
?>
<!DOCTYPE html>
<html lang="en">
    <head>
    <title>Chat Application</title>
    <link type="text/css" rel="stylesheet" href="public_pub/css/main.css"/>
    </head>
   
<body>

<div class="logoname">
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
  <br>
    

    <div class= "input">
          <form action="index.php" method ="post" id="form_input"> 
          <p>Welcome <strong> <?php echo $_SESSION['username']; ?></strong></p>
          <pre>Public chat(among all) </pre>
              <br/><lable>Enter Message:<br/><textarea id="message" cols="25" rows="4"></textarea></lable><br/>
              <input type= "submit" name="send" id="send" value="Send Message"/>
           </form>
    </div>
       
       
          <div id="messages">
     
          </div>
          <script type="text/javascript" src="scripts_pub/js/jquery.js"></script>
          <script type="text/javascript" src="scripts_pub/js/auto_chat.js"></script>
          <script type="text/javascript" src="scripts_pub/js/send.js"></script>

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
