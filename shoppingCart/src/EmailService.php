<?php

namespace App;

class EmailService {
    
    private $from;
    private $to;
    private $subject;
    private $content;
    
    public function __construct(
        $from = "contato@gmail.com", $to = "contato@gmail.com",
        $subject = "", $content = ""
    ){
        $this->from = $from;
        $this->to = $to;
        $this->subject = $subject;
        $this->content = $content;
    }
    
    public static function sendEmail():string {
        return "<br/> Enviando email <br/>";
    }


}