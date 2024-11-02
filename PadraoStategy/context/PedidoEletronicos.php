<?php
require_once('Pedido.php');
class PedidoEletronicos extends Pedido{
    private string $nomeSetor;

    public function __construct(){
        $this->nomeSetor = "Eletronicos";
    }
    public function getSetor():string{
        return $this->nomeSetor;
    }
    public function setNomeSetor(string $nomeSetor):void{
        $this->nomeSetor = $nomeSetor;
    }

 
}