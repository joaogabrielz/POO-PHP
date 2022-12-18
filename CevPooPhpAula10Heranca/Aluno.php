<?php

require_once("Pessoa.php");

class Aluno extends Pessoa{

  private $matricula;
  private $curso;


  // public function __construct($matricula, $curso) {
  // 	$this->matricula = $matricula;
  // 	$this->curso = $curso;
    
  // }



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