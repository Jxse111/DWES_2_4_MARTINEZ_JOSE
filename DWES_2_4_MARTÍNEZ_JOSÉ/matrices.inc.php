<?php
/* Creamos la funcion muestra matriz que recorrera la matriz por sus filas y columnas y devolvera en formato de tabla */

function muestra_matriz($matriz1) {
    ?>
    <table border = "1"> <!-- Creamos la tabla -->
        <?php
        for ($filas = 0; $filas < count($matriz1); $filas++) {
            ?>
            <tr>
                <?php for ($columnas = 0; $columnas < count($matriz1[$filas]); $columnas++) {
                    ?>
                <td><?php echo $matriz1[$filas][$columnas] ?></td><!-- Mostramos el numero asociado a cada celda -->
                <?php } ?>
            </tr> 
        <?php } ?>
    </table>
    <?php
}

/* Creamos la funcion que sumará dos matrices si tienen el mismo tamaño sino devolvera false */

function suma_matriz($matriz1, $matriz2) {
    $tamanioMatriz1 = count($matriz1);
    $tamanioMatriz2 = count($matriz2);
    if ($tamanioMatriz1 == $tamanioMatriz2) {
        for ($filas = 0; $filas < count($matriz1); $filas++) {
            for ($columnas = 0; $columnas < count($matriz1[$filas]); $columnas++) {
                $resultado[$filas][$columnas] = $matriz1[$filas][$columnas] + $matriz2[$filas][$columnas];
            }
        }
    } else {
        $resultado = false;
    }
    return $resultado;
}
