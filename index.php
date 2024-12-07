<?php

require_once __DIR__ . '/vendor/autoload.php';

use App\ShoppingCart;

$shoppingCart = new ShoppingCart();

print_r($shoppingCart->getItems());
echo "<br/> Valor total: " . $shoppingCart->getTotalValue() . '<br/>';

$shoppingCart->addItem("Bolo de Cenoura", 15.90);
$shoppingCart->addItem("Bolo de Chocolate", 10.90);
$shoppingCart->addItem("Bolo de Doce de Leite", 20.90);

print_r($shoppingCart->getItems());
echo "<br/> Valor total: " . $shoppingCart->getTotalValue() . '<br/>';
echo "Status: " . $shoppingCart->getStatus() . '<br/>';

if($shoppingCart->confirmOrder()) {
    echo "Pedido criado com sucesso <br/>";
}else{
    echo "Erro na confirmação do pedido. Carrinho sem itens <br/>";
}

echo "Status: " . $shoppingCart->getStatus() . '<br/>';

