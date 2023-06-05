<?php

include_once 'class/user.php';


class UsuariosModel extends Model{

    public function __construct(){
        parent::__construct();
    }

    public function getUsuarios(){        
        $items = [];

        try {
            //code...
            $stringSQL = "SELECT * FROM `user` order by id DESC;";
            $query = $this->db->connect()->query($stringSQL);

            while ( $row = $query->fetch()){//obtiene todas las filas
                $item = new User();

                foreach ($row as $key => $value) {
                    # code...
                    $item->$key = $value;
                }
                array_push($items, $item);
            }
            return $items;
        } catch (PDOException $th) {
            //throw $th;
            return [];
        }
    }

    public function insertarUsuarios($datos){

        try {
            //code...
            $datos['id'] = "0";
            $stringSQL = 'INSERT INTO user(id, name, email, password) VALUES ( :id, :name, :email, :password);';

            $query = $this->db->connect()->prepare($stringSQL);

            $query->execute($datos);
            return true;

        } catch (PDOException $th) {
            return false;
        }
    }

    public function verUsuario($id){
        
        try {
            $item = new User();
            //code...
            $stringSQL = "Select * FROM `user` where id=:id;";

            $query = $this->db->connect()->prepare($stringSQL);
            
            $query->execute(['id'=>$id]);

            while ( $row = $query->fetch()){//obtiene la fila
                foreach ($row as $key => $value) {
                    # code...
                    $item->$key = $value;
                   // $_SESSION['autenticado'] = true;
                }
            }
            return $item;
        } catch (PDOException $th) {
            //throw $th;
            return [];
        }           
    }
//       //actualizarUsuario
      public function actualizarUsuario($datos){
//            var_dump($datos);
        try {
            //code... 
            $stringSQL = 'UPDATE user SET name=:name,email=:email,password=:password WHERE id=:id ;';
            $query = $this->db->connect()->prepare($stringSQL);
            $query->execute($datos);
            return true;

        } catch (PDOException $th) {
            //throw $th;
            var_dump($th);
            return false;
        }
    }   

//     //eliminarUsuario
    public function eliminarUsuario($id){        
        try {            
            //code...
            $stringSQL = "DELETE FROM `user` WHERE id =:id;";
            $query = $this->db->connect()->prepare($stringSQL);
            $query->execute(['id'=>$id]);
            
            return true;
        } catch (PDOException $th) {
            //throw $th;
            var_dump($th);
            return false;
        }           
    }
}

?>