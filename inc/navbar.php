<?php
    require('./inc/db/config.php');
    if(!isset($_COOKIE['user_token'])){
        $isLoggedIn = false;
    }else{
        $token = $_COOKIE['user_token'];
        $isLoggedIn = $users_crud->isLoggedIn($token);
    }
?>

<header id="header" class="text-dark">
    <div class="container d-flex align-items-center">

        <a href="./" class="logo me-auto">
            <img src="assets/img/logo.png" alt="logo" class="img-fluid">
        </a>

        <nav id="navbar" class="navbar">
            <ul>
                <li><a class="nav-link" href="./sobre-nosotros.php">Sobre Nosotros</a></li>
                <li><a class="nav-link" href="./contacto.php">Contacto</a></li>
                <li><a class="nav-link" href="./blog">Blog</a></li>

                <?php if($isLoggedIn): ?>
                    <li><a class="getstarted" href="./usuario.php?token=<?php echo $token ?>">Zona de Usuario</a></li>
                <?php else: ?>
                    <li><a class="getstarted" href="./login.php">Logearse</a></li>
                    <li><a class="getstarted" href="./register.php">Registrarse</a></li>
                <?php endif; ?>
            </ul>
        </nav>
    </div>
</header>