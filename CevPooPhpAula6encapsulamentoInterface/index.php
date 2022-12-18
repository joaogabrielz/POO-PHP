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

        require_once("ControleRemoto.php");

        $c = new ControleRemoto();
        // $c->ligar();
        $c->abrirMenu();
        
        $c->maisVolume();
        $c->abrirMenu();

        $c->ligar();
        $c->maisVolume();
        $c->maisVolume();
        $c->maisVolume();
        $c->maisVolume();
        $c->abrirMenu();
        ?>
        </pre>
    </body>
</html>
