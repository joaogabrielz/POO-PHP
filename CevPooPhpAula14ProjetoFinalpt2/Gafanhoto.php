<?php

require_once("Pessoa.php");

class Gafanhoto extends Pessoa {

  private $login;
  private $totAssistido;


  public function assistirMaisUm(){
    $this->totAssistido++;
  }


  public function __construct($nome, $idade, $sexo, $login) {
    parent::__construct($nome, $idade, $sexo);
  	$this->login = $login;
  	$this->totAssistido = 0;
  }



	/**
	 * @return mixed
	 */
	public function getLogin() {
		return $this->login;
	}
	
	/**
	 * @param mixed $login 
	 * @return self
	 */
	public function setLogin($login): self {
		$this->login = $login;
		return $this;
	}
	
	/**
	 * @return mixed
	 */
	public function getTotAssistido() {
		return $this->totAssistido;
	}
	
	/**
	 * @param mixed $totAssistido 
	 * @return self
	 */
	public function setTotAssistido($totAssistido): self {
		$this->totAssistido = $totAssistido;
		return $this;
	}
}