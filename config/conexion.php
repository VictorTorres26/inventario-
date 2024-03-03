<?php
require_once "../modelo/producto.php";
class clasconexion{
    private $conex;

    function __construct(){
        $host = "localhost";
        $user = "root";
        $pass = "";
        $bd = "inventario";


        try{
            $this->conex = new PDO("mysql:host=$host; dbname=$bd",$user,$pass);
            $this->conex->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch(PDOException $e){
            echo $e->getMessage();
        }
    }
    
    protected function conectar(){
        return $this->conex;
    }

    protected function desconectar(){
         $this->conex = null;
         return $this->conex;
    }

    
 


}