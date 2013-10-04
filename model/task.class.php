
<?

class Task
{
  private $idTask;
  private $title;
  private $description;
  private $date;

  public function __construct($idTask, $title, $description, $date)
  {
    $this->idTask = $idTask;
    $this->title = $title;
    $this->description = $description;
    $this->date = $date ;
  }

  public function getIdTask()
  {
    return $this->idTask;
  }

  public function setidTask($idTask)
  {
    $this->idTask = $idTask;
    return $this;
  }

  public function getTitle()
  {
    return $this->title;
  }

  public function setTitle($title)
  {
    $this->title = $title;
    return $this;
  }

  public function getDescription()
  {
    return $this->description;
  }

  public function setDescription($description)
  {
    $this->description = $description;
    return $this;
  }

  public function getDate()
  {
    return $this->date;
  }

  public function setDate($date)
  {
    $this->date = $date;
    return $this;
  }
}