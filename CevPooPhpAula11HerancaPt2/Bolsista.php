<?php

require_once("Aluno.php");

final class Bolsista extends Aluno { //classes Final, É obrigatoriamente folha, não pode ter filhos

  private $bolsa;



  public function renovarBolsa(){
		echo "Bolsa Renovada :) ..";
  }


  //POLIMORFISMO
	// @Override, sobrescrevendo o metodo da classe heradada
	
  final public function pagarMensalidade(){  // Metodos final, não podem ser Sobrescritos
		echo "<strong>" . $this->nome . "</strong>" . " É bolsista, Pagando Mensalidade com Desconto"; // atributo portegido, pode ser acessado pelas subclasses
  }




	/**
	 * @return mixed
	 */
	public function getBolsa() {
		return $this->bolsa;
	}
	
	/**
	 * @param mixed $bolsa 
	 * @return self
	 */
	public function setBolsa($bolsa): self {
		$this->bolsa = $bolsa;
		return $this;
	}
}