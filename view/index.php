<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Home</title>
	<link href="http://netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.no-icons.min.css" rel="stylesheet">
	<link href="http://netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
	<link rel="stylesheet" href="css/external.css">
</head>

<body>
	<div class="container-fluid">
		<div class="row-fluid">
			<div class="span12">
				<div class="navbar"> <!--Início do navbar -->
					<div class="navbar-inner">
						<div class="container-fluid">
							<a href="#" class="brand"><i class="icon-bookmark"></i>Remember.me</a>
							 <a data-target=".navbar-responsive-collapse" data-toggle="collapse" class="btn btn-navbar">
							 	<span class="icon-bar"></span>
							 	<span class="icon-bar"></span>
							 	<span class="icon-bar"></span>
							 </a>
							 <form class="form-inline" id="login" action="config_login.php" method="POST">
								<input type="text" class="form-control" name="login" placeholder="Login">
								<input type="password" class="form-control" name="password" placeholder="Senha">
								<button type="submit" class="btn btn-primary btn-info">Entrar</button>
							</form>
												
						</div>
					</div>	
				</div> <!-- Fim do navbar -->


				<div class="hero-unit">
					<h1>
						Bem-vindo!
					</h1>
					<img class="img-polaroid" src="http://powerstates.com/wp-content/uploads/homer2.gif" alt="remember">
					<h2>
					Basta um clique!
				    </h2>
				      <p>O Remember.me é a mais nova forma de não se esquecer das suas tarefas diárias!</p>
				      <p> Para isso foi cria um sistema simples de exibição de tarefas em ordem cronológica.</p>
				</div>
			</div>
		</div>
	</div>
	
	<footer>
		<p>&copy; David Veloso & Wandesson Soares -- Todos os direitos reservados</p>	
	</footer>
    <!-- Scrips para o Bootstrap -->
	<script src="http://code.jquery.com/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>