<?php 

require_once("Animal.php");

class Mamifero extends Animal {

  private $corPelo;


  // @Override
  public function locomover()
  {
    echo "locomovendo: Correndo...";
  }

  // @Override
  public function alimentar()
  {
    echo "Mamando..";
  }

  // @Override
  public function emitirSom()
  {
    echo "Emitindo som de Mamifero..";
  }

  




	/**
	 * @return mixed
	 */
	public function getCorPelo() {
		return $this->corPelo;
	}
	
	/**
	 * @param mixed $corPelo 
	 * @return self
	 */
	public function setCorPelo($corPelo): self {
		$this->corPelo = $corPelo;
		return $this;
	}
}