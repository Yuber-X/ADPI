<?php
include("config.php");
include("cn.php");
include 'carrito.php';
include ("cabecera.php");
$procesadores = "SELECT * FROM productos ";
?>

      <!--  MENU  -->


<<<<<<< HEAD
=======
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

   

>>>>>>> 81f0e0258be17279f37c3fe39b5ffccc4fd44993
    <link href="./Catalogo.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <script type="text/javascript" src="js/bootstrap.min.js"> </script>
    <script type="text/javascript" src="js/jquery-3.6.0.min.js"> </script>
    <title>ADPI</title>
      <!--  MENU  -->

<<<<<<< HEAD
<nav class="navbar navbar-expand-lg bg-dark menu_nav_cat">
  <div class="container-fluid">
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="#">Procesadores</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Tarjeta Grafica</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">PowerSupply</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Ram</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Disipadores</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">MotherBoard</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Disco Duro</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Herramientas</a>
        </li>
      </ul>
=======
<body>
    <!----HEADER---->
    
     
             
       
    
    
    <div class="contenedor_menu">
        <nav class="nav_menu">
            <ul class="menu_horizontal">
                <li >
                    <a href=" /HTML/catalogo/case.html">Case</a>
                </li>
                <li >
                    <a href="#">Componentes</a>
                        <ul class="menu_vertical">

                            <li><a href=" /HTML/catalogo/disipador.html"><img src="./Lote/Menu/Boton 2.png"></a></li>
                            <li><a href=" /HTML/catalogo/ram.html"><img src="./Lote/Menu/Boton 3.png"></a></li>
                            <li><a href=" /HTML/catalogo/powersupply.html"><img src="./Lote/Menu/Boton 4.png"></a></li>
                            <li><a href=" /HTML/catalogo/grafica.html"><img src="./Lote/Menu/Boton 5.png"></a></li>
                            <li><a href=" /HTML/catalogo/herramientas.html"><img src="./Lote/Menu/Boton 6.png"></a></li>
                            <li><a href=" /HTML/catalogo/discoduro.html"><img src="./Lote/Menu/Boton 7.png"></a></li>
                            <li><a href=" /HTML/catalogo/motherboard.html"><img src="./Lote/Menu/Boton 8.png"></a></li>
                            <li><a href=" /HTML/catalogo/procesadores.html"><img src="./Lote/Menu/Boton 9.png"></a></li>
                        </ul>
                </li>
                <li>
                    <a href=" /HTML/catalogo/monitores.html">Monitores</a>
                </li>
                <li>
                    <a href="#">Perifericos</a>
                        <ul class="menu_vertical">
                            <li><a href=" /HTML/catalogo/entrada_p.html"> <img src="./Lote/Menu/Boton 1p.png"></a></li>
                            <li><a href=" /HTML/catalogo/salida_p.html"> <img src="./Lote/Menu/Boton 2p.png"></a></li>
                            <li><a href=" /HTML/catalogo/comunicacion_p.html"> <img src="./Lote/Menu/Boton 3p.png"></a></li>
                        </ul>                 
                </li>
            </ul>
        </nav>    
>>>>>>> 81f0e0258be17279f37c3fe39b5ffccc4fd44993
    </div>
  </div>
</nav>
    


      <!--Titulo-->

    <section>
        <div>

            <h1><img class="encabezado" src="./Lote/Catalogo/catalogo_0.png" alt=""></h1>
        </div>
    </section>


    <!--PRODUCTO-->
    
    <Main>
        <div class="conteneddor">
            <?php $resultado = mysqli_query($conexion, $procesadores);
               while($row=mysqli_fetch_array($resultado)) { ?>                  
            
            <?php foreach($resultado as $producto){ ?>
            
               
               
                   <div class="image">
                 <img title="titulo producto" alt="titulo" height="317px" class="card-img-top" src="<?php echo $producto["Imagen"]; ?>" alt="" >
                 <div class="card-body-center">
                 <div class="overlay">
                 
                 <a href="compra.php">
                    <p class="card-text-center"> <?php echo $producto["Nombre"]; ?> </p>
                     <p class="card-text-center card_text"> $ <?php echo $producto["Precio"]; ?> 
                  </a>
                    <form action="" method="post">
                 
                  <input type="hidden" name="id" id="id" value="<?php echo openssl_encrypt($producto['ProductoID'],COD,KEY); ?>">
                 <input type="hidden" name="nombre" id="nombre" value="<?php echo openssl_encrypt($producto['Nombre'],COD,KEY); ?>">
                 <input type="hidden" name="precio" id="precio" value="<?php echo openssl_encrypt($producto['Precio'],COD,KEY); ?>">
                 <input type="hidden" name="cantidad" id="cantidad" value="<?php echo openssl_encrypt (1,COD,KEY) ; ?>">
            
                   <button class="btn btn-primary btn_agregar" name="btnAccion" value="Agregar" type="submit"> Añadir al Carro </button>
            
                  
                   </form>
                   </p>
                   
               </div>
                   </div>
                   </div>

            
                   <?php } ?> 
            
                   
            
            <?php  } ?> 
            
           
            


    </Main>

<<<<<<< HEAD
<?php
 include("pie.php");
?>

=======
    <footer style="background-color: darkred;">    
    
        <table cellspacing="15px" class="tablazz" > 
        
              <tr>
                <td> <h2> Soporte </h2> </td>
                <td> <h2>  Perfil </h2>  </td>

                <td> <img src="./img/intento de logo.png" class="imaing"> </td>

               
              </tr>
    
            <tr>
              <td class="tabloide"> 
                <a href=" /HTML/helper.html" class="aeaa"  > Contacto </a>
                  </td>
              <td>
                <a href=" /HTML/cuentas.html" class="aeaa" > Cuenta </a> 
                   </td>
              
            <tr>
              <td> 
                <a href=" /HTML/helper.html" class="aeaa" > Nosotros </a>
            </td>
              <td> 
                <a href=" /HTML/Carrito.html" class="aeaa" > Carrito </a>    
            </td>
    
            <td class="posi" rowspan="2" > 
                <a href="#" class="aeaa" > Siguenos: </a>
            </td>
    
           
        
             
            </tr>
            <tr>
              <td> 
                <a href=" /HTML/helper.html" class="aeaa" > Terminos y Condiciones </a>   
            </td>
              <td> 
                <a href=" /HTML/catalogo/grafica.html" class="aeaa" > Comprar </a>   
            </td>  
             <tr>
               <td> 
            <a href=" /HTML/helper.html" class="aeaa" > Preguntas Frecuentes </a>    
            </td>
               <td> 
             <a href=" /HTML/Favoritos.html" class="aeaa" > Lista de Deseos </a>   
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
>>>>>>> 81f0e0258be17279f37c3fe39b5ffccc4fd44993
</body>
</html>