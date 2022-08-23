<?php
include("config.php");
include("cn.php");
include 'carrito.php';
include("cabecera.php");



$t2 = "SELECT ProductoID, `Nombre` , Precio , ProductoID , CategoriaID FROM productos ";



?>


<link rel="preload" href="normalize.css" as="style">
<link rel="stylesheet" href="normalize.css">
<link rel="preload" href="mantenimiento.css" as="style">
<link href="mantenimiento.css" rel="stylesheet">


<!-- TITULO de formulario -->

<section>
<h1 class ="encabezado">Mantenimiento Producto</h1>
</section>


<main>
  <section>


    <!--  FORMULARIO  -->
    <form action="agregar.php" method="post">
      <div class="container_form">
        <div class="input-group mb-3">
          <span class="input-group-text" id="basic-addon1">Producto</span>
          <input type="text" name="txtname" class="form-control" placeholder="Nombre del Producto" aria-label="Username" aria-describedby="basic-addon1">
        </div>

        <div class="input-group mb-3">
          <span class="input-group-text" id="basic-addon2">Categoria ID</span>
          <input type="number" name="txtnum" class="form-control" placeholder="Codigo de Tipo" aria-label="Recipient's username" aria-describedby="basic-addon2">

        </div>
        <div class="input-group mb-3">
          <span class="input-group-text" id="basic-addon3">Imagen</span>
          <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3" placeholder="URL">
        </div>
        <div class="input-group mb-3">
          <span class="input-group-text">$</span>
          <input type="number" name="txtprec" class="form-control" aria-label="Amount (to the nearest dollar)">
          <span class="input-group-text">.00</span>
        </div>

        <div class="input-group mb-3">
          <span class="input-group-text">Cantidad</span>
          <input type="text" class="form-control" aria-label="Username">
          <span class="input-group-text">Categoria</span>
          <input type="text" class="form-control" aria-label="Server">
        </div>

        <div class="input-group">
          <span class="input-group-text">Descripción <br> Producto</span>
          <textarea class="form-control" aria-label="With textarea"></textarea>
        </div>

        <input class="container__submit" type="submit" value="Registrar">
    

      </div>
    </form>
  </section>
  <section>
    <!--  DATA-GRID PRODUCTO -->
    <div class="container_tabla_prod">


      <?php $prod = mysqli_query($conexion, $t2);
      while ($row = mysqli_fetch_assoc($prod)) { ?>


        <table class="table table-hover">
          <thead class="table-dark">
            <tr>
              <th>ID</th>
              <th>Nombre</th>
             

              <th>Precio</th>
              <th>Eliminar</th>
              <th>Modificar</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($prod as $producto) { ?>

          </tbody>

          <tr>
            <td><strong> <?php echo $producto["ProductoID"]; ?> </strong></td>
            <td>
              <p> <?php echo $producto["Nombre"]; ?> </p>
            </td>
        

            <td>
              <p> <?php echo $producto["Precio"]; ?> </p>
            </td>
            <td> <a href="eliminar.php? id=<?php echo $producto["ProductoID"] ?>"> <button href="#"><img src="./img/basura-2.png" alt="basura"></button> </a> </td>
            <td> <a href="editar.php? id=<?php echo $producto["ProductoID"] ?>""> <button ><img src=" ./img/modificar.png"></button> </a> </td>
          <?php } ?>
        <?php  } ?>
          </tr>


        </table>
    </div>
  </section>
  <section>
    <!--  DATA-GRID CATEGORIA  -->
    <div class="container_tabla_cat">
      <table class="table table-success table-striped">
        <thead>
          <tr>
            <th><strong>ID</strong></th>
            <th><strong>Codigo</strong></th>
            <th><strong>Categoria</strong></th>
          </tr>
        </thead>
        <tr>
          <td><strong>1</strong></td>
          <td>10</td>
          <td>Case</td>
        </tr>
        <tr>
          <td><strong>2</strong></td>
          <td>20</td>
          <td>Procesadores</td>
        </tr>
        <tr>
          <td><strong>3</strong></td>
          <td>30</td>
          <td>Disipadores</td>
        </tr>

      </table>
    </div>

    <!-- <div class="col-12">
      <button href="agregar.php" ype="submit" class="btn btn-primary">Nuevo </button>
    </div> -->

    

     


      <!-- 
    <div class="col-13">
      <button type="submit" class="btn btn-primary"> Modificar</button>
    </div> -->
  </section>


      <!--  BOTÓN  -->
      <div class="container-boton">
      <a href="administrador.php" class="btn btn-primary btn-lg" tabindex="-1" role="button" aria-disabled="true">Volver</a>
    </div>
</main>

<!-- Comienzo del Footer -->
<?php include('pie.php') ?>

</body>
</html>