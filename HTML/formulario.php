<?php
include("config.php");
include("cn.php");
include 'carrito.php';
include("cabecera.php");
?>

<title>ADPI</title>
  <link rel="preload" href="normalize.css" as="style">
  <link rel="stylesheet" href="normalize.css">
  <link rel="preload" href="formulario.css" as="style">
  <link href="formulario.css" rel="stylesheet">

  <!-- TITULO de formulario -->
  
  <section>
    <img class="encabezado" src="./img/Formulario.png">
  </section>
  
  <!--  FORMULARIO  -->
<div class="container_form">
  <form class="row g-3">
    <div class="col-md-6">
      <label for="inputEmail4" class="form-label">Email</label>
      <input type="email" class="form-control" id="inputEmail4" placeholder="Tú Correo">
    </div>
    <div class="col-md-6">
      <label for="inputPassword4" class="form-label">Nombre Completo</label>
      <input type="text" class="form-control" id="inputPassword4" placeholder="Nombre Completo">
    </div>
    <div class="col-12">
      <label for="inputAddress" class="form-label">Direccion</label>
      <input type="text" class="form-control" id="inputAddress" placeholder="Santo Domingo Este, San Isidro">
    </div>
    <div class="col-md-6">
      <label for="inputCity" class="form-label">Telefono</label>
      <input type="tel" class="form-control" id="inputCity" placeholder="Tú Telefono">
    </div>
    <div class="col-md-4">
      <label for="inputState" class="form-label">Edad</label>
      <select id="inputState" class="form-select">
        <option selected>Elegir...</option>
        <option>Menos de 18</option>
        <option>18 - 25</option>
        <option>25 - 30</option>
        <option>Más de 30</option>
      </select>
    </div>
    <div class="col-md-2">
      <label for="inputZip" class="form-label">Codigo-ID</label>
      <input type="text" class="form-control" id="inputZip">
    </div>
    <div class="col-12">
      <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
  </form>
</div>
  
  <!-- Comienzo del Footer -->
<?php
 include("pie.php");
 ?>
  </body>
</html>