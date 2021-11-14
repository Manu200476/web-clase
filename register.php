        <?php 
            require('./inc/head.php');
            require('./inc/db/config.php');

            if($_SERVER["REQUEST_METHOD"] == "POST"){
                $name = $_POST['fullname'];
                $email = $_POST['email'];
                $password = $_POST['password'];

                $users_crud->register($name, $email, $password);
            }
        ?>
        <link href="assets/css/register.css" rel="stylesheet">
    </head>
    <body>
        <section class="vh-100">
            <div class="container py-5 h-100">
                <div class="row d-flex align-items-center justify-content-center h-100">
                    <div class="col-md-8 col-lg-7 col-xl-6">
                        <img src="https://mdbootstrap.com/img/Photos/new-templates/bootstrap-login-form/draw2.svg" class="img-fluid" alt="Phone image">
                    </div>
                    <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
                        <form method="POST" action="./register.php">
                            <div class="form-outline mb-4">
                                <label class="form-label" for="fullname">Nombre Completo</label>
                                <input type="text" name="fullname" id="fullname" class="form-control form-control-lg" />
                            </div>
                            <div class="form-outline mb-4">
                                <label class="form-label" for="email">Email</label>
                                <input type="email" name="email" id="email" class="form-control form-control-lg" />
                            </div>
                            <div class="form-outline mb-4">
                                <label class="form-label" for="password">Contraseña</label>
                                <input type="password" name="password" id="password" class="form-control form-control-lg" />
                            </div>
                            <button type="submit" class="btn btn-primary btn-block">Registrarse</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </body>
</html>