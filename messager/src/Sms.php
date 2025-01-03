<?php

namespace App;

class Sms implements TokenMessageInterface {

    public function send(): void{
        echo "sms sent";
    }

}