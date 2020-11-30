<?php include('server.php'); 
if(empty($_SESSION['usernames']))
{
    header('location: http://localhost/Loogin/Index.php');
}
?>
<html>
<head>
<title> Search for a user:</title>
<link rel="stylesheet" type="text/css" href="style.css"/>
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
  <li><a href="http://localhost/Loogin/">Home</a></li>
  <li><a href="http://localhost/Loogin/about.html">About</a></li>
  <li><a href="http://localhost/Loogin/connnnnn/index.php">Contact</a></li>
</ul>
  </div>
<br>
<br>
<br>
<div class="search">
<?php 

//check for a form submission
if(isset($_GET['username'])){
$username=$_GET['username'];
$con=mysql_connect("localhost","root","") or die("Could not connect to the server");
mysql_select_db("registration") or die("that database could not be found");
$userquery=mysql_query("Select * from teachers where username like '%$username%'",$con) or die("The query could not be found");
if(empty($username))
{
    die ("<p >username required</p>");
}

else if(mysql_num_rows($userquery)==0)
{
    die("<p >That username could not be found!</p>");
}
else if(mysql_num_rows($userquery)>1){
    die("<p >Multiple usernames has been found!</p>");
}

while($row=mysql_fetch_array($userquery, MYSQL_ASSOC))
{
  
    $dbusername=$row['username'];
    $email=$row['email'];
    $Department=$row['Department'];
    $ContactNumber=$row['ContactNo'];
    $InterestedIn=$row['InterestedIn'];
    $ExpertIn=$row['ExpertIn'];
 

}




?>
</div>
<h2><?php echo $dbusername;?>'s Profile</h2><br/>
<div class="table">
<table>
    
    <tr><td>Username:</td><td><?php echo $dbusername;?></td></tr>
    <tr><td>Email:</td><td><?php echo $email;?></td></tr>
    <tr><td>Department:</td><td><?php echo $Department;?></td></tr>
    <tr><td>Contact Number:</td><td><?php echo $ContactNumber;?></td></tr>
    <tr><td>Interested In:</td><td><?php echo $InterestedIn;?></td></tr>
    <tr><td>Expert In:</td><td><?php echo $ExpertIn;?></td></tr>
    

</table>
</div>

<?php
}else die("You need to specify a username")
?>
</body>


<div class="Footer">
<ul>
<li><a href="http://localhost/Loogin/">Home</a></li>
<li><a href="http://localhost/Loogin/about.html">About</a></li>
<li><a href="http://localhost/Loogin/connnnnn/index.php">Contact</a></li>
</ul>
    <p>&copy;Copyright Subrata Saha & Zahid Hassan</p>
    </div>
</head>
</html>





