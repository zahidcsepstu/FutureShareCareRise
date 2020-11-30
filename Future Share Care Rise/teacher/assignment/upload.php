<?php include('server.php'); 
if(empty($_SESSION['username']))
{
    header('location: http://localhost/Loogin/Index.php');
}?>
<?php
include_once 'dbconfig.php';
if(isset($_POST['btn-upload']))
{    
     
	$file = rand(1,1000)."-".$_FILES['file']['name'];
	$new_file_name = strtolower($file);
	$final_file=str_replace(' ','-',$new_file_name);

    $file_loc = $_FILES['file']['tmp_name'];
	$file_size = $_FILES['file']['size'];
	$file_type = $_FILES['file']['type'];
	$folder="uploads/";
    $batch=mysql_real_escape_string($_POST['batch']);
	$course=mysql_real_escape_string($_POST['course']);
	$_POST['deadline'] = stripslashes($_POST['deadline']);
	$deadline = mysql_real_escape_string($_POST['deadline']);
	$username=$_SESSION['username'];


	


	$description=mysql_real_escape_string($_POST['description']);
	// new file size in KB
	$new_size = $file_size/1024;  
	// new file size in KB
	
	
	if(move_uploaded_file($file_loc,$folder.$final_file))
	{
		$sql="INSERT INTO assignment(filename,type,size,username,description,batch,course,upload_time,deadline) 
		VALUES('$final_file','$file_type','$new_size','$username','$description','$batch','$course',now(),'$deadline')";
		mysql_query($sql);
		header('location: uploadconfirm.php');
		?>
	
		<?php
	}
	else
	{
		header('location: uploaderror.php');
		?>
		
		<?php
	}
}

if(isset($_POST['Subassignment']))
{ 


}

if(isset($_POST['pendstudents']))
{ 

  header('location : pendingstudents.php');
}

?>