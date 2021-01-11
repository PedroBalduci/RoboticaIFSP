<?php
    if(isset($_POST['email']) && !empty($_POST['email']) && isset($_POST['senha']) && !empty($_POST['senha'])){
        require("conexao.php");

        session_start();
        // RECEBENDO OS DADOS PREENCHIDOS DO FORMULÁRIO !
        $email      = $_POST['email'];          //atribuindo o campo "email" vindo do formulário para a variável $email
        $senha      = $_POST['senha'];          //atribuindo o campo "senha" vindo do formulário para a variável $senha     

        // Verifica se os dados informados existem no Banco de Dados
        $sql = mysqli_query($conexao, "SELECT email, senha FROM usuarios WHERE email = '$email' AND senha = MD5('$senha')");

        // cria a instrução SQL que vai selecionar os dados
        $query = sprintf("SELECT funcao, login, email FROM usuarios WHERE email = '$email' AND senha = MD5('$senha')");
        // executa a query
        $dados = mysqli_query($conexao, $query) or die(mysql_error());
        // transforma os dados em um array
        $linha = mysqli_fetch_assoc($dados);

        if (mysqli_num_rows($sql) > 0){

            if ($linha['funcao'] == 'aluno') {
                $_SESSION['email'] = $email;
                $_SESSION['senha'] = $senha;
                setcookie("login", $linha['login']);
                setcookie("email", $linha['email']);
                header('location: area_restrita.php');
            }
            else if (($linha['funcao'] == 'professor') or ($linha['funcao'] == 'tecnico')) {
                $_SESSION['email'] = $email;
                $_SESSION['senha'] = $senha;
                setcookie("login", $linha['login']);
                setcookie("email", $linha['email']);
                header('location: area_restrita_professor.php');
            }
        }

        else{
            unset($_SESSION['email']);
            unset($_SESSION['senha']);
            echo"<script language='javascript' type='text/javascript'>
            alert('Usuário não localizado');window.location.href='index.php';</script>";
        }
    }
?>