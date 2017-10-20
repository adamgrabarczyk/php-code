<?php

class FileRead {
    
    protected $filePointer;
    protected $fileName;
    protected $isOpen = true;
            
    function __construct($fileName) {
        
        $this->fileName = $fileName;
        
        if(!($this->filePointer = @fopen($fileName, "r")))
        {
            $this->isOpen = false;
            
            throw new Exception("plik o nazwie '$fileName' nie istnieje.");
        }

    }
//            echo 'nie ma takiego pliku';
    function __destruct() {
        if($this->isOpen)
        {
            echo "zakmnięto plik";
        fclose($this->filePointer);
    
        }
        }
            
    
    function getWallContent() {
        
        return fread($this->filePointer, filesize($this->fileName));
    }
    
    }

?>
