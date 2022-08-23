<?php
include 'cn.php';
include("config.php");
include 'carrito.php';
include("cabecera.php");

$id = $_GET['id'];
$sql = "SELECT * FROM categorias WHERE IDproductos='" . $id . "'";

$resultados = mysqli_query($conexion, $sql);

while ($row = mysqli_fetch_assoc($resultados)) {

?>


<title>ADPI ADMINISTRADOR</title>
  <link rel="preload" href="normalize.css" as="style">
  <link rel="stylesheet" href="normalize.css">
  <link rel="preload" href="categoria.css" as="style">
  <link href="categoria.css" rel="stylesheet">

  <section>
    <img class="encabezado" src="./img/Categoria.png">
  </section>

  <main>
    <section>
        <!--  FORMULARIO  -->
        <form action="actualizarcat.php" method="post">
            <div class="container_form">
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">Categoria</span>
                    <input type="text" class="form-control" name="txtcat" placeholder="Nombre de la Categoria" value="<?php echo $row["Nombres"]  ?>" aria-label="Username" aria-describedby="basic-addon1">
                </div>
                
                
                <div class="input-group mb-3">
                  <span class="input-group-text" id="basic-addon2">Codigo</span>
                    <input type="text" class="form-control" name="txtid" placeholder="Codigo" value="<?php echo $row["IDproductos"]  ?>" aria-label="Recipient's username" aria-describedby="basic-addon2">
                </div>
                <div class="col-12">
                    <input class="container__submit" type="submit" value="Modificar">
                </div>
              
            </div>
        </form>
    </section>



    <div class="container-boton">
           <a href="categoria.php" class="btn btn-primary" tabindex="-1" role="button" aria-disabled="true">Volver</a>
        </div>
  </main>





























  <?php } ?>