<?php

namespace App;

use App\Item;

class ShoppingCart {

   private $items;
   
   public function __construct(){
       $this->items = [];
   }
   
   public function getItems():array {
       return $this->items;
   }
   
   public function addItem(Item $item):void {
       $this->items[] = $item;
   }
   
   public function verifyCart():bool {
       return !empty($this->items);
   }

}