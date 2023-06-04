<?php

class Main extends Controller
{
    function __construct(){
        parent::__construct();
       // parent::connectionSession();
        // como controller hereda de Session, y main hereda de controller, por eso tiene el método connectionSession()
    }

    function render(){
        $this->view->render('main/index');
    }
}


?>