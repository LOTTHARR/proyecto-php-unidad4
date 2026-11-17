<?php
require_once 'includes/header.php';
?>

<div class="card">
    <h2>Manejo de Sesiones y Persistencia en Memoria con PHP</h2>
    <div class="theory-box">
        <p><strong>¿Para qué sirve la persistencia de datos en memoria con sesiones?</strong> El protocolo HTTP es sin estado (stateless), lo que significa que cada petición a una página web es independiente. Las sesiones en PHP (iniciadas con <code>session_start()</code> y almacenadas en el arreglo superglobal <code>$_SESSION</code>) permiten conservar datos temporales en la memoria del servidor entre distintas páginas sin necesidad de utilizar una base de datos ni formularios.</p>
    </div>

    <h3>Panel Detallado de la Sesión Actual</h3>
    <div class="output-box">
        <p><strong>Hora inicio sesión:</strong> <?php echo $hora_inicio_formateada; ?> (Timestamp Unix: <code><?php echo $hora_inicio_ts; ?></code>)</p>
        <p><strong>Hora actual:</strong> <?php echo $hora_actual_formateada; ?> (Timestamp Unix: <code><?php echo $hora_actual_ts; ?></code>)</p>
        <p><strong>Tiempo activo:</strong> <?php echo $minutos_activos . " minutos " . $segundos_activos . " segundos"; ?> (Total: <?php echo $segundos_totales; ?> segundos)</p>
        <p><strong>Páginas cargadas durante esta sesión:</strong> <?php echo $_SESSION['visitas']; ?> vistas</p>
        <p><strong>Identificador de sesión (<code>session_id()</code>):</strong> <code><?php echo session_id(); ?></code></p>

        <div style="margin-top: 1rem;">
            <a href="sesiones.php" class="btn btn-primary">Actualizar Hora Actual</a>
            <a href="sesiones.php?reiniciar=1" class="btn">Reiniciar Sesión Aquí (session_destroy)</a>
            <a href="index.php?accion=reiniciar" class="btn">Reiniciar desde el Index</a>
        </div>
    </div>

    <h3>Contenido Actual del Arreglo Superglobal <code>$_SESSION</code></h3>
    <div class="output-box">
        <pre><?php print_r($_SESSION); ?></pre>
    </div>
</div>

<?php require_once 'includes/footer.php'; ?>
