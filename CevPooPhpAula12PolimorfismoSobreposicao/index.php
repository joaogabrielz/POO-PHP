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

        require_once("Ave.php");
        require_once("Peixe.php");
        require_once("Mamifero.php");
        require_once("Reptil.php");

        // SUPERCLASSE DOS TIPOS DE ANIMAIS, E ANCESTRAIS DOS ANIMAIS ESPECIFICOS
        // require_once("Animal.php");   
        // $a1 = new Animal(); // Classes abstratas nao podem ser instanciadas

        $m1 = new Mamifero();
        $r1 = new Reptil();
        $p1 = new Peixe();
        $a1 = new Ave();


        // POLIMORFISMO DE SOBREPOSICAO:
        // Mesmo Nome Metodo, Assinaturas Iguais(Mesma Quantidade e Tipo de parametro(s)) em
        // Classes Diferentes

        // SUBCLASSES DE ANIMAL

        $m1->setPeso(85.3);
        $m1->setIdade(2);
        $m1->setMembros(4);
        echo "<br>";
        $m1->locomover(); //Correndo
        echo "<br>";
        $m1->alimentar(); //mamando
        echo "<br>";
        $m1->emitirSom(); // som mamifero
        echo "<br>";
        print_r($m1);

        echo "<br><br> ---------------- <br><br>";

        $p1->setPeso(0.35);
        $p1->setIdade(1);
        $p1->setMembros(0);
        echo "<br>";
        $p1->locomover();
        echo "<br>"; 
        $p1->alimentar();
        echo "<br>"; 
        $p1->emitirSom(); 
        echo "<br>";
        print_r($p1);

        echo "<br><br> ---------------- <br><br>";

        $a1->setPeso(0.89);
        $a1->setIdade(2);
        $a1->setMembros(2);
        echo "<br>";
        $a1->locomover();
        echo "<br>";
        $a1->alimentar();
        echo "<br>"; 
        $a1->emitirSom();
        echo "<br>"; 
        print_r($a1);

        echo "<br><br> ---------------- <br><br>";

        $r1->setPeso(5.3);
        $r1->setIdade(3);
        $r1->setMembros(0);
        echo "<br>";
        $r1->locomover();
        echo "<br>"; 
        $r1->alimentar(); 
        echo "<br>";
        $r1->emitirSom(); 
        echo "<br>";
        print_r($r1);

        echo "<br><br><br> ----XXXXXXXXXXXXXXXXXXX---- <br> <br><br>";

        $m2 = new Mamifero();
        $m2->setPeso(5.7);
        $m2->setIdade(8);
        $m2->setMembros(4);
        echo "<br>";
        $m1->locomover(); //Correndo
        echo "<br>";
        $m1->alimentar(); //mamando
        echo "<br>";
        $m1->emitirSom(); // som mamifero
        echo "<br>";
        print_r($m2);

        echo "<br><br> ---------------- <br><br>";

        require_once("Canguru.php");
        $can = new Canguru(); // É mamifero

        $can->setPeso(55.30);
        $can->setIdade(3);
        $can->setMembros(4);
        echo "<br>";
        $can->locomover(); // Saltando..
        echo "<br>";
        $can->alimentar(); 
        echo "<br>";
        $can->emitirSom(); 
        echo "<br>";
        print_r($can);
        

        // SUBCLASSES DAS SUBCLASSES
        echo "<br><br> ---------------- <br><br>";

        require_once("Cachorro.php");
        $dog = new Cachorro(); // É mamifero

        $dog->setPeso(55.30);
        $dog->setIdade(3);
        $dog->setMembros(4);
        echo "<br>";
        $dog->locomover(); // Correr
        echo "<br>";
        $dog->alimentar(); 
        echo "<br>";
        $dog->emitirSom(); 
        echo "<br>";
        $dog->abanarRabo(); 
        echo "<br>";
        print_r($dog);


        ?>
        </pre>
    </body>
</html>
