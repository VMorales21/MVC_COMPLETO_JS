<?php
// Ruta base del proyecto. Funciona aunque la carpeta cambie de nombre.
$baseUrl = rtrim(str_replace('\\', '/', dirname($_SERVER['SCRIPT_NAME'])), '/');
if ($baseUrl === '.' || $baseUrl === '/') {
    $baseUrl = '';
}
?>
<header class="p-3 bg-dark text-white">
  <div class="container">
     <div class="text-center mb-2">
            <h2>Sistema Escolar MVC</h2>
            <p class="text-muted">Administración de estudiantes, materias, docentes y horarios.</p>
        </div>
    <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">

      <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
        <li>
          <a href="<?= $baseUrl ?>/index.php" class="nav-link px-2 text-white">Inicio</a>
        </li>
        <li>
          <a href="<?= $baseUrl ?>/index.php?modulo=estudiantes" class="nav-link px-2 text-white">Estudiantes</a>
        </li>
        <li>
          <a href="<?= $baseUrl ?>/index.php?modulo=materias" class="nav-link px-2 text-white">Materias</a>
        </li>
        <li>
          <a href="<?= $baseUrl ?>/index.php?modulo=docentes" class="nav-link px-2 text-white">Docentes</a>
        </li>
        <li>
          <a href="<?= $baseUrl ?>/index.php?modulo=horarios" class="nav-link px-2 text-white">Horarios</a>
        </li>
      </ul>

      

      <div class="text-end">
        <a href="<?= $baseUrl ?>/index.php" class="btn btn-warning">Salir</a>
      </div>

    </div>
  </div>
</header>
