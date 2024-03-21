<?php 
$nome = $_POST['nome'];
$email= $_POST['email'];
$assunto= $_POST['assunto'];
$mensagem= $_POST['mensagem'];
$to = "thiagoaguirre.profissional@gmail.com";
$subject = "Email Repositorio";
$txt ="Name = ". $nome . "\r\n  Email = " . $email . "\r\n Message =" . $mensagem;
$headers = "From: noreply@yoursite.com" . "\r\n" .
"CC: somebodyelse@example.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:index.html");
?>