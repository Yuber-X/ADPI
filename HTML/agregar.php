<?php

include 'cn.php';


$name=$_POST["txtname"];
$num=$_POST["txtnum"];
$precio=$_POST["txtprec"];


            if ($name != null || $num != null || $precio != null ) {

            $sql = "INSERT INTO productos ( ProductoID, Nombre, CategoriaID,  Precio ) VALUES( NULL, '$name', '$num' , '$precio' ) ";
            mysqli_query($conexion, $sql);
        }
   
                
    
               







?>