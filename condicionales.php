<?php
require_once 'includes/header.php';

// Datos reales en arreglo y variables para evaluar con condicionales
$estudiante = [
    "nombre" => "Carlos Eduardo González Pérez",
    "materia" => "Programación Web",
    "calificacion" => 92,
    "entregas_completas" => true
];

// Evaluación con if, elseif y else
if ($estudiante["calificacion"] >= 90 && $estudiante["entregas_completas"]) {
    $nivel_desempeno = "Excelente (Exento)";
    $clase_badge = "badge-success";
} elseif ($estudiante["calificacion"] >= 70) {
    $nivel_desempeno = "Aprobado Regular";
    $clase_badge = "badge-warning";
} else {
    $nivel_desempeno = "No Acreditado (Requiere Nivelación)";
    $clase_badge = "badge-danger";
}

// Evaluación con switch basada en el día actual del servidor
$dia_numero = (int)date("N"); // 1 (Lunes) a 7 (Domingo)
switch ($dia_numero) {
    case 1:
        $nombre_dia = "Lunes";
        $actividad_programada = "Revisión de arquitectura del servidor y variables PHP.";
        break;
    case 2:
        $nombre_dia = "Martes";
        $actividad_programada = "Práctica de laboratorio: Estructuras condicionales y bucles.";
        break;
    case 3:
        $nombre_dia = "Miércoles";
        $actividad_programada = "Implementación de arreglos multidimensionales.";
        break;
    case 4:
        $nombre_dia = "Jueves";
        $actividad_programada = "Configuración de sesiones PHP y pruebas de tiempo activo.";
        break;
    case 5:
        $nombre_dia = "Viernes";
        $actividad_programada = "Despliegue en hosting público y subida a GitHub.";
        break;
    default:
        $nombre_dia = "Fin de Semana (Sábado / Domingo)";
        $actividad_programada = "Documentación de evidencias técnicas y respaldo del proyecto.";
        break;
}
?>

<div class="card">
    <h2>Estructuras de Control Condicionales en PHP</h2>
    <div class="theory-box">
        <p><strong>¿Cómo se usan para tomar decisiones en PHP?</strong> Las estructuras condicionales permiten evaluar expresiones booleanas en tiempo de ejecución para bifurcar el flujo del programa. Mientras que <code>if</code>, <code>elseif</code> y <code>else</code> evalúan rangos y condiciones compuestas, la estructura <code>switch</code> compara una variable frente a múltiples casos específicos (<code>case</code>).</p>
    </div>

    <h3>1. Evaluación Dinámica con <code>if</code>, <code>elseif</code> y <code>else</code></h3>
    <div class="output-box">
        <p><strong>Alumno evaluado:</strong> <?php echo $estudiante["nombre"]; ?></p>
        <p><strong>Asignatura:</strong> <?php echo $estudiante["materia"]; ?></p>
        <p><strong>Calificación registrada en el arreglo:</strong> <?php echo $estudiante["calificacion"]; ?> / 100</p>
        <p><strong>Dictamen del sistema:</strong> <span class="badge <?php echo $clase_badge; ?>"><?php echo $nivel_desempeno; ?></span></p>
    </div>

    <h3>2. Selección Múltiple con <code>switch</code> (según día real del servidor)</h3>
    <div class="output-box">
        <p><strong>Número de día detectado con <code>date("N")</code>:</strong> Día #<?php echo $dia_numero; ?> (<?php echo $nombre_dia; ?>)</p>
        <p><strong>Actividad asignada por el bloque <code>switch</code>:</strong> <?php echo $actividad_programada; ?></p>
    </div>
</div>

<?php require_once 'includes/footer.php'; ?>
