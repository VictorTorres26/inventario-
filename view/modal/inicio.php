<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../recursos/css/registro.css">
    <title>registro</title>

    <?php
        require_once "../modelo/marca_categoria_tproveedor.php";
        require_once "../modelo/proveedor.php";
        $objProveedor = new clas_proveedor();
        $objMarca = new class_marca_categoria_tproveedor();
    ?>
</head>
<body>
    <div class="modal" id="modal">
        <div class="modal-content">
            <form method="post" action="../controller/control_producto.php">
                <h4>Registar un Nuevo Producto</h4><br>
                        
                <input type="text" name="id_producto" placeholder="id_producto">
        
                <input type="text" name="nombre" placeholder="nombre">
        
                <input type="text" name="descripcion" placeholder="descrip">
                

                <select name="id_marca">
                <?php
                foreach($objMarca->buscarMarca() as $marca){
                    $id_marca = $marca['id_marca'];
                    $nombre_marca = $marca['nombre_marca'];
                    echo "<option value='$id_marca'>$nombre_marca</option>";
                } ?>
                </select>
                
                <input type="text" name="stock" placeholder="stock">
                <input type="text" name="precio" placeholder="precio">

                <select name="id_categoria">
                <?php
                foreach($objMarca->buscarCategoria() as $categoria){
                
                    $id_categoria = $categoria['id_categoria'];
                    $nombre_categoria = $categoria['nombre_categoria'];
                    echo "<option value='$id_categoria'>$nombre_categoria</option>";
                }?>
                </select>

                <select name="id_proveedor">
                <?php
                foreach($objProveedor->buscarproveedor() as $proveedor){
                    
                    $id_proveedor = $proveedor['id_proveedor'];
                    $nombre_proveedor = $proveedor['nombre_proveedor'];
                    echo "<option value='$id_proveedor'>$nombre_proveedor</option>";
                    } ?>
                </select>
                
                <input name="cerrar" id="cerrar" class="error" value="Cerrar">
                <input type="submit" name="guardar" id="guardar" value="guardar">
            </form>
        </div>

    </div> 
</body>
</html>
