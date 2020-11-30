<?php
include('server.php');
include_once 'dbconfig.php';
if(empty($_SESSION['usernames']))
{
    header('location: http://localhost/Loogin/Index.php');
}
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
<div id="body">
	<h3 style="color: red;margin-top: -18px;margin-bottom: 7px;">Note: You can submit or update assignment till deadline.</h3>

	<?php 
	
	$assignment_id=$_POST['assignment_id'];
	$username=$_SESSION['usernames'];
	$course=mysql_real_escape_string($_POST['course']);
	$query = "SELECT * FROM submission WHERE username='$username' and assignment_id='$assignment_id'";
    $result= mysql_query($query);
   
    if (mysql_num_rows($result)>0) {
            $header="You have already submitted this assignment.Now you can update it.";
	}
	else{
		$header="Please submit this assignment";
	}
	
	?>
    <P><?php echo $header?></p>		

	<form action="upload.php" method="post" enctype="multipart/form-data">
	<div class="input-group2">
	<input type="file" name="file" required/>
</div>
	<div class="description">
        <label>description</label>
        <input type="text" name="description" required>
</div>
<div class="input_group">
    <input type="hidden" name="assignment_id" value="<?php echo $assignment_id ?>" ></input>
    <input type="hidden" name="course" value="<?php echo $course ?>" ></input>
</div>
<div class="button">
	<button type="submit" name="btn-upload">upload</button>
</div>	
</form>
    <br /><br />
    <?php
	if(isset($_GET['success']))
	{
		?>
        <label>File Uploaded Successfully...  </label>
        <?php
	}
	else if(isset($_GET['fail']))
	{
		?>
        <label>Problem While File Uploading !</label>
        <?php
	}
	else
	{
		?>
        
        <?php
	}
	?>
	 
       
</div>
</body>
</html>