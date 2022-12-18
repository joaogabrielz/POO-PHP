<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */


class ContaBanco {
    
    public $numConta;
    protected $tipo; //cc ou cp
    private $dono;
    private $saldo;
    private $status; 
    
    
    public function __construct($numConta, $dono) {
        $this->numConta = $numConta;
        $this->dono = $dono;
                
                 
        $this->setSaldo(0);
        $this->setStatus(false);
        echo "<p>Created</p>";
    }
    
    public function abrirConta($t) {
        
        $this->setTipo($t);
        $this->setStatus(true);
        
        if($t == 'cc'){
            $this->setSaldo(50.00);
            
        }
        elseif($t == 'cp'){
            $this->setSaldo(150.00);
                       
        } 
    }
    
    public function fecharConta(){
        
        if($this->saldo > 0){
            echo "<p>Conta possui dinheiro, nao posso fecha-la</p>";
        }
        else if($this->getSaldo() < 0){
            echo "<p>Conta em debito ainda pendente..</p>";
        }
        else{
            echo "<p>COnta fechada x</p>";
            $this->setStatus(false);
        }
    }
    
    public function depositar($deposito) {
        
        if($this->getStatus()){
            $this->setSaldo($this->getSaldo() + $deposito);
            echo "<p>Deposito feito</p>";
        }
        else{
            echo "<p>COnta tem q estar aberta!</p>";
        }
    }
    
    public function sacar($saque) {
        if($this->status && $saque <= $this->saldo){
            $this->setSaldo($this->getSaldo() - $saque);
            echo '<p>Saque feito com sucesso</p>';
        }
        else{
            echo '<p>Saldo insuficiente</p>';
        }
    }
    
    public function pagarMensal() {
   
        if($this->getTipo() == "cc"){
            $v = 12;
        }
        else if($this->getTipo() == "cp"){
            $v = 20;
        }
        
        if($this->getStatus()){
            if($this->getSaldo() > $v){
                $this->setSaldo($this->getSaldo() - $v);
            }
            else{
                echo '<p>Saldo insuficiente</p>';
            }
        }
        else{
            echo '<p>impossivel pagar, conta nao aberta</p>';
        }
        
    }
    
    
    
    
    public function getNumConta() {
        return $this->numConta;
    }

    public function getTipo() {
        return $this->tipo;
    }

    public function getDono() {
        return $this->dono;
    }

    public function getSaldo() {
        return $this->saldo;
    }

    public function getStatus() {
        return $this->status;
    }

    public function setNumConta($numConta): void {
        $this->numConta = $numConta;
    }

    public function setTipo($tipo): void {
        $this->tipo = $tipo;
    }

    public function setDono($dono): void {
        $this->dono = $dono;
    }

    public function setSaldo($saldo): void {
        $this->saldo = $saldo;
    }

    public function setStatus($status): void {
        $this->status = $status;
    }



}
