<?php
require_once '../modelo/producto.php';
$ObjProducto = new clas_producto();
?>
<ul class="insights">
    <li>
        <i class='bx bx-calendar-check'></i>
        <span class="info">
            <p>Productos Disponibles</p>
        <h3> <?php $ObjProducto->contar_productos(); ?> </h3> 
        </span>
    </li>
    <li><i class='bx bx-show-alt'></i>
        <span class="info">
            <h3>
                3,944
            </h3>
            <p>Site Visit</p>
        </span>
    </li>
    <li><i class='bx bx-line-chart'></i>
        <span class="info">
            <h3>
                14,721
            </h3>
            <p>Searches</p>
        </span>
    </li>
    <li><i class='bx bx-dollar-circle'></i>
        <span class="info">
            <h3>
                $6,742
            </h3>
            <p>Total Sales</p>
        </span>
    </li>
</ul>
