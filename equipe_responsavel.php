<?php
    session_start();
    
    $logado = $_COOKIE['login'];
    $email = $_COOKIE['email'];

    if ($logado != null) {
    	$logado = mb_strtoupper($_COOKIE['login'],"utf-8");
    	$email = mb_strtoupper($_COOKIE['email'],"utf-8");
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

    		.itens {
    			align-content: center;
				width: 40%;
    			margin-top: 20px;
    			margin-left: 0px;
    			margin-right: 0px;
    			padding: 0rem;
    		}

    		#nome_equipe, #email1, #email2, #email3, #email4, #email5, #quantidade, #responsavel {
				font-family: 'Montserrat', sans-serif;
				font-weight: 400;  
				font-weight: bold;
				background-color: #e6e6e6;
				border: none;
				width: 100%;
				padding: 5px;
				float: left;
				margin-left: 1vw;
			}

			#responsavel {
				background-color: #cccccc;
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

			#nome_equipe {
				display: flex;
				text-align: center;
				width: 30%;
				margin: 1vw;
				margin-top: 0px;
				font-family: 'Montserrat', sans-serif;
				font-weight: 400;  
				font-weight: bold;
				background-color: #e6e6e6;
				border: none;
				padding: 5px;
				float: left;
			}

			footer {
				position: fixed;
				position: absolute;
			    bottom: -900px;
			    color: #FFF;
			    width: 100%;
			    height: auto;    
			    text-align: center;
			    line-height: 100px;
			}

			#voltar {
				width: 10%;
				margin-top: 8px;
				margin-left: 1vw;
				background-color: #262626;
				color: #fff;
				border: none;
				padding: 13px;
				font-family: 'Montserrat', sans-serif;
				font-weight: 600;
				float: left;
				border-radius: 10px;
	        	cursor: pointer;
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
		  		<a href="area_restrita.php" class="navbar-brand">
					<img src="./img/IFSP.png" style="width: 280px; height: 80px; top: 0;">
				</a>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			  		<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
			  		<ul class="navbar-nav me-auto mb-2 mb-lg-0">
						<li class="nav-item">
				  			<a  aria-current="page" href="area_restrita.php"><b>Home</b></a>
						</li>
						<li class="nav-item">
				  			<a  href="#"><b>MEU PERFIL</b></a>
						</li>
						<li class="nav-item dropdown">
				  			<a  href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"><b>EQUIPES</b></a>
					  		<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
								<li><a class="dropdown-item" href="minhas_equipes.php">&nbsp;<b>MINHAS EQUIPES</b></a></li>
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
		<section>
			<fieldset>
				<h1><b>PARTICIPANTES</b></h1><br>

				<label><h6>Os participantes das equipes que o senhor(a) é responsável são:</h6></label><br><br>

			    <table style="text-align: center;">
		            <tr>
		                <?php 

		                $conn = new PDO("mysql:dbname=bd_usuarios;host=localhost", "root", ""); //banco de conexão desejada: nome do banco=tal; onde quero conectar; PDO permite trabalhar com transações

		                $stmt = $conn->prepare("SELECT nome_equipe, responsavel, email1, email2, email3, email4, email5 FROM equipes WHERE responsavel = '$email'");

		                $stmt->execute();

		                $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

		                $i = 1; // Set the increment variable
		                foreach( $results as $modal ):  

		                ?>
		    
			            <div id="item">
				            <input type="text" id="nome_equipe" class="form-group" name="nome_equipe" value="Equipe: <?=$modal['nome_equipe']?>" readonly>

			            	<fieldset class="itens">
				                <input type="text" id="responsavel" class="form-group" name="responsavel" value="<?=$modal['responsavel']?>" readonly>

				                <input type="text" id="email1" class="form-group" name="email1" value="<?=$modal['email1']?>" readonly>

				                <input type="text" id="email2" class="form-group" name="email2" value="<?=$modal['email2']?>" readonly>

				                <input type="text" id="email3" class="form-group" name="email3" value="<?=$modal['email3']?>" readonly>

				                <input type="text" id="email4" class="form-group" name="email4" value="<?=$modal['email4']?>" readonly>

				                <input type="text" id="email5" class="form-group" name="email5" value="<?=$modal['email5']?>" readonly>
				            </fieldset>

			                <?php   $i++; 
			    
			                endforeach; 
			                ?>

			                <br><a href="minhas_equipes_professor.php"><input type="submit" id="voltar" class="form-group" name="voltar" value="Voltar" readonly></a>
			            </div>
			        </tr>
			    </table>
			</fieldset>
		</section>
	</body>
	<footer>
		<h6>
			<br>© Desenvolvido por Equipe SPUTNIK™
			<br><br> INF181 - IFSP BRI
		</h6> 
	</footer>
</html>