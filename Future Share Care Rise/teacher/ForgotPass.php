<?php include('server.php'); 
if(!empty($_SESSION['usernames']))
{
    header('location: ../student/index.php');
}
  else  if(!empty($_SESSION['username']))
    {
        header('location: index.php');
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Register</title>
<link rel="stylesheet" type="text/css" href="style/style.css"/>
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

<div class="header">
<h2>Password Recovery|Teacher</h2>
</div>
<div class="form2">
<form method="post" action="ForgotPass.php">
<!-- display validation form here -->
<?php include('errors.php'); ?>

    <div class="input-group">
        <label>Username</label>
        <input type="text" name="username" value="<?php echo $username; ?>">
</div>
<div class="input-group">
        <label>Email</label>
        <input type="email" name="email" value="<?php echo $email; ?>">

<div class="input-group">
        <label style="color:red">Secret Question:<br>What is your favourite color?</label>
        <input type="text" name="sq">
</div>



<div class="input_group">
    <button type="submit" name="submit" class="btn">Submit</button>
</div>
<div class="input_group">
    <button type="reset" name="reset" class="btn">Reset</button>
</div>

</form>
<div>
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