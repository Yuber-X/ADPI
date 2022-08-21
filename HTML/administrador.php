
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
  <footer style="background-color: darkred;">
    <table cellspacing="15px" class="tablazz">
      <tr>
        <td>
          <h2> Soporte </h2>
        </td>
        <td>
          <h2> Perfil </h2>
        </td>
        <td> <img src="./img/intento de logo.png" class="imaing"> </td>
      </tr>
      <tr>
        <td class="tabloide">
          <a href="/Codigo/HTML/helper.html" class="aeaa"> Contacto </a>
        </td>
        <td>
          <a href="/Codigo/HTML/cuentas.html" class="aeaa"> Cuenta </a>
        </td>
      <tr>
        <td>
          <a href="/Codigo/HTML/helper.html" class="aeaa"> Nosotros </a>
        </td>
        <td>
          <a href="/Codigo/HTML/Carrito.html" class="aeaa"> Carrito </a>
        </td>
        <td class="posi" rowspan="2">
          <a href="#" class="aeaa"> Siguenos: </a>
        </td>
      </tr>
      <tr>
        <td>
          <a href="/Codigo/HTML/helper.html" class="aeaa"> Terminos y Condiciones </a>
        </td>
        <td>
          <a href="/Codigo/HTML/catalogo/grafica.html" class="aeaa"> Comprar </a>
        </td>
      <tr>
        <td>
          <a href="/Codigo/HTML/helper.html" class="aeaa"> Preguntas Frecuentes </a>
        </td>
        <td>
          <a href="/Codigo/HTML/Favoritos.html" class="aeaa"> Lista de Deseos </a>
        </td>
        <td colspan="1">
          <img src="./Lote/Carrito/pngegg (-7.png" class="joda">
          <img src="./Lote/Carrito/pngegg (-8.png" class="joda">
          <img src="./Lote/Carrito/pngegg (-9.png" class="joda">
        </td>
      </tr>
    </table>
  </footer>
  <footer class="Mfooter">
    <div>
      <td> <img src="./img/letra ADPI.png" HSPACE="27px" class="imaing3"> </td>
      <td> <img src="./img/fon123.png" HSPACE="308px" class="imaing2"> </td>
      <td> <img src="./img/logo-mastercard-cabecera-fb.png" class="imaing4"> </td>
      <td> <img src="./img/paypal.png" class="imaing5"> </td>
      <td> <img src="./img/Former_Visa.png" class="imaing6"> </td>
    </div>
  </footer>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa"
    crossorigin="anonymous"></script>
  </body>
</html>