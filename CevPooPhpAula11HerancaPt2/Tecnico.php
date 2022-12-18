<?php

class Tecnico extends Aluno {

  private $registroProfissional;
  


  public function praticar() {
    echo "Estou praticando...";
  }




	/**
	 * @return mixed
	 */
	public function getRegistroProfissional() {
		return $this->registroProfissional;
	}
	
	/**
	 * @param mixed $registroProfissional 
	 * @return self
	 */
	public function setRegistroProfissional($registroProfissional): self {
		$this->registroProfissional = $registroProfissional;
		return $this;
	}
}