<?php

namespace App;

class Email implements TokenMessageInterface {

    public function send(): void{
        echo "email sent";
    }

}