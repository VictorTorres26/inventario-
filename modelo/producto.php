<?php
require_once "../config/conexion.php";
require_once "../modelo/marca_categoria_tproveedor.php";


class clas_producto extends clasconexion{
    private $id_producto;
    private $nombre;
    private $descripcion;
    private $id_marca;
    private $stock;
    private $precio;
    private $id_categoria;
    private $id_proveedor;
    
    public $obj;

    public function set_id_producto($id_producto){$this->id_producto = $id_producto;}
    public function get_id_producto(){return $this->id_producto;}

    public function set_nombre($nombre){$this->nombre = $nombre;}
    public function get_nombre(){return $this->nombre;}

    public function set_descripcion($descripcion){$this->descripcion = $descripcion;}
    public function get_descripcion(){return $this->descripcion;}

    public function set_id_marca($id_marca){$this->id_marca = $id_marca;}
    public function get_id_marca(){return $this->id_marca;}

    public function set_stock($stock){$this->stock = $stock;}
    public function get_stock(){return $this->stock;}

    public function set_precio($precio){$this->precio = $precio;}
    public function get_precio(){return $this->precio;}

    public function set_id_categoria($id_categoria){$this->id_categoria = $id_categoria;}
    public function get_id_categoria(){return $this->id_categoria;}

    public function set_id_proveedor($id_proveedor){$this->id_proveedor = $id_proveedor;}
    public function get_id_proveedor(){return $this->id_proveedor;}

   
        public function __construct(){
            try{
               $this->obj = new clasconexion();
               $this->obj = $this->obj->conectar();
            } catch(Exception $e){
            die($e->getMessage());
            }

        }

        public function registrar(){
            try{
                $sql = "INSERT INTO producto (id_producto,nombre,descripcion,id_marca,stock,precio,id_categoria,id_proveedor) VALUES (:id_producto,:nombre,:descripcion,:id_marca,:stock,:precio,:id_categoria,:id_proveedor)";
                $query = $this->obj->prepare($sql);
                $query->bindParam(':id_producto',$this->id_producto);
                $query->bindParam(':nombre',$this->nombre);
                $query->bindParam(':descripcion',$this->descripcion); 
                $query->bindParam(':id_marca',$this->id_marca);
                $query->bindParam(':stock',$this->stock);
                $query->bindParam(':precio',$this->precio);
                $query->bindParam(':id_categoria',$this->id_categoria);
                $query->bindParam(':id_proveedor',$this->id_proveedor);
                $resultado = $query->execute();
                return $resultado;
            } catch (PDOException $e){
                echo $e->getMessage();
            }
        }


        public function actualizar(){
            try{
                $sql = "UPDATE producto set nombre =:nombre ,descripcion = :descripcion ,id_marca = :id_marca ,stock = :stock,precio = :precio, id_categoria = :id_categoria, id_proveedor = :id_proveedor WHERE id_producto = :id_producto";
                $query = $this->obj->prepare($sql);
                $query->bindParam(':nombre',$this->nombre);
                $query->bindParam(':descripcion',$this->descripcion); 
                $query->bindParam(':marca',$this->id_marca);
                $query->bindParam(':stock',$this->stock);
                $query->bindParam(':precio',$this->precio);
                $query->bindParam(':categoria',$this->id_categoria);
                $query->bindParam(':provedor',$this->id_proveedor);
                $query->bindParam(':id_producto',$this->id_producto);
                $resultado = $query->execute();

                return $resultado;
            } catch(PDOException $e){
                echo $e->getMessage();
            }
        }


        public function eliminar(){
            try{
                $sql = "DELETE * FROM inventario WHERE id_producto = :id_producto";
                $query = $this->obj->prepare($sql);
                $query->bindParam(':id_producto',$this->id_producto);
                $resultado = $query->execute();

                return $resultado;
            }catch(PDOException $e){
                echo $e->getMessage();
            }
        }

        public function mostrar(){
            try{
                $sql = "SELECT * FROM producto";
                $query = $this->obj->prepare($sql);
                $query->execute();
                    
                return  $query->fetchAll(PDO::FETCH_ASSOC);
            }catch(PDOException $e){
                echo $e->getMessage();
            }
        
        }
        public function inventario(){
            try{
                $sql = "SELECT id_producto, nombre, descripcion, marca.nombre_marca, stock, precio,
                        categoria.nombre_categoria, proveedor.nombre_proveedor FROM producto
                        INNER JOIN marca ON producto.id_marca = marca.id_marca
                        INNER JOIN proveedor ON producto.id_proveedor = proveedor.id_proveedor
                        INNER JOIN categoria ON producto.id_categoria = categoria.id_categoria;";
                $query = $this->obj->prepare($sql);
                $query->execute();
                    
                return  $query->fetchAll(PDO::FETCH_ASSOC);
            }catch(PDOException $e){
                echo $e->getMessage();
            }
        
        }

        

        public function contar_productos(){
            try{
                $sql = "SELECT COUNT(id_producto) as total FROM producto";
                $query = $this->obj->prepare($sql);
                $query->execute();
                $resultado = $query->fetchColumn();
        
                echo $resultado; 
            } catch(PDOException $e){
                echo $e->getMessage();
                return 0; // Devuelve un valor predeterminado en caso de error
            }
        }

}






?>