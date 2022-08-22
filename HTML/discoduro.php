<?php
include("config.php");
include("cn.php");
include 'carrito.php';
include ("cabecera.php");

$procesadores = "SELECT * FROM productos ";


?>


























<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

   
    <link href=" /CSS/Catalogo.css" rel="stylesheet">


    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <script type="text/javascript" src="js/bootstrap.min.js"> </script>
    <script type="text/javascript" src="js/jquery-3.6.0.min.js"> </script>


    <title>ADPI</title>
</head>

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
                            <li><a href=" /HTML/catalogo/disipador.html"><img src="/Imagenes/Lote/Menu/Boton 2.png"></a></li>
                            <li><a href=" /HTML/catalogo/ram.html"><img src="/Imagenes/Lote/Menu/Boton 3.png"></a></li>
                            <li><a href=" /HTML/catalogo/powersupply.html"><img src="/Imagenes/Lote/Menu/Boton 4.png"></a></li>
                            <li><a href=" /HTML/catalogo/grafica.html"><img src="/Imagenes/Lote/Menu/Boton 5.png"></a></li>
                            <li><a href=" /HTML/catalogo/herramientas.html"><img src="/Imagenes/Lote/Menu/Boton 6.png"></a></li>
                            <li><a href=" /HTML/catalogo/discoduro.html"><img src="/Imagenes/Lote/Menu/Boton 7.png"></a></li>
                            <li><a href=" /HTML/catalogo/motherboard.html"><img src="/Imagenes/Lote/Menu/Boton 8.png"></a></li>
                            <li><a href=" /HTML/catalogo/procesadores.html"><img src="/Imagenes/Lote/Menu/Boton 9.png"></a></li>
                        </ul>
                </li>
                <li>
                    <a href=" /HTML/catalogo/monitores.html">Monitores</a>
                </li>
                <li>
                    <a href="#">Perifericos</a>
                        <ul class="menu_vertical">
                            <li><a href=" /HTML/catalogo/entrada_p.html"> <img src="/Imagenes/Lote/Menu/Boton 1p.png"></a></li>
                            <li><a href=" /HTML/catalogo/salida_p.html"> <img src="/Imagenes/Lote/Menu/Boton 2p.png"></a></li>
                            <li><a href=" /HTML/catalogo/comunicacion_p.html"> <img src="/Imagenes/Lote/Menu/Boton 3p.png"></a></li>
                        </ul>                 
                </li>
            </ul>
        </nav>    
    </div>
    
  
    

      <!--Titulo-->

    <section>
        <div>
            <h1><img class="encabezado" src="/Imagenes/Lote/Catalogo/catalogo_0.png" alt=""></h1>
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
                   
                  
                    <p class="card-text-center"> <?php echo $producto["Nombre"]; ?> </p>
                     <p class="card-text-center"> $ <?php echo $producto["Precio"]; ?> 
            
                    <form action="" method="post">
                 
                  <input type="hidden" name="id" id="id" value="<?php echo openssl_encrypt($producto['ProductoID'],COD,KEY); ?>">
                 <input type="hidden" name="nombre" id="nombre" value="<?php echo openssl_encrypt($producto['Nombre'],COD,KEY); ?>">
                 <input type="hidden" name="precio" id="precio" value="<?php echo openssl_encrypt($producto['Precio'],COD,KEY); ?>">
                 <input type="hidden" name="cantidad" id="cantidad" value="<?php echo openssl_encrypt (1,COD,KEY) ; ?>">
            
                   <button class="btn btn-primary" name="btnAccion" value="Agregar" type="submit"> añadir al carro </button>
            
                  
                   </form>
                   </p>
                   
               </div>
                   </div>
                   </div>
            
               
                  
                   <?php } ?> 
            
            
            
            <?php  } ?> 
            
            
            


    </Main>

<?php
 include("pie.php");
 ?>
</body>
</html>