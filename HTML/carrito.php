<?php

session_start();


$mensaje = "";

if(isset($_POST['btnAccion'])){

    switch($_POST['btnAccion']){

        case 'Agregar':

            if(is_numeric( openssl_decrypt($_POST['id'], COD,KEY ))) {
                $ID=openssl_decrypt($_POST['id'], COD,KEY );
                $mensaje.="Ok ID correcto";
            }else{

                $mensaje = "ID incorrecto "; 
            }




            if(is_string( openssl_decrypt($_POST['nombre'], COD,KEY ))) {
                $NOMBRE=openssl_decrypt($_POST['nombre'], COD,KEY );
                $mensaje.="Ok NOMBRE correcto";
            }else{

                $mensaje = "nombre incorrecto "; 
            }


     
           

                if(is_numeric( openssl_decrypt($_POST['precio'], COD,KEY ))) {
                    $PRECIO=openssl_decrypt($_POST['precio'], COD,KEY );
                    $mensaje.="Ok PRECIO correcto";
                }else{
    
                    $mensaje = "precio incorrecto "; 
                }


                if(is_numeric( openssl_decrypt($_POST['cantidad'], COD,KEY ))) {
                    $CANTIDAD=openssl_decrypt($_POST['cantidad'], COD,KEY );
                    $mensaje.="Ok Cantidad correcta";
                }else{
    
                    $mensaje = "Cantidad incorrecto "; 
                }
    
    




                if(!isset($_SESSION['CARRITO'])){
                    $producto=array(

                        'ID'=> $ID,
                        'PRECIO'=> $PRECIO,
                        'NOMBRE'=> $NOMBRE,
                        'CANTIDAD'=> $CANTIDAD

                    );
                    $_SESSION['CARRITO'] [0]=$producto;
                    $mensaje = "producto agregado al carrito";


                } else {

                    $nombreproducto=array_column($_SESSION['CARRITO'], "NOMBRE");
                    if(in_array($NOMBRE, $nombreproducto)){
                        echo "<script>alert ('El producto ya ha sido seleccionado..'); </script>";
                        $mensaje = "";

                    }else{


                      $NumeroProductos = count($_SESSION[ 'CARRITO']);
                      $producto=array(
                        'ID'=> $ID,
                        'PRECIO'=> $PRECIO,
                        'NOMBRE'=> $NOMBRE,
                        'CANTIDAD'=> $CANTIDAD
                    );

                    $_SESSION['CARRITO'] [$NumeroProductos]=$producto;
                    $mensaje = "producto agregado al carrito";


                }
               
                 }
               // $mensaje = print_r($_SESSION,true);
                
    
                break;

                case "Eliminar":
                    if(is_numeric( openssl_decrypt($_POST['id'], COD,KEY ))) {
                        $ID=openssl_decrypt($_POST['id'], COD,KEY );
                        
                        foreach($_SESSION['CARRITO'] as $indice=> $producto){
                            if($producto['ID']== $ID){
                                unset($_SESSION['CARRITO'][$indice]);
                                 $_SESSION['CARRITO']=array_values($_SESSION["CARRITO"]);
                                echo "<script> alert ('Elemento borrado...'); </script>";

                            }
                        }
 


                    }else{
        
                        $mensaje = "nombre incorrecto "; 
                    }

                    break;

    }
    
}





?>