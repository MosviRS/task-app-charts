<?php
        include_once dirname(__FILE__) . '/services/task.php';
        $task = new task();
        $data=json_decode($_POST['json'],true);
        if(isset($data['name']) && isset($data['description']) ) {
            $task_name = $data['name'];
            $task_description = $data['description'];
            $message = $task->addItemTask($task_name,$task_description);
            $response = array('status' => $message);
            echo json_encode($response);
        }else{
            $response = array('status' => "Fields are missed");
            echo json_encode($response); 
        }
?>