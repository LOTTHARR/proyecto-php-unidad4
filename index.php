<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

date_default_timezone_set('America/Mexico_City');

$mensaje_estado = "";

// Si ya existe una sesión y el usuario decide reiniciarla en el index, se destruye para iniciar nuevamente
if (isset($_GET['accion']) && $_GET['accion'] === 'reiniciar') {
    session_unset();
    session_destroy();
    session_start();
    $_SESSION['hora_inicio'] = time();
    $_SESSION['visitas'] = 1;
    $mensaje_estado = "La sesión anterior fue destruida con session_destroy() y se ha iniciado una nueva sesión correctamente.";
} elseif (!isset($_SESSION['hora_inicio'])) {
    $_SESSION['hora_inicio'] = time();
    $_SESSION['visitas'] = 1;
    $mensaje_estado = "Se ha iniciado una nueva sesión por primera vez en el sistema.";
} else {
    $mensaje_estado = "Sesión activa en curso. Puedes navegar por los módulos o reiniciar la sesión abajo.";
}

require_once 'includes/header.php';
?>

<div class="card">
    <h2>Bienvenido al Sistema Demostrativo de PHP (Unidad 4)</h2>
    <div class="theory-box">
        <p><strong>Propósito del Index y control de Sesión:</strong> En esta página principal (<code>index.php</code>) se gestiona el arranque de la sesión del usuario utilizando <code>session_start()</code> y <code>time()</code>. Si existe una sesión activa y deseas comenzar desde cero, puedes destruirla con <code>session_destroy()</code> para inicializar un nuevo contador de tiempo.</p>
    </div>

    <div class="output-box">
        <p><strong>Estado actual de la sesión:</strong> <?php echo $mensaje_estado; ?></p>
        <p><strong>ID de Sesión PHP:</strong> <code><?php echo session_id(); ?></code></p>
        <p><strong>Fecha del servidor:</strong> <?php echo date('d/m/Y H:i:s'); ?></p>
        <a href="index.php?accion=reiniciar" class="btn">REINICIAR LA SESIÓN (session_destroy)</a>
    </div>
</div>

<div class="card">
    <h2>Estructura del Sitio Web</h2>
    <p>Utiliza el menú superior para explorar cada uno de los módulos requeridos con ejecución real en PHP:</p>
    <table>
        <thead>
            <tr>
                <th>Archivo PHP</th>
                <th>Módulo</th>
                <th>Descripción Técnica</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><code>index.php</code></td>
                <td>Inicio de Sesión</td>
                <td>Inicializa la sesión o destruye la existente para reiniciar el cronómetro de actividad.</td>
            </tr>
            <tr>
                <td><code>variables.php</code></td>
                <td>Variables y Tipos</td>
                <td>Declaración de tipos <code>string</code>, <code>int</code>, <code>float</code>, <code>boolean</code>, <code>array</code> y funciones <code>date()</code> y <code>count()</code>.</td>
            </tr>
            <tr>
                <td><code>condicionales.php</code></td>
                <td>Condicionales</td>
                <td>Evaluación dinámica de datos reales utilizando <code>if</code>, <code>elseif</code>, <code>else</code> y <code>switch</code>.</td>
            </tr>
            <tr>
                <td><code>bucles.php</code></td>
                <td>Bucles (Ciclos)</td>
                <td>Recorrido de datos y generación de listas y tablas dinámicas con <code>for</code>, <code>while</code> y <code>foreach</code>.</td>
            </tr>
            <tr>
                <td><code>arreglos.php</code></td>
                <td>Arreglos (Arrays)</td>
                <td>Uso de arreglos indexados, asociativos y multidimensionales recorridos con <code>foreach</code> y condicionales.</td>
            </tr>
            <tr>
                <td><code>sesiones.php</code></td>
                <td>Manejo de Sesiones</td>
                <td>Demostración detallada de persistencia temporal en memoria con <code>$_SESSION</code> y cálculo de tiempo activo.</td>
            </tr>
        </tbody>
    </table>
</div>

<?php require_once 'includes/footer.php'; ?>
