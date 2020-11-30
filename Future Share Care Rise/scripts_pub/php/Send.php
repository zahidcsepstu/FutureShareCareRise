
<?php
 require('../../teacher/server.php'); 
   require('../../includes_pub/database/connect.db.php');
   require('../../includes_pub/functions/chat.func.php');
       $sender=$_SESSION['username'];
       if(empty($sender)){
        $sender=$_SESSION['usernames'];  
       }
       $message=$_GET['message'];
           if(send_msg($sender,$message)){
               echo 'Message Sent';
           }else{
               echo 'Message Was Not Sent';
           }

?>