<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ejercicio 3</title>
    </head>
    <body>
        <?php
        include_once './matrices.inc.php';
        //Definimos las matrices
        $matriz1 = [
            [5, 10, 15],
            [20, 25, 30],
            [35, 40, 45]
        ];

        $matriz2 = [
            [0, 10, 20],
            [30, 40, 50],
            [60, 70, 80]
        ];
        ?>

        <!-- Uso de las funciones creadas --> 
        <h3>Matriz 1: </h3>
        <?php
        muestra_matriz($matriz1);
        ?>
        <h3>Matriz 2: </h3>
        <?php
        muestra_matriz($matriz2);
        ?>
        <h3>Realizamos la suma de las matrices: </h3>
        <?php
        $resultado = suma_matriz($matriz1, $matriz2);

        if ($resultado !== false) {
            muestra_matriz($resultado, "Resultado de la suma");
        } else {
            echo "Las matrices no tienen el mismo tamaño con lo cual no se puede realizar la suma.";
        }
        ?>
    </body>
</html>
