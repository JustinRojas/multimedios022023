<?php


    class Login extends  Controller{

        function __construct(){
            parent:: __construct();
            $this->view->mensajeResultado = "";   
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


                $mensajeResultado = '
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    Datos incorrectos
                </div>';

                $this->view->mensajeResultado = $mensajeResultado;   

              
                $this->view->render('login/index');
               
            }
            
            
        }

        function cerrarSesion(){
            session_start();
           if(session_destroy()){
            $this->view->render('main/index');
           }else{
            $this->view->render('main/index');
           }
            
    
    }

}

    
?>






