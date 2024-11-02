<?php
require_once(__DIR__ . '/../interface/Frete.php');

class FreteComum implements Frete{
    public function calcula(float $valor):float{
        return $valor * 0.05;
    }

}