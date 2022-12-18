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
        require_once('Pessoa.php');
        require_once('Livro.php');
        //$p = array();

        $p[0] = new Pessoa("Pedro", "22", "M");
        $p[1] = new Pessoa("Maria", "31", "F");

        $l[0] = new Livro("Php basico", "José da silva", 300, $p[0]);
        $l[1] = new Livro("POO com php", "Maria de souza", "500", $p[0]);
        $l[2] = new Livro("POO com Java ", "Cleber machado", "800", $p[1]);


        //print_r($l[0]);
        // $l[0]->abrir();
        // $l[0]->folhear(80);
        // $l[0]->avancarPag();
        // $l[0]->voltarPag();
        // $l[0]->detalhes();

        $l[0]->abrir();
        $l[0]->folhear(500);
        $l[0]->voltarPag(); // n deixa voltar..
        $l[0]->detalhes();

        //$l[1]->abrir();
        $l[1]->detalhes();
        $l[2]->detalhes();
        ?>
        </pre>
    </body>
</html>
