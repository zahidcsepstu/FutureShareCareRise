<?php
session_start();
$email="";
$errors=array();
$username='';



$db = mysqli_connect('localhost','root','','registration');

//if the register button is clicked
if(isset($_POST['register']))
{
   
    $username=mysql_real_escape_string($_POST['username']);
    $email=mysql_real_escape_string($_POST['email']);
    $password_1=mysql_real_escape_string($_POST['password_1']);
    $password_2=mysql_real_escape_string($_POST['password_2']);
    $secret=mysql_real_escape_string($_POST['secret']);
    
   
    //ensure that the form fields are filled properly
    $query = "SELECT * FROM teachers WHERE username='$username'";
    $result= mysqli_query($db,$query);

   
    if (mysqli_num_rows($result)>0) {
            array_push($errors,"Username already exists!!!");
    }
    if(empty($username))
    {
        array_push($errors,"Username is required");
    }
    if(empty($email))
    {
        array_push($errors,"email is required");
    }
    if(empty($password_1))
    {
        array_push($errors,"Password is required");
    }
    if($password_1 != $password_2)
    {
        array_push($errors,"The two password donot match");
    }
    if($secret!='secret'){
        array_push($errors,"Sorry,you are not eligible to access this");
    }
    



     
    //if there are no errors ,save user to database
    if(count($errors) == 0)
    {
        $password =md5($password_1); //encrypt password storing
     $sql= "INSERT INTO teachers(username,email,password) 
         VALUES ('$username','$email','$password')";
    mysqli_query($db,$sql);
    $_SESSION['usernames']=$username;
    $_SESSION['success']="You are now logged in";
    header('location: index.php'); //redirect to homepage
    }

}


//if the UpdateProfile button is clicked

if(isset($_POST['UpdateProfile']))
{

    $username= $_SESSION['usernames'];
    $Department = mysql_real_escape_string($_POST['Department']);
    $ContactNo = mysql_real_escape_string($_POST['ContactNumber']);
    $InterestedIn = mysql_real_escape_string($_POST['InterestedIn']);
    $ExpertIn = mysql_real_escape_string($_POST['ExpertIn']);
    
   
    //ensure that the form fields are filled properly
    
   

    //if there are no errors ,update user to database
    
        
     $sql= "update teachers SET Department='$Department' where username='$username'";
     $sql1= "update teachers SET ContactNo='$ContactNo' where username='$username'";
     $sql2= "update teachers SET InterestedIn='$InterestedIn' where username='$username'";
     $sql3= "update teachers SET ExpertIn='$ExpertIn' where username='$username'";


     
     if(!empty($Department))
     {
        mysqli_query($db,$sql);
     }
     if(!empty($ContactNo))
     {
        mysqli_query($db,$sql1);
     }
     if(!empty($InterestedIn))
     {
        mysqli_query($db,$sql2);
     }
     if(!empty($ExpertIn))
     {
        mysqli_query($db,$sql3);
     }
       
    
   
    $_SESSION['success']="You are now signed in";
    header('location: index.php'); //redirect to homepage
    }












//log user in from login page
if (isset($_POST['login'])) 
{
    $username=mysql_real_escape_string($_POST['username']);
     $password=mysql_real_escape_string($_POST['password']);

    //ensure that the form fields are filled properly
    if(empty($username))
    {
        array_push($errors,"Username is required");
    }
    if(empty($password))
    {
        array_push($errors,"Password is required");
    }

    if(count($errors) == 0)
    {
        $password=md5($password); // encrypt password before comparing that with the database
        $query= "SELECT * FROM teachers WHERE username='$username' AND password='$password'";
        $result= mysqli_query($db,$query);
        if(mysqli_num_rows($result) == 1)
        {
            //log  user in
            mysqli_query($db,$sql);
            $_SESSION['usernames']=$username;
            $_SESSION['success']="You are now logged in";
            header('location: index.php'); //redirect to homepage
            
        }
        else{
            array_push($errors,"Wrong username/password combination");
        }
    }
}

   //logout
   if(isset($_GET['logout']))
   {
       session_destroy();
       unset($_SESSION['usernames']);
       header('location: login.php');
   }
?>