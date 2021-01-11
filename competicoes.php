<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<title>Robótica IFSP - BRI</title>
		<meta name="viewport" content="width=device-width,initial-scale=1, user-scalable=no">
		<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    	<!-- Bootstrap CSS -->
		<link rel="stylesheet" type="text/css" href="style.css">
    	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="style.css">

    	<style type="text/css">
    		header {
    			height: 84px;
    		}

    		body {
    			background-color: #282424;
    		}

    		textarea {
				resize: none;
			}

			footer {
				background-color: #262626;
				color: #fff;
				text-align: center;
			}

			#carouselExampleCaptions{
				margin-top: 8.5px;
			}

    		#btn_Area {
    			width: auto;
    			border-radius: 0px;
    		}

    		#nome, #email, #assunto, #mensagem, #anexo, #senha, #login {
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

			#button_1 {
				border-radius: 5px;
				border-style: solid;
				border-width: thin;
				width: 30%;
				margin-top: 18px;
				border: 10px;
				margin-bottom: 22px;
				background-color: #e6e6e6;
				margin-left: 35%;
				margin-right: 30%;
			}
	    	
		    h6 {
				background-color: #262626;
				text-align: center;
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

			.modal-title{
				font-size: 36px;
				font-weight: bold;
				text-align: center;
			}

			.modal-body {
				padding: 2rem;
			}

			#modal-body {
				padding: 1rem;
			}

			.modal-footer {
				margin-top: -25px;
			}

			.bo{
				position: absolute;
				top: 56%;				/*ALTERA A DISTÂNCIA DO BOTÃO DE DÚVIDAS EM RELAÇÃO AO TOPO DA PÁGINA*/
				left: 4%;
				right: 5%;
				color: #fff;
				text-align: center;
				font-weight: 300;
				font-size: 30px;
				letter-spacing: 10px;
				margin-top: 180px;
				padding-left: 10px;
				text-transform: uppercase;
			}

			.btn-astro{
				background-image: linear-gradient(120deg,#00664d,#00cc99);
				border: none;
				color: white;
				padding: 15px 42px;
				text-align: center;
				text-decoration: none;
				display: inline-block;
				font-size: 16px;
				border-radius: 50px;
			}

			.btn-astro:hover, .btn-astro:active, .btn-astro:focus {
				color: #fff;
			}

			.img_robot{
				float: left;
				width: 300px;
				margin-left: 500px; 
				margin-top:100px;

			}
			
    		.card1 {
    			background-image: none;
    		}
    	</style>
    </head>

    <body style="background-color: #262626;">
    	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

		<section class="menu">
			<label for="btn_menu">&#9776;</label>
			<header>
				<a href="" class="logo">
					<img src="./img/IFSP.png" style="width: 280px; height: 80px; top: 0;">
				</a>
				<a class="toggle"><b>Menu</b></a>
				<ul class="active">
					<li><a href="index.php"><b>Home</b></a></li>
					<li><a href="competicoes.php"><b>Competições</b></a></li>
					<li><a href="modalidades.php"><b>Modalidades</b></a></li>
					<li><a href="pesquisa.php"><b>Pesquisas</b></a></li>
					<button id="btn_Area" type="button" class="btn btn-secondary" data-toggle="modal" data-target="#Modal" ><b>ÁREA RESTRITA</b></button>
					<div class="modal fade" id="Modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				    	<div class="modal-dialog">
				    		<div class="modal-content">
				    			<div class="modal-header">
				    				<h5 class="modal-title">Faça Login</h5>
									<button type="button" class="close" data-dismiss="modal"><span>×</span></button>	
								</div>
				       			<div id="modal-body" class="modal-body">
									<form method="post" enctype="multipart/form-data" action="login.php">
	 									<div id="box_comp">
		 		    						<label class="text2" for="nome" class="text2"> E-mail*: </label><br>
				  							<input type="email" id="email" name="email" required placeholder="Insira aqui o seu E-mail"><br>
										</div>
										<div>
											<br>
							 				<label class="text2" for="email"> Senha*: </label> <br>
							 				<input type="password" id="senha" name="senha" required placeholder="Insira aqui sua Senha" ><br>
										</div>
										<div>
											<br>
											<p>Esqueceu a senha? <a href="esqueceu.html" target="_blank">Clique aqui</a></p>
											<input type="submit" value="ACESSAR" class="botao" id="button_1" name="btn_enviar"><br><br>
										</div>
										<div class="modal-footer">
											<p id="paragra">Ainda não possui uma conta? <a href="formulario_cadastro.php" target="_blank">Cadastre-se!</a></p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
											<button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
										</div>
									</form>	
			        			</div>
			      			</div>
			    		</div>
			  		</div>						
				</ul>
			</header>
		</section>

		<div class="container" style="margin:30px auto 30px auto;">
			<div class="row">
				<div class="col-md-12"></div>
			</div>
		</div>

		 <div class="grid-container">

			<div class="grid-item"></div>

  			<div class="grid-item">  
				<div class="container" style="margin:40px auto 30px auto;">
					<div class="row">
						<div class="col order-first">
							<div class="card1">
								<div class="card" style="width: 18rem;">
						  			<img class="card-img-top" src="img/obr.png" alt="Card image cap">
						  			<div class="card-body">
						   				<h5 class="card-title">OBR</h5>
						   				<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#obr">Ler Mais</button>
										<div class="modal fade" id="obr" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
										  <div class="modal-dialog">
										    <div class="modal-content">
										      <div class="modal-header">
										        <h5 class="modal-title" id="exampleModalLabel">Oliimpíada Brasileira De Robòtica</h5>
										        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
										      </div>
										      <div class="modal-body">
										        ...
										      </div>
										      <div class="modal-footer">
										        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
										        <button type="button" class="btn btn-primary">Save changes</button>
										      </div>
										    </div>
										  </div>
										</div>
						 			</div>
								</div>
							</div>
						</div>

						<div class="col">
							<div class="card1">
								<div class="card" style="width: 18rem;">
						  			<img class="card-img-top" src="img/trif.png" alt="Card image cap">
						  			<div class="card-body">
						   				<h5 class="card-title">TRIF</h5>
						    			<p class="card-text"></p>
						   				<a href="#" class="btn btn-primary">Ler Mais</a>
						 			</div>
								</div>
							</div>	
						</div>
						
						<div class="col order-last">
							<div class="card1">				
								<div class="card" style="width: 18rem;">
						  			<img class="card-img-top" src="img/tbr.png" alt="Card image cap">
						  			<div class="card-body">
						   				<h5 class="card-title">TBR</h5>
						    			<p class="card-text"></p>
						   				<a href="#" class="btn btn-primary">Ler Mais</a>
						 			</div>
								</div>
							</div>	
						</div>	
					</div>	
				</div>
			</div>
			<div class="grid-item"></div>
		</div>			
	</body>	
</html>    