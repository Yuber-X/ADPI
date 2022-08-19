<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="preload" href="normalize.css" as="style">
    <link rel="stylesheet" href="normalize.css">
    <link rel="preload" href="pedidos-admin.css" as="style">
    <link href="pedidos-admin.css" rel="stylesheet">
    <title>ADPI ADMINISTRADOR</title>
</head>

<body>
    <!-----HEADER------>

    <header id="header">


        <a class="logo">

            <div class="crop-img">
                <a href="/Codigo/HTML/index.html"> <img src="/Imagenes/img/intento de logo.png" class="Loge"
                        alt="logoxd"> </a>
            </div>


                <div class="crop-img2">
                    <button type="button"><a href="/Codigo/HTML/Carrito.html"></a> <img
                            src="/Imagenes/img/carrito.png"></button>
                </div>
            </div>



            <div class="divid">
                <form class="form">
                    <div class="container-4">
                        <input type="search" id="search" placeholder="Search..." />
                        <button class="icon"><i class="fa fa-search"></i> <img src="/Imagenes/img/pngwing.com.png">
                        </button>
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
                            <li><a href="/Codigo/HTML/catalogo/disipador.html"><img
                                        src="/Imagenes/Lote/Menu/Boton 2.png"></a></li>
                            <li><a href="/Codigo/HTML/catalogo/ram.html"><img src="/Imagenes/Lote/Menu/Boton 3.png"></a>
                            </li>
                            <li><a href="/Codigo/HTML/catalogo/powersupply.html"><img
                                        src="/Imagenes/Lote/Menu/Boton 4.png"></a></li>
                            <li><a href="/Codigo/HTML/catalogo/grafica.html"><img
                                        src="/Imagenes/Lote/Menu/Boton 5.png"></a></li>
                            <li><a href="/Codigo/HTML/catalogo/herramientas.html"><img
                                        src="/Imagenes/Lote/Menu/Boton 6.png"></a></li>
                            <li><a href="/Codigo/HTML/catalogo/discoduro.html"><img
                                        src="/Imagenes/Lote/Menu/Boton 7.png"></a></li>
                            <li><a href="/Codigo/HTML/catalogo/motherboard.html"><img
                                        src="/Imagenes/Lote/Menu/Boton 8.png"></a></li>
                            <li><a href="/Codigo/HTML/catalogo/procesadores.html"><img
                                        src="/Imagenes/Lote/Menu/Boton 9.png"></a></li>
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
        <img class="encabezado" src="/Imagenes/Lote/Pedidos/Administrador.png">
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
            <td><button href="#"><img src="/Imagenes/img/basura-2.png" alt="basura"></button></td>
    <!--    <td><button href="#"><img src="/Imagenes/img/modificar.png" alt="Modificar"></button></td> -->
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
            <td><button href="#"><img src="/Imagenes/img/basura-2.png" alt="basura"></button></td>
    <!--    <td><button href="#"><img src="/Imagenes/img/modificar.png" alt="Modificar"></button></td> -->
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
            <td><button href="#"><img src="/Imagenes/img/basura-2.png" alt="basura"></button></td>

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
            <td><button href="#"><img src="/Imagenes/img/basura-2.png" alt="basura"></button></td>

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
            <td><button href="#"><img src="/Imagenes/img/basura-2.png" alt="basura"></button></td>

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
            <td><button href="#"><img src="/Imagenes/img/basura-2.png" alt="basura"></button></td>

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
            <td><button href="#"><img src="/Imagenes/img/basura-2.png" alt="basura"></button></td>

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
            <td><button href="#"><img src="/Imagenes/img/basura-2.png" alt="basura"></button></td>

        </tr>
        <tr>
            <td><strong>10</strong></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td><button href="#"><img src="/Imagenes/img/basura-2.png" alt="basura"></button></td>

        </tr>
    
      </table>    
  </div>



            <!-- TABLA YUBER -->
            <!-- ENCABEZADO DE PRODUCTO 

            <table class="tabla0">
                <tr>
                    <th>
                        <p><strong>Producto-ID</strong></p>
                    </th>
                    <th>
                        <p>Precio</p>
                    </th>
                    <th>
                        <p>Cantidad</p>
                    </th>
                    <th>
                        <p>Usuario-ID</p>
                    </th>
                </tr>
            </table>
            -->

            <!-- PRODUCTO EN LISTA 
            <table class="tabla1">
                <tr>
                    <td>
                        <p>Tarjeta de Video GIGABYTE GTX <br>
                            1660 Ti 6 GB GDDR6 NVIDIA <br>
                            1800 MHz</p>
                    </td>
                    <td>
                        <p><strong>G-4444</strong></p>
                    </td>
                    <td>
                        <p><span>$8,490</span></p>
                    </td>
                    <td>
                        <input type="number" placeholder="1">
                    </td>
                    <td>
                        <p><span><strong>EST-44</strong></span></p>
                    </td>
                    <td>
                        <button href="#"><img src="/Imagenes/img/basura-2.png" alt="basura"></button>
                    </td>
                </tr>
            </table> 
            -->
        </section>
    </main>


    <!-- COMIENZO DEL FOOTER -->


    <footer style="background-color: darkred;">

        <table cellspacing="15px" class="tablazz">

            <tr>
                <td>
                    <h2> Soporte </h2>
                </td>
                <td>
                    <h2> Perfil </h2>
                </td>
                <td> <img src="/Imagenes/img/intento de logo.png" class="imaing"> </td>

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
                    <a href="pedidos-admin.php" class="aeaa"> Pedidos </a>
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

                    <img src="/Imagenes/Lote/Carrito/pngegg (-7.png" class="joda">




                    <img src="/Imagenes/Lote/Carrito/pngegg (-8.png" class="joda">




                    <img src="/Imagenes/Lote/Carrito/pngegg (-9.png" class="joda">
                </td>

            </tr>
        </table>

    </footer>
    <footer class="Mfooter">
        <div>
            <td> <img src="/Imagenes/img/letra ADPI.png" HSPACE="27px" class="imaing3"> </td>
            <td> <img src="/Imagenes/img/fon123.png" HSPACE="308px" class="imaing2"> </td>
            <td> <img src="/Imagenes/img/logo-mastercard-cabecera-fb.png" class="imaing4"> </td>
            <td> <img src="/Imagenes/img/paypal.png" class="imaing5"> </td>
            <td> <img src="/Imagenes/img/Former_Visa.png" class="imaing6"> </td>
        </div>
    </footer>
</body>

</html>