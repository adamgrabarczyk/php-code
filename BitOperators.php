<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Bit Operators</title>
    </head>
    <body>
        <?php

$readPost = 1;
    $writePost = 2;
    $deletePost = 4;
    $deleteUser = 8;
    
    $guest = $readPost;
    $user = $readPost | $writePost;
    $moderator = $readPost | $writePost | $deletePost;
    $admin = $readPost | $writePost | $deletePost | $deleteUser;
   
    /*
     *  0 0 0 0 0 0 0
     *  0 0 0 0 0 0 1 - czytanie
     *  0 0 0 0 0 1 0 - pisanie
     *  0 0 0 0 0 1 1 - czytac i pisac
     *  0 0 0 0 1 0 0 - usuwanie postow
     *  0 0 0 1 0 0 0 - usuwanie uzytkownikow
     * 
     *  0 0 0 1 1 1 1 - czytanie, usuwanie postow i uzytkownikow
     *  0 0 0 0 0 1 0 - pisać
     *  0 0 0 0 0 1 0
     */
    
    if (checkPermission($admin, $writePost) )
        writePost("Cześć jestem tu mistrzem :)");
    if (checkPermission($guest, $writePost) )
        writePost("Cześć jestem spamerem :)");
    
    function writePost($contentOfPost)
    {
        echo $contentOfPost;
    }
    function checkPermission($user, $permission)
    {
        if ($user & $permission)
            return true;
        
        return false;
    }
        ?>
    </body>
</html>
