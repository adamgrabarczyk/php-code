<?php

interface PremissionInterface {
    
    const READ_POST = 1;
    
    const WRITE_POST = 2;
    
    const DELETE_POST = 4;
    
    const DELETE_USER = 8;


    function getPermission();
    function isPermmitrd($permission);
    
    static function checkPermmission($userPermmission, $permmision);   // statyczne finkcja isnieje zawsze nawet gdy nie ma instncji klasy
    
}

?>
