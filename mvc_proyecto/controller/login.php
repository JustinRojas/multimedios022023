<?php


    class Login extends  Controller{

        function __construct(){
            parent:: __construct();
        }

        function render(){
            $this->view->render('login/index');
        }


        function autenticar(){
            $arreglo = 
            [
                'email' => $_POST['email'],
                'password' => $_POST['password']
            ];

            $user= $this->model->autenticar($arreglo);
            
            var_dump($user);
            
        }
    }

    
?>






