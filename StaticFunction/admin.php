<?php

require_once('GuestAbstract.php');

class Admin extends GuestAbstract {
 
   function __construct() {
        
        $this->permission = PremissionInterface::READ_POST |
                PremissionInterface::WRITE_POST |
                PremissionInterface::DELETE_POST |
                PremissionInterface::DELETE_USER;
    }
     
    
}


?>