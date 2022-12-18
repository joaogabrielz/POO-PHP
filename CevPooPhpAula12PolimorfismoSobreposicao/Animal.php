<?php

abstract class Animal {

  protected $peso;
  protected $idade;
  protected $membros;


  public abstract function locomover();

  public abstract function alimentar();

  public abstract function emitirSom();


	/**
	 * @return mixed
	 */
	public function getPeso() {
		return $this->peso;
	}
	
	/**
	 * @param mixed $peso 
	 * @return self
	 */
	public function setPeso($peso): self {
		$this->peso = $peso;
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
	public function getMembros() {
		return $this->membros;
	}
	
	/**
	 * @param mixed $membros 
	 * @return self
	 */
	public function setMembros($membros): self {
		$this->membros = $membros;
		return $this;
	}
}