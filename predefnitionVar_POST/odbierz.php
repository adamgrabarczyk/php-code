<?php

if (isset($_POST['login']) && isset($_POST['haslo']))
{
    
    if(!empty($_POST['login']) && !empty($_POST['haslo']))
    {
        
        $login = filter_var($_POST['login'], FILTER_SANITIZE_STRING);
        
        $haslo = filter_var($_POST['haslo'], FILTER_SANITIZE_STRING);
     
        if($login == "Adam" && $haslo == "zabka") {
            
            echo 'jestes zalogowany';
        }
        
    } else {
    
        echo 'nie podałes loginu lub hasła';
    }
} else {

    echo 'nie podales hasla lub loginu';    
}

?>
