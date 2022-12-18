<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Aula02 - POO</title>
    </head>
    <body>
        <?php
            require_once 'Caneta.php';
            $c1 = new Caneta;
            $c1->cor = "Azul";
            $c1->ponta = 0.5;
            $c1->tampada = true;
            //false = vazio e 0, verdadeiro = 1, ou qualquer valor
            $c1->destampar();
            $c1->tampar();
            $c1->rabiscar();
            
            //var_dump($c1);
            //print_r($c1);
            
            echo "<br>";
            
//            $c2 = new Caneta;
//            $c2->cor = "Preta";
//            $c2->ponta = 1.0;
//            $c2->tampada = false;
//            $c2->carga = 50;
//            
            //print_r($c2);
            
            require_once './Caderno.php';
            
            $cad1 = new Caderno();
            $cad1->cor = "Preto";
            $cad1->nFolhas = 80;
            $cad1->tipoCapa = "Dura";
            $cad1->fechado = false;
            $cad1->abrir();
            $cad1->fechar();
            
            $cad1->serEscrito();
            
            
            
            
        ?>
    </body>
</html>
