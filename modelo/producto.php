<?php
require_once "../config/conexion.php";
class clas_producto extends clasconexion{
    private $id_producto;
    private $nombre;
    private $descripcion;
    private $marca;
    private $stock;
    private $precio;
    private $categoria;
    private $proveedor;
    
    public $obj;

    public function set_id_producto($id_producto){$this->id_producto = $id_producto;}
    public function get_id_producto(){return $this->id_producto;}

    public function set_nombre($nombre){$this->nombre = $nombre;}
    public function get_nombre(){return $this->nombre;}

    public function set_descripcion($descripcion){$this->descripcion = $descripcion;}
    public function get_descripcion(){return $this->descripcion;}

    public function set_marca($marca){$this->marca = $marca;}
    public function get_marcar(){return $this->marca;}

    public function set_stock($stock){$this->stock = $stock;}
    public function get_stock(){return $this->stock;}

    public function set_precio($precio){$this->precio = $precio;}
    public function get_precio(){return $this->precio;}

    public function set_categoria($categoria){$this->categoria = $categoria;}
    public function get_categoria(){return $this->categoria;}

    public function set_proveedor($proveedor){$this->proveedor = $proveedor;}
    public function get_proveedor(){return $this->proveedor;}

   
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
                $sql = "INSERT INTO producto (id_producto,nombre,descripcion,marca,stock,precio,categoria,proveedor) VALUES (:id_producto,:nombre,:descripcion,:marca,:stock,:precio,:categoria,:proveedor)";
                $query = $this->obj->prepare($sql);
                $query->bindParam(':id_producto',$this->id_producto);
                $query->bindParam(':nombre',$this->nombre);
                $query->bindParam(':descripcion',$this->descripcion); 
                $query->bindParam(':marca',$this->marca);
                $query->bindParam(':stock',$this->stock);
                $query->bindParam(':precio',$this->precio);
                $query->bindParam(':categoria',$this->categoria);
                $query->bindParam(':proveedor',$this->proveedor);
                $resultado = $query->execute();
                return $resultado;
            } catch (PDOException $e){
                echo $e->getMessage();
            }
        }


        public function actualizar(){
            try{
                $sql = "UPDATE producto set nombre =:nombre ,descripcion = :descripcion ,marca = :marca ,stock = :stock,precio = :precio, categoria = :categoria, proveedor = :proveedor WHERE id_producto = :id_producto";
                $query = $this->obj->prepare($sql);
                $query->bindParam(':nombre',$this->nombre);
                $query->bindParam(':descripcion',$this->descripcion); 
                $query->bindParam(':marca',$this->marca);
                $query->bindParam(':stock',$this->stock);
                $query->bindParam(':precio',$this->precio);
                $query->bindParam(':categoria',$this->categoria);
                $query->bindParam(':provedor',$this->proveedor);
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