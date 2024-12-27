<?php

namespace App\Extractor;

use App\Extractor\File;

class Txt extends File{

    public function readFile(string $dir):array {

        $handle = fopen($dir, 'r');

        while(!feof($handle)) {
            $row = fgets($handle);
            $this->setData(substr($row, 0, 11), substr($row, 11, 30), substr($row, 41, 50));
        }

        fclose($handle);

        return $this->getData();

    }

}