<?php

require_once("Animal.php");

class Ave extends Animal {

  private $corPena;


  public function fazerNinho(){
    echo "Contruindo Ninho..<>";
  }


   // @Override
   public function locomover()
   {
     echo "locomovendo: Voando...";
   }
 
   // @Override
   public function alimentar()
   {
     echo "Comendo frutas..";
   }
 
   // @Override
   public function emitirSom()
   {
     echo "Emitindo som de Ave..";
   }

   

	/**
	 * @return mixed
	 */
	public function getCorPena() {
		return $this->corPena;
	}
	
	/**
	 * @param mixed $corPena 
	 * @return self
	 */
	public function setCorPena($corPena): self {
		$this->corPena = $corPena;
		return $this;
	}
}