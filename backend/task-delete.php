<?php
        include_once dirname(__FILE__) . '/services/task.php';
        $task = new task();
        $data=json_decode($_POST['json'],true);
        if(isset($data['id_task'])) {
            $task_id = $data['id_task'];
            $message = $task->deleteItem($task_id);
            $response = array('status' => $message);
            echo json_encode($response);
        }else{
            $response = array('status' => "Fields are missed");
            echo json_encode($response); 
        }
?>