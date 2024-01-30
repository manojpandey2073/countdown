<?php

if(isset($_POST['email']) && !empty($_POST['email'])){

$email = addslashes($_POST['email']);
$mensagem = addslashes($_POST['message']);

$to = "xxx@xxx.com";
$subject = "Contato";
$body = "Email: ".$email. "\r\n".
        "Mensagem: ".$mensagem;

$header = "From:xxx@xxx.com"."\r\n".
    "Reply-to".$email."\e\n".
    "X=Mailer:PHP/".phpversion();



    if(mail($to,$subject,$body,$header)) {

        echo "<script>alert('Obrigado pela sua mensagem / Thank you for your message');history.back();</script>";

    }else{
        echo "<script>alert('O Email não pode ser enviado / Email cannot be sent');history.back();</script>";
    }

    }

    
?>