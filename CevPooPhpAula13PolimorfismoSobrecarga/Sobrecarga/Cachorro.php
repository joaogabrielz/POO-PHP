<?php

require_once("Lobo.php");

class Cachorro extends Lobo {

  // Php nao suporte polimorfismo de sobrecarga:
  // PHP nao suporta Sobrecarga de Metodos!!

  // Para contornar isso criamos nomes diferentes..., 
  // isso nao é sobrecarga mas podemos utilizar...

  public function reagirFrase($frase){
    if($frase == "comida" || $frase == "oi"){
      echo "<p> Abanar e latir</p>";
    }
    else{
      echo "<p> Rosar rggg</p>";
    }
  }
  public function reagirHora($hora, $min){
    if($hora < 12){
      echo "<p>Manha: Abanar </p>";
    }
    else if($hora >= 18){
      echo "<p>Noite: Ignorar </p>";
    }
    else{
      echo "<p>Tarde: Abanar e latir</p>";
    }
  }
  public function reagirDono($dono){
    if($dono){
      echo "<p> Abanar </p>";
    }
    else{
      echo "<p> Rosar e latir rggg</p>";
    }
  }
  public function reagirIdadePeso($idade, $peso)
  {
    if ($idade < 5) {
      if ($peso < 10) {
        echo "<p> Abanar.. </p>";
      } else {
        echo "<p> Latir.. </p>";
      }
    }else{
      if($peso < 10){
        echo "<p> Rosnar.. </p>";
      }
      else{
        echo "<p> Ignorar ... </p>";
      }
    }
  }


  // Polimorfismo sobreposicao
  //Override
  public function emitirSom()
  {
    echo "<p>emitindo som: Au au au!</p>"; 
  }
}