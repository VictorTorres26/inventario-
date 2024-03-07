<?php
require_once '../modelo/producto.php';
$ObjProducto = new clas_producto();
?>

<div class="bottom-data">
    <div class="orders">
        <div class="header">
            <i class='bx bx-receipt'></i>
            <h3>Productos Registrados</h3>
            <div class="form-input">
                <input type="search" placeholder="Search...">
                <button class="search-btn" type="submit"><i class='bx bx-search'></i></button>
            </div>
            <button id="add">Agregar</button>
            <button id="delete">Eliminar</button>
        </div>
        <table>
            <thead class="thead">
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Descripcion</th>
                    <th>Marca</th>
                    <th>Stock</th>
                    <th>Precio</th>
                    <th>Categoria</th>
                    <th>Proveedor</th>
                    <th>Acciones</th>
                </tr>
            </thead>

            <?php
            foreach($ObjProducto->inventario() as $dato){
            ?>

            <tbody>
                <tr>
                    <td><?php echo $dato['id_producto'];?></td>
                    <td><?php echo $dato['nombre'];?></td>
                    <td><?php echo $dato['descripcion'];?></td>
                    <td><?php echo $dato['nombre_marca'];?></td>
                    <td><?php echo $dato['stock'];?></td>
                    <td><?php echo $dato['precio']; echo '$';?></td>
                    <td><?php echo $dato['nombre_categoria'];?></td>
                    <td><?php echo $dato['nombre_proveedor'];?></td>
                    <td>
                        <a class="edit"><i class="bx bxs-edit"></i></a>
                        <a class="delete"><i class='bx bxs-message-alt-x'></i></a>
                    </td>
                </tr>

            <?php
            }
            ?>
            </tbody>
        </table>
    </div>