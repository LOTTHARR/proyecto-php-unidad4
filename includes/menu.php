<?php
$pagina_actual = basename($_SERVER['PHP_SELF']);
?>
<nav>
    <ul class="nav-container">
        <li><a href="index.php" class="<?php echo ($pagina_actual == 'index.php') ? 'active' : ''; ?>">Inicio (Index)</a></li>
        <li><a href="variables.php" class="<?php echo ($pagina_actual == 'variables.php') ? 'active' : ''; ?>">Variables</a></li>
        <li><a href="condicionales.php" class="<?php echo ($pagina_actual == 'condicionales.php') ? 'active' : ''; ?>">Condicionales</a></li>
        <li><a href="bucles.php" class="<?php echo ($pagina_actual == 'bucles.php') ? 'active' : ''; ?>">Bucles</a></li>
        <li><a href="arreglos.php" class="<?php echo ($pagina_actual == 'arreglos.php') ? 'active' : ''; ?>">Arreglos</a></li>
        <li><a href="sesiones.php" class="<?php echo ($pagina_actual == 'sesiones.php') ? 'active' : ''; ?>">Sesiones</a></li>
    </ul>
</nav>
