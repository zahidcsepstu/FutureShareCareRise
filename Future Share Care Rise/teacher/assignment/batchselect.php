<?php include('server.php'); 
$db = mysqli_connect('localhost','root','','registration');
$query="select * from batch_list";
$result= mysqli_query($db,$query);
$result1= mysqli_query($db,$query);
if(empty($_SESSION['username']))
{
    header('location: http://localhost/Loogin/Index.php');
}?>
<?php
include_once 'dbconfig.php';
?>


<!DOCTYPE html>
<html>
<head>
<title>Index</title>
<link rel="stylesheet" href="style.css" type="text/css" />
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
<br>
<br>
<br>
<br>
<br>

<div id="body">
	<form action="view.php" method="post" enctype="multipart/form-data">

	<div class="input-group1">
<label>Batch</label>
<select name="batch" id="batch">
<?php while($row1=mysqli_fetch_array($result)): ;?>
<option><?php echo $row1[1];?></option>
<?php endwhile?>
</select>
</div>


<div class="input-group">
<label>Course</label>
<select name="course" id="course">
<?php while($row2=mysqli_fetch_array($result1)): ;?>
<option><?php echo $row2[2];?></option>
<?php endwhile?>
</select>
</div>


	
<div class="button">
	<button type="submit" name="btn-batch">View</button>
</div>
	</form>
    <br /><br />
    
</div>
</body>
</html>