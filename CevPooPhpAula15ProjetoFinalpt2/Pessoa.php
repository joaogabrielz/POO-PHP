<?php

abstract class Pessoa {

  protected $nome;
  protected $idade;
  protected $sexo;
  protected $experiencia;


  protected function ganharExp($n){
    $this->experiencia += $n;
  }

  public function __construct($nome, $idade, $sexo) {
  	$this->nome = $nome;
  	$this->idade = $idade;
  	$this->sexo = $sexo;
  	$this->experiencia = 0;
  }




	/**
	 * @return mixed
	 */
	public function getNome() {
		return $this->nome;
	}
	
	/**
	 * @param mixed $nome 
	 * @return self
	 */
	public function setNome($nome): self {
		$this->nome = $nome;
		return $this;
	}
	
	/**
	 * @return mixed
	 */
	public function getIdade() {
		return $this->idade;
	}
	
	/**
	 * @param mixed $idade 
	 * @return self
	 */
	public function setIdade($idade): self {
		$this->idade = $idade;
		return $this;
	}
	
	/**
	 * @return mixed
	 */
	public function getSexo() {
		return $this->sexo;
	}
	
	/**
	 * @param mixed $sexo 
	 * @return self
	 */
	public function setSexo($sexo): self {
		$this->sexo = $sexo;
		return $this;
	}
	
	/**
	 * @return mixed
	 */
	public function getExperiencia() {
		return $this->experiencia;
	}
	
	/**
	 * @param mixed $experiencia 
	 * @return self
	 */
	public function setExperiencia($experiencia): self {
		$this->experiencia = $experiencia;
		return $this;
	}
}