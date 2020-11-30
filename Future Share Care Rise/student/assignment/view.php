<?php
include('server.php');
include_once 'dbconfig.php';
header("Cache-Control: max-age=300,must-revalidate");

if(empty($_SESSION['usernames']))
{
    header('location: http://localhost/Loogin/Index.php');
}
?>
<!DOCTYPE html>
<html>
<head>
<title>View</title>
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

<div class="assignment">


<?php   
$username=$_SESSION['usernames'];
$userquery=mysql_query("Select batch from users where username='$username'");
$row=mysql_fetch_array($userquery, MYSQL_ASSOC);
$batch=$row['batch'];
        $course=mysql_real_escape_string($_POST['course']);?>
        <h3> Assignment List</h3>
  <h3><?php echo $batch?> Batch </h3>
  <h3>Course : <?php echo $course?></h3>
  </div>


<div id="body">

    <?php
    
	if(isset($_POST['btn-batch']))
    {
     
        
          
           
        
        $course=mysql_real_escape_string($_POST['course']);

    
    
    
	$sql="SELECT * FROM assignment INNER JOIN 
    teachers WHERE assignment.username=teachers.username 
    and assignment.batch='$batch' and assignment.course='$course' ORDER BY assignment.deadline;";
    $result_set=mysql_query($sql);
	while($row=mysql_fetch_array($result_set))
	{
        ?>
        <form method="POST" action="index.php">
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
       $assignment_id=$row['id'];
       $query = "SELECT * FROM submission WHERE username='$username' and assignment_id='$assignment_id'";
       $result= mysql_query($query);
       
         ?>
        <li><b>Remaining Time :</b> <?php echo "<a style=color:red; >$dif days</a>"  ?></li>
        <li><b>Submission Status :</b> <?php if (mysql_num_rows($result)>0) {
           echo "<a style=color:green; >Submitted</a>";
       }
       else{
        echo "<a style=color:red; >Pending</a>";
       } ?></li>
        <li><b>View :</b> <a href="http://localhost/Loogin/teacher/assignment/uploads/<?php echo $row['filename'] ?>" target="_blank">view file</a></li>
       </ul>


       </div>
       <?php 
       if($dif!=0){

       
       ?>
       <div class="input_group">
    <button type="submit" name="upload" class="btn">Submit</button>
</div>

<?php
}
?>
       <div class="input_group">
    <input type="hidden" name="assignment_id" value="<?php echo $row['id']; ?>" ></input>
    <input type="hidden" name="course" value="<?php echo $_POST['course']; ?>" ></input>
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