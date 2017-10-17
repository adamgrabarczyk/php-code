<?php
require_once('GuestAbstract.php');

class Moderator extends GuestAbstract {
 
   function __construct() {
        
        $this->permission = PremissionInterface::READ_POST |
                PremissionInterface::WRITE_POST |
                PremissionInterface::DELETE_POST;
    }
     
    
}

?>
