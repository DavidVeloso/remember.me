<?
	require_once '../controller/taskCRUD.class.php';
	require_once '../model/task.class.php';
    				 /* Criação de um nova Tarefa*/
	$taskCrud = new TaskCRUD();
	extract($_GET);

	if(isset($submit)){
		$task = new Task(null, $title, $description, $date);
		$taskCrud->create($task);
		header("Location: index2.php");
	}
?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Cradastro</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
	<link rel="stylesheet" href="css/external.css">
	<style>
		#content{
			float: left;
			margin-left: 450px;
			background: #E6E6E6;
		}
		.item active{
			height: 10px;
		}
	</style>
</head>

<body>
	<div class="container-fluid">
		<div class="row-fluid">
			<div class="span12">
				<div class="navbar"> <!--Início do navbar -->
					<div class="navbar-inner">
						<div class="container-fluid">
							 <a data-target=".navbar-responsive-collapse" data-toggle="collapse" class="btn btn-navbar">
							 	<span class="icon-bar"></span>
							 	<span class="icon-bar"></span>
							 	<span class="icon-bar"></span>
							 </a>
							<a href="#" class="brand"><i class="icon-bookmark"></i>Remember.me</a>						
						</div>
					</div>	
				</div> <!-- Fim do navbar -->
			</div>
		</div>
	</div>
		
	<div id="content" class="cadastro"> <!-- Formulario de Cadastro -->
		<h3>Cadastre-se</h3>
		<form action="">
			<fieldset>
				<label for="titulo">Título</label>
				<input type="text" name="title" required>
				<label for="descricao">Descrição</label>
				<textarea name="description" required></textarea>
				<label for="data">Data</label>
				<input type="date" name="date" required>
				<input class="btn btn-primary" type="submit" name="submit" value="Adicionar">
			</fieldset>
		</form>
	</div><!--  Fim do Formulario de Cadastro -->

	<!-- Scrips para o Bootstrap -->
	<script src="http://code.jquery.com/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>