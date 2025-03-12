<?php 

class Conta {

    public $numConta;
    protected $tipo;
    private $dono;
    private $saldo;
    private $status;

    public function __construct() {
        $this->setStatus(false);
        $this->setSaldo(0);
    }
    
    public function abrirConta($tipo) {
        $this->setTipo($tipo);
        $this->setStatus(true);

        if ($this->tipo == "CC") {
            $this->setSaldo(50.00);
        }
        elseif ($this->tipo == "CP") {
            $this->setSaldo(150.00);
        }
    }

    public function fecharConta() {
        if ($this->getSaldo() == 0) {
            $this->setStatus(false);
            print "Conta fechada com sucesso.";
        }
        else {
            print "Há pendências em sua conta. Para fechar a conta é necessário não haver débito ou algum valor em sua conta.";
        }
    }

    public function depositar($deposito) {
        if ($this->getStatus() == true) {
            $this->setSaldo($this->getSaldo() + $deposito);
            print "Depósito realizado!";
        }
        else {
            print "Não é possível realizar transações em uma conta inexistente.";
        }
    }

    public function sacar($saque) {

        if ($this->getSaldo() >= $saque && $this->getStatus() == true) {
            $this->setSaldo($this->getSaldo() - $saque);
            return print "Está aqui seu dinheiro R$ {$saque}";
        }
        else {
            print "Saldo insuficiente.";
        }
    }

    public function pagarMensal() {
        if ($this->getTipo() == "CC" && $this->getStatus() == true) {
            $this->setSaldo($this->getSaldo() - 12);
        }
        elseif ($this->getTipo() == "CP" && $this->getStatus() == true) {
            $this->setSaldo($this->getSaldo() - 20);
        }
        else {
            print "A conta não existe.";
        }
        
    }   

    // ABAIXO SÃO OS GETTERS E OS SETTERS

    public function getNumConta() {
        return $this->numConta;
    }

    public function setNumConta($numConta) {
        $this->numConta = $numConta;
    }

    public function getTipo() {
        return $this->tipo;
    }

    public function setTipo($tipo) {
        $this->tipo = $tipo;
    }

    public function getDono() {
        return $this->dono;
    }

    public function setDono($dono) {
        $this->dono = $dono;
    }

    public function getSaldo() {
        return $this->saldo;
    }

    public function setSaldo($saldo) {
        $this->saldo = $saldo;
    }

    public function getStatus() {
        return $this->status;
    }

    public function setStatus($status) {
        $this->status = $status;
    }

}