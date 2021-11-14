<?php
    require('./inc/head.php');
    require('./inc/db/config.php');

    if(!$_GET['token'] || !$_GET['task_id']){
        header('Location: ./');
    }
    $token = $_GET['token'];
    $task_id = $_GET['task_id'];
    $isLoggedIn = $users_crud->isLoggedIn($token);
    if(!$isLoggedIn){
        header('Location: ./');
    }

    $tasks->deleteTask($task_id, $token);
    header("Location: ./usuario.php?token=$token");
?>