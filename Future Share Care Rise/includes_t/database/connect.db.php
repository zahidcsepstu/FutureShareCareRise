<?php

    $db_name='registration';    
    if($connection= mysql_connect('localhost','root','')){
        $feedback[] = 'connected to database server....<br/>';
        if($database=mysql_select_db($db_name,$connection)){
            $feedback[] = 'database has been selected....<br/>';
        } else{
            $feedback[] = 'database was not found....<br/>';
        }
    }else{
        $feedback[] = 'Unable to connect to MYSQL server<br/>';
    }
    

?>