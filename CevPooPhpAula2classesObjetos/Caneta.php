<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */


class Caneta {
    
    var $modelo;
    var $cor;
    var $ponta;
    var $carga;
    var $tampada;
    
    
    function rabiscar() {
        if($this->tampada == true){
            echo "<p>Não posso escrever tampada</p>";
        }
        else{
            echo "<p>Rabiscando...</p>";
        }
    }
    function tampar() {
        $this->tampada = true;
    }
    function destampar(){
        $this->tampada = false;
    }
    
}
