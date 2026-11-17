# Mini Proyecto 1 - Unidad 4: Desarrollo Web con PHP
**Variables, Estructuras de Control, Arreglos y Sesiones**

## Información General
- **Asignatura:** Programación Web
- **Unidad:** Unidad 4 – Programación del lado del servidor con PHP
- **Integrantes del Equipo:**
  - Carlos Eduardo González Pérez
  - Gabriel Alejandro Cruz Guillén
  - Andrea Guadalupe Armengol Aguilar
  - Jorge Enrique Gutiérrez Avendaño

## Descripción del Proyecto
Sitio web dinámico desarrollado en PHP que demuestra la implementación práctica y ejecución real en servidor de variables, tipos de datos, estructuras condicionales (`if`, `elseif`, `else`, `switch`), ciclos repetitivos (`for`, `while`, `foreach`), arreglos (indexados, asociativos y multidimensionales) y persistencia temporal en memoria mediante sesiones nativas de PHP (`$_SESSION`, `session_start()`, `session_destroy()`), calculando en tiempo real el tiempo activo del usuario en todas las vistas del sistema.

## Temas PHP Implementados
1. **Variables y Tipos de Datos (`variables.php`):** Uso de `string`, `int`, `float`, `boolean` y `array`, impresión con `echo` y funciones nativas como `date()` y `count()`.
2. **Estructuras Condicionales (`condicionales.php`):** Toma de decisiones dinámicas mediante `if`, `elseif`, `else` y `switch` evaluando variables y arreglos reales.
3. **Estructuras Repetitivas / Bucles (`bucles.php`):** Generación dinámica de listas y tablas HTML mediante `for`, `while` y `foreach`.
4. **Arreglos (`arreglos.php`):** Manipulación de arreglos indexados, asociativos y multidimensionales recorridos con `foreach` e integrando lógica condicional interna.
5. **Manejo de Sesiones (`sesiones.php` e `index.php`):** Control de inicio de sesión con `session_start()`, marca de tiempo con `time()`, cálculo en vivo de minutos y segundos activos en cada página y reinicio completo mediante `session_destroy()`.
6. **Modularización (`includes/`):** Reutilización de código mediante `require_once` para encabezado (`header.php`), navegación común (`menu.php`) y pie de página (`footer.php`).
