<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ejercicio 1</title>
    </head>
    <body>
        <h2>Versión A : Números pares colocados por filas de 5 * 5</h2>
        <?php
        $array50 = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32,
            33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, 49, 50]; //Creamos un array que se compone de los primeros 50 números.
        $array50Par = []; //Creamos un array que nos servira mas tarde para almacenar los numeros pares dentro de los primeros 50 números.

        foreach ($array50 as $numero) { //Recorremos los 50 numeros  con el iterador $numeros
            if ($numero % 2 == 0) {
                $array50Par[] = $numero; //Si los numeros son pares deben almacenarse en un array aparte.
            }
        }
        ?>
        <table border = "1"> <!-- Creamos la tabla -->
            <?php
            $contador = 0; //Generamos el contador para acceder a los números del array
            //Generamos las filas de la tabla
            for ($filas = 0; $filas < 5; $filas++) {
                ?>
                <tr>
                    <!-- Generamos las columnas de la tabla -->
                    <?php for ($columnas = 0; $columnas < 5; $columnas++) { //Recorremos las columnas?>
                        <td><?php echo $array50Par[$contador] ?></td><!-- Mostramos el numero asociado a cada celda -->
                        <?php $contador++; //Incrementamos el contador para pasar al siguiente numero del array?>
                    <?php } ?>
                </tr> 
            <?php } ?>
        </table>

        <h2>Versión B: Números pares colocados por columnas de 5 * 5</h2>

        <table border ="1">
            <?php for ($filas = 0; $filas < 5; $filas++) { ?>
                <tr><!-- Abrimos la nueva fila-->
                    <?php for ($columnas = 0; $columnas < 5; $columnas++) { ?>
                        <!-- Colocamos los numeros en las columnas -->
                        <td><?php echo $array50Par[$filas + $columnas * 5]; ?></td>
                    <?php } ?>
                </tr><!-- Cerramos la fila -->
            <?php } ?>
        </table><!-- Finalmente cerramos la tabla -->
    </body>
</html>
