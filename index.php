<?php
require_once "config/Database.php";
require_once "models/Estudiante.php";
require_once "models/Materia.php";
require_once "models/Docente.php";
require_once "models/Horario.php";
require_once "controllers/EstudianteController.php";
require_once "controllers/MateriaController.php";
require_once "controllers/DocenteController.php";
require_once "controllers/HorarioController.php";

try { $db=(new Database())->getConnection(); }
catch(Throwable $e){
    if($_SERVER['REQUEST_METHOD']==='POST'){ header('Content-Type: application/json; charset=utf-8'); echo json_encode(['success'=>false,'message'=>'No se pudo conectar con la base de datos.']); exit; }
    die('No se pudo conectar con la base de datos.');
}

if($_SERVER['REQUEST_METHOD']==='POST'){
    header('Content-Type: application/json; charset=utf-8');
    try{
        $a=$_POST['action']??''; $id=(int)($_POST['id']??0);
        switch($a){
            case 'listar': case 'listar_estudiantes': $r=(new EstudianteController(new Estudiante($db)))->listar(); break;
            case 'obtener': case 'obtener_estudiante': $r=(new EstudianteController(new Estudiante($db)))->obtener($id); break;
            case 'guardar': case 'guardar_estudiante': $r=(new EstudianteController(new Estudiante($db)))->guardar($_POST); break;
            case 'actualizar': case 'actualizar_estudiante': $r=(new EstudianteController(new Estudiante($db)))->actualizar($_POST); break;
            case 'eliminar': case 'eliminar_estudiante': $r=(new EstudianteController(new Estudiante($db)))->eliminar($id); break;

            case 'listar_materias': $r=(new MateriaController(new Materia($db)))->listar(); break;
            case 'obtener_materias': case 'obtener_materia': $r=(new MateriaController(new Materia($db)))->obtener($id); break;
            case 'guardar_materias': case 'guardar_materia': $r=(new MateriaController(new Materia($db)))->guardar($_POST); break;
            case 'actualizar_materias': case 'actualizar_materia': $r=(new MateriaController(new Materia($db)))->actualizar($_POST); break;
            case 'eliminar_materias': case 'eliminar_materia': $r=(new MateriaController(new Materia($db)))->eliminar($id); break;

            case 'listar_docentes': $r=(new DocenteController(new Docente($db)))->listar(); break;
            case 'obtener_docentes': case 'obtener_docente': $r=(new DocenteController(new Docente($db)))->obtener($id); break;
            case 'guardar_docentes': case 'guardar_docente': $r=(new DocenteController(new Docente($db)))->guardar($_POST); break;
            case 'actualizar_docentes': case 'actualizar_docente': $r=(new DocenteController(new Docente($db)))->actualizar($_POST); break;
            case 'eliminar_docentes': case 'eliminar_docente': $r=(new DocenteController(new Docente($db)))->eliminar($id); break;

            case 'listar_horarios': $r=(new HorarioController(new Horario($db)))->listar(); break;
            case 'obtener_horario': $r=(new HorarioController(new Horario($db)))->obtener($id); break;
            case 'guardar_horario': $r=(new HorarioController(new Horario($db)))->guardar($_POST); break;
            case 'actualizar_horario': $r=(new HorarioController(new Horario($db)))->actualizar($_POST); break;
            case 'eliminar_horario': $r=(new HorarioController(new Horario($db)))->eliminar($id); break;
            default: $r=['success'=>false,'message'=>'Acción no válida: '.$a];
        }
        echo json_encode($r,JSON_UNESCAPED_UNICODE);
    }catch(Throwable $e){ echo json_encode(['success'=>false,'message'=>'Error del servidor: '.$e->getMessage()],JSON_UNESCAPED_UNICODE); }
    exit;
}

$m=$_GET['modulo']??'inicio';
$views=['inicio'=>'views/inicio/index.php','estudiantes'=>'views/estudiantes/index.php','materias'=>'views/materias/index.php','docentes'=>'views/docentes/index.php','horarios'=>'views/horarios/index.php'];
require $views[$m]??$views['inicio'];
