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
        <?php
            require_once './Caneta.php';         
            $c1 = new Caneta();
            
            $c1->modelo = "Bic cristal";
            $c1->cor = "Azul marinho";
            //$c1->ponta = 0.5; // privado nao pode da erro, ou fica em branco
            //$c1->carga = "50"; // protected tbm nao pode da erro, ou fica em branco
            
            $c1->tampar();
            
            $c1->destampar();
            $c1->rabiscar();
            
            //var_dump($c1);
            print_r($c1);
        ?>
    </body>
</html>
