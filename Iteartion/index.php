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
          
            
            public $tab = array("one", "two", "three");




            public function iterate() {
         
                foreach ($this as $key => $value)
        {
            echo "key = $key <br/>";
            
            echo "value = $value <br/><br/>";
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
