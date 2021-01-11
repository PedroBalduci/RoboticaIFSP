<?php
    session_start();
    
    $logado = $_COOKIE['login'];
    $email_professor = $_COOKIE['email'];

    if ($logado != null) {
    	$logado = mb_strtoupper($_COOKIE['login'],"utf-8");
    	$email_professor = mb_strtoupper($_COOKIE['email'],"utf-8");
    }

    else {
    	header('location: index.php');
    }

    if((isset($_SESSION["email"]) == true) and (!isset($_SESSION["senha"]) == true)){
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        header('location: index.php');
    }
?>

<html>
	<head>
		<meta charset="utf-8"/>
		<link rel="icon" href="SPUTNIK.png" type="image/x-icon"/>
		<link rel="stylesheet" type="text/css" href="style.css">
		<title>Robótica - <?php echo $logado; ?></title>
		<meta name="viewport" content="width=device-width,initial-scale=1, user-scalable=no">
		<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    	<!-- Bootstrap CSS -->
    	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    	<style type="text/css">
    		a:link, a:visited, a:active {
				text-decoration: none;
			}

			a:hover {
				text-decoration: none;
			}

			a:active {
				text-decoration: none;
			}

    		.bg-light {
    			background-color: #262626!important;
			}

			.navbar-light .navbar-nav .nav-link.active, .navbar-light .navbar-nav .show>.nav-link, .navbar-light .navbar-nav .nav-link {
    			color: rgb(255 255 255);
			}

			.dropdown-menu {
				top: 110%;
			}

			#navbarDropdown:hover {
				color: #b3b3b3;
			}

			.nav-link:hover {
				color: #b3b3b3;
			}

			.navbar-light .navbar-toggler {
    			background-color: #fff;
    		}

			.btn-outline-success {
    			color: #fff;
    			background-color: #198754;
   				border-color: #198754;
			}

			#btn_sair {
				background-color: red;
				border-color: red;
			}

			fieldset {
    			align-content: center;
				width: 90%;
				background-color: #b3b3b3;
    			margin: 50px;
    			margin-left: 80px;
    			padding: 3rem;
    		}

    		#nome_equipe, #email1, #email2, #email3, #email4, #email5, #quantidade, #professor {
				font-family: 'Montserrat', sans-serif;
				font-weight: 400;  
				font-weight: bold;
				background-color: #e6e6e6;
				border: none;
				width: 100%;
				padding: 5px;
				float: left;
			}

			.botao {
				width: 100%;
				margin-top: 8px;
				border: none;
				padding: 13px;
				font-family: 'Montserrat', sans-serif;
				font-weight: 600;
				float: left;
	        	border-radius: 15px;
	        	cursor: pointer;
			}

			#button_2 {
				background-color: #4CAF50;
			}

			#button_3 {
				background-color: #e60000;
			}
		
			.campos {
				text-align: center;
				font-weight: 600;
				font-size: 15px;
				margin-top: 20px;
			}

			.text{
				text-align: justify;
				color: black;
				font-size: 
			}

			.text2{
				font-weight: bold;
			}

			footer {
				position: fixed;
				position: absolute;
			    bottom: -450px;
			    color: #FFF;
			    width: 100%;
			    height: auto;    
			    text-align: center;
			    line-height: 100px;
			}
    	</style>
    	</script>
    </head>
    <body>
    	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    	<!-- Option 1: Bootstrap Bundle with Popper -->
    	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    	<!-- Option 2: Separate Popper and Bootstrap JS -->
    	
    	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>

		<nav id="navbar" class="navbar navbar-expand-lg navbar-light bg-light">
		  	<div class="container-fluid">
		  		<a href="area_restrita_professor.php" class="navbar-brand">
					<img src="./img/IFSP.png" style="width: 280px; height: 80px; top: 0;">
				</a>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			  		<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
			  		<ul class="navbar-nav me-auto mb-2 mb-lg-0">
						<li class="nav-item">
				  			<a  aria-current="page" href="area_restrita_professor.php"><b>Home</b></a>
						</li>
						<li class="nav-item">
				  			<a  href="meu_perfil_professor.php"><b>MEU PERFIL</b></a>
						</li>
						<li class="nav-item dropdown">
				  			<a  href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"><b>EQUIPES</b></a>
					  		<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
								<li><a class="dropdown-item" href="minhas_equipes_professor.php">&nbsp;<b>MINHAS EQUIPES</b></a></li>
								<button style="width: 100%; border: none; text-align: left; background-color: #fff;"><a class="dropdown-item" href="nova_equipe.php"><b>NOVA EQUIPE</b></a></button>
					  		</ul>
						</li>
			  		</ul>
			  			<label style="color: #fff;"><b>Olá <?php echo $logado; ?></b></label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			  		<form class="d-flex">
						<input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
						<button class="btn btn-outline-success" type="submit">Pesquisar</button>&nbsp;&nbsp;
						<button class="btn btn-outline-success" id="btn_sair"><a href="logout.php" style="color: #FFF;">SAIR</a></button>
			  		</form>
				</div>
		  	</div>
		</nav>
		<form method="POST" action="cadastro_equipe.php">
			<fieldset>
				<h1><b>NOVA EQUIPE</b></h1><br>

				<label>Cada equipe deve ser composta por 5 (cinco) membros, além de 1 (um) professor ou técnico administrativo que será o responsável por ela.</label><br><br>
				<label><b>E-mail do Professor/Técnico Administrativo Responsável:* </b></label>
				<input type="text" name="professor" id="professor" value="<?php echo $email_professor; ?>" readonly><br><br><br>

				<label><b>Nome da Equipe:* </b></label>
				<input type="text" name="nome_equipe" id="nome_equipe" placeholder="Insira aqui o Nome da Equipe" maxlength="50" required><br><br><br>

				<label><b>E-mail do Membro 1:* </b></label>
				<input type="email" name="email1" id="email1" placeholder="Insira aqui o E-mail do Membro 1" required><br><br><br>

				<label><b>E-mail do Membro 2:* </b></label>
				<input type="email" name="email2" id="email2" placeholder="Insira aqui o E-mail do Membro 2" required><br><br><br>

				<label><b>E-mail do Membro 3:* </b></label>
				<input type="email" name="email3" id="email3" placeholder="Insira aqui o E-mail do Membro 3" required><br><br><br>

				<label><b>E-mail do Membro 4:* </b></label>
				<input type="email" name="email4" id="email4" placeholder="Insira aqui o E-mail do Membro 4" required><br><br><br>

				<label><b>E-mail do Membro 5:* </b></label>
				<input type="email" name="email5" id="email5" placeholder="Insira aqui o E-mail do Membro 5" required><br><br><br>

				<input type="submit" value="CADASTRAR" class="botao" id="button_2" name="cadastrar">
				<input type="reset" value="CANCELAR" class="botao" id="button_3" name="cancelar"><br><br><br>

				<p class="campos"><br><br> Campos marcados com " * " são obrigatórios!</p>
			</fieldset>
		</form>
	</body>
	<footer>
		<h6>
			<br>© Desenvolvido por Equipe SPUTNIK™
			<br><br> INF181 - IFSP BRI
		</h6> 
	</footer>
</html>