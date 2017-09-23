
<?php
        
        echo "Gratulacje wlogowałeś się na konto: ".$_SESSION['login']."<br />";
        echo "PANEL ADMINISTRACYJNY<br /><br /><br />";
        
        if (isset($_COOKIE['ref']))
        {
            
            $ref = filter_var($_COOKIE["ref"], FILTER_SANITIZE_STRING);
        
            if ($ref == "kazik")
            {
               // brawo kazik 
               $_COOKIE['ref'] = NULL;
                 setcookie("ref", NULL, time()-1, "/"); 
                
                
            }
            echo 'Twoim polecającym jest: '.$ref."<br/>";
        }
        echo "<a href='index.php'>Odśwież</a><br />";
        echo "<a href='index.php?akcja=wyloguj'>Wyloguj się</a><br />";
                        
?>

