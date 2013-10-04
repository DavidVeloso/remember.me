
<?
	require_once "../model/task.class.php";

	class TaskCRUD
	{
		private $pdo;

		function __construct()
		{
			$this->pdo = new PDO('mysql:dbname=tasksimple;host=127.0.0.1', 'root', '');
		}

		function create($task)
		{
			$this->pdo->query("INSERT INTO `task` VALUES (null, '{$task->getTitle()}', '{$task->getDescription()}', '{$task->getDate()}')");
		}

		function readAll()
		{
			$pdoStmt = $this->pdo->query("SELECT * FROM `task` order by `date`"); //Ordenação pela data da tarefa
			$tasksArray = $pdoStmt->fetchAll(PDO::FETCH_ASSOC);
			$tasks = array();
			foreach ($tasksArray as $taskArray) {
				extract($taskArray);
				 $tasks[] = new Task($idTask, $title, $description, $date);
			}
			return $tasks;
		}

		function readById($id)
		{
			$pdoStmt = $this->pdo->query("SELECT * FROM `task` WHERE `idTask` = '$id'");
			$task = $pdoStmt->fetch(); 
			return $task;
		}

		function delete($id){
			$this->pdo->query("DELETE FROM `task` WHERE `idTask` = '$id'");
		}
	}
?>