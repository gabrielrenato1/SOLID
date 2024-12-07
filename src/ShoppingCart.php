<?php

namespace App;

class ShoppingCart {

    private $items;
    private $status;
    private $totalValue;
    
    public function __construct(){
        $this->items = [];
        $this->status = "aberto";
        $this->totalValue = 0.0;
    }
    
    public function getItems():array{
        return $this->items;
    }
    
    public function getTotalValue():float{
        return $this->totalValue;
    }
    
    public function getStatus():string{
        return $this->status;
    }

    public function addItem(string $item, float $value):void{

        $this->items[] = [
            "item" => $item,
            "value" => $value,
        ];

        $this->totalValue += $value;

    }
    
    public function confirmOrder():bool{
        
        if($this->verifyCart()){
            $this->status = "confirmado";
            $this->sendConfirmOrderMail();
            
            return true;
            
        }
        
        return false;
        
    }
    
    public function sendConfirmOrderMail():void{
        echo "<br/> Enviando email de confirmação <br/>";
    }
    
    public function verifyCart():bool{
        return !empty($this->items);
    }
    
    

}