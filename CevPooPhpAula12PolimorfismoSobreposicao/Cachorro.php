<?php

require_once("Mamifero.php");

class Cachorro extends Mamifero {



  // @Override
  public function emitirSom()
  {
    echo "Latindo: Au au au ...";
  }
  

  public function enterrarOsso(){
    echo 'Enterrando osso..';
  }

  public function abanarRabo(){
    echo 'abanando Rabo..';
  }
}