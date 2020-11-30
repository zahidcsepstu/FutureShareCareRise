<?php include('server.php'); 

//if user is not logged in,they cannot access this page
if(empty($_SESSION['usernames']))
{
    header('location: http://localhost/Loogin/Index.php');
}


?>

<!DOCTYPE html>
<html>
<head>
<title>Home</title>
<link rel="stylesheet" type="text/css" href="style/style.css"/>
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



<div class="content1">
<?php if (isset($_SESSION['success'])): ?>
<div class="error success">
<h2>
<?php 
   echo $_SESSION['success'];
   unset($_SESSION['success']);
   ?>
   </h2>
   </div>
<?php endif ?>
<?php if(isset($_SESSION['usernames'])): 
    $username=$_SESSION['usernames'] ?>
<p>Welcome <strong> <?php echo $username; ?></strong></p>
<ul>
  <li><a href="http://localhost/Loogin/chat_indexxxx.php" style="color: green;">Private Chat</a></li>
 <li><a href="http://localhost/Loogin/chat_index_pub_student.php" style="color: green;">Public Chat</a></li>
 <li><a href="http://localhost/Loogin/student/profile.php" style="color: green;">Profile</a></li>
 <li><a href="http://localhost/Loogin/student/alluser/userselect.php" style="color: green;">All users</a></li>
 <li><a href="http://localhost/Loogin/student/profile_search/searchuser.php" style="color: green;">Search anyone</a></li>
<li><a href="http://localhost/Loogin/student/UpdateProfile.php" style="color: green;">Update Profile</a></li>
<?php 
$conn = new mysqli("localhost", "root", "", "registration");
$sq2="SELECT count(assignment.id) from assignment
where batch=(SELECT batch from users where username='$username')
and assignment.id not in(select assignment_id from submission)
and DATE(deadline)>CURDATE();";
$result = $conn->query($sq2);
$row = $result->fetch_assoc();
$pendinglist=$row['count(assignment.id)'];
if ($pendinglist!=0) {
    ?>
<li><a href="http://localhost/Loogin/student/assignment/pending_view.php" style="color: #FF0029;">Pending assignment(<?php echo $pendinglist ?>)</a></li>
<?php
}
else{

}
$conn->close();


?>

<li><a href="http://localhost/Loogin/student/assignment/batchselect.php" style="color: green;">Assginment List</a></li>
<li><a href="index.php?logout='1'" style="color: blue;">Logout</a></li>

</ul>
 <?php endif ?>
</div>

<div class="Footer">
<ul>
<li><a href="http://localhost/Loogin/">Home</a></li>
<li><a href="http://localhost/Loogin/about.html">About</a></li>
<li><a href="http://localhost/Loogin/connnnnn/index.php">Contact</a></li>
</ul>
    <p>&copy;Copyright Subrata Saha & Zahid Hassan</p>
    </div>

</body>
</html>