<?
	$pdo = new PDO('mysql:host=127.0.0.1', 'root', '');
	$result = $pdo->exec(file_get_contents("../tasksimple.sql"));
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Remember.Me</title>
</head>
<body>
	<h1>Criação do Banco</h1>
</body>
</html>