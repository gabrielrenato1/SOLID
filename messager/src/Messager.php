<?php

namespace App;

use App\Email;
use App\TokenMessageInterface;

class Messager{

    private $channel;
    
    public function __construct(TokenMessageInterface $channel){
        $this->setChannel($channel);
    }

    public function getChannel(): TokenMessageInterface
    {
        return $this->channel;
    }

    public function setChannel(TokenMessageInterface $channel): void
    {
        $this->channel = $channel;
    }
    
    public function sendToken(): void{
        
        $this->getChannel()->send();
        
    }
    
}