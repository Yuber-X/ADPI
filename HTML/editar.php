<?php
include 'cn.php';
include("config.php");
include 'carrito.php';
include("cabecera.php");

$id = $_GET['id'];
$sql = "SELECT * FROM productos WHERE ProductoID='" . $id . "'";
$t2 = "SELECT `Nombres` , `Nombre` , Precio , ProductoID , CategoriaID FROM categorias, productos WHERE `IDproductos` LIKE `CategoriaID` ";
$resultados = mysqli_query($conexion, $sql);

while ($row = mysqli_fetch_assoc($resultados)) {

?>

  <link rel="preload" href="normalize.css" as="style">
  <link rel="stylesheet" href="normalize.css">
  <link rel="preload" href="mantenimiento.css" as="style">
  <link href="mantenimiento.css" rel="stylesheet">


  <!-- TITULO de formulario -->

  <section>
   <h1 class ="encabezado">Editar Producto </h1>
  </section>


  <main>
    <section>


      <!--  FORMULARIO  -->
      <form action="actualizar.php" method="post">
        <div class="container_form">
          <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Producto</span>
            <input type="text" class="form-control" name="txtid" value="<?php echo $row["ProductoID"] ?>" >
          </div>

          <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon2">Suplidor</span>
            <input type="text" class="form-control" name="txtname" placeholder="Nombre de Tienda" value="<?php echo $row["Nombre"]  ?>" aria-label="Recipient's username" aria-describedby="basic-addon2">

            <div class="input-group mb-3">
          <span class="input-group-text" id="basic-addon2">Categoria ID</span>
          <input type="number" name="txtnum" class="form-control" placeholder="Codigo de Tipo" value="<?php echo $row["CategoriaID"]  ?>" aria-label="Recipient's username" aria-describedby="basic-addon2">

          </div>
          <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon3">Imagen</span>
            <input type="image" class="form-control"  id="basic-url" aria-describedby="basic-addon3" src="<?php echo $row["Imagen"]  ?>" placeholder="URL">

          </div>
          <div class="input-group mb-3">
            <span class="input-group-text">$</span>
            <input type="number" class="form-control" name="txtprec" aria-label="Amount (to the nearest dollar)" value="<?php echo $row["Precio"] ?>">
            <span class="input-group-text">.00</span>
          </div>



          <input class="container__submit" type="submit" value="Modificar">

       
        </div>

        </form>







     
    </section>
  <?php } ?>
  <section>
    <!--  DATA-GRID PRODUCTO -->
    <div class="container_tabla_prod">


      <?php $prod = mysqli_query($conexion, $t2);
      while ($row = mysqli_fetch_assoc($prod)) { ?>


        <table class="table table-hover" disabled>
          <thead class="table-dark">
            <tr>
              <th>ID</th>
              <th>Nombre</th>
              <th>Categoria</th>

              <th>Precio</th>
              <th>Eliminar</th>
              <th>Modificar</th>
            </tr>
          </thead>


          <tbody>
            
          <?php foreach ($prod as $producto) { ?>
              <tr>

          </tbody>
                <td><strong> <?php echo $producto["ProductoID"]; ?> </strong></td>
                <td>
                  <p> <?php echo $producto["Nombre"]; ?> </p>
                </td>
                <td>
                  <p> <?php echo $producto["Nombres"]; ?> </p>
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
 

    <!--  BOTÓN  -->
    <div class="container-boton">
      <a href="mantenimiento.php" class="btn btn-primary btn-lg" tabindex="-1" role="button" aria-disabled="true">Volver</a>
    </div>

  </section>
  </main>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>

  </html>