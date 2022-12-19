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

        require_once("Video.php");
        //require_once("Pessoa.php");

        //$p = new Pessoa(); // Classes asbtratas nao podem ser implementadas

        $v[0] = new Video("Aula 1 POO");
        $v[1] = new Video("Aula 15 PHP");
        $v[2] = new Video("Aula 15 JAVA");

        //print_r($v);
      
        require_once("Gafanhoto.php");
        $g[0] = new Gafanhoto("Joao", 22, "M", "Jaum12");
        $g[1] = new Gafanhoto("Mariana", 33, "F", "Mari");

        //print_r($g);

        require_once("Vizualizacao.php");
        // Agregação entre Vizualização <- Gafanhoto e Vizualização <- Video
        // Ligação onde esta 'AGREGANDO' um 'Gafanhoto' a um 'Video' por meio da 'Vizualizacao'

        $vizu[0] = new Vizualizacao($g[0], $v[1]); // Joao assiste Aula 15 Php
        $vizu[1] = new Vizualizacao($g[0], $v[2]); // Joao assiste Aula 15 Java

        $vizu[0]->avaliar();
        $vizu[1]->avaliarPorc(85);
        print_r($vizu);
        ?>
        </pre>
    </body>
</html>
