<?php

namespace App\Extractor;

use App\Extractor\File;

class Csv extends File{

    public function readFile(string $dir):array {
        
        $handle = fopen($dir, 'r');

        while(($row = fgetcsv($handle, 10000, ';' )) !== false) {
            
            $this->setData($row[0], $row[1], $row[2]);
            
        }

        fclose($handle);

        return $this->getData();
        
    }

}