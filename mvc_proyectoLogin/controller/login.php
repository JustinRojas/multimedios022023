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
            if(isset($user->id)){
                    session_start();
                    $_SESSION['id'] = $user->id;
                    $_SESSION['name'] = $user->name;

                    $this->view->render('main/index');
            }else{
               
                $this->view->render('login/index'); 
            }
            
            
        }
    }

    
?>






