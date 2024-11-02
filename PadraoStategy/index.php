<H1>Strategy</H1>
<?php 
require_once('./Strategy/FreteComum.php');
require_once('./Strategy/FreteExpresso.php');
require_once('./context/PedidoEletronicos.php');
require_once('./context/PedidoMoveis.php');

// Criação do tipos de frete
$freteComum = new FreteComum();
$freteExpresso = new FreteExpresso();

// Criação de um pedido do setor de eletronicos 
$pedido = new PedidoEletronicos();

// Atribuição do valor
$pedido->setValor(100);

// Definição do frete comum com frete escolhido
$pedido->setTipoFrete($freteComum);


//Cálculo do frete comum.
echo 'Eletrônicos Frete Comum: R$' . $pedido->calculaFrete() . '<br>';

// No mesmo medido podemos trocar o tipo de frete
$pedido->setTipoFrete($freteExpresso);

//Cálculo do frete expresso.
echo 'Eletrônicos Frete Expresso: R$' . $pedido->calculaFrete() . '<br>';

$pedido = new PedidoMoveis();
$pedido->setValor(100);
$pedido->setTipoFrete($freteComum);

echo 'Moveis frete comum: R$'.$pedido->calculaFrete().'<br>';

?>