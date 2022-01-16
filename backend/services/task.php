<?php
    include_once dirname(__FILE__) . '/../operations-db/operations.php';
    class task{
        private $operations;
        public function __construct(){
            $this->operations= new operations();
        }
        public function addItemTask($name,$description){
            return $this->operations->insertItem($name,$description);
        }
        public function getItems($table){
            return $this->operations->getItems($table);
        }
        public function searchItem($name){

        }
        public function deleteItem($id_task){
            return $this->operations->deleteItem($id_task);
        }
        public function updateItem($id_task){

        }
    }
 
?>