<!DOCTYPE html>

<?php
  
session_start(); // od tego czasu mozemy tworzyc zmienne sesyjne $_SESSION['nazwa'] = wartość.


    ?>


<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    
    
    
    
    <body>

        <form action="index.php" method="post" enctype="multipart/form-data">
        <div>
            
            <div>
                login:<input type="text" name="login" maxlength="8" size="5">
            </div>
            
            <div>password: <input type="password" name="haslo" maxlength="15" size="5"> </div>
            
            <div>
                <input type="submit" value="Zaloguj się"/>
                
            </div>
            
            
        </div>
        
        
        
    </forn>
        
        

       <?php

       
       if(isset($_GET['akcja']) && $_GET['akcja'] == 'wyloguj') {
           
            $_SESSION['zalogowany'] = 0;
           
            echo 'zostałeś wylogowany <br/>';
       }
       
if ((isset($_POST['login']) && isset($_POST['haslo'])) || $_SESSION['zalogowany'] == 1)
{
    
    if((!empty($_POST['login']) && !empty($_POST['haslo'])) || $_SESSION['zalogowany'] == 1)
    {
        
        $login = filter_var($_POST['login'], FILTER_SANITIZE_STRING);
        
        $haslo = filter_var($_POST['haslo'], FILTER_SANITIZE_STRING);
     
        if(($login == "Adam" && $haslo == "zabka") || $_SESSION['zalogowany'] == 1) {
            
            echo 'jestes zalogowany: '.$login."<br/>";
            echo 'panel administracyjny <br/>';
            echo '<a href="index.php">odswiez</a><br/>';
            echo '<a href="index.php?akcja=wyloguj">wyloguj</a><br/>';
            
            $_SESSION['zalogowany'] = 1 ;
            
        } else {
        
            echo 'podałeś niepoprawny login lub hasło';
        }
        
    } else {
    
        echo 'nie podałes loginu lub hasła';
    }
} else {

//    echo 'nie podales hasla lub loginu';    
}

?>
    </body>
</html>
