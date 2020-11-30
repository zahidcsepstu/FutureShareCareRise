<?php include('server.php'); ?>
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
	$username=$_SESSION['usernames'];
	$description=mysql_real_escape_string($_POST['description']);
	$assignment_id=$_POST['assignment_id'];
	$course=mysql_real_escape_string($_POST['course']);
	$userquery=mysql_query("Select batch,id from users where username='$username'");
	$row=mysql_fetch_array($userquery, MYSQL_ASSOC);
	$batch=$row['batch'];
	$student_id=$row['id'];
	// new file size in KB
	$new_size = $file_size/1024; 
	
	$query = "SELECT * FROM submission WHERE username='$username' and assignment_id='$assignment_id'";
	$result= mysql_query($query);
	if (mysql_num_rows($result)>0) {



		if(move_uploaded_file($file_loc,$folder.$final_file))
		{
			$sql="update submission set filename='$final_file',type='$file_type',size='$new_size',description='$description'
			WHERE username='$username' and assignment_id='$assignment_id'";
			mysql_query($sql);
			header('location: uploadconfirm.php');
			?>
		
			<?php
		}
		else
		{
			?>
			
			<?php
			header('location: uploaderror.php');
		}
}
else{
	// new file size in KB
	
	if(move_uploaded_file($file_loc,$folder.$file))
	{
		$sql="INSERT INTO submission(filename,type,size,username,description
		,assignment_id,student_id,batch,course)
		 VALUES('$file','$file_type','$new_size','$username',
		 '$description','$assignment_id','$student_id','$batch','$course')";
		mysql_query($sql);
		header('location: uploadconfirm.php');
		?>
	
		<?php
	}
	else
	{
		?>
		
		<?php
		header('location: uploaderror.php');
	}
}
}


?>
