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
$batch=mysql_real_escape_string($_POST['batch']);
        $course=mysql_real_escape_string($_POST['course']);?>
        <h3>Assignment List</h3>
  <h3><?php echo $batch?> Batch </h3>
  <h3>Course : <?php echo $course?></h3>
  </div>

<div id="body">
	
    <?php
    if(isset($_POST['btn-batch']))
    {
        $batch=mysql_real_escape_string($_POST['batch']);
        $course=mysql_real_escape_string($_POST['course']);

    
    
    
	$sql="SELECT * FROM assignment INNER JOIN 
    teachers WHERE assignment.username=teachers.username 
    and assignment.batch='$batch' and assignment.course='$course';";
    $result_set=mysql_query($sql);
    
	while($row=mysql_fetch_array($result_set))
	{
        $assignment_id=$row['id'];
        $sq2="select count(student_id)
        from submission
        where assignment_id='$assignment_id';";
        $sq=mysql_query($sq2);
        $row1=mysql_fetch_array($sq, MYSQL_ASSOC);
        $submitted=$row1['count(student_id)'];

        $sq3="select count(id)
        from users where batch='$batch';";
        $sq4=mysql_query($sq3);
        $row1=mysql_fetch_array($sq4, MYSQL_ASSOC);
        $total=$row1['count(id)'];
        $pending=$total-$submitted;


		?>
  

       <div class="file3">
       <ul>
       <li><b>Course Teacher :</b> <?php echo $row['username'] ?></li>
       <li><b>Description :</b> <?php echo $row['description'] ?></li>
       <li><b>File Name :</b> <?php echo $row['filename'] ?></li>
        <li><b>Published Date :</b> <?php echo $row['upload_time'] ?></li>
        <li><b>Deadline :</b> <?php echo $row['deadline'] ?></li>
        <?php
        $date=date('Y-m-d');
       $dif=(strtotime($row['deadline'])-strtotime($date))/86400;
if($dif<0){
           $dif=0;
       }
         ?>
        <li><b>Remaining Time :</b> <?php echo "<a style=color:red; >$dif days</a>"  ?></li>
        
        <li style='color:green;' ><b>Submitted :</b> <?php echo $submitted ?></li>
        <li style='color:#C50303;;'><b>Pending :</b> <?php echo $pending ?></li>
        
        <li><b>View :</b> <a href="uploads/<?php echo $row['filename'] ?>" target="_blank">view file</a></li>
        
       </ul>


       </div>
     
     <form action="submission_view.php" method="POST"> 
       <div class="input_group">
    <button type="submit" name="Subassignment" class="btn">Submitted assignments</button>
    <div class="input_group">
    <input type="hidden" name="assignment_id" value="<?php echo $row['id']; ?>" ></input>
    <input type="hidden" name="batch" value="<?php echo $batch; ?>" ></input>
    <input type="hidden" name="course" value="<?php echo $course; ?>" ></input>
</div>
</div>
</form>

<form action="pendingstudents.php" method="POST">
<div class="input_group">
    <button type="submit" name="pendstudents" class="btn">Pending Students</button>

    <div class="input_group">
    <input type="hidden" name="assignment_id" value="<?php echo $row['id']; ?>" ></input>
    <input type="hidden" name="batch" value="<?php echo $batch; ?>" ></input>
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