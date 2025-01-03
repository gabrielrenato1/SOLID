<?php

namespace App;

use App\Email;

class Messager{

    public function sendToken(){
        $email = new Email();
        $email->send();
    }
    
}