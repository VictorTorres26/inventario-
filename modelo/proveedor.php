<?php
    require_once '../config/conexion.php';

    class clas_proveedor extends clasconexion{

        private $id_proveedor;
        private $nombre_proveedor;
        private $direccion_proveedor;
        private $telefono_proveedor;
        private $email_proveedor;
        private $tipo_proveedor;
        private $nombre_tipo_proveedor;

        private $obj;


        public function set_id_proveedor($id_proveedor){$this->id_proveedor = $id_proveedor;}
        public function get_id_proveedor(){return $this->id_proveedor;}

        public function set_nombre_proveedor($nombre_proveedor){$this->nombre_proveedor = $nombre_proveedor;}
        public function get_nombre_proveedor(){return $this->nombre_proveedor;}

        public function set_direccion_proveedor($direccion_proveedor){$this->direccion_proveedor = $direccion_proveedor;}
        public function get_direccion_proveedor(){return $this->direccion_proveedor;}

        public function set_telefono_proveedor($telefono_proveedor){$this->telefono_proveedor;}
        public function get_telefono_proveedor(){return $this->telefono_proveedor;}

        public function set_email_proveedor($email_proveedor){$this->email_proveedor = $email_proveedor;}
        public function get_email_proveedor(){return $this->email_proveedor;}

        public function set_tipo_proveedor($tipo_proveedor){$this->tipo_proveedor = $tipo_proveedor;}
        public function get_tipo_proveedor(){return $this->tipo_proveedor;}
        
        public function set_nombre_tipo_proveedor($tipo_proveedor){$this->tipo_proveedor = $tipo_proveedor;}
        public function get_nombre_tipo_proveedor(){return $this->tipo_proveedor;}
        
        public function __construct(){
            try{
                $this->obj = new clasconexion();
                $this->obj = $this->obj->conectar();

            }catch(Exception $e){
                die($e->getMessage());
            }

        }

        public function buscarproveedor(){
            try{
                $sql = 'SELECT * FROM proveedor';
                $query = $this->obj->prepare($sql);
                $query->execute();
                    
                return  $query->fetchAll(PDO::FETCH_ASSOC);
            }catch(PDOException $e){
                echo $e->getMessage();
            }
    }
}
?>