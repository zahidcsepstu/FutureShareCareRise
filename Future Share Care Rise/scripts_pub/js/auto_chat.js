$(document).ready(function(){
    var interval = setInterval(function(){
        $.ajax({
            url:'scripts_pub/php/Chat.php',
            success: function(data){
                $('#messages').html(data);
            }
        });

    },1000)
});