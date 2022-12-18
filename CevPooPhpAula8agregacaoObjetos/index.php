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
        require_once("Luta.php");

        $l = array();

        $l[0] = new Lutador("Joao", "Brasil", 23, 1.63, 68.9, 0, 0, 0);
        // $l[0]->ganharLuta();
        // $l[0]->empatarLuta();

        // $l[0]->apresentar();
        // $l[0]->status();

        $l[1] = new Lutador("Pedro", "Croacia", 33, 1.77, 57.8, 3, 2, 1);
        // $l[1]->apresentar();
        // $l[1]->status();

        $l[2] = new Lutador("Hamilton", "suecia", 29, 1.88, 80.9, 10, 5, 5);
        // $l[2]->apresentar();
        // $l[2]->status();
        
        $l[3] = new Lutador("goeh", "indonesia", 27, 1.69, 81.6, 3, 3, 3);


        $uec01 = new Luta();
        // $uec01->marcarLuta($l[0], $l[1]);
        // $uec01->lutar();
        // $l[0]->status();
        // $l[1]->status();

        // MESMO LUTADOR
        // $uec01->marcarLuta($l[1], $l[1]);
        // $uec01->lutar();
        // $l[1]->status();
        // $l[1]->status();

        //Pesos mt diferentes/ Diferentes categorias
        // $uec01->marcarLuta($l[1], $l[3]);
        // $uec01->lutar();
        // $l[1]->status();
        // $l[3]->status();


        $uec01->marcarLuta($l[2], $l[3]);
        $uec01->lutar();
        $l[2]->status();
        $l[3]->status();
        ?>
        </pre>
    </body>
</html>
