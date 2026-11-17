<?php
require_once 'includes/header.php';

// 1. Arreglo Indexado
$lenguajes_backend = ["PHP", "Python", "Java", "C#", "Node.js"];

// 2. Arreglo Asociativo
$configuracion_servidor = [
    "Entorno" => "Producción Web",
    "Motor_PHP" => phpversion(),
    "Zona_Horaria" => date_default_timezone_get(),
    "Persistencia" => "Sesiones en Memoria RAM (\$_SESSION)",
    "Base_de_Datos" => "No requerida en este proyecto"
];

// 3. Arreglo Multidimensional
$catalogo_modulos = [
    [
        "codigo" => "MOD-01",
        "archivo" => "variables.php",
        "complejidad" => "Básica",
        "puntaje" => 95
    ],
    [
        "codigo" => "MOD-02",
        "archivo" => "condicionales.php",
        "complejidad" => "Intermedia",
        "puntaje" => 90
    ],
    [
        "codigo" => "MOD-03",
        "archivo" => "bucles.php",
        "complejidad" => "Intermedia",
        "puntaje" => 88
    ],
    [
        "codigo" => "MOD-04",
        "archivo" => "arreglos.php",
        "complejidad" => "Avanzada",
        "puntaje" => 98
    ],
    [
        "codigo" => "MOD-05",
        "archivo" => "sesiones.php",
        "complejidad" => "Avanzada",
        "puntaje" => 100
    ]
];
?>

<div class="card">
    <h2>Manipulación de Arreglos en PHP</h2>
    <div class="theory-box">
        <p><strong>¿Cómo se usan los arreglos para manipular datos en PHP?</strong> Un arreglo (<code>array</code>) en PHP es un mapa ordenado que asocia valores con claves. Permite agrupar colecciones de datos bajo una sola variable: los <strong>indexados</strong> usan índices numéricos automáticos (desde 0), los <strong>asociativos</strong> utilizan claves personalizadas de tipo cadena, y los <strong>multidimensionales</strong> almacenan arreglos dentro de otros arreglos para modelar tablas o registros complejos.</p>
    </div>

    <h3>1. Arreglo Indexado (Recorrido con <code>foreach</code> y condicional)</h3>
    <div class="output-box">
        <ul class="custom-list">
            <?php foreach ($lenguajes_backend as $indice => $lenguaje): ?>
                <li>
                    Índice <code>[<?php echo $indice; ?>]</code>: <strong><?php echo $lenguaje; ?></strong>
                    <?php if ($lenguaje === "PHP"): ?>
                        <span class="badge badge-success">Lenguaje principal de esta unidad</span>
                    <?php endif; ?>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>

    <h3>2. Arreglo Asociativo (Par Clave => Valor)</h3>
    <div class="output-box">
        <table>
            <thead>
                <tr>
                    <th>Clave Asociativa</th>
                    <th>Valor Configurado</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($configuracion_servidor as $clave => $valor): ?>
                    <tr>
                        <td><code><?php echo $clave; ?></code></td>
                        <td><?php echo $valor; ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <h3>3. Arreglo Multidimensional (Recorrido con <code>foreach</code> y Condicionales Internos)</h3>
    <div class="output-box">
        <table>
            <thead>
                <tr>
                    <th>Código</th>
                    <th>Archivo</th>
                    <th>Complejidad</th>
                    <th>Puntaje</th>
                    <th>Evaluación Condicional</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($catalogo_modulos as $modulo): ?>
                    <tr>
                        <td><?php echo $modulo["codigo"]; ?></td>
                        <td><code><?php echo $modulo["archivo"]; ?></code></td>
                        <td><?php echo $modulo["complejidad"]; ?></td>
                        <td><?php echo $modulo["puntaje"]; ?> pts</td>
                        <td>
                            <?php if ($modulo["puntaje"] >= 95): ?>
                                <span class="badge badge-success">Sobresaliente</span>
                            <?php elseif ($modulo["puntaje"] >= 90): ?>
                                <span class="badge badge-warning">Destacado</span>
                            <?php else: ?>
                                <span class="badge badge-danger">Cumple estándar</span>
                            <?php endif; ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>

<?php require_once 'includes/footer.php'; ?>
