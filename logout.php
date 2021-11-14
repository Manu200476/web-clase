<?php
    require('./inc/head.php');
    require('./inc/db/config.php');

    if(!$_GET['token']){
        header('Location: ./');
    }
    $token = $_GET['token'];
    $isLoggedIn = $users_crud->isLoggedIn($token);
    if(!$isLoggedIn){
        header('Location: ./');
    }
    
    $users_crud->logout($token);
?>