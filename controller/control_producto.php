<?php 
    include_once "../modelo/producto.php";
    include_once "../modelo/marca_categoria_tproveedor.php";
    include_once "../modelo/proveedor.php";
    
    $objproducto = new clas_producto();
    $objmarca_catergoria_tproveedor = new class_marca_categoria_tproveedor();
    $objProveedor = new clas_proveedor();


   
    if(isset($_POST['guardar'])){
       
        $objproducto->set_id_producto($_POST['id_producto']);
        $objproducto->set_nombre($_POST['nombre']);
        $objproducto->set_descripcion($_POST['descripcion']);
        $objproducto->set_id_marca($_POST['id_marca']);
        $objproducto->set_stock($_POST['stock']);
        $objproducto->set_precio($_POST['precio']);
        $objproducto->set_id_categoria($_POST['id_categoria']);
        $objproducto->set_id_proveedor($_POST['id_proveedor']);

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
        $objproducto->set_id_marca($_POST['id_marca']);
        $objproducto->set_stock($_POST['stock']);
        $objproducto->set_precio($_POST['precio']);
        $objproducto->set_id_categoria($_POST['id_categoria']);
        $objproducto->set_id_proveedor($_POST['id_proveedor']);

        $resultado = $objproducto->actualizar();
    }

    $objproducto->eliminar();
?>