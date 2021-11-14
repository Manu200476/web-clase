    <?php
        require('./inc/head.php');
        require('./inc/db/config.php');

        if(!$_COOKIE['user_token']){
            header('Location: ./');
        }
        $token = $_COOKIE['user_token'];
        $isLoggedIn = $users_crud->isLoggedIn($token);
        if(!$isLoggedIn){
            header('Location: ./');
        }
        
        $user_tasks = $tasks->getTasks($token);
        $user_info = $users_crud->getUserInfo($token);
    ?>
</head>
    <body>
        <div class="container-fluid">
            <div class="row flex-nowrap">
                <?php require('./inc/components/user-menu.php') ?>
                <div class="col py-3">
                    <div class="d-flex justify-content-end">
                        <a href="./logout.php?token=<?php echo $token ?>" class="btn btn-outline-danger mx-4">
                            <i class=" bi bi-x-diamond-fill"></i> Cerrar Sesion
                        </a>
                        <a href="./crear-tarea.php?token=<?php echo $token ?>" class="btn btn-primary">
                            <i class="bi bi-plus"></i> Crear Tarea
                        </a>
                    </div>
                    <div class="container mt-4">
                        <?php 
                            if(gettype($user_tasks) == 'array' & sizeof($user_tasks) > 0){
                                for ($i = 0; $i < sizeof($user_tasks); $i++) {
                                    $task = $user_tasks[$i];
                                    $task_name = $task['name'];
                                    $task_description = $task['description'];
                                    $task_date = $task['date'];
                                    $task_id = $task['task_id'];
                                    require('./inc/components/task-card.php');
                                }
                            }else{
                                ?>
                                    <h3 class="text-center font-weight-bold mt-4">No hay tareas</h3>
                                <?php
                            }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>