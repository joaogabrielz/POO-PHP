<?php

require_once("Pessoa.php");

class Aluno extends Pessoa{ // Herança para diferenã

  private $matricula;
  private $curso;


	public function pagarMensalidade(){ // Metodos Final Não podem ser sobrepostos

		echo "Pagando Mensalidade do aluno: <strong>" . $this->nome . "</strong>"; // atributo portegido, pode ser acessado pelas subclasses

	}

  public function cancelarMatricula(){
    echo "<p>Matricula será cancelada </p>";
  }
  

	


	/**
	 * @return mixed
	 */
	public function getMatricula() {
		return $this->matricula;
	}
	
	/**
	 * @param mixed $matricula 
	 * @return self
	 */
	public function setMatricula($matricula): self {
		$this->matricula = $matricula;
		return $this;
	}
	
	/**
	 * @return mixed
	 */
	public function getCurso() {
		return $this->curso;
	}
	
	/**
	 * @param mixed $curso 
	 * @return self
	 */
	public function setCurso($curso): self {
		$this->curso = $curso;
		return $this;
	}

  /**
   * @param mixed $matricula 
   * @param mixed $curso 
   */
 
} 