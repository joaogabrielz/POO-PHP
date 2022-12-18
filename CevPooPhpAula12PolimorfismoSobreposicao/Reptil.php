<?php

require_once("Animal.php");

class Reptil extends Animal {

  private $corEscama;


   // @Override
   public function locomover()
   {
     echo "locomovendo: Rastejando...";
   }
 
   // @Override
   public function alimentar()
   {
     echo "Comendo vegetais..";
   }
 
   // @Override
   public function emitirSom()
   {
     echo "Emitindo som de Reptil..";
   }




   

	/**
	 * @return mixed
	 */
	public function getCorEscama() {
		return $this->corEscama;
	}
	
	/**
	 * @param mixed $corEscama 
	 * @return self
	 */
	public function setCorEscama($corEscama): self {
		$this->corEscama = $corEscama;
		return $this;
	}
}