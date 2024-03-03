<?php
require_once "../modelo/producto.php";
$objcontrol = new clas_producto();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <tr>
            <td>ID</td>
            <td>Nombre</td>
            <td>Descripción</td>
            <td>marca</td>
            <td>stock</td>
            <td>precio</td>
            <td>categoria</td>
            <td>provedor</td>
        </tr>

        <?php

        foreach($objcontrol->mostrar() as $dato){
        ?>

        <tr>
            <td><?php echo $dato['id_producto'];?></td>
            <td><?php echo $dato['nombre'];?></td>
            <td><?php echo $dato['descripcion'];?></td>
            <td><?php echo $dato['marca'];?></td>
            <td><?php echo $dato['stock'];?></td>
            <td><?php echo $dato['precio'];?></td>
            <td><?php echo $dato['categoria'];?></td>
            <td><?php echo $dato['proveedor'];?></td>
        </tr>
        <?php
        
        }
        ?>

    </table>
</body>
</html>