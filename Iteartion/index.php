<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Iteration</title>
    </head>
    <body>
        <?php

        class A {
            
            public $a = "one";
            
            protected $b = "two";
            
            private $c = "three";
          
            
            private $tab = array("one", "two", "three");




            public function iterate() {
         
                foreach ($this as $key => $value)
        {
            
            
            if (is_array($value)){
                
            
                foreach ($value as $key => $value)
        {
            echo "key = $key <br/>";
            
            echo "value = $value <br/><br/>";
            
        }}
 else {
     echo "key = $key <br/>";
            
            echo "value = $value <br/><br/>";
 }
        }
                
            }
        
        }
        
        
        $a = new A();
        
//        foreach ($a as $key => $value)
//        {
//            echo "key = $key <br/>";
//            
//            echo "value = $value <br/><br/>";
//        }
        $a->iterate();
        
    
        ?>
    </body>
</html>
