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

$sentencia = $conexion->prepare("INSERT INTO `tblventas`
 (`ID`, `ClaveTransaccion`, `PaypalDatos`, `Fecha`, `Correo`, `Total`, `status`)
 VALUES (NULL,:ClaveTransaccion, '', NOW(),:Correo,:Total, 'pendiente');");


$sentencia->bind_param(":ClaveTransaccion", $SID);
$sentencia->bind_param(":Correo", $Correo);
$sentencia->bind_param(":Total", $total);
$sentencia->execute();




 


echo "<h3>" .$total. "</h3>";

 }


?>

