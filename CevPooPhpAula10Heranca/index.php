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
        require_once("Pessoa.php");
        require_once("Funcionario.php");
        require_once("Professor.php");
        require_once("Aluno.php");

        $p1 = new Pessoa();
        $p2 = new Aluno();
        $p3 = new Professor();
        $p4 = new Funcionario();

        $p1->setNome("Pedro");
        $p2->setNome("Maria");
        $p3->setNome("Claudio");
        $p4->setNome("Fabiana");

        print_r($p1);
        print_r($p2);
        print_r($p3);
        print_r($p4);

        
        $p1->setSexo("M");
        $p4->setSexo("F");

        $p2->setCurso("Informatica");
        $p3->setSalario(2500.75);
        $p4->setSetor("Estoque");


        echo "<br><br>";
        echo "<br> --------------------------<br>";
        print_r($p1);
        print_r($p2);
        print_r($p3);
        print_r($p4);

        // Não funcionam
        // $p1->receberAumento(550.20);
        // $p2->mudarTrabalho();
        // $p4->cancelarMatricula();

        // Resolvendo usando cada um com seus metodos permitidos
        $p3->receberAumento(550.20);
        $p4->mudarTrabalho();
        $p2->cancelarMatricula();

        ?>
        </pre>
    </body>
</html>
