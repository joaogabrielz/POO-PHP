<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

class Caderno {
   
    var $nFolhas;
    var $tipoCapa;
    var $cor;
    var $fechado;
    
    
    
    function  serEscrito() {
        if($this->fechado == true){
            echo "<p>Não posso ser Escrito FECHADO</p>";
        }
        else{
            echo "<p>Sendo Escrito</p>";
        }
    }


    function fechar() {
        $this->fechado = true;
    }
    
    function abrir() {
        $this->fechado = false;
    }
    
}
