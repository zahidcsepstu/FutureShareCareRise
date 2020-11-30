<?php
session_start();
$username= "";
$email="";
$errors=array();
//connect to database
$db = mysqli_connect('localhost','root','','registration');

//if the register button is clicked
if(isset($_POST['register']))
{
    $username=mysql_real_escape_string($_POST['username']);
    $email=mysql_real_escape_string($_POST['email']);
    $batch=mysql_real_escape_string($_POST['batch']);
    $id=mysql_real_escape_string($_POST['id']);
    $password_1=mysql_real_escape_string($_POST['password_1']);
    $password_2=mysql_real_escape_string($_POST['password_2']);
    $sq=mysql_real_escape_string($_POST['sq']);


    //ensure that the form fields are filled properly

    $query = "SELECT * FROM users WHERE username='$username'";
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
    if(empty($batch))
    {
        array_push($errors,"batch name is required");
    }
    if(empty($id))
    {
        array_push($errors,"id is required");
    }
    if(empty($password_1))
    {
        array_push($errors,"Password is required");
    }
    if($password_1 != $password_2)
    {
        array_push($errors,"The two password donot match");
    }
    if(empty($sq))
    {
        array_push($errors,"Please answer the security question");
    }

    
    //if there are no errors ,save user to database
    if(count($errors) == 0)
    {
        $password =md5($password_1); //encrypt password storing
     $sql= "INSERT INTO users(username,email,batch,id,password,sq) 
         VALUES ('$username','$email','$batch','$id','$password','$sq')";
    mysqli_query($db,$sql);
    $_SESSION['usernames']=$username;
    $_SESSION['success']="You are now logged in";
    header('location: index.php'); //redirect to homepage
    }
}




//if the addProfile button is clicked

if(isset($_POST['UpdateProfile']))
{

    $username= $_SESSION['usernames'];
    $RegNo = mysql_real_escape_string($_POST['RegNo']);
    $ContactNumber = mysql_real_escape_string($_POST['ContactNumber']);
    $InterestedIn = mysql_real_escape_string($_POST['InterestedIn']);
    $ExpertIn = mysql_real_escape_string($_POST['ExpertIn']);
    //ensure that the form fields are filled properly
    

    //if there are no errors ,update user to database
    if(count($errors) == 0)
    {
        
     $sql= "update users SET RegNo='$RegNo' where username='$username'";
     $sql1= "update users SET ContactNo='$ContactNumber' where username='$username'";
     $sql2= "update users SET InterestedIn='$InterestedIn' where username='$username'";
     $sql3= "update users SET ExpertIn='$ExpertIn' where username='$username'";

     

     if(!empty($RegNo))
     {
        mysqli_query($db,$sql);
     }
     if(!empty($ContactNumber))
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
        
     
    
    

    
    $_SESSION['success']="Profile Updated";
    header('location: index.php');  //redirect to homepage
    }

}









//log user in from login page
if (isset($_POST['login'])) {
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
        $query= "SELECT * FROM users WHERE username COLLATE Latin1_general_cs ='$username' AND password='$password'";
        $result= mysqli_query($db,$query);
        if( mysqli_num_rows($result) == 1)
        {
            //log  user in
            mysqli_query($db,$sql);
            $_SESSION['usernames']=$username;
            $_SESSION['success']="You are now logged in";
            header('location: index.php'); //redirect to homepage
            
        }
        else
        {
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


//if ForgetPassword button is clicked

if(isset($_POST['submit']))
{
   
    $username=mysql_real_escape_string($_POST['username']);
    $email=mysql_real_escape_string($_POST['email']);
    $sq=mysql_real_escape_string($_POST['sq']);
    $_SESSION['user']=$username;
    
   
    //ensure that the form fields are filled properly
    $query = "SELECT email,sq FROM users WHERE username='$username'";
    $result= mysqli_query($db,$query);

    $row=mysqli_fetch_array($result, MYSQL_ASSOC);
    
      
        $dbemail=$row['email'];
        $dbsq=$row['sq'];
   

        if(empty($username)||empty($email)||empty($sq))
        {
            array_push($errors,"wrong username or email or secret question answer");
        }

        
        if($email!=$dbemail || $sq!=$dbsq)
        {
            array_push($errors,"wrong username or email or secret question answer");
        }
        
        if(count($errors) == 0)
        {

        
         header('location: forgotindex.php'); 
        
     }
    
    }


    //if forgetIndex is clicked

    if(isset($_POST['submitt']))
    {
       
        $password_1=mysql_real_escape_string($_POST['password_1']);
        $password_2=mysql_real_escape_string($_POST['password_2']);
        
       
        //ensure that the form fields are filled properly
        $query = "SELECT email,sq FROM users WHERE username='$username'";
        $result= mysqli_query($db,$query);
    
        $row=mysqli_fetch_array($result, MYSQL_ASSOC);
        
          
            $dbemail=$row['email'];
            $dbsq=$row['sq'];
       
 
            if(empty($password_1))
            {
                array_push($errors,"Password is required");
            }
            if($password_1 != $password_2)
            {
                array_push($errors,"The two password donot match");
            }
            
            if(count($errors) == 0)
            {

             $username=$_SESSION['user'];
             $password =md5($password_1); //encrypt password storing
             $sql= "update users set password='$password' where username='$username'";
            mysqli_query($db,$sql);
           
          
            
             header('location: forgetConfirm.php'); 
            
         }
        
        
  }




?>