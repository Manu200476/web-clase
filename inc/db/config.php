<?php 
    $host = "localhost";
    $dbname = "webclase";
    $user = "root";
    $password = "";
    $charset = "utf8mb4";

    $dns = "mysql:host=$host;dbname=$dbname;charset=$charset";

    try{
       $pdo = new PDO($dns, $user, $password);
    }catch(PDOException $e){
        echo '<h1>Ha habido un error</h1>';
    }

    require_once 'task.php';
    $tasks = new Task($pdo);

    require_once 'user.php';
    $users_crud = new User($pdo);
?>