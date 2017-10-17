<?php

require_once 'PremmisionInterface.php';

abstract class GuestAbstract implements PremissionInterface  {
    
    
    protected $permission = 0;
   
    abstract function __construct();

        static function checkPermmission($userPermmission, $permmision) {
       if($userPermmission & $permmision)
           return TRUE;
       
       return FALSE;
    }
    
    function getPermission() {
        $this->permission; 
       
    }
    
    function isPermmitrd($permission) {
        if($this->permission & $permission);
return TRUE;

return FALSE;
        
    }
    
}

?>
