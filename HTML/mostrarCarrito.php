<?php
include("config.php");
include("cn.php");
include 'carrito.php';
include ("cabecera.php");




?>

<br> 
<h3> Lista del Carrito </h3>
<?php if(!empty($_SESSION['CARRITO'])) { ?>


<table class="table table-dark table-bordered">
    <tbody>
        <tr>
            <th width="40%" class="text-center"> Descrípcion </th>
            <th width="25%" class="text-center"> Precio</th>
            <th width="30%" class="text-center"> Cantidad</th>
            <th width="5%" class="text-center"> --</th>
           
        </tr>

        <?php $total=0; ?>
        <?php foreach ($_SESSION['CARRITO'] as $indice=> $producto ){?> 

        <tr>
            <td width="40%" class="text-center"> <?php echo $producto['NOMBRE']?>  </td>
            <td width="30%" class="text-center"> <?php echo $producto['CANTIDAD']?></td>
            <td width="25%" class="text-center"> <?php echo number_format($producto['PRECIO']*$producto['CANTIDAD'],2); ?></td>
            
            <td width="5%" class="text-center">
                
            <form action="" method="post">

            <input type="hidden" name="id" id="id" value="<?php echo openssl_encrypt($producto['ID'],COD,KEY); ?>">

            <button class="btn btn-danger" type="submit" name="btnAccion" value="Eliminar" > Eliminar</button>

            </form>
        
        
        
         
        </td>
           
        </tr>
        <?php $total=$total + ($producto['PRECIO']*$producto['CANTIDAD']); ?>

        <?php  } ?>

        <tr>
            <td colspan="3" align="right"> <h3>Total </h3> </td>
            <td align="rigth"> <h3>$<?php echo number_format($total,2); ?> </h3> </td>
        </tr>

        <tr>

        <td colspan="5">  
            <form action="pagar.php" method="POST">
                <div class="alert alert-success">

                <div class="form-group">
                <label for="my -input">  Correo de Contacto: </label>
                <input id="email" name="email" class="form-control" type="email" placeholder="Escriba su correo" required>
            </div>

            <small id="emailHelp" class="form-text text-muted">
                    Los Productos se enviaran a este correo

            </small>


                </div>

                <button class="btn btn-primary btn-lg btn-block" type="submit" name="btnAccion" value="proceder"> Proceder a pagar </button>

          

            </form>
           
    </td>



        </tr>









        
    </tbody>

</table>
<?php  } else {  ?>
<div class="alert alert-success">
    No hay productos en el carrito
</div>
<?php }?>