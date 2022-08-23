<?php
include("config.php");
include("cn.php");
include 'carrito.php';
include ("cabecera.php");

$procesadores = "SELECT * FROM productos ";


?>
    <link href="./Catalogo.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <script type="text/javascript" src="js/bootstrap.min.js"> </script>
    <script type="text/javascript" src="js/jquery-3.6.0.min.js"> </script>
    <title>ADPI</title>

<body>
    <!----HEADER---->
    
      <!--  MENU  -->


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
                     <p class="card-text-center"> $ <?php echo $producto["Precio"]; ?> 
                  </a>
                    <form action="" method="post">
                 
                  <input type="hidden" name="id" id="id" value="<?php echo openssl_encrypt($producto['ProductoID'],COD,KEY); ?>">
                 <input type="hidden" name="nombre" id="nombre" value="<?php echo openssl_encrypt($producto['Nombre'],COD,KEY); ?>">
                 <input type="hidden" name="precio" id="precio" value="<?php echo openssl_encrypt($producto['Precio'],COD,KEY); ?>">
                 <input type="hidden" name="cantidad" id="cantidad" value="<?php echo openssl_encrypt (1,COD,KEY) ; ?>">
            
                   <button class="btn btn-primary btn_agregar" name="btnAccion" value="Agregar" type="submit"> añadir al carro </button>
            
                  
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