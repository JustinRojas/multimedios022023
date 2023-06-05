<?php


include_once 'class/user.php';


class LoginModel extends Model
{
    public function __construct()
    {

        parent::__construct();
    }

    public function autenticar($datos)
    {
        $item = new User();
       
        $queryString = "SELECT `id`, `name`, `email`, `password` 
            FROM `user` 
            WHERE `email` = :email AND `password` = :password; ";

        $query = $this->db->connect()->prepare($queryString);


        //ACÁ SE EJECUTA EL STRING
        $query->execute($datos);

        try {

            // SE REALIZA LA CONEXIÓN A LA BD CON EL MÉTODO DE LA CLASE DATABASE


            while ($row = $query->fetch()) {

                $item->id = $row["id"];
                $item->name = $row["name"];
                $item->email = $row["email"];
                $item->password = $row["password"];
            }

            return $item;


        } catch (PDOException $th) {
            return [];
        }


    }



}
?>