<?php
    include_once dirname(__FILE__) . '/services/task.php';
    $task = new task();
    $rows = $task->getItems('task');
    $response = array('status' => $rows);
    echo json_encode($response);
?>