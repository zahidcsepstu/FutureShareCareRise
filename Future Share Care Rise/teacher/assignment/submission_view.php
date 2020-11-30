<?php include('server.php');

ini_set('session.cache_limiter','public');
session_cache_limiter(false);
header("Cache-Control: max-age=300,must-revalidate");
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
<title>File View</title>
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
<div class="assignment">
<?php   
        $assignment_id=$_POST['assignment_id'];
        $batch=$_POST['batch'];
        $course=$_POST['course'];
        ?>
        <h3>Submitted Assignment List </h3>
  <h3><?php echo $batch?> Batch </h3>
  <h3>Course : <?php echo $course?></h3>
  <p style='color:red;margin-top: 7px;font-size: 20px;'>Note:Students can update their assignments till deadline.So, you should wait for the final submission until the deadline is crossed.</p>
  </div>

<div id="body">
	
    <?php
    if(isset($_POST['Subassignment']))
    {
        
        $assignment_id=$_POST['assignment_id'];

    
    
    
	$sql="SELECT * FROM submission WHERE assignment_id='$assignment_id';";
    $result_set=mysql_query($sql);
    
	while($row=mysql_fetch_array($result_set))
	{
        $assignment_id=$row['assignment_id'];

		?>
  

       <div class="file11">
       <ul>
       <li><b>Student :</b> <?php echo $row['username'] ?></li>
       <li><b>Id :</b> <?php echo $row['student_id'] ?></li>
       <li><b>Description :</b> <?php echo $row['description'] ?></li>
       <li><b>File Name :</b> <?php echo $row['filename'] ?></li>
     
        <li><b>View :</b> <a href="http://localhost/Loogin/student/assignment/uploads/<?php echo $row['filename'] ?>" target="_blank">view file</a></li>
        
       </ul>


       </div>
    
</div>
</div>
</form>
    
       
        <?php
    }
}
	?>
    
    </table>
    
</div>
</body>
</html>