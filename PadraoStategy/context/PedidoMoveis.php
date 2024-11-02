<?php
require_once('Pedido.php');

class PedidoMoveis extends Pedido{
    private string $nomeSetor;

    public function __construct(){
        $this->nomeSetor = "Moveis";
    }
    public function getSetor():string{
        return $this->nomeSetor;
    }
    public function setNomeSetor(string $nomeSetor):void{
        $this->nomeSetor = $nomeSetor;
    }


}