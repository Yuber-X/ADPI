
<?php
include("config.php");
include("cn.php");
include 'carrito.php';
include("cabecera.php");
?>
  <title>ADPI ADMINISTRADOR</title>
  <link rel="preload" href="normalize.css" as="style">
  <link rel="stylesheet" href="normalize.css">
  <link rel="preload" href="pedidos-admin.css" as="style">
  <link href="pedidos-admin.css" rel="stylesheet">

    <!-- TITULO de formulario -->
    <section>
        <img class="encabezado" src="./Lote/Pedidos/Administrador.png">
    </section>
    <!-- -----PEDIDOS----- -->
    <main>
        <section>
  <!--  DATA-GRID PRODUCTO -->
  <div class="container_tabla_prod">
    <table class="table table-hover">
        <thead class="table-dark">
            <tr>
                <th>Pedido-ID</th>
                <th>Cliente-ID</th>
                <th>Cliente</th>
                <th>Producto-ID</th>
                <th>Producto</th>
                <th>Categoria</th>
                <th>Cantidad</th>
                <th>Precio</th>
                <th>Eliminar</th>
    <!--        <th>Modificar</th>  -->
            </tr>
        </thead>
        <tr>
            <td><strong>1</strong></td>
            <td>EST-44</td>
            <td>David Marte Alfonso</td>
            <td>TG-201</td>
            <td>Targeta Grafica RX 580 8GB Red Devil</td>
            <td>Targeta Grafica</td>
            <td>5</td>
            <td>11,580</td>
            <td><button href="#"><img src="./img/basura-2.png" alt="basura"></button></td>
    <!--    <td><button href="#"><img src="./img/modificar.png" alt="Modificar"></button></td> -->
        </tr>
        <tr>
            <td><strong>2</strong></td>
            <td>EST-85</td>
            <td>Steven Hernandez</td>
            <td>RA-558</td>
            <td>Pack 2 Ram 8GB DRR4 Fatal Fury</td>
            <td>Ram</td>
            <td>3</td>
            <td>2,580</td>
            <td><button href="#"><img src="./img/basura-2.png" alt="basura"></button></td>
    <!--    <td><button href="#"><img src="./img/modificar.png" alt="Modificar"></button></td> -->
        </tr>
        <tr>
            <td><strong>4</strong></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td><button href="#"><img src="./img/basura-2.png" alt="basura"></button></td>
        </tr>
        <tr>
            <td><strong>5</strong></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td><button href="#"><img src="./img/basura-2.png" alt="basura"></button></td>
        </tr>
        <tr>
            <td><strong>6</strong></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td><button href="#"><img src="./img/basura-2.png" alt="basura"></button></td>
        </tr>
        <tr>
            <td><strong>7</strong></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td><button href="#"><img src="./img/basura-2.png" alt="basura"></button></td>
        </tr>
        <tr>
            <td><strong>8</strong></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td><button href="#"><img src="./img/basura-2.png" alt="basura"></button></td>
        </tr>
        <tr>
            <td><strong>9</strong></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td><button href="#"><img src="./img/basura-2.png" alt="basura"></button></td>
        <tr>
            <td><strong>10</strong></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td><button href="#"><img src="./img/basura-2.png" alt="basura"></button></td>
        </tr>
    
      </table>    
  </div>
            

        <div class="container-boton">
           <a href="administrador.php" class="btn btn-primary" tabindex="-1" role="button" aria-disabled="true">Volver</a>
        </div>
        </section>
    </main>

    <!-- COMIENZO DEL FOOTER -->

<?php
 include("pie.php");
 ?>
</body>
</html>