<?php

class Lutador {

  private $nome;
  private $nacionalidade;
  private $idade;
  private $altura;
  private $peso;
  private $categoria;
  private $vitorias;
  private $derrotas;
  private $empates;



  public function __construct($nome, $nacionalidade, $idade, $altura, $peso, $vitorias, $derrotas, $empates) {
  	$this->nome = $nome;
  	$this->nacionalidade = $nacionalidade;
  	$this->idade = $idade;
  	$this->altura = $altura;
  	//$this->peso = $peso;
    $this->setPeso($peso);
  	// $this->categoria = $categoria;
  	$this->vitorias = $vitorias;
  	$this->derrotas = $derrotas;
  	$this->empates = $empates;
  }
  

 public function apresentar(){

    echo "-----------------------";
    echo "<br>";
    echo "Ittttsss timeeeeeee";
    echo "<br>";
    echo "Lutador: " . $this->getNome();
    echo "<br>";
    echo "Origem: " . $this->getNacionalidade();
    echo "<br>";
    echo "Idade: " . $this->getIdade();
    echo "<br>";
    echo "Altura: " . $this->getAltura();
    echo "<br>";
    echo "Pesa: " . $this->getPeso();
    echo "<br>";
    echo "Ganhou: " . $this->getVitorias();
    echo "<br>";
    echo "Perdeu: " . $this->getDerrotas();
    echo "<br>";
    echo "Empatou: " . $this->getEmpates();
    echo "<br>";

 }
 public function status(){
  echo "<br>";
  echo '---';
  echo $this->getNome();
  echo "<br>";
  echo "Peso: " . $this->getCategoria();
  echo "<br>";
  echo "Ganhou: " . $this->getVitorias();
  echo "<br>";
  echo "Perdeu: " . $this->getDerrotas();
  echo "<br>";
  echo "Empatou: " . $this->getEmpates();
  echo "<br>";

 }
  
 public function ganharLuta(){
    $this->setVitorias($this->getVitorias() + 1);
 }
  
 public function perderLuta(){
  $this->setDerrotas($this->getDerrotas() + 1);
 }
 public function empatarLuta(){
  $this->setEmpates($this->getEmpates() + 1);
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
	public function getNacionalidade() {
		return $this->nacionalidade;
	}
	
	/**
	 * @param mixed $nacionalidade 
	 * @return self
	 */
	public function setNacionalidade($nacionalidade): self {
		$this->nacionalidade = $nacionalidade;
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
	public function getAltura() {
		return $this->altura;
	}
	
	/**
	 * @param mixed $altura 
	 * @return self
	 */
	public function setAltura($altura): self {
		$this->altura = $altura;
		return $this;
	}
	
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

    $this->setCategoria();
		return $this;
	}
	
	/**
	 * @return mixed
	 */
	public function getCategoria() {
		return $this->categoria;
	}
	
	/**
	 * @param mixed $categoria 
	 * @return self
	 */
	private function setCategoria() {

		if($this->getPeso() <= 52.2){
      $this->categoria = 'Inválido';
    }
    else if($this->getPeso() <= 70.3){
      $this->categoria = 'Leve';
    }
    else if($this->getPeso() <= 83.9){
      $this->categoria = 'Médio';
    }
    else if($this->getPeso() <= 120.2){
      $this->categoria = 'Pesado';
    }
    else{
      $this->categoria = 'Inválido';
    }

	}
	
	/**
	 * @return mixed
	 */
	public function getVitorias() {
		return $this->vitorias;
	}
	
	/**
	 * @param mixed $vitorias 
	 * @return self
	 */
	public function setVitorias($vitorias): self {
		$this->vitorias = $vitorias;
		return $this;
	}
	
	/**
	 * @return mixed
	 */
	public function getDerrotas() {
		return $this->derrotas;
	}
	
	/**
	 * @param mixed $derrotas 
	 * @return self
	 */
	public function setDerrotas($derrotas): self {
		$this->derrotas = $derrotas;
		return $this;
	}
	
	/**
	 * @return mixed
	 */
	public function getEmpates() {
		return $this->empates;
	}
	
	/**
	 * @param mixed $empates 
	 * @return self
	 */
	public function setEmpates($empates): self {
		$this->empates = $empates;
		return $this;
	}

  /**
   * @param mixed $nome 
   * @param mixed $nacionalidade 
   * @param mixed $idade 
   * @param mixed $altura 
   * @param mixed $peso 
   * @param mixed $categoria 
   * @param mixed $vitorias 
   * @param mixed $derrotas 
   * @param mixed $empates 
   */
 
}