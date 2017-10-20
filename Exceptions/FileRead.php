<?php

class FileRead {
    
    protected $filePointer;
    
    function __construct($fileName) {
        
        if(!($this->filePointer = @fopen($fileName, "r")))
        {
            echo 'nie ma takiego pliku';
        }
    }
    
    
}

?>
