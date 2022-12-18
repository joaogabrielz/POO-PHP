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
                
                require_once 'Caneta.php';

               // $c1 = new Caneta();
//                $c1->setModelo("Bicer");
//                $c1->setPonta(0.5);
//                
//                $c1->modelo = "BIC";
                //$c1->ponta = 0.4; // privado nao pode mudar diretamente!
                
                //print_r($c1);
                
                 $c1 = new Caneta("Bic", 0.6, "Verde");
                 $c2 = new Caneta("Nik", 1.2, "Azul");
               // print "Eu tenho caneta {$c1->getModelo()} de ponta {$c1->getPonta()}";
                 print_r($c1);
                print_r($c2);
            ?>
        </pre>
    </body>
</html>
