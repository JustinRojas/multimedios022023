<?php
class Usuarios extends Controller{
    function __construct(){
        parent::__construct();
        parent::connectionSession();

        $this->view->datos = [];
        $this->view->mensaje = "Seccion Usuarios";
        $this->view->mensajeResultado = "";        
    }
    function render(){
        $datos = $this->model->getUsuarios();               
        $this->view->datos = $datos;
        $this->view->render('usuarios/index');
    }

    function crear(){   //para ver la vista                   
        $this->view->datos = [];
        $this->view->mensaje = "Crear Usuarios";
        $this->view->render('usuarios/crear');
    }

    function insertarUsuarios(){
        //var_dump($_POST);
        if ($this->model->insertarUsuarios($_POST)){
            $mensajeResultado = '
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    Nuevo Registro
                </div>';
        }else{
            $mensajeResultado = '
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    No se Registro
                </div>';
        }
        $this->view->mensajeResultado = $mensajeResultado;        
        $this->render();
    }

    // function detalle(){                      
    //     $this->view->datos = [];
    //     $this->view->mensaje = "Detalles del Cursos";
    //     $this->view->render('usuarios/detalle');
    // }

    function verUsuario( $param = null ){        
        $id = $param[0];

        $datos = $this->model->verUsuario($id);        
        $this->view->datos = $datos;
        $this->view->mensaje = "Detalle usuario";
        $this->view->render('usuarios/detalle');
    }



    // //actualizarUsuario
    function actualizarUsuario(){
        //var_dump($_POST);
        if ($this->model->actualizarUsuario($_POST)){

            $datos = new User();

            foreach ($_POST as $key => $value) {
                # code...
                $datos->$key= $value;
            }

            $mensajeResultado = '
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    Actualizacion de Registro
                </div>';
        }else{
            $mensajeResultado = '
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    No se actualizo el Registro
                </div>';
        }
        $this->view->datos = $datos;
        $this->view->mensaje = "Detalle usuario";
        $this->view->mensajeResultado = $mensajeResultado;        
        $this->view->render('usuarios/detalle');
    }    

    //eliminarcurso
    function eliminarUsuario( $param = null ){   
        $id = $param[0];
        if ($this->model->eliminarUsuario($id)){
            $mensajeResultado = '
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    Se elimino el Registro
                </div>';
        }else{
            $mensajeResultado = '
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    No se elimino el Registro
                </div>';
        }
        $this->view->mensajeResultado = $mensajeResultado;        
        $this->render();
    }
}

?>