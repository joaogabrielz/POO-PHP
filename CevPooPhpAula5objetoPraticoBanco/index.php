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
            
            require_once 'ContaBanco.php';
            
            $cnt1 = new ContaBanco(122, "Joao");
            $cnt2 = new ContaBanco(122, "Maria");
            
            $cnt1->abrirConta('cc');
            $cnt1->setNumConta(221);
            $cnt1->setDono("Jao2");
            
            $cnt2->abrirConta('cp');
            $cnt2->setNumConta(333);
            $cnt2->setDono("Creuza");
            
            $cnt1->depositar(300);
            $cnt2->depositar(500);
            
            $cnt2->sacar(100);
           
            $cnt1->pagarMensal();
            $cnt2->pagarMensal();
            
            $cnt1->sacar(338);
            $cnt2->sacar(530);
            
            $cnt1->fecharConta();
            $cnt2->fecharConta();
            
            print_r($cnt1);
            print_r($cnt2);
        ?>
        </pre>
    </body>
</html>
