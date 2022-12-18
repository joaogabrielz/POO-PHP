<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <pre>
        <?php
        ini_set('display_errors', '1');

        require_once("Lutador.php");
        $l = array();
        $l[0] = new Lutador("Joao", "Brasil", 23, 1.63, 77.0, 1, 0, 0);
        $l[0]->ganharLuta();
        $l[0]->empatarLuta();

        $l[0]->apresentar();
        $l[0]->status();

        $l[1] = new Lutador("Pedro", "Croacia", 33, 1.77, 89.0, 5, 2, 1);
        $l[1]->apresentar();
        $l[1]->status();

        $l[2] = new Lutador("Hamilton", "suecia", 29, 1.88, 100.0, 10, 6, 5);
        $l[2]->apresentar();
        $l[2]->status();
        ?>
        </pre>
    </body>
</html>
