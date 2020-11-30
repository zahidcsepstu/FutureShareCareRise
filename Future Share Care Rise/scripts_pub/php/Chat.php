<?php
    require('../../includes_pub/database/connect.db.php');
    require('../../includes_pub/functions/chat.func.php');
    $messages= get_msg();
    foreach($messages as $message){
       echo '<strong>' .$message['sender']. '</strong><br/>';
       echo $message['message']. '<br/>';
    }
?>
