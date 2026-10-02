<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Inicio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">
    <main><?php require "views/layouts/header.php"; ?></main>
    <div class="container py-5">
        <div class="text-center mb-5">
            <h1>Sistema Escolar MVC</h1>
            <p class="text-muted">Administración de estudiantes, materias, docentes y horarios.</p>
        </div>
        <div class="row g-4">
            <div class="col-md-3">
                <div class="card shadow-sm p-4 text-center">
                    <h5> Estudiantes</h5><a class="btn btn-primary" href="index.php?modulo=estudiantes">Entrar</a>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card shadow-sm p-4 text-center">
                    <h5>Materias</h5><a class="btn btn-primary" href="index.php?modulo=materias">Entrar</a>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card shadow-sm p-4 text-center">
                    <h5>Docentes</h5><a class="btn btn-primary" href="index.php?modulo=docentes">Entrar</a>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card shadow-sm p-4 text-center">
                    <h5>Horarios</h5><a class="btn btn-primary" href="index.php?modulo=horarios">Entrar</a>
                </div>
            </div>
        </div>
    </div>
</body>

</html>