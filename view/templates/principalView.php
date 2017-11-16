<?php include(TEMPLATE_DIR . 'complement/head.php'); ?>
<?php include(TEMPLATE_DIR . 'complement/nav.php'); ?>

<body>
  <div class="container principal">
    <h3 class="text-center">Bienvenido <?php echo $_USER[$_SESSION['app_id']]['nombre']; ?></h3>
    <h5 class="text-center">Logeado con privilegios de <?php echo $_USER[$_SESSION['app_id']]['cargo']; ?></h5>
  </div>
  <?php include(TEMPLATE_DIR . 'complement/footer.php'); ?>
</body>
</html>
