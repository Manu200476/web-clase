<?php
    require('./inc/head.php');
    require('./inc/db/config.php');

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $name = $_POST['name'];
        $description = $_POST['description'];
        $date = $_POST['date'];
        $user_token = $_GET['token'];

        $tasks->createTask($name, $description, $date, $user_token);
        header("Location: ./usuario.php?token=$user_token");
    }

    if(!$_GET['token']){
        header('Location: ./');
    }
    $token = $_GET['token'];
    $isLoggedIn = $users_crud->isLoggedIn($token);
    if(!$isLoggedIn){
        header('Location: ./');
    }
?>
    <title>Crera Tarea</title>
</head>

    <body class="container">
        <div class="mt-4 d-flex align-items-center justify-content-center">
            <div class="col-lg-5">
                <form method="POST" action="./crear-tarea.php?token=<?php echo $token ?>">
                    <div class="form-group col-md-6">
                        <label for="name" class="font-weight-bold">Nombre</label>
                        <input type="text" name="name" class="form-control" id="name" required>
                    </div>
                    <div class="form-group mt-4">
                        <label for="description" class="font-weight-bold">Descripcion</label>
                        <input type="text" class="form-control" name="description" id="description" required>
                    </div>
                    <div class="form-group mt-4">
                        <label for="date" class="font-weight-bold">Descripcion</label>
                        <input type="date" class="form-control" name="date" id="date" required>
                    </div>
                    <div class="text-center mt-4">
                        <button type="submit" class="btn btn-primary">Crear Tarea</button>
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>