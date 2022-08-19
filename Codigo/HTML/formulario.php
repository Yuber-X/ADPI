<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ADPI</title>
  <link rel="preload" href="normalize.css" as="style">
  <link rel="stylesheet" href="normalize.css">
  <link rel="preload" href="formulario.css" as="style">
  <link href="formulario.css" rel="stylesheet">
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous"> 
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
            <a href="#">Perifericos</a>
            <ul class="menu_vertical">
              <li><a href="/Codigo/HTML/catalogo/entrada_p.html"> <img src="./Lote/Menu/Boton 1p.png"></a></li>
              <li><a href="/Codigo/HTML/catalogo/salida_p.html"> <img src="./Lote/Menu/Boton 2p.png"></a></li>
              <li><a href="/Codigo/HTML/catalogo/comunicacion_p.html"> <img src="./Lote/Menu/Boton 3p.png"></a>
              </li>
            </ul>
          </li>
        </ul>
      </nav>
    </div>

  </header>

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