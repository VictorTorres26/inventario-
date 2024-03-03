<?php 
    include_once "../modelo/producto.php";
    
    $objproducto = new clas_producto();

    $id_producto = "";
    $nombre = "";
    $descripcion = "";
    $marca = "";
    $stock = "";
    $precio = "";
    $categoria = "";
    $proveedor = "";
   
    if(isset($_POST['guardar'])){
       
        $objproducto->set_id_producto($_POST['id_producto']);
        $objproducto->set_nombre($_POST['nombre']);
        $objproducto->set_descripcion($_POST['descripcion']);
        $objproducto->set_marca($_POST['marca']);
        $objproducto->set_stock($_POST['stock']);
        $objproducto->set_precio($_POST['precio']);
        $objproducto->set_categoria($_POST['categoria']);
        $objproducto->set_proveedor($_POST['proveedor']);

        $resultado = $objproducto->registrar();

        if ($resultado == 1) {
            echo "<script>alert('Registrado con éxito')</script>";
        
        } else {
            echo "<scrip>alert('A ocurrido un error al momento de realizar el registro)</script>'";
        }
    }

    if(isset($_POST['modificar'])){
        
        $objproducto->set_id_producto($_POST['id_producto']);
        $objproducto->set_nombre($_POST['nombre']);
        $objproducto->set_descripcion($_POST['descripcion']);
        $objproducto->set_marca($_POST['marca']);
        $objproducto->set_stock($_POST['stock']);
        $objproducto->set_precio($_POST['precio']);
        $objproducto->set_categoria($_POST['categoria']);
        $objproducto->set_proveedor($_POST['proveedor']);

        $resultado = $objproducto->actualizar();
    }

    
?>