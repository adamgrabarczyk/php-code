<?php



Class Customers {
    
    private static $numberOfCustomers = 0;
    
    public $id;


    public function __construct() {
        
        
        self::$numberOfCustomers++;
    
        $this->id = self::$numberOfCustomers;
    }

    
    public static function  getNumberCustomers() {  // static -isnieje zawsze, nie zeruje sie
        
        
        return self::$numberOfCustomers;
    }
    }





?>
