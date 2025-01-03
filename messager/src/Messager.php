<?php

namespace App;

use App\Email;

class Messager{

    private $channel;

    public function getChannel()
    {
        return $this->channel;
    }

    public function setChannel($channel): void
    {
        $this->channel = $channel;
    }
    
    public function sendToken(): void{
        
        $class = "\App\\" . ucfirst($this->getChannel());
        $instance = new $class;
        $instance->send();
        
    }
    
}