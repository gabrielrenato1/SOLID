<?php

namespace App;

class Item {
    
    private $description;
    private $value;
    
    public function __construct(){
        $this->description = "";
        $this->value = 0.0;
    }
    
    public function getDescription():string {
        return $this->description;
    }
    public function setDescription(string $description):void {
        $this->description = $description;
    }
    
    public function getValue():float{
        return $this->value;
    }
    
    public function setValue(float $value):void {
        $this->value = $value;
    }


}