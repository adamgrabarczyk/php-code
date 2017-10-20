<?php

class FileRead {
    
    protected $filePointer;
    protected $fileName;
            
    function __construct($fileName) {
        
        $this->fileName = $fileName;
        
        if(!($this->filePointer = @fopen($fileName, "r")))
        {
            
            throw new Exception("plik o nazwie '$fileName' nie istnieje.");
        }

    }
//            echo 'nie ma takiego pliku';
        
    
    
    function getWallContent() {
        
        return fread($this->filePointer, filesize($this->fileName));
    }
    
    }

?>
