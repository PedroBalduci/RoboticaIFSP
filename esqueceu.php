<?php
    if(isset($_POST['email']) && !empty($_POST['email']) && isset($_POST['cpf']) && !empty($_POST['cpf']) && isset($_POST['prontuario']) && !empty($_POST['prontuario'])){
        require("conexao.php");

        // RECEBENDO OS DADOS PREENCHIDOS DO FORMULÁRIO !
        $email      = $_POST['email'];          //atribuindo o campo "email" vindo do formulário para a variavel $email
        $cpf        = $_POST['cpf'];            //atribuindo o campo "cpf" vindo do formulário para a variavel $cpf
        $prontuario = $_POST['prontuario'];     //atribuindo o campo "prontuario" vindo do formulário para a variavel $prontuario    

        $sql = mysqli_query($conexao, "SELECT email, cpf, prontuario FROM usuarios WHERE email = UCASE('$email') AND cpf = '$cpf' AND prontuario = UCASE('$prontuario')");

        if (mysqli_num_rows($sql) > 0){
            echo"<script language='javascript' type='text/javascript'>
            alert('Informações Corretas! Vamos redirecioná-lo para realizar o cadastro de uma nova senha!');window.location.href='nova_senha.html';</script>";
        }

        else{
            echo"<script language='javascript' type='text/javascript'>
            alert('Informações Incorretas!');window.close();</script>";
        }

        //Finaliza a conexão com o Banco de Dados
        $conexao->close();
    }

    else {
        header("Location:index.php");
    }
?>