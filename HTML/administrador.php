
<?php
include("config.php");
include("cn.php");
include 'carrito.php';
include("cabecera.php");
?>
  <title>ADPI</title>
  <link rel="preload" href="normalize.css" as="style">
  <link rel="stylesheet" href="normalize.css">
  <link rel="preload" href="./administrador.css" as="style">
  <link href="./administrador.css" rel="stylesheet">


  <!-- TITULO de formulario -->
  <section>
    <img class="encabezado" src="./img/administrador.png">
  </section>
  <!--  BOTONES ADMIN  -->
    <div class="container_btn">
        <a href="categoria.php" class="btn btn-primary btn-lg" tabindex="-1" role="button" aria-disabled="true">Categorias</a>
        <a href="pedidos-admin.php" class="btn btn-primary btn-lg" tabindex="-1" role="button" aria-disabled="true">Pedidos</a>
        <a href="mantenimiento.php" class="btn btn-primary btn-lg" tabindex="-1" role="button" aria-disabled="true">Productos</a>
    </div>
  <!-- Comienzo del Footer -->
  <?php
  include("pie.php");
  ?>
  </body>
</html>