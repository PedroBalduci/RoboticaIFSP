<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<meta name="viewport" content="width=device-width,initial-scale=1, user-scalable=no">
		<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    	<!-- Bootstrap CSS -->
    	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
		<link rel="icon" href="SPUTNIK.png" type="image/x-icon"/>
		<link rel="stylesheet" type="text/css" href="style.css">
		<title>Robótica IFSP - BRI</title>

    	<style type="text/css">
    		fieldset {
    			align-content: center;
				width: 90%;
				background-color: #b3b3b3;
    			margin: 50px;
    			margin-left: 80px;
    			padding: 3rem;
    		}

    		header {
    			height: 84px;
    		}

    		textarea {
				resize: none;
			}

    		#btn_Area {
    			width: auto;
    			border-radius: 0px;
    		}

    		#nome, #email, #assunto, #mensagem, #anexo, #data_nasc, #cpf, #ddd, #telefone, #prontuario, #login, #senha {
				font-family: 'Montserrat', sans-serif;
				font-weight: 400;  
				font-weight: bold;
				background-color: #e6e6e6;
				border: none;
				width: 100%;
				padding: 5px;
				float: left;
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
	    	
			input[type="radio"]{
				-ms-transform: scale(1.5); /* IE 9 */
			    -webkit-transform: scale(1.5); /* Chrome, Safari, Opera */
			    transform: scale(1.5);
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
				top: 143%;
				left: 100px;
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

			.radio{
				margin-top: 6px;
				margin-bottom: 6px;
			}

			footer {
				position: fixed;
				position: absolute;
			    bottom: -660px;
			    color: #FFF;
			    width: 100%;
			    height: auto;    
			    text-align: center;
			    line-height: 100px;
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

		<form method="post" action="cadastro.php">
			<fieldset>
				<h1><b>CADASTRO DE USUÁRIOS</b></h1><br>

				<label><b>Nome Completo:* </b></label>
				<input type="text" name="nome" id="nome" placeholder="Insira aqui seu Nome Completo" required><br><br><br>

				<label><b>E-mail: * </b></label>
				<input type="email" name="email" id="email" placeholder="Insira aqui seu E-mail" required><br><br><br>

				<label><b>Data de Nascimento:* </b></label>
				<input type="date" name="data_nasc" id="data_nasc" required><br><br><br>
				
				<label><b>CPF: (Somente Números)* </b></label>
				<input type="text" name="cpf" id="cpf" minlength="11" maxlength="11" placeholder="Insira aqui os números do seu CPF" required><br><br><br>

				<div class="radio">
					<label for="genero"><b>Sexo:* </b></label>&nbsp;&nbsp;&nbsp;
	           		<input type="radio" name="genero" id="masculino" value="masculino" required>&nbsp;
	           		<label><b>Masculino</b></label>&nbsp;&nbsp;&nbsp;
	           		<input type="radio" name="genero" id="feminino" value="feminino">&nbsp;
	           		<label><b>Feminino</b></label><br>
	           	</div>

           		<label for="tel"><b>Telefone: (Com DDD)* </b></label>
           		<input type="text" name="telefone" id="telefone" placeholder="Insira aqui somente os Números do seu Telefone" required minlength="10" maxlength="11"><br><br><br>

				<label><b>Prontuário:* </b></label>
				<input type="text" name="prontuario" id="prontuario" placeholder="Insira aqui o seu Prontuário do IFSP" maxlength="9" required><br><br><br>

				<div class="radio">
					<label for="funcao"><b>Você é:* </b></label><br>
	           		<input type="radio" name="funcao" id="aluno" value="aluno" required>&nbsp;
	           		<label><b>Aluno(a)</b></label>&nbsp;&nbsp;&nbsp;
	           		<input type="radio" name="funcao" id="professor" value="professor">&nbsp;
	           		<label><b>Professor(a)</b></label>&nbsp;&nbsp;&nbsp;
	           		<input type="radio" name="funcao" id="tecnico" value="tecnico">&nbsp;
	           		<label><b>Técnico(a) Administrativo(a)</b></label><br>
	           	</div>

				<label><b>Login:* </b></label>
				<input type="text" name="login" id="login" placeholder="Insira aqui seu Login" maxlength="30" required><br><br><br>

				<label><b>Senha:* </b></label>
				<input type="password" name="senha" id="senha" placeholder="Insira aqui sua Senha" minlength="8" maxlength="40" required><br><br><br>

				<input type="submit" value="CADASTRAR" class="botao" id="button_2" name="cadastrar">
				<input type="reset" value="CANCELAR" class="botao" id="button_3" name="cancelar"><br><br><br>

				<p class="campos"><br><br> Campos marcados com " * " são obrigatórios!</p>
			</fieldset>
		</form>

		<div class="bo">
			<button class="btn btn-astro"  data-toggle="modal" data-target="#butoncadastro">
				Dúvidas? Mande um E-mail!
			</button>
		</div>
		<form id="duvida" name="duvida" method="post" action="duvidas.php">
			<div class="modal fade" class="ondas" id="butoncadastro">
				<div class="modal-dialog modal-lg">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title">Dúvidas? Mande um E-mail!</h5>
							<button type="button" class="close" data-dismiss="modal"><span>x</span></button>
						</div>

						<div class="modal-body">

							<p class="text"> Em caso de dúvidas em relação a programação, lógica e competições, ou ainda sugestões de como podemos melhorar, é só preencher o formulário abaixo!</p>

			
							<form method="post" enctype="multipart/form-data">
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
							 		<textarea id="mensagem" wrap="hard" required placeholder="Insira aqui a mensagem" rows="5" cols="98"></textarea><br>
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
		</form>
		<footer>
		<h6>
			<br>© Desenvolvido por Equipe SPUTNIK™
			<br><br> INF181 - IFSP BRI
		</h6> 
	</footer>
	</body>
</html>