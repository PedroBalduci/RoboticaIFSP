<?php
    require("conexao.php");

    // RECEBENDO OS DADOS PREENCHIDOS DO FORMULÁRIO !
    $login      = $_POST['login'];          //atribuindo o campo "login" vindo do formulário para a variavel $login
    $nova_senha      = $_POST['nova_senha'];          //atribuindo o campo "senha" vindo do formulário para a variavel $senha
    
    $verificaEmail = mysqli_query($conexao, "SELECT login, senha FROM usuarios WHERE login = UCASE('$login')");

    if ((mysqli_num_rows($verificaEmail))> 0){
        $sql = "UPDATE usuarios SET senha = MD5('$nova_senha') WHERE login = UCASE('$login')";

        //Verificação para saber se os dados foram incluídos no Banco de Dados
	    if ($conexao->query($sql) === TRUE) {
	        echo"<script language='javascript' type='text/javascript'>
	        alert('Senha alterada com sucesso! Efetue o Login!');window.close();</script>";

	    } else {
	        echo"<script language='javascript' type='text/javascript'>
	        alert('Erro: '' . $sql . '<br>'' . $conexao->error;);window.location.
	        href='formulario_cadastro.php'</script>";
	       // echo "Erro: " . $sql . "<br>" . $conexao->error;
	    }
    }

    else{
        echo"<script language='javascript' type='text/javascript'>
        alert('Informações Incorretas');window.location.href='index.php';</script>";
    }

    //Finaliza a conexão com o Banco de Dados
    $conexao->close();
?>