<?php
abstract Class Pedido{
    protected float $valor;
    protected Frete $tipoFrete;

    public function getValor():float{
        return $this->valor;
    }

    public function setValor(float $valor):void{
        $this->valor = $valor;
    }

    public function setTipoFrete(Frete $frete){
        return $this->tipoFrete = $frete;
    }

    public function calculaFrete():float{
        return $this->tipoFrete->calcula($this->valor);
    }
}