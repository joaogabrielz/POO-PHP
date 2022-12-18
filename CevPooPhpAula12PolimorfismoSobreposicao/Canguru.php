<?php

require_once("Mamifero.php");

class Canguru extends Mamifero {

  public function usarBolsa(){
    echo 'Usando bolsa..';
  }

   // @Override
   public function locomover()
   {
     echo "locomovendo: Saltando...";
   }
}