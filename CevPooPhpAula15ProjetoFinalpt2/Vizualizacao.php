<?php

require_once("Video.php");
require_once("Gafanhoto.php");

class Vizualizacao {

  private $espectador; // Gafanhoto
  private $filme; // Video


  public function __construct($espectador, $filme) {
  	$this->espectador = $espectador;
  	$this->filme = $filme;
    $this->filme->setViews($this->filme->getViews() + 1);
    $this->espectador->setTotAssistido($this->espectador->getTotAssistido() + 1);
  }


  // POLIMORFISMO, SOBRECARGA em PHP nao existe Sobrecarga, 
  // para contornar usaremosmeotods com nomes diferentes (Continua nao sendo sobrecarga)
  public function avaliar(){
    $this->filme->setAvaliacao(5);
  }
  public function avaliarNota($nota){
    $this->filme->setAvaliacao($nota);
  }
  public function avaliarPorc($porc){
    $nova = 0;
    if($porc <= 20){
      $nova = 3;
    }
    else if($porc <= 50){
      $nova = 5;
    }
    else if($porc <= 90){
      $nova = 8;
    }
    else{
      $nova = 10;
    }
    $this->filme->setAvaliacao($nova);
  }

 


	/**
	 * @return mixed
	 */
	public function getEspectador() {
		return $this->espectador;
	}
	
	/**
	 * @param mixed $espectador 
	 * @return self
	 */
	public function setEspectador($espectador): self {
		$this->espectador = $espectador;
		return $this;
	}
	
	/**
	 * @return mixed
	 */
	public function getFilme() {
		return $this->filme;
	}
	
	/**
	 * @param mixed $filme 
	 * @return self
	 */
	public function setFilme($filme): self {
		$this->filme = $filme;
		return $this;
	}
}