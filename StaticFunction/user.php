<?php

require_once('PremmisionInterface.php');

class User extends GuestAbstract {
 
   function __construct() {
        
        $this->permission = PremissionInterface::READ_POST | PremissionInterface::WRITE_POST;
    }
     
    
}


?>
