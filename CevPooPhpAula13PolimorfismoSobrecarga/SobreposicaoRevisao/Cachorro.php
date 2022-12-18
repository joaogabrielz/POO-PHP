<?php

require_once("Lobo.php");

class Cachorro extends Lobo {

  //Override
  public function emitirSom()
  {
    echo "<p>emitindo som: Au au au!</p>"; 
  }
}