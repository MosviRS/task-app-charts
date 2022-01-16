<?php
  include_once dirname(__FILE__) . '/../connection/connection-database.php';
  include_once dirname(__FILE__) . '/../clases/messages.php';
class operations extends db {
    private $connection;
    private $messages;
    public function __construct(){
      $this->connection=$this->conectar();
      $this->messages=new messages();
    }
    function insertItem($task_name,$task_description){

        $query = "INSERT INTO task(name, description) VALUES ('$task_name', '$task_description')";
        $result = mysqli_query($this->connection, $query);
        if (!$result) {
          die('Query Failed. '.$result);
          return $this->messages->getMessageHash("query_error_add");
        }
        return  $this->messages->getMessageHash("query_succes_add");
    }
    function getItems(){
        $query = "SELECT * FROM task";
        $result = mysqli_query($this->connection, $query);
        if (!$result) {
          die('Query Failed. '.$result);
          return $this->messages->getMessageHash("query_error_items");
        }
        $array_result = array();
        while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
            $array_result[] = $row;
        }
        return $array_result;
    }
    function getItem($task_name){
      $query = "SELECT * FROM task WHERE LOWER(\\name) LIKE %$task_name%";
      $result = mysqli_query($this->connection, $query);
      if (!$result) {
        die('Query Failed. '.$result);
        return $this->messages->getMessageHash("query_error_items");
      }
      $array_result = array();
      while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
          $array_result[] = $row;
      }
      return $array_result;
    }
    function deleteItem($id_task){
        $query = "DELETE FROM task WHERE id_task = $id_task";
        $result = mysqli_query($this->connection, $query);
        if (!$result) {
          die('Query Failed. '.$result);
          return $this->messages->getMessageHash("query_error_delete");
        }
        return  $this->messages->getMessageHash("query_success_delete");
    }
    function updateItem($task_name,$task_description,$id_task){
      $query = "UPDATE task SET name = '$task_name', description = '$task_description' WHERE id = '$id_task'";
      $result = mysqli_query($this->connection, $query);
      if (!$result) {
        die('Query Failed. '.$result);
        return $this->messages->getMessageHash("query_error_update");
      }
      return  $this->messages->getMessageHash("query_success_update");
  }
}
    
?>