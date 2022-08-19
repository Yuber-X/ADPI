<?php
include("config.php");
include("cn.php");
include 'carrito.php';
include ("cabecera.php");

$p1 = "SELECT * FROM productos WHERE ProductoID = 1 ";
$p2 = "SELECT * FROM productos WHERE ProductoID = 16 ";
$p3 = "SELECT * FROM productos WHERE ProductoID = 4 ";
$p4 = "SELECT * FROM productos WHERE ProductoID = 10 ";
$p5 = "SELECT * FROM productos WHERE ProductoID = 3  ";
$p6 = "SELECT * FROM productos WHERE ProductoID = 2 ";

$p7 = "SELECT * FROM productos WHERE ProductoID = 11 ";
$p8 = "SELECT * FROM productos WHERE ProductoID = 13 ";
$p9 = "SELECT * FROM productos WHERE ProductoID = 12 ";
$p10 = "SELECT * FROM productos WHERE ProductoID = 9 ";
$p11 = "SELECT * FROM productos WHERE ProductoID = 14  ";
$p12 = "SELECT * FROM productos WHERE ProductoID = 17 ";

?>


    <br>
    <?php if($mensaje !="") {?>
    <div class="alert alert-success">

    
    <?php echo $mensaje; ?>

        <a href="mostrarCarrito.php" class="badge badge-success"> Ver carrito </a>
    </div>
    <?php  }?>
</div>

   

                
            
            
        



       <!-- <img src="img/intento de logo.png" class="Loge" href="Index.html" alt="logoxd"> -->



  


<main> 
    
      <div class="slider">
   <ul>
      
    <li> <img src="/Imagenes/img/LOGITECH-BANNER-WEB-G305.jpg"> </li>
    <li> <img src="/Imagenes/img/Banner_G5_1900x600_B-14.jpg"> </li>
    <li> <img src="/Imagenes/img/Banner_XtremetecPC.jpg"> </li>
    <li> <img src="/Imagenes/img/imagen 4.png"> </li>

   </ul>     
  
</div>


    <div class="tabla">

            <div class="caja" >

                <h3> Case </h3>
          
                <img src="/Imagenes/img/Chasis-1-800x800.jpg">
                
            </div>

            <div class="caja">
               <h3> 
                Componentes
               </h3>
             
               <img src="/Imagenes/img/Componentes-1-800x800.jpg">

            </div>

                <div class="caja">

                    <h3> Monitores </h3>
              
                    <img src="/Imagenes/img/Monitores-1-800x800.jpg">
                    
                </div>

                    <div class="caja">
    
                        <h3> Perifericos </h3>
                  
                        <img src="/Imagenes/img/Perifericos-1-800x800.jpg">
                        
                    </div>

    </div>


    
    <main>
        <div class="galeria">

            <div class="ayy"> 
            <div class="t1 "> 
                <h1> Destacados   </h1>

            </div>

            <div class="t1 "> 
                <h1> Recomendados   </h1>

            </div>

            <div class="t1 "> 
                <h1> Recientes  </h1>

            </div>
        </div>
        </div>


<div class="en linea"> </div>


<div class="conteneddor">

<?php $resultado = mysqli_query($conexion, $p1);
   while($row=mysqli_fetch_assoc($resultado)) { ?>                  


<?php foreach($resultado as $producto){ ?>

   
   
       <div class="image">
     <img title="titulo producto" alt="titulo" height="317px" class="card-img-top" src="<?php echo $row["Imagen"]; ?>" alt="" >
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

<?php $resultado = mysqli_query($conexion, $p2);
   while($row=mysqli_fetch_assoc($resultado)) { ?>                  


<?php foreach($resultado as $producto){ ?>

 


    
   
   
       <div class="image">
     <img title="titulo producto" alt="titulo" height="317px" class="card-img-top" src="<?php echo $row["Imagen"]; ?>" alt="" >
     <div class="card-body">
     <div class="overlay">
      
     
      
       <h5 class="card-title"> $ <?php echo $producto["Precio"]; ?> </h5>
        <p class="card-text"> <?php echo $producto["Nombre"]; ?> </p>

        <form action="" method="post">
     
     <input type="hidden" name="id" id="id" value="<?php echo openssl_encrypt($producto['ProductoID'],COD,KEY); ?>">
    <input type="hidden" name="nombre" id="nombre" value="<?php echo openssl_encrypt($producto['Nombre'],COD,KEY); ?>">
    <input type="hidden" name="precio" id="precio" value="<?php echo openssl_encrypt($producto['Precio'],COD,KEY); ?>">
    <input type="hidden" name="cantidad" id="cantidad" value="<?php echo openssl_encrypt (1,COD,KEY) ; ?>">

      <button class="btn btn-primary" name="btnAccion" value="Agregar" type="submit"> añadir al carro </button>

     
      </form>
       
   </div>
       </div>
       </div>
      
       <?php } ?> 



<?php  } ?> 


<?php $resultado = mysqli_query($conexion, $p3);
   while($row=mysqli_fetch_assoc($resultado)) { ?>                  


<?php foreach($resultado as $producto){ ?>

 


    
   
   
    <div class="image">
     <img title="titulo producto" alt="titulo" height="317px" class="card-img-top" src="<?php echo $row["Imagen"]; ?>" alt="" >
     <div class="card-body">
     <div class="overlay">
      
     
      
       <h5 class="card-title"> $ <?php echo $producto["Precio"]; ?> </h5>
        <p class="card-text"> <?php echo $producto["Nombre"]; ?> </p>

        <form action="" method="post">
     
     <input type="hidden" name="id" id="id" value="<?php echo openssl_encrypt($producto['ProductoID'],COD,KEY); ?>">
    <input type="hidden" name="nombre" id="nombre" value="<?php echo openssl_encrypt($producto['Nombre'],COD,KEY); ?>">
    <input type="hidden" name="precio" id="precio" value="<?php echo openssl_encrypt($producto['Precio'],COD,KEY); ?>">
    <input type="hidden" name="cantidad" id="cantidad" value="<?php echo openssl_encrypt (1,COD,KEY) ; ?>">

      <button class="btn btn-primary" name="btnAccion" value="Agregar" type="submit"> añadir al carro </button>

     
      </form>
       
   </div>
       </div>
       </div>
      
       <?php } ?> 



       


<?php  } ?> 


<?php $resultado = mysqli_query($conexion, $p4);
   while($row=mysqli_fetch_assoc($resultado)) { ?>                  


<?php foreach($resultado as $producto){ ?>

 


    
   
   
       <div class="image">
     <img title="titulo producto" alt="titulo" height="317px" class="card-img-top" src="<?php echo $row["Imagen"]; ?>" alt="" >
     <div class="card-body">
     <div class="overlay">
       
     
      
       <h5 class="card-title"> $ <?php echo $producto["Precio"]; ?> </h5>
        <p class="card-text"> <?php echo $producto["Nombre"]; ?> </p>

        <form action="" method="post">
     
     <input type="hidden" name="id" id="id" value="<?php echo openssl_encrypt($producto['ProductoID'],COD,KEY); ?>">
    <input type="hidden" name="nombre" id="nombre" value="<?php echo openssl_encrypt($producto['Nombre'],COD,KEY); ?>">
    <input type="hidden" name="precio" id="precio" value="<?php echo openssl_encrypt($producto['Precio'],COD,KEY); ?>">
    <input type="hidden" name="cantidad" id="cantidad" value="<?php echo openssl_encrypt (1,COD,KEY) ; ?>">

      <button class="btn btn-primary" name="btnAccion" value="Agregar" type="submit"> añadir al carro </button>

     
      </form>
       
   </div>
       </div>
       </div>
      
       <?php } ?> 



<?php  } ?> 


<?php $resultado = mysqli_query($conexion, $p5);
   while($row=mysqli_fetch_assoc($resultado)) { ?>                  


<?php foreach($resultado as $producto){ ?>

 


    
   
   
       <div class="image">
     <img title="titulo producto" alt="titulo" height="317px" class="card-img-top" src="<?php echo $row["Imagen"]; ?>" alt="" >
     <div class="card-body">
     <div class="overlay">
      
     
      
       <h5 class="card-title"> $ <?php echo $producto["Precio"]; ?> </h5>
        <p class="card-text"> <?php echo $producto["Nombre"]; ?> </p>

        <form action="" method="post">
     
     <input type="hidden" name="id" id="id" value="<?php echo openssl_encrypt($producto['ProductoID'],COD,KEY); ?>">
    <input type="hidden" name="nombre" id="nombre" value="<?php echo openssl_encrypt($producto['Nombre'],COD,KEY); ?>">
    <input type="hidden" name="precio" id="precio" value="<?php echo openssl_encrypt($producto['Precio'],COD,KEY); ?>">
    <input type="hidden" name="cantidad" id="cantidad" value="<?php echo openssl_encrypt (1,COD,KEY) ; ?>">

      <button class="btn btn-primary" name="btnAccion" value="Agregar" type="submit"> añadir al carro </button>

     
      </form>
       
   </div>
       </div>
       </div>
      
       <?php } ?> 



<?php  } ?> 


<?php $resultado = mysqli_query($conexion, $p6);
   while($row=mysqli_fetch_assoc($resultado)) { ?>                  


<?php foreach($resultado as $producto){ ?>

 


    
   
   
       <div class="image">
     <img title="titulo producto" alt="titulo" height="317px" class="card-img-top" src="<?php echo $row["Imagen"]; ?>" alt="" >
     <div class="card-body">
     <div class="overlay">
      
     
      
       <h5 class="card-title"> $ <?php echo $producto["Precio"]; ?> </h5>
        <p class="card-text"> <?php echo $producto["Nombre"]; ?> </p>

        <form action="" method="post">
     
     <input type="hidden" name="id" id="id" value="<?php echo openssl_encrypt($producto['ProductoID'],COD,KEY); ?>">
    <input type="hidden" name="nombre" id="nombre" value="<?php echo openssl_encrypt($producto['Nombre'],COD,KEY); ?>">
    <input type="hidden" name="precio" id="precio" value="<?php echo openssl_encrypt($producto['Precio'],COD,KEY); ?>">
    <input type="hidden" name="cantidad" id="cantidad" value="<?php echo openssl_encrypt (1,COD,KEY) ; ?>">

      <button class="btn btn-primary" name="btnAccion" value="Agregar" type="submit"> añadir al carro </button>

     
      </form>
       
   </div>
       </div>
       </div>
      
       <?php } ?> 



<?php  } ?> 






</div>





















        
    <section id="ks">

        <div class="slider">
            <ul class="suerte">
                
                
               
             <li> <img src="/Imagenes/img/_hardware_-4740377.jpg"> </li>
             <li> <img src="/Imagenes/img/comprar-pc-gamer-2021-battler.jpg"> </li>
             <li> <img src="/Imagenes/img/pc_para_streaming_gaming.jpg"> </li>
             <li> <img src="/Imagenes/img/Culturageek.com_.ar-Corsair-05.jpg"> </li>

             <div class="cuadro"> 
             <h2> Subscribete y recibe lo ultimo en ofertas</h2>
             
           
            </div>
         
            </ul>     
           
         </div>


    </section>

    <section>

        <div class="galeria">
    
            <h1> Lo mas Vendido </h1>

            <div class="en linea"> </div>

            <div class="conteneddor">

<?php $resultado = mysqli_query($conexion, $p7);
   while($row=mysqli_fetch_assoc($resultado)) { ?>                  


<?php foreach($resultado as $producto){ ?>

 


    
   
   
       <div class="image">
     <img title="titulo producto" alt="titulo" height="317px" class="card-img-top" src="<?php echo $row["Imagen"]; ?>" alt="" >
     <div class="card-body">
     <div class="overlay">
       <span> <?php echo $producto["Nombre"]; ?></span>
     
      
       <h5 class="card-title"> $ <?php echo $producto["Precio"]; ?> </h5>
        <p class="card-text"> <?php echo $producto["Nombre"]; ?> </p>

        <form action="" method="post">
     
     <input type="hidden" name="id" id="id" value="<?php echo openssl_encrypt($producto['ProductoID'],COD,KEY); ?>">
    <input type="hidden" name="nombre" id="nombre" value="<?php echo openssl_encrypt($producto['Nombre'],COD,KEY); ?>">
    <input type="hidden" name="precio" id="precio" value="<?php echo openssl_encrypt($producto['Precio'],COD,KEY); ?>">
    <input type="hidden" name="cantidad" id="cantidad" value="<?php echo openssl_encrypt (1,COD,KEY) ; ?>">

      <button class="btn btn-primary" name="btnAccion" value="Agregar" type="submit"> añadir al carro </button>

     
      </form>
       
   </div>
       </div>
       </div>
      
       <?php } ?> 



<?php  } ?> 

<?php $resultado = mysqli_query($conexion, $p8);
   while($row=mysqli_fetch_assoc($resultado)) { ?>                  


<?php foreach($resultado as $producto){ ?>

 


    
   
   
       <div class="image">
     <img title="titulo producto" alt="titulo" height="317px" class="card-img-top" src="<?php echo $row["Imagen"]; ?>" alt="" >
     <div class="card-body">
     <div class="overlay">
       <span> <?php echo $producto["Nombre"]; ?></span>
     
      
       <h5 class="card-title"> $ <?php echo $producto["Precio"]; ?> </h5>
        <p class="card-text"> <?php echo $producto["Nombre"]; ?> </p>

        <form action="" method="post">
     
     <input type="hidden" name="id" id="id" value="<?php echo openssl_encrypt($producto['ProductoID'],COD,KEY); ?>">
    <input type="hidden" name="nombre" id="nombre" value="<?php echo openssl_encrypt($producto['Nombre'],COD,KEY); ?>">
    <input type="hidden" name="precio" id="precio" value="<?php echo openssl_encrypt($producto['Precio'],COD,KEY); ?>">
    <input type="hidden" name="cantidad" id="cantidad" value="<?php echo openssl_encrypt (1,COD,KEY) ; ?>">

      <button class="btn btn-primary" name="btnAccion" value="Agregar" type="submit"> añadir al carro </button>

     
      </form>
       
   </div>
       </div>
       </div>
      
       <?php } ?> 



<?php  } ?> 


<?php $resultado = mysqli_query($conexion, $p9);
   while($row=mysqli_fetch_assoc($resultado)) { ?>                  


<?php foreach($resultado as $producto){ ?>

 


    
   
   
       <div class="image">
     <img title="titulo producto" alt="titulo" height="317px" class="card-img-top" src="<?php echo $row["Imagen"]; ?>" alt="" >
     <div class="card-body">
     <div class="overlay">
       <span> <?php echo $producto["Nombre"]; ?></span>
     
      
       <h5 class="card-title"> $ <?php echo $producto["Precio"]; ?> </h5>
        <p class="card-text"> <?php echo $producto["Nombre"]; ?> </p>

        <form action="" method="post">
     
     <input type="hidden" name="id" id="id" value="<?php echo openssl_encrypt($producto['ProductoID'],COD,KEY); ?>">
    <input type="hidden" name="nombre" id="nombre" value="<?php echo openssl_encrypt($producto['Nombre'],COD,KEY); ?>">
    <input type="hidden" name="precio" id="precio" value="<?php echo openssl_encrypt($producto['Precio'],COD,KEY); ?>">
    <input type="hidden" name="cantidad" id="cantidad" value="<?php echo openssl_encrypt (1,COD,KEY) ; ?>">

      <button class="btn btn-primary" name="btnAccion" value="Agregar" type="submit"> añadir al carro </button>

     
      </form>
       
   </div>
       </div>
       </div>
      
       <?php } ?> 



<?php  } ?> 


<?php $resultado = mysqli_query($conexion, $p10);
   while($row=mysqli_fetch_assoc($resultado)) { ?>                  


<?php foreach($resultado as $producto){ ?>

 


    
   
   
       <div class="image">
     <img title="titulo producto" alt="titulo" height="317px" class="card-img-top" src="<?php echo $row["Imagen"]; ?>" alt="" >
     <div class="card-body">
     <div class="overlay">
       <span> <?php echo $producto["Nombre"]; ?></span>
     
      
       <h5 class="card-title"> $ <?php echo $producto["Precio"]; ?> </h5>
        <p class="card-text"> <?php echo $producto["Nombre"]; ?> </p>

        <form action="" method="post">
     
     <input type="hidden" name="id" id="id" value="<?php echo openssl_encrypt($producto['ProductoID'],COD,KEY); ?>">
    <input type="hidden" name="nombre" id="nombre" value="<?php echo openssl_encrypt($producto['Nombre'],COD,KEY); ?>">
    <input type="hidden" name="precio" id="precio" value="<?php echo openssl_encrypt($producto['Precio'],COD,KEY); ?>">
    <input type="hidden" name="cantidad" id="cantidad" value="<?php echo openssl_encrypt (1,COD,KEY) ; ?>">

      <button class="btn btn-primary" name="btnAccion" value="Agregar" type="submit"> añadir al carro </button>

     
      </form>
       
   </div>
       </div>
       </div>
      
       <?php } ?> 



<?php  } ?> 


<?php $resultado = mysqli_query($conexion, $p11);
   while($row=mysqli_fetch_assoc($resultado)) { ?>                  


<?php foreach($resultado as $producto){ ?>

 


    
   
   
       <div class="image">
     <img title="titulo producto" alt="titulo" height="317px" class="card-img-top" src="<?php echo $row["Imagen"]; ?>" alt="" >
     <div class="card-body">
     <div class="overlay">
       <span> <?php echo $producto["Nombre"]; ?></span>
     
      
       <h5 class="card-title"> $ <?php echo $producto["Precio"]; ?> </h5>
        <p class="card-text"> <?php echo $producto["Nombre"]; ?> </p>

        <form action="" method="post">
     
      <input type="hidden" name="id" id="id" value="<?php echo openssl_encrypt($producto['ProductoID'],COD,KEY); ?>">
     <input type="hidden" name="nombre" id="nombre" value="<?php echo openssl_encrypt($producto['Nombre'],COD,KEY); ?>">
     <input type="hidden" name="precio" id="precio" value="<?php echo openssl_encrypt($producto['Precio'],COD,KEY); ?>">
     <input type="hidden" name="cantidad" id="cantidad" value="<?php echo openssl_encrypt (1,COD,KEY) ; ?>">

       <button class="btn btn-primary" name="btnAccion" value="Agregar" type="submit"> añadir al carro </button>

      
       </form>
       
   </div>
       </div>
       </div>
      
       <?php } ?> 



<?php  } ?> 


<?php $resultado = mysqli_query($conexion, $p12);
   while($row=mysqli_fetch_assoc($resultado)) { ?>                  


<?php foreach($resultado as $producto){ ?>

 


    
   
   
       <div class="image">
     <img title="titulo producto" alt="titulo" height="317px" class="card-img-top" src="<?php echo $row["Imagen"]; ?>" alt="" >
     <div class="card-body">
     <div class="overlay">
       <span> <?php echo $producto["Nombre"]; ?></span>
     
      
       <h5 class="card-title"> $ <?php echo $producto["Precio"]; ?> </h5>
        <p class="card-text"> <?php echo $producto["Nombre"]; ?> </p>

        <form action="" method="post">
     
      <input type="hidden" name="id" id="id" value="<?php echo openssl_encrypt($producto['ProductoID'],COD,KEY); ?>">
     <input type="hidden" name="nombre" id="nombre" value="<?php echo openssl_encrypt($producto['Nombre'],COD,KEY); ?>">
     <input type="hidden" name="precio" id="precio" value="<?php echo openssl_encrypt($producto['Precio'],COD,KEY); ?>">
     <input type="hidden" name="cantidad" id="cantidad" value="<?php echo openssl_encrypt (1,COD,KEY) ; ?>">

       <button class="btn btn-primary" name="btnAccion" value="Agregar" type="submit"> añadir al carro </button>

      
       </form>
       
   </div>
       </div>
       </div>
      
       <?php } ?> 



<?php  } ?> 






</div>
               
            
        </div>

    </main>
    </body>
       
      

    <footer>

    

        

        <table cellspacing="15px" class="tablazz" > 
        
              <tr>
                <td> <h2> Soporte </h2> </td>
                <td> <h2>  Perfil </h2>  </td>
                <td> <img src="/Imagenes/img/intento de logo.png" class="imaing"> </td>
               
              </tr>

            <tr>
              <td class="tabloide"> 
                <a href="#" class="aeaa"  > Contacto </a>
                  </td>
              <td>
                <a href="#" class="aeaa" > Cuenta </a> 
                   </td>
              
            <tr>
              <td> 
                <a href="#" class="aeaa" > Nosotros </a>
            </td>
              <td> 
                <a href="#" class="aeaa" > Carrito </a>    
            </td>

            <td class="posi" rowspan="2" > 
                <a href="#" class="aeaa" > Siguenos: </a>
            </td>

           
        
             
            </tr>
            <tr>
              <td> 
                <a href="#" class="aeaa" > Terminos y Condiciones </a>   
            </td>
              <td> 
                <a href="#" class="aeaa" > Comprar </a>   
            </td>  
             <tr>
               <td> 
            <a href="#" class="aeaa" > Preguntas Frecuentes </a>    
            </td>
               <td> 
             <a href="#" class="aeaa" > Lista de Deseos </a>   
            </td>

        
        
            
            <td colspan="1" > 
                
                <img src="/Imagenes/img/pngegg (-7.png" class="joda">   
               

               
                
                <img src="/Imagenes/img/pngegg (-8.png" class="joda">      
               

             
               
                <img src="/Imagenes/img/pngegg (-9.png" class="joda">      
               </td>

            </tr>
         </table>
        
    </footer>

    <footer class="Mfooter">
        <div>
            <td> <img src="/Imagenes/img/letra ADPI.png" HSPACE="27px"  class="imaing3"> </td>
            <td> <img src="/Imagenes/img/fon123.png" HSPACE="308px"class="imaing2"> </td>
            <td> <img src="/Imagenes/img/logo-mastercard-cabecera-fb.png" class="imaing4"> </td>
            <td> <img src="/Imagenes/img/paypal.png" " class="imaing5"> </td>
            <td> <img src="/Imagenes/img/Former_Visa.png" class="imaing6"> </td>
        
        </div>
    
    </footer>
    
</html>