<?php

require_once "Animal.php";

class Mamifero extends Animal {

  protected $corPelo;

  public function emitirSom()
  {
    echo "<p>emitindo som: Som de Mamifero</p>"; 
  }
}