<?php
    require('./inc/head.php');
    require('./inc/db/config.php');

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $name = $_POST['name'];
        $description = $_POST['description'];
        $date = $_POST['date'];
        $user_token = $_GET['token'];
        $task_id = $_GET['task_id'];
        $tasks->updateTask($task_id, $name, $description, $date, $user_token);
        header("Location: ./usuario.php?token=$user_token");
    }

    if(!$_GET['token'] || !$_GET['task_id']){
        header('Location: ./');
    }
    
    $token = $_GET['token'];
    $task_id = $_GET['task_id'];

    $task = $tasks->getTask($task_id, $token);
?>
  <title>Editar <?php echo $task['name'] ?></title>
</head>

    <body class="container">
        <div class="mt-4 d-flex align-items-center justify-content-center">
            <div class="col-lg-5">
                <form method="POST" action="./editar-tarea.php?token=<?php echo $token ?>&task_id=<?php echo $task_id ?>">
                    <div class="form-group">
                        <label for="name" class="font-weight-bold">Nombre</label>
                        <input type="text" name="name" class="form-control" id="name" value="<?php echo $task['name'] ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="description" class="font-weight-bold">Descripcion</label>
                        <input type="text" class="form-control" name="description" value="<?php echo $task['description'] ?>" id="description" required>
                    </div>
                    <div class="form-group">
                        <label for="description" class="font-weight-bold">Fecha</label>
                        <input type="date" class="form-control" name="date" value="<?php echo $task['date'] ?>" id="date" required>
                    </div>
                    <div class="text-center mt-4">
                        <button type="submit" class="btn btn-primary">Enviar</button>
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>