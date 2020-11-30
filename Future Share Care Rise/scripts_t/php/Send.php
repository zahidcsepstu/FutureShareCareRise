
<?php
 require('../../teacher/server.php'); 
   require('../../includes_t/database/connect.db.php');
   require('../../includes_t/functions/chat.func.php');
       $sender=$_SESSION['username'];
       $message=$_GET['message'];
           if(send_msg($sender,$message)){
               echo 'Message Sent';
           }else{
               echo 'Message Was Not Sent';
           }

?>