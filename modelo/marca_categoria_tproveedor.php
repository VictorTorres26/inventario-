<?php
require_once "../config/conexion.php";

class class_marca_categoria_tproveedor extends clasconexion{
    private $id_marca;
    private $nombre_marca;
    private $id_categoria;
    private $nombre_categoria;

    private $id_tipo_proveedor;
    private $nombre_tipo_proveedor;

    public $obj;

    public function set_id_marca($id_marca){$this->id_marca = $id_marca;}
    public function get_id_marca(){return $this->id_marca;}

    public function set_nombre_marca($nombre_marca){$this->nombre_marca = $nombre_marca;}
    public function get_nombre_marca(){return $this->nombre_marca;}

    public function set_id_categoria($id_categoria){$this->id_categoria = $id_categoria;}
    public function get_id_categoria(){return $this->id_categoria;}

    public function set_nombre_categoria($nombre_categoria){$this->nombre_categoria = $nombre_categoria;}
    public function get_nombre_categoria(){return $this->nombre_categoria;}

    public function set_id_tipo_proveedor($id_tipo_proveedor){$this->id_tipo_proveedor = $id_tipo_proveedor;}
    public function get_id_tipo_proveedor(){return $this->id_tipo_proveedor;}

    public function set_nombre_tipo_proveedor($nombre_tipo_proveedor){$this->nombre_tipo_proveedor = $nombre_tipo_proveedor;}
    public function get_nombre_tipo_proveedor(){return $this->nombre_tipo_proveedor;}


    public function __construct(){
        try{
           $this->obj = new clasconexion();
           $this->obj = $this->obj->conectar();
        } catch(Exception $e){
        die($e->getMessage());
        }

    }

    public function buscarMarca(){
        try{
            $sql = 'SELECT * FROM marca';
            $query = $this->obj->prepare($sql);
            $query->execute();

            return  $query->fetchAll(PDO::FETCH_ASSOC);
        }catch(PDOException $e){
            echo $e->getMessage();
        }
    }

    public function buscarCategoria(){
        try{
            $sql = 'SELECT * FROM categoria';
            $query = $this->obj->prepare($sql);
            $query->execute();

            return  $query->fetchAll(PDO::FETCH_ASSOC);
        }catch(PDOException $e){
            echo $e->getMessage();
        }
    }
    // public function buscarTipo_proveedor(){
    //     try{
    //         $sql = 'SELECT * FROM tipo_proveedor';
    //         $query = $this->obj->prepare($sql);
    //         $query->execute();

    //         return  $query->fetchAll(PDO::FETCH_ASSOC);
    //     }catch(PDOException $e){
    //         echo $e->getMessage();
    //     }
    // }
}
?>