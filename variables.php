<?php
require_once 'includes/header.php';

// Declaración de variables con los 5 tipos de datos obligatorios
$nombre_proyecto = "Sistema Web Dinámico en PHP"; // string
$numero_unidad = 4;                                // int
$promedio_aprobatorio = 9.45;                      // float
$sistema_en_linea = true;                          // boolean
$herramientas = ["PHP 8", "HTML5", "CSS3", "Git", "Apache"]; // array

// Uso de funciones obligatorias date() y count()
$fecha_actual = date("d-m-Y H:i:s");
$total_herramientas = count($herramientas);
?>

<div class="card">
    <h2>Variables y Tipos de Datos en PHP</h2>
    <div class="theory-box">
        <p><strong>¿Cómo se crean y funcionan las variables en PHP?</strong> En PHP, todas las variables comienzan con el signo <code>$</code> seguido del nombre del identificador. PHP es un lenguaje de tipado dinámico (débilmente tipado), lo que significa que no es necesario declarar explícitamente el tipo de dato antes de asignarle un valor; el intérprete determina el tipo en tiempo de ejecución según el valor almacenado.</p>
    </div>

    <h3>1. Demostración de Tipos de Datos e Impresión con <code>echo</code></h3>
    <div class="output-box">
        <table>
            <thead>
                <tr>
                    <th>Variable</th>
                    <th>Tipo de Dato (<code>gettype()</code>)</th>
                    <th>Valor Mostrado con <code>echo</code></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><code>$nombre_proyecto</code></td>
                    <td><?php echo gettype($nombre_proyecto); ?> (string)</td>
                    <td><?php echo $nombre_proyecto; ?></td>
                </tr>
                <tr>
                    <td><code>$numero_unidad</code></td>
                    <td><?php echo gettype($numero_unidad); ?> (int)</td>
                    <td><?php echo $numero_unidad; ?></td>
                </tr>
                <tr>
                    <td><code>$promedio_aprobatorio</code></td>
                    <td><?php echo gettype($promedio_aprobatorio); ?> (float)</td>
                    <td><?php echo $promedio_aprobatorio; ?></td>
                </tr>
                <tr>
                    <td><code>$sistema_en_linea</code></td>
                    <td><?php echo gettype($sistema_en_linea); ?> (boolean)</td>
                    <td><?php echo $sistema_en_linea ? 'true (Activo)' : 'false (Inactivo)'; ?></td>
                </tr>
                <tr>
                    <td><code>$herramientas</code></td>
                    <td><?php echo gettype($herramientas); ?> (array)</td>
                    <td><?php echo implode(", ", $herramientas); ?></td>
                </tr>
            </tbody>
        </table>
    </div>

    <h3>2. Uso de Funciones Nativas Obligatorias: <code>date()</code> y <code>count()</code></h3>
    <div class="output-box">
        <p><strong>Fecha y hora generada con <code>date("d-m-Y H:i:s")</code>:</strong> <?php echo $fecha_actual; ?></p>
        <p><strong>Conteo de elementos del arreglo <code>$herramientas</code> con <code>count()</code>:</strong> El arreglo contiene exactamente <strong><?php echo $total_herramientas; ?></strong> elementos.</p>
    </div>
</div>

<?php require_once 'includes/footer.php'; ?>
