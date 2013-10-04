<?
	require_once '../controller/taskCRUD.class.php';
	require_once '../model/task.class.php';
	/*Exibição de todas as tarefas cadastradas */
	$taskCRUD = new TaskCRUD();
	$tasks = $taskCRUD->readAll();
 ?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Home</title>
	<link href="http://netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.no-icons.min.css" rel="stylesheet">
	<link href="http://netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
	<link href="css/bootstrap-responsive.css" rel="stylesheet">
    <link href="css/template.css" rel="stylesheet">
	<link rel="stylesheet" href="css/external.css">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
</head>

	<style> /*Estilo Aplicado para essa página */
		.span2{
			border: 1px solid black;
			height: 400px;
		}
		#perfil{
			margin-top: 0px;
		}
		button{
			float: right;
		}
		.novo{
			margin-left: 20px;
			float: left;
		}
		.deslogar{
			margin-left: 30px;
			margin: 0;
		}
		.task{
			background: #E6E6E6;
			border-radius: 10px;
			height: 150px;
			width: 500px;
			padding: 20px;
			float: left;
			margin-right: 50px;
			margin-bottom: 30px;
		}
		.delete{	
			float: right;
		}
		.date{
			margin-top: 70px;
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
							<form action="index.php?logout=1" method="POST" class="deslogar">
								<button type="submit" class="btn btn-danger">Deslogar</button>
							</form>			
						</div>
					</div>	
				</div> <!-- Fim do navbar -->
			</div>
		</div>	
	</div>

	<form action="create.php" class="novo">
		<button type="submit" id="novo" class="btn btn-success">Nova Tarefa</button>
	</form>

	 <div  id="perfil" class="container-fluid" style="margin-top: 80px;">	
      <div class="row-fluid">

        <? foreach ($tasks as $task) { ?>

		<div class="task">
	        </a>
	        <a class="delete" href="delete.php?id=<?=$task->getIdTask()?>"> <i class="icon-remove-sign"></i> </a>
			<h4><?= $task->getTitle() ?></h4>
			<p><?= $task->getDescription() ?></p>
			<p class="date">    
				<?$originalDate = $task->getDate(); 
				$newDate = date("d-m-Y", strtotime($originalDate));
				echo "$newDate";
				?>
			</p>
		</div> 
		 
        

	<? } ?>
      </div>

      <hr>

      <footer>
        <p>&copy; David Edson e Wandesson Soares -- Todos os direitos reservados</p>
      </footer>

    </div> <!-- /container -->

	<script src="http://code.jquery.com/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>