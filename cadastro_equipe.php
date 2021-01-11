<?php
    require("conexao.php");

    // RECEBENDO OS DADOS PREENCHIDOS DO FORMULÁRIO !
    $responsavel   = $_POST['professor'];     //atribuindo o campo "responsavel" vindo do formulário para a variavel $professor
    $nome_equipe = $_POST['nome_equipe'];     //atribuindo o campo "nome_equipe" vindo do formulário para a variavel $nome_equipe
    $email1      = $_POST['email1'];          //atribuindo o campo "email1" vindo do formulário para a variavel $email1
    $email2      = $_POST['email2'];          //atribuindo o campo "email2" vindo do formulário para a variavel $email2
    $email3      = $_POST['email3'];          //atribuindo o campo "email3" vindo do formulário para a variavel $email3
    $email4      = $_POST['email4'];          //atribuindo o campo "email4" vindo do formulário para a variavel $email4
    $email5      = $_POST['email5'];          //atribuindo o campo "email5" vindo do formulário para a variavel $email5

    $verificaNome = mysqli_query($conexao, "SELECT nome_equipe FROM equipes WHERE nome_equipe = '$nome_equipe' LIMIT 1");
    $verificaEmail1 = mysqli_query($conexao, "SELECT email FROM usuarios WHERE email = '$email1' LIMIT 1");
    $verificaEmail2 = mysqli_query($conexao, "SELECT email FROM usuarios WHERE email = '$email2' LIMIT 1");
    $verificaEmail3 = mysqli_query($conexao, "SELECT email FROM usuarios WHERE email = '$email3' LIMIT 1");
    $verificaEmail4 = mysqli_query($conexao, "SELECT email FROM usuarios WHERE email = '$email4' LIMIT 1");
    $verificaEmail5 = mysqli_query($conexao, "SELECT email FROM usuarios WHERE email = '$email5' LIMIT 1");

    if (($responsavel == $email1) or ($responsavel == $email2) or ($responsavel == $email3) or ($responsavel == $email4) or ($responsavel == $email5)) {
        die ("<script language='javascript' type='text/javascript'>
            alert('O Professor/ Técnico Administrativo já faz parte da equipe! Inclua outro membro.');window.location.href='nova_equipe.php';</script>");
    }

    else if (mysqli_num_rows($verificaNome) > 0) {
        die ("<script language='javascript' type='text/javascript'>
            alert('O nome escolhido para a Equipe já foi cadastrado');window.location.href='nova_equipe.php';</script>");
    }

    else if (mysqli_num_rows($verificaEmail1) == 0){
        die ("<script language='javascript' type='text/javascript'>
            alert('O Membro Número 1 não está cadastrado');window.location.href='nova_equipe.php';</script>");
    }

    else if (mysqli_num_rows($verificaEmail2) == 0){
        die ("<script language='javascript' type='text/javascript'>
            alert('O Membro Número 2 não está cadastrado');window.location.href='nova_equipe.php';</script>");
    }

    else if (mysqli_num_rows($verificaEmail3) == 0){
        die ("<script language='javascript' type='text/javascript'>
            alert('O Membro Número 3 não está cadastrado');window.location.href='nova_equipe.php';</script>");
    }

    else if (mysqli_num_rows($verificaEmail4) == 0){
        die ("<script language='javascript' type='text/javascript'>
            alert('O Membro Número 4 não está cadastrado');window.location.href='nova_equipe.php';</script>");
    }

    else if (mysqli_num_rows($verificaEmail5) == 0){
        die ("<script language='javascript' type='text/javascript'>
            alert('O Membro Número 5 não está cadastrado');window.location.href='nova_equipe.php';</script>");
    }

    // inserindo os dados na tabela "equipes"
    $sql = "INSERT INTO equipes VALUES"; 
    // informando quais os dados que serão inseridos na tabela "informações"
    $sql .= "('$responsavel', UCASE('$nome_equipe'), UCASE('$email1'), UCASE('$email2'), UCASE('$email3'), UCASE('$email4'), UCASE('$email5'))";

    //Verificação para saber se os dados foram incluídos no Banco de Dados
    if ($conexao->query($sql) === TRUE) {
        echo"<script language='javascript' type='text/javascript'>
        alert('Equipe cadastrada com sucesso!');window.location.href='minhas_equipes_professor.php';</script>";

    } else {
       echo"<script language='javascript' type='text/javascript'>
        alert('Erro. A equipe não pôde ser cadastrada!');window.location.href='nova_equipe.php';</script>";
    }

    //Finaliza a conexão com o Banco de Dados
    $conexao->close();
?>