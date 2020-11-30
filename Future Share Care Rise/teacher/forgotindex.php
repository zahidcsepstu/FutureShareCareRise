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
<title>LogIn</title>
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
<div class="form1">
<form method="post" action="login.php">

<!-- display validation form here -->
<?php include('errors.php'); ?>


<div class="input-group">
<label>New Password</label>
<input type="password" name="password_1">
</div>

<div class="input-group">
<label>Confirm New password</label>
<input type="password" name="password_2">
</div>
<div class="input_group">
    <button type="submit" name="submitt" class="btn">Submit</button>
</div>
<div class="input_group">
    <button type="reset" name="reset" class="btn">reset</button>
</div>
</form>
</div>
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