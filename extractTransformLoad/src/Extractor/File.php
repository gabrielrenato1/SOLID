<?php

namespace App\Extractor;

class File {
    
    private $data;
    
    public function __construct(){
        $this->data = [];
    }

    public function getData(): array
    {
        return $this->data;
    }

    public function setData(string $name, string $cpf, string $email): void
    {
        $this->data[] = [
            "name" => iconv('iso-8859-1', 'utf-8', $name),
            "cpf" => $cpf,
            "email" => $email,
        ];
    }
   
}