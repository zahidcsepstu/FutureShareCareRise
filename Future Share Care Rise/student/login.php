<?php include('server.php'); 

if(!empty($_SESSION['usernames']))
{
    header('location: index.php');
}
  else  if(!empty($_SESSION['username']))
    {
        header('location: ../teacher/index.php');
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Index</title>
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

<div class="header clear">
<h2>LOGiN|Student</h2>
</div>
<div class="form1">
<form method="post" action="login.php">

<!-- display validation form here -->
<?php include('errors.php'); ?>


    <div class="input-group">
        <label>Username</label>
        <input type="text" name="username">
</div>
<div class="input-group">
        <label>Password</label>
        <input type="password" name="password">
</div>

<div class="input_group">
    <button type="submit" name="login" class="btn">LOGiN</button>
</div>
<p> 
    Not yet a member? <a href="register.php">Sign up</a><br><br><a href="ForgotPass.php">Forgotten Password?</a>
</form>
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