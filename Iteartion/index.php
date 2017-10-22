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
        
                return current($this->tab);
                
            }

            public function key() {
                return key($this->tab);
            }

            public function next() {
                
                next($this->tab);
                
            }

            public function rewind() {
         
                reset($this->tab);
            }

            public function valid() {
                return (key($this->tab) !== NULL && key($this->tab) !== FALSE);
                
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
        
        
        
//        echo current($tab);
//        next($tab);
//        echo current($tab);
        $a->iterate();
        
        foreach ($a as $key => $value)
        {
            echo "key = $key <br/>";
            
            echo "value = $value <br/><br/>";
            
            
        }
    
        ?>
    </body>
</html>
