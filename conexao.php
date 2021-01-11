<?php 
	//cria a conexão com o Banco de Dados('Localização do Banco de Dados', 'Usuário', 'Senha', 'Nome do Banco de Dados')
    $conexao = mysqli_connect('localhost', 'root', '', 'BD_Usuarios');

    //Ajusta o charset de comunicação entre a Aplicação e o Banco de Dados
    mysqli_set_charset($conexao, 'utf8');

    //Verifica a conexão
    if ($conexao->connect_error) {
       die("Falha ao realizar a conexão: " . $conexao->connect_error);
    }
?>