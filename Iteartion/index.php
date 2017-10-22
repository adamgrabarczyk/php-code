<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Iteration</title>
    </head>
    <body>
        <?php

        class A implements Iterator {
            
//            public $a = "one";
//            
//            protected $b = "two";
//            
//            private $c = "three";
//          
            
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

            public function current() {
            
                
            }

            public function key() {
                
            }

            public function next() {
                
            }

            public function rewind() {
                
            }

            public function valid() {
                
            }

        }
        
        
        $a = new A();
        
//        foreach ($a as $key => $value)
//        {
//            echo "key = $key <br/>";
//            
//            echo "value = $value <br/><br/>";
//        }
        
        $tab = array("one", "two", "three");
        
        echo current($tab);
//        $a->iterate();
        
        foreach ($a as $key => $value)
        {
            echo "key = $key <br/>";
            
            echo "value = $value <br/><br/>";
            
            
        }
    
        ?>
    </body>
</html>
