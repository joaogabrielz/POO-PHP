<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */


class Caneta {
    
    public $modelo;
    public $cor;
    private $ponta;
    protected $carga;
    private $tampada;
    
    
    public function rabiscar() {
        if($this->tampada == true){
            echo "<p>Não posso escrever tampada</p>";
        }
        else{
            echo "<p>Rabiscando...</p>";
        }
    }
    public function tampar() {
        $this->tampada = true;
    }
    public function destampar(){
        $this->tampada = false;
    }
    
}
