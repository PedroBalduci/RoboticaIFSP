<?php
    require("conexao.php");

    // RECEBENDO OS DADOS PREENCHIDOS DO FORMULÁRIO !
    $nome       = $_POST['nome'];           //atribuindo o campo "nome" vindo do formulário para a variavel $nome
    $email      = $_POST['email'];          //atribuindo o campo "email" vindo do formulário para a variavel $email
    $data_nasc  = $_POST['data_nasc'];      //atribuindo o campo "data_nasc" vindo do formulário para a variavel $data_nasc
    $cpf        = $_POST['cpf'];            //atribuindo o campo "cpf" vindo do formulário para a variavel $cpf
    $sexo       = $_POST['genero'];         //atribuindo o campo "genero" vindo do formulário para a variavel $sexo
    $telefone   = $_POST['telefone'];       //atribuindo o campo "telefone" vindo do formulário para a variavel $telefone
    $prontuario = $_POST['prontuario'];     //atribuindo o campo "prontuario" vindo do formulário para a variavel $prontuario
    $funcao     = $_POST['funcao'];         //atribuindo o campo "funcao" vindo do formulário para a variavel $funcao
    $login      = $_POST['login'];          //atribuindo o campo "login" vindo do formulário para a variavel $login
    $senha      = $_POST['senha'];          //atribuindo o campo "senha" vindo do formulário para a variavel $senha

    $verificaLogin = mysqli_query($conexao, "SELECT login FROM usuarios WHERE login = '$login' LIMIT 1");
    $verificaEmail = mysqli_query($conexao, "SELECT email FROM usuarios WHERE email = '$email' LIMIT 1");
    $verificaProntuario = mysqli_query($conexao, "SELECT prontuario FROM usuarios WHERE prontuario = '$prontuario' LIMIT 1");
    $verificaCpf = mysqli_query($conexao, "SELECT cpf FROM usuarios WHERE cpf = '$cpf' LIMIT 1");

    if (mysqli_num_rows($verificaLogin) > 0){
        echo"<script language='javascript' type='text/javascript'>
        alert('Esse Login já existe');window.location.href='formulario_cadastro.php';</script>";
    }

    else if (mysqli_num_rows($verificaEmail) > 0){
        echo"<script language='javascript' type='text/javascript'>
        alert('O E-mail informado já está cadastrado');window.location.href='formulario_cadastro.php';</script>";
    }

    else if (mysqli_num_rows($verificaProntuario) > 0){
        echo"<script language='javascript' type='text/javascript'>
        alert('O Prontuário informado já está cadastrado');window.location.href='formulario_cadastro.php';</script>";
    }

    else if (mysqli_num_rows($verificaCpf) > 0){
        echo"<script language='javascript' type='text/javascript'>
        alert('O CPF informado já está cadastrado');window.location.href='formulario_cadastro.php';</script>";
    }

    // inserindo os dados na tabela "usuarios"
    $sql = "INSERT INTO usuarios VALUES"; 
    // informando quais os dados que serão inseridos na tabela "usuarios"
    $sql .= "(UCASE('$nome'), UCASE('$email'), '$data_nasc', '$cpf', '$sexo', '$telefone', UCASE('$prontuario'), '$funcao', UCASE('$login'), MD5('$senha'))"; 

    //Verificação para saber se os dados foram incluídos no Banco de Dados
    if ($conexao->query($sql) === TRUE) {
        echo"<script language='javascript' type='text/javascript'>
        alert('Usuário cadastrado com sucesso! Efetue o Login!');window.close();</script>";

    } else {
        echo"<script language='javascript' type='text/javascript'>
        alert('Erro: '' . $sql . '<br>'' . $conexao->error;);window.location.
        href='formulario_cadastro.php'</script>";
       // echo "Erro: " . $sql . "<br>" . $conexao->error;
    }

    //Finaliza a conexão com o Banco de Dados
    $conexao->close();
?>