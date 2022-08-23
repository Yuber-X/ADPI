<?php

include 'cn.php';


$name=$_POST["txtcat"];
$num=$_POST["txtid"];



            if ($name != null || $num != null  ) {

            $sql = "INSERT INTO categorias ( ID, Nombres, IDproductos ) VALUES( NULL, '$name', '$num' ) ";
            mysqli_query($conexion, $sql);
        }
   
                
    
               







?>