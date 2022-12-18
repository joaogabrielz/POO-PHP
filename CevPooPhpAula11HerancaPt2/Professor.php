<?php 

require_once("Pessoa.php");

class Professor extends Pessoa {

  private $especialidade;
  private $salario;


  public function receberAumento($aumento){
    $this->salario += $aumento;
  }
  




	
	/**
	 * @return mixed
	 */
	public function getEspecialidade() {
		return $this->especialidade;
	}
	
	/**
	 * @param mixed $especialidade 
	 * @return self
	 */
	public function setEspecialidade($especialidade): self {
		$this->especialidade = $especialidade;
		return $this;
	}
	
	/**
	 * @return mixed
	 */
	public function getSalario() {
		return $this->salario;
	}
	
	/**
	 * @param mixed $salario 
	 * @return self
	 */
	public function setSalario($salario): self {
		$this->salario = $salario;
		return $this;
	}

  /**
   * @param mixed $especialidade 
   * @param mixed $salario 
   */
 
}