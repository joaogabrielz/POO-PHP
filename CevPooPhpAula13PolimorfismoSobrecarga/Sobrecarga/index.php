<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<pre>
    <?php
    ini_set('display_errors', '1');



    // PHP nao tem suporte a Polimorfismo de Sobrecarga de metodos!
    // POLIMORFISMO DE SOBRECARGA:
    // Mesmo Nome Metodo, Assinaturas Diferentes(Diferente Quantidade e Tipo de parametro(s)) na
    // Mesma Classe


  // require_once("Animal.php");
  //$a = new Animal(); // Classe abstrata nao pode se instanciada

    require_once("Mamifero.php");
    require_once("Cachorro.php");
    require_once("Lobo.php");

    // $c = new Mamifero();
    // $c->emitirSom();

    // echo "<br><br> ---------------- <br><br>";

    // $l = new Lobo();
    // $l->emitirSom();

    // echo "<br><br> ---------------- <br><br>";

    $c = new Cachorro();
    //$c->emitirSom();
    $c->reagirFrase("oi");
    $c->reagirFrase("vai apanhar");

    $c->reagirHora(11, 45);
    $c->reagirHora(21, 00);

    $c->reagirDono(true);
    $c->reagirDono(false);

    $c->reagirIdadePeso(2, 12.5);
    $c->reagirIdadePeso(17, 4.5);
    ?>
</pre>
</body>
</html>