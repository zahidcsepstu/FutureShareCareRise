
<?php
 require('../../student/server.php'); 
   require('../../includes/database/connect.db.php');
   require('../../includes/functions/chat.func.php');
       $sender=$_SESSION['usernames'];
       $message=$_GET['message'];
           if(send_msg($sender,$message)){
               echo 'Message Sent';
           }else{
               echo 'Message Was Not Sent';
           }

?>