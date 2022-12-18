<?php

require_once("AcoesVideo.php");

class Video implements AcoesVideo {

  private $titulo;
  private $avaliacao;
  private $views;
  private $curtidas;
  private $reproduzindo;
  

  public function __construct($titulo)
  {
    $this->titulo = $titulo;
    $this->avaliacao = 1;
    $this->views = 0;
    $this->curtidas = 0;
    $this->reproduzindo = false;
  }


 // Override - Sobrescrita
  public function play() {
    $this->reproduzindo = true;
	}
	
	// Override - Sobrescrita
	public function pause() {
    $this->reproduzindo = false;
	}
	
  // Override - Sobrescrita
	public function like() {
    $this->curtidas++;
	}



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
	public function getAvaliacao() {
		return $this->avaliacao;
	}
	
	/**
	 * @param mixed $avaliacao 
	 * @return self
	 */
	public function setAvaliacao($avaliacao): self {
		$this->avaliacao = $avaliacao;
		return $this;
	}
	
	/**
	 * @return mixed
	 */
	public function getViews() {
		return $this->views;
	}
	
	/**
	 * @param mixed $views 
	 * @return self
	 */
	public function setViews($views): self {
		$this->views = $views;
		return $this;
	}
	
	/**
	 * @return mixed
	 */
	public function getCurtidas() {
		return $this->curtidas;
	}
	
	/**
	 * @param mixed $curtidas 
	 * @return self
	 */
	public function setCurtidas($curtidas): self {
		$this->curtidas = $curtidas;
		return $this;
	}
	
	/**
	 * @return mixed
	 */
	public function getReproduzindo() {
		return $this->reproduzindo;
	}
	
	/**
	 * @param mixed $reporduzindo 
	 * @return self
	 */
	public function setReproduzindo($reporduzindo): self {
		$this->reproduzindo = $reporduzindo;
		return $this;
	}

	
}