<?php
    require('../../includes_t/database/connect.db.php');
    require('../../includes_t/functions/chat.func.php');
    $messages= get_msg();
    foreach($messages as $message){
       echo '<strong>' .$message['sender']. '</strong><br/>';
       echo $message['message']. '<br/>';
    }
?>
