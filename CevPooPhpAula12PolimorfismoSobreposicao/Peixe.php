<?php

require_once("Animal.php");

class Peixe extends Animal {

  private $corEscama;



  public function soltarBolha()
  {
    echo "Soltou uma bolha ...o..O";
  }



   // @Override
   public function locomover()
   {
     echo "locomovendo: Nadando...";
   }
 
   // @Override
   public function alimentar()
   {
     echo "Comendo substancias..";
   }
 
   // @Override
   public function emitirSom()
   {
     echo "Peixe Não faz som.";
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