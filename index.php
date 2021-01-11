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
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

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

			footer {
				position: fixed;
				position: absolute;
			    bottom: auto;
			    color: #FFF;
			    width: 100%;
			    height: auto;    
			    text-align: center;
			    line-height: 100px;
			}

			.card1{
				border-radius: 25px;
    			background-image: none;
    		}

    		.text1{
				text-align: justify;
			}

			.modal-content img {
				margin: auto;
				display: block;
			}
    	</style>

		<script type="text/javascript">
			$(document).ready(functin()){
				$('.toggle').click(function()){
					$('ul').toggleClass('active')
				}
			}
		</script>
	</head>
	<body>
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

		<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
	  		<ol class="carousel-indicators">
	    		<li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
	    		<li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
	    		<li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
	  		</ol>
	  		<div class="carousel-inner">
	    		<div class="carousel-item active">
	      			<img src="./img/larissamanoela.jpg" class="d-block w-100" alt="...">
	      		</div>
	    		<div class="carousel-item">
	      			<img src="./img/larissamanoela9.jpg" class="d-block w-100" alt="...">
	      		</div>
	    		<div class="carousel-item">
	      			<img src="./img/larissamanoela8.jpg" class="d-block w-100" alt="...">
	      		</div>
	  		</div>
	  		<a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
	    		<span class="carousel-control-prev-icon" aria-hidden="true"></span>
	    		<span class="sr-only">Previous</span>
	  		</a>
	  		<a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
	    		<span class="carousel-control-next-icon" aria-hidden="true"></span>
	    		<span class="sr-only">Next</span>
	  		</a>
		</div>

		<div class="bo">
			<button class="btn btn-astro"  data-toggle="modal" data-target="#butoncadastro">
				Dúvidas? Mande um E-mail!
			</button>
		</div>

		<div class="modal fade" class="ondas" id="butoncadastro">
			<div class="modal-dialog modal-lg">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title">Dúvidas? Mande um E-mail!</h5>
						<button type="button" class="close" data-dismiss="modal"><span>x</span></button>
					</div>

					<div class="modal-body">

						<p class="text"> Em caso de dúvidas em relação a programação, lógica e competições, ou ainda sugestões de como podemos melhorar, é só preencher o formulário abaixo!</p>

		
						<form method="post" enctype="multipart/form-data" action="duvidas.php">
 							<div id="box_comp">
 		    					<label class="text2" for="nome" class="text2"> Nome*: </label><br>
		  						<input type="text" id="nome" name="nome" required placeholder="Insira aqui o seu nome"><br>
							</div>

							<div id="box_comp"> 
								<br>
						 		<label class="text2" for="email"> E-mail*: </label><br>
						 		<input type="email" id="email" name="email" required placeholder="Insira aqui seu e-mail" ><br>
							</div>
 			
				 		 	<div id="box_comp">
				 		 		<br>
						 		<label class="text2" for="endereco"> Assunto*: </label><br>
						 		<input type="text" id="assunto" name="assunto" required placeholder="Insira aqui o assunto"><br>
							</div><br>

						 	<div id="box_comp">
						 		<label class="text2" for="anexo"> Anexo (máximo de 5MB): </label><br>
						 		<input type="file" id="anexo" name="anexo"><br>
							</div> <br>

							<div id="box_comp">
						 		<label class="text2" for="endereco"> Mensagem*: </label><br>
						 		<textarea id="mensagem" name="mensagem" wrap="hard" required placeholder="Insira aqui a mensagem" rows="5" cols="98"></textarea><br>
							</div>

							<input type="submit" value="ENVIAR" class="botao" id="button_1" name="acao"><br><br>
						</form>
						<p class="campos"><br><br> Campos marcados com " * " são obrigatórios!</p>

						<div class="modal fade" id="butoncadastro" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
							<div class="modal-dialog">
								<div class="modal-content">
									<div class="modal-body">					
										<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
										<button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
									</div>
								</div>
							</div>
						</div>										
            		</div>										
					<div class="modal-footer">
						<button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
					</div>
				</div>	
			</div>
		</div>

		<div class="container" style="margin:30px auto 30px auto;">
			<div class="row">
				<div class="col-md-12"></div>
				<h5 style="color: white;"> Útimas Notícias:</h5>
			</div>
		</div>

		<div class="container" style="display: grid; grid-template-columns: auto auto auto; padding: 10px; grid-row-gap: 100px;">

			<div class="grid-item"></div>

  			<div class="grid-item">  
				<div class="container">
						<div class="row">
							<div class="col-sm">
								<div class="card1">
									<div class="card" style="width: 18rem;">
							  			<img class="card-img-top" src="img/lo.png" alt="Card image cap">
							  			<div class="card-body">
							   				<h5 class="card-title">MOBFOG 2020</h5>
							   				<a href="#" class="btn btn-primary">Ler Mais</a>
							 			</div>
									</div>
								</div>
							</div>

							<div class="col-sm">
								<div class="card1">
									<div class="card" style="width: 18rem;">
							  			<img class="card-img-top" src="img/LULU.png" alt="Card image cap">
							  			<div class="card-body">
							   				<h5 class="card-title">OBSAT 2020</h5>
							    			<p class="card-text"></p>
							   				<a href="#" class="btn btn-primary">Ler Mais</a>
							 			</div>
									</div>
								</div>	
							</div>
						
							<div class="col-sm">
								<div class="card1">				
									<div class="card" style="width: 18rem;">
							  			<img class="card-img-top" src="img/lalala.png" alt="Card image cap">
							  			<div class="card-body">
							   				<h5 class="card-title">OBR 2020</h5>
							    			<p class="card-text"></p>
							   				<a href="#" class="btn btn-primary">Ler Mais</a>
							 			</div>
									</div>
								</div>	
							</div>	
						</div>	
					</div>
					<div class="grid-item"></div>
				</div>
			</div>	

			<div class="container" style="display: grid; grid-template-columns: auto auto auto; padding: 10px; grid-row-gap: 100px;">
				<div class="grid-item"></div>
					<div class="container">
						<div class="row">
							<div class="col-sm">
								<div class="card1">
									<div class="card" style="width: 18rem;">
						  				<img class="card-img-top" src="img/lili.png" alt="Card image cap">
						  				<div class="card-body">
						   					<h5 class="card-title">TRIF 2019</h5>
						   					<button class="btn btn-primary" data-toggle="modal" data-target="#trif">Ler Mais</button>
											<div class="modal fade" id="trif" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  												<div class="modal-dialog modal-lg">
   													<div class="modal-content">
      													<div class="modal-header">
        													<h5 class="modal-title" class="title1" id="exampleModalLabel" style="text-align: center;">Equipes de robótica do Campus Birigui se destacam em torneio do Instituto Federal</h5>
      														<button type="button" class="close" data-dismiss="modal"><span>×</span></button>
      													</div>
      													<div class="modal-body">
	     													<p class="text1">No dia 08 de novembro de 2019, alunos do Segundo Ano do Ensino Médio Integrado em Informática e da Engenharia da Computação, acompanhados pelos professores Ricardo Conde Camillo da Silva e Cássio Agnaldo Onodera, participaram na cidade de São Paulo do 4º TRIF (Torneio de Robótica do Instituto Federal), uma competição restrita apenas a alunos do IFSP, sejam eles do Ensino Médio, Técnico ou Superior, onde Birigui participa desde a primeira edição.</p>

	     													<p class="text1">O Campus Birigui participou das 4 modalidades disponíveis no evento, sendo elas Sumô Controlável, Sumô Autônomo, Busca e Resgate e Corrida de Robôs.</p>

	     													<p class="text1">As equipes participantes foram</p>

	     													<p class="text1">MARIA ROBÔ PÃO – Busca e Resgate –  Integrantes: Kamilly Victória Pedi Fontanetti, Lívia Pinatti Silva, Pedro Henrique Freitas Balducci e Vinícius Rocha Caetano, todos do Integrado em Informática;</p>

	     													<p class="text1">ROBÔ ED – Sumô Autônomo – Integrantes: Eder Lopes de Souza Filho, Gabriel Henrique Dos Santos Silva, Leandro Mello Domingues Pinheiro e Vinícius Henrique do Nascimento, todos da Engenharia da Computação;</p>

	     													<p class="text1">DALE – Sumô Controlável – Integrantes: Abner Henrique dos Santos Simas, Gabriel Augusto Consalter, Guilherme Cerqueira Serra Almeida e Gustavo Shoji Nishimura, todos da Engenharia da Computação;</p>

	     													<p class="text1">MARQUINHOS – Corrida de Robôs – Integrantes: Carlos Henrique Zilioli Braga, Cesar Augusto Gomes Dos Santos, Lucas Finistao Arzani do Nascimento e Pedro Henrique Ton Pauletti, também da Engenharia da Computação.</p>
      													</div>
      													<div class="modal-footer">
        													<button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
      													</div>
    												</div>
  												</div>
											</div>
						 				</div>
									</div>
								</div>
							</div>
							<div class="col-sm">
								<div class="card1">
									<div class="card" style="width: 18rem;">
						  				<img class="card-img-top" src="img/lelele.png" alt="Card image cap">
						  				<div class="card-body">
						   					<h5 class="card-title">OBR 2019</h5>
						    				<p class="card-text"></p>
						   					<a href="#" class="btn btn-primary">Ler Mais</a>
						 				</div>
									</div>
								</div>	
							</div>							
							<div class="col-sm">
								<div class="card1">				
									<div class="card" style="width: 18rem;">
						  				<img class="card-img-top" src="img/lolo.png" alt="Card image cap">
						  				<div class="card-body">
						   					<h5 class="card-title">TRIF 2018</h5>
						    				<p class="card-text"></p>
						   					<a href="#" class="btn btn-primary">Ler Mais</a>
						 				</div>
									</div>
								</div>	
							</div>	
						</div>	
					</div>
					<div class="grid-item"></div>
				</div>

		<footer>
		<h6>
			<br>© Desenvolvido por Equipe SPUTNIK™
			<br><br> INF181 - IFSP BRI
		</h6> 
	</footer>
	</body>
</html>