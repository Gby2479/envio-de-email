<?php
$nome=$_POST['nome'];
$email=$_POST['email'];
$assunto=$_POST['assunto'];
$mensagem=$_POST['msg'];

require "./PHPMailer/PHPMailerAutoload.php"; //importando 

$mail= new PHPMailer; //estanciando
$mail->isSMTP(); //servidor

//config do serv email
$mail->Host="smtp.gmail.com";
$mail->Port="587";
$mail->SMTPSecure="lts";
$mail->SMTPAuth="true";
$mail->Username="joaoaulaphpemail@gmail.com";
$mail->Password="aula123aula";

//config
$mail->setFrom($mail->Username,"Gabriel"); //remetente
$mail->addAddress("joaoaulaphpemail@gmail.com"); //disnatario
$mail->Subject=$assunto; //assunto do email

$conteudo_email="
    Você Recebeu uma mensagem de $nome ($email):
    <br><br>
    Mensagem:<br>
    $mensagem
";

$mail->IsHTML(true);
$mail->Body=$conteudo_email;

if($mail->send()){
    echo "E-mail enviado com sucesso!";
}
else{
    echo "Falha ao enviar o e-mail: ".$mail->ErrorInfo;
}