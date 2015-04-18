<?php

header("Content-Type: text/html; charset=utf8",true);

$destinatarios	= "contato@construpaver.com.br";
$destinatario 	= "Construpaver";
$usuario 		= "contato@construpaver.com.br";
$senha 			= "lpm817774";

/*abaixo as veriaveis principais, que devem conter em seu formulario*/
$nome 				= $_REQUEST['nome'];
$email 				= $_REQUEST['email'];
$telefone 			= $_REQUEST['telefone'];
$cidade				= $_REQUEST['cidade'];
$estado				= $_REQUEST['estado'];
$assunto			= $_REQUEST['assunto'];
$mensagem			= $_REQUEST['mensagem'];

/*********************************** A PARTIR DAQUI NAO ALTERAR ************************************/

include_once("inc/phpmailer/class.phpmailer.php");

$To = $destinatarios;
$Subject = utf8_decode("Mensagem através do site");
$bodyMensagem = "";
$bodyMensagem .= "<strong>Nome:</strong> $nome <br />";
$bodyMensagem .= "<strong>E-mail:</strong> $email <br />";
if(isset($telefone)) $bodyMensagem .= "<strong>Telefone:</strong> $telefone <br />";
if(isset($cidade)) $bodyMensagem .= "<strong>Cidade:</strong> $cidade <br />";
if(isset($estado)) $bodyMensagem .= "<strong>Estado:</strong> $estado <br />";
if(isset($assunto)) $bodyMensagem .= "<strong>Assunto:</strong> $assunto <br />";
$bodyMensagem .= "<strong>Mensagem:</strong> $mensagem";
$Message = $bodyMensagem;

$Host = "smtp.gmail.com";
$Username = $usuario;
$Password = $senha;
$Port = "587";

$mail = new PHPMailer();
$body = $Message;
//$mail->IsHtml(); // telling the class to use HTML
$mail->Host = $Host; // SMTP server
//$mail->SMTPDebug = 1; // enables SMTP debug information (for testing)
// 1 = errors and messages
// 2 = messages only
$mail->SMTPAuth = true; // enable SMTP authentication
$mail->SMTPSecure = "tls";	// SSL REQUERIDO pelo GMail
$mail->Port = $Port; // set the SMTP port for the service server
$mail->Username = $Username; // account username
$mail->Password = $Password; // account password

$mail->SetFrom($usuario, $destinatario);
$mail->Subject = $Subject;
$mail->MsgHTML($body);
$mail->AddAddress($To);

if(!$mail->Send()) {
	echo 'Erro ao enviar e-mail: '. print($mail->ErrorInfo);
} else {
	echo 'sucesso';
}
?>