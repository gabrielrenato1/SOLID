<?php

namespace App;

use App\File;

class Reader {
    
    private $directory;
    private $file;
    
    public function __construct(){
        $this->directory = "";
        $this->file = "";
    }

    public function getDirectory() {
        return $this->directory;
    }

    public function setDirectory(string $directory): void {
        $this->directory = $directory;
    }

    public function getFile() {
        return $this->file;
    }

    public function setFile(string $file): void {
        $this->file = $file;
    }

    public function readFile():array {
        
        $dir = $this->getDirectory() . '/' . $this->getFile();
        $mime = explode('.', $this->getFile());
        $file = new File();

        if($mime[1] == "csv"){
        
            $file->readFileCSV($dir);
            
        } else if($mime[1] == "txt"){

            $file->readFileTXT($dir);

        }
        
        return $file->getData();
        
    }
    
    
    

}