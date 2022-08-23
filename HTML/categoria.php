
<?php
include("config.php");
include("cn.php");
include 'carrito.php';
include("cabecera.php");
?>
  <title>ADPI ADMINISTRADOR</title>
  <link rel="preload" href="normalize.css" as="style">
  <link rel="stylesheet" href="normalize.css">
  <link rel="preload" href="categoria.css" as="style">
  <link href="categoria.css" rel="stylesheet">


  <!-- TITULO de formulario -->

  <section>
    <img class="encabezado" src="./img/Categoria.png">
  </section>

  <main>
    <section>
        <!--  FORMULARIO  -->
        <form>
            <div class="container_form">
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">Categoria</span>
                    <input type="text" class="form-control" placeholder="Nombre de la Categoria" aria-label="Username" aria-describedby="basic-addon1">
                </div>
                
                
                <div class="input-group mb-3">
                  <span class="input-group-text" id="basic-addon2">Codigo</span>
                    <input type="text" class="form-control" placeholder="Codigo" aria-label="Recipient's username" aria-describedby="basic-addon2">
                </div>
                <div class="col-12">
                    <button type="submit" class="btn btn-primary">Crear</button>
                </div>
                <div class="col-13">
                    <button type="submit" class="btn btn-primary">Modificar</button>
                </div>
            </div>
        </form>
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
                        <th><strong>Eliminar</strong></th>
                    </tr>
                </thead>
                <tr>
                    <td><strong>1</strong></td>
                    <td>10</td>
                    <td>Case</td>
                    <td><button href="#"><img src="./img/basura-2.png" alt="basura"></button></td>
                </tr>
                <tr>
                    <td><strong>2</strong></td>
                    <td>20</td>
                    <td>Procesadores</td>
                    <td><button href="#"><img src="./img/basura-2.png" alt="basura"></button></td>
                </tr>
                <tr>
                    <td><strong>3</strong></td>
                    <td>30</td>
                    <td>Disipadores</td>
                    <td><button href="#"><img src="./img/basura-2.png" alt="basura"></button></td>
                </tr>
               <tr>
                    <td><strong>4</strong></td>
                    <td>40</td>
                    <td>Ram</td>
                    <td><button href="#"><img src="./img/basura-2.png" alt="basura"></button></td>
                </tr>
                <tr>
                    <td><strong>5</strong></td>
                    <td>50</td>
                    <td>Power Supply</td>
                    <td><button href="#"><img src="./img/basura-2.png" alt="basura"></button></td>
                </tr>
                <tr>
                    <td><strong>6</strong></td>
                    <td>60</td>
                    <td>Targeta Grafica</td>
                    <td><button href="#"><img src="./img/basura-2.png" alt="basura"></button></td>
                </tr>
                <tr>
                    <td><strong>7</strong></td>
                    <td>70</td>
                    <td>Herramientas</td>
                    <td><button href="#"><img src="./img/basura-2.png" alt="basura"></button></td>
                </tr>
                <tr>
                    <td><strong>8</strong></td>
                    <td>80</td>
                    <td>Disco Duros</td>
                    <td><button href="#"><img src="./img/basura-2.png" alt="basura"></button></td>
                </tr>
                <tr>
                    <td><strong>9</strong></td>
                    <td>90</td>
                    <td>MotherBoard</td>
                    <td><button href="#"><img src="./img/basura-2.png" alt="basura"></button></td>
                </tr>
                <tr>
                    <td><strong>10</strong></td>
                    <td>100</td>
                    <td>Monitores</td>
                    <td><button href="#"><img src="./img/basura-2.png" alt="basura"></button></td>
                </tr>
                <tr>
                    <td><strong>11</strong></td>
                    <td>110</td>
                    <td>Perifericos</td>
                    <td><button href="#"><img src="./img/basura-2.png" alt="basura"></button></td>
                </tr> 
            </table>
        </div>
    </section>

        <!--  BOTON  -->

        <div class="container-boton">
           <a href="administrador.php" class="btn btn-primary" tabindex="-1" role="button" aria-disabled="true">Volver</a>
        </div>
  </main>


  <!-- Comienzo del Footer -->

  <?php
  include("pie.php");
  ?>
  </body>
</html>