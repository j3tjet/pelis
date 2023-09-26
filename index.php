<?php
require_once('controller/MovieController.php');
require_once('controller/AboutController.php');

define('URL', 'http://localhost/pelisGpt/');
// Conexión a la base de datos (reemplaza con tus propios datos)
$db_host = 'localhost';
$db_name = 'peliculas';
$db_user = 'root';
$db_pass = '';

try {
    $db = new PDO("mysql:host=$db_host;dbname=$db_name;charset=utf8", $db_user, $db_pass);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo 'Error de conexión: ' . $e->getMessage();
    exit;
}

$action = isset($_GET['action']) ? $_GET['action'] : 'list';

$movieController = new MovieController($db);
$aboutController = new AboutController();

if ($action === 'list') {
    $movieController->listMovies();
} elseif ($action === 'view') {
    $id = isset($_GET['id']) ? $_GET['id'] : null;
    if ($id !== null) {
        $movieController->viewMovie($id);
    } else {
        // Manejar error aquí
    }
} elseif ($action === 'nosotros') {
    $aboutController->index();
} else {
    // Manejar error aquí
}
?>
