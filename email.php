<?php

    if(isset($_POST['email']) && !empty($_POST['email'])) {

    



$nome = addslashes($_POST['name']);
$email = addslashes($_POST['email']);
$mensagem = addslashes($_POST['message']);


$to = "contato@programadorbr.com";
$subject = "Contato - Programador Br";
$body = "Nome: ".$nome. "\r\n".
        "Email:".$email. "\r\n".
        "Mensagem: ".$mensagem;
$header = "From:eduardo@programadorbr.com"."\r\n".
        "Reply-To:".$email."\r\n".
        "X=Mailer:PHP/".phpversion();

if(mail($to,$subject,$body,$header)){

    echo("Email enviado com sucesso!");

}else{

    echo("O email não pode ser enviado.");
}

    }



?>
