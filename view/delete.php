<?
	require_once '../controller/taskCRUD.class.php';
	require_once '../model/task.class.php';
 			/* Remover uma Tarefa */
	if(isset($_GET['id'])){
				extract($_GET);
				$taskCRUD = new TaskCRUD();
				$taskCRUD->delete($id);
				header('Location:index2.php');
			}
?>