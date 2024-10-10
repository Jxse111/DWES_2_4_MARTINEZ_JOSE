<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ejercicio 2</title>
    </head>
    <body>
        <?php
        define("TAM", 8); //Nose como funciona lo del tamaño de la celda
        $array50 = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32,
            33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, 49, 50];
        ?>
        <h2>Versión A : Números colocados por filas de 5 * 5, las filas impares tendran el fondo  en naranja.</h2>
        <table border = "1"> <!-- Creamos la tabla -->
            <?php
            $contador = 0; //Generamos el contador para acceder a los números del array
            //Generamos las filas de la tabla
            for ($filas = 0; $filas < 5; $filas++) {
                ?>
                <!-- Etiqueta especial para que funcione la condición introducida y muestre de forma directa el contenido descrito(funciona como un echo)-->
                <tr <?= $filas % 2 == 1 ? "style = 'background-color : orange'" : " " ?>>
                    <!-- Generamos las columnas de la tabla -->
                    <?php for ($columnas = 0; $columnas < 5; $columnas++) { //Recorremos las columnas?>
                        <td WIDTH=<?php TAM ?>HEIGHT=<?php TAM ?>>
                            <?php echo $array50[$contador] ?></td><!-- Mostramos el numero asociado a cada celda -->
                        <?php $contador++; //Incrementamos el contador para pasar al siguiente numero del array?>
                    <?php } ?>
                </tr> 
            <?php } ?>
        </table>

        <h2>Versión B: Números colocados por columnas de 5 * 5, las filas impares tendran el fondo  en naranja.</h2>

        <table border ="1">
            <?php for ($filas = 0; $filas < 5; $filas++) { ?>
                <tr><!-- Abrimos la nueva fila-->
                    <?php for ($columnas = 0; $columnas < 5; $columnas++) { ?>
                        <!-- Etiqueta especial para que funcione la condición introducida y muestre de forma directa el contenido descrito(funciona como un echo) -->
                        <td <?= $columnas % 2 == 1 ? "style='background-color:orange;'" : "" ?> 
                            WIDTH=<?php TAM ?>HEIGHT=<?php TAM ?>>
                            <!-- Colocamos los numeros en las columnas -->
                            <?php echo $array50[$filas + $columnas * 5]; ?></td>
                    <?php } ?>
                </tr><!-- Cerramos la fila -->
            <?php } ?>
        </table><!-- Finalmente cerramos la tabla -->
    </body>
</html>
