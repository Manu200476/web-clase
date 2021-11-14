  <?php 
    require('./inc/head.php');
  ?>
  <link href="assets/css/home.css" rel="stylesheet">
</head>

<body>

  <?php require('./inc/navbar.php'); ?>
  <section id="hero" class="d-flex align-items-center">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
          <h1>Maneja tus tareas y horarios en pocos minutos</h1>
          <h2>Con nuestra app vas a poder manejear todas tus tareas de una forma rapida y eficiente</h2>
          <div class="d-flex justify-content-center justify-content-lg-start">
            <a href="./register.php" class="btn-get-started">Empezar ya!</a>
            <a href="https://youtu.be/TsTOFz1SAfI" target="_blank" class="btn-watch-video"><i class="bi bi-play-circle"></i><span>Ver review</span></a>
          </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
          <img src="assets/img/hero-img.png" class="img-fluid animated" alt="hero image">
        </div>
      </div>
    </div>

  </section>

  <main id="main">

    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Sobre Nosotros</h2>
        </div>

        <div class="row content">
          <div class="col-lg-6">
            <p>
              Somos una startup española que nos dedicamos a hacer que lasperosnas puedan gestionar de una manera mucho mas rapida y eficiente sus tareas del dia a dia.
            </p>
            <p>
              Empezamos en 2012 con solo dos personas y ahora somos mas de 50 personas trabajando en la compañia, tenemos mas de 100m de usruis mensuales y un ARR de 15m de euros.
            </p>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0">
            <p>
              Somos unas empresa 100% en remoto y tenemos a gente trabajando en mas de 20 paises del mundo y de los 5 continentes, nuestro proximo objetivo es llegar a tener mas de 100 empleados, si quieres saber mas sobre nostros aqui te dejo mas info
            </p>
            <a href="./sobre-nosotros.php" class="btn-learn-more">Saber Mas</a>
          </div>
        </div>

      </div>
    </section><!-- End About Us Section -->

    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us section-bg">
      <div class="container-fluid" data-aos="fade-up">

        <div class="row">

          <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch  order-2 order-lg-1">

            <div class="content">
              <h3 class="mb-4">Preguntas Frecuentes</h3>
            </div>

            <div class="accordion-list">
              <ul>
                <li>
                  <a for="accordion-list-1" data-toggle="collapse" aria-expanded="true" aria-controls="accordion-list-1" class="collapse" data-target="#accordion-list-1"><span>01</span> ¿El pago es mensual? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-1" class="collapse show" data-parent=".accordion-list">
                    <p>
                      Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.
                    </p>
                  </div>
                </li>

                <li>
                  <a for="accordion-list-2" data-toggle="collapse" aria-expanded="true" aria-controls="accordion-list-2" data-target="#accordion-list-2" class="collapsed"><span>02</span> ¿Como puedo crear mas usuarios? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-2" class="collapse" data-parent=".accordion-list">
                    <p>
                      Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
                    </p>
                  </div>
                </li>

                <li>
                  <a for="accordion-list-3" data-toggle="collapse" aria-expanded="true" aria-controls="accordion-list-3" data-target="#accordion-list-3" class="collapsed"><span>03</span> ¿Cual es el limites de las tareas? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-3" class="collapse" data-parent=".accordion-list">
                    <p>
                      Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi quis
                    </p>
                  </div>
                </li>

              </ul>
            </div>

          </div>

          <div class="col-lg-5 align-items-stretch order-1 order-lg-2 img" style='background-image: url("assets/img/why-us.png");' data-aos="zoom-in" data-aos-delay="150">&nbsp;</div>
        </div>

      </div>
    </section><!-- End Why Us Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Ventajas</h2>
          <p>A continuacion te vamos a dejar con las caracteristicas de nuestro software y por las que destacamos en el mercado.</p>
        </div>

        <div class="row">
          <div class="col-xl-3 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon"><i class="bx bxl-dribbble"></i></div>
              <h4>Facilidad</h4>
              <p>Nuestra app ofrece una gran facilidad a la hora de gestionar tareas</p>
            </div>
          </div>

          <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-file"></i></div>
              <h4>Rapidez</h4>
              <p>Con nostros no vas a tener que esperar ni un solo minuto</p>
            </div>
          </div>

          <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-tachometer"></i></div>
              <h4>Barato</h4>
              <p>Nadie puede competir con nosotros en precio</p>
            </div>
          </div>

          <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="400">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-layer"></i></div>
              <h4>Soporte</h4>
              <p>Te respondemos en menos de 24h</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
      <div class="container" data-aos="zoom-in">

        <div class="row">
          <div class="col-lg-9 text-center text-lg-start">
            <h3>Con el cupon MENOS20 tienes un 20% de descuento</h3>
          </div>
          <div class="col-lg-3 cta-btn-container text-center">
            <a class="cta-btn align-middle" href="./register.php">Registrarse</a>
          </div>
        </div>

      </div>
    </section>

¡    <section id="team" class="team section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Equipo</h2>
        </div>

        <div class="row">

          <div class="col-lg-6">
            <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="100">
              <div class="pic"><img src="assets/img/team/team-1.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Fernando Martin</h4>
                <span>Chief Executive Officer</span>
              </div>
            </div>
          </div>

          <div class="col-lg-6 mt-4 mt-lg-0">
            <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="200">
              <div class="pic"><img src="assets/img/team/team-2.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Sara Garcia</h4>
                <span>CPO</span>
              </div>
            </div>
          </div>

          <div class="col-lg-6 mt-4">
            <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="300">
              <div class="pic"><img src="assets/img/team/team-3.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Javier Rubio</h4>
                <span>CTO</span>
              </div>
            </div>
          </div>

          <div class="col-lg-6 mt-4">
            <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="400">
              <div class="pic"><img src="assets/img/team/team-4.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Amanda Perez</h4>
                <span>COO</span>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section>

    <section id="pricing" class="pricing">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Precio</h2>
        </div>

        <div class="row">

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
            <div class="box">
              <h3>Plan Gratis</h3>
              <h4><sup>$</sup>0<span>por mes</span></h4>
              <ul>
                <li><i class="bx bx-check"></i> 10 Tareas a la semana</li>
                <li><i class="bx bx-check"></i> 1 Usuario</li>
                <li><i class="bx bx-check"></i> 3 Categorias</li>
                <li class="na"><i class="bx bx-x"></i> <span>Soporte VIP</span></li>
                <li class="na"><i class="bx bx-x"></i> <span>Personalizacion del Area de Usuario</span></li>
              </ul>
              <a href="./register.php" class="buy-btn">Empezar ya!</a>
            </div>
          </div>

          <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="200">
            <div class="box featured">
              <h3>Plan Avanzado</h3>
              <h4><sup>$</sup>29<span>por mes</span></h4>
              <ul>
                <li><i class="bx bx-check"></i> 100 Tareas a la semana</li>
                <li><i class="bx bx-check"></i> 5 usuario</li>
                <li><i class="bx bx-check"></i> 15 Categorias</li>
                <li><i class="bx bx-check"></i> Soporte VIP</li>
                <li><i class="bx bx-check"></i> Personalizacion del Area de Usuario</li>
              </ul>
              <a href="./register.php" class="buy-btn">Empezar ya!</a>
            </div>
          </div>

          <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="300">
            <div class="box">
              <h3>Plan VIP</h3>
              <h4><sup>$</sup>49<span>por mes</span></h4>
              <ul>
                <li><i class="bx bx-check"></i> Tareas ilimitadas</li>
                <li><i class="bx bx-check"></i> Usuarios ilimitados</li>
                <li><i class="bx bx-check"></i> Categorias Ilimitadas</li>
                <li><i class="bx bx-check"></i> Soporte VIP+</li>
                <li><i class="bx bx-check"></i> Personalizacion del Area de Usuario</li>
              </ul>
              <a href="./register.php" class="buy-btn">Empezar ya!</a>
            </div>
          </div>

        </div>

      </div>
    </section>

  </main>
</body>
  <?php 
    require('./inc/footer.php');
  ?>