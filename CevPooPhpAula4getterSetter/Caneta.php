<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

class Caneta {
    public $modelo;
    private $ponta;
    private $cor;
    private $tampada;
    
    public function __construct($modelo, $ponta, $cor) {
        $this->modelo = $modelo;
        $this->ponta = $ponta;
        $this->cor = $cor;
        $this->setTampada(true);
    }

    public function getModelo() {
        return $this->modelo;
    }

    public function getPonta() {
        return $this->ponta;
    }

    public function getCor() {
        return $this->cor;
    }

    public function getTampada() {
        return $this->tampada;
    }

    public function setModelo($modelo): void {
        $this->modelo = $modelo;
    }

    public function setPonta($ponta): void {
        $this->ponta = $ponta;
    }

    public function setCor($cor): void {
        $this->cor = $cor;
    }

    public function setTampada($tampada): void {
        $this->tampada = $tampada;
    }


    
    
////    public function __construct() { //Contructor
////        $this->cor = "Azul";
////        $this->destampar();
////    }
//    
////    public function Caneta() { //Contructor
////        $this->cor = "Azul";
////        $this->destampar();
////    }
//    
//    public function __construct ($modelo, $ponta, $cor) {
//        $this->modelo = $modelo;
//        $this->ponta = $ponta;
//        $this->cor = $cor;
//        
//        $this->tampar();     
//    }
//    
//    public function tampar() {
//        $this->tampada = true;
//    }
//     public function destampar() {
//        $this->tampada = false;
//    }
//    
//    
//    public function getModelo(){
//        return $this->modelo;
//    }
//    public function setModelo($modelo) {
//        $this->modelo = $modelo;
//    }
//    
//    public function getPonta() {
//        return $this->ponta;
//    }
//    public function setPonta($ponta){
//        $this->ponta= $ponta;
//    }
}
