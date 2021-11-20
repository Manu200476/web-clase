  <?php 
    require('./inc/head.php');
  ?>
  <title>Contacto</title>
</head>

  <body class="container">
    <?php require('./inc/navbar.php'); ?>
    <section>
      <h1 class="text-center font-weight-bold">Contacto</h1>
      <div class="d-flex justify-content-center">
        <?php 
          require('./inc/components/contact-form.php');
        ?>
      </div>
    </section>
  </body>
  <?php 
    require('./inc/footer.php');
  ?>