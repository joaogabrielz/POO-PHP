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
        require_once("Visitante.php");
        require_once("Bolsista.php");
        require_once("Professor.php");
        require_once("Tecnico.php");
        require_once("Aluno.php");

        //$p1 = new Pessoa(); // Classes abstratas não podem ser instanciadas(não pode virar Objeto)


        $v1 = new Visitante(); // Hernaça pobre(Herança de Implementação) herda tudo da progenitora
       // Hernaça pobre(Herança de Implementação)

        $v1->setNome("Juvenil");
        $v1->setIdade(34);
        $v1->setSexo("M");
        $v1->fazerAniver();
        print_r($v1);

        echo "<br>";
        echo "<br> ------------ <br>";
        echo "<br>";

        $a1 = new Aluno(); // Herança para Diferença
        // Herança para Diferença

        $a1->setNome("Pedro");
        $a1->setMatricula(1211);
        $a1->setIdade(16);
        $a1->setSexo("M");
        $a1->setCurso("Informatica");
        print_r($a1);
        $a1->pagarMensalidade();
        

        echo "<br>";
        echo "<br> ------------ <br>";
        echo "<br>";

        $p1 = new Professor(); // Herança para Diferença
        // Herança para Diferença

        $p1->setNome("zezinho");
        $p1->setIdade(39);
        $p1->setSexo("M");
        $p1->setSalario(1500.00);
        $p1->setEspecialidade("Matematica");
        $p1->receberAumento(1000);
        $p1->fazerAniver();
        print_r($p1);
        

        echo "<br>";
        echo "<br> ------------ <br>";
        echo "<br>";


        $b1 = new Bolsista(); // Especialização de Aluno
         // Herança para Diferença

         $b1->setNome("Jubileus");
         $b1->setMatricula(3322);
         $b1->setIdade(17);
         $b1->setSexo("M");
         $b1->setCurso("Administração");
         $b1->setBolsa(12.5);
         print_r($b1);
         $b1->pagarMensalidade();

         echo "<br>";
         echo "<br> ------------ <br>";
         echo "<br>";

         $t1 = new Tecnico(); // Especialização de Aluno
         // Herança para Diferença

         $t1->setNome("Tecnilda");
         $t1->setMatricula(1666);
         $t1->setIdade(19);
         $t1->setSexo("F");
         $t1->setCurso("Segurança do Trabalho");
         $t1->setRegistroProfissional(666);
         $t1->fazerAniver();
         print_r($t1);
         $t1->pagarMensalidade();
         echo "<br>";
         $t1->praticar();
        ?>
        </pre>
    </body>
</html>
