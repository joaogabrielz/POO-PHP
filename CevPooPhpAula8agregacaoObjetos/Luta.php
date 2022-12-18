<?php
require_once("Lutador.php");

class Luta {

  private $desafiado;
  private $desafiante;
  private $rounds;
  private $aprovada;

  public function marcarLuta($l1, $l2){
    if($l1->getCategoria() === $l2->getCategoria() && 
    ($l1 != $l2)){
      $this->setAprovada(true);
      $this->setDesafiado($l1);
      $this->setDesafiante($l2);
    }
    else{
      $this->setAprovada(false);
      $this->setDesafiado(null);
      $this->setDesafiante(null);
    }
  }

  public function lutar(){

    if($this->getAprovada()){
      $this->getDesafiado()->apresentar();
      $this->getDesafiante()->apresentar();
      $vencedor = rand(0, 2);
      switch ($vencedor) {
        case 0:
          echo "<p> Empatou </p>";
          $this->desafiado->empatarLuta();
          $this->desafiante->empatarLuta();
        break;

        case 1:
          echo "<p>" . $this->desafiado->getNome() . " Venceu </p>";
          $this->desafiado->ganharLuta();
          $this->desafiante->perderLuta();
        break;

        case 2:
          echo "<p>" . $this->desafiante->getNome() . " Venceu </p>";
          $this->desafiante->ganharLuta();
          $this->desafiado->perderLuta();
        break;

        // default:
        //   # code...
        // break;
      }
    }
    else{
      echo "<p> Luta não pode acontecer..</p>";
    }

  }


  // public function __construct($desafiado, $desafiante, $rounds, $aprovada) {
  // 	$this->desafiado = $desafiado;
  // 	$this->desafiante = $desafiante;
  // 	$this->rounds = $rounds;
  // 	$this->aprovada = $aprovada;
  // }



	/**
	 * @return mixed
	 */
	public function getDesafiado() {
		return $this->desafiado;
	}
	
	/**
	 * @param mixed $desafiado 
	 * @return self
	 */
	public function setDesafiado($desafiado): self {
		$this->desafiado = $desafiado;
		return $this;
	}
	
	/**
	 * @return mixed
	 */
	public function getDesafiante() {
		return $this->desafiante;
	}
	
	/**
	 * @param mixed $desafiante 
	 * @return self
	 */
	public function setDesafiante($desafiante): self {
		$this->desafiante = $desafiante;
		return $this;
	}
	
	/**
	 * @return mixed
	 */
	public function getRounds() {
		return $this->rounds;
	}
	
	/**
	 * @param mixed $rounds 
	 * @return self
	 */
	public function setRounds($rounds): self {
		$this->rounds = $rounds;
		return $this;
	}
	
	/**
	 * @return mixed
	 */
	public function getAprovada() {
		return $this->aprovada;
	}
	
	/**
	 * @param mixed $aprovada 
	 * @return self
	 */
	public function setAprovada($aprovada): self {
		$this->aprovada = $aprovada;
		return $this;
	}
}