<?php
require_once(__DIR__ . '/../interface/Frete.php');

class FreteExpresso implements Frete{
    public function calcula(float $valor):float{
        return $valor * 0.1;
    }

}