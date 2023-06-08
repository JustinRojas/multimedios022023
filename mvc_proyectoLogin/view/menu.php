<?php
$link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$ses = session_status();

?>

<nav class="navbar navbar-expand-sm navbar-light bg-info">
  <div class="container">
    <a class="navbar-brand" href="<?php echo constant('URL'); ?>main">JB Page</a>
    <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavId"
      aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavId">
      <ul class="navbar-nav me-auto mt-2 mt-lg-0">

        <li class="nav-item">
          <a class="nav-link" href="<?php echo constant('URL'); ?>main">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="listaCursos.html" aria-current="page"> Blog</a>
        </li>

        <li class="nav-item dropdown" <?php echo $ses==2? "" :"hidden";?> >
          <a class="nav-link dropdown-toggle" 
          data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true"
            aria-expanded="false">Usuarios</a>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="<?php echo constant('URL'); ?>usuarios">Consulta</a>
            <a class="dropdown-item" href="<?php echo constant('URL'); ?>usuarios/crear">Crear</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#tab4Id">Action</a>
          </div>
        </li>

      </ul>

      <div class="m-2">
        <a type="button" <?php echo $ses==1 || $ses==0? "" :"hidden ";?> <?php echo $link=='http://localhost/multimedios022023/mvc_proyectoLogin/login'? "hidden" :"";?>
        href="<?php echo constant('URL'); ?>login" class="btn btn-primary btn-sm">Login</a>
      </div> 

      <div class="m-2">
        <button type="button" <?php echo $ses==1 || $ses==0? "" :"hidden";?> class="btn btn-secondary btn-sm">Registrarse</button>
      </div>

      <div class="m-2">
        <form action="<?php echo constant('URL'); ?>login/cerrarSesion" method="post">
        <button type="submit" <?php echo $ses==2? "" :"hidden";?> onClick="" class="btn btn-secondary btn-sm">Salir</button>
        </form>
      </div>

    </div>

  </div>


</nav>