
function crearMenu(){
headerplace.innerHTML += `<nav class="navbar navbar-expand-sm navbar-light bg-light">
<div class="container">
  <a class="navbar-brand" href="index.html">Lista de Elementos</a>
  <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse"
    data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false"
    aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavId">
    <ul class="navbar-nav me-auto mt-2 mt-lg-0">
      <li class="nav-item">
        <a class="nav-link active" href="listaCursos.html" aria-current="page">Cursos <span
            class="visually-hidden">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="listaEstudiantes.html">Estudiantes</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="listaProfesores.html">Profesores</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="listaUsuarios.html">Usuarios</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="listaGrupos.html">Grupos</a>
      </li>
    </ul>
  </div>
</div>
</nav>`;
};

function crearFooter(){
   var footerPages = document.getElementById('footerPages');
    footerPages.innerHTML += `
    <div class="container">
    <p class="float-end mb-1">
      <a >Proyecto de Javascript</a>
    </p>
    <p class="mb-1">Jeaustin Rojas &copy; Bootstrap</p>
  </div>`
};

crearFooter();
crearMenu();