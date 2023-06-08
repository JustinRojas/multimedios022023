<?php

class Session{
    function __construct(){

    }
    function connectionSession(){
        if(!isset($_SESSION)){
            session_start();
        }

        
        // if(isset($_SESSION['id'])){
        //     $this->view->render('main/index');
        // }
        // else{
            

        //     echo "<script>
        //             alert('Redireccionando, no esta autenticado');
        //         </script>";

        //          $this->view->render('login/index'); 
        // }
    }

   
//{"id":"101","name":"s","email":"ss@hsb","password":"1c592e3481c4df3b64a4dd38fae38280"},{"id":"100","name":"Mar\u00eda Daniela ","email":"danibch1828@gmail.com","password":"1c592e3481c4df3b64a4dd38fae38280"},
}



?>