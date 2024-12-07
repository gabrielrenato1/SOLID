<?php

namespace App;

use App\ShoppingCart;

class Order {
    
    private $status;
    private $shoppingCart;
    private $totalValue;
    
    public function __construct(){
        $this->status = "aberto";
        $this->shoppingCart = new ShoppingCart();
        $this->totalValue = 0.0;
    }

    public function getStatus():string {
        return $this->status;
    }

    public function setStatus(string $status):void {
        $this->status = $status;
    }

    public function getShoppingCart():ShoppingCart {
        return $this->shoppingCart;
    }

    public function setShoppingCart(ShoppingCart $shoppingCart):void {
        $this->shoppingCart = $shoppingCart;
    }

    public function getTotalValue():float {
        return $this->totalValue;
    }

    public function setTotalValue(float $totalValue):void {
        $this->totalValue = $totalValue;
    }
    
    public function confirmOrder():bool {
        
        if($this->shoppingCart->verifyCart()){
            $this->setStatus('confirmado');
            return true;
        }

        return false;
        
    }

}