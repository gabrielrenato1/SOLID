<?php

require_once __DIR__ . '/vendor/autoload.php';

use App\ShoppingCart;
use App\Item;
use App\Order;
use App\EmailService;

$order = new Order();

echo "<h3>Carrinho válido? " . ($order->getShoppingCart()->verifyCart() ? 'Sim' : 'Não') . "</h3>";

$item = new Item();
$item->setDescription("Bolo de Cenoura");
$item->setValue(15.90);

$item2 = new Item();
$item2->setDescription("Bolo de Chocolate");
$item2->setValue(10.90);

$item3 = new Item();
$item3->setDescription("Bolo de Chocolate");
$item3->setValue(10.90);

$order->getShoppingCart()->addItem($item);
$order->getShoppingCart()->addItem($item2);
$order->getShoppingCart()->addItem($item3);

echo "<h3>Pedido</h3>";
echo "<pre>";
    print_r($order);
echo "</pre>";

echo "<h3>Itens</h3>";
echo "<pre>";
    print_r($order->getShoppingCart()->getItems());
echo "</pre>";

$total = 0;
foreach ($order->getShoppingCart()->getItems() as $item){
    $total += $item->getValue();
}
echo "<h3>Valor total: " . $total . "</h3>";


echo "<h3>Carrinho válido? " . ($order->getShoppingCart()->verifyCart() ? 'Sim' : 'Não') . "</h3>";

echo "<h3>Status pedido: " . $order->getStatus() . "</h3>";

if($order->confirmOrder()){
    echo EmailService::sendEmail();
}

echo "<h3>Status pedido: " . $order->getStatus() . "</h3>";
