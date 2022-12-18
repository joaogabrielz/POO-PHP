<?php
require_once("Pessoa.php");
require_once("interfacePublicacao.php");

class Livro implements Publicacao{

  private $titulo;
  private $autor;
  private $totPaginas;
  private $pagAtual;
  private $aberto;
  private $leitor;


  public function __construct($titulo, $autor, $totPaginas, $leitor) {
  	$this->titulo = $titulo;
  	$this->autor = $autor;
  	$this->totPaginas = $totPaginas;
    $this->aberto = false;
    $this->pagAtual = 0;
  	$this->leitor = $leitor;
  }


  public function detalhes(){
    echo "<br>";
    echo "<br>Livro '" . $this->titulo . "' Escrito por '" . $this->autor . "'";
    echo "<br> Paginas: " . $this->totPaginas;
    echo "<br> Pagina Atual: " . $this->pagAtual;
    echo "<br> Sendo lido por '" . $this->leitor->getNome(). "'";;
    echo "<br>";
  }


  // Interface methods..
  public function abrir(){
    $this->aberto = true;
  }
  public function fechar(){
    $this->aberto = false;
  }
  public function folhear($p){
    if($p > $this->totPaginas){
      $this->pagAtual = 0;
    }
    else{
      $this->pagAtual = $p;
    }
  }
  public function avancarPag(){
    
    if($this->pagAtual+1 < $this->totPaginas){
      $this->pagAtual++;
    }
   
  }
  public function voltarPag(){

    if($this->pagAtual-1 > 0){
      $this->pagAtual--;
    }
   
  }
  

  //Getters&Setters
	/**
	 * @return mixed
	 */
	public function getTitulo() {
		return $this->titulo;
	}
	
	/**
	 * @param mixed $titulo 
	 * @return self
	 */
	public function setTitulo($titulo): self {
		$this->titulo = $titulo;
		return $this;
	}
	
	/**
	 * @return mixed
	 */
	public function getAutor() {
		return $this->autor;
	}
	
	/**
	 * @param mixed $autor 
	 * @return self
	 */
	public function setAutor($autor): self {
		$this->autor = $autor;
		return $this;
	}
	
	/**
	 * @return mixed
	 */
	public function getTotPaginas() {
		return $this->totPaginas;
	}
	
	/**
	 * @param mixed $totPaginas 
	 * @return self
	 */
	public function setTotPaginas($totPaginas): self {
		$this->totPaginas = $totPaginas;
		return $this;
	}
	
	/**
	 * @return mixed
	 */
	public function getPagAtual() {
		return $this->pagAtual;
	}
	
	/**
	 * @param mixed $pagAtual 
	 * @return self
	 */
	public function setPagAtual($pagAtual): self {
		$this->pagAtual = $pagAtual;
		return $this;
	}
	
	/**
	 * @return mixed
	 */
	public function getAberto() {
		return $this->aberto;
	}
	
	/**
	 * @param mixed $aberto 
	 * @return self
	 */
	public function setAberto($aberto): self {
		$this->aberto = $aberto;
		return $this;
	}
	
	/**
	 * @return mixed
	 */
	public function getLeitor() {
		return $this->leitor;
	}
	
	/**
	 * @param mixed $leitor 
	 * @return self
	 */
	public function setLeitor($leitor): self {
		$this->leitor = $leitor;
		return $this;
	}

  /**
   * @param mixed $titulo 
   * @param mixed $autor 
   * @param mixed $totPaginas 
   * @param mixed $pagAtual 
   * @param mixed $aberto 
   * @param mixed $leitor 
   */

}