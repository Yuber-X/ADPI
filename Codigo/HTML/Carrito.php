<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADPI</title>
    <link rel="preload" href="normalize.css" as="style">
    <link rel="stylesheet" href="normalize.css">
    <link rel="preload" href="carrito.css" as="style">
    <link href="carrito.css" rel="stylesheet">
    
</head>
<body>
    
<!----HEADER---->
    
<header id="header"> 
             
            
    <a  class="logo">
        
        <div class="crop-img">
        <a href="/Codigo/HTML/index.html"> <img src="./img/intento de logo.png" class="Loge" alt="logoxd"> </a>
        </div>

     <div class="crop-img">
        <div class="crop-img2">
        <button type="button" ><a href="/Codigo/HTML/Carrito.html"></a> <img src="./img/carrito.png"></button>
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
    <a href="/Codigo/HTML/Carrito.html" class="Cum" > Carrito </a>
    <a href="/Codigo/HTML/helper.html" class="Cum" > Contacto </a>
</nav>


   <!--      MENU       -->


<div class="contenedor_menu">
    <nav class="nav_menu">
        <ul class="menu_horizontal">
            <li >
                <a href="/Codigo/HTML/catalogo/case.html">Case</a>
            </li>
            <li >
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
                        <li><a href="/Codigo/HTML/catalogo/comunicacion_p.html"> <img src="./Lote/Menu/Boton 3p.png"></a></li>
                    </ul>                 
            </li>
        </ul>
    </nav>    
</div>

</header>

    <!-- TITULO de formulario -->
    <section>
         <img class="encabezado" src="./Lote/Carrito/Catalogo titulo carrito.png">
    </section>
 
    <!-- Creando el articulo para comprar-->

    <main>
        
            <section>
                
                <!-- ENCABEZADO DE PRODUCTO -->

               <table class="tabla0">
                <tr>
                    <th><p><strong>Producto</strong></p></th>
                    <th><p>Precio</p></th>
                    <th><p>Cantidad</p></th>
                    <th><p>Total</p></th>
                </tr>
               </table>
                    
               <!-- PRODUCTO EN LISTA -->
                               <table class="tabla1">
                                <tr>
                                    <td>
                                        <img src="./img/gtx1650ti.png" class="producto">
                                    </td>
                                    <td>
                                        <p>Tarjeta de Video GIGABYTE GTX <br>
                                            1660 Ti 6 GB GDDR6 NVIDIA <br> 
                                            1800 MHz</p>
                                    </td>
                                    <td>
                                        <p><span>$8,490</span></p>
                                    </td>
                                    <td>
                                        <input type="number" placeholder="1">
                                    </td>
                                    <td>
                                        <p><span>$8,490</span></p>
                                    </td>
                                    <td>
                                        <button href="#"><img src="./img/basura-2.png" alt="basura"></button>
                                    </td>
                                </tr>
                               </table>
            </section>

            <!-- TOTAL Y SUBTOTAL -->

            <section>
                <table class="tabla2">
                    <tr>
                        <td>
                            <h3>SubTotal:</h3>
                        </td>
                        <td>
                            <p>$<span>8,490</span></p>        
                        </td>
                    </tr>   
                    <tr>
                        <td>
                            <h1>Total:</h1>
                        </td>
                        <td>
                            <p>$<span>8,490</span></p>
                        </td>
                    </tr>

                    <!--BOTONES DE CARRITO-->

                     <tr>
                         <td><button><img src="./Lote/Carrito/Vaciar Carrito.png"></button></td>
                         <td><button><img src="./Lote/Carrito/Realizar Pedido.png"></button></h2></td>    
                    </tr>
                    </table>
                    
                </table>
            </section>
    </main>

    <!-- PRODUCTOS RELACIONADOS -->
    
    <section>
        <div>
            <h1 class="relacionado">PRODUCTOS RELACIONADOS</h1>
        </div>
        <div class="conteneddor">

            <div class="image">
                <img src="./img/3060-Ti-1-2-247x247.jpg">
                <div class="overlay">
                <a href="/Codigo/HTML/compra.html">      
                    <p> Tarjeta Grafica Gigabyte Nvidia RTX 3060 Ti 8GB</p>
                    <h3><span>$</span><strong>8,505</strong>DOP</h3>
                </a>
                    <button><input type="image" src="./img/al carrito.png"></a></button>
                </div>
            </div>
        

            <div class="image">
                <img src="./img/910-006096-150x150.jpg">
                <div class="overlay">
                <a href="/Codigo/HTML/compra.html"> 
                    <p> Mouse Logitech G502 Hero</p>
                    <h3><span>$</span><strong>8,505</strong>DOP</h3>
                </a>
                    <button><input type="image" src="./img/al carrito.png"></a></button>
                </div>
            </div>
        

            <div class="image">
               <img src="./img/3070-Ti-2-247x247.jpg">
               <div class="overlay">
            <a href="/Codigo/HTML/compra.html"> 
                <p> Tarjeta Grafica MSI Nvidia GeForce RTX 3060 Ti 8GB</p>
                <h3><span>$</span><strong>8,505</strong>DOP</h3>
            </a>
                <button><input type="image" src="./img/al carrito.png"></a></button>
            </div>
            </div>
        

            <div class="image">
                <img src="./img/dd_sg_st1000dm010_1tb-a-150x150.png">
                <div class="overlay">
                <a href="/Codigo/HTML/compra.html"> 
                    <p> Disco Duro 3.5 Seagate 1TB 7200RPM Sata 3 64MB</p>
                    <h3><span>$</span><strong>8,505</strong>DOP</h3>
                </a>
                    <button><input type="image" src="./img/al carrito.png"></a></button>
                </div>
            </div>



            <div class="image">
                <img src="./img/KF432S20IB-16-150x150.jpg">
                <div class="overlay">
                <a href="/Codigo/HTML/compra.html"> 
                    <p> Memora Ram DDR4 Fury Impact 3200MHz 16GB </p>
                    <h3><span>$</span><strong>8,505</strong>DOP</h3>
                </a>
                    <button><input type="image" src="./img/al carrito.png"></a></button>
                </div>
            </div>
       
            
            <div class="image">
                <img src="./img/i7-11700F-150x150.jpg">
                <div class="overlay">
                <a href="/Codigo/HTML/compra.html"> 
                    <p> Procesador Intel Core i9 11900k 3.5GHz Octa Core</p>
                    <h3><span>$</span><strong>8,505</strong>DOP</h3>
                </a>
                    <button><input type="image" src="./img/al carrito.png"></a></button>    
                </div>
            </div>
        </div>
</div>
    </section>
    
</body>

<!-- Comienzo del Footer -->

<footer style="background-color: darkred;">    
    
    <table cellspacing="15px" class="tablazz" > 
    
          <tr>
            <td> <h2> Soporte </h2> </td>
            <td> <h2>  Perfil </h2>  </td>
            <td> <img src="./img/intento de logo.png" class="imaing"> </td>
           
          </tr>

        <tr>
          <td class="tabloide"> 
            <a href="/Codigo/HTML/helper.html" class="aeaa"  > Contacto </a>
              </td>
          <td>
            <a href="/Codigo/HTML/cuentas.html" class="aeaa" > Cuenta </a> 
               </td>
          
        <tr>
          <td> 
            <a href="/Codigo/HTML/helper.html" class="aeaa" > Nosotros </a>
        </td>
          <td> 
            <a href="/Codigo/HTML/Carrito.html" class="aeaa" > Carrito </a>    
        </td>

        <td class="posi" rowspan="2" > 
            <a href="#" class="aeaa" > Siguenos: </a>
        </td>

       
    
         
        </tr>
        <tr>
          <td> 
            <a href="/Codigo/HTML/helper.html" class="aeaa" > Terminos y Condiciones </a>   
        </td>
          <td> 
            <a href="/Codigo/HTML/catalogo/grafica.html" class="aeaa" > Comprar </a>   
        </td>  
         <tr>
           <td> 
        <a href="/Codigo/HTML/helper.html" class="aeaa" > Preguntas Frecuentes </a>    
        </td>
           <td> 
         <a href="/Codigo/HTML/Favoritos.html" class="aeaa" > Lista de Deseos </a>   
        </td>

    
    
        
        <td colspan="1" > 
            
            <img src="./Lote/Carrito/pngegg (-7.png" class="joda">   
           

           
            
            <img src="./Lote/Carrito/pngegg (-8.png" class="joda">      
           

         
           
            <img src="./Lote/Carrito/pngegg (-9.png" class="joda">      
           </td>

        </tr>
     </table>
    
</footer>
<footer class="Mfooter">
    <div>
        <td> <img src="./img/letra ADPI.png" HSPACE="27px"  class="imaing3"> </td>
        <td> <img src="./img/fon123.png" HSPACE="308px"class="imaing2"> </td>
        <td> <img src="./img/logo-mastercard-cabecera-fb.png" class="imaing4"> </td>
        <td> <img src="./img/paypal.png"  class="imaing5"> </td>
        <td> <img src="./img/Former_Visa.png" class="imaing6"> </td>
    </div>
</footer>
</html>