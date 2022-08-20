<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ADPI ADMINISTRADOR</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
  integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous"> 
  <link rel="preload" href="normalize.css" as="style">
  <link rel="stylesheet" href="normalize.css">
  <link rel="preload" href="mantenimiento.css" as="style">
  <link href="mantenimiento.css" rel="stylesheet">

</head>

<body>
<html>
  <!--  HEADER  -->
 
  <header id="header">


    <a class="logo">

      <div class="crop-img">
        <a href="/Codigo/HTML/index.html"> <img src="./img/intento de logo.png" class="Loge" alt="logoxd"> </a>
      </div>

      <div class="crop-img">
        <div class="crop-img2">
          <button type="button"><a href="/Codigo/HTML/Carrito.html"></a> <img src="./img/carrito.png"></button>
        </div>
      </div>



      <div class="divid">
        <form class="form">
          <div class="container-4">
            <input type="search" id="search" placeholder="Search..." />
            <button class="icon"><i class="fa fa-search"></i> <img src="./img/pngwing.com.png"> </button>
          </div>
        </form>
      </div>


    </a>

    <!-- <img src="img/intento de logo.png" class="Loge" href="Index.html" alt="logoxd"> -->

    <nav class="navegator">
      <a href="/Codigo/HTML/Carrito.html" class="Cum"> Carrito </a>
      <a href="/Codigo/HTML/helper.html" class="Cum"> Contacto </a>
    </nav>


    <!--      MENU       -->


    <div class="contenedor_menu">
      <nav class="nav_menu">
        <ul class="menu_horizontal">
          <li>
            <a href="/Codigo/HTML/catalogo/case.html">Case</a>
          </li>
          <li>
            <a href="#">Componentes</a>
            <ul class="menu_vertical">
              <li><a href="/Codigo/HTML/catalogo/disipador.html"><img src="./Lote/Menu/Boton 2.png"></a></li>
              <li><a href="/Codigo/HTML/catalogo/ram.html"><img src="./Lote/Menu/Boton 3.png"></a></li>
              <li><a href="/Codigo/HTML/catalogo/powersupply.html"><img src="./Lote/Menu/Boton 4.png"></a></li>
              <li><a href="/Codigo/HTML/catalogo/grafica.html"><img src="./Lote/Menu/Boton 5.png"></a></li>
              <li><a href="/Codigo/HTML/catalogo/herramientas.html"><img src="./Lote/Menu/Boton 6.png"></a></li>
              <li><a href="/Codigo/HTML/catalogo/discoduro.html"><img src="./Lote/Menu/Boton 7.png"></a></li>
              <li><a href="/Codigo/HTML/catalogo/motherboard.html"><img src="./Lote/Menu/Boton 8.png"></a></li>
              <li><a href="/Codigo/HTML/catalogo/procesadores.html"><img src="./Lote/Menu/Boton 9.png"></a></li>
            </ul>
          </li>
          <li>
            <a href="/Codigo/HTML/catalogo/monitores.html">Monitores</a>
          </li>
          <li>
            <a href="/Codigo/HTML/catalogo/perifericos.html">Perifericos</a>
          </li>
        </ul>
      </nav>
    </div>

  </header>

  <!-- TITULO de formulario -->

  <section>
    <img class="encabezado" src="./img/Mantenimiento.png">
  </section> 

  <main>
    <section>
        <!--  FORMULARIO  -->
        <form>
            <div class="container_form">
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">Producto</span>
                    <input type="text" class="form-control" placeholder="Nombre del Producto" aria-label="Username" aria-describedby="basic-addon1">
                </div>
                
                
                <div class="input-group mb-3">
                  <span class="input-group-text" id="basic-addon2">Suplidor</span>
                    <input type="text" class="form-control" placeholder="Nombre de Tienda" aria-label="Recipient's username" aria-describedby="basic-addon2">
                    
                </div>

                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon3">Imagen</span>
                    <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3" placeholder="URL">
                </div>

                <div class="input-group mb-3">
                    <span class="input-group-text">$</span>
                    <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
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
        <!--  DATA-GRID PRODUCTO -->
        <div class="container_tabla_prod">
            <table class="table table-hover">
                <thead class="table-dark">
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Categoria</th>
                        <th>Cantidad</th>
                        <th>Precio</th>
                        <th>Eliminar</th>
                        <th>Modificar</th>
                    </tr>
                </thead>
                <tr>
                    <td><strong>1</strong></td>
                    <td>Targeta Grafica RX 580 8GB Red Devil</td>
                    <td>Targeta Grafica</td>
                    <td>5</td>
                    <td>11,580</td>
                    <td><button href="#"><img src="./img/basura-2.png" alt="basura"></button></td>
                    <td><button href="#"><img src="./img/modificar.png" alt="Modificar"></button></td>
                </tr>
                <tr>
                    <td><strong>2</strong></td>
                    <td>Pack 2 Ram 8GB DRR4 Fatal Fury</td>
                    <td>Ram</td>
                    <td>3</td>
                    <td>2,580</td>
                    <td><button href="#"><img src="./img/basura-2.png" alt="basura"></button></td>
                    <td><button href="#"><img src="./img/modificar.png" alt="Modificar"></button></td>
                </tr>
                <tr>
                    <td><strong>3</strong></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td><button href="#"><img src="./img/basura-2.png" alt="basura"></button></td>
                    <td><button href="#"><img src="./img/modificar.png" alt="Modificar"></button></td>
                </tr>
                <tr>
                    <td><strong>4</strong></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td><button href="#"><img src="./img/basura-2.png" alt="basura"></button></td>
                    <td><button href="#"><img src="./img/modificar.png" alt="Modificar"></button></td>
                </tr>
                <tr>
                    <td><strong>5</strong></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td><button href="#"><img src="./img/basura-2.png" alt="basura"></button></td>
                    <td><button href="#"><img src="./img/modificar.png" alt="Modificar"></button></td>
                </tr>
                <tr>
                    <td><strong>6</strong></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td><button href="#"><img src="./img/basura-2.png" alt="basura"></button></td>
                    <td><button href="#"><img src="./img/modificar.png" alt="Modificar"></button></td>
                </tr>
                <tr>
                    <td><strong>7</strong></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td><button href="#"><img src="./img/basura-2.png" alt="basura"></button></td>
                    <td><button href="#"><img src="./img/modificar.png" alt="Modificar"></button></td>
                </tr>
        <!--        <tr>
                    <td><strong>8</strong></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td><button href="#"><img src="./img/basura-2.png" alt="basura"></button></td>
                    <td><button href="#"><img src="./img/modificar.png" alt="Modificar"></button></td>
                </tr>
                <tr>
                    <td><strong>9</strong></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td><button href="#"><img src="./img/basura-2.png" alt="basura"></button></td>
                    <td><button href="#"><img src="./img/modificar.png" alt="Modificar"></button></td>
                </tr>
                <tr>
                    <td><strong>10</strong></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td><button href="#"><img src="./img/basura-2.png" alt="basura"></button></td>
                    <td><button href="#"><img src="./img/modificar.png" alt="Modificar"></button></td>
                </tr> -->
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
        <!--        <tr>
                    <td><strong>4</strong></td>
                    <td>40</td>
                    <td>Ram</td>
                </tr>
                <tr>
                    <td><strong>5</strong></td>
                    <td>50</td>
                    <td>Power Supply</td>
                </tr>
                <tr>
                    <td><strong>6</strong></td>
                    <td>60</td>
                    <td>Targeta Grafica</td>
                </tr>
                <tr>
                    <td><strong>7</strong></td>
                    <td>70</td>
                    <td>Herramientas</td>
                </tr>
                <tr>
                    <td><strong>8</strong></td>
                    <td>80</td>
                    <td>Disco Duros</td>
                </tr>
                <tr>
                    <td><strong>9</strong></td>
                    <td>90</td>
                    <td>MotherBoard</td>
                </tr>
                <tr>
                    <td><strong>10</strong></td>
                    <td>100</td>
                    <td>Monitores</td>
                </tr>
                <tr>
                    <td><strong>11</strong></td>
                    <td>110</td>
                    <td>Perifericos</td>
                </tr> -->
            </table>
        </div>
        
        
        <!--  BOTÓN  -->
    <div class="container-boton">
      <a href="administrador.php" class="btn btn-primary btn-lg" tabindex="-1" role="button" aria-disabled="true">Volver</a> 

    </div>

   
    </section>




  </main>

  


  <!-- Comienzo del Footer -->

  <footer style="background-color: darkred;">

    <table cellspacing="15px" class="tablazz">

      <tr>
        <td>
          <h2> Soporte </h2>
        </td>
        <td>
          <h2> Administrador </h2>
        </td>
        <td> <img src="./img/intento de logo.png" class="imaing"> </td>

      </tr>

      <tr>
        <td class="tabloide">
          <a href="/Codigo/HTML/helper.html" class="aeaa"> Contacto </a>
        </td>
        <td>
          <a href="mantenimiento.php" class="aeaa"> Mantenimiento </a>
        </td>

      <tr>
        <td>
          <a href="/Codigo/HTML/helper.html" class="aeaa"> Nosotros </a>
        </td>
        <td>
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
          <a href="pedidos-admin.php" class="aeaa"> Pedidos </a>
        </td>
      <tr>
        <td>
          <a href="helper.php" class="aeaa"> Preguntas Frecuentes </a>
        </td>
        <td>
        <a href="Categoria.php" class="aeaa"> Categoria </a>
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