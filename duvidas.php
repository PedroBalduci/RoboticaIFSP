<?php
	require 'C:/users/Pedro/vendor/autoload.php';
	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\SMTP;
	use PHPMailer\PHPMailer\Exception;
	$mail = new PHPMailer(true);

	if(isset($_POST['acao'])){

		$email 		= $_POST['email'];
		$nome 		= $_POST['nome'];
		$assunto 	= $_POST['assunto'];
		$arquivo 	= $_FILES["anexo"];
		$mensagem 	= $_POST['mensagem'];

		if((isset($_FILES["anexo"])) AND ($_FILES["anexo"]["size"] > 5000000)){

	  		echo '<script type="text/javascript">alert("O arquivo é maior que 5MB. Tente novamente com outro arquivo.");</script>';

	  	}

		elseif((isset($_FILES["anexo"])) AND ($_FILES["anexo"]["size"] > 1)){
			try {
			    $mail->isSMTP();                                    // Enviar usando SMTP
			    $mail->Host       = 'smtp.gmail.com';               // Defina o servidor SMTP para enviar
			    $mail->SMTPAuth   = true;                           // Habilitar autenticação SMTP
			    $mail->Username   = 'pedroenviophp@gmail.com';      // Nome de usuário SMTP
			    $mail->Password   = 'Senhaphp123';                  // Senha SMTP
			    $mail->SMTPSecure = 'tls';         					// Ativar a criptografia TLS; `PHPMailer::ENCRYPTION_SMTPS` encouraged
			    $mail->Port       = 587;                                    
			    $mail->setFrom('pedroenviophp@gmail.com', $nome);
			    $mail->addAddress('pedroenviophp@gmail.com', 'Robotics_IFSP_Birigui');         // Para quem será enviado
			    $mail->AddReplyTo($email, $nome);							//CORREÇÃO - RESPONDER E-MAIL DO USUÁRIO
			    $mail->Subject = $assunto;
			    $mail->Body    = $mensagem;
			    $mail->AddAttachment($arquivo['tmp_name'], $arquivo['name']  );
			    $enviado = $mail->Send();   

			  if($enviado){
	  				echo"<script language='javascript' type='text/javascript'>
            		alert('E-mail enviado com sucesso!');window.location.href='index.php'</script>";
			    } 
			    else{
	  				echo"<script language='javascript' type='text/javascript'>
            		alert('E-mail não enviado com sucesso!');window.location.href='index.php'</script>";
			    }

			} catch (Exception $e) { } 
		} 

		else {
			try {
			    $mail->isSMTP();                                    // Enviar usando SMTP
			    $mail->Host       = 'smtp.gmail.com';               // Defina o servidor SMTP para enviar
			    $mail->SMTPAuth   = true;                           // Habilitar autenticação SMTP
			    $mail->Username   = 'pedroenviophp@gmail.com';      // Nome de usuário SMTP
			    $mail->Password   = 'Senhaphp123';                  // Senha SMTP
			    $mail->SMTPSecure = 'tls';         					// Ativar a criptografia TLS; `PHPMailer::ENCRYPTION_SMTPS` encouraged
			    $mail->Port       = 587;                                    
			    $mail->setFrom('pedroenviophp@gmail.com', $nome);
			    $mail->addAddress('pedroenviophp@gmail.com', 'Robotics_IFSP_Birigui');         // Para quem será enviado
			    $mail->AddReplyTo($email, $nome);							//CORREÇÃO - RESPONDER E-MAIL DO USUÁRIO
			    $mail->Subject = $assunto;
			    $mail->Body    = $mensagem;
			    $enviado = $mail->Send();   

			    if($enviado){
	  				echo"<script language='javascript' type='text/javascript'>
            		alert('E-mail enviado com sucesso!');window.location.href='index.php'</script>";
			    } 
			    else{
	  				echo"<script language='javascript' type='text/javascript'>
            		alert('E-mail não enviado com sucesso!');window.location.href='index.php'</script>";
			    }

			} catch (Exception $e) { }
		} 

	}
?>