<?php

namespace App;

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
    

    public function readFileCSV($dir):void {
        
        $handle = fopen($dir, 'r');

        while(($row = fgetcsv($handle, 10000, ';' )) !== false) {
            
            $this->setData($row[0], $row[1], $row[2]);
            
        }
        
    }

}