<?php
include("config.php");
include("cn.php");
include 'carrito.php';
include ("cabecera.php");
?>

<?php
if($_POST){

    $total=0;
    $SID=session_id();
    $Correo="sladeswain@gmail.com";
     foreach ($_SESSION['CARRITO'] as $indice=> $producto ){

        $total=$total+($producto['PRECIO']*$producto['CANTIDAD']);


}




 


echo "<h3>" .$total. "</h3>";



 }


?>


<div class="jumbotron">
    <h1 class="display-4"> ! Paso Final ! </h1>
    <hr class="my-4">
    <p class="lead"> Estas a punto de pagar con paypal la cantidad de:
        <h4><?php echo number_format($total,2); ?> </h4>
</p>
   
    <p>Gracias por usar nuestros servicios</p>
</div>
