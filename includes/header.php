<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

date_default_timezone_set('America/Mexico_City');

// Si se solicita reiniciar la sesión por parámetro GET o estamos entrando de nuevo al index con acción reset
if (isset($_GET['reiniciar']) && $_GET['reiniciar'] === '1') {
    session_unset();
    session_destroy();
    session_start();
    $_SESSION['hora_inicio'] = time();
    $_SESSION['visitas'] = 1;
}

// Inicializar la hora de inicio de sesión si no existe
if (!isset($_SESSION['hora_inicio'])) {
    $_SESSION['hora_inicio'] = time();
    $_SESSION['visitas'] = 1;
} else {
    $_SESSION['visitas'] = isset($_SESSION['visitas']) ? $_SESSION['visitas'] + 1 : 1;
}

$hora_inicio_ts = $_SESSION['hora_inicio'];
$hora_actual_ts = time();
$segundos_totales = $hora_actual_ts - $hora_inicio_ts;

$minutos_activos = floor($segundos_totales / 60);
$segundos_activos = $segundos_totales % 60;

$hora_inicio_formateada = date('H:i:s', $hora_inicio_ts);
$hora_actual_formateada = date('H:i:s', $hora_actual_ts);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mini Proyecto PHP - Unidad 4</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
<header>
    <div class="header-top">
        <div class="header-title">
            <h1>Desarrollo Web del Lado del Servidor con PHP</h1>
            <p>Unidad 4: Variables, Estructuras de Control, Arreglos y Sesiones</p>
        </div>
        <div class="session-widget">
            <p><strong>Hora inicio sesión:</strong> <?php echo $hora_inicio_formateada; ?></p>
            <p><strong>Hora actual:</strong> <?php echo $hora_actual_formateada; ?></p>
            <p><strong>Tiempo activo:</strong> <?php echo $minutos_activos . " minutos " . $segundos_activos . " segundos"; ?></p>
        </div>
    </div>
</header>
<?php require_once 'includes/menu.php'; ?>
<main>
