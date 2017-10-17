<?php

require_once('GuestAbstract.php');

 class Guest extends GuestAbstract {
    
    function __construct() {
        
        $this->permission = PremissionInterface::READ_POST;
    }
    
}

?>
