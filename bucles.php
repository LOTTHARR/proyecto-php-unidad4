<?php
require_once 'includes/header.php';

// Arreglo de etapas del proyecto para recorrer con for
$etapas_desarrollo = [
    "Análisis de requerimientos técnicos de la Unidad 4",
    "Diseño modular de encabezados y estilos CSS",
    "Codificación de scripts PHP dinámicos",
    "Implementación de control de sesiones con time()",
    "Publicación en servidor web y repositorio GitHub"
];

// Arreglo de servidores para recorrer con while
$servidores_disponibles = [
    ["nombre" => "InfinityFree", "php" => "8.2", "ssl" => "Incluido"],
    ["nombre" => "AwardSpace", "php" => "8.1", "ssl" => "Incluido"],
    ["nombre" => "000webhost", "php" => "8.0", "ssl" => "Incluido"],
    ["nombre" => "Servidor Local Apache", "php" => "8.3", "ssl" => "Localhost"]
];

// Arreglo asociativo de módulos para recorrer con foreach
$horas_por_modulo = [
    "Variables y Tipos de Datos" => 3,
    "Condicionales (if/switch)" => 4,
    "Bucles (for/while/foreach)" => 4,
    "Arreglos Multidimensionales" => 5,
    "Manejo de Sesiones en Memoria" => 4
];
?>

<div class="card">
    <h2>Estructuras Repetitivas (Bucles) en PHP</h2>
    <div class="theory-box">
        <p><strong>¿Cómo se usan los ciclos para realizar repeticiones en PHP?</strong> Los bucles permiten iterar sobre estructuras de datos o repetir bloques de código de forma controlada. El ciclo <code>for</code> se emplea cuando se conoce el número exacto de iteraciones mediante un índice numérico; <code>while</code> repite la ejecución mientras una condición booleana sea verdadera; y <code>foreach</code> está optimizado para recorrer arreglos clave-valor de forma directa.</p>
    </div>

    <h3>1. Ciclo <code>for</code>: Lista Numerada de Etapas del Proyecto</h3>
    <div class="output-box">
        <ul class="custom-list">
            <?php for ($i = 0; $i < count($etapas_desarrollo); $i++): ?>
                <li><strong>Etapa <?php echo ($i + 1); ?>:</strong> <?php echo $etapas_desarrollo[$i]; ?></li>
            <?php endfor; ?>
        </ul>
    </div>

    <h3>2. Ciclo <code>while</code>: Tabla de Servidores de Publicación</h3>
    <div class="output-box">
        <table>
            <thead>
                <tr>
                    <th>#</th>
                    <th>Proveedor de Hosting</th>
                    <th>Versión PHP</th>
                    <th>Soporte SSL</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $contador = 0;
                $total_servidores = count($servidores_disponibles);
                while ($contador < $total_servidores):
                    $srv = $servidores_disponibles[$contador];
                ?>
                    <tr>
                        <td><?php echo $contador + 1; ?></td>
                        <td><?php echo $srv["nombre"]; ?></td>
                        <td>PHP <?php echo $srv["php"]; ?></td>
                        <td><?php echo $srv["ssl"]; ?></td>
                    </tr>
                <?php
                    $contador++;
                endwhile;
                ?>
            </tbody>
        </table>
    </div>

    <h3>3. Ciclo <code>foreach</code>: Desglose de Horas Prácticas por Tema</h3>
    <div class="output-box">
        <table>
            <thead>
                <tr>
                    <th>Tema de la Unidad 4</th>
                    <th>Horas Prácticas</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $suma_horas = 0;
                foreach ($horas_por_modulo as $tema => $horas):
                    $suma_horas += $horas;
                ?>
                    <tr>
                        <td><?php echo $tema; ?></td>
                        <td><?php echo $horas; ?> hrs</td>
                    </tr>
                <?php endforeach; ?>
                <tr>
                    <th>Total Acumulado</th>
                    <th><?php echo $suma_horas; ?> hrs</th>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<?php require_once 'includes/footer.php'; ?>
